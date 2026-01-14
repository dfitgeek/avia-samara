<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', $lang ?? app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font/css/materialdesignicons.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <title>{{ $title ?? 'Avia Samara Admin Management Panel' }}</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        /* Enforce Inter Font */
        body {
            font-family: 'Inter', sans-serif;
        }

        /* Hide scrollbar for cleaner look in table */
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }

        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>

<style>
    :root {
        /* Primary */
        --color-primary: #3062ac;
        --color-primary-hover: #1e1b4b;
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
</style>
    @livewireStyles
   
</head>

<body class="bg-[#f3f4f6] text-gray-600 antialiased">
    @if (session()->has('message'))
    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 5000)" x-show="show"
        x-transition:enter="transform ease-out duration-300 transition"
        x-transition:enter-start="translate-x-full opacity-0" x-transition:enter-end="translate-x-0 opacity-100"
        x-transition:leave="transform ease-in duration-300 transition"
        x-transition:leave-start="translate-x-0 opacity-100" x-transition:leave-end="translate-x-full opacity-0"
        class="fixed bottom-5 right-5 z-[600] w-full max-w-[250px]" style="display: none;">
        <div
            class="flex items-start rounded-md border-l-4 border-[var(--color-primary)] bg-white p-4 text-slate-900 shadow-lg shadow-emerald-500/10">

            <svg xmlns="http://www.w3.org/2000/svg" class="mr-3 mt-0.5 inline h-5 w-5 shrink-0 fill-[var(--color-primary)]"
                viewBox="0 0 23.625 23.625">
                <path
                    d="M11.812 0C5.289 0 0 5.289 0 11.812s5.289 11.813 11.812 11.813 11.813-5.29 11.813-11.813S18.335 0 11.812 0zm2.459 18.307c-.608.24-1.092.422-1.455.548a3.838 3.838 0 0 1-1.262.189c-.736 0-1.309-.18-1.717-.539s-.611-.814-.611-1.367c0-.215.015-.435.045-.659a8.23 8.23 0 0 1 .147-.759l.761-2.688c.067-.258.125-.503.171-.731.046-.23.068-.441.068-.633 0-.342-.071-.582-.212-.717-.143-.135-.412-.201-.813-.201-.196 0-.398.029-.605.09-.205.063-.383.12-.529.176l.201-.828c.498-.203.975-.377 1.43-.521a4.225 4.225 0 0 1 1.29-.218c.731 0 1.295.178 1.692.53.395.353.594.812.594 1.376 0 .117-.014.323-.041.617a4.129 4.129 0 0 1-.152.811l-.757 2.68a7.582 7.582 0 0 0-.167.736 3.892 3.892 0 0 0-.073.626c0 .356.079.599.239.728.158.129.435.194.827.194.185 0 .392-.033.626-.097.232-.064.4-.121.506-.17l-.203.827zm-.134-10.878a1.807 1.807 0 0 1-1.275.492c-.496 0-.924-.164-1.28-.492a1.57 1.57 0 0 1-.533-1.193c0-.465.18-.865.533-1.196a1.812 1.812 0 0 1 1.28-.497c.497 0 .923.165 1.275.497.353.331.53.731.53 1.196 0 .467-.177.865-.53 1.193z" />
            </svg>

            <div class="flex-1">
                {{-- <span class="mb-0.5 block text-sm font-bold text-emerald-700">Success</span> --}}
                <p class="text-[13px] font-medium leading-snug text-slate-700">
                    {{ session('message') }}
                    {{-- Your account has been created successfully. --}}
                </p>
            </div>

            <button @click="show = false" class="ml-2 text-slate-400 hover:text-slate-600">
                <i class="fa-solid fa-xmark text-xs"></i>
            </button>
        </div>
    </div>
