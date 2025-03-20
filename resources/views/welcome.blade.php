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
<div class="relative min-h-screen">
    <!-- Header Section -->
    <header class="flex flex-col items-center justify-center py-12">
        <h1 class="boldonse-regular text-5xl text-gray-900">COVID‑19 in Nigeria</h1>
        <p class="boldonse-regular text-xl text-gray-700 mt-4">State-Level Trends and Demographic Insights</p>
    </header>

    <!-- Team Section -->
    <section class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900">Our Team</h2>
                <p class="mt-4 text-lg text-gray-600">Creative people driving innovation</p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Team Member 1 -->
                <div class="text-center">
                    <img class="rounded-full w-32 h-32 mx-auto object-cover" src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Mahmud Modibbo">
                    <h3 class="mt-4 text-lg font-bold text-gray-800">Mahmud Modibbo</h3>
                    <p class="text-sm text-gray-600">Team Leader &amp; Backend Engineer</p>
                </div>
                <!-- Team Member 2 -->
                <div class="text-center">
                    <img class="rounded-full w-32 h-32 mx-auto object-cover" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Fatimah Asterin">
                    <h3 class="mt-4 text-lg font-bold text-gray-800">Fatimah Asterin</h3>
                    <p class="text-sm text-gray-600">Data Engineer</p>
                </div>
                <!-- Team Member 3 -->
                <div class="text-center">
                    <img class="rounded-full w-32 h-32 mx-auto object-cover" src="https://images.unsplash.com/photo-1548142813-c348350df52b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Dr. Emerson">
                    <h3 class="mt-4 text-lg font-bold text-gray-800">Dr. Emerson</h3>
                    <p class="text-sm text-gray-600">UI/UX Designer</p>
                </div>
                <!-- Team Member 4 -->
                <div class="text-center">
                    <img class="rounded-full w-32 h-32 mx-auto object-cover" src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Dr. Gabriel Ayem">
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
                    We rely on reputable organizations to ensure our COVID‑19 insights are based on accurate, up-to-date data.
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

    <!-- Charts Section -->
    <section class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div id="chart" style="height: 350px;"></div>
            <div id="hs-single-area-chart" style="height: 300px;" class="mt-12"></div>
        </div>
    </section>
</div>

@vite(['resources/css/app.css', 'resources/js/app.js'])
<script>
    window.chartData = {
        categories: {!! $categories !!},
        amounts: {!! $amounts !!}
    };
</script>
</body>
</html>
