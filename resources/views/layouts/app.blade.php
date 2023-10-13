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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

        <style>
            /* width */
            ::-webkit-scrollbar {
            width: 15px;
            }

            /* Track */
            ::-webkit-scrollbar-track {
            box-shadow: inset 0 0 5px grey;
            border-radius: 10px;
            }

            /* Handle */
            /* ::-webkit-scrollbar-thumb {
            background: red;
            border-radius: 10px;
            } */
        </style>

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
    <body class="flex flex-col relative bg-slate-100">
        <nav class="fixed p-1 bg-amber-500 flex justify-between items-center z-50 w-full">

            <span class="w-1/4"><img src="images/logo.svg" class="w-28"></span>
            <form class="flex w-1/2 h-10 relative">
                <i class="absolute top-1/2 left-6 transform -translate-x-1/2 -translate-y-1/2 fa-solid fa-magnifying-glass"></i>
                <input type="search" class="pl-12 pr-4 text-gray-500 h-auto w-full rounded-full" placeholder="Search">
            </form>

            <ul class="flex items-center text-white md:text-lg lg:text-xl w-1/4 justify-evenly">

                    <li>
                        <a href="/" class="p-3"><i class="fa-solid fa-house"></i></a>

                    </li>

                    <li>
                        <a href="/" class="p-3"><i class="fa-solid fa-bell"></i></a>
                    </li>

                    <li>
                        <a href="/" class="p-3"><i class="fa-solid fa-gear"></i></a>
                    </li>

                    <li>
                        <form action="{{ route('logout') }}" method="post" class="p-3 inline">
                            @csrf
                            <button type="submit">
                                <i class="fa-solid fa-right-from-bracket"></i>
                            </button>
                        </form>
                        {{-- <img src="images/profile.png" class="cursor-pointer lg:w-10 lg:h-10"> --}}
                    </li>

            </ul>
        </nav>
        {{-- <br><br><br> --}}
        @yield('content')


    </body>
</html>

{{--
REFERENCE:

https://www.behance.net/gallery/93022203/Social-media-UIUX-design-Ajwbetcom-website --}}

{{-- https://tailwindcss.com/docs/pointer-events#controlling-pointer-event-behavior --}}