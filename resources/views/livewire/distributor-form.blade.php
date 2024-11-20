<div>
    <div id="contact" class="container mx-auto px-4 py-20">
        <div class="max-w-4xl mx-auto overflow-hidden">
            @if (session()->has('success'))
                <div class="p-4 mb-4 text-green-700 bg-green-100 rounded-lg">
                    {{ session('success') }}
                </div>
            @endif
            </div>
        <div class="max-w-4xl mx-auto bg-white rounded-2xl shadow-xl overflow-hidden">
            <div class="md:flex">
                <div class="bg-[#262262] text-white p-8 md:w-2/5">
                    <h3 class="text-2xl font-bold mb-4">Start Your Journey</h3>
                    <p class="mb-6">Join our network of successful distributors and be part of the digital revolution</p>
                    <div class="space-y-4">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Exclusive territory rights</span>
                        </div>
                        <div class="flex items-center">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Comprehensive training</span>
                        </div>
                        <div class="flex items-center">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Marketing support</span>
                        </div>
                    </div>
                </div>
                <div class="p-8 md:w-3/5">
                    <h3 class="text-2xl font-bold mb-6">Apply to Become a Distributor</h3>
                    <form wire:submit.prevent="submit" class="space-y-6">
                        <div>
                            <label class="block text-gray-700 mb-2">Name</label>
                            <input type="text" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#262262] focus:border-transparent" wire:model="name" required>
                            @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>
                        <div>
                            <label class="block text-gray-700 mb-2">Email (optional)</label>
                            <input type="email" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#262262] focus:border-transparent" wire:model="email">
                            @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>
                        <div>
                            <label class="block text-gray-700 mb-2">Phone</label>
                            <input type="tel" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#262262] focus:border-transparent" wire:model="phone" required>
                            @error('phone') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>
                        <div>
                            <label class="block text-gray-700 mb-2">Address (optional)</label>
                            <input type="text" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#262262] focus:border-transparent" wire:model="address">
                            @error('address') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>
                        <button type="submit" class="w-full bg-[#262262] text-white py-4 rounded-lg font-bold hover:bg-[#1a1740] transition-all transform hover:scale-105">
                            Submit Application
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
