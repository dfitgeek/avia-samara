<div class="bg-white shadow mx-auto px-4 sm:px-6 lg:px-8 py-10 rounded-sm max-w-7xl shadom-sm">

    <div class="mb-8">
        <h2 class="font-bold text-gray-900 text-2xl">Create New Product</h2>
        <p class="mt-1 text-gray-500 text-sm">Add a new item to your inventory.</p>
    </div>

    @if (session()->has('message'))
        <div class="bg-green-50 mb-4 p-4 border border-green-200 rounded-md">
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg class="w-5 h-5 text-green-400" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="ml-3">
                    <p class="font-medium text-green-800 text-sm">{{ session('message') }}</p>
                </div>
            </div>
        </div>
    @endif

    <form wire:submit.prevent="save" class="space-y-8 divide-y divide-gray-200">

        {{-- Section 1: Basic Information --}}
        <div class="space-y-6 sm:space-y-5">
            <div>
                <h3 class="font-medium text-gray-900 text-lg leading-6">Basic Information</h3>
                <p class="mt-1 max-w-2xl text-gray-500 text-sm">Core details regarding the product.</p>
            </div>

            <div class="space-y-6 sm:space-y-5">

                {{-- Name & Brand --}}
                <div class="gap-x-4 gap-y-6 grid grid-cols-1 sm:grid-cols-6">
                    <div class="sm:col-span-6">
                        <label for="name" class="block font-medium text-gray-700 text-sm">Product Name</label>
                        <div class="mt-1">
                            <input type="text" wire:model="name" id="name" class="block shadow-sm px-2 py-2 border-gray-300 focus:border-indigo-500 rounded-md focus:ring-indigo-500 w-full sm:text-sm">
                        </div>
                        @error('name') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    </div>

                    
                </div>

                {{-- Price, SKU, Quantity --}}
                <div class="gap-x-4 gap-y-6 grid grid-cols-1 sm:grid-cols-6">
                    <div class="sm:col-span-3">
                        <label for="price" class="block font-medium text-gray-700 text-sm">Price</label>
                        <div class="relative shadow-sm mt-1 rounded-md">
                            <div class="left-0 absolute inset-y-0 flex items-center pl-3 pointer-events-none">
                                <span class="text-gray-500 sm:text-sm">₦</span>
                            </div>
                            <input type="number" step="0.01" wire:model="price" id="price" class="block py-2 pr-2 pl-7 border-gray-300 focus:border-indigo-500 rounded-md focus:ring-indigo-500 w-full sm:text-sm">
                        </div>
                        @error('price') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    </div>

                    {{-- <div class="sm:col-span-2">
                        <label for="sku" class="block font-medium text-gray-700 text-sm">SKU</label>
                        <div class="mt-1">
                            <input type="text" wire:model="sku" id="sku" class="block shadow-sm px-2 py-2 border-gray-300 focus:border-indigo-500 rounded-md focus:ring-indigo-500 w-full sm:text-sm uppercase">
                        </div>
                        @error('sku') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    </div> --}}

                    {{-- <div class="sm:col-span-2">
                        <label for="stock_quantity" class="block font-medium text-gray-700 text-sm">Stock Qty</label>
                        <div class="mt-1">
                            <input type="number" wire:model="stock_quantity" id="stock_quantity" class="block shadow-sm px-2 py-2 border-gray-300 focus:border-indigo-500 rounded-md focus:ring-indigo-500 w-full sm:text-sm">
                        </div>
                    </div> --}}

                    <div class="sm:col-span-3">
                        <label for="brand" class="block font-medium text-gray-700 text-sm">Brand</label>
                        <div class="mt-1">
                            <input type="text" wire:model="brand" id="brand" class="block shadow-sm px-2 py-2 border-gray-300 focus:border-indigo-500 rounded-md focus:ring-indigo-500 w-full sm:text-sm">
                        </div>
                    </div>
                </div>

                {{-- Category --}}
                <div class="sm:col-span-6">
                    <label for="category" class="block font-medium text-gray-700 text-sm">Category</label>
                    <div class="mt-1">
                        <select wire:model="category" id="category" class="block shadow-sm py-3 border-gray-300 focus:border-indigo-500 rounded-md focus:ring-indigo-500 w-full sm:text-sm uppercase">
                            <option class="capitalize" value="" selected>Select a category</option>
                            <option class="capitalize" value="ready to wear">ready to wear</option>
                            <optionclass="capitalize"  class="capitalize" value="accessories">accessories</option>
                            <option value="shoes">shoes</option>
                            <option class="capitalize" value="street and urban wear">street and urban wear</option>
                            
                            <option class="capitalize" value="custom made">custom made</option>
                            <option class="capitalize" value="made to measure">made to measure</option>
                            <option class="capitalize" value="alteration">alteration</option>
                        </select>
                    </div>
                    @error('category') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                </div>
            </div>
        </div>

        {{-- Section 2: Details --}}
        <div class="space-y-6 sm:space-y-5 pt-8 sm:pt-10">
            <div>
                <h3 class="font-medium text-gray-900 text-lg leading-6">Product Details</h3>
                <p class="mt-1 max-w-2xl text-gray-500 text-sm">Detailed specifications for the customer.</p>
            </div>

            <div class="space-y-6 sm:space-y-5">
                <div class="sm:items-start sm:gap-4 sm:grid sm:grid-cols-3">
                    <label for="description" class="block sm:mt-px sm:pt-2 font-medium text-gray-700 text-sm">Description</label>
                    <div class="sm:col-span-2 mt-1 sm:mt-0">
                        <textarea id="description" wire:model="description" rows="8" class="block shadow-sm px-2 border border-gray-300 focus:border-indigo-500 rounded-md focus:ring-indigo-500 w-full max-w-lg sm:text-sm"></textarea>
                    </div>
                </div>

                <div class="sm:items-start sm:gap-4 sm:grid sm:grid-cols-3">
                    <label for="material" class="block sm:mt-px sm:pt-2 font-medium text-gray-700 text-sm">Material</label>
                    <div class="sm:col-span-2 mt-1 sm:mt-0">
                        <input type="text" wire:model="material" id="material" class="block shadow-sm px-2 py-2 border-gray-300 focus:border-indigo-500 rounded-md focus:ring-indigo-500 w-full max-w-lg sm:text-sm">
                    </div>
                </div>

                <div class="sm:items-start sm:gap-4 sm:grid sm:grid-cols-3">
                    <label for="fit" class="block sm:mt-px sm:pt-2 font-medium text-gray-700 text-sm">Fit</label>
                    <div class="sm:col-span-2 mt-1 sm:mt-0">
                        <input type="text" wire:model="fit" id="fit" placeholder="e.g. Slim, Regular, Oversized" class="block shadow-sm px-2 py-2 border-gray-300 focus:border-indigo-500 rounded-md focus:ring-indigo-500 w-full max-w-lg sm:text-sm">
                    </div>
                </div>

                <div class="sm:items-start sm:gap-4 sm:grid sm:grid-cols-3">
                    <label for="care" class="block sm:mt-px sm:pt-2 font-medium text-gray-700 text-sm">Care Instructions</label>
                    <div class="sm:col-span-2 mt-1 sm:mt-0">
                        <textarea id="care" wire:model="care" rows="4" class="block shadow-sm px-2 border border-gray-300 focus:border-indigo-500 rounded-md focus:ring-indigo-500 w-full max-w-lg sm:text-sm"></textarea>
                    </div>
                </div>
            </div>
        </div>

        {{-- Section 3: Metadata (Images & Variants) --}}
        <div class="space-y-6 sm:space-y-5 pt-8 sm:pt-10">
            <div>
                <h3 class="font-medium text-gray-900 text-lg leading-6">Media & Variants</h3>
                <p class="mt-1 max-w-2xl text-gray-500 text-sm">Upload images</p>
            </div>

            <div class="space-y-6 sm:space-y-5">

                {{-- Images Upload --}}
                <div class="sm:items-start sm:gap-4 sm:grid sm:grid-cols-3">
                    <label class="block sm:mt-px sm:pt-2 font-medium text-gray-700 text-sm">
                        Product Images
                    </label>
                    <div class="sm:col-span-2 mt-1 sm:mt-0">
                        <div class="flex justify-center items-center w-full">
                            <label for="images" class="flex flex-col justify-center items-center bg-gray-50 hover:bg-gray-100 border-2 border-gray-300 border-dashed rounded-lg w-full h-32 cursor-pointer">
                                <div class="flex flex-col justify-center items-center pt-5 pb-6">
                                    <svg class="mb-4 w-8 h-8 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                                    </svg>
                                    <p class="mb-2 text-gray-500 text-sm"><span class="font-semibold">Click to upload</span></p>
                                    <p class="text-gray-500 text-xs">SVG, PNG, JPG (MAX. 2MB)</p>
                                </div>
                                <input accept="image/jpg,image/jpeg,image/png" max="2048" id="images" wire:model="images" type="file" class="hidden" multiple />
                            </label>
                        </div>

                        {{-- Image Preview --}}
                        @if ($images)
                            <div class="gap-4 grid grid-cols-4 mt-4">
                                @foreach ($images as $image)
                                    <div class="relative">
                                        <img src="{{ $image->temporaryUrl() }}" class="border rounded-md w-20 h-20 object-cover">
                                    </div>
                                @endforeach
                            </div>
                        @endif
                        @error('images.*') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    </div>
                </div>

                {{-- Variants --}}
                <div class="gap-x-4 gap-y-6 grid grid-cols-1 sm:grid-cols-6">
                    <div class="sm:col-span-3">
                        <label for="colors" class="block font-medium text-gray-700 text-sm">Colors</label>
                        <input type="text" wire:model="colors" id="colors" placeholder="Red, Blue, Green (comma separated)" class="block shadow-sm mt-1 px-2 py-2 border-gray-300 focus:border-indigo-500 rounded-md focus:ring-indigo-500 w-full sm:text-sm">
                    </div>

                    <div class="sm:col-span-3">
                        <label for="sizes" class="block font-medium text-gray-700 text-sm">Sizes</label>
                        <input type="text" wire:model="sizes" id="sizes" placeholder="S, M, L, XL (comma separated)" class="block shadow-sm mt-1 px-2 py-2 border-gray-300 focus:border-indigo-500 rounded-md focus:ring-indigo-500 w-full sm:text-sm">
                    </div>
                </div>
            </div>
        </div>

        {{-- Footer Buttons --}}
        <div class="pt-5">
            <div class="flex justify-end">
                <a href="{{ route('admin.products') }}" wire:navigate class="bg-white hover:bg-gray-50 shadow-sm px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 font-medium text-gray-700 text-sm">Cancel</a>
                <button type="submit" class="inline-flex justify-center bg-[var(--color-primary)] hover:bg-[var(--color-primary-hover)] shadow-sm ml-3 px-4 py-2 border border-transparent rounded-md focus:outline-none focus:ring-[var(--color-primary)] focus:ring-2 focus:ring-offset-2 font-medium text-white text-sm">
                    <span wire:loading.remove wire:target="save">Save Product</span>
                    <span wire:loading wire:target="save">Processing...</span>
                </button>
            </div>
        </div>
    </form>
</div>
