<x-dashboard-layout>
    <div class="space-y-6">
        <!-- Page Header -->
        <div class="sm:flex sm:items-center sm:justify-between">
            <div>
                <h1 class="text-2xl font-semibold text-shark-950">Booking Table</h1>
            </div>
            <nav class="text-sm font-medium text-shark-500" aria-label="breadcrumb">
                <ol class="flex flex-wrap items-center gap-2">
                    <li class="text-primary font-bold" aria-current="page">Table</li>
                </ol>
            </nav>
        </div>

        <!-- Table Container -->
        <livewire:booking-table />
    </div>
</x-dashboard-layout>
