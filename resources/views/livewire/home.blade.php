<div>
    {{--  <section class="relative flex h-[80vh] min-h-[600px] items-center justify-center text-center text-white">
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1551803091-e20673f15770?q=80&w=2500&auto=format&fit=crop"
                alt="Denim Collection" class="h-full w-full object-cover">
            <div class="absolute inset-0 bg-black/30"></div>
        </div>

        <div class="relative z-10 p-6">
            <h1 class="mb-6 font-['Playfair_Display'] text-5xl md:text-7xl">Denim collection</h1>
            <a href="#"
                class="inline-block bg-white px-8 py-3 text-sm font-bold uppercase tracking-widest text-black transition-colors duration-300 hover:bg-[var(--color-danger)] hover:text-white">
                View Collection
            </a>
            <div class="mt-12 flex justify-center space-x-2">
                <button class="h-2 w-2 rounded-full bg-white opacity-50 hover:opacity-100"></button>
                <button class="h-2 w-2 rounded-full bg-white"></button>
                <button class="h-2 w-2 rounded-full bg-white opacity-50 hover:opacity-100"></button>
            </div>
        </div>
    </section> --}}

    <section class="relative flex h-[85vh] items-center justify-center text-center text-white md:h-[100vh]">
        <div class="absolute inset-0 z-0">
            <video class="h-full w-full object-cover" autoplay muted loop>
                <source src="{{ asset('media/video.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="absolute inset-0 bg-black opacity-70 transition-opacity duration-300 hover:opacity-30"></div>
        </div>

        <div class="relative z-10 p-6 text-center" x-data="{
            active: 0,
            timer: null,
            slides: [
                { title: 'Avia Samara', text: 'View Collection', url: '/shop' },
                { title: 'Avia Samara Tailored with Genius', text: 'Made to Measure', url: '/made-to-measure' },
                { title: 'What We Stand For', text: 'About Us', url: '/about' }
            ],
            init() {
                this.startTimer();
            },
            startTimer() {
                this.timer = setInterval(() => {
                    this.active = (this.active + 1) % this.slides.length;
                }, 5000);
            },
            goTo(index) {
                clearInterval(this.timer);
                this.active = index;
                this.startTimer();
            }
        }">

        <h1 class="mb-8 font-['Playfair_Display'] text-5xl md:text-7xl" x-text="slides[active].title"></h1> <!-- Title displayed here -->

        <div class="relative mx-auto h-14 w-full overflow-hidden">
            <template x-for="(slide, index) in slides" :key="index">
                <a wire:navigate :href="slide.url" x-show="active === index"
                    x-transition:enter="transition ease-out duration-700"
                    x-transition:enter-start="opacity-0 translate-y-4"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    x-transition:leave="transition ease-in duration-300 absolute top-0 left-0 right-0 mx-auto"
                    x-transition:leave-start="opacity-100 translate-y-0"
                    x-transition:leave-end="opacity-0 -translate-y-4"
                    class="absolute inset-x-0 mx-auto inline-block w-fit bg-white px-8 py-3 text-sm font-bold uppercase tracking-widest text-black shadow-sm transition-colors duration-300 hover:bg-[var(--color-danger)] hover:text-white"
                    x-text="slide.text">
                </a>
            </template>
        </div>

        <div class="mt-12 flex justify-center space-x-3">
            <template x-for="(slide, index) in slides" :key="index">
                <button @click="goTo(index)" class="h-2 w-2 rounded-full transition-all duration-300"
                    :class="active === index ? 'bg-white scale-125' : 'bg-white/50 hover:bg-white'">
                </button>
            </template>
        </div>

    </div>
    </section>

    <section class="bg-[var(--color-bg-pale)] py-20">
        <div class="container mx-auto px-6 md:px-12">
            <h3 class="mb-10 text-xs font-bold uppercase tracking-[0.2em] text-gray-400">Woven in Stories</h3>

            <div class="flex flex-col items-center gap-16 lg:flex-row">
                <div
                    class="group relative flex aspect-video w-full cursor-pointer items-center justify-center overflow-hidden rounded-sm bg-black shadow-xl lg:w-1/2">
                    <img src="{{ asset('media/IMG_1164.jpg') }}"
                        alt="Story Video"
                        class="h-full w-full object-cover opacity-70 transition duration-500 group-hover:opacity-60">
                    <div class="absolute inset-0 flex flex-col items-center justify-center">
                        <div
                            class="flex h-16 w-16 items-center justify-center rounded-full border border-white transition duration-300 group-hover:scale-110">
                            <img src="{{ asset('logo.png') }}" alt="">
                            {{-- <svg class="ml-1 h-6 w-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M6.3 2.841A1.5 1.5 0 004 4.11V15.89a1.5 1.5 0 002.3 1.269l9.344-5.89a1.5 1.5 0 000-2.538L6.3 2.84z" />
                            </svg> --}}
                        </div>
                        <br>
                        <span
                            class="mb-4 px-4 text-center font-['Playfair_Display'] text-2xl italic text-white md:text-3xl">"Crafted
                            with Tailoring Genius"</span>

                    </div>
                </div>

                <div class="w-full space-y-6 lg:w-1/2">
                    <h2 class="font-['Playfair_Display'] text-4xl italic text-[#1A1A1A] md:text-5xl">Company Overview</h2>
                    <div class="h-0.5 w-12 bg-[var(--color-danger)]"></div>
                    <p class="text-sm font-light leading-relaxed text-gray-600 md:text-base">
                        Just over 10 years ago, we decided to break away from the norm of fast fashion.
                        It started with a gathering of friends and a shared love for craft.
                        For us, clothes are not just items you wear, they are parts of your own story.
                        <br><br>
                        We admit the road was steep, but seeing how our pieces inspire you, and
                        shape who you are becoming, that was... that feeling felt well made.
                        And now, reflecting on the beauty of community, from the laughter, the hard
                        conversations, the shared meals, the support, and even the silence,
                        we feel the music.
                    </p>

                    <div class="mt-6 border-l-2 border-[#1A1A1A] py-2 pl-6">
                        <p class="font-['Playfair_Display'] text-xl italic text-gray-800">"Where your stories connect"
                        </p>
                        <p class="mt-2 text-[10px] font-bold uppercase tracking-widest text-[var(--color-danger)]">— John Doe
                        </p>
                    </div>

                    <a href="#"
                        class="mt-4 inline-block bg-[#1A1A1A] px-8 py-4 text-xs uppercase tracking-wider text-white transition-colors duration-300 hover:bg-[var(--color-danger)]">Read
                        Our Story</a>
                </div>
            </div>
        </div>
    </section>

    <section class="w-full py-16">
        <div class="container mx-auto max-w-6xl px-6 md:px-12">

            <div class="mb-12 text-center">
                <h2 class="font-['Playfair_Display'] text-3xl font-[800] capitalize italic text-[var(--color-text-dark)] md:text-4xl">
                    Our work in numbers
                </h2>
            </div>

            <div class="grid grid-cols-1 gap-6 md:grid-cols-3">

                <div class="flex items-center gap-5 rounded-2xl bg-[var(--color-bg-light)] p-6 transition-transform duration-300 hover:-translate-y-1">
                    <div class="flex h-16 w-16 flex-shrink-0 items-center justify-center rounded-xl border border-gray-100 bg-white text-gray-800 shadow-sm">
                        <span class="mdi-account-outline mdi text-3xl"></span>
                    </div>
                    <div x-data="{ current: 0, target: 975 }" x-intersect.once="
                        $interval = setInterval(() => {
                            if (current < target) {
                                current += Math.ceil(target / 50); // Speed control
                                if (current > target) current = target;
                            } else {
                                clearInterval($interval);
                            }
                        }, 20)">
                        <div class="flex items-baseline text-2xl font-bold text-[#1A1A1A] md:text-3xl">
                            <span x-text="current">0</span><span>+</span>
                        </div>
                        <div class="text-sm font-medium text-gray-500 md:text-base">
                            Happy Clients
                        </div>
                    </div>
                </div>

                <div class="flex items-center gap-5 rounded-2xl bg-[var(--color-bg-light)] p-6 transition-transform duration-300 hover:-translate-y-1">
                    <div class="flex h-16 w-16 flex-shrink-0 items-center justify-center rounded-xl border border-gray-100 bg-white text-gray-800 shadow-sm">
                        <span class="mdi-check-circle-outline mdi text-3xl"></span>
                    </div>
                    <div x-data="{ current: 0, target: 724 }" x-intersect.once="
                        $interval = setInterval(() => {
                            if (current < target) {
                                current += Math.ceil(target / 50);
                                if (current > target) current = target;
                            } else {
                                clearInterval($interval);
                            }
                        }, 20)">
                        <div class="flex items-baseline text-2xl font-bold text-[#1A1A1A] md:text-3xl">
                            <span x-text="current">0</span><span>+</span>
                        </div>
                        <div class="text-sm font-medium text-gray-500 md:text-base">
                            Projects Delivered
                        </div>
                    </div>
                </div>

                <div class="flex items-center gap-5 rounded-2xl bg-[var(--color-bg-light)] p-6 transition-transform duration-300 hover:-translate-y-1">
                    <div class="flex h-16 w-16 flex-shrink-0 items-center justify-center rounded-xl border border-gray-100 bg-white text-gray-800 shadow-sm">
                        <span class="mdi-inbox-full-outline mdi text-3xl"></span>
                    </div>
                    <div x-data="{ current: 0, target: 89 }" x-intersect.once="
                        $interval = setInterval(() => {
                            if (current < target) {
                                current += Math.ceil(target / 50);
                                if (current > target) current = target;
                            } else {
                                clearInterval($interval);
                            }
                        }, 30)"> <div class="flex items-baseline text-2xl font-bold text-[#1A1A1A] md:text-3xl">
                            <span x-text="current">0</span><span>+</span>
                        </div>
                        <div class="text-sm font-medium text-gray-500 md:text-base">
                            Order Placed
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <div class="bg-[var(--color-primary)] px-6 py-6 md:px-12">
        <div class="container mx-auto">
            <h2 class="text-center font-['Playfair_Display'] text-3xl italic text-white md:text-4xl">A Feel Of Our Craftsmanship</h2>
        </div>
    </div>

    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img class="h-full w-full object-fill" src="{{ asset('media/DSC08400-2_022134.jpg') }}" alt="avia samara">
            </div>
            <div class="swiper-slide">
                <img class="h-full w-full object-fill" src="{{ asset('media/DSC08426_115240.jpg') }}" alt="avia samara">
            </div>
            <div class="swiper-slide">
                <img class="h-full w-full object-fill" src="{{ asset('media/DSC08548_022316.jpg') }}" alt="avia samara">
            </div>
            <div class="swiper-slide">
               <img class="h-full w-full object-fill" src="{{ asset('media/DSC08435_123001.jpg') }}" alt="avia samara">
            </div>
            <div class="swiper-slide">
                <img class="h-full w-full object-fill" src="{{ asset('media/DSC08492-samaEdit_102749.jpg') }}" alt="avia samara">
            </div>
            <div class="swiper-slide">
                <img class="h-full w-full object-fill" src="{{ asset('media/DSC08584_111214.jpg') }}" alt="avia samara">
            </div>
            <div class="swiper-slide">
                <img class="h-full w-full object-fill" src="{{ asset('media/e56224f3-7daf-4337-85aa-3d7cbb3125d0.jpg') }}" alt="avia samara">
            </div>
            <div class="swiper-slide">
                <img class="h-full w-full object-fill" src="{{ asset('media/IMG_0120.jpg') }}" alt="avia samara">
            </div>
            <div class="swiper-slide">
                <img class="h-full w-full object-fill" src="{{ asset('media/IMG_4210.jpg') }}" alt="avia samara">
            </div>

            {{-- --- --}}
            <div class="swiper-slide">
                <img class="h-full w-full object-fill" src="{{ asset('media/IMG_2193.jpg') }}" alt="avia samara">
            </div>
            <div class="swiper-slide">
                <img class="h-full w-full object-fill" src="{{ asset('media/IMG_2581.jpg') }}" alt="avia samara">
            </div>

            <div class="swiper-slide">
                <img class="h-full w-full object-fill" src="{{ asset('media/IMG_2192.jpg') }}" alt="avia samara">
            </div>
            <div class="swiper-slide">
                <img class="h-full w-full object-fill" src="{{ asset('media/IMG_2195.jpg') }}" alt="avia samara">
            </div>
            <div class="swiper-slide">
                <img class="h-full w-full object-fill" src="{{ asset('media/DSC08238-y-(4)-Edit.jpg') }}" alt="avia samara">
            </div>
            <div class="swiper-slide">
                <img class="h-full w-full object-fill" src="{{ asset('media/IMG_6635.jpg') }}" alt="avia samara">
            </div>
        </div>
        </div>

    {{-- <section class="grid grid-cols-1 gap-1 bg-white md:grid-cols-2">
        <div class="group relative h-[600px] cursor-pointer overflow-hidden">
            <img src="https://images.unsplash.com/photo-1595777457583-95e059d581b8?q=80&w=1200" alt="Floral Dress"
                class="h-full w-full object-cover transition duration-700 group-hover:scale-110">
            <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-60"></div>
            <div class="absolute bottom-8 left-8 text-white">
                <p class="mb-1 font-['Playfair_Display'] text-2xl">Yellow Midi Dress</p>
                <span class="border-b border-white/50 pb-1 text-xs uppercase tracking-wider opacity-90">Spring
                    Collection</span>
            </div>
        </div>
        <div class="group relative h-[600px] cursor-pointer overflow-hidden">
            <img src="https://images.unsplash.com/photo-1572804013309-59a88b7e92f1?q=80&w=1200" alt="Pink Dress"
                class="h-full w-full object-cover transition duration-700 group-hover:scale-110">
            <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-60"></div>
            <div class="absolute bottom-8 left-8 text-white">
                <p class="mb-1 font-['Playfair_Display'] text-2xl">Modern Fit Pink Dress</p>
                <span class="border-b border-white/50 pb-1 text-xs uppercase tracking-wider opacity-90">Summer
                    Edit</span>
            </div>
        </div>
    </section> --}}

  

    <section class="bg-[var(--color-primary)] py-20">
        <div class="container mx-auto px-6 md:px-12">
            <div class="flex flex-col items-center gap-12 md:flex-row">
                <div class="h-[500px] w-full shadow-lg md:w-1/2">
                    <img src="{{ asset('media/IMG_7518.jpg') }}"
                        alt="Showroom Interior" class="h-full w-full object-cover">
                </div>

                <div class="w-full pl-0 md:w-1/2 md:pl-12">
                    <span class="mb-2 block text-xs font-bold uppercase tracking-[0.2em] text-[var(--color-text-white)]">Rooted In Tradition</span>
                    <h2 class="mb-6 font-['Playfair_Display'] text-4xl italic text-[var(--color-bg-light)] md:text-5xl">We Tailor Heritage With Modern Craftsmanship
                    </h2>
                    <p class="mb-8 font-light leading-relaxed text-[var(--color-bg-pale)]">
                        At Avia Samara, we combine traditional African textiles with modern tailoring techniques to deliver the perfect fit for any occasion. Our custom-made suits, dresses, and alterations are crafted with care and precision, ensuring customer satisfaction every time.
                    </p>
                    <div class="flex gap-4">
                        <a href="{{ route('contact') }}" wire:navigate
                            class="bg-[#1A1A1A] px-8 py-3 text-xs font-bold uppercase tracking-wide text-white transition-colors hover:bg-[var(--color-danger)]">Contact</a>
                        <a href="tel:+2347035944057"
                            class="border border-gray-300 px-8 py-3 text-xs font-bold uppercase tracking-wide text-[var(--color-text-white)] transition-colors hover:border-black hover:bg-gray-50 hover:text-[var(--color-text-dark)]">Call
                            Us Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="border-t border-gray-200 bg-gray-100 py-20">
        <div class="container mx-auto px-6 md:px-12">
            <div class="flex flex-col-reverse items-center gap-16 md:flex-row">

                <div class="w-full md:w-1/2">
                    <div class="mb-8 flex -space-x-3">
                        <img class="h-12 w-12 rounded-full border-2 border-white shadow-sm"
                            src="https://i.pravatar.cc/100?img=1" alt="">
                        <img class="h-12 w-12 rounded-full border-2 border-white shadow-sm"
                            src="https://i.pravatar.cc/100?img=5" alt="">
                        <img class="h-12 w-12 rounded-full border-2 border-white shadow-sm"
                            src="https://i.pravatar.cc/100?img=3" alt="">
                        <div
                            class="flex h-12 w-12 items-center justify-center rounded-full border-2 border-white bg-gray-200 text-xs font-bold text-gray-500 shadow-sm">
                            +4</div>
                    </div>

                    <h2 class="mb-4 font-['Playfair_Display'] text-4xl text-[#1A1A1A]">Virtual Consultation</h2>
                    <p class="mb-8 text-base leading-relaxed text-gray-600">
                        Can't make it to our physical location? Schedule a free virtual call
                        via Zoom or Facetime with our styling experts to find your perfect fit
                        from the comfort of your home.
                    </p>
                    <button
                        class="bg-[#1A1A1A] px-10 py-4 text-xs font-bold uppercase tracking-widest text-white shadow-lg transition-colors hover:bg-[var(--color-danger)]">Book
                        Virtual Session</button>
                </div>

                <div class="flex w-full justify-center md:w-1/2">
                    <div class="relative w-full max-w-lg">
                        <div
                            class="absolute -inset-1 rounded-lg bg-gradient-to-r from-gray-200 to-gray-300 opacity-50 blur">
                        </div>
                        <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?q=80&w=1000"
                            class="relative w-full rounded-lg shadow-2xl" alt="Virtual Call on Laptop">
                    </div>
                </div>

            </div>
        </div>
    </section> --}}

    <section class="bg-[var(--color-bg-pale)] py-24">
        <div class="container mx-auto px-6 md:px-12">
            <div class="flex flex-row items-center gap-8 md:gap-16">

                <div class="flex w-12 shrink-0 justify-center pt-4 md:w-24">
                    <h2
                        class="rotate-180 whitespace-nowrap font-['Playfair_Display'] text-4xl uppercase tracking-wider text-gray-900 [writing-mode:vertical-rl] md:text-6xl">
                        Our Mission
                    </h2>
                </div>

                <div class="flex flex-1 flex-col items-center gap-2 pt-2 md:flex-row">
                    <div class="w-full space-y-10 text-base leading-relaxed text-gray-800 md:w-2/3 md:text-lg">
                        <p>
                            We give every woman the freedom to dress the way she wants to be addressed. For too long,
                            custom clothing has been reserved for men. AVIA SAMARA is a tool for you to create custom
                            pieces that you'll actually want to wear, the way you want to wear them.
                        </p>
                        <p>
                            We empower women to live life the way they want to. We create a space for women who may have
                            felt forgotten and a place where all women are celebrated.
                        </p>
                        <p>
                            We are here to celebrate women who challenge the status quo. We aren't just a brand—we are a
                            movement, a family committed to giving women what they want, how they want it.
                        </p>
                    </div>

                    <div class="h-[270px] shadow-lg md:h-[420px]">
                        <img src="{{ asset('media/IMG_7523.jpg') }}"
                            alt="Showroom Interior" class="h-full w-full object-cover">
                    </div>
                </div>

            </div>
        </div>
    </section>

     <section class="bg-[var(--color-primary)] py-20 text-white lg:py-28">
        <div class="container mx-auto px-6 md:px-12">
            <div class="flex flex-col items-center gap-12 md:flex-row lg:gap-24">

                <div class="order-2 flex w-full flex-col items-start md:order-1 md:w-1/2 md:pl-12">
                    <h2
                        class="capitallize mb-8 font-['Playfair_Display'] text-3xl italic leading-tight tracking-wide md:text-5xl">
                        Made to Order
                    </h2>

                    <div class="max-w-md space-y-6 text-sm leading-relaxed text-gray-300 md:text-base">
                        <p>
                            We offer made to order, fully customizable men and women's clothing, all shoppable online. Pick a
                            base style, place an order and be sure to check your email for order confimation.
                        </p>

                    </div>

                    <div class="mt-10">
                        <a href="{{ route('shop') }}" wire:navigate
                            class="inline-block border border-gray-500 px-8 py-3 text-xs font-bold uppercase tracking-widest text-white transition-colors duration-300 hover:bg-white hover:text-[#132a28]">
                            Shop Our Styles
                        </a>
                    </div>
                </div>

                <div class="order-1 flex w-full justify-center md:order-2 md:w-1/2 md:justify-start">
                    <div class="relative h-[500px] w-full max-w-md">
                        <img src="{{ asset('media/8Z1A9685_064751.jpg') }}"
                            alt="Made to Order Detail" class="arch-image h-full w-full object-cover shadow-xl">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="bg-[var(--color-bg-pale)] py-20 lg:py-28">
        <div class="container mx-auto px-6 md:px-12">
            <div class="flex flex-col items-center gap-12 md:flex-row lg:gap-24">

                <div class="flex w-full justify-center md:w-1/2 md:justify-end">
                    <div class="relative h-[500px] w-full max-w-md">
                        <img src="{{ asset('media/AVIA-SAMARA-c_055054.jpg') }}"
                            alt="Bespoke Suit Detail" class="arch-image h-full w-full object-cover shadow-xl">
                    </div>
                </div>

                <div class="w-full text-left md:w-1/2">
                    <h2
                        class="mb-8 font-['Playfair_Display'] text-3xl capitalize italic leading-tight tracking-wide text-gray-900 md:text-5xl">
                        Made to Measure<br>Avia Samara
                    </h2>

                    <div class="max-w-md space-y-6 text-sm leading-relaxed text-gray-600 md:text-base">
                        <p>
                            Join us in-person or book a virtual appointment, where we will measure you from head to toe
                            and walk you through our entire collection.
                        </p>
                        <p>
                            Every piece will be made to your unique body, and you can shop online for future purchases.
                            Book a session with us today by emailing
                            <a href="mail:hq@samara.co"
                                class="text-[var(--color-danger)] underline decoration-1 underline-offset-2 transition-colors hover:text-black">hq@samara.co</a>.
                        </p>
                    </div>

                    <div class="mt-10">
                        <a href="{{ route('made-to-measure') }}" wire:navigate
                            class="inline-block border border-gray-400 px-8 py-3 text-xs font-bold uppercase tracking-widest text-gray-900 transition-colors duration-300 hover:bg-gray-900 hover:text-white">
                            Learn More
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section x-data="{
            active: 0,
            total: 3,
            interval: null,
            init() {
                this.startAutoplay();
            },
            startAutoplay() {
                this.interval = setInterval(() => {
                    this.next();
                }, 10000); // 20 seconds
            },
            stopAutoplay() {
                clearInterval(this.interval);
            },
            resetTimer() {
                this.stopAutoplay();
                this.startAutoplay();
            },
            next() {
                this.active = (this.active + 1) % this.total;
                this.resetTimer();
            },
            prev() {
                this.active = (this.active - 1 + this.total) % this.total;
                this.resetTimer();
            }
        }"
        class="group relative mx-auto my-4 mb-10 max-w-4xl rounded-xl border-slate-200 px-6 py-16 text-center transition-all ease-in-out hover:border md:my-8 md:mb-14">
        <h3 class="mb-8 font-['Playfair_Display'] text-xl font-semibold italic text-black md:text-2xl">Avia Samara Client Testimonies</h3>
    
        {{-- Testimonials Container --}}
        <div class="relative min-h-[200px]"> {{-- Testimonial 1 --}}
            <div x-show="active === 0" x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0"
                x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 translate-y-0"
                x-transition:leave-end="opacity-0 -translate-y-2"
                class="absolute inset-0 h-full w-full rounded-xl border border-slate-300 bg-white p-8 shadow-sm duration-300 ease-in-out hover:border-none">
                <p class="mb-6 text-lg italic text-gray-500">"Shopping here has been a fantastic experience. The staff is friendly and knowledgeable, making it easy to find the
                perfect outfit. Plus, their delivery was super quick!"</p>
                <div class="text-sm font-bold">Jennifer Chukwuma</div>
                <div class="text-sm text-gray-400">Happy Client</div>
            </div>
    
            {{-- Testimonial 2 --}}
            <div x-show="active === 1" x-cloak x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0"
                x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 translate-y-0"
                x-transition:leave-end="opacity-0 -translate-y-2"
                class="absolute inset-0 h-full w-full rounded-xl border border-slate-300 bg-white p-8 shadow-sm duration-300 ease-in-out hover:border-none">
                <p class="mb-6 text-lg italic text-gray-500">"I absolutely love this store! The quality of the clothing is outstanding, and the styles are always on-trend. I always
                leave with something special. Highly recommend!"</p>
                <div class="text-sm font-bold">Michael O'Connor</div>
                <div class="text-sm text-gray-400">Happy Client</div>
            </div>
    
            {{-- Testimonial 3 --}}
            <div x-show="active === 2" x-cloak x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0"
                x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 translate-y-0"
                x-transition:leave-end="opacity-0 -translate-y-2"
                class="absolute inset-0 h-full w-full rounded-xl border border-slate-300 bg-white p-8 shadow-sm duration-300 ease-in-out hover:border-none">
                <p class="mb-6 text-lg italic text-gray-500">"Amazing experience from start to finish. The customer service was stellar and my order arrived right on time. The
                quality of the items is fantastic. I’ll be back for sure!"</p>
                <div class="text-sm font-bold">Laura Nguyen</div>
                <div class="text-sm text-gray-400">Happy Customer</div>
            </div>
    
        </div>
    
        {{-- Navigation Buttons --}}
        <button @click="prev()"
            class="absolute left-0 top-1/2 z-10 -ml-0 flex h-10 w-10 -translate-y-1/2 items-center justify-center rounded-full border border-slate-300 bg-white text-gray-400 shadow-sm transition-all duration-300 hover:border-slate-400 hover:text-black md:-ml-20">
            ‹
        </button>
    
        <button @click="next()"
            class="absolute right-0 top-1/2 z-10 -mr-0 flex h-10 w-10 -translate-y-1/2 items-center justify-center rounded-full border border-slate-300 bg-white text-gray-400 shadow-sm transition-all duration-300 hover:border-slate-400 hover:text-black md:-mr-20">
            ›
        </button>
    
    </section>


    <section class="bg-[#132a28] px-4 py-24 text-center">
        <div class="container mx-auto">
            <h2
                class="mb-6 font-['Playfair_Display'] text-3xl uppercase tracking-wide text-white md:text-5xl lg:text-6xl">
                Let's Get You Dressed The Way <br>You Want To Be Addressed
            </h2>

            <p class="mx-auto mb-12 max-w-2xl text-sm leading-relaxed text-gray-300 md:text-base">
                At Avia Samara We Gurantee Complete Satisfaction
            </p>

            <a href="{{ route('contact') }}" wire:navigate
                class="inline-block bg-[#f2efe9] px-10 py-4 text-xs font-bold uppercase tracking-widest text-[#132a28] transition-colors duration-300 hover:bg-white">
                Contact Us
            </a>
        </div>
    </section>


    <script>
        var swiper = new Swiper(".mySwiper", {
            watchSlidesProgress: true,
            slidesPerView: 1.2, // Default value for desktop
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            breakpoints: {
                // when window width is <= 768px
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
