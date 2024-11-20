<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ShareTap - Become a Distributor</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @livewireStyles
    </head>
<body class="bg-gray-50">
    <!-- Hero Section -->
    <div class="bg-gradient-to-r from-[#262262] to-[#1a1740] text-white">
        <div class="container mx-auto px-4 py-6">
            <!-- Navbar -->
            <div class="flex justify-between items-center">
                <div>
                    <!-- Logo (optional) -->
                    <a href="#" class="text-xl font-bold text-white">
                        ShareTap
                    </a>
                </div>
                <div>
                    <!-- Login Button -->
                    <a href="{{ route('login') }}" class="bg-white text-[#262262] px-6 py-2 rounded-full font-bold hover:bg-blue-50 transition-all transform hover:scale-105">
                        Login
                    </a>
                </div>
            </div>
        </div>
        <div class="container mx-auto px-4 py-20">
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">Become a Distributor with ShareTap and Earn Attractive Margins!</h1>
                <p class="text-xl mb-8 text-blue-100">Join ShareTap's distributor network and lead the digital business card revolution</p>
                <div class="flex gap-4 justify-center">
                    <a href="#contact" class="bg-white text-[#262262] px-8 py-4 rounded-full font-bold hover:bg-blue-50 transition-all transform hover:scale-105">
                        Become a Distributor
                    </a>
                    <a href="#features" class="bg-transparent border-2 border-white px-8 py-4 rounded-full font-bold hover:bg-white hover:text-[#262262] transition-all">
                        Learn More
                    </a>
                </div>
            </div>
        </div>
        <!-- Hero Wave Separator -->
        <div class="w-full">
            <svg class="w-full text-gray-50" viewBox="0 0 1440 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill="currentColor" d="M0,96L48,80C96,64,192,32,288,26.7C384,21,480,43,576,58.7C672,75,768,85,864,80C960,75,1056,53,1152,42.7C1248,32,1344,32,1392,32L1440,32L1440,100L1392,100C1344,100,1248,100,1152,100C1056,100,960,100,864,100C768,100,672,100,576,100C480,100,384,100,288,100C192,100,96,100,48,100L0,100Z"></path>
            </svg>
        </div>
    </div>

    <!-- Benefits Section -->
    <div class="container mx-auto px-4 py-20" id="features">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Why Partner with ShareTap?</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">Join our network of successful distributors and tap into the growing digital business card market</p>
        </div>
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all group">
                <div class="bg-blue-100 rounded-full w-16 h-16 flex items-center justify-center mb-6 group-hover:bg-[#262262] transition-all">
                    <span class="text-3xl group-hover:text-white">💰</span>
                </div>
                <h3 class="text-xl font-bold mb-3">Lucrative Returns</h3>
                <p class="text-gray-600">Generate significant revenue with high-margin NFC products and recurring subscription commissions</p>
            </div>
            <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all group">
                <div class="bg-blue-100 rounded-full w-16 h-16 flex items-center justify-center mb-6 group-hover:bg-[#262262] transition-all">
                    <span class="text-3xl group-hover:text-white">🚀</span>
                </div>
                <h3 class="text-xl font-bold mb-3">Expanding Market</h3>
                <p class="text-gray-600">Capitalize on the rapidly growing demand for digital business solutions and NFC technology</p>
            </div>
            <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all group">
                <div class="bg-blue-100 rounded-full w-16 h-16 flex items-center justify-center mb-6 group-hover:bg-[#262262] transition-all">
                    <span class="text-3xl group-hover:text-white">🌟</span>
                </div>
                <h3 class="text-xl font-bold mb-3">Complete Support</h3>
                <p class="text-gray-600">Access comprehensive training, marketing materials, and dedicated technical support</p>
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <div class="bg-gray-100 py-20">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-16">Premium Features You'll Offer</h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-all">
                    <div class="w-12 h-12 bg-[#262262] rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold mb-2">Digital Portfolios</h3>
                    <p class="text-gray-600">Professional online presence with customizable portfolios</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-all">
                    <div class="w-12 h-12 bg-[#262262] rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold mb-2">Smart Booking</h3>
                    <p class="text-gray-600">Integrated appointment scheduling system</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-all">
                    <div class="w-12 h-12 bg-[#262262] rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold mb-2">Analytics Dashboard</h3>
                    <p class="text-gray-600">Track profile views and engagement metrics</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-all">
                    <div class="w-12 h-12 bg-[#262262] rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold mb-2">NFC Integration</h3>
                    <p class="text-gray-600">Instant profile sharing with tap technology</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Form Section -->
    <livewire:distributor-form />


<!-- Footer (continuing from previous code) -->
<footer class="bg-gray-900 text-white py-12">
    <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-4 gap-8 mb-8">
            <div>
                <h4 class="text-xl font-bold mb-4">ShareTap</h4>
                <p class="text-gray-400">Revolutionizing business networking through digital innovation and NFC technology.</p>
            </div>
            <div>
                <h4 class="text-xl font-bold mb-4">Quick Links</h4>
                <ul class="space-y-2 text-gray-400">
                    <li><a href="#" class="hover:text-[#8c00f3] transition-colors">About Us</a></li>
                    <li><a href="#features" class="hover:text-[#8c00f3] transition-colors">Features</a></li>
                    <li><a href="#contact" class="hover:text-[#8c00f3] transition-colors">Become a Distributor</a></li>
                    <li><a href="#" class="hover:text-[#8c00f3] transition-colors">Support</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-xl font-bold mb-4">Contact</h4>
                <ul class="space-y-2 text-gray-400">
                    <li>Email: info@sharetap.com</li>
                    <li>Phone: (555) 123-4567</li>
                    <li>Address: 123 Business Ave</li>
                </ul>
            </div>
            <div>
                <h4 class="text-xl font-bold mb-4">Follow Us</h4>
                <div class="flex space-x-4">
                    <a href="#" class="bg-gray-800 p-2 rounded-full hover:bg-[#8c00f3] transition-colors">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                        </svg>
                    </a>
                    <a href="#" class="bg-gray-800 p-2 rounded-full hover:bg-[#8c00f3] transition-colors">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                        </svg>
                    </a>
                    <a href="#" class="bg-gray-800 p-2 rounded-full hover:bg-[#8c00f3] transition-colors">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="border-t border-gray-800 pt-8 text-center text-gray-400">
            <p>&copy; {{ date('Y') }} ShareTap. All rights reserved.</p>
        </div>
    </div>
</footer>

@livewireScripts
</body>
</html>
