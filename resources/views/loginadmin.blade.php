<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - {{ config('app.name') }}</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">

    <div class="flex items-center justify-center min-h-screen">
        <div class="w-full max-w-md p-8 space-y-6 bg-white rounded-xl shadow-lg">
            <div class="text-center">
                <h2 class="text-3xl font-bold text-gray-800">Admin Panel Login</h2>
                <p class="mt-2 text-gray-600">Silakan masuk untuk melanjutkan</p>
            </div>

            {{-- Menampilkan pesan error validasi --}}
            @error('email')
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-lg relative" role="alert">
                    <span class="block sm:inline">{{ $message }}</span>
                </div>
            @enderror

            <form method="POST" action="{{ route('login') }}" class="space-y-6">
                @csrf

                {{-- Input Email --}}
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Alamat Email</label>
                    <input id="email" name="email" type="email" autocomplete="email" required
                           class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                           value="{{ old('email') }}">
                </div>

                {{-- Input Password --}}
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input id="password" name="password" type="password" autocomplete="current-password" required
                           class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                </div>

                <div>
                    <button type="submit"
                            class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Sign In
                    </button>
                </div>
            </form>
            <div class="text-center mt-4">
                <a href="{{ route('dashboard') }}" class="text-sm text-indigo-600 hover:text-indigo-500 no-underline hover:underline">
                    &larr; Kembali ke Situs Utama
                </a>
            </div>
        </div>
    </div>

</body>
</html>