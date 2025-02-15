<div class="bg-white shadow-sm border border-shark-100 overflow-auto">
    <table class="w-full border-collapse border border-black text-sm text-center">
        <thead>
        <tr class="bg-shark-200 text-shark-900 border border-black">
            <th class="p-2 border border-black bg-sky-400" rowspan="2">Tanggal</th>
            <th class="p-2 border border-black" rowspan="2">Atas Nama</th>
            <th class="p-2 border border-black text-center bg-yellow-400" colspan="5">Glamping Keong</th>
            <th class="p-2 border border-black text-center bg-orange-400" colspan="3">Villa</th>
            <th class="p-2 border border-black bg-pink-400" rowspan="2">TENT</th>
            <th class="p-2 border border-black bg-pink-400" rowspan="2">Total Tenda</th>
            <th class="p-2 border border-black" rowspan="2">DP</th>
            <th class="p-2 border border-black" rowspan="2">Tanggal Transfer</th>
            <th class="p-2 border border-black" rowspan="2">Catatan</th>
        </tr>
        <tr class="bg-shark-200 text-shark-900 border border-black">
            @for ($i = 1; $i <= 5; $i++)
                <th class="p-2 border border-black bg-yellow-400">{{ $i }}</th>
            @endfor
            @foreach (['A', 'B', 'C'] as $villa)
                <th class="p-2 border border-black bg-orange-400">{{ $villa }}</th>
            @endforeach
        </tr>
        </thead>
        <tbody>
        @foreach ($groupedBookings as $date => $bookings)
            @foreach ($bookings as $index => $booking)
                <tr>
                    @if ($index == 0)
                        <td class="p-2 border border-black" rowspan="{{ $bookings->count() }}">{{ \Carbon\Carbon::parse($date)->format('(D) d/M/y') }}</td>
                    @endif
                    <td class="p-2 border border-black text-left">{{ $booking->name }}</td>

                    {{-- Glamping Keong 1-5 --}}
                    @for ($i = 1; $i <= 5; $i++)
                        @php
                            $glampingArray = collect($bookings->pluck('glamping'))->flatten()->toArray(); // Pastikan jadi array numerik
                            $isBookedByThisPerson = in_array($i, $booking->glamping ?? []);
                            $isBookedByOthers = in_array($i, $glampingArray);
                            $status = $isBookedByThisPerson ? 'bg-red-500' : ($isBookedByOthers ? 'bg-black' : 'bg-green-500');
                        @endphp
                        <td class="p-2 border border-black {{ $status }}">
                            {{ $isBookedByThisPerson ? 'X' : '' }}
                        </td>
                    @endfor

                    {{-- Villa A, B, C --}}
                    @foreach (['A', 'B', 'C'] as $villa)
                        @php
                            $isBookedByThisPerson = in_array($villa, $booking->villa ?? []);
                            $isBookedByOthers = $bookings->where('villa', '!=', null)->pluck('villa')->flatten()->contains($villa);
                            $status = $isBookedByThisPerson ? 'bg-red-500' : ($isBookedByOthers ? 'bg-black' : 'bg-green-500');
                        @endphp
                        <td class="p-2 border border-black {{ $status }}">
                            {{ $isBookedByThisPerson ? 'X' : '' }}
                        </td>
                    @endforeach

                    {{-- TENT --}}
                    <td class="p-2 border border-black {{ $booking->tent !== null ? 'bg-blue-400' : '' }}">
                        {{ $booking->tent !== null ? $booking->tent : '' }} <!-- Tampilkan kosong jika null -->
                    </td>

                    {{-- Total Tenda --}}
                    <td class="p-2 border border-black {{ $booking->total_tents !== null ? 'bg-green-400' : 'bg-black' }}">
                        {{ $booking->total_tents !== null ? $booking->total_tents : '' }} <!-- Tampilkan kosong jika null -->
                    </td>

                    {{-- DP --}}
                    <td class="p-2 border border-black">
                        {{ $booking->dp !== null ? number_format($booking->dp, 0, ',', '.') : '' }} <!-- Tampilkan kosong jika null -->
                    </td>

                    {{-- Tanggal Transfer --}}
                    <td class="p-2 border border-black">
                        {{ $booking->transfer_date !== null ? \Carbon\Carbon::parse($booking->transfer_date)->format('d/M/Y') : '' }} <!-- Tampilkan kosong jika null -->
                    </td>

                    {{-- Catatan --}}
                    <td class="p-2 border border-black">{{ $booking->note }}</td>
                </tr>
            @endforeach
        @endforeach
        </tbody>
    </table>
</div>
