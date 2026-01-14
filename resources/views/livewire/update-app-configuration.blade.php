<div class="mx-auto px-4 sm:px-6 lg:px-8 py-10 max-w-4xl">
    
    @if (session()->has('message'))
        <div class="bg-green-50 mb-6 p-4 border-green-400 border-l-4">
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg class="w-5 h-5 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <div class="ml-3">
                    <p class="text-green-700 text-sm">{{ session('message') }}</p>
                </div>
            </div>
        </div>
    @endif

    <div class="bg-white shadow border border-indigo-100 sm:rounded-lg overflow-hidden">
        <div class="flex justify-between items-center bg-indigo-50 px-4 sm:px-6 py-5 border-indigo-200 border-b">
            <div>
                <h3 class="font-bold text-indigo-900 text-lg leading-6">
                    Update App Configuration
                </h3>
                <p class="mt-1 max-w-2xl text-indigo-600 text-sm">
                    Modify existing system contact details and links.
                </p>
            </div>
            <span class="inline-flex items-center bg-green-100 px-2.5 py-0.5 rounded-full font-medium text-green-800 text-xs">
                Active
            </span>
        </div>

        <form wire:submit.prevent="update" class="space-y-6 p-6">
            
            {{-- Contact Info Section --}}
            <div class="gap-x-4 gap-y-6 grid grid-cols-1 sm:grid-cols-6">
                <div class="sm:col-span-6">
                    <label class="block font-medium text-gray-700 text-sm">Address</label>
                    <textarea wire:model="address" rows="3" class="block shadow-sm mt-1 px-3 py-2 border border-gray-300 focus:border-indigo-500 rounded-md focus:outline-none focus:ring-indigo-500 w-full sm:text-sm"></textarea>
                    @error('address') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                </div>

                {{-- Dynamic Phone Numbers --}}
                <div class="sm:col-span-3">
                    <label class="block mb-1 font-medium text-gray-700 text-sm">Phone Numbers</label>
                    
                    @foreach($phones as $index => $phone)
                        <div class="flex items-center gap-2 mb-2">
                            <div class="relative w-full">
                                <input type="text" wire:model="phones.{{ $index }}" placeholder="Phone {{ $index + 1 }}" 
                                    class="block shadow-sm px-3 py-2 border border-gray-300 focus:border-indigo-500 rounded-md focus:outline-none focus:ring-indigo-500 w-full sm:text-sm">
                            </div>

                            @if($loop->last)
                                {{-- Add Button --}}
                                <button type="button" wire:click="addPhone" class="bg-indigo-50 hover:bg-indigo-100 p-2 border border-indigo-200 rounded-md text-indigo-600" title="Add another number">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                            @else
                                {{-- Remove Button --}}
                                <button type="button" wire:click="removePhone({{ $index }})" class="bg-red-50 hover:bg-red-100 p-2 border border-red-200 rounded-md text-red-600" title="Remove this number">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                            @endif
                        </div>
                        @error('phones.'.$index) <span class="block mb-2 text-red-500 text-xs">{{ $message }}</span> @enderror
                    @endforeach
                </div>

                <div class="sm:col-span-3">
                    <label class="block font-medium text-gray-700 text-sm">WhatsApp Number</label>
                    <input type="text" wire:model="whatsapp" class="block shadow-sm mt-1 px-3 py-2 border border-gray-300 focus:border-indigo-500 rounded-md focus:outline-none focus:ring-indigo-500 w-full sm:text-sm">
                    @error('whatsapp') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                </div>

                <div class="sm:col-span-3">
                    <label class="block font-medium text-gray-700 text-sm">Customer Desk Email</label>
                    <input type="email" wire:model="customer_desk_email" class="block shadow-sm mt-1 px-3 py-2 border border-gray-300 focus:border-indigo-500 rounded-md focus:outline-none focus:ring-indigo-500 w-full sm:text-sm">
                    @error('customer_desk_email') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                </div>

                <div class="sm:col-span-3">
                    <label class="block font-medium text-gray-700 text-sm">App (System) Email</label>
                    <input type="email" wire:model="app_email" class="block shadow-sm mt-1 px-3 py-2 border border-gray-300 focus:border-indigo-500 rounded-md focus:outline-none focus:ring-indigo-500 w-full sm:text-sm">
                    @error('app_email') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                </div>
            </div>

            <div class="pt-6 border-gray-200 border-t">
                <h4 class="mb-4 font-medium text-gray-900 text-sm">Social Media Links</h4>
                <div class="gap-x-4 gap-y-6 grid grid-cols-1 sm:grid-cols-6">
                    <div class="sm:col-span-2">
                        <label class="block font-medium text-gray-700 text-sm">Facebook URL</label>
                        <input type="url" wire:model="facebook" class="block shadow-sm mt-1 px-3 py-2 border border-gray-300 focus:border-indigo-500 rounded-md focus:outline-none focus:ring-indigo-500 w-full sm:text-sm">
                        @error('facebook') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    </div>

                    <div class="sm:col-span-2">
                        <label class="block font-medium text-gray-700 text-sm">Instagram URL</label>
                        <input type="url" wire:model="instagram" class="block shadow-sm mt-1 px-3 py-2 border border-gray-300 focus:border-indigo-500 rounded-md focus:outline-none focus:ring-indigo-500 w-full sm:text-sm">
                        @error('instagram') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    </div>

                    <div class="sm:col-span-2">
                        <label class="block font-medium text-gray-700 text-sm">Twitter (X) URL</label>
                        <input type="url" wire:model="twitter" class="block shadow-sm mt-1 px-3 py-2 border border-gray-300 focus:border-indigo-500 rounded-md focus:outline-none focus:ring-indigo-500 w-full sm:text-sm">
                        @error('twitter') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    </div>
                </div>
            </div>

            <div class="flex justify-end pt-5">
                <button type="submit" class="inline-flex justify-center bg-gray-800 hover:bg-gray-900 shadow-sm px-4 py-2 border border-transparent rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 font-medium text-white text-sm">
                    <span wire:loading.remove wire:target="update">Update Changes</span>
                    <span wire:loading wire:target="update">Updating...</span>
                </button>
            </div>
        </form>
    </div>
</div>