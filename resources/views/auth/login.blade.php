@extends('layouts.app')

@section('content')
<h2 class="text-2xl font-bold mb-4">Login</h2>

@if($errors->any())
    <div class="mb-4 text-red-600">
        {{ $errors->first() }}
    </div>
@endif

<form method="POST" action="{{ route('login') }}" class="max-w-md">
    @csrf
    <label class="block mb-2">
        Email
        <input type="email" name="email" required autofocus class="w-full px-3 py-2 border rounded" />
    </label>
    <label class="block mb-4">
        Password
        <input type="password" name="password" required class="w-full px-3 py-2 border rounded" />
    </label>
    <button type="submit" class="bg-purple-700 text-white px-4 py-2 rounded hover:bg-purple-800">
        Masuk
    </button>
</form>
@endsection
