<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Avia Samara' }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@7.4.47/css/materialdesignicons.min.css
">
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css"
/>
<script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font/css/materialdesignicons.min.css">
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/x-icon">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    {{-- <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script> --}}
    <style>
        :root {
            /* Primary */
            --color-primary: #3062ac;
            /* Deep Blue - Main Brand Color, Buttons */

            /* Complementary */
            --color-secondary: #f2c94c;
            /* Soft Gold - Highlights, Badges */
            --color-danger: #e74c3c;
            /* Vibrant Red - Sale/Alerts */
            --color-success: #4daf7c;
            /* Fresh Green */

            /* Neutrals */
            --color-bg-light: #f7f7f7;
            /* Light Gray - Section Backgrounds */
            --color-bg-pale: #ecf0f1;
            /* Very Light Gray - Borders/Subtle fills */
            --color-text-dark: #2c3e50;
            /* Dark Slate Blue - Main Text/Headings */
            --color-text-white: #ffffff;

            /* Accents */
            --color-accent-purple: #8e44ad;
            /* Lavender */
            --color-accent-sky: #3498db;
            /* Sky Blue */
            --color-accent-orange: #e67e22;
            /* Warm Orange - Hovers, CTAs */
        }

        [x-cloak] {
            display: none !important;
        }

        .scrolled {
            background-color: rgba(0, 0, 0, 0.8);
            /* Dark background */
            transition: background-color 0.3s;
            /* Smooth transition */
        }

         .swiper {
      /* width: 800px; */
    }

    .swiper-slide {
      height: 70vh;
      background: #882525;
      line-height: 300px;
      text-align: center;
    }

    .swiper-slide:nth-child(2) {
      background: #8acc7d;
    }

    .swiper-slide:nth-child(3) {
      background: #b7cc7d;
    }

    .swiper-slide:nth-child(4) {
      background: #9eb75c;
    }

    .swiper-slide:nth-child(5) {
      background: #7da8cc;
    }

    .swiper-slide:nth-child(6) {
      background: #96cc7d;
    }

    .swiper-slide:nth-child(7) {
      background: #cc7dae;
    }
    </style>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&family=Playfair+Display:ital,wght@0,400;0,600;1,400&display=swap"
        rel="stylesheet">

    <style>
        /* Utility for the arched images */
        .arch-image {
            border-top-left-radius: 50% 45%;
            border-top-right-radius: 50% 45%;
        }
    </style>

    @livewireStyles()

</head>

<body class="font-['Lato'] antialiased">
    {{-- Place this in your layouts/app.blade.php or admin.blade.php --}}
<div 
x-data="{ show: false, message: '' }" 
x-cloak 
{{-- LISTENER: When 'notify' happens, show the box and update the text --}}
@warning.window="
    show = true; 
    message = $event.detail; 
    setTimeout(() => show = false, 3000)
"
class="pointer-events-none fixed bottom-5 right-5 z-50"
>
<div 
    x-show="show"
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="translate-y-2 opacity-0"
    x-transition:enter-end="translate-y-0 opacity-100"
    x-transition:leave="transition ease-in duration-300"
    x-transition:leave-start="translate-y-0 opacity-100"
    x-transition:leave-end="translate-y-2 opacity-0"
    class="flex items-center gap-3 rounded bg-black px-6 py-3 text-white shadow-lg"
>
    {{-- Success Icon --}}
   <h1 class="h-5 w-5 text-red-400">!</h1>

    {{-- Dynamic Message --}}
    <span x-text="message" class="text-sm font-medium"></span>
</div>
</div>


<div 
x-data="{ show: false, message: '' }" 
x-cloak 
{{-- LISTENER: When 'notify' happens, show the box and update the text --}}
@notify.window="
    show = true; 
    message = $event.detail; 
    setTimeout(() => show = false, 3000)
"
class="pointer-events-none fixed bottom-5 right-5 z-50"
>
<div 
    x-show="show"
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="translate-y-2 opacity-0"
    x-transition:enter-end="translate-y-0 opacity-100"
    x-transition:leave="transition ease-in duration-300"
    x-transition:leave-start="translate-y-0 opacity-100"
    x-transition:leave-end="translate-y-2 opacity-0"
    class="flex items-center gap-3 rounded bg-black px-6 py-3 text-white shadow-lg"
