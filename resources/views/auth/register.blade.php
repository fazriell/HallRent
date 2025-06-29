@extends('layouts.app')

@section('content')
<div class="max-w-md mx-auto bg-white p-8 rounded-xl shadow-lg mt-10 border">
    <h2 class="text-2xl font-bold text-purple-700 mb-4 text-center">Buat Akun Baru</h2>

    @if ($errors->any())
        <div class="mb-4 bg-red-100 text-red-700 px-4 py-3 rounded">
            <ul class="list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>- {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('register') }}" class="space-y-4">
        @csrf
        <div>
            <label class="block mb-1 text-sm font-semibold text-gray-700">Nama Lengkap</label>
            <input type="text" name="name" value="{{ old('name') }}" required
                class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-purple-500" />
        </div>

        <div>
            <label class="block mb-1 text-sm font-semibold text-gray-700">Pekerjaan</label>
            <input type="text" name="job" value="{{ old('job') }}" required
                class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-purple-500" />
        </div>

        <div>
            <label class="block mb-1 text-sm font-semibold text-gray-700">No Telepon</label>
            <input type="text" name="phone" value="{{ old('phone') }}" required
                class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-purple-500" />
        </div>

        <div>
            <label class="block mb-1 text-sm font-semibold text-gray-700">Email</label>
            <input type="email" name="email" value="{{ old('email') }}" required
                class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-purple-500" />
        </div>

        <div>
            <label class="block mb-1 text-sm font-semibold text-gray-700">Password</label>
            <input type="password" name="password" required
                class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-purple-500" />
        </div>

        <div>
            <label class="block mb-1 text-sm font-semibold text-gray-700">Konfirmasi Password</label>
            <input type="password" name="password_confirmation" required
                class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-purple-500" />
        </div>

        <button type="submit"
            class="w-full bg-purple-700 text-white px-4 py-2 rounded-lg hover:bg-purple-800 transition duration-200">
            Daftar
        </button>
    </form>

    <div class="mt-6 text-center">
        <p class="text-sm text-gray-600">Sudah punya akun?</p>
        <a href="{{ route('login') }}"
            class="inline-block mt-2 text-purple-700 font-semibold hover:underline">
            Masuk di sini
        </a>
    </div>
</div>
@endsection
