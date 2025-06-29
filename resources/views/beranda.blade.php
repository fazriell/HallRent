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
                <button class="bg-purple-200 text-purple-800 px-4 py-1 rounded detailBtn">Lihat detail</button>
                <button class="bg-green-100 text-green-800 px-4 py-1 rounded detailBtn">Pesan</button>
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

<!-- Detail Modal -->
<div id="detailModal" class="fixed inset-0 bg-black bg-opacity-30 hidden items-center justify-center z-50">
    <div class="bg-white rounded-xl shadow-xl w-full max-w-4xl p-6 relative">
        <h3 class="text-2xl font-bold text-purple-900 mb-4 border-b pb-2">Gedung A</h3>
        <div class="flex flex-col md:flex-row gap-6">
            <div class="flex flex-col gap-4">
                <div class="w-40 h-40 bg-gray-300"></div>
                <div class="w-40 h-40 bg-gray-300"></div>
            </div>
            <div class="flex-1 text-sm">
                <p class="mb-2">Lorem ipsum dolor sit amet consectetur adipiscing elit ut et massa mi. Pellentesque sit amet sapien fringilla, mattis ligula consectetur.</p>
                <p class="mb-1"><strong>Alamat:</strong> Jl. karapa no.88 Jakarta Utara, Indonesia</p>
                <p class="mb-1"><strong>Harga:</strong> Rp. 150.000 / Jam</p>
                <p class="mb-1"><strong>Fasilitas:</strong> Kursi Plastik, Kipas Angin, Tanpa AC</p>
                <p class="mb-1"><strong>Kapasitas:</strong> 20 - 50 Orang</p>
                <p class="mb-1"><strong>Tipe Gedung:</strong> Aula</p>
                <p class="mb-1"><strong>Kontak:</strong> (021) 874568</p>
                <p class="mb-4"><strong>Sosial:</strong> <i class="text-red-600">@</i></p>
            </div>
            <div class="w-full md:w-1/3 bg-gray-50 rounded-lg shadow p-4">
                <!-- Kalender bulanan -->
                <div class="mb-4">
                    <div class="flex items-center justify-between text-sm font-semibold text-gray-700 mb-2">
                        <button class="px-2 py-1" onclick="prevMonth()">&#8592;</button>
                        <span id="calendarMonth">Juni 2025</span>
                        <button class="px-2 py-1" onclick="nextMonth()">&#8594;</button>
                    </div>
                    <div class="grid grid-cols-7 text-xs text-center text-gray-500 mb-1">
                        <span>Sun</span><span>Mon</span><span>Tue</span><span>Wed</span><span>Thu</span><span>Fri</span><span>Sat</span>
                    </div>
                    <div id="calendarDays" class="grid grid-cols-7 text-center text-sm gap-1">
                        <!-- Tanggal akan di-render lewat JS -->
                    </div>
                </div>

                <div class="flex justify-between items-center mb-2">
                    <button class="bg-gray-300 px-2 rounded" onclick="decreaseQty()">-</button>
                    <span id="qty" class="mx-4 font-semibold">2</span>
                    <button class="bg-gray-300 px-2 rounded" onclick="increaseQty()">+</button>
                </div>
                <div class="text-center font-bold text-lg mb-3">Rp. <span id="totalHarga">300.000</span></div>
                <button class="w-full bg-green-500 text-white py-2 rounded hover:bg-green-600">Pesan</button>
            </div>
        </div>
        <button id="closeDetailModal" class="absolute top-4 right-4 text-gray-500 hover:text-black text-xl">&times;</button>
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

    // Detail modal control
const detailModal = document.getElementById('detailModal');
const closeDetailModal = document.getElementById('closeDetailModal');
// Semua tombol yang bisa buka modal detail
const detailButtons = document.querySelectorAll('.detailBtn');

detailButtons.forEach(btn => {
    btn.addEventListener('click', () => {
        detailModal.classList.remove('hidden');
        detailModal.classList.add('flex');
    });
});

closeDetailModal.addEventListener('click', () => {
    detailModal.classList.add('hidden');
    detailModal.classList.remove('flex');
});

// Hitung Harga Dinamis
let qty = 2;
const hargaPerJam = 150000;
const qtyDisplay = document.getElementById('qty');
const totalDisplay = document.getElementById('totalHarga');

function updateHarga() {
    qtyDisplay.textContent = qty;
    totalDisplay.textContent = (qty * hargaPerJam).toLocaleString('id-ID');
}

function increaseQty() {
    qty++;
    updateHarga();
}

function decreaseQty() {
    if (qty > 1) {
        qty--;
        updateHarga();
    }
}
// Kalender di Modal Detail
const calendarDays = document.getElementById('calendarDays');
const calendarMonth = document.getElementById('calendarMonth');

let currentMonth = 5; // Juni (0-indexed)
let currentYear = 2025;

function renderCalendar(month, year) {
    const date = new Date(year, month, 1);
    const daysInMonth = new Date(year, month + 1, 0).getDate();
    const startDay = date.getDay();

    calendarDays.innerHTML = '';

    // Kosongkan sebelum hari pertama
    for (let i = 0; i < startDay; i++) {
        calendarDays.innerHTML += `<div></div>`;
    }

    for (let i = 1; i <= daysInMonth; i++) {
        const today = (i === 14 || i === 16) ? 'bg-blue-500 text-white rounded-full' : 'hover:bg-purple-100 cursor-pointer';
        calendarDays.innerHTML += `<div class="py-1 ${today}">${i}</div>`;
    }

    // Tampilkan nama bulan
    const monthNames = [
        'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
        'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
    ];
    calendarMonth.textContent = `${monthNames[month]} ${year}`;
}

function nextMonth() {
    currentMonth++;
    if (currentMonth > 11) {
        currentMonth = 0;
        currentYear++;
    }
    renderCalendar(currentMonth, currentYear);
}

function prevMonth() {
    currentMonth--;
    if (currentMonth < 0) {
        currentMonth = 11;
        currentYear--;
    }
    renderCalendar(currentMonth, currentYear);
}

renderCalendar(currentMonth, currentYear);

</script>
@endsection
