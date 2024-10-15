@extends('layouts.app')

@section('content')
<div>
    <!-- Top Section -->
    <header class="bg-[#FFF6E9]">
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
    
</div>
@endsection
