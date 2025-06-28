@extends('layouts.app')

@section('content')
<h2 class="text-2xl font-bold mb-4">Register</h2>

@if ($errors->any())
    <div class="mb-4 text-red-600">
        <ul>
            @foreach ($errors->all() as $error)
                <li>- {{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ route('register') }}" class="max-w-md space-y-4">
    @csrf
    <label>
        Nama Lengkap
        <input type="text" name="name" value="{{ old('name') }}" required
            class="w-full px-3 py-2 border rounded" />
    </label>

    <label>
        Pekerjaan
        <input type="text" name="job" value="{{ old('job') }}" required
            class="w-full px-3 py-2 border rounded" />
    </label>

    <label>
        No Telepon
        <input type="text" name="phone" value="{{ old('phone') }}" required
            class="w-full px-3 py-2 border rounded" />
    </label>

    <label>
        Email
        <input type="email" name="email" value="{{ old('email') }}" required
            class="w-full px-3 py-2 border rounded" />
    </label>

    <label>
        Password
        <input type="password" name="password" required
            class="w-full px-3 py-2 border rounded" />
    </label>

    <label>
        Konfirmasi Password
        <input type="password" name="password_confirmation" required
            class="w-full px-3 py-2 border rounded" />
    </label>

    <button type="submit" class="bg-purple-700 text-white px-4 py-2 rounded hover:bg-purple-800">
        Daftar
    </button>
</form>
@endsection