@elseif (session()->has('error'))
    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 5000)" x-show="show"
        x-transition:enter="transform ease-out duration-300 transition"
        x-transition:enter-start="translate-x-full opacity-0" x-transition:enter-end="translate-x-0 opacity-100"
        x-transition:leave="transform ease-in duration-300 transition"
        x-transition:leave-start="translate-x-0 opacity-100" x-transition:leave-end="translate-x-full opacity-0"
        class="fixed bottom-5 right-5 z-[600] w-full max-w-[250px]" style="display: none;">
        <div
            class="flex items-start rounded-md border-l-4 border-red-500 bg-white p-4 text-slate-900 shadow-lg shadow-red-500/10">

            <svg xmlns="http://www.w3.org/2000/svg" class="mr-3 mt-0.5 inline h-5 w-5 shrink-0 fill-red-500"
                viewBox="0 0 23.625 23.625">
                <path
                    d="M11.812 0C5.289 0 0 5.289 0 11.812s5.289 11.813 11.812 11.813 11.813-5.29 11.813-11.813S18.335 0 11.812 0zm3.354 16.771l-1.561 1.561-2.605-2.605-2.605 2.605-1.561-1.561 2.605-2.605-2.605-2.605 1.561-1.561 2.605 2.605 2.605-2.605 1.561 1.561-2.605 2.605 2.605 2.605z" />
            </svg>

            <div class="flex-1">
                {{-- <span class="mb-0.5 block text-sm font-bold text-red-700">Error</span> --}}
                <p class="text-[13px] font-medium leading-snug text-slate-700">
                    {{ session('error') }}
                    {{-- An error occurred while processing your request. --}}
                </p>
            </div>

            <button @click="show = false" class="ml-2 text-slate-400 hover:text-slate-600">
                <i class="fa-solid fa-xmark text-xs"></i>
            </button>
        </div>
    </div>
