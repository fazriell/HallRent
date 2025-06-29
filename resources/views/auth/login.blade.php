@extends('layouts.app')

@section('content')
<div class="max-w-md mx-auto bg-white p-8 rounded-xl shadow-lg mt-10 border">
    <h2 class="text-2xl font-bold text-purple-700 mb-4 text-center">Masuk ke Akun Anda</h2>

    @if($errors->any())
        <div class="mb-4 bg-red-100 text-red-700 px-4 py-2 rounded">
            {{ $errors->first() }}
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}" class="space-y-4">
        @csrf
        <div>
            <label class="block mb-1 text-sm font-semibold text-gray-700">Email</label>
            <input type="email" name="email" required autofocus
                class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-purple-500" />
        </div>

        <div>
            <label class="block mb-1 text-sm font-semibold text-gray-700">Password</label>
            <input type="password" name="password" required
                class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-purple-500" />
        </div>

        <button type="submit"
            class="w-full bg-purple-700 text-white px-4 py-2 rounded-lg hover:bg-purple-800 transition duration-200">
            Masuk
        </button>
    </form>

    <div class="mt-6 text-center">
        <p class="text-sm text-gray-600">Belum punya akun?</p>
        <a href="{{ route('register') }}"
            class="inline-block mt-2 bg-white text-purple-700 font-semibold border border-purple-600 px-4 py-2 rounded hover:bg-purple-100 transition duration-200">
            Daftar Sekarang
        </a>
    </div>
</div>
@endsection
