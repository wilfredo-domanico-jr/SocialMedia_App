<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Social App</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
        <script>
            tailwind.config = {
              theme: {
                extend: {
                  colors: {
                    clifford: '#da373d',
                  }
                }
              }
            }
          </script>
    </head>
    <body class="bg-slate-100">
        <nav class="p-6 bg-amber-500 flex justify-between mb-6">

            <span><img src="{{ asset('images/logo.svg') }}" class="w-28"></span>

            {{-- <ul class="flex items-center text-white">
                <li>
                    <a href="/" class="p-3">Home</a>
                </li>
                <li>
                    <a href="{{ route('dashboard') }}" class="p-3">Dashboard</a>
                </li>
                <li>
                    <a href="{{ route('posts') }}" class="p-3">Posts</a>
                </li>
            </ul> --}}
            <form class="flex w-1/3 text-gray-400">
            <input type="search" class="w-full p-4 rounded-full" placeholder="Search">
            {{-- <button type="submit" style=""><i class="fa-solid fa-magnifying-glass"></i></button> --}}
            </form>
            <ul class="flex items-center text-white text-3xl w-96 justify-evenly">
                @auth
                    <li>
                        <a href="/" class="p-3"><i class="fa-solid fa-house"></i></a>
                        {{-- <a href="" class="p-3">{{ auth()->user()->name }}</a> --}}
                    </li>
                    {{-- <li>
                        <form action="{{ route('logout') }}" method="post" class="p-3 inline">
                            @csrf
                            <button type="submit">Logout</button>
                        </form>
                    </li> --}}

                    <li>
                        <a href="/" class="p-3"><i class="fa-solid fa-bell"></i></a>
                    </li>

                    <li>
                        <a href="/" class="p-3"><i class="fa-solid fa-gear"></i></a>
                    </li>

                    <li>
                        <img src="{{ asset('images/profile.png') }}" class="w-14">
                    </li>

                    {{-- <li>
                        <a href="{{ route('dashboard') }}" class="p-3">Dashboard</a>
                    </li>
                    <li>
                        <a href="{{ route('posts') }}" class="p-3">Posts</a>
                    </li> --}}
                @endauth

                @guest
                    <li>
                        <a href="{{ route('login') }}" class="p-3">Login</a>
                    </li>
                    <li>
                        <a href="{{ route('register') }}" class="p-3">Register</a>
                    </li>
                @endguest
            </ul>
        </nav>
        @yield('content')


    </body>
</html>

{{--
REFERENCE:

https://www.behance.net/gallery/93022203/Social-media-UIUX-design-Ajwbetcom-website --}}

{{-- https://tailwindcss.com/docs/pointer-events#controlling-pointer-event-behavior --}}