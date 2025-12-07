<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fishery Products - TATA NIAGA LESTARI</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.css" rel="stylesheet" />


    <link rel="icon" type="image/jpeg" href="{{ asset('images/Company_Logo.jpeg') }}" />
    <link rel="icon" type="image/jpeg" href="{{ asset('images/Company_Logo.jpeg') }}g" />


</head>

<body class="bg-gray-50">
    <!-- Toast Container -->
    <div id="toast-container" class="fixed top-5 right-5 z-50 space-y-3"></div>

    <!-- Navigation -->
    <nav class="sticky top-0 z-40 bg-white border-b border-gray-200">
        <div class="max-w-screen-xl flex items-center justify-between mx-auto p-4">
            <div class="flex items-center gap-2.5">
                <img src="{{ asset('images/Company_Logo.jpeg') }}" alt="TATA NIAGA LESTARI logo"
                    class="h-8 w-8 md:h-10 md:w-10 object-cover rounded-full">
                <span
                    class="text-lg md:text-2xl font-bold text-blue-600 drop-shadow-lg shadow-blue-400 bg-gradient-to-r from-blue-50 to-blue-100 px-2 md:px-4 py-1 md:py-2 rounded-lg hidden md:inline">Panglima
                    Laut Fresh Frozen</span>
            </div>

            <div class="flex items-center gap-2 md:gap-0">
                <button data-collapse-toggle="navbar-default" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100"
                    id="drawer-toggle">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>

                <!-- Cart button for mobile (outside drawer) - commented out
                <button id="nav-cart-btn-mobile" data-modal-target="cart-modal" data-modal-toggle="cart-modal"
                    class="relative md:hidden text-gray-700 hover:text-blue-600 transition">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2 9m10 0l2-9m-10 9h14m-14 0a2 2 0 11-4 0 2 2 0 014 0m10 0a2 2 0 11-4 0 2 2 0 014 0">
                        </path>
                    </svg>
                    <span id="cart-count-mobile"
                        class="absolute -top-2 -right-2 bg-red-500 text-white text-xs rounded-full w-5 h-5 flex items-center justify-center hidden font-bold text-xs leading-none">0</span>
                </button>
                -->
            </div>

            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul class="flex flex-col md:flex-row md:space-x-8 md:items-center text-sm md:text-base">
                    <li><a href="{{ route('index') }}" class="text-gray-700 hover:text-blue-600">Home</a></li>
                    <li><a href="{{ route('fishery-products') }}"
                            class="text-gray-700 hover:text-blue-600 font-bold text-blue-600">Fishery Products</a></li>
                    <li><a href="{{ route('payment-terms') }}" class="text-gray-700 hover:text-blue-600">Payment
                            Terms</a></li>
                    <li><a href="{{ route('certificate') }}" class="text-gray-700 hover:text-blue-600">Certification</a>
                    </li>
                    <li><a href="{{ route('contact') }}" class="text-gray-700 hover:text-blue-600">Contact</a></li>
                    <!-- li class="md:block hidden">
                        <button id="nav-cart-btn" data-modal-target="cart-modal" data-modal-toggle="cart-modal" class="relative text-gray-700 hover:text-blue-600 transition">
                            <svg class="w-6 h-6 md:w-8 md:h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2 9m10 0l2-9m-10 9h14m-14 0a2 2 0 11-4 0 2 2 0 014 0m10 0a2 2 0 11-4 0 2 2 0 014 0"></path>
                            </svg>
                            <span id="cart-count" class="absolute -top-2 -right-2 bg-red-500 text-white text-xs rounded-full w-5 h-5 flex items-center justify-center hidden font-bold text-xs leading-none">0</span>
                        </button>
                    </li-->
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="relative bg-cover bg-center py-12 md:py-20"
        style="background-image: url('{{ asset('images/nelayan2.png') }}'); background-size: cover; background-position: center;">
        <div class="absolute inset-0 bg-black/40 backdrop-blur-sm"></div>
        <div class="relative max-w-screen-xl mx-auto px-4 text-center text-white z-10">
            <h1 class="text-3xl md:text-5xl font-bold mb-3 md:mb-4">Fishery Products</h1>
            <p class="text-base md:text-xl mb-6">Premium Quality Seafood & Agriculture Products</p>
            <button data-modal-target="bank-modal" data-modal-toggle="bank-modal" class="inline-block bg-blue-600 text-white px-6 md:px-8 py-2 md:py-3 rounded-lg font-bold hover:bg-blue-700 transition text-sm md:text-base">
                View Bank Information
            </button>
        </div>
    </section>

    <!-- Products Section -->
    <section class="max-w-screen-xl mx-auto px-4 py-12 md:py-16">
        <div class="grid grid-cols-1 gap-8">
            <!-- Products Grid -->
            <div>
                <h2 class="text-2xl md:text-3xl font-bold text-blue-600 mb-6 md:mb-8">Our Products</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6">
                    <!-- Product Card 1 -->
                    <div class="bg-white rounded-lg shadow-md hover:shadow-lg transition overflow-hidden">
                        <div class="w-full h-40 md:h-48 bg-gray-100 flex items-center justify-center overflow-hidden">
                            <img src="{{ asset('images/fish_images/image_1_0.png') }}" alt="Snapper Fish"
                                class="h-full object-contain">
                        </div>
                        <div class="p-3 md:p-4">
                            <h3 class="text-lg md:text-xl font-bold text-blue-600 mb-2">Snapper Fish</h3>
                            <p class="text-gray-600 text-xs md:text-sm mb-2">Fresh & Frozen</p>
                            <p class="text-gray-500 text-xs mb-3 md:mb-4">FOB Aceh Port</p>
                            <div class="flex justify-between items-center mb-3 md:mb-4 gap-2">
                                <span class="text-lg md:text-2xl font-bold text-blue-600">$9.00/kg</span>
                                <!-- input type="number" placeholder="Qty" class="w-14 md:w-16 px-2 py-1 border border-gray-300 rounded text-sm"-->
                            </div>
                            <!-- button class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700 add-to-cart text-sm md:text-base">Add to Cart</button-->
                        </div>
                    </div>

                    <!-- Product Card 2 -->
                    <div class="bg-white rounded-lg shadow-md hover:shadow-lg transition overflow-hidden">
                        <div class="w-full h-40 md:h-48 bg-gray-100 flex items-center justify-center overflow-hidden">
                            <img src="{{ asset('images/fish_images/image_1_1.png') }}" alt="Tiger Grouper Fish"
                                class="h-full object-contain">
                        </div>
                        <div class="p-3 md:p-4">
                            <h3 class="text-lg md:text-xl font-bold text-blue-600 mb-2">Tiger Grouper Fish</h3>
                            <p class="text-gray-600 text-xs md:text-sm mb-2">Fresh & Frozen</p>
                            <p class="text-gray-500 text-xs mb-3 md:mb-4">FOB Aceh Port</p>
                            <div class="flex justify-between items-center mb-3 md:mb-4 gap-2">
                                <span class="text-lg md:text-2xl font-bold text-blue-600">$8.00/kg</span>
                                <!-- input type="number" placeholder="Qty" class="w-14 md:w-16 px-2 py-1 border border-gray-300 rounded text-sm"-->
                            </div>
                            <!-- button class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700 add-to-cart text-sm md:text-base">Add to Cart</button-->
                        </div>
                    </div>

                    <!-- Product Card 3 -->
                    <div class="bg-white rounded-lg shadow-md hover:shadow-lg transition overflow-hidden">
                        <div class="w-full h-40 md:h-48 bg-gray-100 flex items-center justify-center overflow-hidden">
                            <img src="{{ asset('images/fish_images/image_1_2.png') }}" alt="Red Grouper Fish"
                                class="h-full object-contain">
                        </div>
                        <div class="p-3 md:p-4">
                            <h3 class="text-lg md:text-xl font-bold text-blue-600 mb-2">Red Grouper Fish</h3>
                            <p class="text-gray-600 text-xs md:text-sm mb-2">Fresh & Frozen</p>
                            <p class="text-gray-500 text-xs mb-3 md:mb-4">FOB Aceh Port</p>
                            <div class="flex justify-between items-center mb-3 md:mb-4 gap-2">
                                <span class="text-lg md:text-2xl font-bold text-blue-600">$5.80/kg</span>
                                <!-- input type="number" placeholder="Qty" class="w-14 md:w-16 px-2 py-1 border border-gray-300 rounded text-sm"-->
                            </div>
                            <!-- button class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700 add-to-cart text-sm md:text-base">Add to Cart</button-->
                        </div>
                    </div>

                    <!-- Product Card 4 -->
                    <div class="bg-white rounded-lg shadow-md hover:shadow-lg transition overflow-hidden">
                        <div class="w-full h-40 md:h-48 bg-gray-100 flex items-center justify-center overflow-hidden">
                            <img src="{{ asset('images/fish_images/image_1_3.png') }}" alt="Skipjack Tuna"
                                class="h-full object-contain">
                        </div>
                        <div class="p-3 md:p-4">
                            <h3 class="text-lg md:text-xl font-bold text-blue-600 mb-2">Skipjack Tuna</h3>
                            <p class="text-gray-600 text-xs md:text-sm mb-2">Fresh & Frozen</p>
                            <p class="text-gray-500 text-xs mb-3 md:mb-4">FOB Aceh Port</p>
                            <div class="flex justify-between items-center mb-3 md:mb-4 gap-2">
                                <span class="text-lg md:text-2xl font-bold text-blue-600">$1.80/kg</span>
                                <!-- input type="number" placeholder="Qty" class="w-14 md:w-16 px-2 py-1 border border-gray-300 rounded text-sm"-->
                            </div>
                            <!-- button class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700 add-to-cart text-sm md:text-base">Add to Cart</button-->
                        </div>
                    </div>

                    <!-- Product Card 5 -->
                    <div class="bg-white rounded-lg shadow-md hover:shadow-lg transition overflow-hidden">
                        <div class="w-full h-40 md:h-48 bg-gray-100 flex items-center justify-center overflow-hidden">
                            <img src="{{ asset('images/fish_images/image_1_6.png') }}" alt="Mackerel Fish"
                                class="h-full object-contain">
                        </div>
                        <div class="p-3 md:p-4">
                            <h3 class="text-lg md:text-xl font-bold text-blue-600 mb-2">Mackerel Fish</h3>
                            <p class="text-gray-600 text-xs md:text-sm mb-2">Fresh & Frozen</p>
                            <p class="text-gray-500 text-xs mb-3 md:mb-4">FOB Aceh Port</p>
                            <div class="flex justify-between items-center mb-3 md:mb-4 gap-2">
                                <span class="text-lg md:text-2xl font-bold text-blue-600">$1.80/kg</span>
                                <!-- input type="number" placeholder="Qty" class="w-14 md:w-16 px-2 py-1 border border-gray-300 rounded text-sm"-->
                            </div>
                            <!-- button class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700 add-to-cart text-sm md:text-base">Add to Cart</button-->
                        </div>
                    </div>

                    <!-- Product Card 6 -->
                    <div class="bg-white rounded-lg shadow-md hover:shadow-lg transition overflow-hidden">
                        <div class="w-full h-40 md:h-48 bg-gray-100 flex items-center justify-center overflow-hidden">
                            <img src="{{ asset('images/fish_images/image_1_4.png') }}" alt="Yellowfin Tuna"
                                class="h-full object-contain">
                        </div>
                        <div class="p-3 md:p-4">
                            <h3 class="text-lg md:text-xl font-bold text-blue-600 mb-2">Yellowfin Tuna</h3>
                            <p class="text-gray-600 text-xs md:text-sm mb-2">Fresh & Frozen</p>
                            <p class="text-gray-500 text-xs mb-3 md:mb-4">FOB Banda Aceh</p>
                            <div class="flex justify-between items-center mb-3 md:mb-4 gap-2">
                                <span class="text-lg md:text-2xl font-bold text-blue-600">$5.40/kg</span>
                                <!-- input type="number" placeholder="Qty" class="w-14 md:w-16 px-2 py-1 border border-gray-300 rounded text-sm"-->
                            </div>
                            <!-- button class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700 add-to-cart text-sm md:text-base">Add to Cart</button-->
                        </div>
                    </div>

                    <!-- Product Card 7 -->
                    <div class="bg-white rounded-lg shadow-md hover:shadow-lg transition overflow-hidden">
                        <div class="w-full h-40 md:h-48 bg-gray-100 flex items-center justify-center overflow-hidden">
                            <img src="{{ asset('images/fish_images/image_1_5.png') }}" alt="Milk Fish"
                                class="h-full object-contain">
                        </div>
                        <div class="p-3 md:p-4">
                            <h3 class="text-lg md:text-xl font-bold text-blue-600 mb-2">Milk Fish</h3>
                            <p class="text-gray-600 text-xs md:text-sm mb-2">Fresh & Frozen</p>
                            <p class="text-gray-500 text-xs mb-3 md:mb-4">FOB Aceh Port</p>
                            <div class="flex justify-between items-center mb-3 md:mb-4 gap-2">
                                <span class="text-lg md:text-2xl font-bold text-blue-600">$1.80/kg</span>
                                <!-- input type="number" placeholder="Qty" class="w-14 md:w-16 px-2 py-1 border border-gray-300 rounded text-sm"-->
                            </div>
                            <!-- button class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700 add-to-cart text-sm md:text-base">Add to Cart</button-->
                        </div>
                    </div>

                    <!-- Product Card 8 -->
                    <div class="bg-white rounded-lg shadow-md hover:shadow-lg transition overflow-hidden">
                        <div class="w-full h-40 md:h-48 bg-gray-100 flex items-center justify-center overflow-hidden">
                            <img src="{{ asset('images/fish_images/image_1_9.png') }}" alt="Tiger Shrimp"
                                class="h-full object-contain">
                        </div>
                        <div class="p-3 md:p-4">
                            <h3 class="text-lg md:text-xl font-bold text-blue-600 mb-2">Tiger Shrimp</h3>
                            <p class="text-gray-600 text-xs md:text-sm mb-2">Fresh & Frozen</p>
                            <p class="text-gray-500 text-xs mb-3 md:mb-4">FOB Aceh Port</p>
                            <div class="flex justify-between items-center mb-3 md:mb-4 gap-2">
                                <span class="text-lg md:text-2xl font-bold text-blue-600">$10.80/kg</span>
                                <!-- input type="number" placeholder="Qty" class="w-14 md:w-16 px-2 py-1 border border-gray-300 rounded text-sm"-->
                            </div>
                            <!-- button class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700 add-to-cart text-sm md:text-base">Add to Cart</button-->
                        </div>
                    </div>

                    <!-- Product Card 9 -->
                    <div class="bg-white rounded-lg shadow-md hover:shadow-lg transition overflow-hidden">
                        <div class="w-full h-40 md:h-48 bg-gray-100 flex items-center justify-center overflow-hidden">
                            <img src="{{ asset('images/fish_images/image_1_7.png') }}" alt="Squid"
                                class="h-full object-contain">
                        </div>
                        <div class="p-3 md:p-4">
                            <h3 class="text-lg md:text-xl font-bold text-blue-600 mb-2">Squid</h3>
                            <p class="text-gray-600 text-xs md:text-sm mb-2">Fresh & Frozen</p>
                            <p class="text-gray-500 text-xs mb-3 md:mb-4">5-8 Pcs/kg | FOB Aceh Port</p>
                            <div class="flex justify-between items-center mb-3 md:mb-4 gap-2">
                                <span class="text-lg md:text-2xl font-bold text-blue-600">$6.50/kg</span>
                                <!-- input type="number" placeholder="Qty" class="w-14 md:w-16 px-2 py-1 border border-gray-300 rounded text-sm"-->
                            </div>
                            <!-- button class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700 add-to-cart text-sm md:text-base">Add to Cart</button-->
                        </div>
                    </div>

                    <!-- Product Card 10 -->
                    <div class="bg-white rounded-lg shadow-md hover:shadow-lg transition overflow-hidden">
                        <div class="w-full h-40 md:h-48 bg-gray-100 flex items-center justify-center overflow-hidden">
                            <img src="{{ asset('images/fish_images/image_1_10.png') }}" alt="Vanammei Shrimp"
                                class="h-full object-contain">
                        </div>
                        <div class="p-3 md:p-4">
                            <h3 class="text-lg md:text-xl font-bold text-blue-600 mb-2">Vanammei Shrimp</h3>
                            <p class="text-gray-600 text-xs md:text-sm mb-2">Fresh & Frozen</p>
                            <p class="text-gray-500 text-xs mb-3 md:mb-4">FOB Aceh Port</p>
                            <div class="flex justify-between items-center mb-3 md:mb-4 gap-2">
                                <span class="text-lg md:text-2xl font-bold text-blue-600">$8.60 - $13.00/kg</span>
                                <!-- input type="number" placeholder="Qty" class="w-14 md:w-16 px-2 py-1 border border-gray-300 rounded text-sm"-->
                            </div>
                            <!-- Radio buttons and qty input for shrimp - commented out
                            <div class="mb-3 md:mb-4">
                                <div class="space-y-2 mb-2 md:mb-3">
                                    <label class="flex items-center text-xs md:text-sm">
                                        <input type="radio" name="vanammei-price" value="8.60"
                                            class="vanammei-price-radio mr-2">
                                        <span class="text-gray-600">40 Pcs/kg: <span
                                                class="font-bold text-blue-600">$8.60</span></span>
                                    </label>
                                    <label class="flex items-center text-xs md:text-sm">
                                        <input type="radio" name="vanammei-price" value="10.80"
                                            class="vanammei-price-radio mr-2">
                                        <span class="text-gray-600">30 Pcs/kg: <span
                                                class="font-bold text-blue-600">$10.80</span></span>
                                    </label>
                                    <label class="flex items-center text-xs md:text-sm">
                                        <input type="radio" name="vanammei-price" value="13.00"
                                            class="vanammei-price-radio mr-2">
                                        <span class="text-gray-600">20 Pcs/kg: <span
                                                class="font-bold text-blue-600">$13.00</span></span>
                                    </label>
                                </div>
                                <input type="number" placeholder="Qty"
                                    class="w-full px-2 py-1 border border-gray-300 rounded mb-2 text-sm">
                            </div>
                            -->
                            <!-- button class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700 add-to-cart text-sm md:text-base">Add to Cart</button-->
                        </div>
                    </div>

                    <!-- Product Card 11 -->
                    <div class="bg-white rounded-lg shadow-md hover:shadow-lg transition overflow-hidden">
                        <div class="w-full h-40 md:h-48 bg-gray-100 flex items-center justify-center overflow-hidden">
                            <img src="{{ asset('images/fish_images/image_1_11.png') }}" alt="Black Tiger Shrimp"
                                class="h-full object-contain">
                        </div>
                        <div class="p-3 md:p-4">
                            <h3 class="text-lg md:text-xl font-bold text-blue-600 mb-2">Black Tiger Shrimp</h3>
                            <p class="text-gray-600 text-xs md:text-sm mb-2">Fresh & Frozen</p>
                            <p class="text-gray-500 text-xs mb-3 md:mb-4">20 Pcs/kg | FOB Aceh Port</p>
                            <div class="flex justify-between items-center mb-3 md:mb-4 gap-2">
                                <span class="text-lg md:text-2xl font-bold text-blue-600">$18.00/kg</span>
                                <!-- input type="number" placeholder="Qty" class="w-14 md:w-16 px-2 py-1 border border-gray-300 rounded text-sm"-->
                            </div>
                            <!-- button class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700 add-to-cart text-sm md:text-base">Add to Cart</button-->
                        </div>
                    </div>

                    <!-- Product Card 12 -->
                    <div class="bg-white rounded-lg shadow-md hover:shadow-lg transition overflow-hidden">
                        <div class="w-full h-40 md:h-48 bg-gray-100 flex items-center justify-center overflow-hidden">
                            <img src="{{ asset('images/fish_images/image_1_8.png') }}" alt="Octopus"
                                class="h-full object-contain">
                        </div>
                        <div class="p-3 md:p-4">
                            <h3 class="text-lg md:text-xl font-bold text-blue-600 mb-2">Octopus</h3>
                            <p class="text-gray-600 text-xs md:text-sm mb-2">Fresh & Frozen</p>
                            <p class="text-gray-500 text-xs mb-3 md:mb-4">FOB Aceh Port</p>
                            <div class="flex justify-between items-center mb-3 md:mb-4 gap-2">
                                <span class="text-lg md:text-2xl font-bold text-blue-600">$7.20/kg</span>
                                <!-- input type="number" placeholder="Qty" class="w-14 md:w-16 px-2 py-1 border border-gray-300 rounded text-sm"-->
                            </div>
                            <!-- button class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700 add-to-cart text-sm md:text-base">Add to Cart</button-->
                        </div>
                    </div>

                    <!-- Product Card 13 -->
                    <div class="bg-white rounded-lg shadow-md hover:shadow-lg transition overflow-hidden">
                        <div class="w-full h-40 md:h-48 bg-gray-100 flex items-center justify-center overflow-hidden">
                            <img src="{{ asset('images/fish_images/image_2_0.png') }}" alt="Black Marlin Fish"
                                class="h-full object-contain">
                        </div>
                        <div class="p-3 md:p-4">
                            <h3 class="text-lg md:text-xl font-bold text-blue-600 mb-2">Black Marlin Fish</h3>
                            <p class="text-gray-600 text-xs md:text-sm mb-2">Fresh & Frozen</p>
                            <p class="text-gray-500 text-xs mb-3 md:mb-4">FOB Aceh Port</p>
                            <div class="flex justify-between items-center mb-3 md:mb-4 gap-2">
                                <span class="text-lg md:text-2xl font-bold text-blue-600">$7.20/kg</span>
                                <!-- input type="number" placeholder="Qty" class="w-14 md:w-16 px-2 py-1 border border-gray-300 rounded text-sm"-->
                            </div>
                            <!-- button class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700 add-to-cart text-sm md:text-base">Add to Cart</button-->
                        </div>
                    </div>

                    <!-- Product Card 14 -->
                    <div class="bg-white rounded-lg shadow-md hover:shadow-lg transition overflow-hidden">
                        <div class="w-full h-40 md:h-48 bg-gray-100 flex items-center justify-center overflow-hidden">
                            <img src="{{ asset('images/fish_images/image_2_1.png') }}" alt="White Marlin Fish"
                                class="h-full object-contain">
                        </div>
                        <div class="p-3 md:p-4">
                            <h3 class="text-lg md:text-xl font-bold text-blue-600 mb-2">White Marlin Fish</h3>
                            <p class="text-gray-600 text-xs md:text-sm mb-2">Fresh & Frozen</p>
                            <p class="text-gray-500 text-xs mb-3 md:mb-4">FOB Aceh Port</p>
                            <div class="flex justify-between items-center mb-3 md:mb-4 gap-2">
                                <span class="text-lg md:text-2xl font-bold text-blue-600">$10.80/kg</span>
                                <!-- input type="number" placeholder="Qty" class="w-14 md:w-16 px-2 py-1 border border-gray-300 rounded text-sm"-->
                            </div>
                            <!-- button class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700 add-to-cart text-sm md:text-base">Add to Cart</button-->
                        </div>
                    </div>

                    <!-- Product Card 15 -->
                    <div class="bg-white rounded-lg shadow-md hover:shadow-lg transition overflow-hidden">
                        <div class="w-full h-40 md:h-48 bg-gray-100 flex items-center justify-center overflow-hidden">
                            <img src="{{ asset('images/fish_images/image_2_4.png') }}" alt="Stingray Fish"
                                class="h-full object-contain">
                        </div>
                        <div class="p-3 md:p-4">
                            <h3 class="text-lg md:text-xl font-bold text-blue-600 mb-2">Stingray Fish</h3>
                            <p class="text-gray-600 text-xs md:text-sm mb-2">Fresh & Frozen</p>
                            <p class="text-gray-500 text-xs mb-3 md:mb-4">FOB Aceh Port</p>
                            <div class="flex justify-between items-center mb-3 md:mb-4 gap-2">
                                <span class="text-lg md:text-2xl font-bold text-blue-600">$2.50/kg</span>
                                <!-- input type="number" placeholder="Qty" class="w-14 md:w-16 px-2 py-1 border border-gray-300 rounded text-sm"-->
                            </div>
                            <!-- button class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700 add-to-cart text-sm md:text-base">Add to Cart</button-->
                        </div>
                    </div>

                    <!-- Product Card 16 -->
                    <div class="bg-white rounded-lg shadow-md hover:shadow-lg transition overflow-hidden">
                        <div class="w-full h-40 md:h-48 bg-gray-100 flex items-center justify-center overflow-hidden">
                            <img src="{{ asset('images/fish_images/image_2_2.png') }}" alt="Pearl Lobster"
                                class="h-full object-contain">
                        </div>
                        <div class="p-3 md:p-4">
                            <h3 class="text-lg md:text-xl font-bold text-blue-600 mb-2">Pearl Lobster</h3>
                            <p class="text-gray-600 text-xs md:text-sm mb-2">Fresh & Frozen</p>
                            <p class="text-gray-500 text-xs mb-3 md:mb-4">500gr - 1kg | FOB Aceh Port</p>
                            <div class="flex justify-between items-center mb-3 md:mb-4 gap-2">
                                <span class="text-lg md:text-2xl font-bold text-blue-600">$107.20/kg</span>
                                <!-- input type="number" placeholder="Qty" class="w-14 md:w-16 px-2 py-1 border border-gray-300 rounded text-sm"-->
                            </div>
                            <!-- button class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700 add-to-cart text-sm md:text-base">Add to Cart</button-->
                        </div>
                    </div>

                    <!-- Product Card 17 -->
                    <div class="bg-white rounded-lg shadow-md hover:shadow-lg transition overflow-hidden">
                        <div class="w-full h-40 md:h-48 bg-gray-100 flex items-center justify-center overflow-hidden">
                            <img src="{{ asset('images/fish_images/image_2_2.png') }}" alt="Bamboo Lobster"
                                class="h-full object-contain">
                        </div>
                        <div class="p-3 md:p-4">
                            <h3 class="text-lg md:text-xl font-bold text-blue-600 mb-2">Bamboo Lobster</h3>
                            <p class="text-gray-600 text-xs md:text-sm mb-2">Fresh & Frozen</p>
                            <p class="text-gray-500 text-xs mb-3 md:mb-4">500gr - 1kg | FOB Aceh Port</p>
                            <div class="flex justify-between items-center mb-3 md:mb-4 gap-2">
                                <span class="text-lg md:text-2xl font-bold text-blue-600">$57.20/kg</span>
                                <!-- input type="number" placeholder="Qty" class="w-14 md:w-16 px-2 py-1 border border-gray-300 rounded text-sm"-->
                            </div>
                            <!-- button class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700 add-to-cart text-sm md:text-base">Add to Cart</button-->
                        </div>
                    </div>

                    <!-- Product Card 18 -->
                    <div class="bg-white rounded-lg shadow-md hover:shadow-lg transition overflow-hidden">
                        <div class="w-full h-40 md:h-48 bg-gray-100 flex items-center justify-center overflow-hidden">
                            <img src="{{ asset('images/fish_images/image_2_2.png') }}" alt="Sand Lobster"
                                class="h-full object-contain">
                        </div>
                        <div class="p-3 md:p-4">
                            <h3 class="text-lg md:text-xl font-bold text-blue-600 mb-2">Sand Lobster</h3>
                            <p class="text-gray-600 text-xs md:text-sm mb-2">Fresh & Frozen</p>
                            <p class="text-gray-500 text-xs mb-3 md:mb-4">500gr - 1kg | FOB Aceh Port</p>
                            <div class="flex justify-between items-center mb-3 md:mb-4 gap-2">
                                <span class="text-lg md:text-2xl font-bold text-blue-600">$50.00/kg</span>
                                <!-- input type="number" placeholder="Qty" class="w-14 md:w-16 px-2 py-1 border border-gray-300 rounded text-sm"-->
                            </div>
                            <!-- button class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700 add-to-cart text-sm md:text-base">Add to Cart</button-->
                        </div>
                    </div>

                    <!-- Product Card 19 -->
                    <div class="bg-white rounded-lg shadow-md hover:shadow-lg transition overflow-hidden">
                        <div class="w-full h-40 md:h-48 bg-gray-100 flex items-center justify-center overflow-hidden">
                            <img src="{{ asset('images/fish_images/image_2_3.png') }}" alt="King Crab Size A"
                                class="h-full object-contain">
                        </div>
                        <div class="p-3 md:p-4">
                            <h3 class="text-lg md:text-xl font-bold text-blue-600 mb-2">King Crab - Size A</h3>
                            <p class="text-gray-600 text-xs md:text-sm mb-2">Fresh & Frozen</p>
                            <p class="text-gray-500 text-xs mb-3 md:mb-4">2 Crabs/kg | FOB Aceh Port</p>
                            <div class="flex justify-between items-center mb-3 md:mb-4 gap-2">
                                <span class="text-lg md:text-2xl font-bold text-blue-600">$32.30/kg</span>
                                <!-- input type="number" placeholder="Qty" class="w-14 md:w-16 px-2 py-1 border border-gray-300 rounded text-sm"-->
                            </div>
                            <!-- button class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700 add-to-cart text-sm md:text-base">Add to Cart</button-->
                        </div>
                    </div>

                    <!-- Product Card 20 -->
                    <div class="bg-white rounded-lg shadow-md hover:shadow-lg transition overflow-hidden">
                        <div class="w-full h-40 md:h-48 bg-gray-100 flex items-center justify-center overflow-hidden">
                            <img src="{{ asset('images/fish_images/image_2_3.png') }}" alt="King Crab Size B"
                                class="h-full object-contain">
                        </div>
                        <div class="p-3 md:p-4">
                            <h3 class="text-lg md:text-xl font-bold text-blue-600 mb-2">King Crab - Size B</h3>
                            <p class="text-gray-600 text-xs md:text-sm mb-2">Fresh & Frozen</p>
                            <p class="text-gray-500 text-xs mb-3 md:mb-4">3 Crabs/kg | FOB Aceh Port</p>
                            <div class="flex justify-between items-center mb-3 md:mb-4 gap-2">
                                <span class="text-lg md:text-2xl font-bold text-blue-600">$21.50/kg</span>
                                <!-- input type="number" placeholder="Qty" class="w-14 md:w-16 px-2 py-1 border border-gray-300 rounded text-sm"-->
                            </div>
                            <!-- button class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700 add-to-cart text-sm md:text-base">Add to Cart</button-->
                        </div>
                    </div>

                    <!-- Product Card 21 -->
                    <div class="bg-white rounded-lg shadow-md hover:shadow-lg transition overflow-hidden">
                        <div class="w-full h-40 md:h-48 bg-gray-100 flex items-center justify-center overflow-hidden">
                            <img src="{{ asset('images/fish_images/image_2_3.png') }}" alt="King Crab Size C"
                                class="h-full object-contain">
                        </div>
                        <div class="p-3 md:p-4">
                            <h3 class="text-lg md:text-xl font-bold text-blue-600 mb-2">King Crab - Size C</h3>
                            <p class="text-gray-600 text-xs md:text-sm mb-2">Fresh & Frozen</p>
                            <p class="text-gray-500 text-xs mb-3 md:mb-4">4 Crabs/kg | FOB Aceh Port</p>
                            <div class="flex justify-between items-center mb-3 md:mb-4 gap-2">
                                <span class="text-lg md:text-2xl font-bold text-blue-600">$17.90/kg</span>
                                <!-- input type="number" placeholder="Qty" class="w-14 md:w-16 px-2 py-1 border border-gray-300 rounded text-sm"-->
                            </div>
                            <!-- button class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700 add-to-cart text-sm md:text-base">Add to Cart</button-->
                        </div>
                    </div>
                </div>

                <!-- Checkout Button - commented out
                <div class="mt-8 md:mt-12 flex justify-center">
                    <button id="checkout-btn" data-modal-target="cart-modal" data-modal-toggle="cart-modal"
                        class="bg-blue-600 text-white px-6 md:px-8 py-2 md:py-3 rounded-lg font-bold hover:bg-blue-700 text-base md:text-lg">
                        View Cart & Checkout
                    </button>
                </div>
                -->
            </div>
        </div>
    </section>

    <!-- Shopping Cart Modal - commented out
    <div id="cart-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <div class="relative bg-white rounded-lg shadow-lg">
                <div class="flex items-center justify-between p-3 md:p-5 border-b rounded-t">
                    <h3 class="text-lg md:text-xl font-semibold text-blue-600">Shopping Cart</h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                        data-modal-hide="cart-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <div class="p-3 md:p-5">
                    <div id="cart-items" class="mb-6 max-h-72 overflow-y-auto">
                        <p class="text-gray-500 text-center py-8 text-sm md:text-base">Your cart is empty</p>
                    </div>

                    <div class="border-t pt-4 mb-6">
                        <div class="flex justify-between mb-2 text-sm md:text-base">
                            <span class="text-gray-600">Subtotal:</span>
                            <span class="font-bold" id="subtotal">$0.00</span>
                        </div>
                        <div class="flex justify-between mb-4 text-sm md:text-base">
                            <span class="text-gray-600">Tax (10%):</span>
                            <span class="font-bold" id="tax">$0.00</span>
                        </div>
                        <div class="flex justify-between text-base md:text-xl border-t pt-4">
                            <span class="font-bold">Total:</span>
                            <span class="font-bold text-blue-600" id="total">$0.00</span>
                        </div>
                    </div>
                </div>
                <div
                    class="flex flex-col md:flex-row items-center p-3 md:p-5 border-t border-gray-200 rounded-b gap-2">
                    <button type="button"
                        class="w-full text-gray-700 bg-gray-200 hover:bg-gray-300 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 md:px-5 py-2 md:py-2.5 text-center"
                        data-modal-hide="cart-modal">Continue Shopping</button>
                    <button type="button"
                        class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 md:px-5 py-2 md:py-2.5 text-center">Proceed
                        to Checkout</button>
                </div>
            </div>
        </div>
    </div>
    -->

    <!-- Bank Information Modal -->
    <div id="bank-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow-lg">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                    <h3 class="text-lg md:text-xl font-semibold text-blue-600">Bank Information</h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                        data-modal-hide="bank-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 md:w-16 md:h-16 bg-blue-600 rounded-lg flex items-center justify-center mr-4">
                            <span class="text-white font-bold text-xs md:text-sm">MANDIRI</span>
                        </div>
                        <div>
                            <h4 class="text-lg md:text-xl font-bold text-blue-600">Mandiri Bank</h4>
                            <p class="text-gray-500 text-sm">Government Bank</p>
                        </div>
                    </div>
                    <div class="border-t border-gray-200 pt-4 mt-4 space-y-3">
                        <div>
                            <p class="text-gray-500 text-xs md:text-sm">Account Number</p>
                            <p class="font-mono text-base md:text-lg font-bold text-gray-800">1230001171067</p>
                        </div>
                        <div>
                            <p class="text-gray-500 text-xs md:text-sm">Account Name</p>
                            <p class="font-semibold text-base md:text-lg text-gray-800">Panglima Laut Fresh Frozen</p>
                        </div>
                        <div>
                            <p class="text-gray-500 text-xs md:text-sm">Swift Code</p>
                            <p class="font-mono text-base md:text-lg font-bold text-gray-800">BMRIIDJA</p>
                        </div>
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b">
                    <button type="button"
                        class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                        data-modal-hide="bank-modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="sticky bottom-0 z-40 bg-gray-800 text-white py-6 md:py-8">
        <div class="max-w-screen-xl mx-auto px-4 text-center">
            <p class="text-sm md:text-base">&copy; 2026 Panglima Laut Fresh Frozen. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.js"></script>
    <script>
        const cart = [];

        function showToast(message) {
            const toastContainer = document.getElementById('toast-container');
            const toastId = 'toast-' + Date.now();

            const toastHTML = `
                <div id="${toastId}" class="flex items-center w-full max-w-xs p-3 md:p-4 text-gray-500 bg-white rounded-lg shadow-lg border border-gray-200 text-sm" role="alert">
                    <svg class="w-5 h-5 text-blue-600 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="ml-2 md:ml-3 text-xs md:text-sm font-medium">${message}</span>
                    <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1 hover:bg-gray-100 inline-flex h-6 w-6 md:h-8 md:w-8" onclick="removeToast('${toastId}')" aria-label="Close">
                        <svg class="w-4 h-4 md:w-5 md:h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
            `;

            toastContainer.insertAdjacentHTML('beforeend', toastHTML);
            const toastElement = document.getElementById(toastId);

            const timeoutId = setTimeout(() => {
                removeToast(toastId);
            }, 60000);

            toastElement.dataset.timeoutId = timeoutId;
        }

        function removeToast(toastId) {
            const toastElement = document.getElementById(toastId);
            if (toastElement) {
                const timeoutId = toastElement.dataset.timeoutId;
                if (timeoutId) {
                    clearTimeout(parseInt(timeoutId));
                }
                toastElement.style.opacity = '0';
                toastElement.style.transition = 'opacity 0.3s ease-out';
                setTimeout(() => {
                    if (toastElement.parentNode) {
                        toastElement.remove();
                    }
                }, 300);
            }
        }

        document.querySelectorAll('.add-to-cart').forEach((button) => {
            button.addEventListener('click', function() {
                const productCard = this.closest('.bg-white');
                const productName = productCard.querySelector('h3').textContent;

                const priceRadios = productCard.querySelectorAll('.vanammei-price-radio');
                let productPrice;

                if (priceRadios.length > 0) {
                    const selectedRadio = productCard.querySelector('.vanammei-price-radio:checked');
                    if (!selectedRadio) {
                        showToast('Please select a size for ' + productName);
                        return;
                    }
                    productPrice = parseFloat(selectedRadio.value);
                } else {
                    const priceText = productCard.querySelector(
                        '.text-lg.md\\:text-2xl.font-bold.text-blue-600');
                    productPrice = parseFloat(priceText.textContent.replace('$', '').split('/')[0]);
                }

                const quantity = parseInt(productCard.querySelector('input[type="number"]').value) || 1;

                const cartItem = {
                    name: productName,
                    price: productPrice,
                    quantity: quantity,
                    total: productPrice * quantity
                };

                cart.push(cartItem);
                updateCart();
                productCard.querySelector('input[type="number"]').value = '';
                showToast(`${productName} added to cart!`);
            });
        });

        function updateCart() {
            const cartItemsDiv = document.getElementById('cart-items');
            const subtotalSpan = document.getElementById('subtotal');
            const taxSpan = document.getElementById('tax');
            const totalSpan = document.getElementById('total');
            const cartCountSpan = document.getElementById('cart-count');
            const cartCountSpanMobile = document.getElementById('cart-count-mobile');

            cartItemsDiv.innerHTML = '';
            let subtotal = 0;

            cart.forEach((item, index) => {
                subtotal += item.total;
                const cartItemHTML = `
                    <div class="flex justify-between items-center mb-3 pb-3 border-b text-sm md:text-base">
                        <div class="flex-1">
                            <p class="font-semibold text-xs md:text-sm">${item.name}</p>
                            <p class="text-gray-600 text-xs md:text-sm">$${item.price.toFixed(2)} x ${item.quantity}</p>
                        </div>
                        <div class="text-right">
                            <p class="font-bold text-sm">$${item.total.toFixed(2)}</p>
                            <button onclick="removeFromCart(${index})" class="text-red-600 text-xs hover:text-red-800">Remove</button>
                        </div>
                    </div>
                `;
                cartItemsDiv.innerHTML += cartItemHTML;
            });

            if (cart.length === 0) {
                cartItemsDiv.innerHTML = '<p class="text-gray-500 text-center py-8 text-sm">Your cart is empty</p>';
                cartCountSpan.classList.add('hidden');
                cartCountSpanMobile.classList.add('hidden');
            } else {
                cartCountSpan.textContent = cart.length;
                cartCountSpan.classList.remove('hidden');
                cartCountSpanMobile.textContent = cart.length;
                cartCountSpanMobile.classList.remove('hidden');
            }

            const tax = subtotal * 0.10;
            const total = subtotal + tax;

            subtotalSpan.textContent = `$${subtotal.toFixed(2)}`;
            taxSpan.textContent = `$${tax.toFixed(2)}`;
            totalSpan.textContent = `$${total.toFixed(2)}`;
        }

        function removeFromCart(index) {
            cart.splice(index, 1);
            updateCart();
        }

        // Hide mobile cart button when drawer is opened
        const drawerToggle = document.getElementById('drawer-toggle');
        const mobileCartBtn = document.getElementById('nav-cart-btn-mobile');
        const navbarDefault = document.getElementById('navbar-default');

        drawerToggle.addEventListener('click', function() {
            // Toggle drawer visibility
            const isHidden = navbarDefault.classList.contains('hidden');

            if (isHidden) {
                // Drawer is about to open
                mobileCartBtn.classList.add('hidden');
            } else {
                // Drawer is about to close
                mobileCartBtn.classList.remove('hidden');
            }
        });
    </script>
</body>

</html>
