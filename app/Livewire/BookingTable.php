<?php

namespace App\Livewire;

use Carbon\Carbon;
use App\Models\Booking;
use Livewire\Component;
use Carbon\CarbonPeriod;

class BookingTable extends Component
{
    public function render()
    {
        $today = Carbon::now();
        $startDate = $today->copy()->subDays(3);
        $endDate = $today->copy()->endOfMonth();

        // Generate all dates in the range
        $period = CarbonPeriod::create($startDate, $endDate);

        // Get bookings and index them by date
        $bookings = Booking::whereBetween('date', [$startDate, $endDate])
            ->orderBy('date')
            ->get()
            ->groupBy(function($booking) {
                return $booking->date->format('Y-m-d');
            });

        return view('livewire.booking-table', [
            'dateRange' => $period,
            'bookings' => $bookings,
            'currentMonth' => $today->format('F Y')
        ]);
    }
}
