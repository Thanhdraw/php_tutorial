@extends('layouts.user.master')

@section('content')
<div class="container px-4 py-8 mx-auto">
    <div class="max-w-2xl mx-auto overflow-hidden bg-white rounded-lg shadow-lg">
        @if ($itembyID)
            <div class="p-6">
                <div class="mb-6">
                    <h1 class="mb-2 text-3xl font-bold text-gray-900">
                        Category Detail
                    </h1>

                    @if (session('success'))
                        <div class="relative px-4 py-3 mb-4 text-green-700 bg-green-100 border border-green-400 rounded"
                            role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="relative px-4 py-3 mb-4 text-red-700 bg-red-100 border border-red-400 rounded" role="alert">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form id="categoryForm" action="{{ route('category.update', $itembyID->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <label for="name" class="block text-sm font-medium text-gray-700">Category Name</label>
                            <input type="text" name="name" id="name" value="{{ old('name', $itembyID->name) }}" required
                                disabled
                                class="w-full px-4 py-2 mt-1 border rounded shadow-sm focus:ring focus:ring-blue-500 bg-gray-100 @error('name') border-red-500 @enderror">
                            @error('name')
                                <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex items-center justify-between">
                            <a href="{{ route('category.index') }}"
                                class="px-4 py-2 text-white bg-gray-500 rounded hover:bg-gray-600">
                                Cancel
                            </a>
                            <button type="submit" id="updateButton"
                                class="px-4 py-2 text-white bg-blue-500 rounded opacity-50 cursor-not-allowed hover:bg-blue-600"
                                disabled>
                                Update
                            </button>
                        </div>
                    </form>

                    <div class="pb-4 my-4 border-b border-gray-200">
                        <div class="flex items-center justify-between">
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Category ID</label>
                                <span class="text-xl font-semibold text-blue-600">
                                    {{ $itembyID->id }}
                                </span>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Category Name</label>
                                <span class="text-xl font-semibold text-gray-900">
                                    {{ $itembyID->name }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <h3 class="mb-2 text-lg font-semibold text-gray-800">
                            Actions
                        </h3>
                        <div class="space-y-3">
                            <button id="editButton"
                                class="inline-block w-full px-4 py-2 text-center text-white bg-blue-500 rounded hover:bg-blue-600">
                                Edit Category
                            </button>

                            <form action="{{ route('category.delete', $itembyID->id) }}" method="POST"
                                onsubmit="return confirm('Are you sure you want to delete this category?')">
                                @csrf
                                @method('DELETE')
                                <button onclick="return confirm('Are you sure you want to delete this category?')"
                                    type="submit" class="w-full px-4 py-2 text-white bg-red-500 rounded hover:bg-red-600">
                                    Delete Category
                                </button>
                            </form>
                        </div>
                    </div>

                    <div>
                        <h3 class="mb-2 text-lg font-semibold text-gray-800">
                            Quick Info
                        </h3>
                        <div class="p-4 rounded bg-gray-50">
                            <div class="space-y-2">
                                <p class="flex justify-between">
                                    <span class="text-gray-600">Created At:</span>
                                    <span class="font-medium">
                                        {{ $itembyID->created_at ? $itembyID->created_at->format('d/m/Y H:i:s') : 'N/A' }}
                                    </span>
                                </p>
                                <p class="flex justify-between">
                                    <span class="text-gray-600">Updated At:</span>
                                    <span class="font-medium">
                                        {{ $itembyID->updated_at ? $itembyID->updated_at->format('d/m/Y H:i:s') : 'N/A' }}
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-6">
                    <a href="{{ route('category.index') }}"
                        class="inline-block w-full px-4 py-2 text-center text-white bg-gray-500 rounded hover:bg-gray-600">
                        Back to Category List
                    </a>
                </div>
            </div>
        @else
            <div class="p-6 text-center text-gray-500">
                No category found.
            </div>
        @endif
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const editButton = document.getElementById('editButton');
        const nameInput = document.getElementById('name');
        const updateButton = document.getElementById('updateButton');

        editButton.addEventListener('click', function () {
            // Toggle input state
            nameInput.disabled = !nameInput.disabled;

            // Remove gray background and enable input when in edit mode
            if (!nameInput.disabled) {
                nameInput.classList.remove('bg-gray-100');
                nameInput.classList.add('bg-white');

                // Enable update button
                updateButton.disabled = false;
                updateButton.classList.remove('cursor-not-allowed', 'opacity-50');
            } else {
                // Revert input to original state
                nameInput.classList.add('bg-gray-100');
                nameInput.classList.remove('bg-white');

                // Disable update button
                updateButton.disabled = true;
                updateButton.classList.add('cursor-not-allowed', 'opacity-50');
            }
        });
    });
</script>
@endsection