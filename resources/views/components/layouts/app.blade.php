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


    <header class="z-50 fixed backdrop-blur-s w-full text-white" x-data="{ mobileOpen: false, activeDropdown: null }">
        <div class="flex justify-between items-center mx-auto md:px-8 md:py-4 container">

            <a href="{{ route('home') }}" wire:navigate class="max-w-[120px] md:max-w-[155px] font-bold">
                <img src="{{ asset('logo.png') }}" alt="Logo">
            </a>

            <nav class="hidden lg:flex items-center space-x-8 font-medium text-sm uppercase tracking-wide">

                <div class="static" @mouseenter="activeDropdown = 'shop'" @mouseleave="activeDropdown = null">
                    <button class="py-2 hover:text-[#E85D36] transition-colors"
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
                        class="top-full left-0 absolute bg-[#f9f5f0] shadow-lg border-gray-100 border-t w-full">

                        <div class="mx-auto px-12 py-10 container">
                            <div class="gap-12 grid grid-cols-4">

                                <div>
                                    <h3 class="mb-6 font-serif text-gray-900 text-lg normal-case">Collection</h3>
                                    <ul class="space-y-3 text-gray-600 normal-case">
                                        <li><a href="#" class="hover:text-[#E85D36] transition-colors">Ready to
                                                wear</a>
                                        </li>
                                        <li><a href="#"
                                                class="hover:text-[#E85D36] transition-colors">Accessories</a>
                                        </li>
                                        <li><a href="#" class="hover:text-[#E85D36] transition-colors">Shoes</a>
                                        </li>
                                        <li><a href="#" class="hover:text-[#E85D36] transition-colors">Streetwear
                                                & Urban</a></li>

                                    </ul>
                                </div>

                                <div>
                                    {{-- Leave Empty --}}
                                </div>

                                <div class="group relative cursor-pointer">
                                    <div class="relative bg-gray-200 h-80 overflow-hidden">
                                        <img src="{{ asset('media/DSC08238-y-(4)-Edit.jpg') }}"
                                            alt="Evening Collection"
                                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                                        <div
                                            class="absolute inset-0 bg-black/20 group-hover:bg-black/10 transition-colors">
                                        </div>
                                        <div class="bottom-6 left-0 absolute w-full text-white text-center">
                                            <p class="mb-1 text-xs uppercase tracking-widest">New</p>
                                            <h4 class="font-serif text-xl">Classic <br> Collection</h4>
                                        </div>
                                    </div>
                                </div>

                                <div class="group relative cursor-pointer">
                                    <div class="relative bg-gray-200 h-80 overflow-hidden">
                                        <img src="{{ asset('media/IMG_2193.jpg') }}"
                                            alt="Jewelry Collection"
                                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                                        <div
                                            class="absolute inset-0 bg-black/20 group-hover:bg-black/10 transition-colors">
                                        </div>
                                        <div class="bottom-6 left-0 absolute w-full text-white text-center">
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
                    <button class="py-2 hover:text-[#E85D36] transition-colors">Tailored</button>
                    <div x-cloak x-show="activeDropdown === 'tailored'"
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 translate-y-2"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition ease-in duration-150"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave-end="opacity-0 translate-y-2"
                        class="top-full left-0 absolute bg-[#f9f5f0] shadow-lg border-gray-100 border-t w-full">

                        <div class="mx-auto px-12 py-10 container">
                            <div class="gap-12 grid grid-cols-4">

                                <div>
                                    <h3 class="mb-6 font-serif text-gray-900 text-lg normal-case">Collection</h3>
                                    <ul class="space-y-3 text-gray-600 normal-case">

                                        <li><a href="#" class="hover:text-[#E85D36] transition-colors">Custom
                                                Design</a></li>
                                        <li><a href="{{ route('made-to-measure') }}" wire:navigate class="hover:text-[#E85D36] transition-colors">Made to
                                                Measure</a></li>
                                        <li><a href="#"
                                                class="hover:text-[#E85D36] transition-colors">Alterations</a></li>
                                    </ul>
                                </div>

                                <div>
                                    {{-- Leave Empty --}}
                                </div>

                                <div class="group relative cursor-pointer">
                                    <div class="relative bg-gray-200 h-80 overflow-hidden">
                                        <img src="{{ asset('media/IMG_7518.jpg') }}"
                                            alt="Evening Collection"
                                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                                        <div
                                            class="absolute inset-0 bg-black/20 group-hover:bg-black/10 transition-colors">
                                        </div>
                                        <div class="bottom-6 left-0 absolute w-full text-white text-center">
                                            <p class="mb-1 text-xs uppercase tracking-widest">Details</p>
                                            <h4 class="font-serif text-xl"> Sewn<br>With Craftsmanship</h4>
                                        </div>
                                    </div>
                                </div>

                                <div class="group relative cursor-pointer">
                                    <div class="relative bg-gray-200 h-80 overflow-hidden">
                                        <img src="{{ asset('media/IMG_7523.jpg') }}"
                                            alt="Jewelry Collection"
                                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                                        <div
                                            class="absolute inset-0 bg-black/20 group-hover:bg-black/10 transition-colors">
                                        </div>
                                        <div class="bottom-6 left-0 absolute w-full text-white text-center">
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
                    <button class="py-2 hover:text-[#E85D36] transition-colors">About Us</button>
                    <div x-cloak x-show="activeDropdown === 'about'"
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 translate-y-2"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition ease-in duration-150"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave-end="opacity-0 translate-y-2"
                        class="top-full left-0 absolute bg-[#f9f5f0] shadow-lg border-gray-100 border-t w-full">

                        <div class="mx-auto px-12 py-10 container">
                            <div class="gap-12 grid grid-cols-4">

                                <div>
                                    <h3 class="mb-6 font-serif text-gray-900 text-lg normal-case">About Avia Samara
                                    </h3>
                                    <ul class="space-y-3 text-gray-600 normal-case">
                                        <li><a href="{{ route('about') }}" wire:navigate class="hover:text-[#E85D36] capitalize transition-colors">Who we are</a></li>
                                        <li><a href="{{ route('mission') }}" wire:navigate class="hover:text-[#E85D36] transition-colors">Our
                                                Mission</a></li>
                                        <li><a href="{{ route('order-process') }}" wire:navigate class="hover:text-[#E85D36] transition-colors">How We
                                                Work</a></li>

                                    </ul>
                                </div>

                                <div>

                                </div>

                                <div class="group relative cursor-pointer">
                                    <div class="relative bg-gray-200 h-80 overflow-hidden">
                                        <img src="{{ asset('media/DSC08238-y-(4)-Edit.jpg') }}"
                                            alt="Evening Collection"
                                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                                        <div
                                            class="absolute inset-0 bg-black/20 group-hover:bg-black/10 transition-colors">
                                        </div>
                                        <div class="bottom-6 left-0 absolute w-full text-white text-center">
                                            <p class="mb-1 text-xs uppercase tracking-widest">New</p>
                                            <h4 class="font-serif text-xl">Evening & Bridal<br>Collection</h4>
                                        </div>
                                    </div>
                                </div>

                                <div class="group relative cursor-pointer">
                                    <div class="relative bg-gray-200 h-80 overflow-hidden">
                                        <img src="{{ asset('media/IMG_2193.jpg') }}"
                                            alt="Jewelry Collection"
                                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                                        <div
                                            class="absolute inset-0 bg-black/20 group-hover:bg-black/10 transition-colors">
                                        </div>
                                        <div class="bottom-6 left-0 absolute w-full text-white text-center">
                                            <p class="mb-1 text-xs uppercase tracking-widest">New</p>
                                            <h4 class="font-serif text-xl">Jewelry<br>Collection</h4>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <a href="{{ route('contact') }}" wire:navigate class="hover:text-[#E85D36] transition-colors">
                    Contacts
                </a>

                <div class="static" @mouseenter="activeDropdown = 'cart'" @mouseleave="activeDropdown = null">

                    <button
                        class="relative flex items-center gap-2 bg-black hover:bg-[#E85D36] px-5 py-2 text-white transition-colors">
                        Cart
                        <span
                            class="flex justify-center items-center bg-white rounded-full w-4 h-4 font-bold text-[10px] text-black">3</span>
                            <span class="text-white mdi mdi-cart"></span>
                    </button>

                    <div x-cloak x-show="activeDropdown === 'cart'"
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 translate-y-2"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition ease-in duration-150"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave-end="opacity-0 translate-y-2"
                        class="top-full left-0 absolute bg-[#f9f5f0] shadow-xl border-gray-100 border-t w-full text-left cursor-default">

                        <div class="mx-auto px-12 py-10 container">
                            <div class="gap-12 grid grid-cols-12">

                                <div class="col-span-8 bg-white shadow-sm p-8 border border-gray-100">
                                    <h3
                                        class="mb-6 pb-2 border-gray-100 border-b font-serif text-gray-900 text-xl normal-case">
                                        Your Selection (3 Items)</h3>

                                    <div class="flex flex-col space-y-6">
                                        <div class="flex items-center gap-6">
                                            <img src="https://images.unsplash.com/photo-1543163521-1bf539c55dd2?q=80&w=200&auto=format&fit=crop"
                                                class="border border-gray-100 w-20 h-20 object-cover" alt="Heels">
                                            <div class="flex-1">
                                                <h4 class="font-medium text-gray-900 text-lg normal-case">Velvet Heels
                                                </h4>
                                                <p class="text-gray-500 text-xs uppercase tracking-wide">Black / Size
                                                    38
                                                </p>
                                            </div>
                                            <div class="text-right">
                                                <p class="font-medium text-gray-900 text-lg">$240.00</p>
                                                <button
                                                    class="text-gray-400 hover:text-red-500 text-xs underline transition-colors">Remove</button>
                                            </div>
                                        </div>

                                        <div class="flex items-center gap-6 pt-6 border-gray-50 border-t">
                                            <img src="https://images.unsplash.com/photo-1584917865442-de89df76afd3?q=80&w=200&auto=format&fit=crop"
                                                class="border border-gray-100 w-20 h-20 object-cover" alt="Tote">
                                            <div class="flex-1">
                                                <h4 class="font-medium text-gray-900 text-lg normal-case">Leather Tote
                                                </h4>
                                                <p class="text-gray-500 text-xs uppercase tracking-wide">Brown / One
                                                    Size
                                                </p>
                                            </div>
                                            <div class="text-right">
                                                <p class="font-medium text-gray-900 text-lg">$180.00</p>
                                                <button
                                                    class="text-gray-400 hover:text-red-500 text-xs underline transition-colors">Remove</button>
                                            </div>
                                        </div>

                                        <div class="flex items-center gap-6 pt-6 border-gray-50 border-t">
                                            <img src="https://images.unsplash.com/photo-1599643478518-17488fbbcd75?q=80&w=200&auto=format&fit=crop"
                                                class="border border-gray-100 w-20 h-20 object-cover" alt="Pendant">
                                            <div class="flex-1">
                                                <h4 class="font-medium text-gray-900 text-lg normal-case">Gold Pendant
                                                </h4>
                                                <p class="text-gray-500 text-xs uppercase tracking-wide">18k Gold</p>
                                            </div>
                                            <div class="text-right">
                                                <p class="font-medium text-gray-900 text-lg">$850.00</p>
                                                <button
                                                    class="text-gray-400 hover:text-red-500 text-xs underline transition-colors">Remove</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-span-4">
                                    <div
                                        class="flex flex-col justify-between bg-gray-900 shadow-md p-8 h-full text-white">
                                        <div>
                                            <h3 class="mb-6 font-serif text-xl normal-case">Order Summary</h3>
                                            <div
                                                class="flex justify-between items-center mb-4 text-gray-400 text-sm normal-case">
                                                <span>Subtotal</span>
                                                <span>$1,270.00</span>
                                            </div>
                                            <div
                                                class="flex justify-between items-center mb-4 text-gray-400 text-sm normal-case">
                                                <span>Tax (Est.)</span>
                                                <span>$45.00</span>
                                            </div>
                                            <div
                                                class="flex justify-between items-center text-gray-400 text-sm normal-case">
                                                <span>Shipping</span>
                                                <span>Free</span>
                                            </div>
                                            <hr class="my-6 border-gray-700">
                                            <div class="flex justify-between items-center font-serif text-2xl">
                                                <span>Total</span>
                                                <span>$1,315.00</span>
                                            </div>
                                        </div>

                                        <a href="#"
                                            class="group block relative bg-[#E85D36] hover:bg-white mt-8 py-4 w-full font-bold text-white hover:text-black text-sm text-center uppercase tracking-widest transition-all">
                                            Order Now
                                            <span
                                                class="mdi-arrow-right ml-2 group-hover:ml-4 transition-all mdi"></span>
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </nav>

            <div class="lg:hidden flex space-x-4 mt-1 pr-4">

                <div class="static" @mouseenter="activeDropdown = 'cart'" @mouseleave="activeDropdown = null">

                    <button
                        class="relative flex items-center gap-2 bg-black hover:bg-[#E85D36] px-5 py-2 text-white transition-colors">
                        Cart <span class="text-white mdi mdi-cart"></span>
                        <span
                            class="flex justify-center items-center bg-white rounded-full w-4 h-4 font-bold text-[10px] text-black">3</span>
                    </button>

                    <div x-cloak x-show="activeDropdown === 'cart'"
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 translate-y-2"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition ease-in duration-150"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave-end="opacity-0 translate-y-2"
                        class="top-full left-0 absolute bg-[#f9f5f0] shadow-xl border-gray-100 border-t w-full text-left cursor-default">

                        <div class="mx-auto px-4 sm:px-6 lg:px-12 py-10 container">
                            <div class="gap-6 md:gap-12 grid grid-cols-1 md:grid-cols-12">

                                <div
                                    class="col-span-12 md:col-span-8 bg-white shadow-sm p-6 md:p-8 border border-gray-100">
                                    <h3
                                        class="mb-6 pb-2 border-gray-100 border-b font-serif text-gray-900 text-xl normal-case">
                                        Your Selection (3 Items)
                                    </h3>

                                    <div class="flex flex-col space-y-6">
                                        <!-- Cart Item 1 -->
                                        <div class="flex items-center gap-4">
                                            <img src="https://images.unsplash.com/photo-1543163521-1bf539c55dd2?q=80&w=200&auto=format&fit=crop"
                                                class="border border-gray-100 w-20 h-20 object-cover" alt="Heels">
                                            <div class="flex-1">
                                                <h4 class="font-medium text-gray-900 text-lg normal-case">Velvet Heels
                                                </h4>
                                                <p class="text-gray-500 text-xs uppercase tracking-wide">Black / Size
                                                    38</p>
                                            </div>
                                            <div class="text-right">
                                                <p class="font-medium text-gray-900 text-lg">$240.00</p>
                                                <button
                                                    class="text-gray-400 hover:text-red-500 text-xs underline transition-colors">Remove</button>
                                            </div>
                                        </div>
                                        <!-- Cart Item 2 -->
                                        <div class="flex items-center gap-4 pt-6 border-gray-50 border-t">
                                            <img src="https://images.unsplash.com/photo-1584917865442-de89df76afd3?q=80&w=200&auto=format&fit=crop"
                                                class="border border-gray-100 w-20 h-20 object-cover" alt="Tote">
                                            <div class="flex-1">
                                                <h4 class="font-medium text-gray-900 text-lg normal-case">Leather Tote
                                                </h4>
                                                <p class="text-gray-500 text-xs uppercase tracking-wide">Brown / One
                                                    Size</p>
                                            </div>
                                            <div class="text-right">
                                                <p class="font-medium text-gray-900 text-lg">$180.00</p>
                                                <button
                                                    class="text-gray-400 hover:text-red-500 text-xs underline transition-colors">Remove</button>
                                            </div>
                                        </div>
                                        <!-- Cart Item 3 -->
                                        <div class="flex items-center gap-4 pt-6 border-gray-50 border-t">
                                            <img src="https://images.unsplash.com/photo-1599643478518-17488fbbcd75?q=80&w=200&auto=format&fit=crop"
                                                class="border border-gray-100 w-20 h-20 object-cover" alt="Pendant">
                                            <div class="flex-1">
                                                <h4 class="font-medium text-gray-900 text-lg normal-case">Gold Pendant
                                                </h4>
                                                <p class="text-gray-500 text-xs uppercase tracking-wide">18k Gold</p>
                                            </div>
                                            <div class="text-right">
                                                <p class="font-medium text-gray-900 text-lg">$850.00</p>
                                                <button
                                                    class="text-gray-400 hover:text-red-500 text-xs underline transition-colors">Remove</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-span-12 md:col-span-4">
                                    <div
                                        class="flex flex-col justify-between bg-gray-900 shadow-md p-6 h-full text-white">
                                        <div>
                                            <h3 class="mb-6 font-serif text-xl normal-case">Order Summary</h3>
                                            <div
                                                class="flex justify-between items-center mb-4 text-gray-400 text-sm normal-case">
                                                <span>Subtotal</span>
                                                <span>$1,270.00</span>
                                            </div>
                                            <div
                                                class="flex justify-between items-center mb-4 text-gray-400 text-sm normal-case">
                                                <span>Tax (Est.)</span>
                                                <span>$45.00</span>
                                            </div>
                                            <div
                                                class="flex justify-between items-center text-gray-400 text-sm normal-case">
                                                <span>Shipping</span>
                                                <span>Free</span>
                                            </div>
                                            <hr class="my-6 border-gray-700">
                                            <div class="flex justify-between items-center font-serif text-2xl">
                                                <span>Total</span>
                                                <span>$1,315.00</span>
                                            </div>
                                        </div>
                                        <a href="#"
                                            class="group block relative bg-[#E85D36] hover:bg-white mt-8 py-4 w-full font-bold text-white hover:text-black text-sm text-center uppercase tracking-widest transition-all">
                                            Order Now
                                            <span
                                                class="mdi-arrow-right ml-2 group-hover:ml-4 transition-all mdi"></span>
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <button @click="mobileOpen = !mobileOpen" class="focus:outline-none text-2xl">
                    <span x-cloak x-show="!mobileOpen">&#9776;</span>
                    <span x-cloak x-show="mobileOpen">&times;</span>
                </button>


            </div>
        </div>

        <div x-cloak x-show="mobileOpen" x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100 translate-y-0"
            class="lg:hidden left-0 absolute bg-white shadow-xl border-gray-200 border-t w-full h-[calc(100vh-80px)] overflow-y-auto text-black">
            <div class="flex flex-col space-y-4 p-6 font-medium text-sm uppercase">

                <div x-data="{ open: false }">
                    <button @click="open = !open"
                        class="flex justify-between py-3 border-gray-100 border-b w-full hover:text-[#E85D36]">
                        Our Collection <span x-text="open ? '-' : '+'"></span>
                    </button>
                    <div x-cloak x-show="open" class="space-y-3 bg-gray-50 mt-1 py-2 pl-4 text-gray-500 normal-case">
                        <p class="pt-2 font-bold text-gray-400 text-xs uppercase">Shop</p>
                        <a href="#" class="block hover:text-[#E85D36]">Ready to Wear</a>
                        <a href="#" class="block hover:text-[#E85D36]">Accessories</a>
                        <a href="#" class="block hover:text-[#E85D36]">Shoes</a>
                        <a href="#" class="block hover:text-[#E85D36]">Streetwear & Urban</a>

                    </div>
                </div>

                <div x-data="{ open: false }">
                    <button @click="open = !open"
                        class="flex justify-between py-3 border-gray-100 border-b w-full hover:text-[#E85D36]">
                        Tailored <span x-text="open ? '-' : '+'"></span>
                    </button>
                    <div x-cloak x-show="open" class="space-y-3 bg-gray-50 mt-1 py-2 pl-4 text-gray-500 normal-case">
                        <a href="#" class="block hover:text-[#E85D36]">Custom Design</a>
                        <a href="{{ route('made-to-measure') }}" class="block hover:text-[#E85D36]">Made to Measure</a>
                        <a href="#" class="block hover:text-[#E85D36]">Alterations</a>
                    </div>
                </div>

                <div x-data="{ open: false }">
                    <button @click="open = !open"
                        class="flex justify-between py-3 border-gray-100 border-b w-full hover:text-[#E85D36]">
                        About Us <span x-text="open ? '-' : '+'"></span>
                    </button>
                    <div x-cloak x-show="open" class="space-y-3 bg-gray-50 mt-1 py-2 pl-4 text-gray-500 normal-case">
                        <a href="{{ route('about') }}" wire:navigate class="block hover:text-[#E85D36] capitalize">Who we are</a>
                        <a href="{{ route('mission') }}" wire:navigate class="block hover:text-[#E85D36]">Our Mission</a>
                        <a href="{{ route('order-process') }}" wire:navigate class="block hover:text-[#E85D36]">How we Work</a>
                    </div>
                </div>

                <a href="{{ route('contact')}}" wire:navigate class="py-3 border-gray-100 border-b hover:text-[#E85D36]">Contacts</a>
            </div>
        </div>
    </header>

    <main>
        {{ $slot }}
    </main>

    <footer class="md:px-8 pt-20 pb-10 border-gray-200 border-t bg-[var(--color-text-white)]">
        <div class="gap-12 grid grid-cols-2 md:grid-cols-4 mx-auto mb-16 px-6 md: container">
            <div class="col-span-2 md:col-span-1">
                <a href="{{ route('home') }}" wire:navigate class="mb-6 font-['Playfair_Display'] font-bold tracking-wide">
                    <img class="max-w-9 md:max-w-36" src="{{ asset('logo-alt.png') }}" alt="">
                </a>
                <p class="mb-6 text-gray-500 text-sm leading-relaxed">Luxurious fashion designed for the modern era,
                    crafting stories through fabric since 2014.</p>
                    <div class="flex items-center gap-4">
                        <div class="social-button">
                          <button class="group relative rounded-full w-12 h-12">
                            <div class="top-0 group-hover:-top-8 left-0 absolute bg-blue-800 group-hover:shadow-2xl rounded-full w-full h-full duration-300 floater"></div>
                            <div class="z-10 relative flex justify-center items-center border-2 border-blue-800 rounded-full w-full h-full icon">
                              <i class="fill-[#ecf0f1] group-hover:fill-[#171543] text-[#ecf0f1] hover:text-black duration-300 mdi mdi-facebook"></i>
                            </div>
                          </button>
                        </div>

                        <div class="social-button">
                          <button class="group relative rounded-full w-12 h-12">
                            <div class="top-0 group-hover:-top-8 left-0 absolute bg-red-800 group-hover:shadow-2xl rounded-full w-full h-full duration-300 floater"></div>
                            <div class="z-10 relative flex justify-center items-center border-2 border-red-800 rounded-full w-full h-full icon">
                              <i class="fill-[#ecf0f1] group-hover:fill-[#171543] text-[#ecf0f1] hover:text-black duration-300 mdi mdi-instagram"></i>
                            </div>
                          </button>
                        </div>

                        <div class="social-button">
                          <button class="group relative rounded-full w-12 h-12">
                            <div class="top-0 group-hover:-top-8 left-0 absolute bg-black group-hover:shadow-2xl rounded-full w-full h-full duration-300 floater"></div>
                            <div class="z-10 relative flex justify-center items-center border-2 border-black rounded-full w-full h-full icon">
                              <i class="fill-[#ecf0f1] group-hover:fill-[#171543] text-[#ecf0f1] hover:text-black duration-300 mdi mdi-twitter"></i>
                            </div>
                          </button>
                        </div>

                        <div class="social-button">
                          <button class="group relative rounded-full w-12 h-12">
                            <div class="top-0 group-hover:-top-8 left-0 absolute bg-green-700 group-hover:shadow-2xl rounded-full w-full h-full duration-300 floater"></div>
                            <div class="z-10 relative flex justify-center items-center border-2 border-green-700 rounded-full w-full h-full icon">
                              <i class="fill-[#ecf0f1] group-hover:fill-[#171543] text-[#ecf0f1] hover:text-black duration-300 mdi mdi-whatsapp"></i>
                            </div>
                          </button>
                        </div>
                      </div>
            </div>
            <div>
                <h5 class="mb-6 font-bold text-[#1A1A1A] text-xs uppercase tracking-widest">Quick Links</h5>
                <ul class="space-y-3 text-gray-500 text-sm">
                    <li><a href="{{ route('shop') }}"  wire:navigate class="hover:text-[#E85D36] transition-colors">Shop</a></li>
                    <li><a href="#" class="hover:text-[#E85D36] transition-colors">Accessories</a></li>
                    <li><a href="{{ route('made-to-measure') }}" class="hover:text-[#E85D36] transition-colors">Made to Measure</a></li>
                    <li><a href="#" class="hover:text-[#E85D36] transition-colors">Alteration</a></li>
                </ul>
            </div>
            <div>
                <h5 class="mb-6 font-bold text-[#1A1A1A] text-xs uppercase tracking-widest">Company</h5>
                <ul class="space-y-3 text-gray-500 text-sm">
                    <li><a href="{{ route('about') }}" wire:navigate class="hover:text-[#E85D36] transition-colors">About Us</a></li>
                    <li><a href="{{ route('mission') }}" wire:navigate class="hover:text-[#E85D36] transition-colors">Our Mission</a></li>
                    <li><a href="{{ 'order-process' }}" wire:navigate class="hover:text-[#E85D36] transition-colors">How We Work</a></li>
                    <li><a href="{{ 'contact' }}" class="hover:text-[#E85D36] transition-colors">Contact Us</a></li>
                </ul>
            </div>
            <div>
                <h5 class="mb-6 font-bold text-[#1A1A1A] text-xs uppercase tracking-widest">Contact</h5>
                <ul class="space-y-3 text-gray-500 text-sm">
                    <li>
                        <span class="block text-gray-400 text-xs uppercase">Phone</span>
                        <a href="tel:+2347035944057" class="text-gray-700 hover:text-[#E85D36] text-sm transition-colors"> +2347035944057
                        </a>
                        <a href="tel:+2348034373938" class="block text-gray-700 hover:text-[#E85D36] text-sm transition-colors"> +2348034373938
                        </a>
                    </li>
                    <li>
                        <span class="block text-gray-400 text-xs uppercase">Email</span>
                        <a href="mailto:hq@samara.co" class="text-gray-700 hover:text-[#E85D36] text-sm transition-colors">hq@samara.co</a>
                    </li>
                    <li>
                        <span class="block text-gray-400 text-xs uppercase">Address</span>
                        <span class="text-gray-700 text-sm">23 Giwa Amu Rd, off Airport Road, Oka, Benin City 300102, Edo</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="pt-8 border-gray-200 border-t text-gray-400 text-xs text-center">
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


</body>

</html>
