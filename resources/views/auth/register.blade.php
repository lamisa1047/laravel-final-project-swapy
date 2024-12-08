<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-6 rounded-lg shadow-md w-full max-w-md">
    @if (session('success'))
        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 my-4">
            <p>{{ session('success') }}</p>
        </div>
        @endif
        @if (session('error'))
        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 my-4">
            <p>{{ session('error') }}</p>
        </div>
        @endif

        <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Sign Up</h2>
        <form method="POST" action="{{route('register.post')}}">
            @csrf
            <!-- Full Name Input -->
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
                <input
                    type="text"
                    id="name"
                    name="name"

                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 text-gray-900"
                    placeholder="Enter your full name">
            </div>

            <!-- Email Input -->
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input
                    type="email"
                    id="email"
                    name="email"

                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 text-gray-900"
                    placeholder="Enter your email">
            </div>

            <!-- Password Input -->
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input
                    type="password"
                    id="password"
                    name="password"

                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 text-gray-900"
                    placeholder="Create a password">
            </div>

            <!-- Sign-Up Button -->
            <button type="submit" class="w-full bg-yellow-800 text-white py-2 px-4 rounded-md hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                Sign Up
            </button>
        </form>

        <!-- Optional: Link to Login -->
        <p class="mt-4 text-center text-sm text-gray-600">
            Already have an account?
            <a href="/auth/login" class="text-yellow-800 hover:underline">Sign in</a>
        </p>
    </div>

   
</body>

</html>