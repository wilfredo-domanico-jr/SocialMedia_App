@extends('layouts.app')


@section('content')
<section class="flex flex-wrap mt-8 mb-8 mr-12 ml-12 justify-center grid grid-cols-4 gap-4">


    <div class="col-span-4 md:col-span-3">
        <div class="bg-[url('images/profile-bg.jpg')] w-full h-auto mb-8 rounded-lg p-12 shadow-xl">

            <span class="flex justify-end">
                <button data-modal-target="edit-bg-pic-modal"
                data-modal-toggle="edit-bg-pic-modal"
                type="button">

                <i class="hover:bg-amber-500
                    hover:text-white h-12 w-12 p-2
                    text-center rounded-full text-2xl
                    fa-solid fa-camera">
                </i>

                </button>
            </span>
            <section class="flex flex-col justify-between w-full h-auto md:flex-row mt-20">
                <div class="flex flex-wrap w-46 h-auto">
                    <div class="relative">
                        <div
                            class="flex justify-center items-center w-44 h-44 border-4 border-amber-600 rounded-full">


                            @if(getCurrentUserProfile())

                            <a href=""><img src="{{ asset('images/profiles/' . getCurrentUserProfile()) }}"
                                class="cursor-pointer top-0 left-0 w-40 h-40 rounded-full"></a>

                            @else
                            <a href=""><img src="{{ asset('images/profile.png') }}"
                                class="cursor-pointer top-0 left-0 w-40 h-40 rounded-full"></a>

                            @endif



                        </div>


                        <button data-modal-target="edit-profile-pic-modal" data-modal-toggle="edit-profile-pic-modal" type="button" class="bg-amber-500 p-2 rounded-full border-2 absolute bottom-5 left-36 text-3xl text-white hover:bg-gray-100 hover:text-amber-500"><i
                            class="fa-solid fa-camera"></i>
                        </button>
                    </div>

                    <div class="flex flex-col justify-center gap-0 w-46 h-46 ml-8">
                        <h1>{{auth()->user()->first_name}} {{auth()->user()->last_name}} </h1>
                        <h6>{{auth()->user()->username}}</h6>
                        <h3>UI/UX Designer for web and mobile</h3>
                        <span>19 Following</span>
                    </div>
                </div>

                <button
                    class="hidden w-40 h-16 mt-6 bg-white text-amber-500 p-4 rounded-full hover:bg-gray-100 md:mt-28 md:block">
                    Edit Profile
                </button>

            </section>
        </div>

        <div class="sticky top-0 grid gap-4 h-auto md:grid-cols-3">

            <div class="hidden md:flex flex-col h-auto gap-12">

                <div class="min-h-[400px] bg-white rounded-xl text-2xl border-solid border-2 shadow-xl">
                    <section class="select-none md:text-2xl lg:text-base flex gap-2 cursor-pointer items-center h-1/4 p-6 border-solid border-b-2 border-gray-300 hover:bg-gray-100">
                        <i class="md:text-6xl lg:text-5xl mr-2 fa-regular fa-envelope"></i>
                            <span>Invitation Request</span>
                            <span class="flex text-gray text-center border-solid border-gray-950 ml-4">5</span>
                    </section>

                    <section class="select-none md:text-2xl lg:text-base flex gap-2 cursor-pointer items-center h-1/4 p-6 border-solid border-b-2 border-gray-300 hover:bg-gray-100">
                            <i class="md:text-6xl lg:text-4xl mr-2 fa-solid fa-user-lock"></i>
                            <span>Blocked Accounts</span>
                            <span class="flex text-gray text-center border-solid border-gray-950 ml-4">0</span>
                    </section>

                    <section class="select-none md:text-2xl lg:text-base flex gap-2 cursor-pointer items-center h-1/4 p-6 border-solid border-b-2 border-gray-300 hover:bg-gray-100">
                        <i class="md:text-6xl lg:text-5xl mr-2 fa-solid fa-circle-plus"></i>
                        <span>Create Page</span>
                    </section>

                    <section class="select-none md:text-2xl lg:text-base flex gap-2 cursor-pointer items-center h-1/4 p-6 border-solid hover:bg-gray-100">
                        <i class="md:text-6xl lg:text-5xl mr-2 fa-solid fa-circle-plus"></i>
                        <span>Create Group</span>
                    </section>
                </div>

                <div class="sticky top-0 min-h-auto max-h-[600px] bg-white rounded-xl text-3xl border-solid border-2 shadow-xl">

                    <div class="overflow-hidden">
                        <section class="flex items-center h-auto p-6 border-solid border-b-2 border-gray-300 select-none">
                            <span class="md:text-lg lg:text-xl">Most Trending Groups</span>
                        </section>

                        <section
                            class="cursor-pointer flex gap-4 items-center h-auto p-6 border-solid border-b-2 border-gray-300 select-none hover:bg-gray-100">
                            <img src="{{ asset('images/profile.png') }}" class="w-16 h-16 rounded-full" alt="profile">
                            <div class="flex flex-col gap-1 w-3/5">
                                <span class="md:text-lg lg:text-xl truncate overflow-hidden">Page Name</span>
                                <span class="md:text-sm lg:text-base text-gray-500 truncate overflow-hidden">Some Description</span>
                            </div>
                        </section>

                    </div>

                    <section class="p-6 md:text-lg lg:text-xl text-amber-500">
                        <a href="" class="cursor-pointer hover:text-amber-600">Show more</a>
                    </section>



                </div>


            </div>
            <div class="flex flex-col gap-12 col-span-2 h-auto">

                        <div class="flex flex-col shadow-md">
                            <!-- <nav class="flex justify-center border-b-2 p-4 text-md md:text-xl">
                                <ul class="flex text-center select-none space-x-20 md:space-x-32 lg:space-x-1">
                                    <li id="post_tab_btn"
                                        class="w-24 md:w-48 hover: border-amber-500 hover:border-b-4 hover:text-amber-400 border-amber-500 border-b-4">
                                        <span class="text-amber-500">Posts</span></li>
                                    <li id="pages_tab_btn" class="w-24 md:w-48 hover: border-amber-500 hover:border-b-4 hover:text-amber-400">
                                        <span>Pages</span></li>
                                    <li id="groups_tab_btn" class="w-24 md:w-48 hover: border-amber-500 hover:border-b-4 hover:text-amber-400">
                                        <span>Groups</span></li>
                                </ul>
                            </nav> -->
                            {{-- <div class="relative flex justify-around text-lg p-4 items-center select-none">
                                <span id="create_post_arrow"
                                    class="rotate-45 absolute h-6 w-6 bg-white lg:bottom-[-12px] left-[26%] z-0"></span>
                                <span id="life_event_arrow"
                                    class="hidden rotate-45 absolute h-6 w-6 bg-white lg:bottom-[-14px] right-[23%] z-0"></span>
                                <span id="create_post" class="hover:text-gray-500 text-amber-500"><i
                                        class="fa-solid fa-pencil"></i> Create Post</span>
                                <span id="life_event" class="hover:text-gray-500"><i
                                        class="fa-regular fa-calendar-days"></i> Life Event</span>
                            </div> --}}

                            <section id="create_post_section">
                                <form action="{{ route('createPost')}}" method="POST">
                                    @csrf
                                <div class="h-34 bg-white p-4 rounded-lg">
                                    <div class="flex gap-2 items-center ml-6">

                                        @if(getCurrentUserProfile())

                                        <a href=""><img src="{{ asset('images/profiles/' . getCurrentUserProfile()) }}" class="rounded-full h-16 w-16"></a>

                                        @else
                                        <a href=""><img src="{{ asset('images/profile.png') }}" class="rounded-full h-16 w-16"></a>

                                        @endif

                                            <textarea class="w-full min-h-24 max-h-auto resize-none px-2 py-8 z-10 focus:border-black" name="body"
                                                id="" placeholder="Create Post..."></textarea>
                                    </div>
                                </div>

                                <hr class="h-1 bg-gray-200">

                                <div class="flex justify-between p-4 bg-white">
                                    <div class="flex pl-12 gap-12 items-center text-2xl md:text-4xl lg:text-2xl text-gray-400">
                                        <button><i class="hover:text-amber-500 fa-regular fa-image"></i></button>
                                        <button><i class="hover:text-amber-500 fa-solid fa-location-dot"></i></button>
                                        <button type="button">
                                            <i class="hover:text-amber-500 fa-regular fa-face-smile"></i>
                                        </button>
                                    </div>

                                    <button type ="submit" class="text-white bg-amber-500 px-14 py-4 rounded-full mr-16 text-md md:text-lg hover:bg-amber-600">Post</button>

                                </div>
                            </form>
                            </section>

                            {{-- <section id="life_event_section">
                                <div class="h-34 bg-white p-4 rounded-lg">
                                    <div class="flex gap-2 items-center ml-6">
                                        <img src="images/profile.png" class="h-16 w-16 rounded-full">
                                        <textarea class="w-full min-h-24 max-h-auto resize-none px-2 py-8 z-10" name=""
                                            id="" placeholder="Type here..."></textarea>
                                    </div>
                                </div>
                            </section> --}}
                        </div>
                        @foreach ($latestPost as $post)
                            <div class="rounded-lg bg-white min-h-96 max-h-auto shadow-xl">

                                <div class="flex justify-between px-8 py-4">
                                    <div class="flex items-center">

                                        <a href="#" class="h-16 w-16 "><img src="images/profile.png" alt="Profile"
                                                class="rounded-full"></a>

                                        <div class="min-w-auto h-auto p-4 text-gray-500">
                                            <h2 class="text-xl">{{$post->first_name}} {{$post->last_name}}</h2>
                                            <h6 class="text-md">{{$post->username}} • {{ $post->created_at->setTime(0, 0, 0)->diffForHumans() }}</h6>
                                        </div>
                                    </div>
                                    <button>
                                        <i
                                            class="hover:bg-gray-200 fa-solid fa-ellipsis-vertical p-4 rounded-full w-12 h-12"></i>
                                    </button>
                                </div>

                                <div class="pl-8 pr-24 text-justify py-4 h-auto">
                                    <p class="leading-8">
                                        {{$post->body}}
                                    </p>
                                </div>

                                <hr class="h-1 bg-gray-200">
                                <div class="flex justify-center space-x-20 md:space-x-48 lg:space-x-28 items-center h-12 md:text-xl">
                                    <a href="" class="hover:text-amber-400 flex items-center gap-2">
                                        <i class="text-3xl fa-regular fa-comment"></i><span>5</span>
                                    </a>
                                    <a href="" class="hover:text-amber-400 flex items-center gap-2">
                                        <i class="text-3xl fa-solid fa-heart"></i><span>3</span>
                                    </a>
                                    <a href="" class="hover:text-amber-400 flex items-center gap-2">
                                        <i class="text-3xl fa-solid fa-heart-crack"></i><span>0</span>
                                    </a>
                                    <a href="" class="hover:text-amber-400 flex items-center gap-2">
                                        <i class="text-3xl fa-solid fa-share-nodes"></i><span>0</span>
                                    </a>
                                </div>
                                <hr class="h-1 bg-gray-200">

                                <div class="flex justify-between">
                                    <div class="flex items-center w-full space-x-2 px-8 py-4">
                                        <a href=""><img src="images/profile.png" alt="Profile"
                                                class="rounded-full h-16 w-16"></a>

                                        <div
                                            class="flex flex-col md:flex-row justify-between rounded-lg min-w-auto h-auto outline p-2 text-gray-500 w-3/4">
                                            <textarea
                                                class="h-12 w-full resize-none text-lg p-2 bg-transparent active:border-none"
                                                placeholder="Reply ... "></textarea>
                                            <div class="flex items-center justify-center gap-16 mt-2 md:gap-4 text-2xl">
                                                <span class="select-none hidden md:block">|</span>
                                                <button><i class="hover:text-amber-500 fa-solid fa-microphone"></i></button>
                                                <button><i class="hover:text-amber-500 fa-regular fa-image"></i></button>
                                                <button><i class="hover:text-amber-500 fa-regular fa-face-smile"></i></button>
                                            </div>
                                        </div>
                                        <button
                                            class="bg-amber-500 text-white px-12 py-4 rounded-full hover:bg-amber-600">Send</button>
                                    </div>
                                </div>
                            </div>
                        @endforeach


            </div>

            <!-- until here -->

            <div id="pages_tab" class="flex flex-col gap-12 col-span-2 max-h-screen overflow-y-auto">

            </div>

            <div id="groups_tab" class="flex flex-col gap-12 col-span-2 max-h-screen overflow-y-auto">

            </div>
        </div>

    </div>
    <div class="hidden md:flex flex-col gap-12 sticky">
        <div class="h-auto bg-white rounded-xl text-2xl border-solid border-2 shadow-xl">
            <div class="overflow-hidden">
                <section class="flex items-center h-auto p-6 border-solid border-b-2 border-gray-300 select-none">
                    <span class="md:text-lg lg:text-xl">Most Active Questions</span>
                </section>

                <section class="cursor-pointer flex gap-4 items-center h-auto p-6 border-solid border-b-2 border-gray-300 select-none hover:bg-gray-100">
                    <img src="{{ asset('images/profile.png') }}" class="w-16 h-16 rounded-full" alt="profile">
                    <span class="truncate overflow-hidden md:text-lg lg:text-xl">What is Koronaasdassa?</span>
                </section>


            </div>

            <section class="p-6 md:text-lg lg:text-xl text-amber-500">
                <a href="" class="cursor-pointer hover:text-amber-600">Show more</a>
            </section>
        </div>
        <div class="h-auto bg-white rounded-xl text-3xl border-solid border-2 shadow-xl">

            <div class="overflow-hidden">
                <section
                    class="flex items-center h-auto p-6 border-solid border-b-2 border-gray-300 select-none">
                    <span class="md:text-lg lg:text-xl">Newest Events</span>
                </section>

                <section
                    class="cursor-pointer flex gap-4 items-center h-auto p-6 border-solid border-b-2 border-gray-300 select-none hover:bg-gray-100">
                    <img src="{{ asset('images/profile.png') }}" class="w-16 h-16 rounded-full" alt="profile">
                    <div class="flex flex-col gap-1 w-3/5">
                        <span class="md:text-lg lg:text-xl truncate overflow-hidden">Event Nameasdsasa</span>
                        <span class="md:text-base lg:text-base text-gray-500 truncate overflow-hidden">Created by Naasdsasame</span>
                    </div>
                </section>
            </div>

            <section class="p-6 md:text-lg lg:text-xl text-amber-500">
                <a href="" class="cursor-pointer hover:text-amber-600">Show more</a>
            </section>


        </div>

        <div class="sticky top-0 h-auto bg-white rounded-xl text-3xl border-solid border-2 shadow-xl">

            <div class="overflow-hidden">
                <section
                    class="flex items-center h-auto p-6 border-solid border-b-2 border-gray-300 select-none">
                    <span class="md:text-lg lg:text-xl">Most Active Pages</span>
                </section>

                <section
                    class="cursor-pointer flex gap-4 items-center h-auto p-6 border-solid border-b-2 border-gray-300 select-none hover:bg-gray-100">
                    <img src="{{ asset('images/profile.png') }}" class="w-16 h-16 rounded-full" alt="profile">
                    <div class="flex flex-col gap-1 w-3/5">
                        <span class="md:text-lg lg:text-xl truncate overflow-hidden">Page asdsaasasName</span>
                        <span class="md:text-sm lg:text-base text-gray-500 truncate overflow-hidden">Some Dasdsaasescription</span>
                    </div>
                </section>
            </div>

            <section class="p-6 md:text-lg lg:text-xl text-amber-500">
                <a href="" class="cursor-pointer hover:text-amber-600">Show more</a>
            </section>
        </div>
    </div>