@endif
    <div class="flex h-screen overflow-hidden">

        <div id="mobile-overlay" onclick="toggleSidebar()"
            class="fixed inset-0 z-20 hidden bg-black opacity-50 lg:hidden"></div>

            <aside id="sidebar"
            class="fixed inset-y-0 left-0 z-30 flex -translate-x-full transform flex-col border-r border-gray-200 bg-white transition-transform duration-300 lg:static lg:translate-x-0"
            >

            <div class="flex flex-col items-start justify-start border-b border-gray-100 px-8 md:h-20 md:py-4">
                <a href="{{ route('home') }}" class="flex items-center gap-2 text-2xl font-bold text-[#1f2937]">
                    <img class="w-32 md:mb-5 md:w-36" src="{{ asset('logo-alt.png') }}" alt="">
                </a>
            </div>

            <nav class="flex-1 space-y-2 overflow-y-auto px-4 py-6 md:mt-4 @if(!auth()->check()) filter blur-sm @endif">
                <a href="{{ route('dashboard') }}" wire:navigate
                    class="{{ Route::currentRouteName() == 'dashboard' ? 'flex items-center gap-4 bg-[var(--color-primary)] hover:bg-[#1e1b4b] shadow-md px-4 py-3 rounded-lg text-white transition-colors' : 'group flex items-center gap-4 hover:bg-gray-50 px-4 py-3 rounded-lg text-gray-600 transition-colors ' }}  @if(!auth()->check()) pointer-events-none opacity-50 @endif">
                    <i class="mdi mdi-view-dashboard-edit w-5 text-center"></i>
                    <span class="font-medium">Dashboard</span>
                </a>

                <a href="{{ route('create-product') }}"
                    wire:navigate class="{{ Route::currentRouteName() == 'create-product' ? 'flex items-center gap-4 bg-[var(--color-primary)] hover:bg-[#1e1b4b] shadow-md px-4 py-3 rounded-lg text-white transition-colors' : 'group flex items-center gap-4 hover:bg-gray-50 px-4 py-3 rounded-lg text-gray-600 transition-colors ' }}  @if(!auth()->check()) pointer-events-none opacity-50 @endif">
                    <i class="fa-solid fa-plus-circle w-5 text-center"></i>
                    <span class="font-medium">Add New Product</span>
                </a>

                <a href="{{ route('admin.products') }}" wire:navigate
                    class="{{ Route::currentRouteName() == 'admin.products' ? 'flex items-center gap-4 bg-[var(--color-primary)] hover:bg-[#1e1b4b] shadow-md px-4 py-3 rounded-lg text-white transition-colors' : 'group flex items-center gap-4 hover:bg-gray-50 px-4 py-3 rounded-lg text-gray-600 transition-colors ' }}  @if(!auth()->check()) pointer-events-none opacity-50 @endif">
                    <i class="mdi mdi-hanger w-5 text-center"></i>
                    <span class="font-medium">View Available Products</span>
                </a>

                <a href="{{ route('admin.orders') }}" wire:navigate
                    class="{{ Route::currentRouteName() == 'admin.orders' ? 'flex items-center gap-4 bg-[var(--color-primary)] hover:bg-[#1e1b4b] shadow-md px-4 py-3 rounded-lg text-white transition-colors' : 'group flex items-center gap-4 hover:bg-gray-50 px-4 py-3 rounded-lg text-gray-600 transition-colors ' }}  @if(!auth()->check()) pointer-events-none opacity-50 @endif">
                    <i class="fa-solid fa-box-open w-5 text-center"></i>
                    <span class="font-medium">Customer Order</span>
                </a>

                <a href="{{ route('app.settings') }}"
                    class="{{ Route::currentRouteName() == 'app.settings' ? 'flex items-center gap-4 bg-[var(--color-primary)] hover:bg-[#1e1b4b] shadow-md px-4 py-3 rounded-lg text-white transition-colors' : 'group flex items-center gap-4 hover:bg-gray-50 px-4 py-3 rounded-lg text-gray-600 transition-colors ' }}  @if(!auth()->check()) pointer-events-none opacity-50 @endif">
                    <i class="mdi mdi-cog w-5 text-center"></i>
                    <span class="font-medium">Setting</span>
                </a>

                <div class="mt-4 border-t border-gray-100 pt-4">
                    <form class="group flex items-center gap-4 hover:bg-red-50 px-4 py-3 rounded-lg text-red-500 transition-colors @if(!auth()->check()) pointer-events-none opacity-50 @endif" method="POST" action="{{ route('logout') }}">
                        @csrf
                        <i class="fa-arrow-right-from-bracket fa-solid w-5 text-center"></i>
                        <button class="font-medium" type="submit">Logout</button>
                    </form>
                </div>
            </nav>
        </aside>

        <div class="flex h-screen flex-1 flex-col overflow-hidden">

            <header class="flex h-20 items-center justify-between bg-[#f3f4f6] px-6 lg:px-8">
                <div class="flex items-center gap-4">
                    <button onclick="toggleSidebar()"
                        class="text-gray-500 hover:text-gray-700 focus:outline-none lg:hidden">
                        <i class="fa-solid fa-bars text-2xl"></i>
                    </button>

                    <h1 class="flex text-2xl font-bold text-[#1f2937] md:hidden">Admin Panel </h1>
                </div>

                <div class="flex items-center gap-6">
                    {{-- <div class="relative hidden md:flex">
                        <i
                            class="fa-solid fa-search absolute left-3 top-1/2 -translate-y-1/2 transform text-gray-400"></i>
                        <input type="text" placeholder="Search"
                            class="w-64 rounded-full border-none bg-white py-2 pl-10 pr-4 shadow-sm outline-none focus:ring-2 focus:ring-blue-500">
                    </div> --}}

                    <div class="flex cursor-pointer items-center gap-3">
                        <img src="{{ asset('images/avatar.webp') }}" alt="Profile"
                            class="h-10 w-10 rounded-full border-2 border-white object-cover shadow-sm">
                        <span class="hidden font-medium text-gray-700 sm:block">Admin Panel
                            {{-- <i class="fa-solid fa-chevron-down ml-1 text-xs"></i></span> --}}
                    </div>
                </div>
            </header>

            <main class="flex-1 overflow-y-auto overflow-x-hidden bg-[#f3f4f6] p-4 lg:p-8">
                {{ $slot }}
               <!--  <div class="min-h-[600px] rounded-xl border border-gray-200 bg-white p-6 shadow-sm">

                    <div class="mb-6">
                        <h2 class="text-lg font-bold text-[#1f2937]">Total Shipment : 5</h2>
                    </div>

                    <div class="mb-6 flex flex-col items-center justify-between gap-4 md:flex-row">
                        <div class="relative w-full md:w-auto">
                            <i
                                class="fa-solid fa-search absolute left-3 top-1/2 -translate-y-1/2 transform text-gray-400"></i>
                            <input type="text" placeholder="Search"
                                class="w-full rounded-md border border-gray-300 py-2 pl-10 pr-4 focus:border-blue-500 focus:outline-none md:w-64">
                        </div>

                        <div class="flex w-full gap-2 md:w-auto">
                            <select
                                class="w-1/2 cursor-pointer rounded-md border border-gray-300 bg-white px-4 py-2 text-gray-600 focus:outline-none md:w-auto">
                                <option>All Shipments</option>
                                <option>Pending</option>
                                <option>Delivered</option>
                            </select>
                            <div class="relative w-1/2 md:w-auto">
                                <input type="date"
                                    class="w-full cursor-pointer rounded-md border border-gray-300 bg-white px-4 py-2 text-gray-600 focus:outline-none">
                            </div>
                        </div>
                    </div>

                    <div class="overflow-x-auto rounded-lg border border-gray-200">
                        <table class="w-full whitespace-nowrap text-left text-sm">
                            <thead class="bg-[#52525b] text-xs uppercase text-white">
                                <tr>
                                    <th scope="col" class="px-6 py-4">ID</th>
                                    <th scope="col" class="px-6 py-4">Tracking Number</th>
                                    <th scope="col" class="px-6 py-4">Recipient Name</th>
                                    <th scope="col" class="px-6 py-4">Delivery Address</th>
                                    <th scope="col" class="px-6 py-4 text-center">Status</th>
                                    <th scope="col" class="px-6 py-4 text-center">Expected Amount</th>
                                    <th scope="col" class="px-6 py-4">Collected Amount</th>
                                    <th scope="col" class="px-6 py-4">Options</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100">
                                <tr class="transition-colors hover:bg-gray-50">
                                    <td class="px-6 py-4 font-medium text-gray-900">001</td>
                                    <td class="px-6 py-4">575355</td>
                                    <td class="px-6 py-4">James Devid</td>
                                    <td class="px-6 py-4">
                                        <div class="flex flex-col">
                                            <span>No. 10 Swaniker Road,</span>
                                            <span class="text-xs text-gray-400">Abelemkpe, Accra.</span>
                                            <span class="text-xs text-gray-400">Mobile: +23332343233</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <span
                                            class="rounded-full bg-[#2563eb] px-3 py-1 text-xs font-semibold text-white">To
                                            Pick</span>
                                    </td>
                                    <td class="px-6 py-4 text-center">100</td>
                                    <td class="px-6 py-4">
                                        <input type="text" value="0"
                                            class="w-16 rounded border border-gray-300 px-2 py-1 text-center focus:border-blue-500 focus:outline-none">
                                    </td>
                                    <td class="px-6 py-4">
                                        <button
                                            class="rounded bg-[#fbbf24] px-4 py-1.5 text-xs font-medium text-white shadow-sm transition-colors hover:bg-amber-500">Update</button>
                                    </td>
                                </tr>

                                <tr class="bg-gray-50/50 transition-colors hover:bg-gray-50">
                                    <td class="px-6 py-4 font-medium text-gray-900">002</td>
                                    <td class="px-6 py-4">575355</td>
                                    <td class="px-6 py-4">Jack Rayhan</td>
                                    <td class="px-6 py-4">
                                        <div class="flex flex-col">
                                            <span>No. 10 Swaniker Road,</span>
                                            <span class="text-xs text-gray-400">Abelemkpe, Accra.</span>
                                            <span class="text-xs text-gray-400">Mobile: +23332343233</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <span
                                            class="rounded-full bg-[#f97316] px-3 py-1 text-xs font-semibold text-white">Pickup</span>
                                    </td>
                                    <td class="px-6 py-4 text-center">100</td>
                                    <td class="px-6 py-4">
                                        <input type="text" value="0"
                                            class="w-16 rounded border border-gray-300 px-2 py-1 text-center focus:border-blue-500 focus:outline-none">
                                    </td>
                                    <td class="px-6 py-4">
                                        <button
                                            class="rounded bg-[#fbbf24] px-4 py-1.5 text-xs font-medium text-white shadow-sm transition-colors hover:bg-amber-500">Update</button>
                                    </td>
                                </tr>

                                <tr class="transition-colors hover:bg-gray-50">
                                    <td class="px-6 py-4 font-medium text-gray-900">003</td>
                                    <td class="px-6 py-4">575355</td>
                                    <td class="px-6 py-4">ABZ Mac</td>
                                    <td class="px-6 py-4">
                                        <div class="flex flex-col">
                                            <span>No. 10 Swaniker Road,</span>
                                            <span class="text-xs text-gray-400">Abelemkpe, Accra.</span>
                                            <span class="text-xs text-gray-400">Mobile: +23332343233</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <span
                                            class="rounded-full bg-[#854d0e] px-3 py-1 text-xs font-semibold text-white">On
                                            Delivery</span>
                                    </td>
                                    <td class="px-6 py-4 text-center">100</td>
                                    <td class="px-6 py-4">
                                        <input type="text" value="0"
                                            class="w-16 rounded border border-gray-300 px-2 py-1 text-center focus:border-blue-500 focus:outline-none">
                                    </td>
                                    <td class="px-6 py-4">
                                        <button
                                            class="rounded bg-[#fbbf24] px-4 py-1.5 text-xs font-medium text-white shadow-sm transition-colors hover:bg-amber-500">Update</button>
                                    </td>
                                </tr>

                                <tr class="bg-gray-50/50 transition-colors hover:bg-gray-50">
                                    <td class="px-6 py-4 font-medium text-gray-900">004</td>
                                    <td class="px-6 py-4">575355</td>
                                    <td class="px-6 py-4">Salman</td>
                                    <td class="px-6 py-4">
                                        <div class="flex flex-col">
                                            <span>No. 10 Swaniker Road,</span>
                                            <span class="text-xs text-gray-400">Abelemkpe, Accra.</span>
                                            <span class="text-xs text-gray-400">Mobile: +23332343233</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <span
                                            class="rounded-full bg-[#16a34a] px-3 py-1 text-xs font-semibold text-white">Delivered</span>
                                    </td>
                                    <td class="px-6 py-4 text-center">100</td>
                                    <td class="px-6 py-4">
                                        <input type="text" value="0"
                                            class="w-16 rounded border border-gray-300 px-2 py-1 text-center focus:border-blue-500 focus:outline-none">
                                    </td>
                                    <td class="px-6 py-4">
                                        <button
                                            class="rounded bg-[#fbbf24] px-4 py-1.5 text-xs font-medium text-white shadow-sm transition-colors hover:bg-amber-500">Update</button>
                                    </td>
                                </tr>

                                <tr class="transition-colors hover:bg-gray-50">
                                    <td class="px-6 py-4 font-medium text-gray-900">005</td>
                                    <td class="px-6 py-4">575355</td>
                                    <td class="px-6 py-4">Adam Smith</td>
                                    <td class="px-6 py-4">
                                        <div class="flex flex-col">
                                            <span>No. 10 Swaniker Road,</span>
                                            <span class="text-xs text-gray-400">Abelemkpe, Accra.</span>
                                            <span class="text-xs text-gray-400">Mobile: +23332343233</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <span
                                            class="rounded-full bg-[#2563eb] px-3 py-1 text-xs font-semibold text-white">To
                                            Pick</span>
                                    </td>
                                    <td class="px-6 py-4 text-center">100</td>
                                    <td class="px-6 py-4">
                                        <input type="text" value="0"
                                            class="w-16 rounded border border-gray-300 px-2 py-1 text-center focus:border-blue-500 focus:outline-none">
                                    </td>
                                    <td class="px-6 py-4">
                                        <button
                                            class="rounded bg-[#fbbf24] px-4 py-1.5 text-xs font-medium text-white shadow-sm transition-colors hover:bg-amber-500">Update</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-6 flex items-center justify-between">
                        <span class="text-sm text-gray-500">Showing 5 of 20 entries</span>
                        <div class="flex gap-2">
                            <button
                                class="rounded border border-gray-300 bg-white px-3 py-1 text-sm hover:bg-gray-50">Previous</button>
                            <button
                                class="rounded border border-gray-300 bg-white px-3 py-1 text-sm hover:bg-gray-50">Next</button>
                        </div>
                    </div>

                </div> -->
            </main>
        </div>
    </div>

    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            const overlay = document.getElementById('mobile-overlay');

            if (sidebar.classList.contains('-translate-x-full')) {
                sidebar.classList.remove('-translate-x-full');
                overlay.classList.remove('hidden');
            } else {
                sidebar.classList.add('-translate-x-full');
                overlay.classList.add('hidden');
            }
        }
    </script>


    @livewireScripts
</body>

</html>
