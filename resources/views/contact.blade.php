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
                    <svg class="w-12 h-12 md:w-16 md:h-16 text-blue-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" fill="currentColor">
                        <path d="M576 112C576 100.9 570.3 90.6 560.8 84.8C551.3 79 539.6 78.4 529.7 83.4L413.5 141.5L234.1 81.6C226 78.9 217.3 79.5 209.7 83.3L81.7 147.3C70.8 152.8 64 163.9 64 176L64 528C64 539.1 69.7 549.4 79.2 555.2C88.7 561 100.4 561.6 110.3 556.6L226.4 498.5L399.7 556.3C395.4 549.9 391.2 543.2 387.1 536.4C376.1 518.1 365.2 497.1 357.1 474.6L255.9 440.9L255.9 156.4L383.9 199.1L383.9 298.4C414.9 262.6 460.9 240 511.9 240C534.5 240 556.1 244.4 575.9 252.5L576 112zM512 288C445.7 288 392 340.8 392 405.9C392 474.8 456.1 556.3 490.6 595.2C502.2 608.2 521.9 608.2 533.5 595.2C568 556.3 632.1 474.8 632.1 405.9C632.1 340.8 578.4 288 512.1 288zM472 408C472 385.9 489.9 368 512 368C534.1 368 552 385.9 552 408C552 430.1 534.1 448 512 448C489.9 448 472 430.1 472 408z"/>
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
                        <path d="M3 5a2 2 0 0 1 2-2h3.28a1 1 0 0 1 .948.684l1.498 4.493a1 1 0 0 1-.502 1.21l-2.257 1.13a11.042 11.042 0 0 0 5.516 5.516l1.13-2.257a1 1 0 0 1 1.21-.502l4.493 1.498a1 1 0 0 1 .684.949V19a2 2 0 0 1-2 2h-1C9.716 21 3 14.284 3 6V5Z"/>
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
                        <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
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
                    <p class="text-red-600 font-semibold mt-4 text-sm md:text-base">⚠️ Closed during local and International holidays</p>
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
