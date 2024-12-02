<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Eco plast</title>
    <link rel="stylesheet" href="https://preline.co/assets/css/main.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        .theme-toggle {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #4b5563;
            color: white;
            border: none;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .theme-toggle:hover {
            background-color: #374151;
        }
    </style>
    <script>
        const updateTheme = () => {
            const html = document.querySelector('html');
            const currentTheme = localStorage.getItem('hs_theme');
            const newTheme = currentTheme === 'dark' ? 'light' : 'dark';

            if (newTheme === 'dark') {
                html.classList.add('dark');
            } else {
                html.classList.remove('dark');
            }

            localStorage.setItem('hs_theme', newTheme);
        };

        document.addEventListener('DOMContentLoaded', () => {
            const savedTheme = localStorage.getItem('hs_theme') || 'light';
            const html = document.querySelector('html');

            if (savedTheme === 'dark') {
                html.classList.add('dark');
            } else {
                html.classList.remove('dark');
            }
        });
    </script>
</head>

<body class="dark:bg-neutral-900">
    @include('partials.navbar')

    <main id="content">
        <!-- Card Blog -->
        <div class="max-w-[85rem] px-4 py-4 sm:px-6 lg:px-8 lg:py-14 mx-auto">


            <!-- Blog Article -->
            <div class="max-w-[85rem] px-4 sm:px-6 lg:px-8 mx-auto">
                <div class="grid lg:grid-cols-3 gap-y-8 lg:gap-y-0 lg:gap-x-6">
                    <!-- Content -->
                    <div class="lg:col-span-2">
                        <div class="py-8 lg:pe-8">
                            <div class="space-y-5 lg:space-y-8">
                                <a class="inline-flex items-center gap-x-1.5 text-sm text-gray-600 decoration-2 hover:underline focus:outline-none focus:underline dark:text-blue-500"
                                    href="/products">
                                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m15 18-6-6 6-6" />
                                    </svg>
                                    Retour aux produits
                                </a>

                                <h2 class="text-3xl font-bold lg:text-5xl dark:text-white">
                                    {{ $product->name }}
                                </h2>

                                <div class="flex items-center gap-x-5">

                                    <p class="text-xs sm:text-sm text-gray-800 dark:text-neutral-200">
                                        {{ \Carbon\Carbon::parse($product->created_at)->format('d-m-y') }}
                                    </p>
                                </div>

                                <p class="text-lg text-gray-800 dark:text-neutral-200">
                                    {{ $product->description }}
                                </p>



                                <div class="text-center">
                                    <div class="grid lg:grid-cols-1 gap-3">


                                        <img class="size-full object-cover rounded-xl"
                                            src="/storage/{{ $product->image }}" alt="Blog Image">

                                    </div>


                                </div>






                            </div>
                        </div>
                    </div>
                    <!-- End Content -->

                    <!-- Sidebar -->
                    <div class="">
                        <div class="sticky top-0 start-0 py-8 lg:ps-8">
                            <!-- Avatar Media -->
                            <div
                                class="group flex items-center gap-x-3 border-b border-gray-200 pb-8 mb-8 dark:border-neutral-700">
                                <a class="block shrink-0 focus:outline-none" href="#">
                                    <img class="size-10 rounded-full"
                                        src="https://images.unsplash.com/photo-1669837401587-f9a4cfe3126e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80"
                                        alt="Avatar">
                                </a>

                                <a class="group grow block focus:outline-none" href="">
                                    <h5
                                        class="group-hover:text-gray-600 group-focus:text-gray-600 text-sm font-semibold text-gray-800 dark:group-hover:text-neutral-400 dark:group-focus:text-neutral-400 dark:text-neutral-200">
                                        Ecoplast
                                    </h5>

                                </a>

                                <div class="grow">
                                    <div class="flex justify-end">
                                        <button type="button"
                                            class="py-1.5 px-2.5 inline-flex items-center gap-x-2 text-xs font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">

                                            Demande devis
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- End Avatar Media -->

                            <div class="space-y-6">
                                <!-- Media -->

                                <!-- End Media -->

                                <!-- Media -->
                                <a class="group flex items-center gap-x-6 focus:outline-none" aria-haspopup="dialog"
                                    aria-expanded="false" aria-controls="hs-task-created-alert"
                                    data-hs-overlay="#hs-task-created-alert">
                                    <div class="grow">
                                        <span
                                            class="text-sm font-bold text-gray-800 group-hover:text-blue-600 group-focus:text-blue-600 dark:text-neutral-200 dark:group-hover:text-blue-500 dark:group-focus:text-blue-500">
                                            voir pdf
                                        </span>
                                    </div>


                                </a>
                                <!-- End Media -->

                                <!-- Media -->
                                <a class="group flex items-center gap-x-6 focus:outline-none" aria-haspopup="dialog"
                                    aria-expanded="false" aria-controls="hs-task-created-alert-video"
                                    data-hs-overlay="#hs-task-created-alert-video">
                                    <div class="grow">
                                        <span
                                            class="text-sm font-bold text-gray-800 group-hover:text-blue-600 group-focus:text-blue-600 dark:text-neutral-200 dark:group-hover:text-blue-500 dark:group-focus:text-blue-500">
                                            voir video
                                        </span>
                                    </div>


                                </a>
                                <!-- End Media -->
                            </div>
                        </div>
                    </div>
                    <!-- End Sidebar -->
                </div>
            </div>
            <!-- End Blog Article -->


            <!-- End Card -->
        </div>
        <!-- End Card Blog -->





        <div id="hs-task-created-alert"
            class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto"
            role="dialog" tabindex="-1" aria-labelledby="hs-task-created-alert-label">
            <div
                class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
                <div class="relative flex flex-col bg-white shadow-lg rounded-xl dark:bg-neutral-900">
                    <div class="absolute top-2 end-2">
                        <button type="button"
                            class="size-8 inline-flex justify-center items-center gap-x-2 rounded-full border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:hover:bg-neutral-600 dark:text-neutral-400 dark:focus:bg-neutral-600"
                            aria-label="Close" data-hs-overlay="#hs-task-created-alert">
                            <span class="sr-only">Close</span>
                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M18 6 6 18" />
                                <path d="m6 6 12 12" />
                            </svg>
                        </button>
                    </div>

                    <div class="p-4 sm:p-10 text-center overflow-y-auto">


                        <iframe class="w-full h-full" style="height:400px" src="/storage/{{ $product->pdf }}"></iframe>

                        <div class="mt-6 flex justify-center gap-x-4">

                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div id="hs-task-created-alert-video"
            class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto"
            role="dialog" tabindex="-1" aria-labelledby="hs-task-created-alert-label">
            <div
                class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
                <div class="relative flex flex-col bg-white shadow-lg rounded-xl dark:bg-neutral-900">
                    <div class="absolute top-2 end-2">
                        <button type="button"
                            class="size-8 inline-flex justify-center items-center gap-x-2 rounded-full border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:hover:bg-neutral-600 dark:text-neutral-400 dark:focus:bg-neutral-600"
                            aria-label="Close" data-hs-overlay="#hs-task-created-alert-video">
                            <span class="sr-only">Close</span>
                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M18 6 6 18" />
                                <path d="m6 6 12 12" />
                            </svg>
                        </button>
                    </div>

                    <div class="p-4 sm:p-10 text-center overflow-y-auto">


                        <video class="w-full" style="height: 400px;" controls>
                            <source src="/storage/{{ $product->video }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>

                        <div class="mt-6 flex justify-center gap-x-4">

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

    @include('partials.footer')

    <!-- Dark Mode Toggle -->
    <button class="theme-toggle" onclick="updateTheme()">
        <span id="theme-icon">🌙</span>
    </button>

    <script src="https://cdn.jsdelivr.net/npm/preline/dist/preline.min.js"></script>
</body>

</html>
