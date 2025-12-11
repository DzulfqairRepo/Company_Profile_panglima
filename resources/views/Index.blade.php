<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Panglima Laut Fresh Frozen')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.css" rel="stylesheet" />
    @stack('styles')
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="sticky top-0 z-40 bg-white border-b border-gray-200">
        <div class="max-w-screen-xl flex items-center justify-between mx-auto p-4">
             <div class="flex items-center gap-2.5">
                <img src="{{ asset('images/logotnl2.png') }}" alt="TATA NIAGA LESTARI logo" class="h-8 w-8 md:h-10 md:w-10 object-cover rounded-full">
                <span class="text-lg md:text-2xl font-bold text-blue-600 drop-shadow-lg shadow-blue-400 bg-gradient-to-r from-blue-50 to-blue-100 px-2 md:px-4 py-1 md:py-2 rounded-lg hidden md:inline">CV. TATA NIAGA LESTARI</span>
             </div>
            <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul class="flex flex-col md:flex-row md:space-x-8 text-sm md:text-base">
                    <li><a href="{{ route('index') }}" class="{{ request()->routeIs('index') ? 'font-bold' : '' }} text-gray-700 hover:text-blue-600">Home</a></li>
                    <li><a href="{{ route('fishery-products') }}" class="{{ request()->routeIs('fishery-products') ? 'font-bold' : '' }} text-gray-700 hover:text-blue-600">Fishery Products</a></li>
                    <li><a href="{{ route('payment-terms') }}" class="{{ request()->routeIs('payment-terms') ? 'font-bold' : '' }} text-gray-700 hover:text-blue-600">Terms and Condition</a></li>
                    <li><a href="{{ route('certificate') }}" class="{{ request()->routeIs('certificate') ? 'font-bold' : '' }} text-gray-700 hover:text-blue-600">Certification</a></li>
                    <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'font-bold' : '' }} text-gray-700 hover:text-blue-600">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    @yield('content')

    <!-- Footer -->
    <footer class="sticky bottom-0 z-40 bg-gray-800 text-white py-6 md:py-8">
        <div class="max-w-screen-xl mx-auto px-4 text-center">
            <p class="text-sm md:text-base">&copy; 2026 CV. TATA NIAGA LESTARI. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.js"></script>
    @stack('scripts')
</body>
</html>
