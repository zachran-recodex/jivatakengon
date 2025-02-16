<nav class="flex flex-col flex-1">
    <ul role="list" class="flex flex-col flex-1 gap-y-6">
        <li>
            <h2 class="text-xs font-semibold leading-6 text-shark-400 uppercase">MENU</h2>
            <ul role="list" class="-mx-2 space-y-1">
                <!-- Static Navigation Links -->
                <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="flex items-center p-2 rounded-md gap-x-3">
                    <i
                        class="fa-solid fa-house @if (request()->routeIs('dashboard')) text-primary @else text-shark-950 @endif"></i>
                    Dashboard
                </x-nav-link>
            </ul>
        </li>

        <li>
            <h2 class="text-xs font-semibold leading-6 text-shark-400 uppercase">OTHERS</h2>

            <ul role="list" class="-mx-2 space-y-1">
                @role('super-admin')
                    <x-nav-link :href="route('manage-booking')" :active="request()->routeIs('manage-booking')" class="flex items-center p-2 rounded-md gap-x-3">
                        <i
                            class="fa-solid fa-book @if (request()->routeIs('manage-booking')) text-primary @else text-shark-950 @endif"></i>
                        Manage Booking
                    </x-nav-link>
                @endrole
            </ul>
        </li>
    </ul>
</nav>
