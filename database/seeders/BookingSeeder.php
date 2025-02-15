<?php

namespace Database\Seeders;

use App\Models\Booking;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Booking::create([
            'date' => '2024-12-18',
            'name' => 'Misna Azzura',
            'glamping' => [],
            'villa' => ['A'],
            'tent' => null,
            'total_tents' => 5,
            'dp' => 2800000,
            'transfer_date' => '2024-12-14',
            'note' => '',
        ]);

        Booking::create([
            'date' => '2024-12-18',
            'name' => 'Muhammad Wilqin',
            'glamping' => [],
            'villa' => [],
            'tent' => 3,
            'total_tents' => null,
            'dp' => 240000,
            'transfer_date' => '2024-12-17',
            'note' => '',
        ]);

        Booking::create([
            'date' => '2024-12-18',
            'name' => 'Maisura',
            'glamping' => [],
            'villa' => [],
            'tent' => 2,
            'total_tents' => null,
            'dp' => null,
            'transfer_date' => null,
            'note' => '',
        ]);

        Booking::create([
            'date' => '2024-12-18',
            'name' => 'M Yasir',
            'glamping' => [1],
            'villa' => [],
            'tent' => null,
            'total_tents' => null,
            'dp' => null,
            'transfer_date' => null,
            'note' => '',
        ]);

        Booking::create([
            'date' => '2024-12-18',
            'name' => 'Ziaul Syamsi',
            'glamping' => [2, 3],
            'villa' => [],
            'tent' => null,
            'total_tents' => null,
            'dp' => null,
            'transfer_date' => null,
            'note' => '',
        ]);

        Booking::create([
            'date' => '2024-12-19',
            'name' => 'Misna Azzura',
            'glamping' => [],
            'villa' => ['A'],
            'tent' => null,
            'total_tents' => 7,
            'dp' => null,
            'transfer_date' => null,
            'note' => '',
        ]);

        Booking::create([
            'date' => '2024-12-19',
            'name' => 'Jumarni',
            'glamping' => [1],
            'villa' => [],
            'tent' => 1,
            'total_tents' => null,
            'dp' => 280000,
            'transfer_date' => '2024-12-17',
            'note' => '',
        ]);

        Booking::create([
            'date' => '2024-12-19',
            'name' => 'M Azhar',
            'glamping' => [2, 3, 4, 5],
            'villa' => [],
            'tent' => null,
            'total_tents' => null,
            'dp' => 2000000,
            'transfer_date' => '2024-12-17',
            'note' => '',
        ]);

        Booking::create([
            'date' => '2024-12-19',
            'name' => 'Aji',
            'glamping' => [],
            'villa' => [],
            'tent' => 2,
            'total_tents' => null,
            'dp' => 160000,
            'transfer_date' => '2024-12-19',
            'note' => '',
        ]);

        Booking::create([
            'date' => '2024-12-19',
            'name' => 'Misra',
            'glamping' => [],
            'villa' => [],
            'tent' => 1,
            'total_tents' => null,
            'dp' => null,
            'transfer_date' => null,
            'note' => '',
        ]);

        Booking::create([
            'date' => '2024-12-19',
            'name' => 'Agam',
            'glamping' => [],
            'villa' => [],
            'tent' => 2,
            'total_tents' => null,
            'dp' => null,
            'transfer_date' => null,
            'note' => '',
        ]);

        Booking::create([
            'date' => '2024-12-19',
            'name' => 'Yana',
            'glamping' => [],
            'villa' => [],
            'tent' => 1,
            'total_tents' => null,
            'dp' => null,
            'transfer_date' => null,
            'note' => '',
        ]);

        Booking::create([
            'date' => '2024-12-20',
            'name' => 'Ilma Rumi',
            'glamping' => [],
            'villa' => [],
            'tent' => 2,
            'total_tents' => 12,
            'dp' => null,
            'transfer_date' => null,
            'note' => '2 Kupon + 2 SB',
        ]);

        Booking::create([
            'date' => '2024-12-20',
            'name' => 'Roni',
            'glamping' => [],
            'villa' => [],
            'tent' => 2,
            'total_tents' => null,
            'dp' => null,
            'transfer_date' => null,
            'note' => '2 Kupon + 1 SB',
        ]);

        Booking::create([
            'date' => '2024-12-20',
            'name' => 'Mila PDAM',
            'glamping' => [],
            'villa' => ['A', 'B'],
            'tent' => null,
            'total_tents' => null,
            'dp' => 1000000,
            'transfer_date' => '2024-12-20',
            'note' => 'DP dibuat TF',
        ]);

        Booking::create([
            'date' => '2024-12-20',
            'name' => 'M Tohir',
            'glamping' => [],
            'villa' => [],
            'tent' => 1,
            'total_tents' => null,
            'dp' => 150000,
            'transfer_date' => '2024-12-15',
            'note' => '',
        ]);

        Booking::create([
            'date' => '2024-12-20',
            'name' => 'Jarniati',
            'glamping' => [],
            'villa' => [],
            'tent' => 4,
            'total_tents' => null,
            'dp' => 600000,
            'transfer_date' => '2024-12-20',
            'note' => 'DP dibuat TF',
        ]);

        Booking::create([
            'date' => '2024-12-20',
            'name' => 'Annisa Geubrina',
            'glamping' => [1],
            'villa' => [],
            'tent' => 2,
            'total_tents' => null,
            'dp' => 600000,
            'transfer_date' => '2024-12-17',
            'note' => '1 SB + 1 Arang',
        ]);

        Booking::create([
            'date' => '2024-12-20',
            'name' => 'M Azhar',
            'glamping' => [2, 3, 4, 5],
            'villa' => [],
            'tent' => null,
            'total_tents' => null,
            'dp' => null,
            'transfer_date' => null,
            'note' => '',
        ]);

        Booking::create([
            'date' => '2024-12-20',
            'name' => 'Saskia',
            'glamping' => [],
            'villa' => ['C'],
            'tent' => null,
            'total_tents' => null,
            'dp' => 1000000,
            'transfer_date' => '2024-12-17',
            'note' => '',
        ]);
    }
}
