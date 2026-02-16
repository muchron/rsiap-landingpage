@extends('app')

@section('content')
    <div id="carrousel">
        <x-beranda.carousel />
    </div>

    <div id="poliklinik" class="mt-10">
        <livewire:beranda.filter-poliklinik />
    </div>

    <div id="artikel" class="">
        <x-beranda.artikel />
    </div>

    <div id="layanan">
        <x-beranda.layanan />
    </div>

    <div class="mx-auto w-full">

        <div class="w-full h-[500px] overflow-hidden 
                dark:grayscale dark:invert dark:brightness-90">

            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d50782.75122370396!2d109.63267365631181!3d-6.940885519766223!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7021431da6a5c7%3A0xa27e71c67601f470!2sRSIA%20Aisyiyah%20Pekajangan!5e0!3m2!1sid!2sid!4v1736173371324!5m2!1sid!2sid"
                class="w-full h-full border-0"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>

        </div>

    </div>
@endsection

@push('scripts')
@endpush
