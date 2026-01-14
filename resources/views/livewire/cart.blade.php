<div class="static" @mouseenter="activeDropdown = 'cart'" @mouseleave="activeDropdown = null">

    <button class="relative flex items-center gap-2 bg-black hover:bg-[#E85D36] px-5 py-2 text-white transition-colors">
        Cart
        <span
            class="flex justify-center items-center bg-white rounded-full w-4 h-4 font-bold text-[10px] text-black">3</span>
        <span class="text-white mdi mdi-cart"></span>
    </button>

    <div x-cloak x-show="activeDropdown === 'cart'" x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 translate-y-2"
        class="top-full left-0 absolute bg-[#f9f5f0] shadow-xl border-gray-100 border-t w-full text-left cursor-default">

        <div class="mx-auto px-12 py-10 container">
            <div class="gap-12 grid grid-cols-12">

                <div class="col-span-8 bg-white shadow-sm p-8 border border-gray-100">
                    <h3 class="mb-6 pb-2 border-gray-100 border-b font-serif text-gray-900 text-xl normal-case">
                        Your Selection (3 Items)</h3>

                    <div class="flex flex-col space-y-6">
                        <div class="flex items-center gap-6">
                            <img src="https://images.unsplash.com/photo-1543163521-1bf539c55dd2?q=80&w=200&auto=format&fit=crop"
                                class="border border-gray-100 w-20 h-20 object-cover" alt="Heels">
                            <div class="flex-1">
                                <h4 class="font-medium text-gray-900 text-lg normal-case">Velvet Heels
                                </h4>
                                <p class="text-gray-500 text-xs uppercase tracking-wide">Black / Size
                                    38
                                </p>
                            </div>
                            <div class="text-right">
                                <p class="font-medium text-gray-900 text-lg">$240.00</p>
                                <button
                                    class="text-gray-400 hover:text-red-500 text-xs underline transition-colors">Remove</button>
                            </div>
                        </div>

                        <div class="flex items-center gap-6 pt-6 border-gray-50 border-t">
                            <img src="https://images.unsplash.com/photo-1584917865442-de89df76afd3?q=80&w=200&auto=format&fit=crop"
                                class="border border-gray-100 w-20 h-20 object-cover" alt="Tote">
                            <div class="flex-1">
                                <h4 class="font-medium text-gray-900 text-lg normal-case">Leather Tote
                                </h4>
                                <p class="text-gray-500 text-xs uppercase tracking-wide">Brown / One
                                    Size
                                </p>
                            </div>
                            <div class="text-right">
                                <p class="font-medium text-gray-900 text-lg">$180.00</p>
                                <button
                                    class="text-gray-400 hover:text-red-500 text-xs underline transition-colors">Remove</button>
                            </div>
                        </div>

                        <div class="flex items-center gap-6 pt-6 border-gray-50 border-t">
                            <img src="https://images.unsplash.com/photo-1599643478518-17488fbbcd75?q=80&w=200&auto=format&fit=crop"
                                class="border border-gray-100 w-20 h-20 object-cover" alt="Pendant">
                            <div class="flex-1">
                                <h4 class="font-medium text-gray-900 text-lg normal-case">Gold Pendant
                                </h4>
                                <p class="text-gray-500 text-xs uppercase tracking-wide">18k Gold</p>
                            </div>
                            <div class="text-right">
                                <p class="font-medium text-gray-900 text-lg">$850.00</p>
                                <button
                                    class="text-gray-400 hover:text-red-500 text-xs underline transition-colors">Remove</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-span-4">
                    <div class="flex flex-col justify-between bg-gray-900 shadow-md p-8 h-full text-white">
                        <div>
                            <h3 class="mb-6 font-serif text-xl normal-case">Order Summary</h3>
                            <div class="flex justify-between items-center mb-4 text-gray-400 text-sm normal-case">
                                <span>Subtotal</span>
                                <span>$1,270.00</span>
                            </div>
                            <div class="flex justify-between items-center mb-4 text-gray-400 text-sm normal-case">
                                <span>Tax (Est.)</span>
                                <span>$45.00</span>
                            </div>
                            <div class="flex justify-between items-center text-gray-400 text-sm normal-case">
                                <span>Shipping</span>
                                <span>Free</span>
                            </div>
                            <hr class="my-6 border-gray-700">
                            <div class="flex justify-between items-center font-serif text-2xl">
                                <span>Total</span>
                                <span>$1,315.00</span>
                            </div>
                        </div>

                        <a href="#"
                            class="group block relative bg-[#E85D36] hover:bg-white mt-8 py-4 w-full font-bold text-white hover:text-black text-sm text-center uppercase tracking-widest transition-all">
                            Order Now
                            <span class="mdi-arrow-right ml-2 group-hover:ml-4 transition-all mdi"></span>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>