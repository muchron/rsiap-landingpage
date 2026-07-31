<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description"
        content="RSIA Aisyiyah Pekajangan menyediakan layanan kesehatan unggulan untuk ibu dan anak. Daftar periksa dokter lebih mudah & cepat melalui aplikasi RSIAP Mobile.">
    <meta name="keywords"
        content="RSIA Aisyiyah Pekajangan, Rumah Sakit Ibu dan Anak, Jadwal Dokter RSIA, RSIAP Mobile, Rumah Sakit Pekalongan">
    <meta name="author" content="RSIA Aisyiyah Pekajangan">
    <meta name="robots" content="index, follow">

    <meta property="og:title" content="@yield('meta_title', 'RSIA Aisyiyah Pekajangan')">
    <meta property="og:description"
        content="@yield('meta_desc', 'RSIA Aisyiyah Pekajangan menyediakan layanan kesehatan unggulan untuk ibu dan anak. Daftar periksa dokter lebih mudah & cepat melalui aplikasi RSIAP Mobile.')">
    <meta property="og:image" content="@yield('meta_image', asset('images/logo-rsia-aisyiyah.png'))">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">

    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="RSIA Aisyiyah Pekajangan">
    <meta property="twitter:description" content="Layanan kesehatan Ibu dan Anak profesional dan Islami di Pekajangan.">
    <meta property="twitter:image" content="{{ asset('images/logo-rsia-aisyiyah.png') }}">

    <link rel="canonical" href="{{ url()->current() }}">

    {{-- create favicon --}}
    <link rel="icon" href="{{ asset('icon/favicon.png') }}" type="image/x-icon">
    <title>
        {{ $title ?? (request()->segment(1) ? ucwords(str_replace('-', ' ', request()->segment(1))) . ' | RSIA Aisyiyah Pekajangan' : 'RSIA Aisyiyah Pekajangan') }}
    </title>

    <style>
        /* Mengatur warna dan tinggi loading bar */
        .livewire-progress-bar {
            background-color: #16a34a !important;
            /* Warna hijau RSIA */
            height: 10px !important;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-page {
            animation: fadeIn 0.6s ease-out forwards;
        }

        .nprogress-bar {
            background: #16a34a !important;
            /* Hijau RSIA */
            height: 4px !important;
            z-index: 9999 !important;
        }

        .nprogress-spinner {
            display: block !important;
            z-index: 9999 !important;
        }

        @layer base {
            body {
                @apply transition-colors duration-500 ease-in-out;
            }

            /* Menargetkan semua elemen agar transisi warna berjalan mulus */
            *,
            ::before,
            ::after {
                transition-property: background-color, border-color, color, fill, stroke;
                transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
                transition-duration: 500ms;
            }
        }
    </style>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100..900&family=Noto+Sans+Mono:wght@100..900&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Corinthia&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <script script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "MedicalOrganization",
  "name": "RSIA Aisyiyah Pekajangan",
  "url": "{{ url('/') }}",
  "logo": "{{ asset('images/logo-rsia.png') }}",
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "+62-856-4000-9934",
    "contactType": "customer service",
    "areaServed": "ID",
    "availableLanguage": "Indonesian"
  },
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Jl. Raya Pekajangan No. 610",
    "addressLocality": "Pekalongan",
    "addressRegion": "Jawa Tengah",
    "postalCode": "51171",
    "addressCountry": "ID"
  },
  "hasPart": [
    {
      "@type": "WebPage",
      "name": "Beranda",
      "url": "{{ url('/') }}"
    },
    {
      "@type": "WebPage",
      "name": "Tentang Kami",
      "url": "{{ url('/tentang-kami') }}"
    },
    {
      "@type": "WebPage",
      "name": "Jadwal Dokter",
      "url": "{{ url('/jadwal-dokter') }}"
    },
    {
      "@type": "WebPage",
      "name": "Layanan Unggulan",
      "url": "{{ url('/layanan') }}"
    },
    {
      "@type": "WebPage",
      "name": "Kontak",
      "url": "{{ url('/kontak') }}"
    }
  ]
}
</script>
    @stack('styles')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="bg-white dark:bg-gray-900 flex flex-col min-h-screen">
    <header class="fixed top-0 w-full z-50"> @include('components.navbar')
    </header>

    <main class="flex-grow pt-24 lg:pt-20 lg:mt-12 animate-page">
        @yield('content')
    </main>
    <div class="fixed bottom-8 right-8 z-[100] flex flex-col gap-4">
        <a href="https://wa.me/6285640009934" target="_blank"
            class="w-14 h-14 bg-[#25D366] text-white rounded-2xl shadow-sm shadow-green-200 dark:shadow-none flex items-center justify-center hover:scale-110 hover:-rotate-6 transition-all duration-300 group">
            <i class="ri-whatsapp-line text-3xl transition-transform group-hover:scale-110"></i>

            <span
                class="absolute right-16 bg-white dark:bg-gray-800 text-gray-800 dark:text-white text-xs font-bold px-3 py-2 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap pointer-events-none border border-gray-100 dark:border-gray-700">
                Chat WhatsApp
            </span>
        </a>

    </div>

    <footer class="bg-white dark:bg-gray-900 mt-auto"> @include('components.footer')
    </footer>
    @stack('scripts')
    <script>
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }

        var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
        var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            themeToggleLightIcon.classList.remove('hidden');
        } else {
            themeToggleDarkIcon.classList.remove('hidden');
        }

        var themeToggleBtn = document.getElementById('theme-toggle');

        themeToggleBtn.addEventListener('click', function () {

            themeToggleDarkIcon.classList.toggle('hidden');
            themeToggleLightIcon.classList.toggle('hidden');

            if (localStorage.getItem('color-theme')) {
                if (localStorage.getItem('color-theme') === 'light') {
                    document.documentElement.classList.add('dark');
                    localStorage.setItem('color-theme', 'dark');
                } else {
                    document.documentElement.classList.remove('dark');
                    localStorage.setItem('color-theme', 'light');
                }
            } else {
                if (document.documentElement.classList.contains('dark')) {
                    document.documentElement.classList.remove('dark');
                    localStorage.setItem('color-theme', 'light');
                } else {
                    document.documentElement.classList.add('dark');
                    localStorage.setItem('color-theme', 'dark');
                }
            }

        });
        document.addEventListener('livewire:navigated', () => {
            console.log(document.querySelector('#nprogress .nprogress-bar'));

            if (typeof initCarousels === 'function') {
                initCarousels();
            }
        });

    </script>
    @livewireScripts
</body>

</html>