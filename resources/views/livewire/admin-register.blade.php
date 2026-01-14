<div class="flex flex-col justify-center bg-gray-50 sm:px-6 lg:px-8 py-12 font-sans">

    <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <h2 class="mt-2 font-extrabold text-[#010b14] text-3xl text-center tracking-tight">
            CREATE ADMIN ACCOUNT
        </h2>
        <p class="mt-2 text-gray-600 text-sm text-center">
            {{-- Already have an account? --}}

            Account creation will automatically sign you in.
            <a href="{{ route('dashboard') }}" wire:navigate class="block font-medium text-[var(--color-primary)] hover:text-[#1e1b4b] transition-colors">
                return to dashboard
            </a>
        </p>
    </div>

    <div class="sm:mx-auto mt-8 sm:w-full sm:max-w-md">
        <div class="bg-white shadow-[0_4px_6px_-1px_rgba(0,0,0,0.1),0_2px_4px_-1px_rgba(0,0,0,0.06)] px-4 sm:px-10 py-8 border-[var(--color-primary)] border-t-4 sm:rounded-lg">

            <form wire:submit.prevent="register" class="space-y-6">

                {{-- Name Field --}}
                <div>
                    <label for="name" class="block font-medium text-[#010b14] text-sm">
                        Full Name
                    </label>
                    <div class="relative shadow-sm mt-1 rounded-md">
                        <div class="left-0 absolute inset-y-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <input wire:model="name" id="name" name="name" type="text" autocomplete="name" required
                            class="@error('name') @enderror block w-full rounded-md border border-gray-300 border-red-300 bg-white py-2 pl-10 pr-3 leading-5 text-red-900 placeholder-gray-500 placeholder-red-300 transition duration-150 ease-in-out focus:border-[#65d63e] focus:border-red-300 focus:placeholder-gray-400 focus:outline-none focus:ring-1 focus:ring-[#65d63e] focus:ring-red-300 sm:text-sm">
                    </div>
                    @error('name') <p class="mt-2 text-red-600 text-sm">{{ $message }}</p> @enderror
                </div>

                {{-- Email Field --}}
                <div>
                    <label for="email" class="block font-medium text-[#010b14] text-sm">
                        Email address
                    </label>
                    <div class="relative shadow-sm mt-1 rounded-md">
                        <div class="left-0 absolute inset-y-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                            </svg>
                        </div>
                        <input wire:model="email" id="email" name="email" type="email" autocomplete="email" required
                            class="@error('email') @enderror block w-full rounded-md border border-gray-300 border-red-300 bg-white py-2 pl-10 pr-3 leading-5 text-red-900 placeholder-gray-500 placeholder-red-300 transition duration-150 ease-in-out focus:border-[#65d63e] focus:border-red-300 focus:placeholder-gray-400 focus:outline-none focus:ring-1 focus:ring-[#65d63e] focus:ring-red-300 sm:text-sm">
                    </div>
                    @error('email') <p class="mt-2 text-red-600 text-sm">{{ $message }}</p> @enderror
                </div>

                {{-- Password Field --}}
                <div>
                    <label for="password" class="block font-medium text-[#010b14] text-sm">
                        Password
                    </label>
                    <div class="relative shadow-sm mt-1 rounded-md">
                        <div class="left-0 absolute inset-y-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <input wire:model="password" id="password" name="password" type="password" autocomplete="new-password" required
                            class="@error('password') @enderror block w-full rounded-md border border-gray-300 border-red-300 bg-white py-2 pl-10 pr-3 leading-5 text-red-900 placeholder-gray-500 placeholder-red-300 transition duration-150 ease-in-out focus:border-[#65d63e] focus:border-red-300 focus:placeholder-gray-400 focus:outline-none focus:ring-1 focus:ring-[#65d63e] focus:ring-red-300 sm:text-sm">
                    </div>
                    @error('password') <p class="mt-2 text-red-600 text-sm">{{ $message }}</p> @enderror
                </div>

                <div>
                    <button type="submit"
                        class="group relative flex justify-center bg-[var(--color-primary)] hover:bg-[#1e1b4b] shadow-sm px-4 py-2 border border-transparent rounded-md focus:outline-none focus:ring-[#65d63e] focus:ring-2 focus:ring-offset-2 w-full font-medium text-white text-sm transition-all duration-200">

                        <span wire:loading wire:target="register" class="left-0 absolute inset-y-0 flex items-center mt-1 pl-3">
                            <svg class="w-5 h-5 text-white animate-spin" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                            </svg>
                        </span>

                        <span wire:loading.remove wire:target="register" class="left-0 absolute inset-y-0 flex items-center pl-3">
                            <svg class="w-5 h-5 text-white group-hover:text-white transition duration-150 ease-in-out" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                            </svg>
                        </span>

                        <span wire:loading.remove wire:target="register">Create Account</span>
                        <span wire:loading wire:target="register">Registering...</span>
                    </button>
                </div>
            </form>

        </div>
    </div>
</div>
