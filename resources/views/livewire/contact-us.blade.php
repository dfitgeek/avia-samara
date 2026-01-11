<main>
    <div class="relative h-[300px] w-full overflow-hidden md:h-[400px]">
        <img src="{{ asset('media/photo-1528747045269-390fe33c19f2.avif') }}"
            alt="Contact Hero" class="h-full w-full object-cover object-top">
        <div class="absolute inset-0 flex items-center justify-center bg-black/20">
            <h1 class="font-['Playfair_Display'] text-5xl text-white md:text-7xl">Contact Us</h1>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2">

        <div class="flex flex-col items-center justify-center p-10 text-center md:p-20">

            <div class="mb-8">
                <i class="mdi mdi-map-marker mb-2 text-3xl text-[#E85D36]"></i>
                <h2 class="mb-1 font-['Playfair_Display'] text-2xl md:text-3xl">Avia Samara Store</h2>
                <p class="font-['Playfair_Display'] text-xl italic text-gray-700">23 Giwa Amu Rd, off Airport Road, Oka, Benin City 300102, Edo State, Nigeria.
                </p>
            </div>

            <p class="mb-8 max-w-md text-sm font-light leading-relaxed text-gray-500 md:text-base">
                Our flagship store in Edo State, Nigeria is the ultimate destination for sophisticated menswear. Discover our
                full range of premium suits, outerwear, shoes, and accessories, carefully curated for the modern
                gentleman.
            </p>

            <div class="mb-8">
                <div class="mb-2 flex items-center justify-center gap-2 text-gray-800">
                    <i class="mdi-clock-outline mdi"></i>
                    <span class="text-xs font-bold uppercase tracking-widest">Opening Hours:</span>
                </div>
                <div class="space-y-1 text-sm font-light text-gray-500">
                    <p>Monday-Friday: 10:00-19:00</p>
                    <p>Saturday: 10:00-17:00</p>
                    <p>Sunday: Closed</p>
                </div>
            </div>

            <div class="mb-10 text-sm font-light text-gray-500">
                <p>Phone: +2347035944057,
                    +2348034373938
                   </p>
                <p>E-mail: hq@samara.co</p>
            </div>

            {{-- <a href="#"
                class="border border-gray-400 px-8 py-3 text-xs uppercase tracking-widest transition-colors duration-300 hover:bg-black hover:text-white">
                Google Maps <br> Location
            </a> --}}
        </div>

        <div class="grid h-[500px] grid-cols-2 grid-rows-2 gap-2 bg-gray-50 p-2 lg:h-auto">
            <form class="col-span-2 row-span-2 mx-auto flex w-full max-w-lg flex-col items-center justify-center gap-4 rounded-xl p-8">
                <h3 class="mb-4 text-center font-['Playfair_Display'] text-lg font-semibold text-[var(--color-text-dark)] md:text-2xl">We are always open to virtual and physical consultation, kindly fill the form and we will be responding back</h3>
                <div class="w-full">
                    <input type="text" name="name" placeholder="Name" required
                        class="w-full rounded border border-gray-300 px-4 py-2 text-sm placeholder-gray-400 focus:border-[#E85D36] focus:outline-none">
                </div>
                <div class="w-full">
                    <input type="email" name="email" placeholder="Email" required
                        class="w-full rounded border border-gray-300 px-4 py-2 text-sm placeholder-gray-400 focus:border-[#E85D36] focus:outline-none">
                </div>
                <div class="w-full">
                    <select name="gender" required class="w-full rounded border border-gray-300 px-4 py-2 text-sm text-gray-700 focus:border-[#E85D36] focus:outline-none">
                        <option value="" disabled selected>Gender</option>
                        <option value="female">Female</option>
                        <option value="male">Male</option>
                        <option value="other">Other</option>
                        <option value="prefer_not_to_say">Prefer not to say</option>
                    </select>
                </div>
                <div class="w-full">
                    <input type="date" name="appointment_date" required
                        class="w-full rounded border border-gray-300 px-4 py-2 text-sm text-gray-700 focus:border-[#E85D36] focus:outline-none">
                </div>
                <div class="w-full">
                    <textarea name="description" rows="4" placeholder="Describe your consultation needs..." required
                        class="w-full rounded border border-gray-300 px-4 py-2 text-sm placeholder-gray-400 focus:border-[#E85D36] focus:outline-none"></textarea>
                </div>
                <button type="submit"
                    class="mt-2 w-full rounded bg-[#E85D36] py-2 font-bold uppercase tracking-widest text-white transition hover:bg-[#c94a28]">Submit</button>
            </form>
        </div>
    </div>


</main>
