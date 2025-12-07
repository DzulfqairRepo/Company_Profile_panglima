<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Terms - TATA NIAGA LESTARI</title>
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
                    <li><a href="{{ route('payment-terms') }}" class="font-bold text-gray-700 hover:text-blue-600">Payment Terms</a></li>
                    <li><a href="{{ route('certificate') }}" class="text-gray-700 hover:text-blue-600">Certification</a></li>
                    <li><a href="{{ route('contact') }}" class="text-gray-700 hover:text-blue-600">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="relative bg-cover bg-center py-12 md:py-20" style="background-image: url('{{ asset('images/nelayan2.png') }}')">
        <div class="absolute inset-0 bg-black/40 backdrop-blur-sm"></div>
        <div class="relative max-w-screen-xl mx-auto px-4 text-center text-white z-10">
            <h1 class="text-3xl md:text-5xl font-bold mb-3 md:mb-4">Order Information & Payment Method</h1>
            <p class="text-sm md:text-xl mb-6 md:mb-8 px-2">Flexible payment options for your business needs</p>
        </div>
    </section>

    <!-- Payment Terms Section -->
    <section class="max-w-screen-xl mx-auto px-4 py-12 md:py-16">
        <h2 class="text-2xl md:text-4xl font-bold text-center text-blue-600 mb-8 md:mb-12">Payment Methods</h2>

        <!-- Payment Methods Table -->
        <div class="bg-white rounded-lg shadow-md hover:shadow-lg transition overflow-hidden mb-8">
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr class="bg-blue-600 text-white">
                            <th class="px-6 py-4 text-left text-sm md:text-base font-semibold w-1/3">Type</th>
                            <th class="px-6 py-4 text-left text-sm md:text-base font-semibold">Detail</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <!-- Payment Row -->
                        <tr class="hover:bg-gray-50 transition">
                            <td class="px-6 py-5 text-gray-800 font-medium text-sm md:text-base">Payment</td>
                            <td class="px-6 py-5 text-gray-600 text-sm md:text-base">
                                <ul class="list-disc list-inside space-y-1">
                                    <li>FOB Iskandar Muda International Airport, Banda Aceh – Indonesia</li>
                                    <li>CIF & CNF</li>
                                </ul>
                            </td>
                        </tr>

                        <!-- Cash in Advance Row -->
                        <tr class="hover:bg-gray-50 transition bg-gray-50">
                            <td class="px-6 py-5 text-gray-800 font-medium text-sm md:text-base">Cash in Advance</td>
                            <td class="px-6 py-5 text-gray-600 text-sm md:text-base">
                                50% after PO/Contract Sale, 50% against Document Export
                            </td>
                        </tr>

                        <!-- Letter of Credit Row -->
                        <tr class="hover:bg-gray-50 transition">
                            <td class="px-6 py-5 text-gray-800 font-medium text-sm md:text-base">
                                Letter of Credit (L/C) Transferable by SWIFT MT 720 & Irrevocable
                            </td>
                            <td class="px-6 py-5 text-gray-600 text-sm md:text-base">
                                <ul class="list-disc list-inside space-y-2">
                                    <!-- BNI Bank - commented out
                                    <li>
                                        <span class="font-medium">Bank National Indonesia (BNI)</span><br>
                                        <span class="ml-5 text-gray-500">Swift Code: BNINIDJAXXX</span>
                                    </li>
                                    -->
                                    <li>
                                        <span class="font-medium">Mandiri Bank</span><br>
                                        <span class="ml-5 text-gray-500">Swift Code: BMRIIDJA</span>
                                    </li>
                                </ul>
                            </td>
                        </tr>

                        <!-- Telegraphic Transfer Row -->
                        <tr class="hover:bg-gray-50 transition bg-gray-50">
                            <td class="px-6 py-5 text-gray-800 font-medium text-sm md:text-base">Telegraphic Transfer (TT)</td>
                            <td class="px-6 py-5 text-gray-600 text-sm md:text-base">
                                50% after PO/Contract Sale, 50% against Document Export
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Negotiable Banner -->
            <div class="bg-blue-600 text-white text-center py-4">
                <span class="text-lg md:text-xl font-bold tracking-wide">NEGOTIABLE</span>
            </div>
        </div>

        <!-- Price Note -->
        <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4 md:p-6 rounded-r-lg mb-8">
            <div class="flex items-start">
                <svg class="w-6 h-6 text-yellow-500 mr-3 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                </svg>
                <p class="text-gray-700 text-sm md:text-base">
                    <span class="font-semibold">*Note:</span> The price may be different to each country due to transportation cost (C&F)
                </p>
            </div>
        </div>
    </section>

    <!-- Payment Method Cards Section -->
    <section class="max-w-screen-xl mx-auto px-4 py-12 md:py-16">
        <h2 class="text-2xl md:text-4xl font-bold text-center text-blue-600 mb-8 md:mb-12">Accepted Payment Methods</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8 mb-8">
            <!-- FOB Card -->
            <div class="bg-white p-4 md:p-6 rounded-lg shadow-md hover:shadow-lg transition text-center">
                <div class="mb-4 flex justify-center">
                    <div class="w-12 h-12 md:w-16 md:h-16 bg-blue-100 rounded-full flex items-center justify-center">
                        <svg class="w-6 h-6 md:w-8 md:h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"/>
                    </svg>
                    </div>
                </div>
                <h3 class="text-lg md:text-xl font-bold text-blue-600 mb-2">FOB / CIF / CNF</h3>
                <p class="text-gray-600 text-sm md:text-base">Flexible shipping terms</p>
            </div>

            <!-- Cash in Advance Card -->
            <div class="bg-white p-4 md:p-6 rounded-lg shadow-md hover:shadow-lg transition text-center">
                <div class="mb-4 flex justify-center">
                    <div class="w-12 h-12 md:w-16 md:h-16 bg-green-100 rounded-full flex items-center justify-center">
                        <svg class="w-6 h-6 md:w-8 md:h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                    </div>
                </div>
                <h3 class="text-lg md:text-xl font-bold text-blue-600 mb-2">Cash in Advance</h3>
                <p class="text-gray-600 text-sm md:text-base">50/50 payment split</p>
            </div>

            <!-- L/C Card -->
            <div class="bg-white p-4 md:p-6 rounded-lg shadow-md hover:shadow-lg transition text-center">
                <div class="mb-4 flex justify-center">
                    <div class="w-12 h-12 md:w-16 md:h-16 bg-purple-100 rounded-full flex items-center justify-center">
                        <svg class="w-6 h-6 md:w-8 md:h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"/>
                        </svg>
                    </div>
                </div>
                <h3 class="text-lg md:text-xl font-bold text-blue-600 mb-2">Letter of Credit</h3>
                <p class="text-gray-600 text-sm md:text-base">SWIFT MT 720 & Irrevocable</p>
            </div>

            <!-- TT Card -->
            <div class="bg-white p-4 md:p-6 rounded-lg shadow-md hover:shadow-lg transition text-center">
                <div class="mb-4 flex justify-center">
                    <div class="w-12 h-12 md:w-16 md:h-16 bg-orange-100 rounded-full flex items-center justify-center">
                        <svg class="w-6 h-6 md:w-8 md:h-8 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"/>
                        </svg>
                    </div>
                </div>
                <h3 class="text-lg md:text-xl font-bold text-blue-600 mb-2">Telegraphic Transfer</h3>
                <p class="text-gray-600 text-sm md:text-base">50/50 payment split</p>
            </div>
        </div>
    </section>

    <!-- Bank Information Section -->
    <section class="max-w-screen-xl mx-auto px-4 py-12 md:py-16">
        <h2 class="text-2xl md:text-4xl font-bold text-center text-blue-600 mb-8 md:mb-12">Bank Information for L/C Payments</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8">
            <!-- BNI - commented out
            <div class="bg-white p-4 md:p-6 rounded-lg shadow-md hover:shadow-lg transition">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 md:w-16 md:h-16 bg-blue-600 rounded-lg flex items-center justify-center mr-4">
                        <span class="text-white font-bold text-lg md:text-xl">BNI</span>
                    </div>
                    <div>
                        <h3 class="text-lg md:text-xl font-bold text-blue-600">Bank National Indonesia</h3>
                        <p class="text-gray-500 text-sm">Government Bank</p>
                    </div>
                </div>
                <div class="border-t border-gray-200 pt-4 mt-4">
                    <p class="text-gray-600 text-sm md:text-base">
                        <span class="font-semibold text-blue-600">Swift Code:</span>
                        <span class="font-mono bg-gray-100 px-2 py-1 rounded">BNINIDJAXXX</span>
                    </p>
                </div>
            </div>
            -->

            <!-- Mandiri -->
            <div class="bg-white p-4 md:p-6 rounded-lg shadow-md hover:shadow-lg transition">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 md:w-16 md:h-16 bg-blue-600 rounded-lg flex items-center justify-center mr-4">
                        <span class="text-white font-bold text-xs md:text-sm">MANDIRI</span>
                    </div>
                    <div>
                        <h3 class="text-lg md:text-xl font-bold text-blue-600">Mandiri Bank</h3>
                        <p class="text-gray-500 text-sm">Government Bank</p>
                    </div>
                </div>
                <div class="border-t border-gray-200 pt-4 mt-4 space-y-2">
                    <p class="text-gray-600 text-sm md:text-base">
                        <span class="font-semibold text-blue-600">Account Number:</span>
                        <span class="font-mono bg-gray-100 px-2 py-1 rounded">1230001171067</span>
                    </p>
                    <p class="text-gray-600 text-sm md:text-base">
                        <span class="font-semibold text-blue-600">Account Name:</span>
                        <span class="font-mono bg-gray-100 px-2 py-1 rounded">Panglima Laut Fresh Frozen</span>
                    </p>
                    <p class="text-gray-600 text-sm md:text-base">
                        <span class="font-semibold text-blue-600">Swift Code:</span>
                        <span class="font-mono bg-gray-100 px-2 py-1 rounded">BMRIIDJA</span>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="max-w-screen-xl mx-auto px-4 py-12 md:py-16">
        <h2 class="text-2xl md:text-4xl font-bold text-center text-blue-600 mb-8 md:mb-12">Contact Us</h2>
        <div class="bg-white p-4 md:p-6 rounded-lg shadow-md hover:shadow-lg transition">
            <div class="flex flex-col md:flex-row items-center justify-between">
                <div class="flex items-center mb-6 md:mb-0">
                    <img src="{{ asset('images/Company_Logo.jpeg') }}" class="h-12 w-12 md:h-16 md:w-16 mr-4 object-cover rounded-full" alt="Tata Niaga Lestari Logo" />
                    <div>
                        <h3 class="text-lg md:text-xl font-bold text-blue-600">CV. TATA NIAGA LESTARI</h3>
                        <p class="text-gray-500 text-sm">Fisheries - Export - Import</p>
                    </div>
                </div>
                <div class="text-center md:text-right space-y-2">
                    <p class="text-gray-600 text-sm md:text-base flex items-center justify-center md:justify-end">
                        <svg class="w-5 h-5 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        TWK Abdul Aziz Street No.32, Merduati, Kuta Raja, Banda Aceh
                    </p>
                    <p class="text-gray-600 text-sm md:text-base flex items-center justify-center md:justify-end">
                        <svg class="w-5 h-5 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        tataniagalestari@gmail.com
                    </p>
                    <p class="text-gray-600 text-sm md:text-base flex items-center justify-center md:justify-end">
                        <svg class="w-5 h-5 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                        +62 853-7378-7486
                    </p>
                </div>
            </div>
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
