@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h2 class="text-2xl font-bold mb-4">Beranda</h2>

    <!-- Search bar -->
    <div class="flex justify-center mb-4">
        <input type="text" placeholder="Cari gedung di sini" class="w-full max-w-xl px-4 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-purple-500">
    </div>

    <!-- Filter & Kalender -->
    <div class="flex justify-center gap-4 mb-6">
        <button id="filterBtn" class="px-4 py-2 border rounded-lg bg-white shadow hover:bg-gray-100">Filter</button>
        <button id="calendarBtn" class="px-4 py-2 border rounded-lg bg-white shadow hover:bg-gray-100">Kalender</button>
    </div>

    <!-- List Gedung -->
    <div class="space-y-6">
        <div class="border rounded-xl shadow p-4">
            <h3 class="text-lg font-bold mb-2">Gedung A</h3>
            <div class="flex gap-4">
                <div class="w-32 h-24 bg-gray-300"></div>
                <div class="flex-1">
                    <p class="text-sm text-gray-700 mb-1">Lorem ipsum dolor sit amet consectetur adipiscing elit...</p>
                    <p class="text-sm">Jl. karapa no.88 Jakarta Utara, Indonesia</p>
                    <p class="text-sm font-semibold">Rp. 150.000 / Jam</p>
                    <p class="text-sm">Fasilitas : Kursi Plastik, Kipas Angin, Tanpa AC</p>
                </div>
                <div class="flex flex-col gap-2">
                    <button class="bg-purple-200 text-purple-800 px-4 py-1 rounded">Lihat detail</button>
                    <button class="bg-green-100 text-green-800 px-4 py-1 rounded">Pesan</button>
                </div>
            </div>
        </div>
        <!-- Duplikat untuk Gedung B dan C -->
        <!-- ... -->
    </div>
</div>

<!-- Filter Modal -->
<div id="filterModal" class="fixed inset-0 bg-black bg-opacity-30 hidden items-center justify-center z-50">
    <div class="bg-white p-6 rounded-lg shadow-xl w-full max-w-md">
        <h3 class="text-lg font-bold mb-4">Filter Ruangan</h3>
        <form>
            <div class="mb-4">
                <label for="harga" class="block mb-1 text-sm font-medium">Kota</label>
                <select id="harga" class="w-full border px-3 py-2 rounded">
                    <option></option>
                    <option>Bandung</option>
                    <option>Surabaya</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="kota" class="block mb-1 text-sm font-medium">Kota</label>
                <select id="kota" class="w-full border px-3 py-2 rounded">
                    <option>Jakarta</option>
                    <option>Bandung</option>
                    <option>Surabaya</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="tipe" class="block mb-1 text-sm font-medium">Tipe Gedung</label>
                <select id="tipe" class="w-full border px-3 py-2 rounded">
                    <option>Serbaguna</option>
                    <option>Rapat</option>
                    <option>Konferensi</option>
                </select>
            </div>
            <div class="flex justify-end gap-2">
                <button type="button" id="closeFilterModal" class="px-4 py-2 bg-gray-300 rounded">Tutup</button>
                <button type="submit" class="px-4 py-2 bg-purple-600 text-white rounded">Terapkan</button>
            </div>
        </form>
    </div>
</div>

<!-- Kalender Modal -->
<div id="calendarModal" class="fixed inset-0 bg-black bg-opacity-30 hidden items-center justify-center z-50">
    <div class="bg-white p-6 rounded-lg shadow-xl w-full max-w-md">
        <h3 class="text-lg font-bold mb-4">Pilih Tanggal & Waktu</h3>
        <form>
            <div class="mb-4">
                <label for="tanggal" class="block mb-1 text-sm font-medium">Tanggal</label>
                <input type="date" id="tanggal" class="w-full border px-3 py-2 rounded" />
            </div>
            <div class="mb-4">
                <label for="waktu" class="block mb-1 text-sm font-medium">Waktu</label>
                <input type="time" id="waktu" class="w-full border px-3 py-2 rounded" />
            </div>
            <div class="flex justify-end gap-2">
                <button type="button" id="closeCalendarModal" class="px-4 py-2 bg-gray-300 rounded">Tutup</button>
                <button type="submit" class="px-4 py-2 bg-purple-600 text-white rounded">Pilih</button>
            </div>
        </form>
    </div>
</div>

<script>
    // Filter modal control
    const filterBtn = document.getElementById('filterBtn');
    const filterModal = document.getElementById('filterModal');
    const closeFilterModal = document.getElementById('closeFilterModal');

    filterBtn.addEventListener('click', () => {
        filterModal.classList.remove('hidden');
        filterModal.classList.add('flex');
    });

    closeFilterModal.addEventListener('click', () => {
        filterModal.classList.add('hidden');
        filterModal.classList.remove('flex');
    });

    // Kalender modal control
    const calendarBtn = document.getElementById('calendarBtn');
    const calendarModal = document.getElementById('calendarModal');
    const closeCalendarModal = document.getElementById('closeCalendarModal');

    calendarBtn.addEventListener('click', () => {
        calendarModal.classList.remove('hidden');
        calendarModal.classList.add('flex');
    });

    closeCalendarModal.addEventListener('click', () => {
        calendarModal.classList.add('hidden');
        calendarModal.classList.remove('flex');
    });

    // Opsional: prevent default form submit dan tangani pemilihan tanggal + waktu
    document.querySelector('#calendarModal form').addEventListener('submit', function(e){
        e.preventDefault();
        const tanggal = document.getElementById('tanggal').value;
        const waktu = document.getElementById('waktu').value;

        if (!tanggal || !waktu) {
            alert('Silakan pilih tanggal dan waktu terlebih dahulu.');
            return;
        }

        alert(`Tanggal dipilih: ${tanggal}\nWaktu dipilih: ${waktu}`);

        // tutup modal setelah pilih
        calendarModal.classList.add('hidden');
        calendarModal.classList.remove('flex');

        // TODO: lanjutkan dengan proses pemesanan, filter, atau simpan data
    });
</script>
@endsection
