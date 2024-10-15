@extends('layouts.app')

@section('content')
<!-- Top Section -->
<header class="bg-[#FFF6E9]">
        
        <div class="container mx-auto py-10 px-8 items-baseline">
            <button class="mb-4 text-[#FF7F3E] py-5"><a href="{{ route('welcome') }}" class="hover:text-yellow-300">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                    <path fill-rule="evenodd" d="M11.03 3.97a.75.75 0 0 1 0 1.06l-6.22 6.22H21a.75.75 0 0 1 0 1.5H4.81l6.22 6.22a.75.75 0 1 1-1.06 1.06l-7.5-7.5a.75.75 0 0 1 0-1.06l7.5-7.5a.75.75 0 0 1 1.06 0Z" clip-rule="evenodd" />
                </svg></a>
            </button>
            <h1 class="text-5xl font-bold text-[#FF7F3E]">Edit / Create</h1>
        </div>
    </header>

    <!-- Main Content Section -->
    <main class="container mx-auto px-8 pt-10 pb-14">
        <div class="flex flex-col">
            <div class="flex items-center justify-center w-full">
                <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-full border-2 border-blue-500 border-dashed rounded-lg cursor-pointer bg-blue-400 hover:bg-blue-500 ">
                    <div class="flex flex-col items-center justify-center pt-5 pb-6">
                        <svg class="w-8 h-8 mb-4 text-[#FFF6E9]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                        </svg>
                        <p class="mb-2 text-sm text-[#FFF6E9] "><span class="font-semibold">Click to upload</span> or drag and drop</p>
                        <p class="text-xs text-[#FFF6E9] ">PNG, JPG</p>
                    </div>
                    <input id="dropzone-file" type="file" class="hidden" />
                </label>
        </div> 
            <div>
                <div>
                    <label for="roomName" class="pt-5 block text-base font-medium mb-2">Room Name</label>
                    <input type="text" id="roomName" class="text-[#604CC3] ring-2 ring-orange-300 hover:ring-blue-300 w-full p-2.5 text-sm rounded-lg peer focus:ring-[#604CC3] focus:text-[#FF7F3E]" placeholder="Type something..." required />
                </div>
            </div>
            <div>
                <label for="Tag" class="pt-5 block text-base font-medium mb-2">Tag</label>
                <div data-dial-init class="place-self-end group">
                    <div id="speed-dial-menu-click" class="flex flex-col items-center hidden mb-4 space-y-2">
                        <button type="button" data-tooltip-target="tooltip-share" class="flex justify-center items-center w-[20px] h-[20px] text-gray-500 hover:text-gray-900 bg-white rounded-full border border-gray-200 shadow-sm hover:bg-gray-50 focus:ring-2 focus:ring-gray-300 focus:outline-none ">
                            <svg class="w-2 h-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                                <path d="M14.419 10.581a3.564 3.564 0 0 0-2.574 1.1l-4.756-2.49a3.54 3.54 0 0 0 .072-.71 3.55 3.55 0 0 0-.043-.428L11.67 6.1a3.56 3.56 0 1 0-.831-2.265c.006.143.02.286.043.428L6.33 6.218a3.573 3.573 0 1 0-.175 4.743l4.756 2.491a3.58 3.58 0 1 0 3.508-2.871Z"/>
                            </svg>
                        </button>
                    </div>
                <button type="button" data-dial-toggle="speed-dial-menu-click" data-dial-trigger="click" aria-controls="speed-dial-menu-click" aria-expanded="false" class="flex items-center justify-center text-white bg-blue-700 rounded-full w-5 h-5 hover:bg-blue-800 focus:ring-2 focus:ring-blue-300 focus:outline-none ">
                    <svg class="w-2 h-2 transition-transform group-hover:rotate-45" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                    </svg>
                    <span class="sr-only">Open actions menu</span>
                </button>
            </div>

            </div>
            <div class="pb-4">
                <label for="message" class="pt-5 block mb-2 text-sm font-medium text-gray-900 ">Your message</label>
                <textarea id="message" rows="4" class="text-[#604CC3] ring-2 ring-orange-300 hover:ring-blue-300 w-full p-2.5 text-sm rounded-lg peer focus:ring-[#604CC3] focus:text-[#FF7F3E]" placeholder="Type something..."></textarea>
            </div>
            <div class="space-y-3.5 pb-6">
                <div class="flex flex-row space-x-9">
                    <button type="button" class="font-medium text-sm text-[#FFFFFF] ring-[#604CC3] ring-2 bg-[#604CC3] w-full p-1.5 h-full rounded-lg tracking-wide hover:bg-blue-300 hover:ring-2 hover:ring-blue-300">Submit</button>
                    <button type="button" class="font-medium text-sm text-[#FFFFFF] ring-[#FF7F3E] ring-2 bg-[#FF7F3E] w-full p-1.5 h-full rounded-lg tracking-wide hover:bg-blue-300 hover:ring-2 hover:ring-blue-300">Cancel</button>
                </div>
            </div>
        </div>
    </main>
@endsection
