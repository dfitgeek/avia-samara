<div>
    <div class="relative h-[400px] w-full overflow-hidden md:h-[500px]">
        <img src="{{ asset('media/premium_photo-1670871853613-34b62cc3d551.avif') }}" alt="Made to Measure Hero"
            class="h-full w-full object-cover object-top">

        <div class="absolute inset-0 flex flex-col items-center justify-center bg-black/30 px-4 text-center">
            <p class="mb-4 text-xs uppercase tracking-[0.2em] text-white/90 md:text-sm">Avia Samara</p>
            <h1 class="font-['Playfair_Display'] text-4xl font-light text-white md:text-6xl lg:text-7xl">
                Accessories
            </h1>
        </div>
    </div>

    

    <section class="px-4 py-16 md:px-8">
        <div class="container mx-auto">
            <div class="mb-10 flex items-end justify-between border-b border-gray-100 pb-4">
                <div>
                    <h2 class="font-['Playfair_Display'] text-4xl">Accessories</h2>
                    {{-- <p class="mt-2 font-['Playfair_Display'] text-sm italic text-gray-500">"All Categories"</p> --}}
                </div>
              
                <p  class="border-b border-black pb-1 text-xs font-bold uppercase transition-colors hover:border-[var(--color-danger)] hover:text-[var(--color-danger)]">
                    Our Collection
                </p>
            </div>




            <div>
                <div class="py-7">
                    <p class="text-center capitalize">Unfortunately we don't have items for this category yet :(
                    </p>
                </div>

               

               {{--  <div x-data="shopComponent(dbData)" class="mx-auto max-w-7xl">
        
     

                    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4">
                        
                        <template x-for="product in products" :key="product.id">
                            <div class="group flex flex-col bg-white p-2 shadow-sm transition-shadow duration-300 hover:shadow-lg">
                                
                                <div class="relative aspect-[3/4] cursor-pointer overflow-hidden bg-gray-100">
                                    <img :src="product.images[0]" 
                                         class="h-full w-full object-cover transition duration-700 group-hover:scale-105"
                                         @click="openImageModal(product, 0)">
                                    
                                    <button @click="openInfoModal(product)" 
                                            class="absolute right-3 top-3 z-10 rounded-full bg-white/90 p-2 text-black shadow-sm backdrop-blur transition hover:bg-black hover:text-white"
                                            title="Shopping Info">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </button>
            
                                    <div class="absolute inset-x-0 bottom-0 z-20 translate-y-full transition-transform duration-300 group-hover:translate-y-0">
                                        <button 
                                                class="flex w-full items-center justify-center gap-2 bg-black py-3 text-xs uppercase tracking-widest text-white hover:bg-gray-800">
                                            Add To Cart
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
            
                                <div class="mt-2 grid grid-cols-4 gap-2">
                                    <template x-for="(img, index) in product.images">
                                        <div @click="openImageModal(product, index)" 
                                             class="aspect-square cursor-pointer overflow-hidden border border-transparent transition hover:border-black">
                                            <img :src="img" class="h-full w-full object-cover">
                                        </div>
                                    </template>
                                </div>
            
                                <div class="mt-3 flex items-start justify-between">
                                    <div>
                                        <h3 x-text="product.name" class="text-sm font-medium uppercase tracking-wide text-gray-900"></h3>
                                        <p class="mt-1 text-xs text-gray-500" x-text="product.details.fit"></p>
                                    </div>
                                    <div class="text-right">
                                        <span x-text="product.price" class="text-sm font-bold text-gray-900"></span>
                                    </div>
                                </div>
            
                            </div>
                        </template>
                    </div>
            
                    <div class="mt-12 flex justify-center">
                        <button class="border-b border-gray-300 pb-1 text-xs uppercase tracking-widest transition-colors hover:border-black hover:text-gray-600">
                            Load More
                        </button>
                    </div>
            
                    <div x-show="modals.image.open" 
                         x-transition.opacity
                         style="display: none;"
                         class="fixed inset-0 z-50 flex items-center justify-center bg-black/90 p-4 backdrop-blur-sm"
                         x-cloak>
                         
                        <button @click="modals.image.open = false" class="absolute right-5 top-5 text-white hover:text-gray-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
            
                        <div class="relative flex max-h-full w-full max-w-4xl flex-col items-center" @click.outside="modals.image.open = false">
                            <img :src="modals.image.src" class="max-h-[85vh] w-auto rounded-sm object-contain shadow-2xl">
                            <p x-text="modals.image.caption" class="mt-4 text-sm uppercase tracking-widest text-white"></p>
                        </div>
                    </div>
            
                    <div x-show="modals.info.open" 
                         x-transition
                         style="display: none;"
                         class="fixed inset-0 z-50 flex items-center justify-center bg-black/50 p-4 backdrop-blur-sm"
                         x-cloak>
                         
                        <div class="relative w-full max-w-md transform bg-white p-6 shadow-2xl transition-all" @click.outside="modals.info.open = false">
                            <button @click="modals.info.open = false" class="absolute right-4 top-4 text-gray-400 hover:text-black">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
            
                            <h3 x-text="modals.info.data?.name" class="mb-2 text-xl font-bold uppercase tracking-wide"></h3>
                            <p x-text="modals.info.data?.price" class="mb-4 text-lg font-medium text-gray-700"></p>
                            
                            <hr class="my-4 border-gray-200">
                            
                            <div class="space-y-3 text-sm text-gray-600">
                                <p><strong>Material:</strong> <span x-text="modals.info.data?.details.material"></span></p>
                                <p><strong>Fit:</strong> <span x-text="modals.info.data?.details.fit"></span></p>
                                <p><strong>Care:</strong> <span x-text="modals.info.data?.details.care"></span></p>
                                <p x-show="modals.info.data?.details.description" class="mt-4 text-xs italic" x-text="modals.info.data?.details.description"></p>
                            </div>
            
                            <button @click="addToCart(modals.info.data); modals.info.open = false" 
                                    class="mt-6 w-full bg-black py-3 text-xs uppercase tracking-widest text-white transition hover:bg-gray-800">
                                Add To Cart
                            </button>
                        </div>
                    </div>
            
                </div> --}}
            </div>

            
        </div>
    </section>

    <div class="bg-[var(--color-primary)] px-6 py-6 md:px-12">
        <div class="container mx-auto">
            <h2 class="text-center font-['Playfair_Display'] text-3xl italic text-white md:text-4xl">A Feel Of Our
                Craftsmanship</h2>
        </div>
    </div>

    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img class="h-full w-full object-fill" src="{{ asset('media/DSC08400-2_022134.jpg') }}"
                    alt="avia samara">
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
                <img class="h-full w-full object-fill" src="{{ asset('media/DSC08492-samaEdit_102749.jpg') }}"
                    alt="avia samara">
            </div>
            <div class="swiper-slide">
                <img class="h-full w-full object-fill" src="{{ asset('media/DSC08584_111214.jpg') }}" alt="avia samara">
            </div>
            <div class="swiper-slide">
                <img class="h-full w-full object-fill"
                    src="{{ asset('media/e56224f3-7daf-4337-85aa-3d7cbb3125d0.jpg') }}" alt="avia samara">
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
                <img class="h-full w-full object-fill" src="{{ asset('media/DSC08238-y-(4)-Edit.jpg') }}"
                    alt="avia samara">
            </div>
            <div class="swiper-slide">
                <img class="h-full w-full object-fill" src="{{ asset('media/IMG_6635.jpg') }}" alt="avia samara">
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
