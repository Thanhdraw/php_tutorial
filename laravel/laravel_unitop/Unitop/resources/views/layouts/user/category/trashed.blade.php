@extends('layouts.user.master')

@section('content')
<div class="container p-6 mx-auto">
    <h1 class="mb-6 text-3xl font-bold">Trashed Categories</h1>

    <!-- Hiển thị thông báo -->
    @if (session('error'))
        <div class="px-4 py-3 mb-4 text-red-700 bg-red-100 border border-red-400 rounded">
            {{ session('error') }}
        </div>
    @endif
    @if (session('success'))
        <div class="px-4 py-3 mb-4 text-green-700 bg-green-100 border border-green-400 rounded">
            {{ session('success') }}
        </div>
    @endif

    <!-- Kiểm tra nếu không có dữ liệu -->
    @if ($categories->isEmpty())
        <p class="text-gray-500">No trashed categories found.</p>
    @else
        <!-- Bảng hiển thị danh sách -->
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200 rounded-lg">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-4 py-3 text-sm font-semibold text-left uppercase">ID</th>
                        <th class="px-4 py-3 text-sm font-semibold text-left uppercase">Name</th>
                        <th class="px-4 py-3 text-sm font-semibold text-left uppercase">Actions</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    @foreach ($categories as $category)
                        <tr class="border-t hover:bg-gray-50">
                            <td class="px-4 py-3">{{ $category->id }}</td>
                            <td class="px-4 py-3">{{ $category->name }}</td>
                            <td class="px-4 py-3">
                                <a onclick="return confirm('Are you sure you want to restore this category?')"
                                    href="{{ route('category.restore', $category->id) }}"
                                    class="text-blue-500 hover:underline">Restore</a>
                                <a onclick="return confirm('❗This action will permanently delete the category.')"
                                    href="{{ route('category.forcedelete', $category->id) }}"
                                    class="ml-8 text-red-500 hover:underline">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif

    <!-- Back to Category -->
    <a href="{{ route('category.index') }}"
        class="inline-block px-4 py-2 mt-4 text-white bg-blue-500 rounded hover:bg-blue-600">Back to Categories</a>
</div>
@endsection