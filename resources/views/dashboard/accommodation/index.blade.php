<x-dashboard-layout>
    <div class="py-12">
        <div class="w-full mx-auto sm:px-6 lg:px-8">
                <div class="pb-4 flex justify-between">
                    <x-dashboard-breadcrumb :links="[
                        ['label' => 'Dashboard', 'url' => route('dashboard')],
                        ['label' => 'Accommodation']
                    ]" />

                    <a href="{{ route('admin.accommodation.create') }}" class="border border-gray-200 rounded-lg bg-blue-500 hover:bg-blue-700 text-white font-bold py-3 px-5">
                        Add Accommodation
                    </a>
                </div>

            <div class="bg-gray-50 border border-gray-200 rounded-lg overflow-hidden">
                <table class="min-w-full">
                    <thead class="bg-gray-200">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Title</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Subtitle</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Image</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Action</th>
                    </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                    @forelse($accommodations as $accommodation)
                        <tr>
                            <td class="px-6 py-4">{{ $accommodation->title }}</td>
                            <td class="px-6 py-4 text-wrap max-w-[300px]">{{ $accommodation->subtitle }}</td>
                            <td class="px-6 py-4">
                                @if($accommodation->image)
                                    <img src="{{ asset('storage/' . $accommodation->image) }}" alt="{{ $accommodation->title }}" class="w-16 h-16 border object-cover rounded">
                                @else
                                    <span class="text-gray-500">No Image</span>
                                @endif
                            </td>
                            <td class="px-6 py-4">
                                <span class="px-3 py-1 rounded-full text-white {{ $accommodation->is_active ? 'bg-green-500' : 'bg-red-500' }}">
                                    {{ $accommodation->is_active ? 'Active' : 'Disable' }}
                                </span>
                            </td>
                            <td class="px-6 py-4">
                                <a href="{{ route('admin.accommodation.edit', $accommodation) }}"
                                   class="text-blue-600 hover:text-blue-900 mr-3">Edit</a>
                                <form action="{{ route('admin.accommodation.destroy', $accommodation) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                            class="text-red-600 hover:text-red-900"
                                            onclick="return confirm('Are you sure you want to delete?')">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-6 py-4 text-center text-gray-500">
                                No Accommodation available.
                            </td>
                        </tr>
                    @endforelse
                </table>

                <div class="mt-6 p-6 border-t border-gray-200">
                    {{ $accommodations->links() }}
                </div>
            </div>
        </div>
    </div>
</x-dashboard-layout>