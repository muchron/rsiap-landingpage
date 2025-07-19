@extends('app')

@section('content')
    <div id="carrousel" class="md:mt-14 mt-16">
        @include('components.beranda.carousel')
    </div>
    <div id="hero" class="bg-green-100 dark:bg-gray-800">
        @include('components.beranda.hero')
    </div>

    <div id="poliklinik" class="mt-10">
        @include('components.beranda.poliklinik')
    </div>

    <div id="artikel" class="bg-green-100 dark:bg-gray-800">
        {{-- @include('components.beranda.artikel') --}}
        <x-beranda.artikel />
    </div>

    <div id="layanan">
        @include('components.beranda.layanan')
    </div>

    <div class="mx-auto w-full">
        <h1 class="md:text-2xl text-5xl font-extrabold text-center text-green-600 dark:text-green-400 my-10">Lokasi Kami</h1>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d50782.75122370396!2d109.63267365631181!3d-6.940885519766223!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7021431da6a5c7%3A0xa27e71c67601f470!2sRSIA%20Aisyiyah%20Pekajangan!5e0!3m2!1sid!2sid!4v1736173371324!5m2!1sid!2sid" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
@endsection

@push('scripts')
@endpush
