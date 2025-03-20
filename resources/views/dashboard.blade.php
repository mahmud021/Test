<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Boldonse&display=swap" rel="stylesheet">
</head>
<body class="bg-gray-50">
<script>
    // Inject chart data from Laravel
    window.chartData = {
        categories: @json($categories), // Replace with your controller data
        amounts: @json($amounts) // Replace with your controller data
    };
</script>
<div class="relative min-h-screen">
    <!-- Header Section -->
    <header class="flex flex-col items-center justify-center py-12 bg-white shadow-md">
        <h1 class="boldonse-regular text-5xl text-gray-900">COVID‑19 in Nigeria</h1>
        <p class="boldonse-regular text-xl text-gray-700 mt-4">
            State‑Level Trends and Demographic Insights
        </p>
    </header>

    <!-- Team Section -->
    <section class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900">Our Team</h2>
                <p class="mt-4 text-lg text-gray-600">
                    Creative people driving innovation
                </p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Team Member 1 -->
                <div class="text-center">
                    <img class="rounded-full w-32 h-32 mx-auto object-cover"
                         src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=320&amp;h=320&amp;q=80"
                         alt="Mahmud Modibbo">
                    <h3 class="mt-4 text-lg font-bold text-gray-800">Mahmud Modibbo</h3>
                    <p class="text-sm text-gray-600">Team Leader &amp; Backend Engineer</p>
                </div>
                <!-- Team Member 2 -->
                <div class="text-center">
                    <img class="rounded-full w-32 h-32 mx-auto object-cover"
                         src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=320&amp;h=320&amp;q=80"
                         alt="Fatimah Asterin">
                    <h3 class="mt-4 text-lg font-bold text-gray-800">Fatimah Asterin</h3>
                    <p class="text-sm text-gray-600">Data Engineer</p>
                </div>
                <!-- Team Member 3 -->
                <div class="text-center">
                    <img class="rounded-full w-32 h-32 mx-auto object-cover"
                         src="https://images.unsplash.com/photo-1548142813-c348350df52b?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=320&amp;h=320&amp;q=80"
                         alt="Dr. Emerson">
                    <h3 class="mt-4 text-lg font-bold text-gray-800">Dr. Emerson</h3>
                    <p class="text-sm text-gray-600">UI/UX Designer</p>
                </div>
                <!-- Team Member 4 -->
                <div class="text-center">
                    <img class="rounded-full w-32 h-32 mx-auto object-cover"
                         src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=320&amp;h=320&amp;q=80"
                         alt="Dr. Gabriel Ayem">
                    <h3 class="mt-4 text-lg font-bold text-gray-800">Dr. Gabriel Ayem</h3>
                    <p class="text-sm text-gray-600">CSC 440 Instructor</p>
                </div>
            </div>
            <div class="mt-12 flex justify-center">
                <div class="border border-gray-200 py-2 px-3 rounded-full">
                    <div class="flex items-center gap-x-3">
                        <span class="text-sm text-gray-500">Want to work with us?</span>
                        <a class="inline-flex items-center gap-x-2 text-sm font-medium text-blue-600 hover:text-blue-500 focus:outline-none focus:text-blue-500" href="#">
                            We are hiring
                            <svg class="shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Impact Analysis Section -->
    <section class="py-12 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
            <div>
                <h2 class="text-2xl font-bold text-gray-800">COVID‑19 Impact Analysis</h2>
                <p class="mt-4 text-gray-700">
                    COVID‑19, caused by the SARS‑CoV‑2 virus, has reshaped global health and economies. Our data visualizations provide comprehensive insights into case trends, recovery rates, and demographic impacts across regions—supporting informed public health strategies and policy decisions.
                </p>
            </div>
            <div class="flex items-center justify-center">
                <img src="{{ asset('images/5.png') }}" alt="COVID‑19 Data Visualization" class="object-cover">
            </div>
        </div>
    </section>

    <!-- Data Sources Section -->
    <section class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-extrabold text-gray-900">Trusted Data Sources</h2>
                <p class="mt-4 text-lg text-gray-600">
                    We rely on reputable organizations to ensure our COVID‑19 insights are based on accurate, up‑to‑date data.
                </p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
                <!-- NCDC -->
                <div class="flex flex-col items-center text-center">
                    <img src="{{ asset('images/12.jpg') }}" alt="NCDC Logo" class="w-24 h-24 object-cover">
                    <h3 class="mt-4 text-lg font-bold text-gray-800">Nigeria Centre for Disease Control (NCDC)</h3>
                    <p class="mt-2 text-sm text-gray-600">Official data and guidelines for COVID‑19 response in Nigeria.</p>
                </div>
                <!-- NBS -->
                <div class="flex flex-col items-center text-center">
                    <img src="{{ asset('images/11.jpeg') }}" alt="NBS Logo" class="w-24 h-24 object-cover">
                    <h3 class="mt-4 text-lg font-bold text-gray-800">National Bureau of Statistics (NBS)</h3>
                    <p class="mt-2 text-sm text-gray-600">Comprehensive demographic and economic data for Nigeria.</p>
                </div>
                <!-- HDX -->
                <div class="flex flex-col items-center text-center">
                    <img src="{{ asset('images/10.png') }}" alt="HDX Logo" class="w-24 h-24 object-cover">
                    <h3 class="mt-4 text-lg font-bold text-gray-800">Humanitarian Data Exchange (HDX)</h3>
                    <p class="mt-2 text-sm text-gray-600">Global humanitarian data for crisis response and analysis.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Tech Stack Section -->
    <section class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-extrabold text-gray-900">Tech Stack</h2>
                <p class="mt-4 text-lg text-gray-600">
                    Built with modern tools to deliver a robust, efficient, and responsive experience.
                </p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
                <!-- Laravel -->
                <div class="flex flex-col items-center text-center">
                    <img src="{{ asset('images/laravel.png') }}" alt="Laravel Logo" class="w-24 h-24 object-cover">
                    <h3 class="mt-4 text-lg font-bold text-gray-800">Laravel</h3>
                    <p class="mt-2 text-sm text-gray-600">
                        A robust PHP framework powering our backend and API services.
                    </p>
                </div>
                <!-- SQLite -->
                <div class="flex flex-col items-center text-center">
                    <img src="{{ asset('images/database.png') }}" alt="SQLite Logo" class="w-24 h-24 object-cover">
                    <h3 class="mt-4 text-lg font-bold text-gray-800">SQLite</h3>
                    <p class="mt-2 text-sm text-gray-600">
                        A lightweight database engine ensuring efficient and reliable data storage.
                    </p>
                </div>
                <!-- Tailwind CSS -->
                <div class="flex flex-col items-center text-center">
                    <img src="{{ asset('images/tailwind.png') }}" alt="Tailwind CSS Logo" class="w-24 h-24 object-cover">
                    <h3 class="mt-4 text-lg font-bold text-gray-800">Tailwind CSS</h3>
                    <p class="mt-2 text-sm text-gray-600">
                        A utility-first CSS framework for crafting responsive, modern designs.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Charts Grid Section -->
    <section class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-5 grid-rows-9 gap-4">
                <div class="col-span-5 text-center font-bold text-xl mb-4">OUR Charts</div>
                <!-- Area Chart -->
                <div class="col-span-3 row-span-4 row-start-2">
                    <div id="hs-single-area-chart" style="height: 300px;"></div>
                </div>
                <!-- Doughnut Chart with Legend -->
                <div class="col-span-2 row-span-4 col-start-4 row-start-2">
                    <div class="flex flex-col items-center">
                        <div id="hs-doughnut-chart"></div>
                        <div class="flex items-center gap-x-4 mt-3">
                            <div class="inline-flex items-center">
                                <span class="w-3 h-3 bg-blue-600 rounded-sm mr-2"></span>
                                <span class="text-[13px] text-gray-600">Income</span>
                            </div>
                            <div class="inline-flex items-center">
                                <span class="w-3 h-3 bg-cyan-500 rounded-sm mr-2"></span>
                                <span class="text-[13px] text-gray-600">Outcome</span>
                            </div>
                            <div class="inline-flex items-center">
                                <span class="w-3 h-3 bg-gray-300 rounded-sm mr-2"></span>
                                <span class="text-[13px] text-gray-600">Others</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Bar Chart -->
                <div class="col-span-2 row-span-4 row-start-6">
                    <div id="chart" style="height: 350px;"></div>
                </div>
                <!-- Pie Chart with Legend -->
                <div class="col-span-3 row-span-4 col-start-3 row-start-6">
                    <div class="p-4 flex flex-col items-center">
                        <div id="hs-pie-chart"></div>
                        <div class="flex items-center gap-x-4 mt-3">
                            <div class="inline-flex items-center">
                                <span class="w-3 h-3 bg-blue-600 rounded-sm mr-2"></span>
                                <span class="text-[13px] text-gray-600">Income</span>
                            </div>
                            <div class="inline-flex items-center">
                                <span class="w-3 h-3 bg-cyan-500 rounded-sm mr-2"></span>
                                <span class="text-[13px] text-gray-600">Outcome</span>
                            </div>
                            <div class="inline-flex items-center">
                                <span class="w-3 h-3 bg-gray-300 rounded-sm mr-2"></span>
                                <span class="text-[13px] text-gray-600">Others</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@vite(['resources/css/app.css', 'resources/js/app.js'])
