<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Creative Agency Demo Template Tailwind CSS | Preline UI</title>
    <link rel="stylesheet" href="https://preline.co/assets/css/main.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="https://preline.co/favicon.ico">
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
        <div class="max-w-[85rem] px-4 sm:px-6 lg:px-8 lg:py-14 mx-auto">
            <!-- breadcumb -->
            <ol class="flex items-center whitespace-nowrap">
                <li class="inline-flex items-center">
                    <a class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600"
                        href="/">
                        <svg class="shrink-0 me-3 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                        </svg>
                        Acceuil
                    </a>
                    <svg class="shrink-0 mx-2 size-4 text-gray-400"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="m9 18 6-6-6-6"></path>
                    </svg>
                </li>

                <li class="inline-flex items-center text-sm font-semibold text-gray-800 truncate"
                    aria-current="page">
                    Contact
                </li>
            </ol>
            <!-- End Breadcumb -->
        </div>
        <div class="relative flex min-h-screen flex-col justify-center overflow-hidden bg-gray-50 py-6 sm:py-12">
            <div class="bg-white max-w-4xl mx-auto w-full">
                <div class="grid grid-cols-6 h-full">
                    <div class="bg-blue-900 p-10 col-span-2">
                        <h2
                            class="mb-10 font-bold text-2xl text-blue-100 before:block before:absolute before:bg-sky-300 before:content[''] relative before:w-20 before:h-1 before:-skew-y-3 before:-bottom-4">
                            Infos Contact</h2>
                        <p class="font-bold text-blue-100 py-8 border-b border-blue-700">
                            Location Address
                            <span class="font-normal text-xs text-blue-300 block">Romada, 16/A, YoYo City, USA</span>
                        </p>
                        <p class="font-bold text-blue-100 py-8 border-b border-blue-700">
                            Phone Number
                            <span class="font-normal text-xs text-blue-300 block">+889 (909) 567 87 9</span>
                        </p>
                        <p class="font-bold text-blue-100 py-8 border-b border-blue-700">
                            Email Address
                            <span class="font-normal text-xs text-blue-300 block">example@example.com</span>
                        </p>
                        <p class="font-bold text-blue-100 py-8 border-b border-blue-700">
                            Web Address
                            <span class="font-normal text-xs text-blue-300 block">zigzagexampl.com</span>
                        </p>

                    </div>
                    <div class="bg-blue-50 p-14 col-span-4">
                        <h2
                            class="mb-14 font-bold text-4xl text-blue-900 before:block before:absolute before:bg-sky-300 before:content[''] relative before:w-20 before:h-1 before:-skew-y-3 before:-bottom-4">
                            Entrer en contact</h2>
                        <div class="grid gap-6 mb-6 grid-cols-2">
                            <div class="flex flex-col">
                                <input class="py-4 bg-white rounded-full px-6 placeholder:text-xs"
                                    aria-placeholder="Votre nom" placeholder="Votre nom"></inpu>
                            </div>
                            <div class="flex flex-col">
                                <input class="py-4 bg-white rounded-full px-6 placeholder:text-xs"
                                    aria-placeholder="Votre nom" placeholder="Votre prénom"></inpu>
                            </div>
                        </div>
                        <div class="grid gap-6 mb-6 grid-cols-2">
                            <div class="flex flex-col">
                                <input class="py-4 bg-white rounded-full px-6 placeholder:text-xs"
                                    aria-placeholder="Votre nom" placeholder="Email Adresse"></inpu>
                            </div>
                            <div class="flex flex-col">
                                <input class="py-4 bg-white rounded-full px-6 placeholder:text-xs"
                                    aria-placeholder="Votre nom" placeholder="Sujet"></inpu>
                            </div>
                        </div>
                        <div class="mb-6">
                            <textarea class="w-full rounded-2xl placeholder:text-xs px-6 py-4" placeholder="Votre message ici" name=""
                                id="" rows="8"></textarea>
                        </div>
                        <div class="flex justify-center">
                            <button
                                class="rounded-full bg-blue-900 text-white font-bold py-4 px-6 min-w-40 hover:bg-blue-800 transition-all">Valider</button>
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
