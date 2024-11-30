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

    <main id="content ">
        <!-- breadcumb -->
        <ol class="flex items-center whitespace-nowrap sm:px-6 lg:px-8 px-4 ">
            <li class="inline-flex items-center">
                <a class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:text-white"
                    href="/">
                    <svg class="shrink-0 me-3 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                        <polyline points="9 22 9 12 15 12 15 22"></polyline>
                    </svg>
                    Acceuil
                </a>
                <svg class="shrink-0 mx-2 size-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24"
                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path d="m9 18 6-6-6-6"></path>
                </svg>
            </li>

            <li class="inline-flex items-center text-sm font-semibold text-gray-800 truncate dark:text-white"
                aria-current="page">
                Demande de vis
            </li>
        </ol>
        <!-- End Breadcumb -->
        <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">

            <form action="{{ isset($request) ? route('requests.update', $request->id) : route('requests.store') }}"
                method="POST">
                @csrf
                @if (isset($request))
                    @method('PUT')
                @endif
                <div class="grid md:grid-cols-3 gap-4 sm:grid-cols-1">
                    <!-- nom-->
                    <div class="mb-4">

                        <label for="input-label-with-helper-text"
                            class="block text-sm font-medium mb-2 dark:text-white">Nom</label>

                        <input type="text" name="nom" id="nom"
                            value="{{ old('nom', $request->nom ?? '') }}"
                            class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                            placeholder="Nom">

                        @error('nom')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>



                    <!-- nom-->
                    <div class="mb-4">
                        <label for="prenom" class="block text-sm font-medium text-gray-700 dark:text-white">Prenom
                        </label>

                        <input type="text" name="prenom" id="prenom"
                            value="{{ old('prenom', $request->prenom ?? '') }}"
                            class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                            placeholder="Prenom">

                        @error('prenom')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- num_tel-->
                    <div class="mb-4">
                        <label for="num_tel" class="block text-sm font-medium text-gray-700 dark:text-white">Numero
                            telephone
                        </label>

                        <input type="tel" name="num_tel" id="num_tel"
                            value="{{ old('num_tel', $request->num_tel ?? '') }}"
                            class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                            placeholder="Numero telephone">

                        @error('num_tel')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- email-->
                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-gray-700 dark:text-white">
                            Email
                        </label>

                        <input type="email" name="email" id="email"
                            value="{{ old('email', $request->email ?? '') }}"
                            class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                            placeholder="Email">

                        @error('email')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>


                    <!-- estimation_temps-->
                    <div class="mb-4">
                        <label for="estimation_temps" class="block text-sm font-medium text-gray-700 dark:text-white">
                            Estimation temps
                        </label>

                        <input type="text" name="estimation_temps" id="estimation_temps"
                            value="{{ old('estimation_temps', $request->estimation_temps ?? '') }}"
                            class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                            placeholder="Estimation temps">

                        @error('estimation_temps')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- methode_livraison-->
                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-gray-700 dark:text-white">
                            Methode livraison
                        </label>
                        <select name="methode_livraison" id="methode_livraison"
                            class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                            <option value="1" {{ old('methode_livraison') == '1' ? 'selected' : '' }}>1</option>
                            <option value="2" {{ old('methode_livraison') == '2' ? 'selected' : '' }}>2</option>
                            <option value="3" {{ old('methode_livraison') == '3' ? 'selected' : '' }}>3</option>
                        </select>

                        @error('methode_livraison')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>




                    <!-- product-->
                    <div class="mb-4">
                        <label for="produit_id" class="block text-sm font-medium text-gray-700 dark:text-white">
                            Produit
                        </label>
                        <select name="produit_id" id="produit_id"
                            class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">

                            @foreach ($products as $product)
                                <!-- Assuming $products is passed to the view -->
                                <option value="{{ $product->id }}"
                                    {{ old('produit_id') == $product->id ? 'selected' : '' }}>
                                    {{ $product->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('produit_id')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>



                </div>





                <!-- Submit Button -->
                <div class="mt-6 flex justify-end mb-4">
                    <button type="submit"
                        class=" py-2 px-4 bg-blue-600 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700">
                        Enregistrer
                    </button>
                </div>
            </form>
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
