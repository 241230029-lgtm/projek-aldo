@extends('app')

@section('title', 'Kontak')

@section('content')

<div class="min-h-[80vh] bg-gradient-to-br from-gray-900 via-gray-800 to-black flex items-center justify-center px-6">

    <div class="bg-gray-800/80 backdrop-blur-md shadow-2xl rounded-2xl p-8 max-w-xl w-full border border-gray-700">

        <h1 class="text-3xl font-bold text-blue-400 text-center mb-4">
            Hubungi Kami
        </h1>

        <p class="text-gray-300 text-center mb-8">
            Punya pertanyaan atau ingin bekerja sama? Kirim pesan ke kami melalui form di bawah ini.
        </p>

        <!-- Form -->
        <form class="space-y-5">

            <div>
                <label class="block text-gray-300 mb-1">Nama</label>
                <input type="text" placeholder="Masukkan nama"
                    class="w-full px-4 py-2 bg-gray-900 border border-gray-700 rounded-xl text-white placeholder-gray-500 focus:ring-2 focus:ring-blue-400 focus:outline-none focus:border-blue-400 transition">
            </div>

            <div>
                <label class="block text-gray-300 mb-1">Email</label>
                <input type="email" placeholder="Masukkan email"
                    class="w-full px-4 py-2 bg-gray-900 border border-gray-700 rounded-xl text-white placeholder-gray-500 focus:ring-2 focus:ring-blue-400 focus:outline-none focus:border-blue-400 transition">
            </div>

            <div>
                <label class="block text-gray-300 mb-1">Pesan</label>
                <textarea rows="4" placeholder="Tulis pesan..."
                    class="w-full px-4 py-2 bg-gray-900 border border-gray-700 rounded-xl text-white placeholder-gray-500 focus:ring-2 focus:ring-blue-400 focus:outline-none focus:border-blue-400 transition"></textarea>
            </div>

            <button type="submit"
                class="w-full bg-blue-500 text-white py-3 rounded-xl shadow-lg hover:bg-blue-600 hover:scale-[1.02] transition duration-300">
                Kirim Pesan
            </button>

        </form>

    </div>

</div>

@endsection
