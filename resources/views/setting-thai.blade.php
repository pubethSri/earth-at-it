<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Setting</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        // Configure Tailwind
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'noto-sans-thai': ['Noto Sans Thai', 'sans-serif'],
                    },
                },
            },
        }
    </script>
</head>
<body class="bg-[#F8F8F8] font-sans leading-normal tracking-normal">

    <!-- Top Section -->
    <header class="bg-[#FFF6E9]">
        
        <div class="container mx-auto py-10 px-8 items-baseline">
            <button class="mb-4 text-[#FF7F3E] py-5"><a href="{{ route('welcome') }}" class="hover:text-yellow-300">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                    <path fill-rule="evenodd" d="M11.03 3.97a.75.75 0 0 1 0 1.06l-6.22 6.22H21a.75.75 0 0 1 0 1.5H4.81l6.22 6.22a.75.75 0 1 1-1.06 1.06l-7.5-7.5a.75.75 0 0 1 0-1.06l7.5-7.5a.75.75 0 0 1 1.06 0Z" clip-rule="evenodd" />
                </svg></a>
            </button>
            <h1 class="font-noto-sans-thai text-5xl font-bold text-[#FF7F3E]">การตั้งค่า</h1>
        </div>
    </header>

    <!-- Main Content Section -->
    <main class="container mx-auto px-8 py-10">
        <h1 class="font-noto-sans-thai text-[#222222] text-3xl font-bold mb-5">ตัวช่วย</h1>
        <div class="flex justify-between bg-[#F8F8F8] p-4 rounded-tl-lg rounded-tr-lg shadow-md">
            <h2 class="font-noto-sans-thai text-xl font-semi">การแจ้งเตือน</h2>
            <label class="inline-flex items-center cursor-pointer">
                <input type="checkbox" value="" class="sr-only peer">
                <div class="relative w-14 h-7 bg-[#604CC3] peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-[#]-300 dark:peer-focus:ring-[#604CC3]-800 rounded-full peer dark:bg-[#604CC3]-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[4px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-6 after:w-6 after:transition-all dark:border-gray-600 peer-checked:bg-[#FF9F66]"></div>
            </label>
        </div>
        <div class="flex justify-between bg-[#F8F8F8] p-4 shadow-md">
            <h2 class="font-noto-sans-thai text-xl font-semi">ธีม</h2>
            <a href="setting-dark-thai" class="inline-flex items-center cursor-pointer">
                <input type="checkbox" value="" class="sr-only peer" id="themeToggle">
                <div class="relative w-14 h-7 bg-[#604CC3] peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-[#]-300 dark:peer-focus:ring-[#604CC3]-800 rounded-full peer dark:bg-[#604CC3]-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[4px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-6 after:w-6 after:transition-all dark:border-gray-600 peer-checked:bg-[#FF9F66]"></div>
            </a>
        </div>
        <div class="flex justify-between bg-[#F8F8F8] p-4 shadow-md">
            <h2 class="font-noto-sans-thai text-xl font-semi">ภาษา</h2>
            <button id="openModal" class="w-20 h-10 text-l font-semi border-2 border-[#FF9F66] text-[#222222] p-2 rounded-md">THA</button>
            <!-- Modal Overlay -->
            <div id="modalOverlay" class="fixed inset-0 bg-black bg-opacity-50 hidden justify-center items-center z-50">
                <div class="flex items-center justify-center h-full">
                    <div class="w-[40%] max-w-sm h-auto max-h-[80vh] bg-[#F8F8F8] border border-[#FF9F66] shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
                        <div class="grid grid-cols-1 md:grid-cols-2 overflow-hidden bg-[#F8F8F8] rounded-xl grid grid-rows-4 justify-between items-center gap-2 py-3 px-4">
                            <a href="setting-thai"><div class="flex justify-center border border-[#F8F8F8] border-b-[#FF7F3E] text-[#FF7F3E] text-xl">THA</div></a>
                            <a href="setting"><div class="flex justify-center border border-[#F8F8F8] border-b-[#FF7F3E] text-[#FF7F3E] text-xl">ENG</div></a>
                            <div class="flex justify-center border border-[#F8F8F8] border-b-[#FF7F3E] text-[#FF7F3E] text-xl">CHN</div>
                            <div class="flex justify-center text-[#FF7F3E] text-xl">JPN</div>
                        </div>
                    
                    </div>
                </div>
            </div>
        </div>
        <script src="overlay.js"></script>
        <div class="flex justify-between bg-[#F8F8F8] p-4 rounded-bl-lg rounded-br-lg shadow-md">
            <h2 class="font-noto-sans-thai text-xl font-semi">รูปแบบของเส้นนำทาง</h2>
            <button class="w-20 h-10 text-l font-semi border-2 border-[#FF9F66] text-[#222222] p-2 rounded-md">point</button>
        </div>
        <h1 class="font-noto-sans-thai text-[#222222] text-3xl font-bold mt-10 mb-5">ทั่วไป</h1>
        <div class="flex justify-between bg-[#F8F8F8] p-4 rounded-tl-lg rounded-tr-lg border-2 border-[#F8F8F8] border-b-[#FF7F3E]">
            <h2 class="font-noto-sans-thai text-xl font-semi">บัญชี</h2>
            <button class="text-[#FF7F3E] hover:text-yellow-300"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
              </svg></button>
        </div>
        <div class="flex justify-between bg-[#F8F8F8] p-4 border-2 border-[#F8F8F8] border-b-[#FF7F3E]">
            <h2 class="font-noto-sans-thai text-xl font-semi">รายงาน</h2>
            <button class="text-[#FF7F3E] hover:text-yellow-300"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
              </svg></button>
        </div>
        <div class="flex justify-between bg-[#F8F8F8] p-4 border-2 border-[#F8F8F8] border-b-[#FF7F3E]">
            <h2 class="text-xl font-semi">IT Support</h2>
            <button class="text-[#FF7F3E] hover:text-yellow-300"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
              </svg></button>
        </div>
        <div class="flex justify-between bg-[#F8F8F8] p-4 border-2 border-[#F8F8F8] border-b-[#FF7F3E] mb-10">
            <h2 class="font-noto-sans-thai text-xl font-semi">การช่วยเหลือ</h2>
            <button class="text-[#FF7F3E] hover:text-yellow-300"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
              </svg></button>
        </div>
    </main>