</section>

<div id="edit-profile-pic-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-md max-h-full">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="edit-profile-pic-modal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="p-6 text-center">
              <i class="fa-regular fa-image text-gray-500 text-4xl mb-4"></i>
                <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Upload New Profile</h3>

            <form action="{{route('editProfile');}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-4 flex justify-center">

                  <input name ="profile_img" type="file" accept=".png, .jpg, .jpeg" class="block self-center w-3/4 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input">

              </div>
                <button type="submit" class="w-1/2 text-white bg-amber-500 hover:bg-amber-600 focus:ring-4 focus:outline-none  font-medium rounded-lg text-smitems-center px-5 py-2.5 text-center">
                    Submit
                </button>

              </div>
            </form>
        </div>
    </div>
</div>

<div id="edit-bg-pic-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-md max-h-full">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="edit-bg-pic-modal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="p-6 text-center">
              <i class="fa-regular fa-image text-gray-500 text-4xl mb-4"></i>
                <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Upload New Background Image</h3>
              <div class="mb-4 flex justify-center">

                  <input class="block self-center w-3/4 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">

              </div>
                <button data-modal-hide="edit-bg-pic-modal" type="button" class="w-1/2 text-white bg-amber-500 hover:bg-amber-600 focus:ring-4 focus:outline-none  font-medium rounded-lg text-smitems-center px-5 py-2.5 text-center">
                    Submit
                </button>

              </div>
        </div>
    </div>
