<div class="static" x-data="{ activeDropdown: null }" @click.away="activeDropdown = null">

    {{-- Trigger Button --}}
    {{-- Added @click for Mobile support --}}
    <button @click="activeDropdown = (activeDropdown === 'cart' ? null : 'cart')"
        class="relative flex items-center gap-2 bg-black hover:bg-[#E85D36] px-5 py-2 text-white transition-colors cursor-pointer">
        Cart
        <span class="flex justify-center items-center bg-white rounded-full w-4 h-4 font-bold text-[10px] text-black">
            {{ count($cartItems) }}
        </span>
        <span class="text-white mdi mdi-cart"></span>
    </button>

    {{-- Dropdown Container --}}
    <div x-cloak
         x-show="activeDropdown === 'cart'"
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 translate-y-2"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 translate-y-2"
         class="top-full left-0 z-50 absolute bg-[#f9f5f0] shadow-xl border-gray-100 border-t w-full max-h-[85vh] lg:overflow-visible overflow-y-auto text-left cursor-default">

        <div class="mx-auto px-4 sm:px-6 lg:px-12 py-10 container">

            {{-- Responsive Grid: Stacked on Mobile (cols-1), Side-by-Side on Desktop (lg:cols-12) --}}
            <div class="gap-6 md:gap-12 grid grid-cols-1 lg:grid-cols-12">

                {{-- LEFT COLUMN: Items List --}}
                <div class="col-span-1 lg:col-span-8 bg-white shadow-sm p-6 md:p-8 border border-gray-100">
                    <h3 class="mb-6 pb-2 border-gray-100 border-b font-serif text-gray-900 text-xl normal-case">
                        Your Selection ({{ count($cartItems) }} Items)
                    </h3>

                    <div class="flex flex-col space-y-6">
                        @forelse($cartItems as $key => $item)
                            <div class="flex items-center gap-4 lg:gap-6" wire:key="cart-item-{{ $key }}">
                                {{-- Image --}}
                                <img src="{{ $item['image'] }}" class="border border-gray-100 w-20 h-20 object-cover" alt="{{ $item['name'] }}">

                                {{-- Details --}}
                                <div class="flex-1">
                                    <h4 class="font-medium text-gray-900 text-base lg:text-lg normal-case">{{ $item['name'] }}</h4>
                                    <p class="text-gray-500 text-xs uppercase tracking-wide">
                                        Qty: {{ $item['quantity'] }}
                                        @if(isset($item['size']) && $item['size'])
                                            / Size: {{ $item['size'] }}
                                        @endif
                                    </p>
                                </div>

                                {{-- Price & Remove --}}
                                <div class="text-right">
                                    <p class="font-medium text-gray-900 text-base lg:text-lg">₦{{ number_format($item['price'] * $item['quantity'], 2) }}</p>
                                    <button wire:click="removeFromCart('{{ $key }}')"
                                        class="text-gray-400 hover:text-red-500 text-xs underline transition-colors">
                                        Remove
                                    </button>
                                </div>
                            </div>
                        @empty
                            <div class="py-4 text-center">
                                <p class="text-gray-500 italic">Your cart is empty.</p>
                            </div>
                        @endforelse
                    </div>
                </div>

                {{-- RIGHT COLUMN: Order Summary --}}
                <div class="col-span-1 lg:col-span-4">
                    <div class="flex flex-col justify-between bg-gray-900 shadow-md p-6 h-full text-white">
                        <div>
                            <h3 class="mb-6 font-serif text-xl normal-case">Order Summary</h3>

                            {{-- Subtotal --}}
                            <div class="flex justify-between items-center mb-4 text-gray-400 text-sm normal-case">
                                <span>Subtotal</span>
                                <span>₦{{ number_format($subtotal, 2) }}</span>
                            </div>

                            {{-- Tax (Static Example) --}}
                            <div class="flex justify-between items-center mb-4 text-gray-400 text-sm normal-case">
                                <span>Tax (Est.)</span>
                                <span>₦0.00</span>
                            </div>

                            {{-- Shipping --}}
                            <div class="flex justify-between items-center text-gray-400 text-sm normal-case">
                                <span>Shipping</span>
                                <span>Free</span>
                            </div>

                            <hr class="my-6 border-gray-700">

                            {{-- Total --}}
                            <div class="flex justify-between items-center font-serif text-2xl">
                                <span>Total</span>
                                <span>₦{{ number_format($subtotal, 2) }}</span>
                            </div>
                        </div>

                        {{-- Checkout Button --}}
                        <a href="#" class="group block relative bg-[#E85D36] hover:bg-white mt-8 py-4 w-full font-bold text-white hover:text-black text-sm text-center uppercase tracking-widest transition-all">
                            Checkout
                            <span class="mdi-arrow-right ml-2 group-hover:ml-4 transition-all mdi"></span>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
