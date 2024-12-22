@extends('layouts.user.master')


@section('content')

<body class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="w-full max-w-md">
        <label for="search">Search</label>
        <form id="search" class="flex items-center overflow-hidden bg-white rounded-lg shadow-md">

            <input type="text" placeholder="Search..."
                class="flex-1 px-4 py-2 text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500" />

            <button type="submit"
                class="px-4 py-2 text-white bg-blue-500 hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-300">
                Search
            </button>

            <div class="w-1 h-6 bg-gray-300">

            </div>

        </form>
    </div>
</body>
<script>


</script>
@endsection