<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./fontawesome-free-6.5.1-web/css/all.css">


    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Styles / Scripts -->

</head>

<body>
    <nav class="w-full fixed top-0 left-0 z-50 backdrop-blur-md shadow-md">
        <div class="max-w-7xl mx-auto px-6 flex items-center justify-between h-16">

            <!-- Logo -->
            <div class="text-[#4db5ff] font-bold text-xl">Saidydev</div>

            <!-- Desktop Menu -->
            <ul class="hidden md:flex gap-6 items-center text-white font-medium">
                <li><a href="#home" class="hover:text-black transition-colors"><span
                            class="text-[#4db5ff]">01.</span> Home</a></li>
                <li><a href="#about" class="hover:text-black transition-colors"><span
                            class="text-[#4db5ff]">02.</span> About</a></li>
                <li><a href="#project" class="hover:text-black transition-colors"><span
                            class="text-[#4db5ff]">03.</span> Projects</a></li>
                <li><a href="#contact" class="hover:text-black transition-colors"><span
                            class="text-[#4db5ff]">04.</span> Contact</a></li>
                <li>
                    <a href="#" download class="bg-transparent text-[#4db5ff] border border-[#4db5ff] px-4 py-2 rounded-sm text-center w-32
                transition-all duration-300 hover:bg-[#4db5ff] hover:text-white">
                        Resume
                    </a>
                </li>
            </ul>

            <!-- Mobile Hamburger -->
            <div class="md:hidden">
                <button id="mobile-menu-btn" class="text-white focus:outline-none">
                    <i id="menu-icon" class="fa-solid fa-bars text-xl transition-transform duration-300"></i>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu"
            class="fixed top-16 right-0 h-screen w-64 transform translate-x-full md:hidden transition-transform duration-500 ease-in-out z-40">
            <ul
                class="flex flex-col p-6 gap-6 text-white font-medium bg-[#011635]/70 backdrop-blur-md h-full">
                <li><a href="#home" class="hover:text-[#4db5ff] transition-colors"><span
                            class="text-[#4db5ff]">01.</span> Home</a></li>
                <li><a href="#about" class="hover:text-[#4db5ff] transition-colors"><span
                            class="text-[#4db5ff]">02.</span> About</a></li>
                <li><a href="#project" class="hover:text-[#4db5ff] transition-colors"><span
                            class="text-[#4db5ff]">03.</span> Projects</a></li>
                <li><a href="#contact" class="hover:text-[#4db5ff] transition-colors"><span
                            class="text-[#4db5ff]">04.</span> Contact</a></li>
                <li>
                    <a href="#" download class="bg-transparent text-[#4db5ff] border border-[#4db5ff] px-4 py-2 rounded-sm text-center w-full
                transition-all duration-300 hover:bg-[#4db5ff] hover:text-white">
                        Resume
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Script -->
    <script>
        const btn = document.getElementById('mobile-menu-btn');
        const menu = document.getElementById('mobile-menu');
        const icon = document.getElementById('menu-icon');

        btn.addEventListener('click', () => {
            // Toggle slide animation
            menu.classList.toggle('translate-x-full');
            menu.classList.toggle('translate-x-0');

            // Hamburger to X toggle
            if (icon.classList.contains('fa-bars')) {
                icon.classList.remove('fa-bars');
                icon.classList.add('fa-xmark');
            } else {
                icon.classList.remove('fa-xmark');
                icon.classList.add('fa-bars');
            }
        });
    </script>
</body>

</html>