<x-dashboard-layout>
    <div class="py-12">
        <div class="w-full mx-auto sm:px-6 lg:px-8">
            <div class="pb-4 flex justify-between">
                <x-dashboard-breadcrumb :links="[
                    ['label' => 'Dashboard', 'url' => route('dashboard')],
                    ['label' => 'Facility', 'url' => route('admin.facility.index')],
                    ['label' => $facility->title],
                    ['label' => 'Edit']
                ]" />

                <a href="{{ route('admin.facility.index') }}" class="border border-gray-200 rounded-lg bg-blue-500 hover:bg-blue-700 text-white font-bold py-3 px-5">
                    Back
                </a>
            </div>

            <div class="mx-auto bg-gray-50 border border-gray-200 rounded-lg overflow-hidden">
                <div class="px-6 py-4">
                    @if($errors->any())
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('admin.facility.update', $facility) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-4 flex items-center justify-between gap-4">
                            <div class="w-full">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
                                    Title
                                </label>
                                <input type="text"
                                       name="title"
                                       id="title"
                                       class="appearance-none border border-gray-200 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                       value="{{ old('title', $facility->title) }}"
                                       required>
                            </div>

                            <div class="w-full">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="description">
                                    Subtitle
                                </label>
                                <input type="text"
                                       name="subtitle"
                                       id="subtitle"
                                       class="appearance-none border border-gray-200 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                       value="{{ old('subtitle', $facility->subtitle) }}"
                                       required>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2">
                                Choose an Icon
                            </label>
                            <div class="grid grid-cols-6 gap-4">
                                @foreach ($icons as $icon)
                                    <label class="cursor-pointer">
                                        <!-- Radio button hidden -->
                                        <input
                                            type="radio"
                                            name="icon"
                                            value="{{ $icon }}"
                                            class="hidden peer"
                                            {{ old('icon', $facility->icon) === $icon ? 'checked' : '' }}
                                        >
                                        <!-- Icon display -->
                                        <div
                                            class="border border-gray-200 rounded-lg p-4 flex flex-col items-center transition
                                            hover:bg-gray-100 peer-checked:bg-blue-200 peer-checked:border-blue-500">
                                            <i class="{{ $icon }} text-4xl mb-2 {{ old('icon', $facility->icon) === $icon ? 'text-blue-500' : 'text-gray-600' }}"></i>
                                            <span class="text-xs text-center">{{ $icon }}</span>
                                        </div>
                                    </label>
                                @endforeach
                            </div>
                        </div>

                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="is_active">
                                Status
                            </label>
                            <select name="is_active"
                                    id="is_active"
                                    class="appearance-none border border-gray-200 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    required>
                                <option value="1" {{ old('is_active', $facility->is_active) == 1 ? 'selected' : '' }}>Active</option>
                                <option value="0" {{ old('is_active', $facility->is_active) == 0 ? 'selected' : '' }}>Disable</option>
                            </select>
                        </div>

                        <div class="flex items-center justify-between">
                            <button type="submit"
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                Update
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-dashboard-layout>
