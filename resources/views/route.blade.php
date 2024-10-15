@extends('layouts.app')

@section('content')
<div>
<!-- Top Section -->
<header class="relative bg-[#FFF6E9] border-2 border-[#F8F8F8] border-b-[#FF9F66]">
        <div class="container mx-auto py-3 px-8 items-baseline">
            <button class="mb-4 text-[#FF7F3E] py-5"><a href="{{ route('welcome') }}" class="hover:text-yellow-300">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                    <path fill-rule="evenodd" d="M11.03 3.97a.75.75 0 0 1 0 1.06l-6.22 6.22H21a.75.75 0 0 1 0 1.5H4.81l6.22 6.22a.75.75 0 1 1-1.06 1.06l-7.5-7.5a.75.75 0 0 1 0-1.06l7.5-7.5a.75.75 0 0 1 1.06 0Z" clip-rule="evenodd" />
                </svg></a>
            </button>
        </div>
    </header>


    <!-- Main Content Section -->
    <main class="container mx-auto my-auto px-8 py-10">
        <form class="max-w-md mx-auto">   
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                </div>
                <input type="search" id="default-search" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-full bg-gray-50 focus:ring-blue-600
                focus:border-blue-500" placeholder="Where you wanna go?" required />
                <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-[#80C4E9] hover:bg-blue-800 focus:ring-blue-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm px-4 py-2">Search</button>
            </div>
        </form>
        <div class="p-2 mt-8 mb-10 w-auto bg-white shadow-md rounded-xl flex flex-col items-center">
            <div class="overflow-y-scroll bg-black container mx-auto px-8 py-5 h-[60vh]">
                <div class="sticky top-0 z-50 px-4 py-3 flex items-center font-semibold text-sm text-slate-900 dark:text-slate-200 bg-slate-50/90 dark:bg-slate-700/90 backdrop-blur-sm ring-1 ring-slate-900/10 dark:ring-black/10">
                    Turn left from the stair, you will see L207, then walk straight to the end, the room L203 will be on the opposite of the women restroom
                </div>
                <li><a href="zoom" class="bg-[#604CC3] absolute right-12 rounded-full text-[#F8F8F8] hover:text-yellow-300"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                    <path fill-rule="evenodd" d="M12 3.75a.75.75 0 0 1 .75.75v6.75h6.75a.75.75 0 0 1 0 1.5h-6.75v6.75a.75.75 0 0 1-1.5 0v-6.75H4.5a.75.75 0 0 1 0-1.5h6.75V4.5a.75.75 0 0 1 .75-.75Z" clip-rule="evenodd" />
                  </svg></a></li>
                <button class="bg-gray-500 mt-8 absolute right-12 rounded-full text-gray-50"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                    <path fill-rule="evenodd" d="M4.25 12a.75.75 0 0 1 .75-.75h14a.75.75 0 0 1 0 1.5H5a.75.75 0 0 1-.75-.75Z" clip-rule="evenodd" />
                  </svg>
                </button>
                <div class="items-end grid grid-cols-3 gap-8">
                    <div class="group flex flex-col">
                        <div class="bg-[#604CC3] h-10 border border-1 border-black"></div>
                        <button class="bg-[#F8F8F8] h-24 border border-1 border-black relative overflow-hidden hover:bg-[#FF7F3E] focus:bg-[#FF7F3E] focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800"></button>
                        <button class="bg-[#F8F8F8] h-32 border border-1 border-black relative overflow-hidden hover:bg-[#FF7F3E] focus:bg-[#FF7F3E] focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800"></button>
                        <button class="bg-[#49C0FF] h-10 border border-1 border-black"></button>
                        <button class="bg-[#FF5ABD] h-10 border border-1 border-black"></button>
                        <button class="bg-[#F8F8F8] h-40 border border-1 border-black relative overflow-hidden hover:bg-[#FF7F3E] focus:bg-[#FF7F3E] focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800"></button>
                        <button class="bg-[#F8F8F8] h-40 border border-1 border-black relative overflow-hidden hover:bg-[#FF7F3E] focus:bg-[#FF7F3E] focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800"></button>
                        <button id="openModal" class="bg-[#FF7F3E] h-40 border border-1 border-black relative overflow-hidden hover:bg-[#FF7F3E] focus:bg-[#FF7F3E] focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
                            L203
                        </button>
                        <!-- Modal Overlay -->
                        <div id="modalOverlay" class="fixed inset-0 bg-black bg-opacity-50 hidden justify-center items-center z-50">
                            <div class="flex items-center justify-center h-full">
                                <div class="w-[60%] max-w-md h-auto max-h-[80vh] bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
                                    <div class="flex justify-between items-center py-3 px-4 border-b dark:border-neutral-700">
                                        <h3 id="hs-scroll-inside-body-modal-label" class="font-bold text-gray-800 dark:text-white">
                                            L203
                                        </h3>
                                        <button type="button" class="size-8 inline-flex justify-center items-center gap-x-2 rounded-full border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:hover:bg-neutral-600 dark:text-neutral-400 dark:focus:bg-neutral-600" aria-label="Close" data-hs-overlay="#hs-scroll-inside-body-modal">
                                            <span id="closeModal" class="absolute mb-1 items-center text-2xl">&times;</span>
                                        </button>
                                    </div>
                                    <div class="grid grid-cols-1 md:grid-cols-2 overflow-hidden max-h-[50vh]"> <!-- Use two columns on medium screens and above -->
                                        <div class="flex items-center justify-center p-4"> <!-- Center the image -->
                                            <img class="w-full h-auto max-h-[80%]" src="https://www.kmitl.ac.th/sites/default/files/2022-11/55.1.jpg" alt="Lab Image">
                                        </div>
                                        <div class="flex flex-col p-4 overflow-y-auto"> <!-- Allow only the text section to scroll -->
                                            <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Laboratory 203</h3>
                                            <p class="mt-1 text-gray-800 dark:text-neutral-400">
                                                This Laboratory Room contains of more than 70 computers. Use for study software and programming.
                                            </p>
                                        </div>
                                    </div>                                    
                                    <div class="flex justify-end m-4"> <!-- Ensure the button is within the main container -->
                                        <button id="confirmModal" class="bg-[#FF7F3E] text-white px-4 py-2 rounded hover:bg-[#e57b2d]">Go</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <script src="overlay.js"></script>
                        <div class="bg-[#604CC3] h-10 border border-1 border-black"></div>
                    </div>
                    <div class="flex flex-col relative"> <!-- Add relative to the parent for absolute positioning -->
                        <div class="bg-black h-38 border border-1 border-black"></div> 
                        <div class="bg-black h-10 border border-1 border-black"></div> 
                        <button class="bg-[#F8F8F8] h-32 border border-1 border-black relative overflow-hidden hover:bg-[#FF7F3E] focus:bg-[#FF7F3E] focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800"></button> 
                        <button class="bg-[#604CC3] h-14 mb-10 border border-1 border-black">Lift</button> 
                    
                        <!-- Lines positioned outside the grid -->
                        <div class="absolute" style="width: 520px; height: 0; transform: rotate(90deg); transform-origin: 0 0; border: 1px #604CC3 solid; top: 250px; left: -20px;"></div> 
                        <div class="absolute" style="width: 80px; height: 0; border: 1px #604CC3 solid; top: 250px; left: -20px;"></div>
                        <div class="absolute" style="width: 20px; height: 0; transform: rotate(90deg); transform-origin: 0 0; border: 1px #604CC3 solid; top: 240px; left: 60px;"></div>
                        <div class="absolute" style="width: 20px; height: 0; border: 1px #604CC3 solid; top: 770px; left: -30px;"></div>
                    
                        <div class="bg-[#604CC3] h-40 mb-10 border border-1 border-black"></div> 
                        <div class="h-40 grid grid-cols-2">
                            <button class="bg-[#F8F8F8] border border-1 border-black relative overflow-hidden hover:bg-[#FF7F3E] focus:bg-[#FF7F3E] focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800"></button> 
                            <div class="h-40 grid grid-rows-3 bg-white">
                                <button class="bg-[#F8F8F8] border border-1 border-black relative overflow-hidden hover:bg-[#FF7F3E] focus:bg-[#FF7F3E] focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800"></button>
                                <button class="bg-[#F8F8F8] border border-1 border-black relative overflow-hidden hover:bg-[#FF7F3E] focus:bg-[#FF7F3E] focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800"></button>
                                <button class="bg-[#F8F8F8] border border-1 border-black relative overflow-hidden hover:bg-[#FF7F3E] focus:bg-[#FF7F3E] focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800"></button>
                            </div>
                        </div> 
                        <button class="bg-[#F8F8F8] h-20 mb-10 border-1 border-black relative overflow-hidden hover:bg-[#FF7F3E] focus:bg-[#FF7F3E] focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800"></button> 
                        <div class="h-40 grid grid-cols-2">
                            <button class="bg-[#FF5ABD] border border-1 border-black"></button>
                            <button class="bg-[#49C0FF] border border-1 border-black"></button>
                        </div>
                    </div>                    
                    <div class="flex flex-col">
                        <div class="bg-black h-10 border border-1 border-black"></div> 
                        <div class="bg-black h-10 border border-1 border-black"></div> 
                        <div class="h-32 border border-1 border-[#604CC3]"></div> 
                        <div class="h-14 grid grid-cols-2">
                            <div class="bg-black h-14 border border-1 border-black"></div>
                            <div class="bg-blue-800 h-14 border border-1 border-black"></div>
                        </div> 
                        <button class="bg-[#F8F8F8] h-60 border border-1 border-black realtive overflow-hidden hover:bg-[#FF7F3E] focus:bg-[#FF7F3E] focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800"></button> 
                        <button class="bg-[#F8F8F8] h-60 border border-1 border-black realtive overflow-hidden hover:bg-[#FF7F3E] focus:bg-[#FF7F3E] focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800"></button>
                    </div>
                </div>
            </div>
            
            <ul class="inline-flex mt-4 ">
                <li>
                    <button class="h-8 mr-2 px-5 text-indigo-600 font-bold transition-colors duration-150 bg-white border border-1 border-[#604CC3] rounded-full focus:shadow-outline hover:bg-indigo-100"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                      </svg>
                      </button>
                </li>
                <li>
                    <button class="h-8 mr-2 px-5 text-purple font-bold transition-colors duration-150 focus:shadow-outline">2</button>
                </li>
                <li>
                    <button class="h-8 px-5 text-indigo-600 font-bold transition-colors duration-150 bg-white border border-[#604CC3] rounded-full focus:shadow-outline hover:bg-indigo-100"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                      </svg>
                    </button>
                </li>
            </ul>
        </div>        
    </main>
</div>
@endsection
