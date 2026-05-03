@extends('app')

@section('title', 'Mulai Donasi')

@section('content')

<!-- DEBUG (WAJIB ADA DULU) -->
<h1 style="color:red; text-align:center;">HALAMAN DONASI TERBACA</h1>

<div class="min-h-screen bg-gray-900 flex items-center justify-center px-6 py-12">

    <div class="w-full max-w-2xl bg-gray-800 rounded-2xl shadow-lg p-8">

        <!-- Judul -->
        <h1 class="text-3xl font-bold text-white mb-2 text-center">
            Mulai Donasi 💚
        </h1>
        <p class="text-gray-400 text-center mb-8">
            Isi form di bawah ini untuk menyalurkan donasi Anda
        </p>

        <!-- Form -->
        <form action="#" method="POST" class="space-y-6">

            <!-- Nama -->
            <div>
                <label class="block text-gray-300 mb-2">Nama Donatur</label>
                <input type="text"
                    class="w-full px-4 py-3 rounded-xl bg-gray-900 text-white border border-gray-700 focus:outline-none focus:ring-2 focus:ring-green-500"
                    placeholder="Masukkan nama Anda">
            </div>

            <!-- Nominal -->
            <div>
                <label class="block text-gray-300 mb-2">Nominal Donasi</label>
                <input type="number"
                    class="w-full px-4 py-3 rounded-xl bg-gray-900 text-white border border-gray-700 focus:outline-none focus:ring-2 focus:ring-green-500"
                    placeholder="Contoh: 50000">
            </div>

            <!-- Pesan -->
            <div>
                <label class="block text-gray-300 mb-2">Pesan (Opsional)</label>
                <textarea rows="3"
                    class="w-full px-4 py-3 rounded-xl bg-gray-900 text-white border border-gray-700 focus:outline-none focus:ring-2 focus:ring-green-500"
                    placeholder="Tulis pesan atau doa..."></textarea>
            </div>

            <!-- Tombol -->
            <div class="flex gap-4">
                <button type="submit"
                    class="w-full bg-green-500 text-white py-3 rounded-xl font-semibold hover:bg-green-600 transition duration-300">
                    Kirim Donasi
                </button>

                <a href="{{ route('home') }}"
                    class="w-full text-center border border-gray-600 text-gray-300 py-3 rounded-xl hover:bg-gray-700 transition duration-300">
                    Kembali
                </a>
            </div>

        </form>

    </div>

</div>

@endsection
