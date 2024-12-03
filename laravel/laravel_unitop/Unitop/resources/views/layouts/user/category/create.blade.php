@extends('layouts.user.master')


@section('content')
<div class="max-w-md p-6 mx-auto mt-10 bg-white border border-gray-200 rounded-lg shadow-md">
    <h1 class="mb-6 text-2xl font-bold text-gray-700">Create Category</h1>
    @if (session('success'))
        <div class="px-4 py-3 mb-4 text-green-700 bg-green-100 border border-green-400 rounded">
            {{ session('success') }}
        </div>
    @endif
    <form action="{{ route('category.store') }}" method="POST" class="space-y-4">
        @csrf <!-- Bảo mật CSRF token -->

        <!-- Input ID -->
        <div>
            <label for="id" class="block text-sm font-medium text-gray-700">Category ID</label>
            <input disabled type="text" name="id" id="id"
                class="w-full px-4 py-2 mt-1 text-gray-700 border border-gray-300 rounded-md bg-gray-50 focus:ring-blue-500 focus:border-blue-500">
        </div>

        <!-- Input Name -->
        <div>
            <label for="name" class="block text-sm font-medium text-gray-700">Category Name</label>
            <input type="text" name="name" id="name"
                class="w-full px-4 py-2 mt-1 text-gray-700 border border-gray-300 rounded-md bg-gray-50 focus:ring-blue-500 focus:border-blue-500"
                placeholder="Enter category name">
        </div>

        <!-- Submit Button -->
        <div>
            <button type="submit"
                class="w-full px-4 py-2 text-white bg-blue-500 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-offset-2">
                Create Category
            </button>
        </div>
    </form>
    <div class="mt-3 text-left">
        <a href="{{ route('category.index') }}" class="mt-4 text-blue-500 hover:underline">Back to Category List</a>

    </div>
</div>

@endsection