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
            <h1 class="text-5xl font-bold text-[#FF7F3E]">Schedule</h1>
        </div>
    </header>

    <!-- Main Content Section -->
    <main class="container mx-auto px-8 pt-10 pb-20">
        <div class="p-4 flex flex-row w-full">
            <img class="size-40 rounded-lg" src="https://thumbs.dreamstime.com/b/school-child-using-digital-pc-laptop-class-portrait-funny-pupil-primary-study-programming-online-learning-technology-virtual-333248955.jpg" alt="image description">
            <div class="items-center place-self-center w-full">
                <div class="text-center py-2 font-bold">
                    <label>9:00 - 11:00</label>
                </div>
                <div class="text-center py-2">
                    <label>Physical Computing</label>
                </div>
                <div class="text-center py-2">
                    <a href="route"><button type="button"><u>L203 Laboratory Room</u></button></a>
                </div>
            </div>
        </div>
        <hr class="h-0.5 w-full my-8 bg-[#FF7F3E] rounded border-0">
        <div class="p-4 flex flex-row w-full">
            <img class="size-40 rounded-lg" src="https://40860384.fs1.hubspotusercontent-na1.net/hubfs/40860384/FSP_Blog-Images/FSP-depression-650x520.png" alt="image description">
            <div class="items-center place-self-center w-full">
                <div class="text-center py-2 font-bold">
                    <label>11:00 - 13:00 </label>
                </div>
                <div class="text-center py-2">
                    <label>Multimedia</label>
                </div>
                <div class="text-center py-2">
                    <button type="button"><u>Project Base 4</u></button>
                </div>
            </div>
        </div>
        <hr class="h-0.5 w-full my-8 bg-[#FF7F3E] rounded border-0">
        <div class="p-4 flex flex-row w-full">
            <img class="size-40 rounded-lg" src="https://static.toiimg.com/thumb/msid-69428212,width-1280,height-720,resizemode-4/69428212.jpg" alt="image description">
            <div class="items-center place-self-center w-full">
                <div class="text-center py-2 font-bold">
                    <label>14:00 - 16:00</label>
                </div>
                <div class="text-center py-2">
                    <label>Database System</label>
                </div>
                <div class="text-center py-2">
                    <button type="button"><u>M04 Lecture Room</u></button>
                </div>
            </div>
        </div>
        <!-- <hr class="h-0.5 w-full my-8 bg-[#FF7F3E] rounded border-0"> -->
    </main>
@endsection