>
    {{-- Success Icon --}}
    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-400" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
    </svg>

    {{-- Dynamic Message --}}
    <span x-text="message" class="text-sm font-medium"></span>
</div>
</div>

    <header class="backdrop-blur-s fixed z-50 w-full text-white" x-data="{ mobileOpen: false, activeDropdown: null }">
        <div class="container mx-auto flex items-center justify-between md:px-8 md:py-4">

            <a href="{{ route('home') }}" wire:navigate class="max-w-[120px] font-bold md:max-w-[155px]">
                <img src="{{ asset('logo.png') }}" alt="Logo">
            </a>

            <nav class="hidden items-center space-x-8 text-sm font-medium uppercase tracking-wide lg:flex">

                <div class="static" @mouseenter="activeDropdown = 'shop'" @mouseleave="activeDropdown = null">
                    <button class="py-2 transition-colors hover:text-[#E85D36]"
                        :class="{ 'text-[#E85D36]': activeDropdown === 'shop' }">
                        Our Collection
                    </button>

                    <div x-cloak x-show="activeDropdown === 'shop'"
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 translate-y-2"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition ease-in duration-150"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave-end="opacity-0 translate-y-2"
                        class="absolute left-0 top-full w-full border-t border-gray-100 bg-[#f9f5f0] shadow-lg">

                        <div class="container mx-auto px-12 py-10">
                            <div class="grid grid-cols-4 gap-12">

                                <div>
                                    <h3 class="mb-6 font-serif text-lg normal-case text-gray-900">Collection</h3>
                                    <ul class="space-y-3 normal-case text-gray-600">
                                        <li><a href="{{ route('shop') }}" wire:navigate class="transition-colors hover:text-[#E85D36]">All Collections</a>
                                        </li>
                                        <li><a href="{{ route('ready-to-wear') }}" wire:navigate class="transition-colors hover:text-[#E85D36]">Ready to
                                                wear</a>
                                        </li>
                                        <li><a href="{{ route('accessories') }}" wire:navigate
                                                class="transition-colors hover:text-[#E85D36]">Accessories</a>
                                        </li>
                                        <li><a href="{{ route('shoes') }}" wire:navigate class="transition-colors hover:text-[#E85D36]">Shoes</a>
                                        </li>
                                        <li><a href="{{ route('street-urban') }}" class="transition-colors hover:text-[#E85D36]">Streetwear
                                                & Urban</a></li>

                                    </ul>
                                </div>

                                <div>
                                    {{-- Leave Empty --}}
                                </div>

                                <div class="group relative cursor-pointer">
                                    <div class="relative h-80 overflow-hidden bg-gray-200">
                                        <img src="{{ asset('media/DSC08238-y-(4)-Edit.jpg') }}"
                                            alt="Evening Collection"
                                            class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-105">
                                        <div
                                            class="absolute inset-0 bg-black/20 transition-colors group-hover:bg-black/10">
                                        </div>
                                        <div class="absolute bottom-6 left-0 w-full text-center text-white">
                                            <p class="mb-1 text-xs uppercase tracking-widest">New</p>
                                            <h4 class="font-serif text-xl">Classic <br> Collection</h4>
                                        </div>
                                    </div>
                                </div>

                                <div class="group relative cursor-pointer">
                                    <div class="relative h-80 overflow-hidden bg-gray-200">
                                        <img src="{{ asset('media/IMG_2193.jpg') }}"
                                            alt="Jewelry Collection"
                                            class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-105">
                                        <div
                                            class="absolute inset-0 bg-black/20 transition-colors group-hover:bg-black/10">
                                        </div>
                                        <div class="absolute bottom-6 left-0 w-full text-center text-white">
                                            <p class="mb-1 text-xs uppercase tracking-widest">Made for you</p>
                                            <h4 class="font-serif text-xl">Bridal<br>Collection</h4>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="static" @mouseenter="activeDropdown = 'tailored'" @mouseleave="activeDropdown = null">
                    <button class="py-2 transition-colors hover:text-[#E85D36]">Tailored</button>
                    <div x-cloak x-show="activeDropdown === 'tailored'"
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 translate-y-2"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition ease-in duration-150"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave-end="opacity-0 translate-y-2"
                        class="absolute left-0 top-full w-full border-t border-gray-100 bg-[#f9f5f0] shadow-lg">

                        <div class="container mx-auto px-12 py-10">
                            <div class="grid grid-cols-4 gap-12">

                                <div>
                                    <h3 class="mb-6 font-serif text-lg normal-case text-gray-900">Collection</h3>
                                    <ul class="space-y-3 normal-case text-gray-600">

                                        <li><a href="{{ route('custom-design') }}" wire:navigate class="transition-colors hover:text-[#E85D36]">Custom
                                                Design</a></li>
                                        <li><a href="{{ route('made-to-measure') }}" wire:navigate class="transition-colors hover:text-[#E85D36]">Made to
                                                Measure</a></li>
                                        <li><a href="{{ route('alteration') }}" wire:navigate
                                                class="transition-colors hover:text-[#E85D36]">Alterations</a></li>
                                    </ul>
                                </div>

                                <div>
                                    {{-- Leave Empty --}}
                                </div>

                                <div class="group relative cursor-pointer">
                                    <div class="relative h-80 overflow-hidden bg-gray-200">
                                        <img src="{{ asset('media/IMG_7518.jpg') }}"
                                            alt="Evening Collection"
                                            class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-105">
                                        <div
                                            class="absolute inset-0 bg-black/20 transition-colors group-hover:bg-black/10">
                                        </div>
                                        <div class="absolute bottom-6 left-0 w-full text-center text-white">
                                            <p class="mb-1 text-xs uppercase tracking-widest">Details</p>
                                            <h4 class="font-serif text-xl"> Sewn<br>With Craftsmanship</h4>
                                        </div>
                                    </div>
                                </div>

                                <div class="group relative cursor-pointer">
                                    <div class="relative h-80 overflow-hidden bg-gray-200">
                                        <img src="{{ asset('media/IMG_7523.jpg') }}"
                                            alt="Jewelry Collection"
                                            class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-105">
                                        <div
                                            class="absolute inset-0 bg-black/20 transition-colors group-hover:bg-black/10">
                                        </div>
                                        <div class="absolute bottom-6 left-0 w-full text-center text-white">
                                            <p class="mb-1 text-xs uppercase tracking-widest">Elegance</p>
                                            <h4 class="font-serif text-xl">Heritage<br>Meets Sophistication</h4>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="static" @mouseenter="activeDropdown = 'about'" @mouseleave="activeDropdown = null">
                    <button class="py-2 transition-colors hover:text-[#E85D36]">About Us</button>
                    <div x-cloak x-show="activeDropdown === 'about'"
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 translate-y-2"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition ease-in duration-150"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave-end="opacity-0 translate-y-2"
                        class="absolute left-0 top-full w-full border-t border-gray-100 bg-[#f9f5f0] shadow-lg">

                        <div class="container mx-auto px-12 py-10">
                            <div class="grid grid-cols-4 gap-12">

                                <div>
                                    <h3 class="mb-6 font-serif text-lg normal-case text-gray-900">About Avia Samara
                                    </h3>
                                    <ul class="space-y-3 normal-case text-gray-600">
                                        <li><a href="{{ route('about') }}" wire:navigate class="capitalize transition-colors hover:text-[#E85D36]">Who we are</a></li>
                                        <li><a href="{{ route('mission') }}" wire:navigate class="transition-colors hover:text-[#E85D36]">Our
                                                Mission</a></li>
                                        <li><a href="{{ route('order-process') }}" wire:navigate class="transition-colors hover:text-[#E85D36]">How We
                                                Work</a></li>

                                    </ul>
                                </div>

                                <div>

                                </div>

                                <div class="group relative cursor-pointer">
                                    <div class="relative h-80 overflow-hidden bg-gray-200">
                                        <img src="{{ asset('media/DSC08238-y-(4)-Edit.jpg') }}"
                                            alt="Evening Collection"
                                            class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-105">
                                        <div
                                            class="absolute inset-0 bg-black/20 transition-colors group-hover:bg-black/10">
                                        </div>
                                        <div class="absolute bottom-6 left-0 w-full text-center text-white">
                                            <p class="mb-1 text-xs uppercase tracking-widest">New</p>
                                            <h4 class="font-serif text-xl">Evening & Bridal<br>Collection</h4>
                                        </div>
                                    </div>
                                </div>

                                <div class="group relative cursor-pointer">
                                    <div class="relative h-80 overflow-hidden bg-gray-200">
                                        <img src="{{ asset('media/IMG_2193.jpg') }}"
                                            alt="Jewelry Collection"
                                            class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-105">
                                        <div
                                            class="absolute inset-0 bg-black/20 transition-colors group-hover:bg-black/10">
                                        </div>
                                        <div class="absolute bottom-6 left-0 w-full text-center text-white">
                                            <p class="mb-1 text-xs uppercase tracking-widest">New</p>
                                            <h4 class="font-serif text-xl">Jewelry<br>Collection</h4>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <a href="{{ route('contact') }}" wire:navigate class="transition-colors hover:text-[#E85D36]">
                    Contacts
                </a>

               {{-- Cart Section  --}}

               <livewire:cart />

                @auth()
                    <a href="{{ route('dashboard') }}" class="relative flex items-center gap-2 bg-black px-5 py-2 text-white transition-colors hover:bg-[#E85D36]">
                       Admin Dashboard <i class="mdi mdi-view-dashboard text-white" aria-hidden="true"></i>
                    </a>
                @endauth
            </nav>

            <div class="mt-1 flex space-x-4 pr-4 lg:hidden">

                <livewire:cart /> 

                <button @click="mobileOpen = !mobileOpen" class="text-2xl focus:outline-none">
                    <span x-cloak x-show="!mobileOpen">&#9776;</span>
                    <span x-cloak x-show="mobileOpen">&times;</span>
                </button>


            </div>
        </div>

        <div x-cloak x-show="mobileOpen" x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100 translate-y-0"
            class="absolute left-0 h-[calc(100vh-80px)] w-full overflow-y-auto border-t border-gray-200 bg-white text-black shadow-xl lg:hidden">
            <div class="flex flex-col space-y-4 p-6 text-sm font-medium uppercase">

                <div x-data="{ open: false }">
                    <button @click="open = !open"
                        class="flex w-full justify-between border-b border-gray-100 py-3 hover:text-[#E85D36]">
                        Our Collection <span x-text="open ? '-' : '+'"></span>
                    </button>
                    <div x-cloak x-show="open" class="mt-1 space-y-3 bg-gray-50 py-2 pl-4 normal-case text-gray-500">
                        <p class="pt-2 text-xs font-bold uppercase text-gray-400">Shop</p>
                        <a href="{{ route('shop') }}" wire:navigate class="block hover:text-[#E85D36]">All Collection</a>
                        <a href="{{ route('ready-to-wear') }}" wire:navigate class="block hover:text-[#E85D36]">Ready to Wear</a>
                        <a href="{{ route('accessories') }}" wire:navigate class="block hover:text-[#E85D36]">Accessories</a>
                        <a href="{{ route('shoes') }}" wire:navigate class="block hover:text-[#E85D36]">Shoes</a>
                        <a href="{{ route('ready-to-wear') }}" wire:navigate class="block hover:text-[#E85D36]">Streetwear & Urban</a>

                    </div>
                </div>

                <div x-data="{ open: false }">
                    <button @click="open = !open"
                        class="flex w-full justify-between border-b border-gray-100 py-3 hover:text-[#E85D36]">
                        Tailored <span x-text="open ? '-' : '+'"></span>
                    </button>
                    <div x-cloak x-show="open" class="mt-1 space-y-3 bg-gray-50 py-2 pl-4 normal-case text-gray-500">
                        <a href="{{ route('custom-design') }}" wire:navigate class="block hover:text-[#E85D36]">Custom Design</a>
                        <a href="{{ route('made-to-measure') }}" wire:navigate class="block hover:text-[#E85D36]">Made to Measure</a>
                        <a href="{{ route('alteration') }}" wire:navigate class="block hover:text-[#E85D36]">Alterations</a>
                    </div>
                </div>

                <div x-data="{ open: false }">
                    <button @click="open = !open"
                        class="flex w-full justify-between border-b border-gray-100 py-3 hover:text-[#E85D36]">
                        About Us <span x-text="open ? '-' : '+'"></span>
                    </button>
                    <div x-cloak x-show="open" class="mt-1 space-y-3 bg-gray-50 py-2 pl-4 normal-case text-gray-500">
                        <a href="{{ route('about') }}" wire:navigate class="block capitalize hover:text-[#E85D36]">Who we are</a>
                        <a href="{{ route('mission') }}" wire:navigate class="block hover:text-[#E85D36]">Our Mission</a>
                        <a href="{{ route('order-process') }}" wire:navigate class="block hover:text-[#E85D36]">How we Work</a>
                    </div>
                </div>

                <a href="{{ route('contact')}}" wire:navigate class="border-b border-gray-100 py-3 hover:text-[#E85D36]">Contacts</a>
            </div>
        </div>
    </header>

    <main>
        {{ $slot }}
    </main>

    <footer class="border-t border-gray-200 bg-[var(--color-text-white)] pb-10 pt-20 md:px-8">
        <div class="md: container mx-auto mb-16 grid grid-cols-2 gap-12 px-6 md:grid-cols-4">
            <div class="col-span-2 md:col-span-1">
                <a href="{{ route('home') }}" wire:navigate class="mb-6 font-['Playfair_Display'] font-bold tracking-wide">
                    <img class="max-w-9 md:max-w-36" src="{{ asset('logo-alt.png') }}" alt="">
                </a>
                <p class="mb-6 text-sm leading-relaxed text-gray-500">Luxurious fashion designed for the modern era,
                    crafting stories through fabric since 2014.</p>
                    <div class="flex items-center gap-4">
                        <div class="social-button">
                          <button class="group relative h-12 w-12 rounded-full">
                            <div class="floater absolute left-0 top-0 h-full w-full rounded-full bg-blue-800 duration-300 group-hover:-top-8 group-hover:shadow-2xl"></div>
                            <div class="icon relative z-10 flex h-full w-full items-center justify-center rounded-full border-2 border-blue-800">
                              <i class="mdi mdi-facebook fill-[#ecf0f1] text-[#ecf0f1] duration-300 hover:text-black group-hover:fill-[#171543]"></i>
                            </div>
                          </button>
                        </div>

                        <div class="social-button">
                          <button class="group relative h-12 w-12 rounded-full">
                            <div class="floater absolute left-0 top-0 h-full w-full rounded-full bg-red-800 duration-300 group-hover:-top-8 group-hover:shadow-2xl"></div>
                            <div class="icon relative z-10 flex h-full w-full items-center justify-center rounded-full border-2 border-red-800">
                              <i class="mdi mdi-instagram fill-[#ecf0f1] text-[#ecf0f1] duration-300 hover:text-black group-hover:fill-[#171543]"></i>
                            </div>
                          </button>
                        </div>

                        <div class="social-button">
                          <button class="group relative h-12 w-12 rounded-full">
                            <div class="floater absolute left-0 top-0 h-full w-full rounded-full bg-black duration-300 group-hover:-top-8 group-hover:shadow-2xl"></div>
                            <div class="icon relative z-10 flex h-full w-full items-center justify-center rounded-full border-2 border-black">
                              <i class="mdi mdi-twitter fill-[#ecf0f1] text-[#ecf0f1] duration-300 hover:text-black group-hover:fill-[#171543]"></i>
                            </div>
                          </button>
                        </div>

                        <div class="social-button">
                          <button class="group relative h-12 w-12 rounded-full">
                            <div class="floater absolute left-0 top-0 h-full w-full rounded-full bg-green-700 duration-300 group-hover:-top-8 group-hover:shadow-2xl"></div>
                            <div class="icon relative z-10 flex h-full w-full items-center justify-center rounded-full border-2 border-green-700">
                              <i class="mdi mdi-whatsapp fill-[#ecf0f1] text-[#ecf0f1] duration-300 hover:text-black group-hover:fill-[#171543]"></i>
                            </div>
                          </button>
                        </div>
                      </div>
            </div>
            <div>
                <h5 class="mb-6 text-xs font-bold uppercase tracking-widest text-[#1A1A1A]">Quick Links</h5>
                <ul class="space-y-3 text-sm text-gray-500">
                    <li><a href="{{ route('shop') }}"  wire:navigate class="transition-colors hover:text-[#E85D36]">Shop</a></li>
                    <li><a href="#" class="transition-colors hover:text-[#E85D36]">Accessories</a></li>
                    <li><a href="{{ route('made-to-measure') }}" class="transition-colors hover:text-[#E85D36]">Made to Measure</a></li>
                    <li><a href="#" class="transition-colors hover:text-[#E85D36]">Alteration</a></li>
                </ul>
            </div>
            <div>
                <h5 class="mb-6 text-xs font-bold uppercase tracking-widest text-[#1A1A1A]">Company</h5>
                <ul class="space-y-3 text-sm text-gray-500">
                    <li><a href="{{ route('about') }}" wire:navigate class="transition-colors hover:text-[#E85D36]">About Us</a></li>
                    <li><a href="{{ route('mission') }}" wire:navigate class="transition-colors hover:text-[#E85D36]">Our Mission</a></li>
                    <li><a href="{{ 'order-process' }}" wire:navigate class="transition-colors hover:text-[#E85D36]">How We Work</a></li>
                    <li><a href="{{ 'contact' }}" class="transition-colors hover:text-[#E85D36]">Contact Us</a></li>
                </ul>
            </div>
            <div>
                <h5 class="mb-6 text-xs font-bold uppercase tracking-widest text-[#1A1A1A]">Contact</h5>
                <ul class="space-y-3 text-sm text-gray-500">
                    <li>
                        <span class="block text-xs uppercase text-gray-400">Phone</span>
                        <a href="tel:+2347035944057" class="text-sm text-gray-700 transition-colors hover:text-[#E85D36]"> +2347035944057
                        </a>
                        <a href="tel:+2348034373938" class="block text-sm text-gray-700 transition-colors hover:text-[#E85D36]"> +2348034373938
                        </a>
                    </li>
                    <li>
                        <span class="block text-xs uppercase text-gray-400">Email</span>
                        <a href="mailto:hq@samara.co" class="text-sm text-gray-700 transition-colors hover:text-[#E85D36]">hq@samara.co</a>
                    </li>
                    <li>
                        <span class="block text-xs uppercase text-gray-400">Address</span>
                        <span class="text-sm text-gray-700">23 Giwa Amu Rd, off Airport Road, Oka, Benin City 300102, Edo State, Nigeria.</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="border-t border-gray-200 pt-8 text-center text-xs text-gray-400">
            &copy; {{ date('Y') }} Avia Samara Fashion. All rights reserved.
        </div>
    </footer>
    @livewireScripts()
    <script>
        window.addEventListener('scroll', function() {
            const header = document.querySelector('header');
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
    </script>

    {{-- <script>
        const dbData = [
            {
                id: 1,
                name: 'Gown 01',
                price: '$120.00',
                images: [
                    'https://images.unsplash.com/photo-1594744803329-e58b31de8bf5?q=80&w=600',
                    'https://images.unsplash.com/photo-1515372039744-b8f02a3ae446?q=80&w=200',
                    'https://images.unsplash.com/photo-1566174053879-31528523f8ae?q=80&w=200'
                ],
                details: { 
                    material: '100% Silk', 
                    fit: 'Regular Fit', 
                    care: 'Dry Clean Only',
                    description: 'A stunning addition to any wardrobe.'
                }
            },
            {
                id: 2,
                name: 'Phoebe Gown',
                price: '$185.00',
                images: [
                    'https://images.unsplash.com/photo-1512288094938-363287817259?q=80&w=600',
                    'https://images.unsplash.com/photo-1539008835657-9e8e9680c956?q=80&w=200'
                ],
                details: { 
                    material: 'Velvet', 
                    fit: 'Slim Fit', 
                    care: 'Hand Wash Cold',
                    description: 'Perfect for evening galas.'
                }
            }
            // ... Add more items from backend here
        ];
    </script>

    <script>
        // 1. We now accept 'initialProducts' as an argument
        function shopComponent(initialProducts) {
            return {
                // 2. We assign the passed argument to our local state
                products: initialProducts,
                
                cartCount: 0,
                modals: {
                    image: { open: false, src: '', caption: '' },
                    info: { open: false, data: null }
                },
                
                openImageModal(product, index) {
                    this.modals.image.src = product.images[index];
                    this.modals.image.caption = `${product.name} - View ${index + 1}`;
                    this.modals.image.open = true;
                },
                
                openInfoModal(product) {
                    this.modals.info.data = product;
                    this.modals.info.open = true;
                },
                
            }
        }
    </script> --}}


</body>

</html>
