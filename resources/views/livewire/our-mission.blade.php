<div>
    <style>
        /* Arbitrary font families to match the aesthetic without config */
        .font-serif-custom {
            font-family: 'Playfair Display', serif;
        }

        .font-sans-custom {
            font-family: 'Lato', sans-serif;
        }
    </style>

    <section class="relative h-[60vh] w-full overflow-hidden">
        <img src="{{ asset('media/photo-1531123897727-8f129e1688ce.avif') }}"
            alt="Woman in purple suit" class="absolute inset-0 h-full w-full object-cover object-top brightness-75 filter">

        <div class="relative z-10 flex h-full flex-col items-center justify-center gap-2">
            <p class="mb-4 text-xs uppercase tracking-[0.2em] text-white/90 md:text-sm">Our Mission</p>
            <h1 class="font-['Playfair_Display'] text-4xl font-light text-white md:text-6xl lg:text-7xl">
                Avia Samara Fashion
            </h1>
        </div>
    </section>

    <section class="bg-[var(--color-bg-light)] px-6 py-20 md:py-32">
        <div class="mx-auto max-w-4xl text-center">
            <h2 class="font-serif-custom text-3xl uppercase leading-tight text-gray-900 md:text-5xl">
                Dress how you <br>want to be addressed.
            </h2>
        </div>
    </section>

    <section class="w-full">
        <div class="flex h-auto flex-col md:h-[600px] md:flex-row">
            <div class="flex w-full flex-col justify-center bg-[var(--color-primary)] px-8 py-16 text-white md:w-1/2 md:px-20">
                <h3 class="font-serif-custom mb-8 text-3xl md:text-4xl">Our Mission</h3>
                <div class="space-y-6 text-sm font-light leading-relaxed opacity-90 md:text-base">
                    <p>
                        We aim to give every woman the freedom to dress the way she wants to be addressed. For too long,
                        custom clothing has been reserved for men. With Avia Samara you create custom pieces that you'll
                        actually want to wear, the way you want to wear them.
                    </p>
                    <p>
                        We empower women to live life the way they want to. We create a space for women who may have felt
                        forgotten and a place where all women are celebrated.
                    </p>
                    <p>
                        We are here to celebrate women who challenge the status quo. We aren't just a brand—we are a
                        movement, a family committed to giving women what they want, how they want it.
                    </p>
                </div>
            </div>
            <div class="h-96 w-full md:h-auto md:w-1/2">
                <img src="{{ asset('media/IMG_1164.jpg') }}"
                    alt="Woman in grey suit" class="h-full w-full object-cover object-top">
            </div>
        </div>

        <div class="flex h-auto flex-col md:h-[600px] md:flex-row">
            <div class="flex w-full flex-col justify-center bg-[#0F2830] px-8 py-16 text-white md:w-1/2 md:px-20">
                <h3 class="font-serif-custom mb-8 text-3xl md:text-4xl">Meet The Founder</h3>
                <div class="space-y-6 text-sm font-light leading-relaxed opacity-80 md:text-base">
                    <p class="mb-2 text-xs uppercase italic tracking-widest opacity-60">
                        We are founded and led by a an Icon .
                    </p>
                    <p>
                        Meet our founder, Farida Raafat. An Egyptian living in New York City, she has been in the fashion
                        industry her whole life. From learning how to sew at her family's factories, to studying at Parsons
                        in NYC, to working at brands such as TOM FORD and Rag&Bone.
                    </p>
                    <p>
                        Farida spent most of her career building brands and making clothes for men. She was never able to
                        shake the frustration she felt when she saw how easy it was for men to customize and shop for their
                        work clothes. A professional woman herself, she decided it was time to take her expertise and
                        finally give women the clothes they want, the way they want them.
                    </p>
                </div>
            </div>
            <div class="h-96 w-full md:h-auto md:w-1/2">
                <img src="{{ asset('media/IMG_6635.jpg') }}"
                    alt="Woman in green suit" class="h-full w-full object-cover object-center">
            </div>
        </div>
    </section>

    <section class="bg-[#EA5835] px-6 py-24 text-center text-white">
        <div class="mx-auto max-w-3xl">
            <h3 class="font-serif-custom mb-6 text-2xl capitalize md:text-5xl">We are on a mission to celebrate Nigerian Culture in Elegance </h3>
            <p class="mb-6 font-['Playfair_Display'] text-xs uppercase tracking-widest opacity-70">Avia Samara</p>
            <p class="font-light capitalize leading-relaxed opacity-90" >
                At our brand, we take immense pride in our years of expertise and creativity in the fashion industry. Our dedicated team is committed to elevating your wardrobe with pieces that are not just garments but true works of art. Each creation reflects our passion for craftsmanship, ensuring that every stitch and detail meets the highest standards. We understand that style is personal, and we strive to create unique pieces that resonate with your individuality. Trust us to design a masterpiece that not only enhances your wardrobe but also serves as a testament to quality, elegance, and artistic expression.
            </p>
        </div>
    </section>

    <section class="bg-[#F9F5F0] px-6 py-20">
        <div class="container mx-auto">
            <h3 class="font-serif-custom mb-16 text-center text-3xl text-gray-900 md:text-4xl">Sustainability</h3>

            <div class="mx-auto grid max-w-5xl grid-cols-1 gap-8 md:grid-cols-3">
                <div class="group cursor-pointer">
                    <div class="relative h-96 w-full overflow-hidden rounded-t-[10rem]">
                        <img src="{{ asset('media/AVIA-SAMARA-c_055054.jpg') }}"
                            alt="Sewing Machine"
                            class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-110">
                    </div>
                    <h4 class="mb-2 mt-4 text-center text-lg font-semibold text-[var(--color-text-dark)]">Customer Satisfaction</h4>
                    <p class="text-center font-light leading-relaxed text-[var(--color-text-dark)]">
                        We put our clients first, ensuring every piece exceeds expectations and brings joy to every customer.
                    </p>
                </div>

                <div class="group cursor-pointer md:-mt-8">
                    <div class="relative h-96 w-full overflow-hidden rounded-t-[10rem]">
                        <img src="{{ asset('media/8Z1A9685_052221.jpg') }}"
                            alt="Yellow Fabric"
                            class="h-full w-full object-contain transition-transform duration-700 group-hover:scale-110">
                    </div>
                    <h4 class="mb-2 mt-4 text-center text-lg font-semibold text-[var(--color-text-dark)]">Flawless Execution</h4>
                    <p class="text-center font-light leading-relaxed text-[var(--color-text-dark)]">
                        Every garment is crafted with precision and care, reflecting our commitment to quality and detail.
                    </p>
                </div>

                <div class="group cursor-pointer">
                    <div class="relative h-96 w-full overflow-hidden rounded-t-[10rem]">
                        <img src="{{ asset('media/IMG_0122.jpg') }}"
                            alt="Threads"
                            class="h-full w-full object-contain transition-transform duration-700 group-hover:scale-110">
                    </div>
                    <h4 class="mb-2 mt-4 text-center text-lg font-semibold text-[var(--color-text-dark)]">Timely Delivery</h4>
                    <p class="text-center font-light leading-relaxed text-[var(--color-text-dark)]">
                        We value your time and guarantee prompt delivery, so you can enjoy your new look without delay.
                    </p>
                </div>
            </div>
        </div>
    </section>
</div>
