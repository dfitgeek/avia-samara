<div>
    <section>
        <div>
            <div class="relative w-full h-[400px] md:h-[500px] overflow-hidden">
                <img src="{{ asset('media/photo-1532453288672-3a27e9be9efd.avif') }}" alt="Made to Measure Hero" class="w-full h-full object-cover object-top">
                <div class="absolute inset-0 flex flex-col justify-center items-center bg-black/30 px-4 text-center">
                    <p class="mb-4 text-white/90 text-xs md:text-sm uppercase tracking-[0.2em]">Avia Samara</p>
                    <h1 class="font-['Playfair_Display'] font-light text-white text-4xl md:text-6xl lg:text-7xl">
                        Our Collection
                    </h1>
                </div>
            </div>

            {{-- Shop --}}
            <livewire:shop category="all" />
        </div>
    </section>

    <div class="bg-[var(--color-primary)] px-6 md:px-12 py-6">
        <div class="mx-auto container">
            <h2 class="font-['Playfair_Display'] text-white text-3xl md:text-4xl text-center italic">A Feel Of Our Craftsmanship</h2>
        </div>
    </div>

    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img class="w-full h-full object-fill" src="{{ asset('media/DSC08400-2_022134.jpg') }}" alt="avia samara">
            </div>
            <div class="swiper-slide">
                <img class="w-full h-full object-fill" src="{{ asset('media/DSC08426_115240.jpg') }}" alt="avia samara">
            </div>
            <div class="swiper-slide">
                <img class="w-full h-full object-fill" src="{{ asset('media/DSC08548_022316.jpg') }}" alt="avia samara">
            </div>
            <div class="swiper-slide">
                <img class="w-full h-full object-fill" src="{{ asset('media/DSC08435_123001.jpg') }}" alt="avia samara">
            </div>
            <div class="swiper-slide">
                <img class="w-full h-full object-fill" src="{{ asset('media/DSC08492-samaEdit_102749.jpg') }}" alt="avia samara">
            </div>
            <div class="swiper-slide">
                <img class="w-full h-full object-fill" src="{{ asset('media/DSC08584_111214.jpg') }}" alt="avia samara">
            </div>
            <div class="swiper-slide">
                <img class="w-full h-full object-fill" src="{{ asset('media/e56224f3-7daf-4337-85aa-3d7cbb3125d0.jpg') }}" alt="avia samara">
            </div>
            <div class="swiper-slide">
                <img class="w-full h-full object-fill" src="{{ asset('media/IMG_0120.jpg') }}" alt="avia samara">
            </div>
            <div class="swiper-slide">
                <img class="w-full h-full object-fill" src="{{ asset('media/IMG_4210.jpg') }}" alt="avia samara">
            </div>
            <div class="swiper-slide">
                <img class="w-full h-full object-fill" src="{{ asset('media/IMG_2193.jpg') }}" alt="avia samara">
            </div>
            <div class="swiper-slide">
                <img class="w-full h-full object-fill" src="{{ asset('media/IMG_2581.jpg') }}" alt="avia samara">
            </div>
            <div class="swiper-slide">
                <img class="w-full h-full object-fill" src="{{ asset('media/IMG_2192.jpg') }}" alt="avia samara">
            </div>
            <div class="swiper-slide">
                <img class="w-full h-full object-fill" src="{{ asset('media/IMG_2195.jpg') }}" alt="avia samara">
            </div>
            <div class="swiper-slide">
                <img class="w-full h-full object-fill" src="{{ asset('media/DSC08238-y-(4)-Edit.jpg') }}" alt="avia samara">
            </div>
            <div class="swiper-slide">
                <img class="w-full h-full object-fill" src="{{ asset('media/IMG_6635.jpg') }}" alt="avia samara">
            </div>
        </div>
    </div>

    <script>
        var swiper = new Swiper(".mySwiper", {
            watchSlidesProgress: true,
            slidesPerView: 1.2, // Default value for desktop
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            breakpoints: {
                // when window width is <= 440px
                440: {
                    slidesPerView: 1.2, // Value for mobile
                },
                // when window width is > 768px
                768: {
                    slidesPerView: 3.2, // Value for desktop
                },
                1024: {
                    slidesPerView: 4.2, // Value for desktop
                },
            },
        });
    </script>
</div>
