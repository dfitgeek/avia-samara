<div>
    <section class="relative px-4 md:px-8 py-16"> {{-- Added relative for absolute loading positioning --}}
        <div class="mx-auto container">

            {{-- Header & Filter --}}
            <div class="flex justify-between items-end mb-10 pb-4 border-gray-100 border-b">
                <div>
                    <h2 class="font-['Playfair_Display'] text-4xl">
                        {{ $category === 'all' ? 'All Products' : ucfirst($category) }}
                    </h2>
                </div>

                {{-- Filter Dropdown --}}
                <select wire:model.live="category" @if($locked) disabled @endif
                    class="bg-transparent disabled:opacity-50 pb-1 border-black hover:border-[var(--color-primary)] border-b outline-none font-bold hover:text-[var(--color-primary-hover)] text-xs uppercase transition-colors cursor-pointer disabled:cursor-not-allowed">
                    <option value="all">All Category</option>
                    <option value="ready to  wear">Ready to wear</option>
                    <option value="accessories">Accessories</option>
                    <option value="shoes">Shoes</option>
                    <option value="street and urban wear">Street and Urban Wear</option>
                    <option value="custom design">Custom Design</option>
                    <option value="made to measure">Made to Measure</option>
                    <option value="alteration">Alteration</option>
                </select>
            </div>

            {{-- LOADING INDICATOR --}}
            <div wire:loading wire:target="category"
                class="z-10 absolute inset-0 flex justify-center items-start bg-white/50 backdrop-blur-[1px] pt-40">
                <div class="flex items-center gap-3 bg-black shadow-xl px-6 py-3 rounded-full text-white">
                    <svg class="w-5 h-5 text-white animate-spin" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4">
                        </circle>
                        <path class="opacity-75" fill="currentColor"
                            d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                        </path>
                    </svg>
                    <span class="font-bold text-xs uppercase tracking-widest">Loading...</span>
                </div>
            </div>

            {{-- Grid --}}
            {{-- Added wire:loading.class to dim the grid while fetching --}}
            <div x-data="shopComponent(@js($products))" wire:loading.class="opacity-50 pointer-events-none"
                wire:target="category">
                <div class="gap-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4">
                    <template x-for="product in products" :key="product.id">
                        <div
                            class="group flex flex-col bg-white shadow-sm hover:shadow-lg p-2 transition-shadow duration-300">

                            {{-- Image Area --}}
                            <div class="relative bg-gray-100 aspect-[3/4] overflow-hidden cursor-pointer">
                                <img :src="product.images[0]"
                                    class="w-full h-full object-cover group-hover:scale-105 transition duration-700"
                                    @click="openImageModal(product, 0)">

                                <button @click="openInfoModal(product)"
                                    class="top-3 right-3 z-10 absolute bg-white/90 hover:bg-black shadow-sm backdrop-blur p-2 rounded-full text-black hover:text-white transition">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </button>
                            </div>

                            {{-- Thumbnails --}}
                            <div class="gap-2 grid grid-cols-4 mt-2" x-show="product.images.length > 1">
                                <template x-for="(img, index) in product.images" :key="index">
                                    <div x-show="index < 4" @click="openImageModal(product, index)"
                                        class="border border-transparent hover:border-black aspect-square overflow-hidden transition cursor-pointer">
                                        <img :src="img" class="w-full h-full object-cover">
                                    </div>
                                </template>
                            </div>

                            {{-- Info Area --}}
                            <div class="flex justify-between items-start mt-3">
                                <div>
                                    <h3 x-text="product.name"
                                        class="font-medium text-gray-900 text-sm uppercase tracking-wide"></h3>
                                    <p class="mt-1 text-gray-500 text-xs" x-text="product.category"></p>
                                </div>
                                <div class="text-right">
                                    <span x-text="'₦' + product.price" class="font-bold text-gray-900 text-sm"></span>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>

                {{-- PRODUCT MODAL --}}
                <div x-show="modals.info.open" x-transition style="display: none;"
                    class="z-50 fixed inset-0 flex justify-center items-center bg-black/50 backdrop-blur-sm p-4"
                    x-cloak>

                    <div class="relative bg-white shadow-2xl p-6 w-full max-w-lg max-h-[90vh] overflow-y-auto transition-all transform"
                        @click.outside="modals.info.open = false">

                        <button @click="modals.info.open = false"
                            class="top-4 right-4 absolute text-gray-400 hover:text-black">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>

                        <h3 x-text="modals.info.data?.name" class="mb-2 font-bold text-xl uppercase tracking-wide"></h3>
                        <p x-text="'₦' + modals.info.data?.price" class="mb-4 font-medium text-gray-700 text-lg"></p>

                        <hr class="my-4 border-gray-200">

                        <div class="space-y-2 mb-6 text-gray-600 text-sm">
                            <p x-show="modals.info.data?.details.description" class="mb-4 italic"
                                x-text="modals.info.data?.details.description"></p>
                            <p x-show="modals.info.data?.details.material">
                                <strong class="text-black text-xs uppercase tracking-wider">Material:</strong>
                                <span x-text="modals.info.data?.details.material"></span>
                            </p>
                            <p x-show="modals.info.data?.details.fit">
                                <strong class="text-black text-xs uppercase tracking-wider">Fit:</strong>
                                <span x-text="modals.info.data?.details.fit"></span>
                            </p>
                            <p x-show="modals.info.data?.details.care">
                                <strong class="text-black text-xs uppercase tracking-wider">Care:</strong>
                                <span x-text="modals.info.data?.details.care"></span>
                            </p>
                        </div>

                        <hr class="my-4 border-gray-200">

                        <div class="space-y-4">
                            <div>
                                <label class="block font-medium text-gray-700 text-sm">Size</label>
                                <select required x-model="selectedSize"
                                    class="block mt-1 py-2 pr-10 pl-3 border-gray-300 focus:border-indigo-500 rounded-md focus:outline-none focus:ring-indigo-500 w-full sm:text-sm text-base">
                                    <option value="">Select Size</option>
                                    <option value="S">S</option>
                                    <option value="M">M</option>
                                    <option value="L">L</option>
                                    <option value="XL">XL</option>
                                </select>
                            </div>
                            <div>
                                <label class="block font-medium text-gray-700 text-sm">Quantity</label>
                                <div class="flex items-center mt-1 border border-gray-300 rounded w-32">
                                    <button @click="selectedQty > 1 ? selectedQty-- : null"
                                        class="bg-gray-100 hover:bg-gray-200 px-3 py-1">-</button>
                                    <input type="number" x-model="selectedQty"
                                        class="p-1 border-none focus:ring-0 w-full text-center" min="1">
                                    <button @click="selectedQty++"
                                        class="bg-gray-100 hover:bg-gray-200 px-3 py-1">+</button>
                                </div>
                            </div>
                        </div>

                        <div class="mt-6">
                            <button
                                @click="$wire.addToCart(modals.info.data.id, selectedSize, selectedQty); modals.info.open = false"
                                class="bg-black hover:bg-gray-800 py-3 w-full text-white text-xs uppercase tracking-widest transition">
                                Add To Cart
                            </button>
                        </div>
                    </div>
                </div>

                {{-- Image Modal --}}
                <div x-show="modals.image.open" x-transition.opacity style="display: none;"
                    class="z-50 fixed inset-0 flex justify-center items-center bg-black/90 backdrop-blur-sm p-4"
                    x-cloak>
                    <button @click="modals.image.open = false"
                        class="top-5 right-5 absolute text-white hover:text-gray-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                    <div class="relative flex flex-col items-center w-full max-w-4xl max-h-full"
                        @click.outside="modals.image.open = false">
                        <img :src="modals.image.src" class="shadow-2xl rounded-sm w-auto max-h-[85vh] object-contain">
                        <p x-text="modals.image.caption" class="mt-4 text-white text-sm uppercase tracking-widest"></p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <script>
        function shopComponent(initialProducts) {
            return {
                products: initialProducts,
                selectedSize: '',
                selectedQty: 1,
                modals: {
                    image: { open: false, src: '', caption: '' },
                    info: { open: false, data: null }
                },
                openImageModal(product, index) {
                    this.modals.image.src = product.images[index];
                    this.modals.image.caption = `${product.name} - View ${index + 1}`;
                    this.modals.image.open = true;
                },
                openInfoModal(product) {
                    this.selectedSize = '';
                    this.selectedQty = 1;
                    this.modals.info.data = product;
                    this.modals.info.open = true;
                },
            }
        }
    </script>
</div>