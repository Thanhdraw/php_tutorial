@extends('layouts.user.master')

@section('content')

<body class="py-10 bg-gray-600">
    <div class="max-w-3xl p-6 mx-auto bg-gray-200 rounded box-shadow-custom">
        <h1 class="mb-4 text-2xl font-bold">Tạo Bài Viết Mới</h1>

        <!-- Hiển thị thông báo thành công -->
        @if (session('success'))
            <div class="p-4 mb-4 text-green-700 bg-green-100 rounded">
                {{ session('success') }}
            </div>
        @endif

        <!-- Hiển thị lỗi -->
        @if ($errors->any())
            <div class="p-4 mb-4 text-red-700 bg-red-100 rounded">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>

        @endif

        <!-- Form -->
        <form id="postForm" action="{{ route('post.store') }}" method="POST" class="space-y-4"
            enctype="multipart/form-data">
            @csrf
            <div>
                <label for="title" class="block font-medium">Tiêu đề bài viết</label>
                <input type="text" id="title" name="title"
                    class="w-full border-gray-300 rounded focus:ring-blue-500 focus:border-blue-500"
                    value="{{ old('title') }}" required>
            </div>

            <div>
                <label for="content" class="block font-medium">Nội dung</label>
                <textarea id="content" name="content" rows="5"
                    class="w-full border-gray-300 rounded focus:ring-blue-500 focus:border-blue-500"
                    required>{{ old('content') }}</textarea>
            </div>
            <div>
                <label class="block mb-2 text-sm font-medium text-gray-900 " for="file_input">Upload
                    file</label>
                <input
                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                    aria-describedby="file_input_help" name="file_input" id="file_input" type="file">
                <p class="mt-1 text-sm text-gray-500 " id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>

            </div>
            <button type="submit" class="px-4 py-2 text-white bg-blue-500 rounded hover:bg-blue-600">
                Tạo bài viết
            </button>
        </form>
    </div>
    <br>
    <div class="max-w-3xl p-6 mx-auto bg-gray-200 rounded box-shadow-custom">
        <h1 class="mb-4 text-2xl font-bold">Danh sách bài viết</h1>
        <tbody>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tieu de</th>
                        <th>Noi dung</th>
                        <th>Ảnh </th>
                    </tr>
                </thead>

                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->content }}</td>
                        <td>
                            <img src="{{ asset($post->image) }}" alt="Image" style="max-width: 100px; height: auto;">
                        </td>
                    </tr>
                @endforeach

        </tbody>
        </table>
    </div>
</body>

@endsection