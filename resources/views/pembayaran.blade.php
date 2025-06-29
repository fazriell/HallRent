@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto mt-10 bg-white p-6 rounded shadow">
    <h2 class="text-2xl font-bold mb-6 text-center">Pembayaran</h2>

    {{-- Box metode pembayaran --}}
    <div class="border rounded p-4 mb-4">
        <div class="flex justify-between items-center mb-2">
            <div class="flex items-center space-x-3">
                <img src="{{ asset('bank-logo/bca.png') }}" alt="BCA" class="w-10">
                <div>
                    <p class="font-semibold">BCA</p>
                    <p class="text-sm text-gray-500">Down Payment 30%</p>
                    <p class="text-sm text-gray-500">250.000 / Jam</p>
                    <p class="text-sm text-gray-500">Rp150.000</p>
                </div>
            </div>
            <button class="bg-green-100 hover:bg-green-200 text-green-800 px-4 py-2 rounded">Bayar</button>
        </div>

        <div class="flex justify-between items-center mt-2 border-t pt-2">
            <p>2× 250.000</p>
            <p class="font-semibold text-purple-800">Rp 500.000</p>
        </div>
    </div>

    {{-- Accordion bank lain --}}
    <div class="space-y-2">
        @foreach(['BRI', 'BJB', 'Jago', 'Mandiri', 'BTN', 'Mega'] as $bank)
        <div class="border rounded px-4 py-2 flex justify-between items-center cursor-pointer bg-gray-50">
            <span>{{ $bank }}</span>
            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
        </div>
        @endforeach
    </div>

    {{-- Tombol pembatalan pembayaran --}}
    <div class="mt-6 text-center">
        <button onclick="document.getElementById('cancelModal').classList.remove('hidden')" class="text-red-600 hover:underline">
            Batalkan Pembayaran
        </button>
    </div>
</div>

{{-- Modal Pembatalan --}}
<div id="cancelModal" class="fixed inset-0 bg-black bg-opacity-50 hidden flex items-center justify-center z-50">
    <div class="bg-white p-6 rounded shadow-lg w-full max-w-md text-center">
        <h3 class="text-lg font-bold mb-2">Batalkan Pembayaran?</h3>
        <p class="mb-4 text-sm text-gray-600">Yakin ingin membatalkan proses pembayaran ini?</p>
        <div class="flex justify-center space-x-4">
            <form method="POST" action="{{ route('pembayaran.batal') }}">
                @csrf
                <button class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded">Ya, Batalkan</button>
            </form>
            <button onclick="document.getElementById('cancelModal').classList.add('hidden')" class="bg-gray-300 hover:bg-gray-400 px-4 py-2 rounded">Batal</button>
        </div>
    </div>
</div>
@endsection
