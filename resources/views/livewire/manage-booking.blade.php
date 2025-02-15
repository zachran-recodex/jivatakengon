<div class="space-y-6">
    <!-- Page Header -->
    <div class="sm:flex sm:items-center sm:justify-between">
        <div>
            <h1 class="text-2xl font-semibold text-shark-950">Manage Booking</h1>
        </div>
        <button wire:click="create()"
            class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-primary rounded-md hover:bg-primary/80 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary">
            <i class="fa-solid fa-plus mr-2"></i>
            Add New Booking
        </button>
    </div>

    <div class="bg-white shadow-sm border border-shark-100">

        <div class="overflow-x-auto">
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
                                    <td class="p-2 border border-black" rowspan="{{ $bookings->count() }}">
                                        {{ \Carbon\Carbon::parse($date)->format('(D) d/M/y') }}</td>
                                @endif
                                <td class="p-2 border border-black text-left">{{ $booking->name }}</td>

                                {{-- Glamping Keong 1-5 --}}
                                @for ($i = 1; $i <= 5; $i++)
                                    @php
                                        $glampingArray = collect($bookings->pluck('glamping'))->flatten()->toArray(); // Pastikan jadi array numerik
                                        $isBookedByThisPerson = in_array($i, $booking->glamping ?? []);
                                        $isBookedByOthers = in_array($i, $glampingArray);
                                        $status = $isBookedByThisPerson
                                            ? 'bg-red-500'
                                            : ($isBookedByOthers
                                                ? 'bg-black'
                                                : 'bg-green-500');
                                    @endphp
                                    <td class="p-2 border border-black {{ $status }}">
                                        {{ $isBookedByThisPerson ? 'X' : '' }}
                                    </td>
                                @endfor

                                {{-- Villa A, B, C --}}
                                @foreach (['A', 'B', 'C'] as $villa)
                                    @php
                                        $isBookedByThisPerson = in_array($villa, $booking->villa ?? []);
                                        $isBookedByOthers = $bookings
                                            ->where('villa', '!=', null)
                                            ->pluck('villa')
                                            ->flatten()
                                            ->contains($villa);
                                        $status = $isBookedByThisPerson
                                            ? 'bg-red-500'
                                            : ($isBookedByOthers
                                                ? 'bg-black'
                                                : 'bg-green-500');
                                    @endphp
                                    <td class="p-2 border border-black {{ $status }}">
                                        {{ $isBookedByThisPerson ? 'X' : '' }}
                                    </td>
                                @endforeach

                                {{-- TENT --}}
                                <td class="p-2 border border-black {{ $booking->tent !== null ? 'bg-blue-400' : '' }}">
                                    {{ $booking->tent !== null ? $booking->tent : '' }}
                                    <!-- Tampilkan kosong jika null -->
                                </td>

                                {{-- Total Tenda --}}
                                <td
                                    class="p-2 border border-black {{ $booking->total_tents !== null ? 'bg-green-400' : 'bg-black' }}">
                                    {{ $booking->total_tents !== null ? $booking->total_tents : '' }}
                                    <!-- Tampilkan kosong jika null -->
                                </td>

                                {{-- DP --}}
                                <td class="p-2 border border-black">
                                    {{ $booking->dp !== null ? number_format($booking->dp, 0, ',', '.') : '' }}
                                    <!-- Tampilkan kosong jika null -->
                                </td>

                                {{-- Tanggal Transfer --}}
                                <td class="p-2 border border-black">
                                    {{ $booking->transfer_date !== null ? \Carbon\Carbon::parse($booking->transfer_date)->format('d/M/Y') : '' }}
                                    <!-- Tampilkan kosong jika null -->
                                </td>

                                {{-- Catatan --}}
                                <td class="p-2 border border-black">{{ $booking->note }}</td>
                            </tr>
                        @endforeach
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal -->
    <x-modal wire:model="showingFormModal" max-width="2xl">
        <form wire:submit.prevent="store">
            <div class="px-6 py-4">
                <div class="text-lg font-medium text-gray-900">
                    {{ $id ? 'Edit Booking' : 'Create Booking' }}
                </div>

                @if ($errors->has('booking_conflict'))
                    <div class="text-red-500 text-sm">
                        {{ $errors->first('booking_conflict') }}
                    </div>
                @endif

                <div class="mt-4 grid grid-cols-2 gap-4">

                    <!-- Date -->
                    <div class="mb-4">
                        <label for="date" class="block text-sm font-medium text-gray-700">Date</label>
                        <input type="date" wire:model.defer="date" id="date"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-primary focus:ring-primary sm:text-sm">
                        @error('date')
                            <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Name -->
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                        <input type="text" wire:model.defer="name" id="name"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-primary focus:ring-primary sm:text-sm">
                        @error('name')
                            <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Glamping (Checkbox) -->
                    <div class="mb-4 col-span-2">
                        <label class="block text-sm font-medium text-gray-700">Glamping</label>
                        <div class="mt-1 grid grid-cols-5 gap-2">
                            @foreach ([1 => '1', 2 => '2', 3 => '3', 4 => '4', 5 => '5'] as $value => $label)
                                <label class="flex items-center space-x-2">
                                    <input type="checkbox" wire:model.defer="glamping" value="{{ $value }}"
                                        class="rounded border-gray-300 text-primary focus:ring-primary">
                                    <span class="text-sm text-gray-700">{{ $label }}</span>
                                </label>
                            @endforeach
                        </div>
                        @error('glamping')
                            <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Villa (Checkbox) -->
                    <div class="mb-4 col-span-2">
                        <label class="block text-sm font-medium text-gray-700">Villa</label>
                        <div class="mt-1 grid grid-cols-3 gap-2">
                            @foreach (['A' => 'A', 'B' => 'B', 'C' => 'C'] as $value => $label)
                                <label class="flex items-center space-x-2">
                                    <input type="checkbox" wire:model.defer="villa" value="{{ $value }}"
                                        class="rounded border-gray-300 text-primary focus:ring-primary">
                                    <span class="text-sm text-gray-700">{{ $label }}</span>
                                </label>
                            @endforeach
                        </div>
                        @error('villa')
                            <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Tent -->
                    <div class="mb-4">
                        <label for="tent" class="block text-sm font-medium text-gray-700">Tent</label>
                        <input type="number" wire:model.defer="tent" id="tent"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-primary focus:ring-primary sm:text-sm">
                        @error('tent')
                            <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Total Tent -->
                    <div class="mb-4">
                        <label for="total_tents" class="block text-sm font-medium text-gray-700">Total Tenda</label>
                        <input type="number" wire:model.defer="total_tents" id="total_tents"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-primary focus:ring-primary sm:text-sm">
                        @error('total_tents')
                            <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- DP -->
                    <div class="mb-4">
                        <label for="dp" class="block text-sm font-medium text-gray-700">Down Payment
                            (DP)</label>
                        <input type="number" wire:model.defer="dp" id="dp"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-primary focus:ring-primary sm:text-sm">
                        @error('dp')
                            <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Transfer Date -->
                    <div class="mb-4">
                        <label for="transfer_date" class="block text-sm font-medium text-gray-700">Transfer
                            Date</label>
                        <input type="date" wire:model.defer="transfer_date" id="transfer_date"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-primary focus:ring-primary sm:text-sm">
                        @error('transfer_date')
                            <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Notes -->
                    <div class="mb-4 col-span-2">
                        <label for="note" class="block text-sm font-medium text-gray-700">Note</label>
                        <textarea wire:model.defer="note" id="note"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-primary focus:ring-primary sm:text-sm"></textarea>
                        @error('note')
                            <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <div class="flex justify-end gap-4 px-6 py-4 bg-gray-100">
                <button type="button" wire:click="$set('showingFormModal', false)"
                    class="inline-flex justify-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md hover:bg-gray-50">
                    Cancel
                </button>
                <button type="submit"
                    class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-primary rounded-md hover:bg-primary/80">
                    Save
                </button>
            </div>
        </form>
    </x-modal>

</div>