<script type="module">
    import ApexCharts from 'apexcharts';

    document.addEventListener('DOMContentLoaded', () => {
        try {
            // Bar Chart
            const barOptions = {
                chart: {
                    type: 'bar',
                    height: 350,
                    toolbar: { show: false }
                },
                series: [{
                    name: 'COVID Cases',
                    data: window.chartData.amounts
                }],
                xaxis: {
                    categories: window.chartData.categories,
                    title: { text: 'States' }
                },
                yaxis: {
                    title: { text: 'Number of Cases' }
                },
                colors: ['#3b82f6'],
                responsive: [{
                    breakpoint: 640,
                    options: { chart: { height: 300 } }
                }]
            };
            new ApexCharts(document.querySelector("#chart"), barOptions).render();

            // Area Chart
            const areaOptions = {
                chart: {
                    height: 300,
                    type: 'area',
                    toolbar: { show: false }
                },
                series: [{
                    name: 'Cases Trend',
                    data: window.chartData.amounts
                }],
                xaxis: {
                    categories: window.chartData.categories,
                    title: { text: 'Timeline' }
                },
                colors: ['#10b981'],
                stroke: { curve: 'smooth', width: 2 },
                dataLabels: { enabled: false }
            };
            new ApexCharts(document.querySelector("#hs-single-area-chart"), areaOptions).render();
        } catch (error) {
            console.error('Chart initialization error:', error);
        }
    });

    window.addEventListener('load', () => {
        try {
            // Pie Chart
            new ApexCharts(document.querySelector("#hs-pie-chart"), {
                chart: { type: 'pie', height: 300 },
                series: window.chartData.amounts,
                labels: window.chartData.categories,
                colors: ['#3b82f6', '#10b981', '#f59e0b'],
                legend: { position: 'bottom' }
            }).render();

            // Doughnut Chart
            new ApexCharts(document.querySelector("#hs-doughnut-chart"), {
                chart: { type: 'donut', height: 250 },
                series: window.chartData.amounts,
                labels: window.chartData.categories,
                colors: ['#3b82f6', '#10b981', '#f59e0b'],
                plotOptions: { pie: { donut: { labels: { show: true } } }
                }).render();
        } catch (error) {
                console.error('Chart initialization error:', error);
            }
        });
</script>
</body>
</html>
