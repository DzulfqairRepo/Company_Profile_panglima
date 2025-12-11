@extends('index')

@section('title', 'Certifications - TATA NIAGA LESTARI')

@section('content')
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
@endsection
