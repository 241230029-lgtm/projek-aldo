@extends('app')

@section('title', 'Profil')

@section('content')

<div class="min-h-[80vh] bg-gradient-to-br from-gray-900 via-gray-800 to-black py-12 px-6">

    <div class="max-w-5xl mx-auto text-center">

        <!-- Title -->
        <h1 class="text-4xl font-extrabold text-white mb-4">
            Tentang <span class="text-green-400">Donasiku</span>
        </h1>

        <p class="text-gray-300 mb-10 max-w-2xl mx-auto">
            Donasiku adalah platform donasi digital yang bertujuan untuk mempermudah masyarakat dalam berbagi kebaikan secara cepat, aman, dan transparan.
        </p>

        <!-- Card Section -->
        <div class="grid md:grid-cols-3 gap-6">

            <div class="bg-gray-800 p-6 rounded-2xl shadow-lg hover:shadow-green-500/20 hover:-translate-y-2 transition duration-300">
                <h3 class="text-xl font-semibold text-green-400 mb-2">Visi</h3>
                <p class="text-gray-300">
                    Menjadi platform donasi terpercaya yang menghubungkan kebaikan di seluruh Indonesia.
                </p>
            </div>

            <div class="bg-gray-800 p-6 rounded-2xl shadow-lg hover:shadow-green-500/20 hover:-translate-y-2 transition duration-300">
                <h3 class="text-xl font-semibold text-green-400 mb-2">Misi</h3>
                <p class="text-gray-300">
                    Memudahkan proses donasi dengan teknologi yang aman dan transparan bagi semua pengguna.
                </p>
            </div>

            <div class="bg-gray-800 p-6 rounded-2xl shadow-lg hover:shadow-green-500/20 hover:-translate-y-2 transition duration-300">
                <h3 class="text-xl font-semibold text-green-400 mb-2">Nilai</h3>
                <p class="text-gray-300">
                    Kejujuran, transparansi, dan kepedulian adalah dasar dari setiap layanan yang kami berikan.
                </p>
            </div>

        </div>

        <!-- Team Section -->
        <div class="mt-12">
            <h2 class="text-2xl font-bold text-white mb-6">
                Tim Kami
            </h2>

            <div class="grid md:grid-cols-3 gap-6">

                <div class="bg-gray-800 p-6 rounded-2xl shadow-lg text-center hover:shadow-green-500/20 hover:-translate-y-2 transition duration-300">
                    <img src="https://via.placeholder.com/100" class="mx-auto rounded-full mb-4 border-2 border-green-400">
                    <h4 class="font-semibold text-white">Aldo Saputra</h4>
                    <p class="text-gray-400 text-sm">Founder</p>
                </div>

                <div class="bg-gray-800 p-6 rounded-2xl shadow-lg text-center hover:shadow-green-500/20 hover:-translate-y-2 transition duration-300">
                    <img src="https://via.placeholder.com/100" class="mx-auto rounded-full mb-4 border-2 border-green-400">
                    <h4 class="font-semibold text-white">Tim Developer</h4>
                    <p class="text-gray-400 text-sm">Backend & Frontend</p>
                </div>

                <div class="bg-gray-800 p-6 rounded-2xl shadow-lg text-center hover:shadow-green-500/20 hover:-translate-y-2 transition duration-300">
                    <img src="https://via.placeholder.com/100" class="mx-auto rounded-full mb-4 border-2 border-green-400">
                    <h4 class="font-semibold text-white">Tim Support</h4>
                    <p class="text-gray-400 text-sm">Customer Service</p>
                </div>

            </div>
        </div>

    </div>

</div>

@endsection
