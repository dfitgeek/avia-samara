<div class="mx-auto max-w-4xl px-4 py-10 sm:px-6 lg:px-8">
    <div class="overflow-hidden bg-white shadow sm:rounded-lg">
        <div class="border-b border-gray-200 bg-gray-50 px-4 py-5 sm:px-6">
            <h3 class="text-lg font-medium leading-6 text-gray-900">
                Setup App Configuration
            </h3>
            <p class="mt-1 max-w-2xl text-sm text-gray-500">
                Enter your application's contact details and social links for the first time.
            </p>
        </div>

        <form wire:submit.prevent="create" class="space-y-6 p-6">
            
            {{-- Contact Info Section --}}
            <div class="grid grid-cols-1 gap-x-4 gap-y-6 sm:grid-cols-6">
                
                <div class="sm:col-span-6">
                    <label class="block text-sm font-medium text-gray-700">Address</label>
                    <textarea wire:model="address" rows="3" class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"></textarea>
                    @error('address') <span class="text-xs text-red-500">{{ $message }}</span> @enderror
                </div>

                {{-- Dynamic Phone Numbers --}}
                <div class="sm:col-span-3">
                    <label class="mb-1 block text-sm font-medium text-gray-700">Phone Numbers</label>
                    
                    @foreach($phones as $index => $phone)
                        <div class="mb-2 flex items-center gap-2">
                            <div class="relative w-full">
                                <input type="text" wire:model="phones.{{ $index }}" placeholder="Phone {{ $index + 1 }}" 
                                    class="block w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                            </div>

                            @if($loop->last)
                                {{-- Add Button (Only on last item) --}}
                                <button type="button" wire:click="addPhone" class="rounded-md border border-indigo-200 bg-indigo-50 p-2 text-indigo-600 hover:bg-indigo-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                            @else
                                {{-- Remove Button (For items before the last one) --}}
                                <button type="button" wire:click="removePhone({{ $index }})" class="rounded-md border border-red-200 bg-red-50 p-2 text-red-600 hover:bg-red-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                            @endif
                        </div>
                        @error('phones.'.$index) <span class="mb-2 block text-xs text-red-500">{{ $message }}</span> @enderror
                    @endforeach
                </div>
                
                <div class="sm:col-span-3">
                    <label class="block text-sm font-medium text-gray-700">WhatsApp Number</label>
                    <input type="text" wire:model="whatsapp" placeholder="e.g. +234..." class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                    @error('whatsapp') <span class="text-xs text-red-500">{{ $message }}</span> @enderror
                </div>

                <div class="sm:col-span-3">
                    <label class="block text-sm font-medium text-gray-700">Customer Desk Email</label>
                    <input type="email" wire:model="customer_desk_email" class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                    @error('customer_desk_email') <span class="text-xs text-red-500">{{ $message }}</span> @enderror
                </div>

                <div class="sm:col-span-3">
                    <label class="block text-sm font-medium text-gray-700">App (System) Email</label>
                    <input type="email" wire:model="app_email" class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                    @error('app_email') <span class="text-xs text-red-500">{{ $message }}</span> @enderror
                </div>
            </div>

            <div class="border-t border-gray-200 pt-6">
                <h4 class="mb-4 text-sm font-medium text-gray-900">Social Media Links</h4>
                <div class="grid grid-cols-1 gap-x-4 gap-y-6 sm:grid-cols-6">
                    <div class="sm:col-span-2">
                        <label class="block text-sm font-medium text-gray-700">Facebook URL</label>
                        <input type="url" wire:model="facebook" class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                        @error('facebook') <span class="text-xs text-red-500">{{ $message }}</span> @enderror
                    </div>

                    <div class="sm:col-span-2">
                        <label class="block text-sm font-medium text-gray-700">Instagram URL</label>
                        <input type="url" wire:model="instagram" class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                        @error('instagram') <span class="text-xs text-red-500">{{ $message }}</span> @enderror
                    </div>

                    <div class="sm:col-span-2">
                        <label class="block text-sm font-medium text-gray-700">Twitter (X) URL</label>
                        <input type="url" wire:model="twitter" class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                        @error('twitter') <span class="text-xs text-red-500">{{ $message }}</span> @enderror
                    </div>
                </div>
            </div>

            <div class="flex justify-end pt-5">
                <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                    <span wire:loading.remove wire:target="create">Save Configuration</span>
                    <span wire:loading wire:target="create">Saving...</span>
                </button>
            </div>
        </form>
    </div>
</div>