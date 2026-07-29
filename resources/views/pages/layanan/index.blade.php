@extends('app')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-6">{{ $title }}</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($layanans as $layanan)
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
                    <h2 class="text-xl font-semibold mb-4">{{ $layanan['title'] }}</h2>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">{{ $layanan['desc'] }}</p>
                    <a href="{{ $layanan['link'] }}" class="text-blue-500 hover:underline">Learn More</a>
                </div>
            @endforeach
        </div>

    </div>
    <section class="py-16 px-6 lg:px-20
        bg-gradient-to-r
        from-blue-50 via-blue-100 to-blue-200
        dark:from-gray-900 dark:via-gray-800 dark:to-gray-900">
        <div class="max-w-3xl mb-12">
            <h2 class="text-4xl font-black text-blue-900 dark:text-white mb-4">Pilihan Ruang Inap</h2>
            <p class="text-lg text-blue-800/70 dark:text-blue-300/60 font-medium">
                Kami mengusung konsep <span class="text-blue-600 font-bold">"Single Bed Policy"</span> di hampir semua kelas layanan untuk memberikan privasi total selama masa pemulihan.
            </p>
        </div>

        <div class="grid grid-cols-1 gap-8 md:gap-12">
            @php
                $kamars = [
                    [
                        'name' => 'VIP Ar-Raudhah',
                        'desc' => 'Kenyamanan eksklusif dengan fasilitas lengkap untuk privasi maksimal keluarga.',
                        'image' => 'kamar-vip.jpg',
                        'price' => 'Rp 850.000',
                        'features' => ['Sofa Bed', 'AC & Smart TV', 'Kulkas', 'Welcome Drink'],
                        'color' => 'gold',
                    ],
                    [
                        'name' => 'Kelas 1 (An-Nisa)',
                        'desc' => 'Kamar modern dengan kapasitas 1 pasien, menjamin ketenangan istirahat.',
                        'image' => 'kamar-kelas1.jpg',
                        'price' => 'Rp 600.000',
                        'features' => ['1 Pasien 1 Kamar', 'AC', 'Kamar Mandi Dalam'],
                        'color' => 'blue',
                    ],
                    [
                        'name' => 'Kelas 1 (An-Nisa)',
                        'desc' => 'Kamar modern dengan kapasitas 1 pasien, menjamin ketenangan istirahat.',
                        'image' => 'kamar-kelas1.jpg',
                        'price' => 'Rp 600.000',
                        'features' => ['1 Pasien 1 Kamar', 'AC', 'Kamar Mandi Dalam'],
                        'color' => 'blue',
                    ],
                    [
                        'name' => 'Kelas 1 (An-Nisa)',
                        'desc' => 'Kamar modern dengan kapasitas 1 pasien, menjamin ketenangan istirahat.',
                        'image' => 'kamar-kelas1.jpg',
                        'price' => 'Rp 600.000',
                        'features' => ['1 Pasien 1 Kamar', 'AC', 'Kamar Mandi Dalam'],
                        'color' => 'blue',
                    ],
                    [
                        'name' => 'Kelas 1 (An-Nisa)',
                        'desc' => 'Kamar modern dengan kapasitas 1 pasien, menjamin ketenangan istirahat.',
                        'image' => 'kamar-kelas1.jpg',
                        'price' => 'Rp 600.000',
                        'features' => ['1 Pasien 1 Kamar', 'AC', 'Kamar Mandi Dalam'],
                        'color' => 'blue',
                    ],
                    [
                        'name' => 'Kelas 1 (An-Nisa)',
                        'desc' => 'Kamar modern dengan kapasitas 1 pasien, menjamin ketenangan istirahat.',
                        'image' => 'kamar-kelas1.jpg',
                        'price' => 'Rp 600.000',
                        'features' => ['1 Pasien 1 Kamar', 'AC', 'Kamar Mandi Dalam'],
                        'color' => 'blue',
                    ],
                    [
                        'name' => 'Kelas 1 (An-Nisa)',
                        'desc' => 'Kamar modern dengan kapasitas 1 pasien, menjamin ketenangan istirahat.',
                        'image' => 'kamar-kelas1.jpg',
                        'price' => 'Rp 600.000',
                        'features' => ['1 Pasien 1 Kamar', 'AC', 'Kamar Mandi Dalam'],
                        'color' => 'blue',
                    ],
                    [
                        'name' => 'Kelas 1 (An-Nisa)',
                        'desc' => 'Kamar modern dengan kapasitas 1 pasien, menjamin ketenangan istirahat.',
                        'image' => 'kamar-kelas1.jpg',
                        'price' => 'Rp 600.000',
                        'features' => ['1 Pasien 1 Kamar', 'AC', 'Kamar Mandi Dalam'],
                        'color' => 'blue',
                    ],
                    [
                        'name' => 'Kelas 1 (An-Nisa)',
                        'desc' => 'Kamar modern dengan kapasitas 1 pasien, menjamin ketenangan istirahat.',
                        'image' => 'kamar-kelas1.jpg',
                        'price' => 'Rp 600.000',
                        'features' => ['1 Pasien 1 Kamar', 'AC', 'Kamar Mandi Dalam'],
                        'color' => 'blue',
                    ],
                    [
                        'name' => 'Kelas 2',
                        'desc' => 'Pilihan tepat dengan fasilitas standar medis yang tetap mengutamakan kebersihan.',
                        'image' => 'kamar-kelas2.jpg',
                        'price' => 'Rp 450.000',
                        'features' => ['2 Pasien Per Kamar', 'AC', 'Tirai Privasi'],
                        'color' => 'green',
                    ],
                    [
                        'name' => 'Kelas 2',
                        'desc' => 'Pilihan tepat dengan fasilitas standar medis yang tetap mengutamakan kebersihan.',
                        'image' => 'kamar-kelas2.jpg',
                        'price' => 'Rp 450.000',
                        'features' => ['2 Pasien Per Kamar', 'AC', 'Tirai Privasi'],
                        'color' => 'green',
                    ],
                    [
                        'name' => 'Kelas 2',
                        'desc' => 'Pilihan tepat dengan fasilitas standar medis yang tetap mengutamakan kebersihan.',
                        'image' => 'kamar-kelas2.jpg',
                        'price' => 'Rp 450.000',
                        'features' => ['2 Pasien Per Kamar', 'AC', 'Tirai Privasi'],
                        'color' => 'green',
                    ],
                    [
                        'name' => 'Kelas 2',
                        'desc' => 'Pilihan tepat dengan fasilitas standar medis yang tetap mengutamakan kebersihan.',
                        'image' => 'kamar-kelas2.jpg',
                        'price' => 'Rp 450.000',
                        'features' => ['2 Pasien Per Kamar', 'AC', 'Tirai Privasi'],
                        'color' => 'green',
                    ],
                    [
                        'name' => 'Kelas 2',
                        'desc' => 'Pilihan tepat dengan fasilitas standar medis yang tetap mengutamakan kebersihan.',
                        'image' => 'kamar-kelas2.jpg',
                        'price' => 'Rp 450.000',
                        'features' => ['2 Pasien Per Kamar', 'AC', 'Tirai Privasi'],
                        'color' => 'green',
                    ],
                ];
            @endphp
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
                @foreach ($kamars as $kamar)
                    <div class="group bg-white dark:bg-gray-800 rounded-[2rem] overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 border border-blue-50 dark:border-gray-700">
                        <div class="flex flex-col sm:flex-row h-full">

                            <div class="sm:w-2/5 relative overflow-hidden h-48 sm:h-auto">
                                <img src="{{ asset('images/' . $kamar['image']) }}"
                                    alt="{{ $kamar['name'] }}"
                                    class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                            </div>

                            <div class="sm:w-3/5 p-5 md:p-6 flex flex-col justify-between">
                                <div>
                                    <div class="flex justify-between items-start mb-2">
                                        <h3 class="text-lg md:text-xl font-bold text-blue-900 dark:text-white leading-tight">
                                            {{ $kamar['name'] }}
                                        </h3>
                                    </div>

                                    <p class="text-gray-500 dark:text-gray-400 text-xs md:text-sm line-clamp-2 mb-4">
                                        {{ $kamar['desc'] }}
                                    </p>

                                    <div class="flex flex-wrap gap-2 mb-4">
                                        @foreach (array_slice($kamar['features'], 0, 3) as $f)
                                            <span class="bg-blue-50 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 text-[10px] md:text-xs font-bold px-2.5 py-1 rounded-lg">
                                                {{ $f }}
                                            </span>
                                        @endforeach
                                    </div>
                                </div>

                                <div class="flex items-center justify-between pt-4 border-t border-gray-100 dark:border-gray-700">
                                    <div class="text-blue-600 dark:text-blue-400 font-black text-sm md:text-base">
                                        {{ $kamar['price'] }} <span class="text-[10px] font-medium opacity-70">/hari</span>
                                    </div>
                                    <button class="bg-blue-600 hover:bg-blue-700 text-white text-xs font-bold px-4 py-2 rounded-xl transition-colors">
                                        Detail
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
