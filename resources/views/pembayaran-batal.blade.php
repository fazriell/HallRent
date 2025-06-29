@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto mt-16 text-center">
    <h2 class="text-2xl font-bold mb-4 text-red-600">Pembayaran Dibatalkan</h2>
    <p class="text-gray-600 mb-6">Anda telah membatalkan proses pembayaran. Silakan lakukan pemesanan ulang jika masih ingin melanjutkan.</p>
    <a href="{{ route('beranda') }}" class="inline-block px-4 py-2 bg-purple-600 text-white rounded hover:bg-purple-700">Kembali ke Beranda</a>
</div>
@endsection
