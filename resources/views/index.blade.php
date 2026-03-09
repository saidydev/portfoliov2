<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <link rel="stylesheet" href="./fontawesome-free-6.5.1-web/css/all.css">

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- AOS CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">

    <!-- AOS JS (before </body>) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
</head>

<body class="bg-[#011635]">
    @include('layouts.nav')
    <section class="lg:mx-[10%] lg:pt-[10%] pt-[40%] flex flex-col gap-4 lg:w-3/5 mx-[5%] h-screen">

        <h3 class="text-[#4db5ff] text-lg" data-aos="fade-up" data-aos-delay="100">Hi, My name is</h3>

        <h1 class="text-5xl font-bold text-[#ffff]" data-aos="fade-up" data-aos-delay="200">Saidi Hassan</h1>

        <h2 class="text-4xl font-bold text-[#a7c2d6]" data-aos="fade-up" data-aos-delay="300">I build things for the
            web.</h2>

        <p class="text-md text-gray-400 mt-2" data-aos="fade-up" data-aos-delay="400">
            I’m a software developer specializing in building (and occasionally designing) exceptional digital
            experiences. Currently, I’m focused on creating accessible, user-centered products that make a meaningful
            impact.
        </p>

        <div class="flex items-center gap-4" data-aos="fade-up" data-aos-delay="500">
            <a href="https://whatsap.com/dl/">
                <i class="fa-brands fa-whatsapp bg-[#4db5ff] p-3 lg:p-3 text-white rounded-md"></i>
            </a>
            <a href="https://x.com/tundasaid9">
                <i class="fa-brands fa-twitter bg-[#4db5ff] p-3 lg:p-3 text-white rounded-md"></i>
            </a>
            <a href="https://github.com/saidydev/">
                <i class="fa-brands fa-github bg-[#4db5ff] p-3 lg:p-3 text-white rounded-md"></i>
            </a>
        </div>
    </section>

    {{-- About --}}
    <section class="lg:mx-[8%] mx-[4%] lg:h-screen" id="about">
        <div class="flex gap-4 items-center" data-aos="fade-right">
            <h1 class="text-[#4db5ff] text-xl">About Me</h1>
            <hr class="w-40 h-0.5 bg-gray-400 border-0">
        </div>

        <div class="mt-[2%] mb-[5%] lg:flex lg:flex-row lg:gap-4 flex flex-col gap-4">

            <!-- Text & Skills -->
            <div class="flex flex-col gap-4 lg:flex lg:flex-col lg:gap-4 lg:w-1/2 lg:h-auto">

                <div class="text-white text-sm" data-aos="fade-up" data-aos-delay="100">
                    <p class="text-md text-gray-200">
                        I am a technology professional passionate about designing and developing innovative, efficient
                        digital solutions that address real-world challenges. My focus lies in mastering software
                        development and creating systems that enhance functionality, usability, and overall user
                        experience. With a commitment to continuous learning and growth, I strive to contribute to
                        impactful projects that drive meaningful change in the tech landscape.
                    </p>
                </div>

                <div class="text-white text-sm" data-aos="fade-up" data-aos-delay="200">
                    <p class="text-md text-gray-200">
                        My goal is to develop systems that solve real-world problems while delivering clean design and
                        efficient performance. I continuously improve my skills by exploring new technologies and
                        working on practical projects that strengthen my experience in software development. Below are
                        some of the technologies and programming languages I have worked with during my journey in tech.
                    </p>
                </div>

                <div class="grid lg:grid-cols-3 grid-cols-2 gap-2" data-aos="fade-up" data-aos-delay="300">
                    <div class="flex items-center gap-2 hover:scale-105 transition-transform duration-300">
                        <i class="fa-solid fa-circle text-[8px] text-[#4db5ff]"></i>
                        <span class="text-gray-200 text-md">JavaScript</span>
                    </div>
                    <div class="flex items-center gap-2 hover:scale-105 transition-transform duration-300">
                        <i class="fa-solid fa-circle text-[8px] text-[#4db5ff]"></i>
                        <span class="text-gray-200 text-md">React</span>
                    </div>
                    <div class="flex items-center gap-2 hover:scale-105 transition-transform duration-300">
                        <i class="fa-solid fa-circle text-[8px] text-[#4db5ff]"></i>
                        <span class="text-gray-200 text-md">Tailwind</span>
                    </div>
                    <div class="flex items-center gap-2 hover:scale-105 transition-transform duration-300">
                        <i class="fa-solid fa-circle text-[8px] text-[#4db5ff]"></i>
                        <span class="text-gray-200 text-md">PHP</span>
                    </div>
                    <div class="flex items-center gap-2 hover:scale-105 transition-transform duration-300">
                        <i class="fa-solid fa-circle text-[8px] text-[#4db5ff]"></i>
                        <span class="text-gray-200 text-md">Laravel</span>
                    </div>
                    <div class="flex items-center gap-2 hover:scale-105 transition-transform duration-300">
                        <i class="fa-solid fa-circle text-[8px] text-[#4db5ff]"></i>
                        <span class="text-gray-200 text-md">Mysql</span>
                    </div>
                </div>

                <!-- Contact Button -->
                <a href="mailto:saidydev@gmail.com" class="bg-transparent text-[#4db5ff] border border-[#4db5ff] px-4 py-2 rounded-sm text-center w-32
                      transition-all duration-300 hover:bg-[#4db5ff] hover:text-white hover:scale-105"
                    data-aos="fade-up" data-aos-delay="400">
                    Let's Talk
                </a>
            </div>

            <!-- Image Section -->
            <div class="w-full lg:w-1/2 flex justify-center" data-aos="fade-left" data-aos-delay="500">
                <div class="relative lg:w-[50%] w-full h-70 lg:h-40 mb-[5%] lg:mb-0">
                    <div
                        class="absolute lg:top-6 lg:left-6 top-4 left-4 w-full h-full border-2 border-[#4db5ff] rounded-sm">
                    </div>
                    <div class="relative w-full h-full rounded-sm"
                        style="background-image: url('./images/4.jpg'); background-size: cover; background-position: center;">
                    </div>
                </div>
            </div>

        </div>
    </section>


    {{-- Projects --}}
    <section class="lg:mx-[8%] mx-[4%] h-auto" id="project">
        <div class="flex gap-4 mb-[1%] items-center">
            <h1 class="text-[#4db5ff] text-xl">Things I've Built</h1>
            <hr class="w-40 h-0.5 bg-gray-400 border-0">
        </div>
        <p class="text-gray-200 text-sm mb-[2%] lg:w-[50%]">
            Here are some of the projects and solutions I have built throughout my development journey,
            either independently or through collaboration with other developers. Each project reflects
            my passion for creating practical, efficient, and user-focused digital solutions.
        </p>
        <div class="lg:grid lg:grid-cols-3 grid grid-cols-1 gap-4 lg:gap-6">
            <div class="flex flex-col bg-[#0e2a53] rounded-sm duration-300" data-aos="fade-up">
                <div class="w-full h-40 rounded-sm lg:rounded-sm"
                    style="margin: 0 auto; display: grid; place-items: center; background-image: url('./images/sesware.png'); background-size: cover;">
                </div>
                <div class="p-4 flex flex-col gap-2">
                    <div class="flex gap-1 items-center justify-between">
                        <h2 class="text-white text-lg font-bold mt-2">Software company website</h2>
                        <div class="flex gap-4">
                            <a href="https://github.com/saidydev/sesware-nexus">
                                <i class="fa-brands fa-github text-lg text-[#4db5ff]"></i>
                            </a>
                            <a href="https://seswarenexus.com/">
                                <i class="fa-solid fa-external-link text-lg text-[#4db5ff]"></i>
                            </a>
                        </div>
                    </div>
                    <p class="text-gray-400 text-sm">A professional website developed for Sesware Nexus to showcase the
                        company’s software services and digital solutions.</p>
                    <div class="flex items-center justify-between gap-2 my-2">
                        <h3 class="text-[#a7c2d6]">Tailwind CSS</h3>
                        <h3 class="text-[#a7c2d6]">Laravel</h3>
                    </div>
                </div>
            </div>
            <div class="flex flex-col bg-[#0e2a53] rounded-sm duration-300" data-aos="fade-up" data-aos-delay="100">
                <div class="w-full h-40 rounded-sm lg:rounded-sm"
                    style="margin: 0 auto; display: grid; place-items: center; background-image: url('./images/mchongo.png'); background-size: cover;">
                </div>
                <div class="p-4 flex flex-col gap-2">
                    <div class="flex gap-1 items-center justify-between">
                        <h2 class="text-white text-lg font-bold mt-2">Nipe Mchongo platform</h2>
                        <div class="flex gap-4">
                            <a href="https://github.com/saidydev/nipe-mchongo">
                                <i class="fa-brands fa-github text-lg text-[#4db5ff]"></i>
                            </a>
                            <a href="https://nipemchongo.seswarenexus.com">
                                <i class="fa-solid fa-external-link text-lg text-[#4db5ff]"></i>
                            </a>
                        </div>
                    </div>
                    <p class="text-gray-400 text-sm">A platform that simplifies access to job opportunities in Tanzania
                        by connecting job seekers with available opportunities.</p>
                    <div class="flex items-center justify-between gap-2 my-2">
                        <h3 class="text-[#a7c2d6]">Tailwind CSS</h3>
                        <h3 class="text-[#a7c2d6]">React JS</h3>
                        <h3 class="text-[#a7c2d6]">Laravel</h3>
                    </div>
                </div>
            </div>
            <div class="flex flex-col bg-[#0e2a53] rounded-sm duration-300" data-aos="fade-up" data-aos-delay="200">
                <div class="w-full h-40 rounded-sm lg:rounded-sm"
                    style="margin: 0 auto; display: grid; place-items: center; background-image: url('./images/venue.png'); background-size: cover;">
                </div>
                <div class="p-4 flex flex-col gap-2">
                    <div class="flex gap-1 items-center justify-between">
                        <h2 class="text-white text-lg font-bold mt-2">Smart University Venue</h2>
                        <div class="flex gap-4">
                            <a href="https://github.com/saidydev/smart-university-venue">
                                <i class="fa-brands fa-github text-lg text-[#4db5ff]"></i>
                            </a>
                            <a href="">
                                <i class="fa-solid fa-external-link text-lg text-[#4db5ff]"></i>
                            </a>
                        </div>
                    </div>
                    <p class="text-gray-400 text-sm">A smart venue management system designed to help universities
                        efficiently manage and allocate rooms for events and academic activities.</p>
                    <div class="flex items-center justify-between gap-2 my-2">
                        <h3 class="text-[#a7c2d6]">Tailwind CSS</h3>
                        <h3 class="text-[#a7c2d6]">Laravel</h3>
                    </div>
                </div>
            </div>
            <div class="flex flex-col bg-[#0e2a53] rounded-sm duration-300" data-aos="fade-up" data-aos-delay="300">
                <div class="w-full h-40 rounded-sm lg:rounded-sm"
                    style="margin: 0 auto; display: grid; place-items: center; background-image: url('./images/school.png'); background-size: cover;">
                </div>
                <div class="p-4 flex flex-col gap-2">
                    <div class="flex gap-1 items-center justify-between">
                        <h2 class="text-white text-lg font-bold mt-2">SES Education platform</h2>
                        <div class="flex gap-4">
                            <a href="">
                                <i class="fa-brands fa-github text-lg text-[#4db5ff]"></i>
                            </a>
                            <a href="https://sesedu.seswarenexus.com/auth-login">
                                <i class="fa-solid fa-external-link text-lg text-[#4db5ff]"></i>
                            </a>
                        </div>
                    </div>
                    <p class="text-gray-400 text-sm">A system designed to manage school operations including student
                        records, attendance, and academic activities.</p>
                    <div class="flex items-center justify-between gap-2 my-2">
                        <h3 class="text-[#a7c2d6]">Tailwind CSS</h3>
                        <h3 class="text-[#a7c2d6]">React JS</h3>
                        <h3 class="text-[#a7c2d6]">Laravel</h3>
                    </div>
                </div>
            </div>
            <div class="flex flex-col bg-[#0e2a53] rounded-sm duration-300" data-aos="fade-up" data-aos-delay="400">
                <div class="w-full h-40 rounded-sm lg:rounded-sm"
                    style="margin: 0 auto; display: grid; place-items: center; background-image: url('./images/kigongoni.png'); background-size: cover;">
                </div>
                <div class="p-4 flex flex-col gap-2">
                    <div class="flex gap-1 items-center justify-between">
                        <h2 class="text-white text-lg font-bold mt-2">Kigongoni Gazella Hotel</h2>
                        <div class="flex gap-4">
                            <a href="">
                                <i class="fa-brands fa-github text-lg text-[#4db5ff]"></i>
                            </a>
                            <a href="https://kigongoni.seswarenexus.com/">
                                <i class="fa-solid fa-external-link text-lg text-[#4db5ff]"></i>
                            </a>
                        </div>
                    </div>
                    <p class="text-gray-400 text-sm">A hotel management system designed to streamline booking,
                        reservations, and overall hotel operations efficiently.</p>
                    <div class="flex items-center justify-between gap-2 my-2">
                        <h3 class="text-[#a7c2d6]">Tailwind CSS</h3>
                        <h3 class="text-[#a7c2d6]">Laravel</h3>
                    </div>
                </div>
            </div>
            <div class="flex flex-col bg-[#0e2a53] rounded-sm duration-300" data-aos="fade-up" data-aos-delay="500">
                <div class="w-full h-40 rounded-sm lg:rounded-sm"
                    style="margin: 0 auto; display: grid; place-items: center; background-image: url('./images/agrimarket.png'); background-size: cover;">
                </div>
                <div class="p-4 flex flex-col gap-2">
                    <div class="flex gap-1 items-center justify-between">
                        <h2 class="text-white text-lg font-bold mt-2">Agrimarket Management</h2>
                        <div class="flex gap-4">
                            <a href="https://github.com/saidydev/Agrimarket-Management-System">
                                <i class="fa-brands fa-github text-lg text-[#4db5ff]"></i>
                            </a>
                            <a href="">
                                <i class="fa-solid fa-external-link text-lg text-[#4db5ff]"></i>
                            </a>
                        </div>
                    </div>
                    <p class="text-gray-400 text-sm">A platform designed to manage agricultural markets, connecting
                        farmers with buyers and streamlining transactions.</p>
                    <div class="flex items-center justify-between gap-2 my-2">
                        <h3 class="text-[#a7c2d6]">Tailwind CSS</h3>
                        <h3 class="text-[#a7c2d6]">Laravel</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- CONTACT -->

    <section class="lg:mx-[8%] lg:mb-[5%] mb-[3%] mx-[1%] flex flex-col gap-4" id="contact">
        <div class="justify-center items-center text-center mt-[5%] flex flex-col gap-1">
            <h1 class="text-[#4db5ff] text-2xl font-bold">Get In Touch</h1>
        </div>
        <p class="text-center text-slate-200 text-sm mx-[15%]">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            Labore ut quo eligendi praesentium? Cum, voluptatum! At, expedita laudantium. Quis, velit.</p>
        <a href="mailto:saidydev@gmail.com"
            class="bg-inherit text-[#4db5ff] border  border-[#4db5ff] px-1 py-2 t rounded-sm text-center w-32"
            style="margin: 0 auto;">
            <button class="text-[#4db5ff]">Let's Talk</button>
        </a>
    </section>

    <!-- FOOTER -->
    <footer class="text-[#4db5ff] w-full lg:text-center my-4 mb-[7%]">
        <div class="flex justify-center gap-4 mx-4 lg:justify-center my-4 lg:my-4">
            <a href="">
                <i class="fa-brands fa-whatsapp text-white rounded-md"></i>
            </a>
            <a href="https://x.com/tundasaid9">
                <i class="fa-brands fa-x text-white rounded-md"></i>
            </a>
            <a href="">
                <i class="fa-brands fa-linkedin text-white rounded-md"></i>
            </a>
            <a href="">
                <i class="fa-brands fa-instagram text-white rounded-md"></i>
            </a>
            <a href="https://github.com/saidydev/">
                <i class="fa-brands fa-github text-white rounded-md"></i>
            </a>
        </div>
        <div class="flex gap-3 items-center justify-center text-slate-100 text-center mb-2">
            <span class="text-sm">Designed & Built by Said Hassan</span>
        </div>
    </footer>

    <script>
        AOS.init({
            duration: 1000,
            once: false,
            easing: 'ease-in-out',
        });
    </script>
</body>

</html>