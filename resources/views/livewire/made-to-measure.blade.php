<div>
    <div class="relative w-full h-[400px] md:h-[500px] overflow-hidden">
        <img src="{{ asset('media/AVIA-SAMARA-c_055054.jpg') }}"
            alt="Made to Measure Hero" class="w-full h-full object-cover object-top">

        <div class="absolute inset-0 flex flex-col justify-center items-center bg-black/30 px-4 text-center">
            <p class="mb-4 text-white/90 text-xs md:text-sm uppercase tracking-[0.2em]">How It Works</p>
            <h1 class="font-['Playfair_Display'] font-light text-white text-4xl md:text-6xl lg:text-7xl">
                Made to Measure Bespoke
            </h1>
        </div>
    </div>

    <div class="bg-[var(--color-bg-light)] px-6 py-20">
        <div class="space-y-6 mx-auto max-w-3xl font-light text-gray-800 text-sm md:text-base leading-relaxed">
            <p class="font-bold">
                Avia Samara made to measure collection  is entirely made from scratch using the wearer's unique body measurements.
            </p>

            <p>
                Our made to measure bespoke program is all about creating a garment that is tailor-made to your unique
                body. Available in-person or virtually, you'll be able to customize each part of your garment, from
                fabric, lining, buttons, garment lengths, lapel style and more - with the extra perk of custom
                measurements. Because you are going completely custom, you'll have access to our full library of options
                of fabrics, trims, buttons, custom linings, embroideries and more - that aren't available in our Made to
                Order line.
            </p>

            <p>
                If you are in the Edp State, Nigeria area, one of our tailors will measure you. If you opt for a virtual appointment,
                we will walk you through how to get your measurements on a video call. We will enter your measurements
                into a customer account, so you can easily shop online at samara.co.
            </p>

            <p>
                We are making made to measure bespoke clothing accessible and affordable for women everywhere. In-store
                measuring is free, and you pay the same prices as listed on our website. After your first order, you can
                easily shop online and we'll make everything to your custom size. Additional fees apply for in-home or
                office measurement appointments, fabric and trim upgrades or custom lining.
            </p>

            <p class="font-medium italic">
                It's the easiest way to dress the way you want to be addressed.
            </p>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2">
        <div class="relative h-[400px] lg:h-[600px]">
            <img src="{{ asset('media/8Z1A9685_052221.jpg') }}"
                alt="NYC Showroom" class="w-full h-full object-cover">
        </div>

        <div class="flex flex-col justify-center items-start bg-[#023430] p-10 md:p-16 text-white">
            <h2 class="mb-6 font-['Playfair_Display'] text-3xl md:text-5xl">In-store Bespoke Appointment</h2>
            <p class="opacity-90 mb-10 font-light text-sm md:text-base">
                Visit us at 23 Giwa Amu Rd, off Airport Road, Oka, Benin City 300102, Edo State, Nigeria.
            </p>
            <a href="tel:+2347035944057"
                class="bg-[#F6EFE6] hover:bg-white px-8 py-3 font-bold text-[10px] text-black md:text-xs uppercase tracking-widest hover:scale-105 transition-all duration-300 transform">
                Call Us
            </a>
        </div>
    </div>

   

    <div class="bg-[#023430] px-6 py-20 text-white text-center">
        <div class="flex flex-col items-center mx-auto max-w-3xl">
            <h2 class="mb-8 font-['Playfair_Display'] text-3xl md:text-5xl">Shop with your custom size</h2>

            <div class="space-y-6 opacity-95 mb-10 max-w-2xl font-light text-sm md:text-base">
                <p>But wait! There's more... Once you have had your first initial bespoke measurements taken, we will be
                    sending you an email to confirm your order.</p>
                
            </div>

            <a href="{{  route('shop') }}"
                class="bg-[#F6EFE6] hover:bg-white px-8 py-3 font-bold text-[10px] text-black md:text-xs uppercase tracking-widest hover:scale-105 transition-all duration-300 transform">
                OUR COLLECTION
            </a>
        </div>
    </div>

    <div class="bg-[#F6EFE6] px-6 py-20 overflow-hidden">
        <div class="mx-auto max-w-4xl text-center">

            <div class="flex md:flex-row flex-col justify-center items-center gap-8 md:gap-4 mb-12">
                <div class="bg-white shadow-lg p-3 w-[220px] -rotate-3 transform">
                    <div class="bg-gray-200 mb-4 h-[220px] overflow-hidden">
                        <img src=" {{ asset('media/8Z1A9685_064751.jpg') }}"
                            class="w-full h-full object-cover" alt="User 1">
                    </div>
                </div>

                <div class="z-10 bg-white shadow-lg p-3 w-[220px] rotate-2 transform">
                    <div class="bg-gray-200 mb-4 h-[220px] overflow-hidden">
                        <img src="{{ asset('media/images.jfif') }}"
                            class="w-full h-full object-cover" alt="User 2">
                    </div>
                </div>

                <div class="bg-white shadow-lg p-3 w-[220px] -rotate-2 transform">
                    <div class="bg-gray-200 mb-4 h-[220px] overflow-hidden">
                        <img src="{{ asset('media/DSC08492-samaEdit_102749.jpg')  }}"
                            class="w-full h-full object-cover" alt="User 3">
                    </div>
                </div>
            </div>

            <h2 class="mb-4 font-['Playfair_Display'] text-[#2b2b2b] text-4xl md:text-5xl">Show Us Your 'A'</h2>

            <p class="font-medium text-gray-600 text-xs md:text-sm">
                We love when our customers look their customized personal best! 
            </p>
        </div>
    </div>
</div>
