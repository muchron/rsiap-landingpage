@extends('app')

@section('content')
    <div class="container mx-auto w-full justify-center items-center mt-60">
        <div class="text-center">
            <h1 class="text-7xl font-extrabold text-gray-800 dark:text-white">404</h1>
            <p class="text-lg text-gray-600 dark:text-gray-400 mt-4">
                Halaman yang anda kunjungi belum tersedia
            </p>
            <p class="text-sm text-gray-500 dark:text-gray-500 mt-2">
                Bisa jadi halaman yang anda kunjungi telah dihapus atau dipindahkan
            </p>
            <div class="mt-6">

                <a href="{{ url('/') }}" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-green-600 dark:hover:bg-green-700 focus:outline-none dark:focus:ring-green-800">
                    <i class="ri-arrow-left-line"></i> Kembali
                </a>
            </div>
            <div class="mt-8">
                <img src="{{ asset('images/404.png') }}"
                    alt="404 Illustration" class="w-full max-w-md mx-auto">
            </div>
        </div>
    </div>
@endsection
