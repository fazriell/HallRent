@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h2 class="text-2xl font-bold mb-4">Dashboard Admin</h2>

    <!-- Tombol + untuk tambah ruangan -->
    <div class="flex justify-end mb-4">
        <button id="addRoomBtn" class="bg-purple-600 text-white px-4 py-2 rounded-full text-xl">+</button>
    </div>

    <!-- Daftar ruangan (bisa disesuaikan nantinya) -->
    <div class="space-y-6">
        <div class="border rounded-xl shadow p-4">
            <h3 class="text-lg font-bold mb-2">Gedung Admin A</h3>
            <div class="flex gap-4">
                <div class="w-32 h-24 bg-gray-300"></div>
                <div class="flex-1">
                    <p class="text-sm text-gray-700 mb-1">Deskripsi ruangan singkat...</p>
                    <p class="text-sm">Alamat: Jl. Admin No.1</p>
                    <p class="text-sm font-semibold">Rp. 100.000 / Jam</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal tambah ruangan -->
<div id="addRoomModal" class="fixed inset-0 bg-black bg-opacity-40 hidden items-center justify-center z-50">
    <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md">
        <h3 class="text-xl font-bold mb-4">Tambah Data Ruangan</h3>
        <form>
            <div class="mb-3">
                <label class="block text-sm font-medium mb-1">Nama Gedung</label>
                <input type="text" class="w-full border px-3 py-2 rounded">
            </div>
            <div class="mb-3">
                <label class="block text-sm font-medium mb-1">Alamat</label>
                <input type="text" class="w-full border px-3 py-2 rounded">
            </div>
            <div class="mb-3">
                <label class="block text-sm font-medium mb-1">Harga per Jam</label>
                <input type="number" class="w-full border px-3 py-2 rounded">
            </div>
            <div class="flex justify-end gap-2">
                <button type="button" id="closeAddRoomModal" class="px-4 py-2 bg-gray-300 rounded">Tutup</button>
                <button type="submit" class="px-4 py-2 bg-purple-600 text-white rounded">Simpan</button>
            </div>
        </form>
    </div>
</div>

<script>
const addRoomBtn = document.getElementById('addRoomBtn');
const addRoomModal = document.getElementById('addRoomModal');
const closeAddRoomModal = document.getElementById('closeAddRoomModal');

addRoomBtn.addEventListener('click', () => {
    addRoomModal.classList.remove('hidden');
    addRoomModal.classList.add('flex');
});

closeAddRoomModal.addEventListener('click', () => {
    addRoomModal.classList.add('hidden');
    addRoomModal.classList.remove('flex');
});
</script>
@endsection
