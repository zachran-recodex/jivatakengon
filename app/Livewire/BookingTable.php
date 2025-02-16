<?php

namespace App\Livewire;

use Carbon\Carbon;
use App\Models\Booking;
use Livewire\Component;
use Carbon\CarbonPeriod;

class BookingTable extends Component
{
    /**
     * Render komponen untuk menampilkan tabel booking.
     */
    public function render()
    {
        // Tanggal hari ini
        $today = Carbon::now();

        // Tanggal mulai: 3 hari sebelum hari ini
        $startDate = $today->copy()->subDays(3);

        // Tanggal akhir: akhir bulan ini
        $endDate = $today->copy()->endOfMonth();

        // Generate semua tanggal dalam rentang dari $startDate hingga $endDate
        $period = CarbonPeriod::create($startDate, $endDate);

        // Ambil data booking dalam rentang tanggal yang ditentukan
        $bookings = Booking::whereBetween('date', [$startDate, $endDate])
            ->orderBy('date') // Urutkan berdasarkan tanggal
            ->get()
            ->groupBy(function($booking) {
                // Kelompokkan booking berdasarkan tanggal dalam format 'Y-m-d'
                return $booking->date->format('Y-m-d');
            });

        // Return view dengan data yang diperlukan
        return view('livewire.booking-table', [
            'dateRange' => $period, // Rentang tanggal yang akan ditampilkan
            'bookings' => $bookings, // Data booking yang sudah dikelompokkan
            'currentMonth' => $today->format('F Y') // Bulan dan tahun saat ini (contoh: "October 2023")
        ]);
    }
}
