<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - TATA NIAGA LESTARI</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.css" rel="stylesheet" />
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="sticky top-0 z-40 bg-white border-b border-gray-200">
        <div class="max-w-screen-xl flex items-center justify-between mx-auto p-4">
            <div class="flex items-center gap-2.5">
                <img src="{{ asset('images/Company_Logo.jpeg') }}" alt="TATA NIAGA LESTARI logo" class="h-8 w-8 md:h-10 md:w-10 object-cover rounded-full">
                <span class="text-lg md:text-2xl font-bold text-blue-600 drop-shadow-lg shadow-blue-400 bg-gradient-to-r from-blue-50 to-blue-100 px-2 md:px-4 py-1 md:py-2 rounded-lg hidden md:inline">Panglima Laut Fresh Frozen</span>
            </div>
            <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul class="flex flex-col md:flex-row md:space-x-8 text-sm md:text-base">
                    <li><a href="{{ route('index') }}" class="text-gray-700 hover:text-blue-600">Home</a></li>
                    <li><a href="{{ route('fishery-products') }}" class="text-gray-700 hover:text-blue-600">Fishery Products</a></li>
                    <li><a href="{{ route('payment-terms') }}" class="text-gray-700 hover:text-blue-600">Payment Terms</a></li>
                    <li><a href="{{ route('certificate') }}" class="text-gray-700 hover:text-blue-600">Certification</a></li>
                    <li><a href="{{ route('contact') }}" class="font-bold text-blue-600 hover:text-blue-700">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="relative bg-cover bg-center py-12 md:py-20" style="background-image: url('{{ asset('images/nelayan2.png') }}'); background-size: cover; background-position: center;">
        <div class="absolute inset-0 bg-black/40 backdrop-blur-sm"></div>
        <div class="relative max-w-screen-xl mx-auto px-4 text-center text-white z-10">
            <h1 class="text-3xl md:text-5xl font-bold mb-3 md:mb-4">Contact Us</h1>
            <p class="text-base md:text-xl">Get in Touch with Panglima Laut Fresh Frozen</p>
        </div>
    </section>

    <!-- Contact Information Section -->
    <section class="max-w-screen-xl mx-auto px-4 py-12 md:py-16">
        <h2 class="text-2xl md:text-4xl font-bold text-center text-blue-600 mb-8 md:mb-12">Contact Information</h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-8 mb-8 md:mb-12">
            <!-- Address -->
            <div class="bg-white p-4 md:p-6 rounded-lg shadow-md hover:shadow-lg transition">
                <div class="mb-4 flex justify-center">
                    <svg class="w-12 h-12 md:w-16 md:h-16 text-blue-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M11.906 1.994a8.002 8.002 0 0 1 8.09 8.421 7.996 7.996 0 0 1-1.913 5.801 4.105 4.105 0 0 0 .5-.7A8 8 0 0 0 12.81 1.994H11.906Zm5.018 5.355a7.967 7.967 0 0 0-3.772-2.975A7.998 7.998 0 0 1 12 19a7.967 7.967 0 0 0 3.772-2.975m5.086-4.543A8.002 8.002 0 1 1 6.303 6.303m18.894 5.694c0 4.519-3.587 8.297-8.054 8.297-1.891 0-3.649-.356-5.269-1.003-1.905 1.294-4.251 2.055-6.778 2.055a7.992 7.992 0 0 1-4.556-1.406l-.663 2.05a.75.75 0 0 1-.916.372l-2.286-1.313a.75.75 0 0 1 .216-1.376l1.97-.28-.148-.487A7.992 7.992 0 0 1 8 12.75c0 1.891.356 3.649 1.003 5.269-1.294 1.905-2.055 4.251-2.055 6.778a7.992 7.992 0 0 1-4.556 1.406l.663-2.05a.75.75 0 0 1 .916-.372l2.286 1.313a.75.75 0 0 1-.216 1.376l-1.97.28.148.487a7.992 7.992 0 0 1 1.406 4.556c0 1.891.356 3.649 1.003 5.269" clip-rule="evenodd"/>
                    </svg>
                </div>
                <h3 class="text-lg md:text-2xl font-bold text-blue-600 mb-3 md:mb-4 text-center">Address</h3>
                <div class="text-gray-600 text-center text-sm md:text-base">
                    <p class="font-semibold mb-2">Panglima Laut Fresh Frozen</p>
                    <p>Jl. Teuku Umar No. 456</p>
                    <p>Banda Aceh, Aceh 23112</p>
                    <p>Indonesia</p>
                </div>
            </div>

            <!-- Phone -->
            <div class="bg-white p-4 md:p-6 rounded-lg shadow-md hover:shadow-lg transition">
                <div class="mb-4 flex justify-center">
                    <svg class="w-12 h-12 md:w-16 md:h-16 text-blue-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M8.625 9.75a3.375 3.375 0 1 1 6.75 0 3.375 3.375 0 0 1-6.75 0ZM15.75 12a3.75 3.75 0 1 1 7.5 0 3.75 3.75 0 0 1-7.5 0ZM7.5 7.5A2.25 2.25 0 1 0 9.75 5.25 2.25 2.25 0 0 0 7.5 7.5Zm9 9a2.25 2.25 0 1 0 2.25-2.25 2.25 2.25 0 0 0-2.25 2.25Z"/>
                    </svg>
                </div>
                <h3 class="text-lg md:text-2xl font-bold text-blue-600 mb-3 md:mb-4 text-center">Phone</h3>
                <div class="text-gray-600 text-center text-sm md:text-base">
                    <p class="font-semibold mb-2">Iqbal Jamil</p>
                    <p class="mb-4">+62 812 103 539 63</p>
                </div>
            </div>

            <!-- Email -->
            <div class="bg-white p-4 md:p-6 rounded-lg shadow-md hover:shadow-lg transition">
                <div class="mb-4 flex justify-center">
                    <svg class="w-12 h-12 md:w-16 md:h-16 text-blue-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M2.503 2.5h18.994c.827 0 1.5.673 1.5 1.5v14c0 .827-.673 1.5-1.5 1.5H2.503c-.827 0-1.5-.673-1.5-1.5v-14c0-.827.673-1.5 1.5-1.5Zm18.994 1.5H2.503v.699l9.247 6.103 9.247-6.103V4Zm0 2.199l-9.247 6.103-9.247-6.103V16.5h18.994V6.199Z"/>
                    </svg>
                </div>
                <h3 class="text-lg md:text-2xl font-bold text-blue-600 mb-3 md:mb-4 text-center">Email</h3>
                <div class="text-gray-600 text-center text-sm md:text-base">
                    <p class="font-semibold mb-2">Company Email</p>
                    <p class="mb-3 md:mb-4 break-all">tataniagalestari@gmail.com</p>
                    <p class="font-semibold mb-2">Personal Email</p>
                    <p class="break-all">Iqbaljamil84@gmail.com</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="max-w-screen-xl mx-auto px-4 py-12 md:py-16">
        <h2 class="text-2xl md:text-4xl font-bold text-center text-blue-600 mb-8 md:mb-12">Send us a Message</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8">
            <!-- Contact Form -->
            <div class="bg-white p-4 md:p-8 rounded-lg shadow-md">
                <form class="space-y-4 md:space-y-6">
                    <div>
                        <label for="name" class="block text-xs md:text-sm font-medium text-gray-700 mb-2">Full Name</label>
                        <input type="text" id="name" name="name" required class="w-full px-3 md:px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 text-sm md:text-base">
                    </div>

                    <div>
                        <label for="email" class="block text-xs md:text-sm font-medium text-gray-700 mb-2">Email Address</label>
                        <input type="email" id="email" name="email" required class="w-full px-3 md:px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 text-sm md:text-base">
                    </div>

                    <div>
                        <label for="phone" class="block text-xs md:text-sm font-medium text-gray-700 mb-2">Phone Number</label>
                        <input type="tel" id="phone" name="phone" class="w-full px-3 md:px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 text-sm md:text-base">
                    </div>

                    <div>
                        <label for="subject" class="block text-xs md:text-sm font-medium text-gray-700 mb-2">Subject</label>
                        <input type="text" id="subject" name="subject" required class="w-full px-3 md:px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 text-sm md:text-base">
                    </div>

                    <div>
                        <label for="message" class="block text-xs md:text-sm font-medium text-gray-700 mb-2">Message</label>
                        <textarea id="message" name="message" rows="4 md:rows-5" required class="w-full px-3 md:px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 resize-none text-sm md:text-base"></textarea>
                    </div>

                    <button type="submit" class="w-full bg-blue-600 text-white py-2 md:py-3 rounded-lg font-bold hover:bg-blue-700 transition text-sm md:text-base">
                        Send Message
                    </button>
                </form>
            </div>

            <!-- Office Hours & Additional Info -->
            <div class="space-y-4 md:space-y-6">
                <!-- Office Hours -->
                <div class="bg-white p-4 md:p-8 rounded-lg shadow-md">
                    <h3 class="text-lg md:text-2xl font-bold text-blue-600 mb-4 md:mb-6">Office Hours</h3>
                    <div class="space-y-2 md:space-y-3 text-sm md:text-base">
                        <div class="flex justify-between py-2 border-b">
                            <span class="font-semibold text-gray-700">Monday - Friday</span>
                            <span class="text-gray-600">8:00 AM - 5:00 PM</span>
                        </div>
                        <div class="flex justify-between py-2 border-b">
                            <span class="font-semibold text-gray-700">Saturday</span>
                            <span class="text-gray-600">9:00 AM - 1:00 PM</span>
                        </div>
                        <div class="flex justify-between py-2">
                            <span class="font-semibold text-gray-700">Sunday</span>
                            <span class="text-gray-600">Closed</span>
                        </div>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="bg-white p-4 md:p-8 rounded-lg shadow-md">
                    <h3 class="text-lg md:text-2xl font-bold text-blue-600 mb-4 md:mb-6">Connect With Us</h3>
                    <div class="space-y-3 md:space-y-4">
                        <a href="#" class="flex items-center text-gray-700 hover:text-blue-600 transition text-sm md:text-base">
                            <svg class="w-5 h-5 md:w-6 md:h-6 mr-2 md:mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                            <span>Facebook</span>
                        </a>
                        <a href="#" class="flex items-center text-gray-700 hover:text-blue-600 transition text-sm md:text-base">
                            <svg class="w-5 h-5 md:w-6 md:h-6 mr-2 md:mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24"><path d="M8.29 20v-7.21H5.5V9.25h2.79V7.16c0-2.77 1.69-4.28 4.16-4.28 1.18 0 2.2.09 2.49.13v2.88h-1.71c-1.34 0-1.6.64-1.6 1.57v2.05h3.2l-.41 3.54h-2.79V20"/></svg>
                            <span>LinkedIn</span>
                        </a>
                        <a href="#" class="flex items-center text-gray-700 hover:text-blue-600 transition text-sm md:text-base">
                            <svg class="w-5 h-5 md:w-6 md:h-6 mr-2 md:mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24"><path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2s9 5 20 5a9.5 9.5 0 00-9-5.5c4.75-2.35 7-5 7-5s-1.1.55-3 1.1"/></svg>
                            <span>Twitter</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Google Maps Section -->
    <section class="max-w-screen-xl mx-auto px-4 py-12 md:py-16">
        <h2 class="text-2xl md:text-4xl font-bold text-center text-blue-600 mb-8 md:mb-12">Find Us</h2>
        <div class="bg-white p-4 md:p-6 rounded-lg shadow-md overflow-hidden">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.8816387847597!2d95.32119!3d5.552603!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304039c5c5c5c5c5%3A0x5c5c5c5c5c5c5c5c!2sBanda%20Aceh!5e0!3m2!1sen!2sid!4v1234567890" width="100%" height="300" class="md:h-96" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <!-- Footer -->
    <footer class="sticky bottom-0 z-40 bg-gray-800 text-white py-6 md:py-8">
        <div class="max-w-screen-xl mx-auto px-4 text-center">
            <p class="text-sm md:text-base">&copy; 2026 Panglima Laut Fresh Frozen. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.js"></script>
</body>
</html>
