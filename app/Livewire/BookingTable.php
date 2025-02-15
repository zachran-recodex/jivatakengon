<?php

namespace App\Livewire;

use App\Models\Booking;
use Livewire\Component;

class BookingTable extends Component
{
    public $bookings;

    public function mount()
    {
        // Ambil semua data booking yang ada di database
        $this->bookings = Booking::orderBy('date')->get();
    }

    public function render()
    {
        return view('livewire.booking-table', [
            'groupedBookings' => $this->bookings->groupBy('date')
        ]);
    }
}
