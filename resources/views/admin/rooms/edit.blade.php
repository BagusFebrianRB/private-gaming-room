<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Edit Room') }}: {{ $room->name }}
            </h2>
            <a href="{{ route('admin.rooms.index') }}" class="inline-flex items-center px-4 py-2 bg-gray-300 border border-transparent rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest hover:bg-gray-400">
                ← Back to List
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <form action="{{ route('admin.rooms.update', $room) }}" method="POST" enctype="multipart/form-data" id="roomForm">
                        @csrf
                        @method('PUT')

                        <!-- Name -->
                        <div class="mb-6">
                            <label for="name" class="block font-medium text-sm text-gray-700 mb-2">Room Name <span class="text-red-500">*</span></label>
                            <input type="text" name="name" id="name" value="{{ old('name', $room->name) }}"
                                   class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full @error('name')  @enderror"
                                   required>
                            @error('name')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Slug -->
                        <div class="mb-6">
                            <label for="slug" class="block font-medium text-sm text-gray-700 mb-2">Slug <span class="text-red-500">*</span></label>
                            <input type="text" name="slug" id="slug" value="{{ old('slug', $room->slug) }}"
                                   class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full @error('slug') @enderror"
                                   required>
                            <p class="text-gray-500 text-xs mt-1">URL-friendly name (e.g., vip-room-1)</p>
                            @error('slug')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Description -->
                        <div class="mb-6">
                            <label for="description" class="block font-medium text-sm text-gray-700 mb-2">Description <span class="text-red-500">*</span></label>
                            <textarea name="description" id="description" rows="4"
                                      class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full @error('description')  @enderror"
                                      required>{{ old('description', $room->description) }}</textarea>
                            @error('description')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Capacity & Price -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <!-- Capacity -->
                            <div>
                                <label for="capacity" class="block font-medium text-sm text-gray-700 mb-2">Capacity (People) <span class="text-red-500">*</span></label>
                                <input type="number" name="capacity" id="capacity" value="{{ old('capacity', $room->capacity) }}" min="1"
                                       class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full @error('capacity')  @enderror"
                                       required>
                                @error('capacity')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Price per Hour -->
                            <div>
                                <label for="price_per_hour" class="block font-medium text-sm text-gray-700 mb-2">Price per Hour (Rp) <span class="text-red-500">*</span></label>
                                <input type="number" name="price_per_hour" id="price_per_hour" value="{{ old('price_per_hour', $room->price_per_hour) }}" min="0" step="1000"
                                       class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full @error('price_per_hour')  @enderror"
                                       required>
                                @error('price_per_hour')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <!-- Status -->
                        <div class="mb-6">
                            <label for="status" class="block font-medium text-sm text-gray-700 mb-2">Status <span class="text-red-500">*</span></label>
                            <select name="status" id="status"
                                    class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full @error('status') @enderror"
                                    required>
                                <option value="active" {{ old('status', $room->status) == 'active' ? 'selected' : '' }}>Active</option>
                                <option value="maintenance" {{ old('status', $room->status) == 'maintenance' ? 'selected' : '' }}>Maintenance</option>
                            </select>
                            @error('status')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Existing Images -->
                        @if($room->images->count() > 0)
                        <div class="mb-6">
                            <label class="block font-medium text-sm text-gray-700 mb-2">Existing Images</label>
                            <p class="text-gray-500 text-xs mb-3">Select images to delete or choose a new thumbnail</p>

                            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                                @foreach($room->images as $image)
                                <div class="relative">
                                    <img src="{{ asset('storage/' . $image->image_path) }}" class="w-full h-32 object-cover rounded-lg border-2 {{ $image->is_thumbnail ? 'border-blue-500' : 'border-gray-300' }}">

                                    <!-- Thumbnail Radio -->
                                    <div class="absolute top-2 left-2">
                                        <input type="radio" name="thumbnail_id" value="{{ $image->id }}"
                                               {{ $image->is_thumbnail ? 'checked' : '' }}
                                               class="w-5 h-5 text-blue-600 focus:ring-blue-500 border-gray-300"
                                               title="Set as thumbnail">
                                    </div>

                                    <!-- Delete Checkbox -->
                                    <div class="absolute top-2 right-2 bg-white rounded p-1">
                                        <label class="flex items-center cursor-pointer">
                                            <input type="checkbox" name="delete_images[]" value="{{ $image->id }}" class="w-4 h-4 text-red-600 focus:ring-red-500 border-gray-300 rounded">
                                            <span class="ml-1 text-xs text-red-600">Delete</span>
                                        </label>
                                    </div>

                                    @if($image->is_thumbnail)
                                    <div class="absolute bottom-2 left-2 bg-blue-500 text-white text-xs px-2 py-1 rounded">
                                        Thumbnail
                                    </div>
                                    @endif
                                </div>
                                @endforeach
                            </div>
                        </div>
                        @endif

                        <!-- Upload New Images -->
                        <div class="mb-6">
                            <label class="block font-medium text-sm text-gray-700 mb-2">Add New Images</label>
                            <p class="text-gray-500 text-xs mb-3">Upload additional images (max 2MB each, JPG/PNG/WEBP)</p>

                            <input type="file" name="new_images[]" id="new_images" multiple accept="image/jpeg,image/jpg,image/png,image/webp" class="hidden" onchange="previewNewImages(event)">

                            <button type="button" onclick="document.getElementById('new_images').click()"
                                    class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-500">
                                📁 Add More Images
                            </button>

                            <div id="newImagePreview" class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-4"></div>
                        </div>

                        <!-- Submit Buttons -->
                        <div class="flex justify-end gap-3 mt-6 pt-6 border-t">
                            <a href="{{ route('admin.rooms.index') }}" class="inline-flex items-center px-4 py-2 bg-gray-300 border border-transparent rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest hover:bg-gray-400">
                                Cancel
                            </a>
                            <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700">
                                Update Room
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Auto-generate slug from name
        document.getElementById('name').addEventListener('input', function(e) {
            const name = e.target.value;
            const slug = name.toLowerCase()
                .replace(/[^a-z0-9]+/g, '-')
                .replace(/^-+|-+$/g, '');
            document.getElementById('slug').value = slug;
        });

        // Preview new images
        function previewNewImages(event) {
            const files = Array.from(event.target.files);
            const previewContainer = document.getElementById('newImagePreview');
            previewContainer.innerHTML = '';

            files.forEach((file, index) => {
                if (file.size > 2 * 1024 * 1024) {
                    alert(`Image ${file.name} is too large! Maximum 2MB.`);
                    return;
                }

                const reader = new FileReader();
                reader.onload = function(e) {
                    const div = document.createElement('div');
                    div.className = 'relative';
                    div.innerHTML = `
                        <img src="${e.target.result}" class="w-full h-32 object-cover rounded-lg border-2 border-green-500">
                        <div class="absolute top-2 right-2 bg-green-500 text-white rounded px-2 py-1 text-xs font-semibold">NEW</div>
                    `;
                    previewContainer.appendChild(div);
                };
                reader.readAsDataURL(file);
            });
        }
    </script>
</x-app-layout>
