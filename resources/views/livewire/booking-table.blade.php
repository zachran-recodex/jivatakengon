<div class="bg-white shadow-sm border border-shark-100">
    <div class="overflow-x-auto">
        <table class="w-full border-collapse border border-black text-sm text-center">
            <thead>
                <tr class="bg-primary border border-black">
                    <th class="p-2 border border-black bg-blue-200" style="width: 120px;">Weekend</th>
                    <th colspan="3" class="p-2 border border-black bg-yellow-500">
                        KUNING = KOSONG<br>(HARGA KHUSUS, KONTAK ADMIN)
                    </th>
                    <th colspan="3" class="p-2 border border-black bg-green-500">HIJAU = KOSONG</th>
                    <th colspan="3" class="p-2 border border-black bg-red-500">X = SUDAH DI BOOK</th>
                </tr>
                <tr class="bg-primary border text-white border-black">
                    <th colspan="10" class="p-2 border border-black text-xl">
                        {{ $currentMonth }}
                    </th>
                </tr>
                <tr class="bg-shark-200 text-shark-900 border border-black">
                    <th class="p-2 border border-black" rowspan="2" style="width: 120px;">Tanggal</th>
                    <th class="p-2 border border-black text-center bg-yellow-300" colspan="5">Glamping Keong</th>
                    <th class="p-2 border border-black text-center bg-orange-300" colspan="3">Villa</th>
                    <th class="p-2 border border-black bg-pink-300" rowspan="2" style="width: 60px;">Tenda
                        Booked<br>Max 60 Unit
                    </th>
                </tr>
                <tr class="bg-shark-200 text-shark-900 border border-black">
                    @for ($i = 1; $i <= 5; $i++)
                        <th class="p-2 border border-black bg-yellow-300" style="width: 60px;">{{ $i }}</th>
                    @endfor
                    @foreach (['A', 'B', 'C'] as $villa)
                        <th class="p-2 border border-black bg-orange-300" style="width: 60px;">{{ $villa }}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @foreach ($dateRange as $date)
                    <tr>
                        @php
                            $dateStr = $date->format('Y-m-d');
                            $isWeekend = in_array($date->dayOfWeek, [5, 6, 0]); // 5 = Jumat, 6 = Sabtu, 0 = Minggu
                            $isToday = $date->isToday();
                            $dayBookings = $bookings[$dateStr] ?? collect([]);

                            // Get all booked glamping and villa units for this date
                            $bookedGlamping = $dayBookings->pluck('glamping')->flatten()->toArray();
                            $bookedVilla = $dayBookings->pluck('villa')->flatten()->toArray();

                            // Calculate total tents for the day
                            $totalTents = $dayBookings->sum('tent');
                        @endphp

                        <td class="p-2 border border-black {{ $isWeekend ? 'bg-blue-200' : '' }} {{ $isToday ? 'relative font-bold' : '' }}"
                            style="width: 120px;">
                            {{ $date->format('(D) d/m/y') }}
                            @if ($isToday)
                                <div
                                    class="absolute top-0 right-0 w-0 h-0 border-t-[20px] border-t-red-500 border-l-[20px] border-l-transparent">
                                </div>
                            @endif
                        </td>

                        {{-- Glamping Keong 1-5 --}}
                        @for ($i = 1; $i <= 5; $i++)
                            @php
                                $isBooked = in_array($i, $bookedGlamping);
                                $status = $isBooked ? 'bg-red-500' : 'bg-green-500';
                            @endphp
                            <td class="p-2 border border-black {{ $status }}" style="width: 60px;">
                                {{ $isBooked ? 'X' : '' }}
                            </td>
                        @endfor

                        {{-- Villa A, B, C --}}
                        @foreach (['A', 'B', 'C'] as $villa)
                            @php
                                $isBooked = in_array($villa, $bookedVilla);
                                $status = $isBooked ? 'bg-red-500' : 'bg-green-500';
                            @endphp
                            <td class="p-2 border border-black {{ $status }}" style="width: 60px;">
                                {{ $isBooked ? 'X' : '' }}
                            </td>
                        @endforeach

                        {{-- Tent --}}
                        <td class="p-2 border border-black {{ $totalTents > 0 ? 'bg-blue-400' : '' }}"
                            style="width: 60px;">
                            {{ $totalTents > 0 ? $totalTents : '' }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
