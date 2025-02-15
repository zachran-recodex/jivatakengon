<?php

namespace App\Livewire;

use App\Models\Booking;
use Livewire\Component;
use Carbon\Carbon;

class ManageBooking extends Component
{
    public $id, $name, $date, $glamping = [], $villa = [], $tent, $total_tents, $dp, $transfer_date, $note;
    public $showingFormModal = false;
    public $selectedMonth;
    public $confirmingBookingDeletion = false;
    public $bookingToDelete = null;


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
        $bookings = Booking::query()
            ->whereYear('date', Carbon::parse($this->selectedMonth)->year)
            ->whereMonth('date', Carbon::parse($this->selectedMonth)->month)
            ->orderBy('date')
            ->get()
            ->groupBy('date');

        // Generate list bulan untuk dropdown (12 bulan ke depan dan 12 bulan ke belakang)
        $months = collect();
        for ($i = -12; $i <= 12; $i++) {
            $date = Carbon::now()->addMonths($i)->startOfMonth();
            $months->push([
                'value' => $date->format('Y-m'),
                'label' => $date->format('F Y')
            ]);
        }

        return view('livewire.manage-booking', [
            'groupedBookings' => $bookings,
            'months' => $months
        ]);
    }

    /**
     * Membuka modal form untuk create booking.
     */
    public function create()
    {
        $this->resetInputFields();
        $this->showingFormModal = true;
    }

    /**
     * Menyimpan atau memperbarui booking dengan validasi tambahan.
     */
    public function store()
    {
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

        // Ambil booking pada tanggal yang dipilih
        $existingBookings = Booking::where('date', $this->date)->get();

        // Cek Glamping yang sudah dipesan
        $bookedGlamping = $existingBookings->pluck('glamping')->flatten()->unique()->toArray();
        $conflictGlamping = array_intersect($this->glamping, $bookedGlamping);

        // Cek Villa yang sudah dipesan
        $bookedVilla = $existingBookings->pluck('villa')->flatten()->unique()->toArray();
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
        Booking::updateOrCreate(
            ['id' => $this->id ?? null],
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

        session()->flash('message', $this->id ? 'Booking updated successfully.' : 'Booking created successfully.');

        $this->resetInputFields();
        $this->showingFormModal = false;
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
        $this->glamping = is_array($booking->glamping) ? $booking->glamping : json_decode($booking->glamping, true) ?? [];
        $this->villa = is_array($booking->villa) ? $booking->villa : json_decode($booking->villa, true) ?? [];
        $this->tent = $booking->tent;
        $this->total_tents = $booking->total_tents;
        $this->dp = $booking->dp;
        $this->transfer_date = $booking->transfer_date;
        $this->note = $booking->note;

        $this->showingFormModal = true;
    }

    public function confirmBookingDeletion($id)
    {
        $this->bookingToDelete = Booking::find($id);
        $this->confirmingBookingDeletion = true;
    }

    public function destroy()
    {
        if ($this->bookingToDelete) {
            $this->bookingToDelete->delete();
            session()->flash('message', 'Booking deleted successfully.');
            $this->confirmingBookingDeletion = false;
            $this->bookingToDelete = null;
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
}
