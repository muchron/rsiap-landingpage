<div class="container mx-auto w-full p-6">
    <h1 class="md:text-2xl text-5xl font-extrabold text-center text-green-600 dark:text-green-400 mb-6">Layanan</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 items-stretch py-6 px-10 md:px-8">
        @foreach ($layanan as $value)
            <a href="#" class="group flex flex-col justify-center items-center h-full p-6 bg-white border border-gray-100 shadow-sm transition-all duration-300 hover:scale-105 hover:shadow-xl hover:z-10 dark:bg-gray-800 dark:border-gray-700">

                {{-- Logika Custom Icon berdasarkan Slug --}}
                <div class="text-5xl mb-4 text-green-600 transition-transform group-hover:rotate-6 dark:text-green-400">
                    @php
                        // Ambil icon dari map berdasarkan slug, gunakan icon default jika tidak ketemu
                        $iconClass = $iconMap[$value['slug']] ?? 'ri-file-list-3-line';
                    @endphp
                    <i class="{{ $iconClass }}"></i>
                </div>

                <h5 class="text-center text-lg md:text-xl font-bold uppercase tracking-tight text-gray-900 dark:text-white">
                    {{ $value['name'] }}
                </h5>

            </a>
        @endforeach
    </div>
</div>



<section class="flex flex-col lg:flex-row min-h-[300px] max-h-[380px] overflow-hidden bg-green-100 dark:bg-gray-800 text-white relative">
    <div class="w-full lg:w-1/2 p-8 lg:p-16 flex flex-col justify-center text-center lg:text-left h-full">
        <h2 class="text-green-400 dark:text-green-300 text-2xl font-semibold mb-2">RSIAP Mobile</h2>
        <h1 class="text-green-600 dark:text-green-400 text-4xl lg:text-5xl font-bold leading-tight mb-4">Daftar Periksa Lebih Mudah</h1>
        <p class="text-gray-500 dark:text-white mb-8 max-w-lg mx-auto lg:mx-0">
            Dengan RSIAP Mobile, periksa jadwal dokter, buat janji, dan dapatkan estimasi antrian sebelum mengunjungi. Kemudahan pelayanan kesehatan ada di tangan Anda.
        </p>
        <div class="flex flex-col sm:flex-row justify-center lg:justify-start space-y-4 sm:space-y-0 sm:space-x-4">
            <a href="#" class="inline-flex items-center justify-center bg-green-800 dark:bg-green-600 text-white px-6 py-3 rounded-lg shadow-md hover:bg-green-500 transition duration-300">
                <img src="https://upload.wikimedia.org/wikipedia/commons/7/78/Google_Play_Store_badge_EN.svg" alt="Google Play" class="h-8 mr-2">
                Google Play
            </a>
        </div>
    </div>

    <div class="w-full lg:w-1/2 flex justify-end items-center h-full">
        <img src="{{ asset('images/rsiap-mobile-mockup.png') }}" alt="Halo Hermina App on Phone" class="h-full w-full object-fill">
    </div>
</section>
