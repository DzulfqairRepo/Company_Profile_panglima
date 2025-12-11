@extends('index')

@section('title', 'Home - TATA NIAGA LESTARI')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-cover bg-center py-12 md:py-20" style="background-image: url('{{ asset('images/nelayan2.png') }}')">
        <div class="absolute inset-0 bg-black/40 backdrop-blur-sm"></div>
        <div class="relative max-w-screen-xl mx-auto px-4 text-center text-white">
            <img src="{{ asset('images/logocv2.png') }}" alt="TATA NIAGA LESTARI logo" class="h-40 w-40 md:h-80 md:w-80 object-contain rounded-full mx-auto mb-4 md:mb-6 bg-white p-2 md:p-4">
            <h1 class="text-3xl md:text-5xl font-bold mb-3 md:mb-4">CV. TATA NIAGA LESTARI</h1>
            <p class="text-sm md:text-xl mb-6 md:mb-8 px-2">CV. TATA NIAGA LESTARI is Work Export, Import and Trading By applying the advanced technology and High Quality Product, we are committed to providing the best quality seafood & Agriculture product by operating strict practices of food hygiene, sanitation and quality control</p>
        </div>
    </section>

    <!-- Banner Section -->
    <section class="max-w-screen-xl mx-auto px-4 py-8 md:py-12">
        <div class="w-full rounded-lg shadow-md overflow-hidden">
            <img src="{{ asset('images/banner.jpeg') }}" alt="Company Banner" class="w-full h-auto object-cover">
        </div>
    </section>

    <!-- Store Location and Interior Photos Section -->
    <section class="max-w-screen-xl mx-auto px-4 py-12 md:py-16">
        <h2 class="text-2xl md:text-4xl font-bold text-center text-blue-600 mb-8 md:mb-12">Our Store</h2>
        <div class="flex justify-center">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8 mb-8 w-full md:w-4/5 lg:w-3/4">
                <!-- Store Location Photo -->
                <div class="bg-white rounded-lg shadow-md hover:shadow-lg transition overflow-hidden cursor-pointer" onclick="openModal('{{ asset('images/Storelocation.jpeg') }}', 'Store Location')">
                    <img src="{{ asset('images/Storelocation.jpeg') }}" alt="Store Location" class="w-full h-64 md:h-72 object-cover">
                    <div class="p-4 md:p-6">
                        <h3 class="text-lg md:text-xl font-bold text-blue-600 mb-2">Store Location</h3>
                        <p class="text-gray-600 text-sm md:text-base">Jl. Raya Kalimukya No. 4, Kebunduren, Cilodong, Depok, Jabar 16413</p>
                    </div>
                </div>

                <!-- Store Interior Photo 1 -->
                <div class="bg-white rounded-lg shadow-md hover:shadow-lg transition overflow-hidden cursor-pointer" onclick="openModal('{{ asset('images/interior1.jpeg') }}', 'Freezer Storage')">
                    <img src="{{ asset('images/interior1.jpeg') }}" alt="Store Interior 1" class="w-full h-64 md:h-72 object-cover">
                    <div class="p-4 md:p-6">
                        <h3 class="text-lg md:text-xl font-bold text-blue-600 mb-2">Freezer Storage</h3>
                        <p class="text-gray-600 text-sm md:text-base">State-of-the-art refrigeration facilities for optimal product preservation</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Image Modal -->
    <div id="imageModal" class="hidden fixed inset-0 bg-black/75 z-50 flex items-center justify-center p-4" onclick="closeModal(event)">
        <div class="bg-white rounded-lg shadow-xl max-w-4xl w-full max-h-[90vh] flex flex-col" onclick="event.stopPropagation()">
            <!-- Modal Header -->
            <div class="flex justify-between items-center p-4 md:p-6 border-b border-gray-200">
                <h3 id="modalTitle" class="text-lg md:text-2xl font-bold text-blue-600">Image Title</h3>
                <button onclick="closeModal()" class="text-gray-500 hover:text-gray-700 transition">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            <!-- Modal Body -->
            <div class="flex-1 overflow-auto flex items-center justify-center">
                <img id="modalImage" src="" alt="Full Image" class="w-full h-full object-contain">
            </div>
        </div>
    </div>

    <script>
        function openModal(imageSrc, imageTitle) {
            const modal = document.getElementById('imageModal');
            const modalImage = document.getElementById('modalImage');
            const modalTitle = document.getElementById('modalTitle');

            modalImage.src = imageSrc;
            modalTitle.textContent = imageTitle;
            modal.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        function closeModal(event) {
            // If clicked on the modal background, close it
            if (event && event.target.id !== 'imageModal') {
                return;
            }

            const modal = document.getElementById('imageModal');
            modal.classList.add('hidden');
            document.body.style.overflow = 'auto';
        }

        // Close modal when pressing Escape key
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') {
                closeModal();
            }
        });
    </script>

    <!-- Content Section -->
    <section class="max-w-screen-xl mx-auto px-4 py-12 md:py-16">
         <h2 class="text-2xl md:text-4xl font-bold text-center text-blue-600 mb-8 md:mb-12">Vision & Mission</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8 mb-8">
            <div class="bg-white p-4 md:p-6 rounded-lg shadow-md hover:shadow-lg transition">
                <div class="mb-4 flex justify-center">
                    <svg class="w-12 h-12 md:w-16 md:h-16 text-blue-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M4.998 7.78C6.729 6.345 9.198 5 12 5c2.802 0 5.27 1.345 7.002 2.78a12.713 12.713 0 0 1 2.096 2.183c.253.344.465.682.618.997.14.286.284.658.284 1.04s-.145.754-.284 1.04a6.6 6.6 0 0 1-.618.997 12.712 12.712 0 0 1-2.096 2.183C17.271 17.655 14.802 19 12 19c-2.802 0-5.27-1.345-7.002-2.78a12.712 12.712 0 0 1-2.096-2.183 6.6 6.6 0 0 1-.618-.997C2.144 12.754 2 12.382 2 12s.145-.754.284-1.04c.153-.315.365-.653.618-.997A12.714 12.714 0 0 1 4.998 7.78ZM12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <h3 class="text-xl md:text-2xl font-bold text-blue-600 mb-4 text-center">Vision</h3>
                <p class="text-gray-600 text-sm md:text-base text-justify">To become a preferred and competent fishery supplier of Aceh, Indonesia by carrying out the principle of trust & integrity with mastering domestic and foreign marketing sources and networks through human resources and professional management.</p>
            </div>
            <div class="bg-white p-4 md:p-6 rounded-lg shadow-md hover:shadow-lg transition">
                <div class="mb-4 flex justify-center">
                    <svg class="w-12 h-12 md:w-16 md:h-16 text-blue-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M8 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1h2a2 2 0 0 1 2 2v15a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h2Zm6 1h-4v2H9a1 1 0 0 0 0 2h6a1 1 0 1 0 0-2h-1V4Zm-3 8a1 1 0 1 0 0-6 3 3 0 0 0 0 6Z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <h3 class="text-xl md:text-2xl font-bold text-blue-600 mb-4 text-center">Mission</h3>
                <ul class="text-gray-600 text-sm md:text-base space-y-3">
                    <li class="flex items-start text-justify">
                        <span class="text-blue-600 mr-3 flex-shrink-0">•</span>
                        <span>Conduct a general trading that handles a wide range of the highest Indonesia quality fishery</span>
                    </li>
                    <li class="flex items-start text-justify">
                        <span class="text-blue-600 mr-3 flex-shrink-0">•</span>
                        <span>Carry out local and cross-country trade transactions based on a strong trust</span>
                    </li>
                    <li class="flex items-start text-justify">
                        <span class="text-blue-600 mr-3 flex-shrink-0">•</span>
                        <span>Bringing solutions to fulfill our customer's request with competitive pricing & response time</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Milestone Section -->
    <section class="max-w-screen-xl mx-auto px-4 py-12 md:py-16">
        <h2 class="text-2xl md:text-4xl font-bold text-center text-blue-600 mb-8 md:mb-12">Milestone</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-8 mb-8">
            <div class="bg-white p-4 md:p-6 rounded-lg shadow-md hover:shadow-lg transition">
                <div class="mb-4 flex justify-center">
                    <svg class="w-12 h-12 md:w-16 md:h-16 text-blue-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M4 4a1 1 0 0 1 1-1h14a1 1 0 1 1 0 2v14a1 1 0 1 1 0 2H5a1 1 0 1 1 0-2V5a1 1 0 0 1-1-1Zm5 2a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H9Zm6 0a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1h-1Zm-5 4a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1v-1a1 1 0 0 0-1-1H9Zm5 0a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1v-1a1 1 0 0 0-1-1h-1Zm-3 4a2 2 0 0 0-2 2v3h2v-3h2v3h2v-3a2 2 0 0 0-2-2h-2Z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <div>
                    <h3 class="text-lg md:text-xl font-bold text-blue-600 mb-2 text-center">The company is officially established</h3>
                </div>
                <div>
                    <h4 class="text-base md:text-lg font-bold text-blue-600 mb-4 text-center">2007-2010</h4>
                </div>
                <div>
                    <p class="text-gray-600 text-sm md:text-base text-justify">The company is established by two experts with its aim to be reliable partners in logistic field to help Aceh government in reconstruct Aceh's city after a catastrophic tsunami hit that region in 2004.</p>
                </div>
            </div>
            <div class="bg-white p-4 md:p-6 rounded-lg shadow-md hover:shadow-lg transition">
                <div class="mb-4 flex justify-center">
                    <svg class="w-12 h-12 md:w-16 md:h-16 text-blue-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M13.4228 7.00024c-2.2266.01465-4.24648.66154-5.73389 1.53827-.75153.44298-1.39556.9614-1.86395 1.51679-.05394.0639-.10674.1298-.1579.1975L3.70711 8.29288c-.39053-.39052-1.02369-.39052-1.41422 0-.39052.39053-.39052 1.02369 0 1.41422L4.58579 12l-2.2929 2.2929c-.39052.3905-.39052 1.0237 0 1.4142.39053.3905 1.02369.3905 1.41422 0l1.95995-1.96c.05116.0677.10396.1336.1579.1976.46839.5554 1.11242 1.0738 1.86395 1.5168 1.48608.8759 3.50369 1.5224 5.72789 1.5382-.1119-.1811-.2137-.3588-.2975-.5251-.8831-1.5257-1.4054-2.8736-1.4079-4.3386-.0025-1.4614.5132-2.89857 1.4025-4.59935.0088-.01699.0182-.03371.028-.05015.0924-.15428.1875-.31964.2809-.48626Z"/>
                        <path fill="currentColor" fill-rule="evenodd" d="M15.6562 16.7394c1.3837-.3378 2.5644-.962 3.5044-1.6203 1.3918-.9748 2.3082-2.0596 2.6505-2.5342.2519-.3493.2519-.8206 0-1.1698-.3423-.4746-1.2587-1.55947-2.6505-2.53422-.9597-.6721-2.1702-1.30857-3.5914-1.64108-.2021.38166-.4544.84304-.696 1.24836-.8277 1.58764-1.1634 2.67234-1.1618 3.64444.0017.9646.3363 1.9584 1.1534 3.3652.0112.0193.0218.039.0317.059.1641.332.4642.7778.7597 1.1826Zm.3305-6.1117c-.5523 0-1 .4477-1 1s.4477 1 1 1h.01c.5523 0 1-.4477 1-1s-.4477-1-1-1h-.01Z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <div>
                    <h3 class="text-lg md:text-xl font-bold text-blue-600 mb-2 text-center">Fisheries Export</h3>
                </div>
                <div>
                    <h4 class="text-base md:text-lg font-bold text-blue-600 mb-4 text-center">2010-2012</h4>
                </div>
                <div>
                    <p class="text-gray-600 text-sm md:text-base text-justify">We exported lobster, fresh fish & grouper fish seed to Asia market by air in total around 150,000 fish during this period.</p>
                </div>
            </div>
            <div class="bg-white p-4 md:p-6 rounded-lg shadow-md hover:shadow-lg transition">
                <div class="mb-4 flex justify-center">
                    <svg class="w-12 h-12 md:w-16 md:h-16 text-blue-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12.013 6.175 7.006 9.369l5.007 3.194-5.007 3.193L2 12.545l5.006-3.193L2 6.175l5.006-3.194 5.007 3.194ZM6.981 17.806l5.006-3.193 5.006 3.193L11.987 21l-5.006-3.194Z"/>
                        <path d="m12.013 12.545 5.006-3.194-5.006-3.176 4.98-3.194L22 6.175l-5.007 3.194L22 12.562l-5.007 3.194-4.98-3.211Z"/>
                    </svg>
                </div>
                <div>
                    <h3 class="text-lg md:text-xl font-bold text-blue-600 mb-2 text-center">Expansion Phase</h3>
                </div>
                <div>
                    <h4 class="text-base md:text-lg font-bold text-blue-600 mb-4 text-center">2018-2020</h4>
                </div>
                <div>
                    <p class="text-gray-600 text-sm md:text-base text-justify">We strategically expand our business field from domestic to global market. We periodically send decorative fish to domestic market & fresh fish, bamboo, & coconut to global market.</p>
                </div>
            </div>
        </div>
        <div class="flex justify-center">
            <div class="bg-white p-4 md:p-6 rounded-lg shadow-md hover:shadow-lg transition w-full md:w-1/3">
                <div class="mb-4 flex justify-center">
                    <svg class="w-12 h-12 md:w-16 md:h-16 text-blue-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M12 2c5.523 0 10 4.477 10 10s-4.477 10-10 10S2 17.523 2 12 6.477 2 12 2zm0 2c-4.418 0-8 3.582-8 8s3.582 8 8 8 8-3.582 8-8-3.582-8-8-8zm1 13h-2v-2h2v2zm0-4h-2V7h2v6z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <div>
                    <h3 class="text-lg md:text-xl font-bold text-blue-600 mb-2 text-center">Company Revival</h3>
                </div>
                <div>
                    <h4 class="text-base md:text-lg font-bold text-blue-600 mb-4 text-center">2020-2022</h4>
                </div>
                <div>
                    <p class="text-gray-600 text-sm md:text-base text-justify">The company faced temporary closure during the COVID-19 pandemic. With resilience and determination, we successfully revived our operations in 2022, resuming our commitment to providing quality seafood and agriculture products to our valued customers worldwide.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Market Infographic Section -->
    <section class="max-w-screen-xl mx-auto px-4 py-12 md:py-16">
        <h2 class="text-2xl md:text-4xl font-bold text-center text-blue-600 mb-8 md:mb-12">Market Infographic</h2>
        <div class="mb-8 md:mb-12 flex justify-center">
            <img src="{{ asset('images/map1.png') }}" alt="Market Map" class="w-full max-w-2xl h-auto rounded-lg shadow-md">
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-8">
            <div class="bg-white p-4 md:p-6 rounded-lg shadow-md hover:shadow-lg transition">
                <div class="mb-4 flex justify-center">
                    <div class="flex gap-2">
                        <img src="https://flagcdn.com/w80/my.png" alt="Malaysia flag" class="w-8 h-6 object-cover rounded">
                        <img src="https://flagcdn.com/w80/sg.png" alt="Singapore flag" class="w-8 h-6 object-cover rounded">
                        <img src="https://flagcdn.com/w80/th.png" alt="Thailand flag" class="w-8 h-6 object-cover rounded">
                    </div>
                </div>
                <div class="mb-4">
                    <h4 class="text-base md:text-lg font-bold text-blue-600 mb-2 text-center">2010-2012</h4>
                    <h3 class="text-lg md:text-xl font-bold text-blue-600 mb-4 text-center">Malaysia, Singapore, Thailand</h3>
                </div>
                <div>
                    <p class="text-gray-600 text-sm md:text-base text-justify">Around 150,000 seed grouper fish and other fresh fish were exported to those countries.</p>
                </div>
            </div>
            <div class="bg-white p-4 md:p-6 rounded-lg shadow-md hover:shadow-lg transition">
                <div class="mb-4 flex justify-center">
                    <img src="https://flagcdn.com/w80/id.png" alt="Indonesia flag" class="w-8 h-6 object-cover rounded">
                </div>
                <div class="mb-4">
                    <h4 class="text-base md:text-lg font-bold text-blue-600 mb-2 text-center">2018-2019</h4>
                    <h3 class="text-lg md:text-xl font-bold text-blue-600 mb-4 text-center">Indonesia Market</h3>
                </div>
                <div>
                    <p class="text-gray-600 text-sm md:text-base text-justify">Due to the high demand of decorative fish, we aim to be a leading market in decorative fish with a weekly basis 500 fish for a year.</p>
                </div>
            </div>
            <div class="bg-white p-4 md:p-6 rounded-lg shadow-md hover:shadow-lg transition">
                <div class="mb-4 flex justify-center">
                    <img src="https://flagcdn.com/w80/tr.png" alt="Turkey flag" class="w-8 h-6 object-cover rounded">
                </div>
                <div class="mb-4">
                    <h4 class="text-base md:text-lg font-bold text-blue-600 mb-2 text-center">2020</h4>
                    <h3 class="text-lg md:text-xl font-bold text-blue-600 mb-4 text-center">Turkey</h3>
                </div>
                <div>
                    <p class="text-gray-600 text-sm md:text-base text-justify">We expand our market to global scale and we successfully exported 3,426 raw bamboo poles to Turkey, CIF Izmir port, from Pidie, Aceh, Indonesia in the beginning of this year.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Top Markets Section -->
    <section class="max-w-screen-xl mx-auto px-4 py-12 md:py-16">
        <h2 class="text-2xl md:text-4xl font-bold text-center text-blue-600 mb-8 md:mb-12">Top Markets</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8">
            <!-- Markets Image Card -->
            <div class="bg-white p-4 md:p-6 rounded-lg shadow-md hover:shadow-lg transition flex items-center justify-center">
                <img src="{{ asset('images/map2.png') }}" alt="Top Markets Map" class="w-full h-auto rounded-lg object-contain">
            </div>

            <!-- Markets List Card -->
            <div class="bg-white p-4 md:p-6 rounded-lg shadow-md hover:shadow-lg transition">
                <h3 class="text-xl md:text-2xl font-bold text-blue-600 mb-6 md:mb-8 text-center">Our Key Markets</h3>
                <div class="space-y-3 md:space-y-6">
                    <div class="flex items-center p-3 md:p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition">
                        <img src="https://flagcdn.com/w80/cn.png" alt="China flag" class="w-10 h-7 md:w-12 md:h-8 object-cover rounded mr-3 md:mr-4">
                        <span class="text-base md:text-lg font-semibold text-gray-700">China</span>
                    </div>
                    <div class="flex items-center p-3 md:p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition">
                        <img src="https://flagcdn.com/w80/us.png" alt="United States flag" class="w-10 h-7 md:w-12 md:h-8 object-cover rounded mr-3 md:mr-4">
                        <span class="text-base md:text-lg font-semibold text-gray-700">United States</span>
                    </div>
                    <div class="flex items-center p-3 md:p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition">
                        <img src="https://flagcdn.com/w80/eu.png" alt="Europe flag" class="w-10 h-7 md:w-12 md:h-8 object-cover rounded mr-3 md:mr-4">
                        <span class="text-base md:text-lg font-semibold text-gray-700">Europe</span>
                    </div>
                    <div class="flex items-center p-3 md:p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition">
                        <img src="https://flagcdn.com/w80/kr.png" alt="South Korea flag" class="w-10 h-7 md:w-12 md:h-8 object-cover rounded mr-3 md:mr-4">
                        <span class="text-base md:text-lg font-semibold text-gray-700">South Korea</span>
                    </div>
                    <div class="flex items-center p-3 md:p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition">
                        <img src="https://flagcdn.com/w80/jp.png" alt="Japan flag" class="w-10 h-7 md:w-12 md:h-8 object-cover rounded mr-3 md:mr-4">
                        <span class="text-base md:text-lg font-semibold text-gray-700">Japan</span>
                    </div>
                    <div class="flex items-center p-3 md:p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition">
                        <img src="https://flagcdn.com/w80/sa.png" alt="Middle East flag" class="w-10 h-7 md:w-12 md:h-8 object-cover rounded mr-3 md:mr-4">
                        <span class="text-base md:text-lg font-semibold text-gray-700">Middle East</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
