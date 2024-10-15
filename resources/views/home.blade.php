<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Earth@IT</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet"
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    

    <!-- Scripts -->
    <!-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        // Configure Tailwind
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        monserrat: ['Montserrat']
                    },
                },
            },
        }
    </script>
    
</head>
@auth
<?php
$temp = auth()->user()->role;
?>
@endauth
<body class="bg-White">
    <div id="app">
        <nav class="bg-[#FF7F3E] p-4 fixed w-full z-50 bottom-0 shadow-lg">
            <div class="container mx-auto flex justify-center items-center">
                <ul class="flex flex-wrap justify-center space-x-12 sm:space-x-10 md:space-x-10 text-white text-sm sm:text-base">
                    <li><a href="{{ route('setting') }}" class="hover:text-yellow-300"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 0 1 0-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>
                    </a></li>
                    @auth
                    @if ($temp == 'Adminstrator')
                        <li><a href="{{ route('Create') }}" class="hover:text-yellow-300"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                        </svg>
                        </a></li>
                    @endif
                    @endauth
                        <li><a href="{{ route('map') }}" class="hover:text-yellow-300"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                        </svg>
                        </a></li>
                    @Auth
                        <li><a href="{{ route('schedule') }}" class="hover:text-yellow-300"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
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
                            <!-- <a href="profile/{{ auth()->user()->id }}" class="hover:text-yellow-300">
                                <img src="{{ auth()->user()->profile->image }}" class="w-8 h-8 rounded-full"></div>
                            </a> -->
                            <img src="../{{ $user->profile->image }}" class="w-8 h-8 rounded-full"></div>
                        </li>
                    @endguest
                </ul>
            </div>
        </nav>

        <div class=" z-0 mb-20 min-h-screen bg-[#475569] grid grid-rows-6 grid-cols-1">
            <div class="relative bg-[#FCF6EB] text-center content-center row-span-2">
                <div class="z-40 absolute top-0 right-0 p-4">
                    <a class="font-monserrat font-bold text-[#FF9F66]/75" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" href="{{ route('logout') }}">Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
                <p class="text-[#FF7F3E] text-4xl font-monserrat font-bold">Profile</p>
            </div>
            <div class="z-0 bg-white text-center content-center row-span-4">
                <div class="grid grid-row-3 grid-cols-1 size-full">
                    <div class="content-center pt-20 ps-20 pe-20 pb-10">
                        <p class="font-monserrat font-black text-xl">
                            {{ $user->profile->Fullname}}
                        </p>
                        <p class="font-monserrat text-sm text-[#8A8A8A]">
                            {{ $user->email}}
                        </p>
                        <u><p class="font-monserrat text-sm text-[#575A6D] size-min mx-auto rounded-3xl">{{ $user->role}}</p></u>
                        
                    </div>
                    <div class="content-center row-span-2">
                        <div class="grid grid-row-1 grid-cols-2 size-full">
                            <div>
                                <div>
                                    <div class="w-2/3 h-3/5 mx-auto">
                                        <img class="rounded-xl drop-shadow" src="{{ $user->events[0]->image }}" alt="">
                                    </div>
                                </div>
                                <p class="size-fit ps-8 pt-2 font-monserrat font-bold">{{ $user->events[0]->title }}</p>
                                <p class="size-fit ps-8 font-monserrat">{{ $user->events[0]->date }}</p>
                                <p class="size-fit ps-8 font-monserrat">{{ $user->events[0]->location }}</p>
                            </div>
                            
                            <div>
                                <div>
                                    <div class="w-2/3 h-3/5 mx-auto">
                                        <img class="rounded-xl drop-shadow" src="{{ $user->events[2]->image }}" alt="">
                                    </div>
                                </div>
                                <p class="size-fit ps-8 pt-2 font-monserrat font-bold">{{ $user->events[2]->title }}</p>
                                <p class="size-fit ps-8 font-monserrat">{{ $user->events[2]->date }}</p>
                                <p class="size-fit ps-8 font-monserrat">{{ $user->events[2]->location }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="min-h-screen z-10 w-screen top-0 absolute grid grid-rows-6 grid-cols-1">
            <div class="z-0 rounded-md content-center row-span-4">
                <div class="">
                    <img src="../{{ $user->profile->image }}" class="rounded-full size-2/5 mx-auto border-white border-8" alt="">
                </div>
            </div>
        </div>

        <!-- <div >
            <div>
                <div class="content-center">
                    <img src="../{{ $user->profile->image }}" alt="">
                </div>
            </div>
            <div>
                <div>
                    <div><h1><strong>{{ $user->name }}</strong></h1></div>
                    <div><strong>{{ $user->profile->Fullname}}</strong></div>
                    <div><a href="{{ $user->profile->url}}">{{ $user->profile->url}}</a></div>
                </div>

                <h1><strong><u>My Events</u></strong></h1>
                
                <div>
                    @foreach($user->events as $event)
                        <div>
                            <img src="{{ $event->image }}" alt="">
                            <div>
                                <h4><strong>{{ $event->title }}</strong></h4>
                                <p>{{ $event->date }}</p>
                                <p>{{ $event->location }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div> -->
    </div>
</body>
</html>

        <!-- <nav class="navbar navbar-expand-md navbar-light">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <ul class="navbar-nav ms-auto">
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav> -->