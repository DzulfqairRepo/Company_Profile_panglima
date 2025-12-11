@extends('index')

@section('title', 'Contact Us - TATA NIAGA LESTARI')

@section('content')
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
                    <p>Jl. Raya Kalimukya No. 4</p>
                    <p>Kebunduren Cilodong</p>
                    <p>Depok, Jabar 16413</p>
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
                            <span class="font-semibold text-gray-700">Monday - Sunday (All day)</span>
                            <span class="text-gray-600">7:00 AM - 11:00 PM</span>
                        </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Google Maps Section -->
    <section class="max-w-screen-xl mx-auto px-4 py-12 md:py-16">
        <h2 class="text-2xl md:text-4xl font-bold text-center text-blue-600 mb-8 md:mb-12">Find Us</h2>
        <div class="bg-white p-4 md:p-6 rounded-lg shadow-md overflow-hidden">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.269471626034!2d106.8197643!3d-6.4316667!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f0f0f0f0f0f1%3A0x0!2zNsKwMjUnNTAuMCJTIDEwNsKwNDknMTguMCJF!5e0!3m2!1sen!2sid!4v1234567890" width="100%" height="300" class="md:h-96" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
@endsection
