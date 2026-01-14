<div class="shadom-sm mx-auto max-w-7xl rounded-sm bg-white px-4 py-10 shadow sm:px-6 lg:px-8">

    <div class="mb-8 flex items-end justify-between">
        <div>
            <h2 class="text-2xl font-bold text-gray-900">Edit Product</h2>
            <p class="mt-1 text-sm text-gray-500">Update inventory details for <span class="font-bold">{{ $name }}</span>.</p>
        </div>
        <div>
            <a href="{{ route('admin.products') }}" wire:navigate class="text-sm text-[var(--color-primary)] hover:underline">Cancel & Return</a>
        </div>
    </div>

    @if (session()->has('message'))
        <div class="mb-4 rounded-md border border-green-200 bg-green-50 p-4">
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg class="h-5 w-5 text-green-400" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="ml-3">
                    <p class="text-sm font-medium text-green-800">{{ session('message') }}</p>
                </div>
            </div>
        </div>
    @endif

    <form wire:submit.prevent="update" class="space-y-8 divide-y divide-gray-200">

        {{-- Section 1: Basic Information --}}
        <div class="space-y-6 sm:space-y-5">
            <div>
                <h3 class="text-lg font-medium leading-6 text-gray-900">Basic Information</h3>
                <p class="mt-1 max-w-2xl text-sm text-gray-500">Core details regarding the product.</p>
            </div>

            <div class="space-y-6 sm:space-y-5">

                {{-- Name --}}
                <div class="grid grid-cols-1 gap-x-4 gap-y-6 sm:grid-cols-6">
                    <div class="sm:col-span-6">
                        <label for="name" class="block text-sm font-medium text-gray-700">Product Name</label>
                        <div class="mt-1">
                            <input type="text" wire:model="name" id="name" class="block w-full rounded-md border-gray-300 px-2 py-2 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                        </div>
                        @error('name') <span class="text-xs text-red-500">{{ $message }}</span> @enderror
                    </div>
                </div>

                {{-- Price & Brand --}}
                <div class="grid grid-cols-1 gap-x-4 gap-y-6 sm:grid-cols-6">
                    <div class="sm:col-span-3">
                        <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
                        <div class="relative mt-1 rounded-md shadow-sm">
                            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                <span class="text-gray-500 sm:text-sm">₦</span>
                            </div>
                            <input type="number" step="0.01" wire:model="price" id="price" class="block w-full rounded-md border-gray-300 py-2 pl-7 pr-2 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                        </div>
                        @error('price') <span class="text-xs text-red-500">{{ $message }}</span> @enderror
                    </div>

                    <div class="sm:col-span-3">
                        <label for="brand" class="block text-sm font-medium text-gray-700">Brand</label>
                        <div class="mt-1">
                            <input type="text" wire:model="brand" id="brand" class="block w-full rounded-md border-gray-300 px-2 py-2 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                        </div>
                    </div>
                </div>

                {{-- Category --}}
                <div class="sm:col-span-6">
                    <label for="category" class="block text-sm font-medium text-gray-700">Category</label>
                    <div class="mt-1">
                        <select wire:model="category" id="category" class="block w-full rounded-md border-gray-300 py-3 uppercase shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            <option class="capitalize" value="">Select a category</option>
                            <option class="capitalize" value="ready to wear">ready to wear</option>
                            <option class="capitalize" value="accessories">accessories</option>
                            <option value="shoes">shoes</option>
                            <option class="capitalize" value="street and urban wear">street and urban wear</option>
                            <option class="capitalize" value="custom made">custom made</option>
                            <option class="capitalize" value="made to measure">made to measure</option>
                            <option class="capitalize" value="alteration">alteration</option>
                        </select>
                    </div>
                    @error('category') <span class="text-xs text-red-500">{{ $message }}</span> @enderror
                </div>
            </div>
        </div>

        {{-- Section 2: Details --}}
        <div class="space-y-6 pt-8 sm:space-y-5 sm:pt-10">
            <div>
                <h3 class="text-lg font-medium leading-6 text-gray-900">Product Details</h3>
                <p class="mt-1 max-w-2xl text-sm text-gray-500">Detailed specifications for the customer.</p>
            </div>

            <div class="space-y-6 sm:space-y-5">
                <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4">
                    <label for="description" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Description</label>
                    <div class="mt-1 sm:col-span-2 sm:mt-0">
                        <textarea id="description" wire:model="description" rows="8" class="block w-full max-w-lg rounded-md border border-gray-300 px-2 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"></textarea>
                    </div>
                </div>

                <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4">
                    <label for="material" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Material</label>
                    <div class="mt-1 sm:col-span-2 sm:mt-0">
                        <input type="text" wire:model="material" id="material" class="block w-full max-w-lg rounded-md border-gray-300 px-2 py-2 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                    </div>
                </div>

                <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4">
                    <label for="fit" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Fit</label>
                    <div class="mt-1 sm:col-span-2 sm:mt-0">
                        <input type="text" wire:model="fit" id="fit" placeholder="e.g. Slim, Regular, Oversized" class="block w-full max-w-lg rounded-md border-gray-300 px-2 py-2 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                    </div>
                </div>

                <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4">
                    <label for="care" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Care Instructions</label>
                    <div class="mt-1 sm:col-span-2 sm:mt-0">
                        <textarea id="care" wire:model="care" rows="4" class="block w-full max-w-lg rounded-md border border-gray-300 px-2 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"></textarea>
                    </div>
                </div>
            </div>
        </div>

        {{-- Section 3: Metadata (Images & Variants) --}}
        <div class="space-y-6 pt-8 sm:space-y-5 sm:pt-10">
            <div>
                <h3 class="text-lg font-medium leading-6 text-gray-900">Media & Variants</h3>
                <p class="mt-1 max-w-2xl text-sm text-gray-500">
                    Current images are shown below.
                    <span class="font-medium text-red-600">Uploading new images will completely replace the current ones.</span>
                </p>
            </div>

            <div class="space-y-6 sm:space-y-5">

                {{-- Images Upload --}}
                <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4">
                    <label class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                        Product Images
                    </label>
                    <div class="mt-1 sm:col-span-2 sm:mt-0">
                        <div class="flex w-full items-center justify-center">
                            {{-- Changed model to newImages --}}
                            <label for="newImages" class="flex h-32 w-full cursor-pointer flex-col items-center justify-center rounded-lg border-2 border-dashed border-gray-300 bg-gray-50 transition hover:bg-gray-100">
                                <div class="flex flex-col items-center justify-center pb-6 pt-5">
                                    <svg class="mb-4 h-8 w-8 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                                    </svg>
                                    <p class="mb-2 text-sm text-gray-500"><span class="font-semibold">Click to upload new images</span></p>
                                    <p class="text-xs text-gray-500">SVG, PNG, JPG (MAX. 2MB)</p>
                                </div>
                                <input accept="image/jpg,image/jpeg,image/png" max="2048" id="newImages" wire:model="newImages" type="file" class="hidden" multiple />
                            </label>
                        </div>

                        {{-- Image Logic: Show New Uploads OR Show Existing Database Images --}}
                        <div class="mt-4 grid grid-cols-4 gap-4">

                            {{-- Case 1: User has selected NEW files --}}
                            @if ($newImages)
                                @foreach ($newImages as $image)
                                    <div class="group relative">
                                        <div class="absolute inset-0 hidden items-center justify-center rounded-md bg-black/40 group-hover:flex">
                                            <span class="text-xs font-bold text-white">NEW</span>
                                        </div>
                                        <img  src="{{ $image->temporaryUrl() }}" class="h-20 w-20 rounded-md border object-cover">
                                    </div>
                                @endforeach

                            {{-- Case 2: No new files, Show Existing from DB --}}
                            @elseif ($existingImages)
                                @foreach ($existingImages as $image)
                                    <div class="group relative">
                                        <div class="absolute inset-0 rounded-md bg-black/0 transition group-hover:bg-black/10"></div>
                                        {{-- Assuming images are stored in public storage --}}
                                        <img src="{{ asset('storage/' . $image) }}" class="h-20 w-20 rounded-md border object-cover">
                                    </div>
                                @endforeach
                            @endif

                        </div>

                        @error('newImages.*') <span class="text-xs text-red-500">{{ $message }}</span> @enderror
                        {{-- UPDATED ERROR HANDLING --}}
                        {{-- <div class="mt-2">
                            @error('newImages')
                                <span class="block text-xs text-red-500">{{ $message }}</span>
                            @enderror

                            @foreach($newImages as $key => $image)
                                @error("newImages.{$key}")
                                    <span class="block text-xs text-red-500">{{ $message }}</span>
                                @enderror
                            @endforeach
                        </div> --}}
                    </div>
                </div>

                {{-- Variants --}}
                <div class="grid grid-cols-1 gap-x-4 gap-y-6 sm:grid-cols-6">
                    <div class="sm:col-span-3">
                        <label for="colors" class="block text-sm font-medium text-gray-700">Colors</label>
                        <input type="text" wire:model="colors" id="colors" placeholder="Red, Blue, Green (comma separated)" class="mt-1 block w-full rounded-md border-gray-300 px-2 py-2 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                    </div>

                    <div class="sm:col-span-3">
                        <label for="sizes" class="block text-sm font-medium text-gray-700">Sizes</label>
                        <input type="text" wire:model="sizes" id="sizes" placeholder="S, M, L, XL (comma separated)" class="mt-1 block w-full rounded-md border-gray-300 px-2 py-2 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                    </div>
                </div>
            </div>
        </div>

        {{-- Footer Buttons --}}
        <div class="pt-5">
            <div class="flex justify-end">
                <a href="{{ route('admin.products') }}" wire:navigate class="cursor-pointer rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                    Cancel
                </a>
                <button type="submit" class="ml-3 inline-flex justify-center rounded-md border border-transparent bg-[var(--color-primary)] px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-[var(--color-primary-hover)] focus:outline-none focus:ring-2 focus:ring-[var(--color-primary)] focus:ring-offset-2">
                    <span wire:loading.remove wire:target="update">Update Product</span>
                    <span wire:loading wire:target="update">Updating...</span>
                </button>
            </div>
        </div>
    </form>
</div>
