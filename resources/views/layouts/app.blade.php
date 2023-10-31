<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Social App</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css"  rel="stylesheet" />
        <link rel="icon" type="image/png" href="images/logo.png">

        <style>
             /* width */
        ::-webkit-scrollbar {
        width: 5px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
        box-shadow: inset 0 0 5px grey;
        border-radius: 10px;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
        background: light-gray;
        border-radius: 10px;
        }
        .make-me-sticky{
            position: -webkit-sticky;
            position: sticky;
        }
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
        <nav class="p-4 bg-amber-500 flex justify-between items-center mb-6">
            <span class="w-1/4 pl-12"><img src="{{ asset('images/logo.png') }}" class="w-16 h-16 rounded-full"></span>
            <form class="flex w-1/2 h-10 relative">
                <i class="absolute top-1/2 left-6 transform -translate-x-1/2 -translate-y-1/2 fa-solid fa-magnifying-glass"></i>
                <input type="search" class="pl-12 pr-4 text-gray-500 h-auto w-full rounded-full" placeholder="Search">
            </form>
            <ul class="flex items-center text-white md:text-lg lg:text-xl w-1/4 justify-evenly">

                <li>
                    <a href="{{route('home');}}" class="p-3"><i class="fa-solid fa-house"></i></a>
                </li>

                <li>
                    <button data-popover-target="popover-bottom" data-popover-placement="bottom" type="button" class="text-white"><i class="fa-solid fa-bell"></i></button>
                    <div data-popover id="popover-bottom" role="tooltip" class="absolute z-10 invisible inline-block w-64 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
                        <div class="px-3 py-2 bg-gray-100 border-b border-gray-200 rounded-t-lg dark:border-gray-600 dark:bg-gray-700">
                            <h3 class="font-semibold text-amber-500 dark:text-white">Notification</h3>
                        </div>
                        <div class="px-3 py-2">
                            <p>And here's some amazing content. It's very engaging. Right?</p>
                        </div>

                        <div class="px-3 py-2">
                            <p>And here's some amazing content. It's very engaging. Right?</p>
                        </div>

                        <div class="px-3 py-2 bg-gray-100 text-center text-amber-500 hover:text-amber-600">
                            <a href="">See All</a>
                        </div>
                        <div data-popper-arrow></div>
                    </div>
                </li>
                <!-- <i class="fa-solid fa-bell"></i> -->
                <li>
                    <a href="/" class="p-3"><i class="fa-solid fa-gear"></i></a>
                </li>

                <li>

                    @if(auth()->user()->profile_pic)

                        <a href=""><img src="{{ getCurrentUserProfile()}}"
                            alt ="Profile Picture" class="w-14 h-14 rounded-full"></a>


                        @else
                                    @if(getCurrentUserProfile())

                                    <a href=""><img src="{{ asset('images/profiles/' . getCurrentUserProfile()) }}"
                                        alt ="Profile Picture" class="w-14 h-14 rounded-full"></a>

                                    @else
                                    <a href=""><img src="{{ asset('images/profile.png') }}"
                                        alt ="Profile Picture" class="w-14 h-14 rounded-full"></a>

                                    @endif
                        @endif

                </li>
            </ul>
        </nav>
        {{-- <br><br><br> --}}
        @yield('content')

        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    </body>
</html>

{{--
REFERENCE:

https://www.behance.net/gallery/93022203/Social-media-UIUX-design-Ajwbetcom-website --}}

{{-- https://tailwindcss.com/docs/pointer-events#controlling-pointer-event-behavior --}}