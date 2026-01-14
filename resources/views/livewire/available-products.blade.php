<div>
    <section class="px-4 md:px-8">
        <div class="mx-auto container">

            {{-- Flash Message --}}
            {{-- @if (session()->has('message'))
                <div class="bg-green-100 mb-4 p-4 border-green-500 border-l-4 rounded text-green-700">
                    {{ session('message') }}
                </div>
            @endif --}}

            {{-- Header & Filter Section --}}
            <div class="flex justify-between items-end mb-10 pb-4 border-gray-100 border-b">
                <div>
                    <h2 class="font-['Playfair_Display'] text-4xl">All Products</h2>
                    <p class="mt-2 font-['Playfair_Display'] text-gray-500 text-sm italic">
                        "{{ $category === 'all' ? 'All Categories' : ucfirst($category) }}"
                    </p>
                </div>

                <select wire:model.live="category"
                    class="bg-transparent pb-1 border-black hover:border-[var(--color-primary)] border-b outline-none font-bold hover:text-[var(--color-primary-hover)] text-xs uppercase transition-colors cursor-pointer">
                    <option value="all">All Category</option>
                    <option value="ready to wear">Ready to wear</option>
                    <option value="accessories">Accessories</option>
                    <option value="shoes">Shoes</option>
                    <option value="street and urban wear">Street and Urban Wear</option>
                    <option value="custom design">Custom Design</option>
                    <option value="made to measure">Made to Measure</option>
                    <option value="alteration">Alteration</option>
                </select>
            </div>

            {{-- Product Grid Area --}}
            <div>
                @if(count($products) < 1)
                    <div class="py-20 text-center">
                        <p class="font-['Playfair_Display'] text-gray-500 text-lg capitalize">
                            No items found in this category :(
                        </p>
                    </div>
                @else
                    <div x-data="shopComponent(@js($products))" class="mx-auto max-w-7xl">

                        <div class="gap-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4">
                            <template x-for="product in products" :key="product.id">
                                <div class="group flex flex-col bg-white shadow-sm hover:shadow-lg p-2 transition-shadow duration-300">

                                    {{-- Main Image Card --}}
                                    <div class="relative bg-gray-100 aspect-[3/4] overflow-hidden cursor-pointer">
                                        <img :src="product.images[0]"
                                            class="w-full h-full object-cover group-hover:scale-105 transition duration-700"
                                            @click="openImageModal(product, 0)">

                                        <button @click="openInfoModal(product)"
                                            class="top-3 right-3 z-10 absolute bg-white/90 hover:bg-black shadow-sm backdrop-blur p-2 rounded-full text-black hover:text-white transition"
                                            title="Shopping Info">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                        </button>

                                        {{-- GRID ACTIONS --}}
                                        <div class="bottom-0 z-20 absolute inset-x-0 flex transition-transform translate-y-full group-hover:translate-y-0 duration-300">
                                            
                                            {{-- 1. Edit Button (Link) --}}
                                            <a :href="product.edit_url"
                                                class="flex justify-center items-center gap-2 bg-[var(--color-primary)] hover:bg-[var(--color-primary-hover)] py-3 rounded-l w-1/2 text-white text-xs uppercase tracking-widest cursor-pointer">
                                                Edit
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M15.232 5.232l3.536 3.536M9 13l6.293-6.293a1 1 0 011.414 0l1.586 1.586a1 1 0 010 1.414L11 17H7v-4l8.293-8.293z" />
                                                </svg>
                                            </a>

                                            {{-- 2. Delete Button (Action) --}}
                                            <button type="button"
                                                @click="confirm('Are you sure you want to delete ' + product.name + '?') ? $wire.delete(product.id) : false"
                                                class="flex justify-center items-center gap-2 bg-red-600 hover:bg-red-800 py-3 rounded-r w-1/2 text-white text-xs uppercase tracking-widest">
                                                Delete
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M6 18L18 6M6 6l12 12" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>

                                    {{-- Image Thumbnails --}}
                                    <div class="gap-2 grid grid-cols-4 mt-2">
                                        <template x-for="(img, index) in product.images">
                                            <div @click="openImageModal(product, index)"
                                                class="border border-transparent hover:border-black aspect-square overflow-hidden transition cursor-pointer">
                                                <img :src="img" class="w-full h-full object-cover">
                                            </div>
                                        </template>
                                    </div>

                                    {{-- Product Text Info --}}
                                    <div class="flex justify-between items-start mt-3">
                                        <div>
                                            <h3 x-text="product.name"
                                                class="font-medium text-gray-900 text-sm uppercase tracking-wide"></h3>
                                            <p class="mt-1 text-gray-500 text-xs" x-text="product.details.fit"></p>
                                        </div>
                                        <div class="text-right">
                                            <span x-text="product.price" class="font-bold text-gray-900 text-sm"></span>
                                        </div>
                                    </div>
                                </div>
                            </template>
                        </div>

                        {{-- Load More --}}
                        <div class="flex justify-center mt-12">
                            <button class="pb-1 border-gray-300 hover:border-black border-b hover:text-gray-600 text-xs uppercase tracking-widest transition-colors">
                                Load More
                            </button>
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
                                <img :src="modals.image.src"
                                    class="shadow-2xl rounded-sm w-auto max-h-[85vh] object-contain">
                                <p x-text="modals.image.caption" class="mt-4 text-white text-sm uppercase tracking-widest">
                                </p>
                            </div>
                        </div>

                        {{-- Info Modal --}}
                        <div x-show="modals.info.open" x-transition style="display: none;"
                            class="z-50 fixed inset-0 flex justify-center items-center bg-black/50 backdrop-blur-sm p-4"
                            x-cloak>
                            <div class="relative bg-white shadow-2xl p-6 w-full max-w-md transition-all transform"
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
                                <p x-text="modals.info.data?.price" class="mb-4 font-medium text-gray-700 text-lg"></p>
                                <hr class="my-4 border-gray-200">
                                <div class="space-y-3 text-gray-600 text-sm">
                                    <p><strong>Material:</strong> <span x-text="modals.info.data?.details.material"></span></p>
                                    <p><strong>Fit:</strong> <span x-text="modals.info.data?.details.fit"></span></p>
                                    <p><strong>Care:</strong> <span x-text="modals.info.data?.details.care"></span></p>
                                    <p x-show="modals.info.data?.details.description" class="mt-4 text-xs italic"
                                        x-text="modals.info.data?.details.description"></p>
                                </div>

                                {{-- MODAL ACTIONS --}}
                                <div class="bottom-0 z-20 absolute inset-x-0 flex transition-transform translate-y-full group-hover:translate-y-0 duration-300">
                                    {{-- Modal Edit --}}
                                    <a :href="modals.info.data?.edit_url"
                                        class="flex justify-center items-center gap-2 bg-[var(--color-primary)] hover:bg-[var(--color-primary-hover)] py-3 rounded-l w-1/2 text-white text-xs uppercase tracking-widest cursor-pointer">
                                        Edit
                                    </a>
                                    {{-- Modal Delete --}}
                                    <button type="button"
                                        @click="confirm('Are you sure you want to delete this item?') ? $wire.delete(modals.info.data.id) : false"
                                        class="flex justify-center items-center gap-2 bg-red-600 hover:bg-red-800 py-3 rounded-r w-1/2 text-white text-xs uppercase tracking-widest">
                                        Delete
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>
                @endif
            </div>
        </div>
    </section>

    <script>
        function shopComponent(initialProducts) {
            return {
                products: initialProducts,
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
                    this.modals.info.data = product;
                    this.modals.info.open = true;
                },
            }
        }
    </script>
</div>