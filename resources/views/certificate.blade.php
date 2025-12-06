<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certifications - TATA NIAGA LESTARI</title>
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

            <div class="flex items-center gap-2 md:gap-0">
                <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100" id="drawer-toggle">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                </button>
            </div>

            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul class="flex flex-col md:flex-row md:space-x-8 text-sm md:text-base">
                    <li><a href="{{ route('index') }}" class="text-gray-700 hover:text-blue-600">Home</a></li>
                    <li><a href="{{ route('fishery-products') }}" class="text-gray-700 hover:text-blue-600">Fishery Products</a></li>
                    <li><a href="{{ route('payment-terms') }}" class="text-gray-700 hover:text-blue-600">Payment Terms</a></li>
                    <li><a href="{{ route('certificate') }}" class="font-bold text-blue-600 hover:text-blue-700">Certification</a></li>
                    <li><a href="{{ route('contact') }}" class="text-gray-700 hover:text-blue-600">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="relative bg-cover bg-center py-12 md:py-20" style="background-image: url('{{ asset('images/nelayan2.png') }}'); background-size: cover; background-position: center;">
        <div class="absolute inset-0 bg-black/40 backdrop-blur-sm"></div>
        <div class="relative max-w-screen-xl mx-auto px-4 text-center text-white z-10">
            <h1 class="text-3xl md:text-5xl font-bold mb-3 md:mb-4">Our Certifications</h1>
            <p class="text-base md:text-xl">Quality Assurance and Industry Certifications</p>
        </div>
    </section>

    <!-- Certificates Section -->
    <section class="max-w-screen-xl mx-auto px-4 py-12 md:py-16">
        <h2 class="text-2xl md:text-4xl font-bold text-center text-blue-600 mb-8 md:mb-12">Quality Certifications</h2>

        <!-- Certificate 1: Cephalopoda Segar -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8 mb-8">
            <div class="bg-white p-4 md:p-6 rounded-lg shadow-md hover:shadow-lg transition flex items-center justify-center min-h-64 md:min-h-80">
                <img src="{{ asset('images/certificates/6_SKP-skp Cephalopoda Segar.jpg') }}" alt="Certificate of Good Manufacturing Practices - Cephalopoda Segar" class="w-full h-auto object-contain rounded-lg">
            </div>

            <div class="bg-white p-4 md:p-6 rounded-lg shadow-md hover:shadow-lg transition">
                <div class="mb-4 flex justify-center md:justify-start">
                    <svg class="w-12 h-12 md:w-16 md:h-16 text-blue-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                    </svg>
                </div>

                <h3 class="text-lg md:text-2xl font-bold text-blue-600 mb-3 md:mb-4">Certificate of Good Manufacturing Practices</h3>

                <p class="text-gray-600 text-sm md:text-base mb-4 md:mb-6 text-justify">Fresh Cephalopods - Cephalopoda Segar (Cumi-cumi, Gurita, Sotong) / Fresh Cephalopods (Squid, Octopus, Cuttlefish) - Certificate No. 13804/11/SKP/SG/I/2020 (P.: 00015872). Issued by the Ministry of Marine Affairs and Fisheries, Directorate General of Product Competitiveness. Fish Processing Plant: CV. TATA NIAGA LESTARI. Address: Jl. TWK Abdul Aziz No.32, Kel. Merduati, Kec. Kuta Raja, Kota Banda Aceh. Processing Steps: Receiving, Processing, Chilling, Packing/Labelling, Chill Storing, Stuffing. Ranking: B.</p>

                <div class="mb-4 md:mb-6 p-3 md:p-4 bg-blue-50 rounded-lg">
                    <p class="text-xs md:text-sm text-gray-600">
                        <span class="font-semibold text-blue-600">Issued Date:</span>
                        <span class="text-gray-700">January 21, 2020</span>
                    </p>
                    <p class="text-xs md:text-sm text-gray-600 mt-2">
                        <span class="font-semibold text-blue-600">Valid Until:</span>
                        <span class="text-gray-700">January 21, 2022</span>
                    </p>
                </div>
            </div>
        </div>

        <!-- Certificate 2: Ikan Demersal Segar -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8 mb-8">
            <div class="bg-white p-4 md:p-6 rounded-lg shadow-md hover:shadow-lg transition flex items-center justify-center min-h-64 md:min-h-80 order-2 md:order-1">
                <img src="{{ asset('images/certificates/5_SKP-skp Ikan Demersal Segar.jpg') }}" alt="Certificate of Good Manufacturing Practices - Demersal Fish" class="w-full h-auto object-contain rounded-lg">
            </div>

            <div class="bg-white p-4 md:p-6 rounded-lg shadow-md hover:shadow-lg transition order-1 md:order-2">
                <div class="mb-4 flex justify-center md:justify-start">
                    <svg class="w-12 h-12 md:w-16 md:h-16 text-blue-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                    </svg>
                </div>

                <h3 class="text-lg md:text-2xl font-bold text-blue-600 mb-3 md:mb-4">Certificate of Good Manufacturing Practices</h3>

                <p class="text-gray-600 text-sm md:text-base mb-4 md:mb-6 text-justify">Fresh Demersal Fish - Ikan Demersal Segar (Kakap, Kerapu, Bawal, Baronang) / Fresh Demersal Fish (Snapper, Grouper, Pomfret, Spinefoot) - Certificate No. 13805/11/SKP/SG/I/2020 (P.: 00015873). Issued by the Ministry of Marine Affairs and Fisheries, Directorate General of Product Competitiveness. Fish Processing Plant: CV. TATA NIAGA LESTARI. Address: Jl. TWK Abdul Aziz No.32, Kel. Merduati, Kec. Kuta Raja, Kota Banda Aceh. Processing Steps: Receiving, Processing, Chilling, Packing/Labelling, Chill Storing, Stuffing. Ranking: B.</p>

                <div class="mb-4 md:mb-6 p-3 md:p-4 bg-blue-50 rounded-lg">
                    <p class="text-xs md:text-sm text-gray-600">
                        <span class="font-semibold text-blue-600">Issued Date:</span>
                        <span class="text-gray-700">January 21, 2020</span>
                    </p>
                    <p class="text-xs md:text-sm text-gray-600 mt-2">
                        <span class="font-semibold text-blue-600">Valid Until:</span>
                        <span class="text-gray-700">January 21, 2022</span>
                    </p>
                </div>
            </div>
        </div>



        <!-- Certificate 4: Fresh Tuna Loin -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8 mb-8">
            <div class="bg-white p-4 md:p-6 rounded-lg shadow-md hover:shadow-lg transition flex items-center justify-center min-h-64 md:min-h-80 order-2 md:order-1">
                <img src="{{ asset('images/certificates/1_SKP-skp Tuna Loin Segar.jpg') }}" alt="Certificate of Good Manufacturing Practices - Fresh Tuna Loin" class="w-full h-auto object-contain rounded-lg">
            </div>

            <div class="bg-white p-4 md:p-6 rounded-lg shadow-md hover:shadow-lg transition order-1 md:order-2">
                <div class="mb-4 flex justify-center md:justify-start">
                </div>

                <h3 class="text-lg md:text-2xl font-bold text-blue-600 mb-3 md:mb-4">Certificate of Good Manufacturing Practices</h3>

                <p class="text-gray-600 text-sm md:text-base mb-4 md:mb-6 text-justify">Fresh Tuna Loin - Certificate No. 13803/11/SKP/SG/T/2020. Issued by the Ministry of Marine Affairs and Fisheries, Directorate General of Product Competitiveness. Processing steps include: Receiving, Processing, Chilling, Packing/Labelling, Chill Storing, Stuffing. Ranking: B. Issued in Jakarta on 21 January 2020, valid until 21 January 2022.</p>

                <div class="mb-4 md:mb-6 p-3 md:p-4 bg-blue-50 rounded-lg">
                </div>
            </div>
        </div>

        <!-- Certificate 5: HACCP Training -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8 mb-8">
            <div class="bg-white p-4 md:p-6 rounded-lg shadow-md hover:shadow-lg transition flex items-center justify-center min-h-64 md:min-h-80">
                <img src="{{ asset('images/certificates/1.jpg') }}" alt="HACCP Training Certificate - Muhammad Iqbal" class="w-full h-auto object-contain rounded-lg">
            </div>

            <div class="bg-white p-4 md:p-6 rounded-lg shadow-md hover:shadow-lg transition">
                <div class="mb-4 flex justify-center md:justify-start">
                </div>

                <h3 class="text-lg md:text-2xl font-bold text-blue-600 mb-3 md:mb-4">HACCP Training Certificate</h3>

                <p class="text-gray-600 text-sm md:text-base mb-4 md:mb-6 text-justify">Personal Training for HACCP (Hazard Analysis Critical Control Point) - Certificate No. 009-01-FSM-18/MNI-II. Awarded to Muhammad Iqbal for successfully completing the training. Organized by PT. Mina Maritim Indonesia in Banda Aceh on 25 February 2018. Trainer: Ahmad Qomarudin, S.T. Chief Executive Officer: Fa'iz Alhamdani Buntoro S.Pi.</p>
            </div>
        </div>

        <!-- Certificate 6: ISO 22000:2005 Training -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8 mb-8">
            <div class="bg-white p-4 md:p-6 rounded-lg shadow-md hover:shadow-lg transition flex items-center justify-center min-h-64 md:min-h-80 order-2 md:order-1">
                <img src="{{ asset('images/certificates/2.jpg') }}" alt="ISO 22000:2005 Food Safety Management System Training Certificate - Muhammad Iqbal" class="w-full h-auto object-contain rounded-lg">
            </div>

            <div class="bg-white p-4 md:p-6 rounded-lg shadow-md hover:shadow-lg transition order-1 md:order-2">
                <div class="mb-4 flex justify-center md:justify-start">
                </div>

                <h3 class="text-lg md:text-2xl font-bold text-blue-600 mb-3 md:mb-4">ISO 22000:2005 Food Safety Management System Training Certificate</h3>

                <p class="text-gray-600 text-sm md:text-base mb-4 md:mb-6 text-justify">Personal Training for Food Safety Management System Based on ISO 22000:2005 - Certificate No. 009-01-FSM-18/MNI-II. Awarded to Muhammad Iqbal for successfully completing the training. Organized by PT. Mina Maritim Indonesia in Banda Aceh on 25 February 2018. Trainer: Ahmad Qomarudin, S.T. Chief Executive Officer: Fa'iz Alhamdani Buntoro S.Pi.</p>
            </div>
        </div>

        <!-- Certificate 7: Location Permit (Izin Lokasi) -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8 mb-8">
            <div class="bg-white p-4 md:p-6 rounded-lg shadow-md hover:shadow-lg transition flex items-center justify-center min-h-64 md:min-h-80">
                <img src="{{ asset('images/certificates/4.jpg') }}" alt="Location Permit - Izin Lokasi" class="w-full h-auto object-contain rounded-lg">
            </div>

            <div class="bg-white p-4 md:p-6 rounded-lg shadow-md hover:shadow-lg transition">
                <div class="mb-4 flex justify-center md:justify-start">
                    <svg class="w-12 h-12 md:w-16 md:h-16 text-blue-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                    </svg>
                </div>

                <h3 class="text-lg md:text-2xl font-bold text-blue-600 mb-3 md:mb-4">Location Permit (Izin Lokasi)</h3>

                <p class="text-gray-600 text-sm md:text-base mb-4 md:mb-6 text-justify">Issued by the Government of the Republic of Indonesia through the OSS (Online Single Submission) System. Company: CV TATA NIAGA LESTARI. Business Registration Number: 9120301921725. Location: Jl. TWK. Abd. Aziz No. 32, Merduati, Kuta Raja, Kota Banda Aceh, Aceh. Land Area: 64 Ha. Business Activities: Fishery, Textile Industry, Transportation Equipment Industry, Processing Industry, Machine Repair, Trading, Procurement of Goods and Services. Coordinates: -6.4582626, 107.5163313.</p>

                <div class="mb-4 md:mb-6 p-3 md:p-4 bg-blue-50 rounded-lg">
                    <p class="text-xs md:text-sm text-gray-600">
                        <span class="font-semibold text-blue-600">Issued Date:</span>
                        <span class="text-gray-700">September 12, 2019</span>
                    </p>
                </div>
            </div>
        </div>

        <!-- Certificate 8: Fresh Tuna (No. 13802) -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8 mb-8">
            <div class="bg-white p-4 md:p-6 rounded-lg shadow-md hover:shadow-lg transition flex items-center justify-center min-h-64 md:min-h-80 order-2 md:order-1">
                <img src="{{ asset('images/certificates/3_SKP-skp Tuna Segar.jpg') }}" alt="Certificate of Good Manufacturing Practices - Fresh Tuna" class="w-full h-auto object-contain rounded-lg">
            </div>

            <div class="bg-white p-4 md:p-6 rounded-lg shadow-md hover:shadow-lg transition order-1 md:order-2">
                <div class="mb-4 flex justify-center md:justify-start">
                    <svg class="w-12 h-12 md:w-16 md:h-16 text-blue-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                    </svg>
                </div>

                <h3 class="text-lg md:text-2xl font-bold text-blue-600 mb-3 md:mb-4">Certificate of Good Manufacturing Practices</h3>

                <p class="text-gray-600 text-sm md:text-base mb-4 md:mb-6 text-justify">Fresh Tuna (Tuna Segar) - Certificate No. 13802/11/SKP/SG/T/2020 (P.: 00015870). Issued by the Ministry of Marine Affairs and Fisheries, Directorate General of Product Competitiveness. Fish Processing Plant: CV. TATA NIAGA LESTARI. Address: Jl. TWK Abdul Aziz No.32, Kel. Merduati, Kec. Kuta Raja, Kota Banda Aceh. Processing Steps: Receiving, Processing, Chilling, Packing/Labelling, Chill Storing, Stuffing. Ranking: B.</p>

                <div class="mb-4 md:mb-6 p-3 md:p-4 bg-blue-50 rounded-lg">
                    <p class="text-xs md:text-sm text-gray-600">
                        <span class="font-semibold text-blue-600">Issued Date:</span>
                        <span class="text-gray-700">January 21, 2020</span>
                    </p>
                    <p class="text-xs md:text-sm text-gray-600 mt-2">
                        <span class="font-semibold text-blue-600">Valid Until:</span>
                        <span class="text-gray-700">January 21, 2022</span>
                    </p>
                </div>
            </div>
        </div>

        <!-- Certificate 9: GMP Training -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8 mb-8">
            <div class="bg-white p-4 md:p-6 rounded-lg shadow-md hover:shadow-lg transition flex items-center justify-center min-h-64 md:min-h-80">
                <img src="{{ asset('images/certificates/3.jpg') }}" alt="GMP Training Certificate - Muhammad Iqbal" class="w-full h-auto object-contain rounded-lg">
            </div>

            <div class="bg-white p-4 md:p-6 rounded-lg shadow-md hover:shadow-lg transition">
                <div class="mb-4 flex justify-center md:justify-start">
                    <svg class="w-12 h-12 md:w-16 md:h-16 text-blue-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                    </svg>
                </div>

                <h3 class="text-lg md:text-2xl font-bold text-blue-600 mb-3 md:mb-4">GMP (Good Manufacturing Practice) Training Certificate</h3>

                <p class="text-gray-600 text-sm md:text-base mb-4 md:mb-6 text-justify">Personal Training for GMP (Good Manufacturing Practice) - Certificate No. 009-01-FSM-18/MNI-II. Awarded to Muhammad Iqbal for successfully completing the training. Organized by PT. Mina Maritim Indonesia in Banda Aceh on 25 February 2018. Trainer: Ahmad Qomarudin, S.T. Chief Executive Officer: Fa'iz Alhamdani Buntoro S.Pi.</p>

                <div class="mb-4 md:mb-6 p-3 md:p-4 bg-blue-50 rounded-lg">
                    <p class="text-xs md:text-sm text-gray-600">
                        <span class="font-semibold text-blue-600">Training Date:</span>
                        <span class="text-gray-700">February 25, 2018</span>
                    </p>
                    <p class="text-xs md:text-sm text-gray-600 mt-2">
                        <span class="font-semibold text-blue-600">Organized by:</span>
                        <span class="text-gray-700">PT. Mina Maritim Indonesia</span>
                    </p>
                </div>
            </div>
        </div>

        <!-- Certificate 10: SIUP (Trading License) -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8 mb-8">
            <div class="bg-white p-4 md:p-6 rounded-lg shadow-md hover:shadow-lg transition flex items-center justify-center min-h-64 md:min-h-80 order-2 md:order-1">
                <img src="{{ asset('images/certificates/5.jpg') }}" alt="SIUP - Surat Izin Usaha Perdagangan" class="w-full h-auto object-contain rounded-lg">
            </div>

            <div class="bg-white p-4 md:p-6 rounded-lg shadow-md hover:shadow-lg transition order-1 md:order-2">
                <div class="mb-4 flex justify-center md:justify-start">
                    <svg class="w-12 h-12 md:w-16 md:h-16 text-blue-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                    </svg>
                </div>

                <h3 class="text-lg md:text-2xl font-bold text-blue-600 mb-3 md:mb-4">SIUP - Small Trading Business License</h3>

                <p class="text-gray-600 text-sm md:text-base mb-4 md:mb-6 text-justify">Surat Izin Usaha Perdagangan (SIUP) - Kecil. License No. 1073-1200/01.01/PK/X/2017.P-II. Issued by Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu (DPM-PTSP) Kota Banda Aceh. Company: CV. TATA NIAGA LESTARI. Person in Charge: Muhammad Iqbal. Address: Jl. TWK. Abd. Aziz, No. 32, Gp. Merduati, Kec. Kuta Raja, Kota Banda Aceh. Phone: 0651-23276. Capital: Rp. 200.000.000. Category: Supplier, Export and Import.</p>

                <div class="mb-4 md:mb-6 p-3 md:p-4 bg-blue-50 rounded-lg">
                    <p class="text-xs md:text-sm text-gray-600">
                        <span class="font-semibold text-blue-600">Issued Date:</span>
                        <span class="text-gray-700">October 5, 2017</span>
                    </p>
                    <p class="text-xs md:text-sm text-gray-600 mt-2">
                        <span class="font-semibold text-blue-600">Issued In:</span>
                        <span class="text-gray-700">Banda Aceh</span>
                    </p>
                    <p class="text-xs md:text-sm text-gray-600 mt-2">
                        <span class="font-semibold text-blue-600">Business Activities:</span>
                        <span class="text-gray-700">Wholesale trading of food, beverages, fishery products, and various goods including technical equipment, computers, electronics, and more.</span>
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
    <script>
        // Hide mobile drawer toggle when needed
        const drawerToggle = document.getElementById('drawer-toggle');
        const navbarDefault = document.getElementById('navbar-default');

        drawerToggle.addEventListener('click', function() {
            const isHidden = navbarDefault.classList.contains('hidden');
        });
    </script>
</body>
</html>
