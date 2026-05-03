@extends('app')

@section('title', 'Home')

@section('content')

<!-- Hero Section -->
<div class="min-h-[80vh] flex items-center justify-center bg-gradient-to-br from-gray-900 via-gray-800 to-black px-6">

    <div class="text-center max-w-2xl">

        <h1 class="text-4xl md:text-5xl font-extrabold text-white leading-tight mb-6">
            Selamat Datang di
            <span class="text-green-400 drop-shadow-lg">Donasiku</span>
        </h1>

        <p class="text-gray-300 text-lg mb-8">
            Platform donasi terpercaya untuk membantu sesama dengan mudah, cepat, dan transparan.
        </p>

        <!-- CTA Button -->
        <div class="flex justify-center gap-4">
            <a href="#" class="bg-green-500 text-white px-6 py-3 rounded-xl shadow-lg hover:bg-green-600 hover:scale-105 transition duration-300">
                Mulai Donasi
            </a>
            <a href="#" class="border border-green-400 text-green-400 px-6 py-3 rounded-xl hover:bg-green-500 hover:text-white transition duration-300">
                Pelajari Lebih Lanjut
            </a>
        </div>

    </div>

</div>

<!-- Card Section -->
<div class="bg-gray-900 py-12">
    <div class="container mx-auto px-6">

        <div class="grid md:grid-cols-3 gap-6">

            <div class="bg-gray-800 p-6 rounded-2xl shadow-lg hover:shadow-green-500/20 hover:-translate-y-2 transition duration-300">
                <h3 class="text-xl font-semibold text-green-400 mb-2">Mudah</h3>
                <p class="text-gray-300">
                    Donasi hanya dalam beberapa klik tanpa proses yang ribet.
                </p>
            </div>

            <div class="bg-gray-800 p-6 rounded-2xl shadow-lg hover:shadow-green-500/20 hover:-translate-y-2 transition duration-300">
                <h3 class="text-xl font-semibold text-green-400 mb-2">Aman</h3>
                <p class="text-gray-300">
                    Sistem kami menjamin keamanan data dan transaksi Anda.
                </p>
            </div>

            <div class="bg-gray-800 p-6 rounded-2xl shadow-lg hover:shadow-green-500/20 hover:-translate-y-2 transition duration-300">
                <h3 class="text-xl font-semibold text-green-400 mb-2">Transparan</h3>
                <p class="text-gray-300">
                    Semua donasi dapat dipantau dengan jelas dan terbuka.
                </p>
            </div>

        </div>

    </div>
</div>

@endsection
