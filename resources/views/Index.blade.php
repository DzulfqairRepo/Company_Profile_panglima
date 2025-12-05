<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TATA NIAGA LESTARI</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.css" rel="stylesheet" />
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
        <!-- Navigation -->
    <nav class="bg-white border-b border-gray-200">
        <div class="max-w-screen-xl flex items-center justify-between mx-auto p-4">
             <div class="flex items-center gap-2.5">
                <img src="{{ asset('images/Company_Logo.jpeg') }}" alt="TATA NIAGA LESTARI logo" class="h-10 w-10 object-cover rounded-full">
                <span class="text-2xl font-bold text-blue-600">Panglima Laut Fresh Frozen</span>
             </div>
            <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul class="flex flex-col md:flex-row md:space-x-8">
                    <li><a href="#" class="text-gray-700 hover:text-blue-600">Home</a></li>
                    <li><a href="#" class="text-gray-700 hover:text-blue-600">About</a></li>
                    <li><a href="#" class="text-gray-700 hover:text-blue-600">Services</a></li>
                    <li><a href="#" class="text-gray-700 hover:text-blue-600">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-blue-600 to-blue-800 text-white py-20">
        <div class="max-w-screen-xl mx-auto px-4 text-center">
            <img src="{{ asset('images/Company_Logo.jpeg') }}" alt="TATA NIAGA LESTARI logo" class="h-24 w-24 object-cover rounded-full mx-auto mb-6">
            <h1 class="text-5xl font-bold mb-4">Tata Niaga Lestari Company</h1>
            <p class="text-xl mb-8">Tata Niaga Lestari Work Export, Import and Trading By applying the advanced technology and High Quality Product, we are committed to providing the best quality seafood & Agriculture product by operating strict practices of food hygiene, sanitation and quality control</div>
    </section>

    <!-- Content Section -->
    <section class="max-w-screen-xl mx-auto px-4 py-16">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition">
                <h3 class="text-2xl font-bold text-blue-600 mb-2">Feature One</h3>
                <p class="text-gray-600">High-quality services tailored to your needs.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition">
                <h3 class="text-2xl font-bold text-blue-600 mb-2">Feature Two</h3>
                <p class="text-gray-600">Innovative solutions for modern challenges.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition">
                <h3 class="text-2xl font-bold text-blue-600 mb-2">Feature Three</h3>
                <p class="text-gray-600">Dedicated support and expert guidance.</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8">
        <div class="max-w-screen-xl mx-auto px-4 text-center">
            <p>&copy; 2024 Company Name. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.js"></script>
</body>
</html>