@auth
<?php
$temp = auth()->user()->role;
?>
@endauth
    <nav class="bg-[#FF7F3E] p-4 fixed w-full z-50 bottom-0 shadow-lg">
            <div class="container mx-auto flex justify-center items-center">
                <ul class="flex flex-wrap justify-center space-x-12 sm:space-x-10 md:space-x-10 text-white text-sm sm:text-base">
                    <li><a href="setting-thai" class="hover:text-yellow-300"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 0 1 0-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>
                    </a></li>
                    @auth
                    @if ($temp == 'Adminstrator')
                        <li><a href="Create" class="hover:text-yellow-300"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                        </svg>
                        </a></li>
                    @endif
                    @endauth
                        <li><a href="map" class="hover:text-yellow-300"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                        </svg>
                        </a></li>
                    @Auth
                        <li><a href="schedule" class="hover:text-yellow-300"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                        </svg>
                        </a></li>
                    @endAuth
                    @guest
                        <li>
                            <a href="{{ route('login') }}" class="hover:text-yellow-300">
                                <div class="bg-[#FFFFFF] w-8 h-8 rounded-full"></div>
                            </a>
                        </li>
                    @else
                        <li>
                            <a href="profile/{{ auth()->user()->id }}" class="hover:text-yellow-300">
                                <img src="{{ auth()->user()->profile->image }}" class="w-8 h-8 rounded-full"></div>
                            </a>
                        </li>
                    @endguest
                </ul>
            </div>
        </nav>
</body>
</html>
