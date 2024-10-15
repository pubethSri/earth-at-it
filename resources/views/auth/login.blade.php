<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visiter - Earth@IT</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');
        .font-poppins {
            font-family: 'Poppins', sans-serif;
        }
        input:focus{
            outline: none;
        }
    </style>
</head>
<body class="h-screen flex items-center justify-center bg-[#FFF6E9] font-poppins">
    <main class="flex flex-col items-center z-30 w-10/12">
        <div class="shadow-white-500/50 z-20 w-10/12 p-2 bg-inherit shadow-mb rounded-lg mb-20">
            <h1 class=" font-bold text-center text-[#FFF6E9] text-5xl">LOGIN</h1>
        </div>
        <div class="space-y-6 shadow-white-500/50 z-10 w-11/12 p-6 bg-white shadow-mb rounded-lg">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="">
                    <label class="block">
                        <span class="block font-medium text-base text-slate-700 mb-2">Email Address</span>
                        <input id="email" type="email" name="email" class="@error('email') is-invalid @enderror text-[#FF7F3E] ring-2 ring-orange-300 hover:ring-blue-300 w-full p-2.5 text-sm rounded-lg peer focus:ring-[#604CC3] focus:text-[#604CC3]" placeholder="Email address" />
                        <p class="mt-2 mb-2 invisible peer-invalid:visible text-pink-600 text-xs">
                            Please provide a valid email address
                        </p>
                    </label>
                </div>
                <div>
                    <label for="Password" class="block text-base font-medium mb-2">Password</label>
                    <input type="password" id="password" name="password" class="@error('password') is-invalid @enderror text-[#FF7F3E] ring-2 ring-orange-300 hover:ring-blue-300 w-full p-2.5 text-sm rounded-lg peer focus:ring-[#604CC3] focus:text-[#604CC3]" placeholder="•••••••••" />
                    <p class="mt-2 pb-3 invisible peer-invalid:visible text-pink-600 text-xs">
                        Please enter a password
                    </p>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
                <div class="space-y-3.5">
                <div class="flex flex-row space-x-9">
                    <button type="submit" class="btn font-poppins font-medium text-sm text-[#FFFFFF] ring-[#FF7F3E] ring-2 bg-[#FF7F3E] w-full p-1.5 h-full rounded-lg tracking-wide hover:bg-blue-300 hover:ring-2 hover:ring-blue-300">Sign in</button>
                </div>
            </div>
            </form>
            <form action="{{ route('welcome') }}">
                <button type="submit" class="font-poppins font-medium text-sm text-[#604CC3] ring-[#604CC3] ring-2 w-full p-1.5 h-full rounded-lg tracking-wide hover:ring-2 hover:ring-blue-300 hover:text-blue-300">Cancel</button>
            </form>
            </div>
        </main>
    </div>
    <div class="z-0 overflow-clip fixed top-0 left-0 right-0 h-2/4 w-screen bg-[#FF7F3E] absolute rounded-b-[30px] shadow-lg">
        <img src="svg\topography.svg" alt="Topography Background" class="overflow-hidden w-full h-full object-cover opacity-10"/>
    </div>
</body>
</html>
