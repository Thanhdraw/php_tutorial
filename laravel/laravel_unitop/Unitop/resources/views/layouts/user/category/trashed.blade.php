@extends('layouts.user.master')

@section('content')
<div class="container px-4 py-8 mx-auto">
    <h1 class="mb-6 text-3xl font-bold">Trashed Categories</h1>

    @if ($cat->isEmpty())
        <p class="text-gray-500">No trashed categories found.</p>
    @else
        <table class="w-full border border-collapse">
            <thead>
                <tr>
                    <th class="px-4 py-2 text-left border">ID</th>
                    <th class="px-4 py-2 text-left border">Name</th>
                    <th class="px-4 py-2 text-center border">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td class="px-4 py-2 border">{{ $category->id }}</td>
                        <td class="px-4 py-2 border">{{ $category->name }}</td>
                        <td class="px-4 py-2 text-center border">
                            <form action="{{ route('category.restore', $category->id) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="px-3 py-1 text-white bg-green-500 rounded hover:bg-green-600">
                                    Restore
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

    <div class="mt-6">
        <a href="{{ route('category.index') }}" class="px-4 py-2 text-white bg-gray-500 rounded hover:bg-gray-600">
            Back to Category List
        </a>
    </div>
</div>
@endsection