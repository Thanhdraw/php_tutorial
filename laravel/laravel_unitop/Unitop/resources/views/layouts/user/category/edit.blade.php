@extends('layouts.user.master')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-2xl mx-auto bg-white shadow-lg rounded-lg overflow-hidden">
            @if (isset($itembyID))
                <div class="p-6">
                    <div class="mb-6">
                        <h1 class="text-3xl font-bold text-gray-900 mb-2">
                            Category Detail
                        </h1>
                        <div class="border-b border-gray-200 pb-4">
                            <div class="flex items-center justify-between">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Caterogy ID</label>
                                    <span class="text-xl font-semibold text-blue-600">
                                        {{ $itembyID->id }}
                                    </span>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Caterogy Name</label>
                                    <span class="text-xl font-semibold text-gray-900">
                                        {{ $itembyID->name }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <h3 class="text-lg font-semibold text-gray-800 mb-2">
                                Actions
                            </h3>
                            <div class="space-y-3">
                                <a href="{{ route('category.edit', $itembyID->id) }}"
                                    class="w-full bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded inline-block text-center">
                                    Edit category
                                </a>
                                <form action="#">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="w-full bg-red-500 hover:bg-red-600 text-white py-2 px-4 rounded">
                                        Delete category
                                    </button>
                                </form>
                            </div>
                        </div>

                        <div>
                            <h3 class="text-lg font-semibold text-gray-800 mb-2">
                                Quick Info
                            </h3>
                            <div class="bg-gray-50 p-4 rounded">
                                <div class="space-y-2">
                                    <p class="flex justify-between">
                                        <span class="text-gray-600">Created At:</span>
\                                        <span class="font-medium">
                                        </span>
                                    </p>
                                    <p class="flex justify-between">
                                        <span class="text-gray-600">Updated At:</span>
                                        <span class="font-medium">
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-6">
                        <a href="{{ route('category.index') }}"
                            class="w-full bg-gray-500 hover:bg-gray-600 text-white py-2 px-4 rounded inline-block text-center">
                            Back to Product List
                        </a>
                    </div>
                </div>
            @else
                <div class="p-6 text-center text-gray-500">
                    No product found.
                </div>
            @endif
        </div>
    </div>
@endsection
