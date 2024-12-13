@extends('layouts.user.master')

@section('content')

<body class="flex items-center justify-center h-screen bg-gray-100">


    <div class="w-full max-w-md p-6 bg-white rounded-lg shadow-md">

        <h2 class="text-2xl font-bold text-center text-gray-800">Sign Up</h2>
        @if (session('success'))
            <p class="mb-4 text-center text-green-500">{{ session('success') }}</p>
        @endif
        <div id="output" class="mt-6 text-green-700 bg-gray-100 rounded shadow "></div>
        <form id="displayForm" action="#" class="mt-6">
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
                <label for="">Selet</label>
                <select name="role" id=""
                    class="block w-full px-4 py-2 mt-1 border border-gray-300 rounded-md bg-gray-50 focus:ring-blue-500 focus:border-blue-500">
                    <option value="0" selected>User</option>
                    <option value="1">Admin</option>
                </select>
            </div>
            <div class="flex items-center gap-4 mb-4">
                <label for="">Gender:</label>
                <label for="male">Male
                    <input type="radio" name="gender" id="male" value="male">
                </label>
                <label for="female">female
                    <input type="radio" name="gender" id="female" value="female">
                </label>

            </div>
            <div class="mb-4">
                <label for="birthday">Birthday</label>
                <input type="date" id="birthday" name="birthday">
            </div>
            <!-- <div class="mb-4">
                <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm
                    Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" required
                    class="block w-full px-4 py-2 mt-1 border border-gray-300 rounded-md bg-gray-50 focus:ring-blue-500 focus:border-blue-500">
            </div> -->
            <label class="flex items-center mb-4" for="checkbox">
                <input type="checkbox" name="checkbox" id="checkbox" value="remember">
                Remember me
            </label>

            <div class="mb-4 ">
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
<script>
    document.getElementById('displayForm').addEventListener('submit', function (event) {
        event.preventDefault();
        const formData = new FormData(this);
        const name = formData.get('name');
        const email = formData.get('email');
        const password = formData.get('password');
        const role = formData.get('role');
        const gender = formData.get('gender');
        const checkbox = formData.get('checkbox');
        const birthday = formData.get('birthday');

        const output = document.getElementById('output');
        const data = {
            name: name,
            email: email,
            password: password,
            role: role,
            gender: gender,
            checkbox: checkbox,
            birthday: birthday
        };
        // Lấy CSRF token từ meta tag

        // output.innerHTML = ` 
        //     <p>Name: ${name}</p>
        //     <p>Email: ${email}</p>
        //     <p>Password: ${password}</p>
        //     <p>Role: ${role}</p>
        //     <p>Gender: ${gender}</p>
        //     <p>Checkbox: ${checkbox}</p>
        //     <p>Birthday: ${birthday.split('T')[0]}</p>
        // `;
        fetch('{{ route('form.json') }}', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify(data)
        })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    console.log(data);
                    document.getElementById('output').innerHTML = data.message
                    document.getElementById('displayForm').reset();

                } else {
                    document.getElementById('output').innerHTML = data.message
                }
            }).catch(error => {
                console.error('Error:', error);
            })
    });
</script>
@endsection




<!-- fetch('{{ route('form.json') }}', {
method: 'POST',
headers: {
'Content-Type': 'application/json',
'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
},
body: JSON.stringify(data)

})
.then(response => response.json())
.then(data => {
console.log('Response JSON:', data); // In kết quả JSON ra console

if (data.success) {
document.getElementById('output').innerHTML = data.message
formData = new FormData();
} else {
document.getElementById('output').innerHTML = data.message
}
})
.catch(error => {
console.error('Error:', error);
}); -->