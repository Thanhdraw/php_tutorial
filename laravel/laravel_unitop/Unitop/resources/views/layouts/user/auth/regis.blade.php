@extends('layouts.user.master')

@section('content')

<body class="flex items-center justify-center h-screen bg-gray-100">


    <div class="w-full max-w-md p-6 bg-white rounded-lg shadow-md">

        <h2 class="text-2xl font-bold text-center text-gray-800">Sign Up</h2>
        @if (session('success'))
            <p class="mb-4 text-center text-green-500">{{ session('success') }}</p>
        @endif
        <form action="{{ route('regis') }}" method="POST" class="mt-6">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                <input type="text" name="name" id="name" required
                    class="block w-full px-4 py-2 mt-1 border border-gray-300 rounded-md bg-gray-50 focus:ring-blue-500 focus:border-blue-500">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" id="email" required
                    class="block w-full px-4 py-2 mt-1 border border-gray-300 rounded-md bg-gray-50 focus:ring-blue-500 focus:border-blue-500">
            </div>
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" name="password" id="password" required
                    class="block w-full px-4 py-2 mt-1 border border-gray-300 rounded-md bg-gray-50 focus:ring-blue-500 focus:border-blue-500">
            </div>
            <div class="mb-4">
                <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm
                    Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" required
                    class="block w-full px-4 py-2 mt-1 border border-gray-300 rounded-md bg-gray-50 focus:ring-blue-500 focus:border-blue-500">
            </div>
            <div class="mb-4">
                <button type="submit"
                    class="w-full px-4 py-2 text-white bg-blue-500 rounded-md hover:bg-blue-600 focus:ring-2 focus:ring-blue-400">
                    Sign Up
                </button>
            </div>
        </form>
        <p class="text-sm text-center text-gray-600">
            Already have an account?
            <a href="{{ route('auth.login') }}" class="text-blue-500 hover:underline">Login</a>
        </p>
    </div>
</body>
@endsection