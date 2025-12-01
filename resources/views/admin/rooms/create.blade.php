<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Create Room') }}
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
                    <form action="{{ route('admin.rooms.store') }}" method="POST" enctype="multipart/form-data" id="roomForm">
                        @csrf

                        <!-- Name -->
                        <div class="mb-6">
                            <label for="name" class="block font-medium text-sm text-gray-700 mb-2">Room Name <span class="text-red-500">*</span></label>
                            <input type="text" name="name" id="name" value="{{ old('name') }}"
                                   class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full @error('name')  @enderror"
                                   required>
                            @error('name')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Slug -->
                        <div class="mb-6">
                            <label for="slug" class="block font-medium text-sm text-gray-700 mb-2">Slug <span class="text-red-500">*</span></label>
                            <input type="text" name="slug" id="slug" value="{{ old('slug') }}"
                                   class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full @error('slug')  @enderror"
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
                                      class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full @error('description') @enderror"
                                      required>{{ old('description') }}</textarea>
                            @error('description')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Capacity & Price -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <!-- Capacity -->
                            <div>
                                <label for="capacity" class="block font-medium text-sm text-gray-700 mb-2">Capacity (People) <span class="text-red-500">*</span></label>
                                <input type="number" name="capacity" id="capacity" value="{{ old('capacity', 1) }}" min="1"
                                       class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full @error('capacity')  @enderror"
                                       required>
                                @error('capacity')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Price per Hour -->
                            <div>
                                <label for="price_per_hour" class="block font-medium text-sm text-gray-700 mb-2">Price per Hour (Rp) <span class="text-red-500">*</span></label>
                                <input type="number" name="price_per_hour" id="price_per_hour" value="{{ old('price_per_hour', 0) }}" min="0" step="1000"
                                       class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full @error('price_per_hour') @enderror"
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
                                <option value="active" {{ old('status') == 'active' ? 'selected' : '' }}>Active</option>
                                <option value="maintenance" {{ old('status') == 'maintenance' ? 'selected' : '' }}>Maintenance</option>
                            </select>
                            @error('status')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Images Upload -->
                        <div class="mb-6">
                            <label class="block font-medium text-sm text-gray-700 mb-2">Room Images <span class="text-red-500">*</span></label>
                            <p class="text-gray-500 text-xs mb-3">Upload 1-10 images (max 2MB each, JPG/PNG/WEBP)</p>

                            <!-- File Input (Hidden) -->
                            <input type="file" name="images[]" id="images" multiple accept="image/jpeg,image/jpg,image/png,image/webp" class="hidden" onchange="previewImages(event)">

                            <!-- Upload Button -->
                            <button type="button" onclick="document.getElementById('images').click()"
                                    class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-500">
                                📁 Choose Images
                            </button>

                            @error('images')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                            @error('images.*')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror

                            <!-- Image Preview Grid -->
                            <div id="imagePreview" class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-4"></div>
                        </div>

                        <!-- Thumbnail Selection -->
                        <div class="mb-6" id="thumbnailSection" style="display: none;">
                            <label class="block font-medium text-sm text-gray-700 mb-2">Select Thumbnail <span class="text-red-500">*</span></label>
                            <p class="text-gray-500 text-xs mb-3">Choose which image will be the main thumbnail</p>
                            <div id="thumbnailOptions"></div>
                            @error('thumbnail_index')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Submit Buttons -->
                        <div class="flex justify-end gap-3 mt-6 pt-6 border-t">
                            <a href="{{ route('admin.rooms.index') }}" class="inline-flex items-center px-4 py-2 bg-gray-300 border border-transparent rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest hover:bg-gray-400">
                                Cancel
                            </a>
                            <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700">
                                Create Room
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        let selectedFiles = [];

        // Auto-generate slug from name
        document.getElementById('name').addEventListener('input', function(e) {
            const name = e.target.value;
            const slug = name.toLowerCase()
                .replace(/[^a-z0-9]+/g, '-')
                .replace(/^-+|-+$/g, '');
            document.getElementById('slug').value = slug;
        });

        // Preview images
        function previewImages(event) {
            const files = Array.from(event.target.files);

            if (files.length === 0) return;

            // Validate file count
            if (files.length > 10) {
                alert('Maximum 10 images allowed!');
                event.target.value = '';
                return;
            }

            selectedFiles = files;
            const previewContainer = document.getElementById('imagePreview');
            const thumbnailSection = document.getElementById('thumbnailSection');
            const thumbnailOptions = document.getElementById('thumbnailOptions');

            previewContainer.innerHTML = '';
            thumbnailOptions.innerHTML = '';

            files.forEach((file, index) => {
                // Validate file size (2MB)
                if (file.size > 2 * 1024 * 1024) {
                    alert(`Image ${file.name} is too large! Maximum 2MB.`);
                    return;
                }

                // Validate file type
                if (!['image/jpeg', 'image/jpg', 'image/png', 'image/webp'].includes(file.type)) {
                    alert(`Image ${file.name} has invalid type! Only JPG, PNG, WEBP allowed.`);
                    return;
                }

                const reader = new FileReader();
                reader.onload = function(e) {
                    // Create preview card
                    const div = document.createElement('div');
                    div.className = 'relative';
                    div.innerHTML = `
                        <img src="${e.target.result}" class="w-full h-32 object-cover rounded-lg border-2 border-gray-300">
                        <div class="absolute top-2 right-2 bg-white rounded px-2 py-1 text-xs font-semibold">#${index + 1}</div>
                    `;
                    previewContainer.appendChild(div);

                    // Create thumbnail radio option
                    const radioDiv = document.createElement('div');
                    radioDiv.className = 'flex items-center mb-2';
                    radioDiv.innerHTML = `
                        <input type="radio" name="thumbnail_index" id="thumb_${index}" value="${index}" ${index === 0 ? 'checked' : ''}
                               class="w-4 h-4 text-blue-600 focus:ring-blue-500 border-gray-300">
                        <label for="thumb_${index}" class="ml-2 text-sm text-gray-700">Image #${index + 1} - ${file.name}</label>
                    `;
                    thumbnailOptions.appendChild(radioDiv);
                };
                reader.readAsDataURL(file);
            });

            // Show thumbnail section
            thumbnailSection.style.display = 'block';
        }

        // Form validation
        document.getElementById('roomForm').addEventListener('submit', function(e) {
            if (selectedFiles.length === 0) {
                e.preventDefault();
                alert('Please upload at least 1 image!');
                return false;
            }
        });
    </script>
</x-app-layout>
