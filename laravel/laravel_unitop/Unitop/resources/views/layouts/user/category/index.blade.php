@extends('layouts.user.master')

@section('content')
<div class="container mx-auto px-4 py-6">
    <div class="max-w-2xl mx-auto">
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <div class="p-6">
                <h1 class="text-2xl font-bold text-gray-800 mb-6">Categories</h1>

                @if ($cat && count($cat) > 0)
                    @foreach ($cat as $item)
                        <div class="border-b pb-4 mb-4 last:border-b-0 last:mb-0">
                            <div class="flex justify-between items-center">
                                <div class="flex items-center space-x-4">
                                    <div class="flex-shrink-0">
                                        <span class="text-lg font-semibold text-gray-600">
                                            ID: {{ $item->id }}
                                        </span>
                                    </div>
                                    <div class="flex-grow">
                                        <h2 class="text-xl font-bold text-gray-900">
                                            {{ $item->name }}
                                        </h2>
                                    </div>
                                </div>

                                <div class="flex space-x-3">
                                    <a href="{{ route('category.edit', $item->id) }}" 
                                       class="text-blue-500 hover:text-blue-700 transition duration-300 ease-in-out">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                        </svg>
                                    </a>
                                    
                                    <form action="#" 
                                          method="POST" 
                                          onsubmit="return confirm('Are you sure you want to delete this category?');"
                                          class="inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" 
                                                class="text-red-500 hover:text-red-700 transition duration-300 ease-in-out">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                       
                    @endforeach
                @else
                    <div class="text-center text-gray-500 py-4">
                        No categories found.
                    </div>
                @endif

                <div class="mt-6">
                    <a href="#" 
                       class="w-full bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded transition duration-300 ease-in-out block text-center">
                        Add New Category
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection