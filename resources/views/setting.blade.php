@extends('layouts.app')

@section('content')
<header class="bg-[#FFF6E9]">
        
        <div class="container mx-auto py-10 px-8 items-baseline">
            <button class="mb-4 text-[#FF7F3E] py-5"><a href="{{ route('welcome') }}" class="hover:text-yellow-300">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                    <path fill-rule="evenodd" d="M11.03 3.97a.75.75 0 0 1 0 1.06l-6.22 6.22H21a.75.75 0 0 1 0 1.5H4.81l6.22 6.22a.75.75 0 1 1-1.06 1.06l-7.5-7.5a.75.75 0 0 1 0-1.06l7.5-7.5a.75.75 0 0 1 1.06 0Z" clip-rule="evenodd" />
                </svg></a>
            </button>
            <h1 class="text-5xl font-bold text-[#FF7F3E]">Setting</h1>
        </div>
    </header>

    <!-- Main Content Section -->
    <main class="container mx-auto px-8 py-10">
        <h1 class="text-[#222222] text-3xl font-bold mb-5">Option</h1>
        <div class="flex justify-between bg-[#F8F8F8] p-4 rounded-tl-lg rounded-tr-lg shadow-md">
            <h2 class="text-xl font-semi">Notifications</h2>
            <label class="inline-flex items-center cursor-pointer">
                <input type="checkbox" value="" class="sr-only peer">
                <div class="relative w-14 h-7 bg-[#604CC3] peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-[#]-300 dark:peer-focus:ring-[#604CC3]-800 rounded-full peer dark:bg-[#604CC3]-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[4px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-6 after:w-6 after:transition-all dark:border-gray-600 peer-checked:bg-[#FF9F66]"></div>
            </label>
        </div>
        <div class="flex justify-between bg-[#F8F8F8] p-4 shadow-md">
            <h2 class="text-xl font-semi">Theme</h2>
            <a href="setting-dark" class="inline-flex items-center cursor-pointer">
                <input type="checkbox" value="" class="sr-only peer" id="themeToggle">
                <div class="relative w-14 h-7 bg-[#604CC3] peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-[#]-300 dark:peer-focus:ring-[#604CC3]-800 rounded-full peer dark:bg-[#604CC3]-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[4px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-6 after:w-6 after:transition-all dark:border-gray-600 peer-checked:bg-[#FF9F66]"></div>
            </a>
        </div>
        <div class="flex justify-between bg-[#F8F8F8] p-4 shadow-md">
            <h2 class="text-xl font-semi">Language</h2>
            <button id="openModal" class="w-20 h-10 text-l font-semi border-2 border-[#FF9F66] text-[#222222] p-2 rounded-md">ENG</button>
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
            <script src="overlay.js"></script>
        </div>
        <div class="flex justify-between bg-[#F8F8F8] p-4 rounded-bl-lg rounded-br-lg shadow-md">
            <h2 class="text-xl font-semi">Map Custom</h2>
            <button class="w-20 h-10 text-l font-semi border-2 border-[#FF9F66] text-[#222222] p-2 rounded-md">point</button>
        </div>
        <h1 class="text-[#222222] text-3xl font-bold mt-10 mb-5">General</h1>
        <div class="flex justify-between bg-[#F8F8F8] p-4 rounded-tl-lg rounded-tr-lg border-2 border-[#F8F8F8] border-b-[#FF7F3E]">
            <h2 class="text-xl font-semi">Account</h2>
            <button class="text-[#FF7F3E] hover:text-yellow-300"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
              </svg></button>
        </div>
        <div class="flex justify-between bg-[#F8F8F8] p-4 border-2 border-[#F8F8F8] border-b-[#FF7F3E]">
            <h2 class="text-xl font-semi">Feedback</h2>
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
            <h2 class="text-xl font-semi">Help</h2>
            <button class="text-[#FF7F3E] hover:text-yellow-300"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
              </svg></button>
        </div>
    </main>
@endsection
