<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="RSIA Aisyiyah Pekajangan menyediakan layanan kesehatan unggulan untuk ibu dan anak. Daftar periksa dokter lebih mudah & cepat melalui aplikasi RSIAP Mobile.">
    <meta name="keywords" content="RSIA Aisyiyah Pekajangan, Rumah Sakit Ibu dan Anak, Jadwal Dokter RSIA, RSIAP Mobile, Rumah Sakit Pekalongan">
    <meta name="author" content="RSIA Aisyiyah Pekajangan">
    <meta name="robots" content="index, follow">

    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="RSIA Aisyiyah Pekajangan - Mudah & Cepat dengan RSIAP Mobile">
    <meta property="og:description" content="Dapatkan kemudahan layanan kesehatan ibu dan anak dalam satu genggaman. Cek jadwal dan buat janji dokter sekarang.">
    <meta property="og:image" content="{{ asset('images/og-image-rsia.jpg') }}">

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

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100..900&family=Noto+Sans+Mono:wght@100..900&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
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

    <main class="flex-grow pt-16 lg:pt-20 lg:mt-12">
        @yield('content')
    </main>

    <footer class="bg-white dark:bg-gray-900 mt-auto"> @include('components.footer')
    </footer>


    @stack('scripts')
    <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }

        var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
        var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

        // Change the icons inside the button based on previous settings
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            themeToggleLightIcon.classList.remove('hidden');
        } else {
            themeToggleDarkIcon.classList.remove('hidden');
        }

        var themeToggleBtn = document.getElementById('theme-toggle');

        themeToggleBtn.addEventListener('click', function() {

            // toggle icons inside button
            themeToggleDarkIcon.classList.toggle('hidden');
            themeToggleLightIcon.classList.toggle('hidden');

            // if set via local storage previously
            if (localStorage.getItem('color-theme')) {
                if (localStorage.getItem('color-theme') === 'light') {
                    document.documentElement.classList.add('dark');
                    localStorage.setItem('color-theme', 'dark');
                } else {
                    document.documentElement.classList.remove('dark');
                    localStorage.setItem('color-theme', 'light');
                }

                // if NOT set via local storage previously
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

        document.addEventListener('scroll', (evt) => {
            // if (window.scrollY > 0) {
            //     document.getElementById('navbar').classList.add('sticky');
            // } else {
            //     document.getElementById('navbar').classList.remove('sticky');
            // }
        })
    </script>
    @livewireScripts
</body>

</html>
