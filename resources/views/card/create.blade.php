<x-app-layout>
    <div class="py-12 bg-gray-50 min-h-screen">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl rounded-2xl">
                <!-- Header -->
                <div class="bg-gradient-to-r from-blue-500 to-blue-600 px-6 py-8">
                    <h1 class="text-2xl font-bold text-white text-center">NFC Card Registration</h1>
                    <p class="text-blue-100 text-center mt-2">Complete your profile in just a few steps</p>
                </div>

                <form method="POST" action="" class="px-6 py-8 space-y-8">
                    @csrf

                    <!-- Name Input -->
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
                        <input type="text" id="name" name="name" value="{{ old('name') }}"
                            class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 transition-all duration-200 ease-in-out
                                  @error('name') border-red-500 @enderror"
                            placeholder="Enter full name" required>
                        @error('name')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Mobile Input -->
                    <!-- Mobile Input -->
                    <div>
                        <label for="mobile" class="block text-sm font-medium text-gray-700">Mobile Number</label>
                        <div class="mt-1 relative rounded-lg shadow-sm">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <span class="text-gray-500 sm:text-sm">+91</span>
                            </div>
                            <input type="tel" id="mobile" name="mobile" value="{{ old('mobile') }}"
                                class="pl-12 block w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 transition-all duration-200 ease-in-out
                  @error('mobile') border-red-500 @enderror"
                                placeholder="Enter 10-digit mobile number" required>
                        </div>
                        @error('mobile')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Card Design Selection -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-4">Select Card Design</label>
                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                            <!-- Classic Design -->
                            <div class="relative">
                                <input type="radio" name="card_design" value="classic" id="classic"
                                    class="peer hidden" required>
                                <label for="classic"
                                    class="block p-4 cursor-pointer rounded-lg border-2 border-gray-200
                                                        peer-checked:border-blue-500 peer-checked:bg-blue-50 transition-all duration-200">
                                    <div class="h-32 mb-2 bg-gray-200 rounded flex items-center justify-center">
                                        <span class="text-gray-500">Classic</span>
                                    </div>
                                    <h3 class="text-sm font-medium text-gray-900 text-center">Classic Design</h3>
                                </label>
                            </div>

                            <!-- Modern Design -->
                            <div class="relative">
                                <input type="radio" name="card_design" value="modern" id="modern"
                                    class="peer hidden">
                                <label for="modern"
                                    class="block p-4 cursor-pointer rounded-lg border-2 border-gray-200
                                                        peer-checked:border-blue-500 peer-checked:bg-blue-50 transition-all duration-200">
                                    <div class="h-32 mb-2 bg-gray-200 rounded flex items-center justify-center">
                                        <span class="text-gray-500">Modern</span>
                                    </div>
                                    <h3 class="text-sm font-medium text-gray-900 text-center">Modern Design</h3>
                                </label>
                            </div>

                            <!-- Premium Design -->
                            <div class="relative">
                                <input type="radio" name="card_design" value="premium" id="premium"
                                    class="peer hidden">
                                <label for="premium"
                                    class="block p-4 cursor-pointer rounded-lg border-2 border-gray-200
                                                        peer-checked:border-blue-500 peer-checked:bg-blue-50 transition-all duration-200">
                                    <div class="h-32 mb-2 bg-gray-200 rounded flex items-center justify-center">
                                        <span class="text-gray-500">Premium</span>
                                    </div>
                                    <h3 class="text-sm font-medium text-gray-900 text-center">Premium Design</h3>
                                </label>
                            </div>
                        </div>
                        @error('card_design')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Submit Button -->
                    <div class="pt-4">
                        <button type="submit"
                            class="w-full flex justify-center py-3 px-4 border border-transparent rounded-lg
                                                   text-sm font-medium text-white bg-blue-600 hover:bg-blue-700
                                                   focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500
                                                   transition-all duration-200 ease-in-out">
                            Complete Registration
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            // Optional: Add client-side validation
            const form = document.querySelector('form');
            const mobileInput = document.getElementById('mobile');

            mobileInput.addEventListener('input', (e) => {
                // Remove any non-numeric characters
                e.target.value = e.target.value.replace(/[^\d]/g, '');
            });

            form.addEventListener('submit', (e) => {
                const name = document.getElementById('name').value.trim();
                const mobile = mobileInput.value.trim();
                const cardDesign = document.querySelector('input[name="card_design"]:checked');

                if (!name || !mobile || !cardDesign) {
                    e.preventDefault();
                    alert('Please fill in all required fields');
                }
            });
        </script>
    @endpush
</x-app-layout>
