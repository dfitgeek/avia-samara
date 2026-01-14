<div>
    {{--  <section class="relative flex justify-center items-center h-[80vh] min-h-[600px] text-white text-center">
        <div class="z-0 absolute inset-0">
            <img src="https://images.unsplash.com/photo-1551803091-e20673f15770?q=80&w=2500&auto=format&fit=crop"
                alt="Denim Collection" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-black/30"></div>
        </div>

        <div class="z-10 relative p-6">
            <h1 class="mb-6 font-['Playfair_Display'] text-5xl md:text-7xl">Denim collection</h1>
            <a href="#"
                class="inline-block bg-white hover:bg-[var(--color-danger)] px-8 py-3 font-bold text-black hover:text-white text-sm uppercase tracking-widest transition-colors duration-300">
                View Collection
            </a>
            <div class="flex justify-center space-x-2 mt-12">
                <button class="bg-white opacity-50 hover:opacity-100 rounded-full w-2 h-2"></button>
                <button class="bg-white rounded-full w-2 h-2"></button>
                <button class="bg-white opacity-50 hover:opacity-100 rounded-full w-2 h-2"></button>
            </div>
        </div>
    </section> --}}

    <section class="relative flex justify-center items-center h-[85vh] md:h-[100vh] text-white text-center">
        <div class="z-0 absolute inset-0">
            <video class="w-full h-full object-cover" autoplay muted loop>
                <source src="{{ asset('media/video.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="absolute inset-0 bg-black opacity-70 hover:opacity-30 transition-opacity duration-300"></div>
        </div>

        <div class="z-10 relative p-6 text-center" x-data="{
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

        <div class="relative mx-auto w-full h-14 overflow-hidden">
            <template x-for="(slide, index) in slides" :key="index">
                <a wire:navigate :href="slide.url" x-show="active === index"
                    x-transition:enter="transition ease-out duration-700"
                    x-transition:enter-start="opacity-0 translate-y-4"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    x-transition:leave="transition ease-in duration-300 absolute top-0 left-0 right-0 mx-auto"
                    x-transition:leave-start="opacity-100 translate-y-0"
                    x-transition:leave-end="opacity-0 -translate-y-4"
                    class="inline-block absolute inset-x-0 bg-white hover:bg-[var(--color-danger)] shadow-sm mx-auto px-8 py-3 w-fit font-bold text-black hover:text-white text-sm uppercase tracking-widest transition-colors duration-300"
                    x-text="slide.text">
                </a>
            </template>
        </div>

        <div class="flex justify-center space-x-3 mt-12">
            <template x-for="(slide, index) in slides" :key="index">
                <button @click="goTo(index)" class="rounded-full w-2 h-2 transition-all duration-300"
                    :class="active === index ? 'bg-white scale-125' : 'bg-white/50 hover:bg-white'">
                </button>
            </template>
        </div>

    </div>
    </section>

    <section class="bg-[var(--color-bg-pale)] py-20">
        <div class="mx-auto px-6 md:px-12 container">
            <h3 class="mb-10 font-bold text-gray-400 text-xs uppercase tracking-[0.2em]">Woven in Stories</h3>

            <div class="flex lg:flex-row flex-col items-center gap-16">
                <div
                    class="group relative flex justify-center items-center bg-black shadow-xl rounded-sm w-full lg:w-1/2 aspect-video overflow-hidden cursor-pointer">
                    <img src="{{ asset('media/IMG_1164.jpg') }}"
                        alt="Story Video"
                        class="opacity-70 group-hover:opacity-60 w-full h-full object-cover transition duration-500">
                    <div class="absolute inset-0 flex flex-col justify-center items-center">
                        <div
                            class="flex justify-center items-center border border-white rounded-full w-16 h-16 group-hover:scale-110 transition duration-300">
                            <img src="{{ asset('logo.png') }}" alt="">
                            {{-- <svg class="ml-1 w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M6.3 2.841A1.5 1.5 0 004 4.11V15.89a1.5 1.5 0 002.3 1.269l9.344-5.89a1.5 1.5 0 000-2.538L6.3 2.84z" />
                            </svg> --}}
                        </div>
                        <br>
                        <span
                            class="mb-4 px-4 font-['Playfair_Display'] text-white text-2xl md:text-3xl text-center italic">"Crafted
                            with Tailoring Genius"</span>

                    </div>
                </div>

                <div class="space-y-6 w-full lg:w-1/2">
                    <h2 class="font-['Playfair_Display'] text-[#1A1A1A] text-4xl md:text-5xl italic">Company Overview</h2>
                    <div class="bg-[var(--color-danger)] w-12 h-0.5"></div>
                    <p class="font-light text-gray-600 text-sm md:text-base leading-relaxed">
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

                    <div class="mt-6 py-2 pl-6 border-[#1A1A1A] border-l-2">
                        <p class="font-['Playfair_Display'] text-gray-800 text-xl italic">"Where your stories connect"
                        </p>
                        <p class="mt-2 font-bold text-[10px] text-[var(--color-danger)] uppercase tracking-widest">— John Doe
                        </p>
                    </div>

                    <a href="#"
                        class="inline-block bg-[#1A1A1A] hover:bg-[var(--color-danger)] mt-4 px-8 py-4 text-white text-xs uppercase tracking-wider transition-colors duration-300">Read
                        Our Story</a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 w-full">
        <div class="mx-auto px-6 md:px-12 max-w-6xl container">

            <div class="mb-12 text-center">
                <h2 class="font-['Playfair_Display'] font-[800] text-[var(--color-text-dark)] text-3xl md:text-4xl italic capitalize">
                    Our work in numbers
                </h2>
            </div>

            <div class="gap-6 grid grid-cols-1 md:grid-cols-3">

                <div class="flex items-center gap-5 bg-[var(--color-bg-light)] p-6 rounded-2xl transition-transform hover:-translate-y-1 duration-300">
                    <div class="flex flex-shrink-0 justify-center items-center bg-white shadow-sm border border-gray-100 rounded-xl w-16 h-16 text-gray-800">
                        <span class="mdi-account-outline text-3xl mdi"></span>
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
                        <div class="flex items-baseline font-bold text-[#1A1A1A] text-2xl md:text-3xl">
                            <span x-text="current">0</span><span>+</span>
                        </div>
                        <div class="font-medium text-gray-500 text-sm md:text-base">
                            Happy Clients
                        </div>
                    </div>
                </div>

                <div class="flex items-center gap-5 bg-[var(--color-bg-light)] p-6 rounded-2xl transition-transform hover:-translate-y-1 duration-300">
                    <div class="flex flex-shrink-0 justify-center items-center bg-white shadow-sm border border-gray-100 rounded-xl w-16 h-16 text-gray-800">
                        <span class="mdi-check-circle-outline text-3xl mdi"></span>
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
                        <div class="flex items-baseline font-bold text-[#1A1A1A] text-2xl md:text-3xl">
                            <span x-text="current">0</span><span>+</span>
                        </div>
                        <div class="font-medium text-gray-500 text-sm md:text-base">
                            Projects Delivered
                        </div>
                    </div>
                </div>

                <div class="flex items-center gap-5 bg-[var(--color-bg-light)] p-6 rounded-2xl transition-transform hover:-translate-y-1 duration-300">
                    <div class="flex flex-shrink-0 justify-center items-center bg-white shadow-sm border border-gray-100 rounded-xl w-16 h-16 text-gray-800">
                        <span class="mdi-inbox-full-outline text-3xl mdi"></span>
                    </div>
                    <div x-data="{ current: 0, target: 89 }" x-intersect.once="
                        $interval = setInterval(() => {
                            if (current < target) {
                                current += Math.ceil(target / 50);
                                if (current > target) current = target;
                            } else {
                                clearInterval($interval);
                            }
                        }, 30)"> <div class="flex items-baseline font-bold text-[#1A1A1A] text-2xl md:text-3xl">
                            <span x-text="current">0</span><span>+</span>
                        </div>
                        <div class="font-medium text-gray-500 text-sm md:text-base">
                            Order Placed
                        </div>
                    </div>
                </div>

            </div>
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

            {{-- --- --}}
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

    {{-- <section class="gap-1 grid grid-cols-1 md:grid-cols-2 bg-white">
        <div class="group relative h-[600px] overflow-hidden cursor-pointer">
            <img src="https://images.unsplash.com/photo-1595777457583-95e059d581b8?q=80&w=1200" alt="Floral Dress"
                class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
            <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-60"></div>
            <div class="bottom-8 left-8 absolute text-white">
                <p class="mb-1 font-['Playfair_Display'] text-2xl">Yellow Midi Dress</p>
                <span class="opacity-90 pb-1 border-white/50 border-b text-xs uppercase tracking-wider">Spring
                    Collection</span>
            </div>
        </div>
        <div class="group relative h-[600px] overflow-hidden cursor-pointer">
            <img src="https://images.unsplash.com/photo-1572804013309-59a88b7e92f1?q=80&w=1200" alt="Pink Dress"
                class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
            <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-60"></div>
            <div class="bottom-8 left-8 absolute text-white">
                <p class="mb-1 font-['Playfair_Display'] text-2xl">Modern Fit Pink Dress</p>
                <span class="opacity-90 pb-1 border-white/50 border-b text-xs uppercase tracking-wider">Summer
                    Edit</span>
            </div>
        </div>
    </section> --}}

  

    <section class="bg-[var(--color-primary)] py-20">
        <div class="mx-auto px-6 md:px-12 container">
            <div class="flex md:flex-row flex-col items-center gap-12">
                <div class="shadow-lg w-full md:w-1/2 h-[500px]">
                    <img src="{{ asset('media/IMG_7518.jpg') }}"
                        alt="Showroom Interior" class="w-full h-full object-cover">
                </div>

                <div class="pl-0 md:pl-12 w-full md:w-1/2">
                    <span class="block mb-2 font-bold text-[var(--color-text-white)] text-xs uppercase tracking-[0.2em]">Rooted In Tradition</span>
                    <h2 class="mb-6 font-['Playfair_Display'] text-[var(--color-bg-light)] text-4xl md:text-5xl italic">We Tailor Heritage With Modern Craftsmanship
                    </h2>
                    <p class="mb-8 font-light text-[var(--color-bg-pale)] leading-relaxed">
                        At Avia Samara, we combine traditional African textiles with modern tailoring techniques to deliver the perfect fit for any occasion. Our custom-made suits, dresses, and alterations are crafted with care and precision, ensuring customer satisfaction every time.
                    </p>
                    <div class="flex gap-4">
                        <a href="{{ route('contact') }}" wire:navigate
                            class="bg-[#1A1A1A] hover:bg-[var(--color-danger)] px-8 py-3 font-bold text-white text-xs uppercase tracking-wide transition-colors">Contact</a>
                        <a href="tel:+2347035944057"
                            class="hover:bg-gray-50 px-8 py-3 border border-gray-300 hover:border-black font-bold text-[var(--color-text-white)] hover:text-[var(--color-text-dark)] text-xs uppercase tracking-wide transition-colors">Call
                            Us Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="bg-gray-100 py-20 border-gray-200 border-t">
        <div class="mx-auto px-6 md:px-12 container">
            <div class="flex md:flex-row flex-col-reverse items-center gap-16">

                <div class="w-full md:w-1/2">
                    <div class="flex -space-x-3 mb-8">
                        <img class="shadow-sm border-2 border-white rounded-full w-12 h-12"
                            src="https://i.pravatar.cc/100?img=1" alt="">
                        <img class="shadow-sm border-2 border-white rounded-full w-12 h-12"
                            src="https://i.pravatar.cc/100?img=5" alt="">
                        <img class="shadow-sm border-2 border-white rounded-full w-12 h-12"
                            src="https://i.pravatar.cc/100?img=3" alt="">
                        <div
                            class="flex justify-center items-center bg-gray-200 shadow-sm border-2 border-white rounded-full w-12 h-12 font-bold text-gray-500 text-xs">
                            +4</div>
                    </div>

                    <h2 class="mb-4 font-['Playfair_Display'] text-[#1A1A1A] text-4xl">Virtual Consultation</h2>
                    <p class="mb-8 text-gray-600 text-base leading-relaxed">
                        Can't make it to our physical location? Schedule a free virtual call
                        via Zoom or Facetime with our styling experts to find your perfect fit
                        from the comfort of your home.
                    </p>
                    <button
                        class="bg-[#1A1A1A] hover:bg-[var(--color-danger)] shadow-lg px-10 py-4 font-bold text-white text-xs uppercase tracking-widest transition-colors">Book
                        Virtual Session</button>
                </div>

                <div class="flex justify-center w-full md:w-1/2">
                    <div class="relative w-full max-w-lg">
                        <div
                            class="absolute -inset-1 bg-gradient-to-r from-gray-200 to-gray-300 opacity-50 rounded-lg blur">
                        </div>
                        <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?q=80&w=1000"
                            class="relative shadow-2xl rounded-lg w-full" alt="Virtual Call on Laptop">
                    </div>
                </div>

            </div>
        </div>
    </section> --}}

    <section class="bg-[var(--color-bg-pale)] py-24">
        <div class="mx-auto px-6 md:px-12 container">
            <div class="flex flex-row items-center gap-8 md:gap-16">

                <div class="flex justify-center pt-4 w-12 md:w-24 shrink-0">
                    <h2
                        class="font-['Playfair_Display'] text-gray-900 text-4xl md:text-6xl uppercase tracking-wider whitespace-nowrap rotate-180 [writing-mode:vertical-rl]">
                        Our Mission
                    </h2>
                </div>

                <div class="flex md:flex-row flex-col flex-1 items-center gap-2 pt-2">
                    <div class="space-y-10 w-full md:w-2/3 text-gray-800 text-base md:text-lg leading-relaxed">
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

                    <div class="shadow-lg h-[270px] md:h-[420px]">
                        <img src="{{ asset('media/IMG_7523.jpg') }}"
                            alt="Showroom Interior" class="w-full h-full object-cover">
                    </div>
                </div>

            </div>
        </div>
    </section>

     <section class="bg-[var(--color-primary)] py-20 lg:py-28 text-white">
        <div class="mx-auto px-6 md:px-12 container">
            <div class="flex md:flex-row flex-col items-center gap-12 lg:gap-24">

                <div class="flex flex-col items-start order-2 md:order-1 md:pl-12 w-full md:w-1/2">
                    <h2
                        class="mb-8 font-['Playfair_Display'] text-3xl md:text-5xl italic leading-tight tracking-wide capitallize">
                        Made to Order
                    </h2>

                    <div class="space-y-6 max-w-md text-gray-300 text-sm md:text-base leading-relaxed">
                        <p>
                            We offer made to order, fully customizable men and women's clothing, all shoppable online. Pick a
                            base style, place an order and be sure to check your email for order confimation.
                        </p>

                    </div>

                    <div class="mt-10">
                        <a href="{{ route('shop') }}" wire:navigate
                            class="inline-block hover:bg-white px-8 py-3 border border-gray-500 font-bold text-white hover:text-[#132a28] text-xs uppercase tracking-widest transition-colors duration-300">
                            Shop Our Styles
                        </a>
                    </div>
                </div>

                <div class="flex justify-center md:justify-start order-1 md:order-2 w-full md:w-1/2">
                    <div class="relative w-full max-w-md h-[500px]">
                        <img src="{{ asset('media/8Z1A9685_064751.jpg') }}"
                            alt="Made to Order Detail" class="shadow-xl w-full h-full object-cover arch-image">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="bg-[var(--color-bg-pale)] py-20 lg:py-28">
        <div class="mx-auto px-6 md:px-12 container">
            <div class="flex md:flex-row flex-col items-center gap-12 lg:gap-24">

                <div class="flex justify-center md:justify-end w-full md:w-1/2">
                    <div class="relative w-full max-w-md h-[500px]">
                        <img src="{{ asset('media/AVIA-SAMARA-c_055054.jpg') }}"
                            alt="Bespoke Suit Detail" class="shadow-xl w-full h-full object-cover arch-image">
                    </div>
                </div>

                <div class="w-full md:w-1/2 text-left">
                    <h2
                        class="mb-8 font-['Playfair_Display'] text-gray-900 text-3xl md:text-5xl italic capitalize leading-tight tracking-wide">
                        Made to Measure<br>Avia Samara
                    </h2>

                    <div class="space-y-6 max-w-md text-gray-600 text-sm md:text-base leading-relaxed">
                        <p>
                            Join us in-person or book a virtual appointment, where we will measure you from head to toe
                            and walk you through our entire collection.
                        </p>
                        <p>
                            Every piece will be made to your unique body, and you can shop online for future purchases.
                            Book a session with us today by emailing
                            <a href="mail:hq@samara.co"
                                class="text-[var(--color-danger)] hover:text-black decoration-1 underline underline-offset-2 transition-colors">hq@samara.co</a>.
                        </p>
                    </div>

                    <div class="mt-10">
                        <a href="{{ route('made-to-measure') }}" wire:navigate
                            class="inline-block hover:bg-gray-900 px-8 py-3 border border-gray-400 font-bold text-gray-900 hover:text-white text-xs uppercase tracking-widest transition-colors duration-300">
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
        class="group relative mx-auto my-4 md:my-8 mb-10 md:mb-14 px-6 py-16 hover:border border-slate-200 rounded-xl max-w-4xl text-center transition-all ease-in-out">
        <h3 class="mb-8 font-['Playfair_Display'] font-semibold text-black text-xl md:text-2xl italic">Avia Samara Client Testimonies</h3>
    
        {{-- Testimonials Container --}}
        <div class="relative min-h-[200px]"> {{-- Testimonial 1 --}}
            <div x-show="active === 0" x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0"
                x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 translate-y-0"
                x-transition:leave-end="opacity-0 -translate-y-2"
                class="absolute inset-0 bg-white shadow-sm p-8 border border-slate-300 hover:border-none rounded-xl w-full h-full duration-300 ease-in-out">
                <p class="mb-6 text-gray-500 text-lg italic">"Shopping here has been a fantastic experience. The staff is friendly and knowledgeable, making it easy to find the
                perfect outfit. Plus, their delivery was super quick!"</p>
                <div class="font-bold text-sm">Jennifer Chukwuma</div>
                <div class="text-gray-400 text-sm">Happy Client</div>
            </div>
    
            {{-- Testimonial 2 --}}
            <div x-show="active === 1" x-cloak x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0"
                x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 translate-y-0"
                x-transition:leave-end="opacity-0 -translate-y-2"
                class="absolute inset-0 bg-white shadow-sm p-8 border border-slate-300 hover:border-none rounded-xl w-full h-full duration-300 ease-in-out">
                <p class="mb-6 text-gray-500 text-lg italic">"I absolutely love this store! The quality of the clothing is outstanding, and the styles are always on-trend. I always
                leave with something special. Highly recommend!"</p>
                <div class="font-bold text-sm">Michael O'Connor</div>
                <div class="text-gray-400 text-sm">Happy Client</div>
            </div>
    
            {{-- Testimonial 3 --}}
            <div x-show="active === 2" x-cloak x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0"
                x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 translate-y-0"
                x-transition:leave-end="opacity-0 -translate-y-2"
                class="absolute inset-0 bg-white shadow-sm p-8 border border-slate-300 hover:border-none rounded-xl w-full h-full duration-300 ease-in-out">
                <p class="mb-6 text-gray-500 text-lg italic">"Amazing experience from start to finish. The customer service was stellar and my order arrived right on time. The
                quality of the items is fantastic. I’ll be back for sure!"</p>
                <div class="font-bold text-sm">Laura Nguyen</div>
                <div class="text-gray-400 text-sm">Happy Customer</div>
            </div>
    
        </div>
    
        {{-- Navigation Buttons --}}
        <button @click="prev()"
            class="top-1/2 left-0 z-10 absolute flex justify-center items-center bg-white shadow-sm -ml-0 md:-ml-20 border border-slate-300 hover:border-slate-400 rounded-full w-10 h-10 text-gray-400 hover:text-black transition-all -translate-y-1/2 duration-300">
            ‹
        </button>
    
        <button @click="next()"
            class="top-1/2 right-0 z-10 absolute flex justify-center items-center bg-white shadow-sm -mr-0 md:-mr-20 border border-slate-300 hover:border-slate-400 rounded-full w-10 h-10 text-gray-400 hover:text-black transition-all -translate-y-1/2 duration-300">
            ›
        </button>
    
    </section>


    <section class="bg-[#132a28] px-4 py-24 text-center">
        <div class="mx-auto container">
            <h2
                class="mb-6 font-['Playfair_Display'] text-white text-3xl md:text-5xl lg:text-6xl uppercase tracking-wide">
                Let's Get You Dressed The Way <br>You Want To Be Addressed
            </h2>

            <p class="mx-auto mb-12 max-w-2xl text-gray-300 text-sm md:text-base leading-relaxed">
                At Avia Samara We Gurantee Complete Satisfaction
            </p>

            <a href="{{ route('contact') }}" wire:navigate
                class="inline-block bg-[#f2efe9] hover:bg-white px-10 py-4 font-bold text-[#132a28] text-xs uppercase tracking-widest transition-colors duration-300">
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
