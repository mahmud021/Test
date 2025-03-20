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

    <!-- Preline CSS via CDN -->

{{--    <link href="https://cdn.jsdelivr.net/npm/preline@latest/dist/preline.min.css" rel="stylesheet">--}}

</head>
<body>
<div class="relative min-h-screen ">

    <!-- The background-filling image -->
    <div class="relative min-h-screen flex flex-col items-center justify-center ">
        <div class="w-full max-w-2xl px-6 lg:max-w-7xl">

            <main>
                <div class="py-24 sm:py-32 max-w-screen-lg mx-auto text-center">
                    <!-- Centered title -->
                    <h2 class="php  font-semibold tracking-tight text-gray-900">
                        Meet Group 1
                    </h2>
                    <p>CSC 440</p>

                    <!-- 4-column grid, each column auto-sized, contents centered -->
                    <div class="mt-12 grid grid-cols-4 gap-8">

                        <!-- Person 1 -->
                        <div class="flex flex-col items-center text-center">
                            <img class="size-30 rounded-full" src="{{ asset('images/1.jpg') }}" alt="">

                            <h3 class="text-2xl font-semibold tracking-tight text-gray-900 mt-2">
                                Dr. Gabreil Ayem
                            </h3>
                            <p class="text-sm font-semibold text-indigo-600">
                                CSC 440 Instructor
                            </p>
                        </div>

                        <!-- Person 2 -->
                        <div class="flex flex-col items-center text-center">
                            <img class="size-30 rounded-full" src="{{ asset('images/2.jpg') }}" alt="">

                            <h3 class="text-2xl font-semibold tracking-tight text-gray-900 mt-2">
                                Mahmud Modibbo
                            </h3>
                            <p class="text-sm font-semibold text-indigo-600">
                                Team Leader
                            </p>
                        </div>

                        <!-- Person 3 -->
                        <div class="flex flex-col items-center text-center">
                            <img class="size-30 rounded-full" src="{{ asset('images/3.jpg') }}" alt="">

                            <h3 class="text-2xl font-semibold tracking-tight text-gray-900 mt-2">
                                Fatimah Asterin
                            </h3>
                            <p class="text-sm font-semibold text-indigo-600">
                                Team Leader’s Ex
                            </p>
                        </div>

                        <!-- Person 4 -->
                        <div class="flex flex-col items-center text-center">
                            <img class="size-30 rounded-full" src="{{ asset('images/4.jpg') }}" alt="">

                            <h3 class="text-2xl font-semibold tracking-tight text-gray-900 mt-2">
                                Emerson
                            </h3>
                            <p class="text-sm font-semibold text-indigo-600">
                                UI/UX Designer
                            </p>
                        </div>

                    </div>
                </div>

                <!-- Existing Bar Chart -->
                <div id="chart" style="height: 350px;"></div>
                <!-- New Single Area Chart -->
                <div id="hs-single-area-chart" style="height: 300px;"></div>
            </main>


        </div>
    </div>

</div>
{{--<script src="https://cdn.jsdelivr.net/npm/preline@2.7.0/dist/helper-apexcharts.js"></script>--}}
@vite(['resources/css/app.css', 'resources/js/app.js'])
<script>
    window.chartData = {
        categories: {!! $categories !!},
        amounts: {!! $amounts !!}
    };
</script>
</body>
</html>
