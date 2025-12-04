<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Kelola Gallery Sneak Peek Ruangan
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @if (session('success'))
                <div class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Upload Form -->
            <div class="bg-white rounded-lg shadow p-6 mb-8">
                <h3 class="text-lg font-bold mb-4">Upload Gambar Baru</h3>
                <form action="{{ route('admin.room-gallery.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block mb-2 font-medium">Title</label>
                            <input type="text" name="title" required class="w-full border-gray-300 rounded-md">
                        </div>
                        <div>
                            <label class="block mb-2 font-medium">Order (urutan)</label>
                            <input type="number" name="order" value="0"
                                class="w-full border-gray-300 rounded-md">
                        </div>
                        <div class="md:col-span-2">
                            <label class="block mb-2 font-medium">Description</label>
                            <textarea name="description" rows="2" class="w-full border-gray-300 rounded-md"></textarea>
                        </div>
                        <div class="md:col-span-2">
                            <label class="block mb-2 font-medium">Image</label>
                            <input type="file" name="image" accept="image/*" required
                                class="w-full border-gray-300 rounded-md">
                        </div>
                    </div>
                    <button type="submit" class="mt-4 px-6 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">
                        Upload Gambar
                    </button>
                </form>
            </div>

            <!-- Gallery List -->
            <div class="bg-white rounded-lg shadow p-6">
                <h3 class="text-lg font-bold mb-4">Gallery Images</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    @foreach ($gallery as $image)
                        <div class="border rounded-lg overflow-hidden">
                            <img src="{{ Storage::url($image->image_path) }}" class="w-full h-48 object-cover">
                            <div class="p-4">
                                <div class="flex justify-between items-start mb-2">
                                    <div>
                                        <h4 class="font-bold">{{ $image->title }}</h4>
                                        <p class="text-sm text-gray-600">Order: {{ $image->order }}</p>
                                    </div>
                                    <span
                                        class="px-2 py-1 text-xs rounded {{ $image->is_active ? 'bg-green-100 text-green-700' : 'bg-gray-100 text-gray-700' }}">
                                        {{ $image->is_active ? 'Active' : 'Inactive' }}
                                    </span>
                                </div>
                                <p class="text-sm text-gray-600 mb-3">{{ $image->description }}</p>

                                <!-- Toggle Active/Inactive -->
                                <form action="{{ route('admin.room-gallery.update', $image) }}" method="POST"
                                    class="inline">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="title" value="{{ $image->title }}">
                                    <input type="hidden" name="is_active" value="{{ $image->is_active ? '0' : '1' }}">
                                    <button type="submit" class="text-sm text-blue-600 hover:underline mr-3">
                                        {{ $image->is_active ? 'Nonaktifkan' : 'Aktifkan' }}
                                    </button>
                                </form>

                                <!-- Delete -->
                                <form action="{{ route('admin.room-gallery.destroy', $image) }}" method="POST"
                                    class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-sm text-red-600 hover:underline"
                                        onclick="return confirm('Yakin hapus gambar ini?')">
                                        Hapus
                                    </button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
