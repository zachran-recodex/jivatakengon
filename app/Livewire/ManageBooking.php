<?php

namespace App\Livewire;

use App\Models\Booking;
use Livewire\Component;
use Carbon\Carbon;

class ManageBooking extends Component
{
    // Properti untuk menyimpan data booking dan state komponen
    public $id, $name, $date, $glamping = [], $villa = [], $tent, $total_tents, $dp, $transfer_date, $note;
    public $showingFormModal = false; // Menampilkan atau menyembunyikan modal form
    public $selectedMonth; // Bulan yang dipilih untuk menampilkan booking
    public $confirmingBookingDeletion = false; // Menampilkan konfirmasi penghapusan booking
    public $bookingToDelete = null; // Booking yang akan dihapus

    // Method yang dijalankan saat komponen di-mount (diinisialisasi)
    public function mount()
    {
        // Set default bulan saat ini
        $this->selectedMonth = Carbon::now()->format('Y-m');
    }

    /**
     * Menampilkan data booking dalam tabel berdasarkan bulan yang dipilih.
     */
    public function render()
    {
        // Ambil data booking berdasarkan tahun dan bulan yang dipilih
        $bookings = Booking::query()
            ->whereYear('date', Carbon::parse($this->selectedMonth)->year)
            ->whereMonth('date', Carbon::parse($this->selectedMonth)->month)
            ->orderBy('date')
            ->get()
            ->groupBy('date'); // Kelompokkan booking berdasarkan tanggal

        // Generate list bulan untuk dropdown (12 bulan ke depan dan 3 bulan ke belakang)
        $months = collect();
        for ($i = -3; $i <= 12; $i++) {
            $date = Carbon::now()->addMonths($i)->startOfMonth();
            $months->push([
                'value' => $date->format('Y-m'),
                'label' => $date->format('F Y')
            ]);
        }

        // Return view dengan data yang diperlukan
        return view('livewire.manage-booking', [
            'groupedBookings' => $bookings,
            'months' => $months
        ]);
    }

    /**
     * Membuka modal form untuk membuat booking baru.
     */
    public function create()
    {
        $this->resetInputFields(); // Reset input fields
        $this->showingFormModal = true; // Tampilkan modal form
    }

    /**
     * Menyimpan atau memperbarui booking dengan validasi tambahan.
     */
    public function store()
    {
        // Validasi input data
        $this->validate([
            'name' => 'required|string|max:255',
            'date' => 'required|date',
            'glamping' => 'array',
            'villa' => 'array',
            'tent' => 'nullable|integer',
            'total_tents' => 'nullable|integer',
            'dp' => 'nullable|numeric|min:0',
            'transfer_date' => 'nullable|date',
            'note' => 'nullable|string',
        ]);

        // Pastikan array glamping dan villa diinisialisasi
        $this->glamping = $this->glamping ?: [];
        $this->villa = $this->villa ?: [];

        try {
            // Ambil booking pada tanggal yang dipilih, kecuali booking yang sedang diedit
            $existingBookings = Booking::where('date', $this->date)
                ->when($this->id, function($query) {
                    return $query->where('id', '!=', $this->id);
                })
                ->get();

            // Cek Glamping yang sudah dipesan
            $bookedGlamping = $existingBookings->pluck('glamping')
                ->flatten()
                ->filter()
                ->unique()
                ->toArray();
            $conflictGlamping = array_intersect($this->glamping, $bookedGlamping);

            // Cek Villa yang sudah dipesan
            $bookedVilla = $existingBookings->pluck('villa')
                ->flatten()
                ->filter()
                ->unique()
                ->toArray();
            $conflictVilla = array_intersect($this->villa, $bookedVilla);

            // Jika ada konflik, buat pesan error yang lengkap
            if (!empty($conflictGlamping) || !empty($conflictVilla)) {
                $errorMessage = 'Pemesanan gagal! ';

                if (!empty($conflictGlamping)) {
                    $errorMessage .= 'Glamping ' . implode(', ', $conflictGlamping) . ' sudah dipesan. ';
                }

                if (!empty($conflictVilla)) {
                    $errorMessage .= 'Villa ' . implode(', ', $conflictVilla) . ' sudah dipesan.';
                }

                $this->addError('booking_conflict', $errorMessage);
                return;
            }

            // Simpan booking jika tidak ada konflik
            $booking = Booking::updateOrCreate(
                ['id' => $this->id],
                [
                    'name' => $this->name,
                    'date' => $this->date,
                    'glamping' => $this->glamping,
                    'villa' => $this->villa,
                    'tent' => $this->tent,
                    'total_tents' => $this->total_tents,
                    'dp' => $this->dp,
                    'transfer_date' => $this->transfer_date,
                    'note' => $this->note,
                ]
            );

            // Set flash message berdasarkan operasi yang dilakukan
            $message = $this->id
                ? 'Booking berhasil diperbarui.'
                : 'Booking berhasil dibuat.';

            session()->flash('message', $message);

            // Reset form dan tutup modal
            $this->resetInputFields();
            $this->showingFormModal = false;

        } catch (\Exception $e) {
            // Tangani error yang mungkin terjadi
            $this->addError('booking_error', 'Terjadi kesalahan saat menyimpan booking: ' . $e->getMessage());
            return;
        }
    }

    /**
     * Menampilkan data booking yang akan diedit.
     */
    public function edit($id)
    {
        $booking = Booking::findOrFail($id);
        $this->id = $booking->id;
        $this->name = $booking->name;
        $this->date = $booking->date;

        // Penanganan array yang lebih robust
        try {
            $this->glamping = is_array($booking->glamping) ? $booking->glamping :
                (is_string($booking->glamping) ? json_decode($booking->glamping, true) : []);
            $this->villa = is_array($booking->villa) ? $booking->villa :
                (is_string($booking->villa) ? json_decode($booking->villa, true) : []);
        } catch (\JsonException $e) {
            $this->glamping = [];
            $this->villa = [];
        }

        $this->tent = $booking->tent;
        $this->total_tents = $booking->total_tents;
        $this->dp = $booking->dp;
        $this->transfer_date = $booking->transfer_date;
        $this->note = $booking->note;

        $this->showingFormModal = true; // Tampilkan modal form
    }

    /**
     * Menampilkan konfirmasi penghapusan booking.
     */
    public function confirmBookingDeletion($id)
    {
        $this->bookingToDelete = Booking::find($id);
        $this->confirmingBookingDeletion = true; // Tampilkan modal konfirmasi penghapusan
    }

    /**
     * Menghapus booking yang dipilih.
     */
    public function destroy()
    {
        if ($this->bookingToDelete) {
            $this->bookingToDelete->delete();
            session()->flash('message', 'Booking deleted successfully.');
            $this->confirmingBookingDeletion = false; // Sembunyikan modal konfirmasi penghapusan
            $this->bookingToDelete = null; // Reset booking yang akan dihapus
        }
    }

    /**
     * Mereset input form setelah digunakan.
     */
    private function resetInputFields()
    {
        $this->id = null;
        $this->name = null;
        $this->date = null;
        $this->glamping = [];
        $this->villa = [];
        $this->tent = null;
        $this->total_tents = null;
        $this->dp = null;
        $this->transfer_date = null;
        $this->note = null;
    }

    /**
     * Menutup modal dan mereset form.
     */
    public function closeModal()
    {
        $this->confirmingBookingDeletion = false; // Sembunyikan modal delete
        $this->showingFormModal = false; // Sembunyikan modal form
        $this->resetInputFields(); // Reset input fields
        $this->resetErrorBag(); // Reset error bag
        $this->resetValidation(); // Reset validasi
    }
}
