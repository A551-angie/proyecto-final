<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Plataforma desarrolladores</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- Tailwind -->
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
        header {
            background:url('https://images.pexels.com/photos/2653362/pexels-photo-2653362.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940');
        }
    </style>

</head>

<body class="antialiased">
    <!-- tailwind.config.js -->
    <!-- module.exports = {}; -->

    <!-- component -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    <!-- ++++++++++++++++++++ HEADER BEGIN ++++++++++++++++++++ -->
    <div>
        <header x-data="{ isOpen: false }">
            <nav class="container px-6 py-4 mx-auto md:flex md:justify-between md:items-center">
                <div class="flex items-center justify-between">
                    <a class="text-xl font-bold text-white transition-colors duration-300 transform md:text-2xl hover:text-indigo-400" href="#">LOGO</a>

                    <!-- Mobile menu button -->
                    <div @click="isOpen = !isOpen" class="flex md:hidden">
                        <button type="button" class="text-gray-200 hover:text-gray-400 focus:outline-none focus:text-gray-400" aria-label="toggle menu">
                            <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
                                <path fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z">
                                </path>
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
                <div :class="isOpen ? 'flex' : 'hidden'" class="flex-col mt-2 space-y-4 md:flex md:space-y-0 md:flex-row md:items-center md:space-x-10 md:mt-0">
                    <a class="text-sm font-medium text-gray-200 transition-colors duration-300 transform hover:text-indigo-400" href="#">Home</a>
                    <a class="text-sm font-medium text-gray-200 transition-colors duration-300 transform hover:text-indigo-400" href="#">Templates</a>
                    <a class="text-sm font-medium text-gray-200 transition-colors duration-300 transform hover:text-indigo-400" href="#">Price</a>
                    <a class="text-sm font-medium text-gray-200 transition-colors duration-300 transform hover:text-indigo-400" href="#">Help</a>
                    @if (Route::has('login'))
                    @auth
                    <a href="{{ url('/admin') }}" class="px-4 py-1 text-sm font-medium text-center text-gray-200 transition-colors duration-300 transform border rounded hover:bg-indigo-400">Mi perfil</a>
                    @else
                    <a href="{{ route('login') }}" class="px-4 py-1 text-sm font-medium text-center text-gray-200 transition-colors duration-300 transform border rounded hover:bg-indigo-400text-sm font-medium text-gray-200 transition-colors duration-300 transform hover:text-indigo-400">Log in</a>

                    @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="px-4 py-1 text-sm font-medium text-center text-gray-200 transition-colors duration-300 transform border rounded hover:bg-indigo-400">Register</a>
                    @endif
                    @endauth
                    @endif
                </div>
            </nav>

            <section class="flex items-center justify-center" style="height: 500px;">
                <div class="text-center">
                    <p class="text-xl font-medium tracking-wider text-gray-300">Publica ahora tu perfil</p>
                    <h2 class="mt-6 mx-4 text-3xl font-bold text-white md:text-5xl">encuentra aqu?? las mejores ofertas disponibles en el mercado laboral</h2>

                    <div class="flex justify-center mt-8">
                        <a class="px-2 py-2 text-lg font-medium text-white transition-colors duration-300 transform bg-indigo-600 rounded hover:bg-indigo-500 mr-4 md:mr-10 md:px-8" href="#">Publicar tu perfil</a>
                        <a class="px-2 py-2 text-lg font-medium text-white transition-colors duration-300 transform bg-indigo-600 rounded hover:bg-indigo-500 md:px-8" href="#">Publicar vacante</a>
                    </div>
                </div>
            </section>
        </header>
        <!-- ++++++++++++++++++++ HEADER CLOSE ++++++++++++++++++++ -->


        <!-- ++++++++++++++++++++ FILTER BEGIN ++++++++++++++++++++ -->
        <section>
            <div class="max-w-5xl px-6 pb-6 mx-auto">
                <div class="container px-6 mx-auto">
                    <div class="grid gap-8 mt-6 sm:grid-cols-2 md:grid-cols-4">
                        <select class="border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            <option>Eqypt</option>
                            <option>Germany</option>
                            <option>US</option>
                        </select>
                        <select class="border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            <option>I20</option>
                            <option>GXR</option>
                            <option>BMW</option>
                        </select>
                        <select class="border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            <option>GTX2020</option>
                            <option>GRE2019</option>
                        </select>
                        <button class="px-4 py-2 font-medium tracking-wide text-white capitalize bg-blue-600 rounded hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                            Filtrar
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <!-- ++++++++++++++++++++ FILTER CLOSE ++++++++++++++++++++ -->


        <!-- ++++++++++++++++++++ ABOUT US BEGIN ++++++++++++++++++++ -->
        <section class="bg-white">
            <div class="max-w-5xl px-6 pt-14 pb-6 mx-auto text-center">
                <h2 class="text-3xl font-semibold text-gray-800">??Por qu?? publicar en <I>platform name</I>?</h2>
                <p class="max-w-lg mx-auto mt-4 text-gray-600">Estamos enfocados en la rama laboral del <B>desarrollo,</B> por lo que aqu?? encontrar??s la recopilaci??n de las mejores ofertas laborales de esta comunidad.</p>
            </div>
        </section>
        <!-- ++++++++++++++++++++ ABOUT US CLOSE ++++++++++++++++++++ -->


        <!-- ++++++++++++++++++++ PROCESS BEGIN ++++++++++++++++++++ -->
        <section class="bg-gray-100">
            <div class="max-w-5xl px-6 py-16 mx-auto">
                <div class="md:flex md:justify-between">
                    <h2 class="text-3xl font-semibold text-gray-800">??C??mo lo hacemos?</h2>
                    <!-- <a href="#" class="block mt-6 text-indigo-700 underline md:mt-0">Experienced team</a> -->
                </div>

                <div class="grid gap-8 mt-10 md:grid-cols-2 lg:grid-cols-3">
                    <div class="px-6 py-8 overflow-hidden bg-white rounded-md shadow-md">
                        <h2 class="text-xl font-medium text-gray-800">Paso 1</h2>
                        <p class="max-w-md mt-4 text-gray-500"><B>Publica tu perfil</B> de la menra m??s completa posible, esto le dar?? m??s elementos a la empresa para escoger el talento de la manera m??s oportuna.</p>
                    </div>

                    <div class="px-6 py-8 overflow-hidden bg-white rounded-md shadow-md">
                        <h2 class="text-xl font-medium text-gray-800">Paso 2</h2>
                        <p class="max-w-md mt-4 text-gray-500"><B>Postulate</B> a aquellas ofertas laborales que te llamen la atenci??n y sean acordes a tu perfil.</p>
                    </div>

                    <div class="px-6 py-8 overflow-hidden bg-white rounded-md shadow-md">
                        <h2 class="text-xl font-medium text-gray-800">Paso 3</h2>
                        <p class="max-w-md mt-4 text-gray-500">Realiza el <B>proceso de selecci??n</B> de las empresas que se comuniquen contigo, y ya est?? <B>??Firma la oportunidad de tu vida!</B></p>
                    </div>
                </div>
            </div>
        </section>
        <!-- ++++++++++++++++++++ PROCESS CLOSE ++++++++++++++++++++ -->


        <!-- ++++++++++++++++++++ IMAGES BEGIN ++++++++++++++++++++ -->
        <div>
            <div class="block md:flex justify-between">
                <div class="w-full lg:w-1/2 mb-4">
                    <div class="bg-white overflow-hidden shadow relative">
                        <img class="h-56 w-full object-cover object-center" src="https://images.unsplash.com/photo-1457282367193-e3b79e38f207?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1654&q=80" alt="">
                        <div class="px-8     py-4 h-auto md:h-40 lg:h-48">
                            <div class="block text-blue-500 hover:text-blue-600 font-semibold mb-2 text-lg md:text-base lg:text-lg">
                                Alcanza el trabajo de tus sue??os
                            </div>
                            <div class="text-gray-600 text-sm leading-relaxed block md:text-xs lg:text-sm">
                                Obt??n mejores ganancias trabajando en los proyectos que sue??as como desarrollador freelance.
                            </div>
                            <button class="px-4 py-2 my-6 font-medium tracking-wide text-white capitalize bg-blue-600 rounded hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                                Publica tu perfil
                            </button>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:w-1/2 mb-4">
                    <div class="bg-white overflow-hidden shadow relative">
                        <img class="h-56 w-full object-cover object-center" src="https://images.unsplash.com/photo-1465188162913-8fb5709d6d57?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60" alt="">
                        <div class="px-8 py-4 h-auto md:h-40 lg:h-48">
                            <div class="block text-blue-500 hover:text-blue-600 font-semibold mb-2 text-lg md:text-base lg:text-lg">
                                Encuenta los mejores desarrolladores
                            </div>
                            <div class="text-gray-600 text-sm leading-relaxed block md:text-xs lg:text-sm">
                                Queremos que obtengas los mejores resultados, por eso aqu?? encontrar??s los mejores desarrolladores para lograr el proyecto que planeas.
                            </div>
                            <button class="px-4 py-2 my-6 font-medium tracking-wide text-white capitalize bg-blue-600 rounded hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                                Publica tu proyecto
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ++++++++++++++++++++ IMAGES CLOSE ++++++++++++++++++++ -->


        <!-- ++++++++++++++++++++ IMAGE FULL SCREEN BEGIN ++++++++++++++++++++
        <section>
            <img class="object-cover object-center w-full mt-16 shadow h-80" src="https://images.unsplash.com/photo-1600069226367-412873fb0637?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80">
        </section>
        ++++++++++++++++++++ IMAGE FULL SCREEN CLOSE ++++++++++++++++++++ -->


        <!-- ++++++++++++++++++++ RECENT OFFERS BEGIN ++++++++++++++++++++ -->
        <section class="bg-white">
            <div class="max-w-5xl px-6 py-16 mx-auto text-center">
                <h2 class="text-3xl font-semibold text-gray-800">Ofertas m??s recientes</h2>
                <p class="max-w-lg mx-auto mt-4 text-gray-600">??Queremos que alcances tus propositos! Por eso aqu?? encontr??s las mejores ofertas del mercado, especialmente clasificadas para tu perfil como desarrollador.</p>

                <div class="grid gap-8 mt-6 md:grid-cols-2 lg:grid-cols-4">
                    <div>
                        <img class="object-cover object-center w-full h-64 rounded-md shadow" src="https://images.unsplash.com/photo-1614030126544-b79b92e29e98?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80">
                        <h3 class="mt-2 font-medium text-gray-700">John Doe</h3>
                        <p class="text-sm text-gray-600">CEO</p>
                    </div>

                    <div>
                        <img class="object-cover object-center w-full h-64 rounded-md shadow" src="https://images.unsplash.com/photo-1614030126544-b79b92e29e98?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80">
                        <h3 class="mt-2 font-medium text-gray-700">John Doe</h3>
                        <p class="text-sm text-gray-600">CEO</p>
                    </div>

                    <div>
                        <img class="object-cover object-center w-full h-64 rounded-md shadow" src="https://images.unsplash.com/photo-1614030126544-b79b92e29e98?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80">
                        <h3 class="mt-2 font-medium text-gray-700">John Doe</h3>
                        <p class="text-sm text-gray-600">CEO</p>
                    </div>

                    <div>
                        <img class="object-cover object-center w-full h-64 rounded-md shadow" src="https://images.unsplash.com/photo-1614030126544-b79b92e29e98?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80">
                        <h3 class="mt-2 font-medium text-gray-700">John Doe</h3>
                        <p class="text-sm text-gray-600">CEO</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- ++++++++++++++++++++ RECENT OFFERS CLOSE ++++++++++++++++++++ -->


        <!-- ++++++++++++++++++++ FOOTER BEGIN ++++++++++++++++++++ -->
        <footer class="w-full h-64 flex   items-center justify-center bg-black">
            <div class="md:w-2/3 w-full px-4 text-white flex flex-col">
                <div class="w-full text-4xl font-bold">
                    <h1 class="w-full md:w-2/3">How can we help you. get in touch</h1>
                </div>
                <div class="flex mt-8 flex-col md:flex-row md:justify-between">
                    <p class="w-full md:w-2/3 text-gray-400">To ensure that all Wikipedia content is verifiable, anyone may question an uncited claim. If your work has been tagged</p>
                    <div class="w-44 pt-6 md:pt-0">
                        <a class="block px-8 py-2 mt-6 text-lg font-medium text-center text-white transition-colors duration-300 transform bg-indigo-600 rounded md:mt-0 hover:bg-indigo-500">Contact US</a>
                    </div>
                </div>
            </div>
        </footer>
        <footer class="bg-black   ">
            <div class="max-w-6xl m-auto text-gray-800 flex flex-wrap justify-left">
                <!-- Col-1 -->
                <div class="p-5 w-1/2 sm:w-4/12 md:w-3/12">
                    <!-- Col Title -->
                    <div class="text-xs uppercase text-gray-400 font-medium mb-6">
                        Getting Started
                    </div>

                    <!-- Links -->

                    <a href="#" target="_blank" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                        Installation
                    </a>
                    <a href="#" target="_blank" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                        Release Notes
                    </a>
                    <a href="#" target="_blank" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                        Upgrade Guide
                    </a>
                    <a href="#" target="_blank" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                        Using with Preprocessors
                    </a>
                    <a href="#" target="_blank" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                        Optimizing for Production
                    </a>
                    <a href="#" target="_blank" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                        Browser Support
                    </a>
                    <a href="#" target="_blank" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                        IntelliSense
                    </a>
                </div>

                <!-- Col-2 -->
                <div class="p-5 w-1/2 sm:w-4/12 md:w-3/12">
                    <!-- Col Title -->
                    <div class="text-xs uppercase text-gray-400 font-medium mb-6">
                        Core Concepts
                    </div>

                    <!-- Links -->
                    <a href="#" target="_blank" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                        Utility-First
                    </a>
                    <a href="#" target="_blank" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                        Responsive Design
                    </a>
                    <a href="#" target="_blank" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                        Hover, Focus, & Other States
                    </a>
                    <a href="#" target="_blank" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                        Dark Mode
                    </a>
                    <a href="#" target="_blank" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                        Adding Base Styles
                    </a>
                    <a href="#" target="_blank" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                        Extracting Components
                    </a>
                    <a href="#" target="_blank" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                        Adding New Utilities
                    </a>
                </div>

                <!-- Col-3 -->
                <div class="p-5 w-1/2 sm:w-4/12 md:w-3/12">
                    <!-- Col Title -->
                    <div class="text-xs uppercase text-gray-400 font-medium mb-6">
                        Customization
                    </div>

                    <!-- Links -->
                    <a href="#" target="_blank" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                        Configuration
                    </a>
                    <a href="#" target="_blank" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                        Theme Configuration
                    </a>
                    <a href="#" target="_blank" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                        Breakpoints
                    </a>
                    <a href="#" target="_blank" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                        Customizing Colors
                    </a>
                    <a href="#" target="_blank" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                        Customizing Spacing
                    </a>
                    <a href="#" target="_blank" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                        Configuring Variants
                    </a>
                    <a href="#" target="_blank" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                        Plugins
                    </a>
                </div>

                <!-- Col-3 -->
                <div class="p-5 w-1/2 sm:w-4/12 md:w-3/12">
                    <!-- Col Title -->
                    <div class="text-xs uppercase text-gray-400 font-medium mb-6">
                        Community
                    </div>

                    <!-- Links -->
                    <a href="#" target="_blank" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                        GitHub
                    </a>
                    <a href="#" target="_blank" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                        Discord
                    </a>
                    <a href="#" target="_blank" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                        Twitter
                    </a>
                    <a href="#" target="_blank" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                        YouTube
                    </a>
                </div>
            </div>

            <!-- Copyright Bar -->
            <div class="pt-2">
                <div class="flex pb-5 px-3 m-auto pt-5 
                border-t border-gray-500 text-gray-400 text-sm 
                flex-col md:flex-row max-w-6xl">
                    <div class="mt-2">
                        ?? Copyright 1998-year. All Rights Reserved.
                    </div>

                    <!-- Required Unicons (if you want) -->
                    <div class="md:flex-auto md:flex-row-reverse mt-2 flex-row flex">
                        <a href="#" target="_blank" class="w-6 mx-1">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" target="_blank" class="w-6 mx-1">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" target="_blank" class="w-6 mx-1">
                            <i class="fab fa-youtube"></i>
                        </a>
                        <a href="#" target="_blank" class="w-6 mx-1">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" target="_blank" class="w-6 mx-1">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- ++++++++++++++++++++ FOOTER CLOSE ++++++++++++++++++++ -->


































        <!-- <div class="max-w-md py-4 px-8 bg-white shadow-lg rounded-lg my-20">
            <div class="flex justify-center md:justify-end -mt-16">
              <img class="w-20 h-20 object-cover rounded-full border-2 border-indigo-500" src="https://images.unsplash.com/photo-1499714608240-22fc6ad53fb2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80">
            </div>
            <div>
              <h2 class="text-gray-800 text-3xl font-semibold"></h2>
              <p class="mt-2 text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae dolores deserunt ea doloremque natus error, rerum quas odio quaerat nam ex commodi hic, suscipit in a veritatis pariatur minus consequuntur!</p>
            </div>
            <div class="flex justify-end mt-4">
              <a href="#" class="text-xl font-medium text-indigo-500">John Doe</a>
            </div>
        </div>
        
        <section class="bg-white">
            <div class="max-w-5xl px-6 py-16 mx-auto">
                <div class="items-center md:flex md:space-x-6">
                    <div class="md:w-1/2">
                        <h3 class="text-2xl font-semibold text-gray-800">Lorem ipsum dolor sit <br> amet, consectetur</h3>
                        <p class="max-w-md mt-4 text-gray-600">Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                            culpa qui officia deserunt mollit anim id est laborum.</p>
                        <a href="#" class="block mt-8 text-indigo-700 underline">Experienced team</a>
                    </div>

                    <div class="mt-8 md:mt-0 md:w-1/2">
                        <div class="flex items-center justify-center">
                            <div class="max-w-md">
                                <img class="object-cover object-center w-full rounded-md shadow" style="height: 500px;" src="https://images.unsplash.com/photo-1618346136472-090de27fe8b4?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=673&q=80">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-white">
            <div class="max-w-5xl px-6 py-16 mx-auto">
                <div class="items-center md:flex md:space-x-6">
                    <div class="md:w-1/2">
                        <div class="flex items-center justify-center">
                            <div class="max-w-md">
                                <img class="object-cover object-center w-full rounded-md shadow" style="height: 500px;" src="https://images.unsplash.com/photo-1616874535244-73aea5daadb9?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80">
                            </div>
                        </div>
                    </div>

                    <div class="mt-8 md:mt-0 md:w-1/2">
                        <h3 class="text-2xl font-semibold text-gray-800">Lorem ipsum dolor sit <br> amet, consectetur</h3>
                        <p class="max-w-md mt-4 text-gray-600">Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                            culpa qui officia deserunt mollit anim id est laborum.</p>
                        <a href="#" class="block mt-8 text-indigo-700 underline">Experienced team</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-white">
            <div class="max-w-5xl px-6 py-16 mx-auto">
                <h2 class="text-3xl font-semibold text-gray-800">Lorem ipsum dolor sit amet, <br> consectetur adipiscing</h2>
                <p class="max-w-lg mt-4 text-gray-600">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                    dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                    deserunt mollit anim id est laborum.</p>
                <div class="grid gap-8 mt-10 md:mt-20 md:grid-cols-2">
                    <div class="flex space-x-4">
                        <svg class="w-6 h-6 text-gray-500" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M47.6268 23.7062C48.2466 24.4484 48.2466 25.5277 47.6268 26.2699L44.4812 30.0372C43.803 30.8493 43.4742 31.8971 43.5669 32.9512L44.0044 37.9287C44.0912 38.9165 43.4411 39.8188 42.4765 40.0491L38.0619 41.1031C36.9808 41.3612 36.0559 42.0575 35.5089 43.025L33.2053 47.099C32.6961 47.9995 31.5844 48.3631 30.6415 47.9375L26.6498 46.1358C25.6003 45.6621 24.3976 45.6636 23.3493 46.14L19.3597 47.9531C18.4161 48.3819 17.3014 48.0189 16.7912 47.1168L14.4911 43.0489C13.9441 42.0814 13.0192 41.3851 11.9381 41.127L7.52286 40.0728C6.55849 39.8426 5.90838 38.9406 5.99496 37.9529L6.43346 32.9505C6.52583 31.8968 6.19706 30.8494 5.5191 30.0375L2.37029 26.2665C1.75138 25.5253 1.75043 24.4477 2.36803 23.7054L5.52362 19.9127C6.1988 19.1012 6.52582 18.0557 6.43339 17.0041L5.99624 12.0308C5.90922 11.0408 6.56225 10.1372 7.52946 9.90904L11.9298 8.87123C13.0153 8.61522 13.9446 7.91765 14.4935 6.94684L16.7947 2.87709C17.3039 1.97664 18.4156 1.61302 19.3585 2.03858L23.3544 3.8422C24.4007 4.31444 25.5993 4.31444 26.6456 3.8422L30.6415 2.03858C31.5844 1.61301 32.6961 1.97663 33.2053 2.87709L35.5089 6.95112C36.0559 7.9186 36.9808 8.61486 38.0619 8.87297L42.4765 9.92701C43.4411 10.1573 44.0912 11.0596 44.0044 12.0474L43.5669 17.0249C43.4742 18.079 43.803 19.1268 44.4812 19.939L47.6268 23.7062ZM25 37.9326C26.8075 37.9326 28.2727 36.4674 28.2727 34.6599V34.4275C28.2727 32.6201 26.8075 31.1548 25 31.1548C23.1925 31.1548 21.7273 32.6201 21.7273 34.4275V34.6599C21.7273 36.4674 23.1925 37.9326 25 37.9326ZM25 28.377C26.8075 28.377 28.2727 26.9117 28.2727 25.1042V15.3162C28.2727 13.5087 26.8075 12.0435 25 12.0435C23.1925 12.0435 21.7273 13.5087 21.7273 15.3162V25.1042C21.7273 26.9117 23.1925 28.377 25 28.377Z" stroke="currentColor" stroke-width="2" />
                        </svg>

                        <div>
                            <h4 class="text-xl font-medium text-gray-800">Design concept</h4>
                            <p class="max-w-lg mt-4 text-gray-600">Vitae nulla nunc euismod vel nunc euismod velpretium tellus
                                accumsan nulla nunc euismod ve semper.</p>
                        </div>
                    </div>

                    <div class="flex space-x-4">
                        <svg class="w-6 h-6 text-gray-500" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 25C1 11.8023 11.8023 1 25 1C38.1977 1 49 11.8023 49 25C49 38.1977 38.1977 49 25 49C11.8023 49 1 38.1977 1 25ZM33.36 35.3573C34.7228 36.1959 36.5074 35.771 37.346 34.4082C38.1913 33.0346 37.7522 31.2351 36.3692 30.4053L28.221 25.5164C27.6186 25.155 27.25 24.504 27.25 23.8014V14.375C27.25 12.7872 25.9628 11.5 24.375 11.5C22.7872 11.5 21.5 12.7872 21.5 14.375V25.8236C21.5 27.2127 22.2206 28.5023 23.4036 29.2302L33.36 35.3573Z" stroke="currentColor" stroke-width="2" />
                        </svg>

                        <div>
                            <h4 class="text-xl font-medium text-gray-800">Developing websites</h4>
                            <p class="max-w-lg mt-4 text-gray-600">Vitae nulla euismod velpretium tellus accumsan nulla nunc
                                euismod ve semper. Vitae nulla euismod velpretium tellus
                                accumsan nulla nunc euismod ve semper. Vitae nulla euismod velpretium tellus accumsan nulla nunc
                                euismod ve semper.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-white">
            <div class="max-w-5xl px-6 py-16 mx-auto">
                <div class="px-8 py-12 bg-gray-800 rounded-md md:px-20 md:flex md:items-center md:justify-between">
                    <div>
                        <h3 class="text-2xl font-semibold text-white">Lorem ipsum dolor sit amet</h3>
                        <p class="max-w-md mt-4 text-gray-400">Lorem ipsum dolor sit amet, consectetur adipiscing Ac aliquam ac volutpat, viverra magna risus aliquam massa.</p>
                    </div>

                    <a class="block px-8 py-2 mt-6 text-lg font-medium text-center text-white transition-colors duration-300 transform bg-indigo-600 rounded md:mt-0 hover:bg-indigo-500" href="#">Get In Touch</a>
                </div>
            </div>
        </section>

        

        <section class="bg-white">
            <div class="max-w-5xl px-6 py-16 mx-auto space-y-8 md:flex md:items-center md:space-y-0">
                <div class="md:w-2/3">
                    <div class="hidden md:flex md:items-center md:space-x-10">
                        <img class="object-cover object-center rounded-md shadow w-72 h-72" src="https://images.unsplash.com/photo-1614030126544-b79b92e29e98?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80">
                        <img class="object-cover object-center w-64 rounded-md shadow h-96" src="https://images.unsplash.com/photo-1618506469810-282bef2b30b3?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80">
                    </div>
                    <h2 class="text-3xl font-semibold text-gray-800 md:mt-6">Lorem ipsum dolor </h2>
                    <p class="max-w-lg mt-4 text-gray-600">
                        Duis aute irure dolor in reprehenderit in voluptate velit esse illum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
                <div class="md:w-1/3">
                    <img class="object-cover object-center w-full rounded-md shadow" style="height: 700px;" src="https://images.unsplash.com/photo-1593352216840-1aee13f45818?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80">
                </div>
            </div>
        </section>

        <footer class="border-t">
            <div class="container flex items-center justify-between px-6 py-8 mx-auto">
                <p class="text-gray-500">?? 2019-2021 All Rights Reserved.</p>
                <p class="font-medium text-gray-700">Terms of Service</p>
            </div>
        </footer> -->
    </div>
</body>

</html>