</div>


<!--Footer container-->
<footer
class="flex flex-col items-center bg-neutral-200 text-center text-white dark:bg-neutral-600">
<div class="container pt-9 text-2xl">
<div class="mb-9 flex justify-center">
<a href="https://www.facebook.com/wilfredo.domanico" class="mr-9 text-neutral-800 dark:text-neutral-200">
    <i class="fa-brands fa-facebook-f"></i>
</a>

<a href="#!" class="mr-9 text-neutral-800 dark:text-neutral-200">
    <i class="fa-brands fa-linkedin"></i>
</a>

<a href="#!" class="mr-9 text-neutral-800 dark:text-neutral-200">
    <i class="fa-brands fa-github"></i>
</a>

<a href="#!" class="mr-9 text-neutral-800 dark:text-neutral-200">
    <i class="fa-brands fa-google"></i>
</a>
</div>
</div>

<!--Copyright section-->
<div
class="w-full bg-amber-400 p-4 text-center text-neutral-700 dark:bg-neutral-700 dark:text-neutral-200">
© 2023 Oct 13:
<a
class="text-neutral-800 dark:text-neutral-400"
href="#"
>Made By: Wilfredo Domanico Jr.</a
>
</div>
</footer>


    <script>
        $(document).ready(function() {

            $("#life_event_section").hide();
            $("#pages_tab").hide();
            $("#groups_tab").hide();

            $("#create_post").click(function() {
                $("#life_event_arrow").hide();
                $("#life_event_section").hide();
                $("#create_post_arrow").show();
                $("#create_post_section").show();

            });

            $("#life_event").click(function() {
                $("#life_event_arrow").show();
                $("#life_event_section").show();
                $("#create_post_arrow").hide();
                $("#create_post_section").hide();
            });

            $("#pages_tab_btn").click(function() {
                $("#post_tab").hide();
                $("#pages_tab").show();
                $("#groups_tab").hide();
            });

            $("#post_tab_btn").click(function() {
                $("#post_tab").show();
                $("#pages_tab").hide();
                $("#groups_tab").hide();
            });

            $("#groups_tab_btn").click(function() {
                $("#post_tab").hide();
                $("#pages_tab").hide();
                $("#groups_tab").show();
            });


        });
    </script>
@endsection
