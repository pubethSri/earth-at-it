<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home Page</title>

        <!-- Fonts -->
        <!-- Tailwind CSS CDN -->
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="bg-[#F8F8F8] font-sans leading-normal tracking-normal">
    <!-- Top Section -->
    <header class="bg-[#FFF6E9]">
        @if (Route::has('login'))
            <nav class="-mx-3 flex flex-1 justify-end">
                @auth
                    <a
                        href="{{ url('/dashboard') }}"
                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-black dark:hover:text-black/80 dark:focus-visible:ring-white"
                    >
                        Dashboard
                    </a>
                @else
                    <a
                        href="{{ route('login') }}"
                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-black dark:hover:text-black/80 dark:focus-visible:ring-white"
                    >
                        Log in
                    </a>

                    @if (Route::has('register'))
                        <a
                            href="{{ route('register') }}"
                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-black dark:hover:text-black/80 dark:focus-visible:ring-white"
                        >
                            Register
                        </a>
                    @endif
                @endauth
            </nav>
        @endif
        <div class="container mx-auto py-16 px-8">
            <h1 class="text-5xl font-bold text-[#FF9F66]">Welcome to</h1>
            <p class="bg-[#80C4E9] font-bold text-[#1E1E1E] text-2xl p-6 py-3 mt-6 inline-block rounded-full">Earth@IT</p>
        </div>
    </header>

    <!-- Main Content Section -->
    <main class="container mx-auto px-8 py-12">
        <h1 class="text-[#222222] text-3xl font-bold text-center mb-10">Upcoming event</h1>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="grid grid-rows-2 gap-0">
                <div class="bg-[#604CC3] p-6 rounded-tl-lg rounded-tr-lg shadow-md">
                    <img class="w-full h-full object-cover rounded" src="https://www.sftravel.com/sites/default/files/styles/horizontal_3_2/public/2022-08/golden-gate-bridge-bay-sunset.jpg.webp?itok=VaL3AjW2" alt="image pop-up">
                </div>
                <div class="bg-[#F8F8F8] p-6 rounded-bl-lg rounded-br-lg shadow-md">
                    <h2 class="text-2xl font-semibold mb-4">San Francisco</h2>
                    <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.</p>
                </div>
            </div>
            <div class="grid grid-rows-2 gap-0">
                <div class="bg-[#604CC3] p-6 rounded-tl-lg rounded-tr-lg shadow-md">
                    <img class="w-full h-full object-cover rounded" src="https://cdn.britannica.com/46/236446-050-29DC7886/Brooklyn-Heights-Montague-Street-New-York.jpg" alt="image pop-up">
                </div>
                <div class="bg-[#F8F8F8] p-6 rounded-bl-lg rounded-br-lg shadow-md">
                    <h2 class="text-2xl font-semibold mb-4">Brooklyn</h2>
                    <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.</p>
                </div>
            </div>
            <div class="grid grid-rows-2 gap-0">
                <div class="bg-[#604CC3] p-6 rounded-tl-lg rounded-tr-lg shadow-md">
                    <img class="w-full h-full object-cover rounded" src="https://www.thaibicusa.com/wp-content/uploads/2020/08/Minnesota2-1-scaled.jpeg" alt="image pop-up">
                </div>
                <div class="bg-[#F8F8F8] p-6 rounded-bl-lg rounded-br-lg shadow-md">
                    <h2 class="text-2xl font-semibold mb-4">Minesota</h2>
                    <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.</p>
                </div>
            </div>
        
        </div>
        <h1 class="text-[#222222] text-4xl font-bold mt-10">What is Earth@IT</h1>
        <div class="text-[#222222] text-l mt-5 p-4">Earth@IT is a helping guidance application to take you to wherever you want in School of Information Technology with many features to help you find the room or the right places to go.</div>
        <h1 class="text-[#222222] text-4xl font-bold mt-10">How to use</h1>
        <div class="text-[#222222] text-l mt-5 p-4 mb-10">Click on the map icon to start your journey. Click or search anywhere you want to go and the app will response back with the route and helping guide. The rest is for you to explore. Good Luck with your IT experience!
        </div>
    </main>

    <!-- Navbar -->
    <nav class="bg-[#FF7F3E] p-4 fixed w-full z-50 bottom-0 shadow-lg">
        <div class="container mx-auto flex justify-center items-center">
            <ul class="flex flex-wrap justify-center space-x-12 sm:space-x-10 md:space-x-10 text-white text-sm sm:text-base">
                <li><a href="setting.html" class="hover:text-yellow-300"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 0 1 0-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                  </svg>
                  </a></li>
                <li><a href="Create.html" class="hover:text-yellow-300"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                  </svg>
                  </a></li>
                <li><a href="map.html" class="hover:text-yellow-300"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                  </svg>
                  </a></li>
                <li><a href="schedule.html" class="hover:text-yellow-300"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                  </svg>
                  </a></li>
                <li><a href="#profile" class="hover:text-yellow-300"><div class="bg-[#FFFFFF] w-8 h-8 rounded-full"></div></a></li>
            </ul>
        </div>
    </nav>
</body>
</html>
