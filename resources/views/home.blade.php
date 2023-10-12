@extends('layouts.app')

@section('content')
    <section class="flex flex-wrap mt-8 mb-8 mr-12 ml-12 justify-center grid grid-cols-4 gap-4">

        <div class="h-screen col-span-4 md:col-span-3 mt-12">
            <div class="bg-[url('images/profile-bg.jpg')] w-full h-auto mb-8 rounded-lg p-12 shadow-xl">
                <span class="flex justify-end"><i
                        class="hover:bg-amber-500 hover:text-white h-12 w-12 p-2 text-center rounded-full text-2xl fa-solid fa-camera"></i></span>
                <section class="flex flex-col justify-between w-full h-auto md:flex-row mt-20">
                    <div class="flex flex-wrap w-46 h-auto">
                        <div class="relative">
                            <div class="flex justify-center items-center w-44 h-44 border-4 border-amber-600 rounded-full">
                                <a href=""><img src="https://shorturl.at/ftBGW"
                                        class="cursor-pointer top-0 left-0 w-40 h-40 rounded-full"></a>
                            </div>

                            <button
                                class="bg-amber-500 p-2 rounded-full border-2 absolute bottom-5 left-36 text-3xl text-white hover:bg-gray-100 hover:text-amber-500"><i
                                    class="fa-solid fa-camera"></i></button>
                        </div>

                        <div class="flex flex-col justify-center gap-0 w-46 h-46 ml-8">
                            <h1>Username</h1>
                            <h6>@tagname</h6>
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

            <div class="grid gap-4 h-auto md:grid-cols-3">

                <div class="hidden md:flex flex-col h-auto gap-12">

                    <div class="min-h-[400px] bg-white rounded-xl text-2xl border-solid border-2 shadow-xl">
                        <section
                            class="select-none md:text-2xl lg:text-base flex gap-2 cursor-pointer items-center h-1/4 p-6 border-solid border-b-2 border-gray-300 hover:bg-gray-100">
                            <i class="md:text-6xl lg:text-5xl mr-2 fa-regular fa-envelope"></i>
                            <span>Invitation Request</span>
                            <span class="flex text-gray text-center border-solid border-gray-950 ml-4">5</span>
                        </section>

                        <section
                            class="select-none md:text-2xl lg:text-base flex gap-2 cursor-pointer items-center h-1/4 p-6 border-solid border-b-2 border-gray-300 hover:bg-gray-100">
                            <i class="md:text-6xl lg:text-4xl mr-2 fa-solid fa-user-lock"></i>
                            <span>Blocked Accounts</span>
                            <span class="flex text-gray text-center border-solid border-gray-950 ml-4">0</span>
                        </section>

                        <section
                            class="select-none md:text-2xl lg:text-base flex gap-2 cursor-pointer items-center h-1/4 p-6 border-solid border-b-2 border-gray-300 hover:bg-gray-100">
                            <i class="md:text-6xl lg:text-5xl mr-2 fa-solid fa-circle-plus"></i>
                            <span>Create Page</span>
                        </section>

                        <section
                            class="select-none md:text-2xl lg:text-base flex gap-2 cursor-pointer items-center h-1/4 p-6 border-solid hover:bg-gray-100">
                            <i class="md:text-6xl lg:text-5xl mr-2 fa-solid fa-circle-plus"></i>
                            <span>Create Group</span>
                        </section>
                    </div>

                    <div class="min-h-[600px] bg-white rounded-xl text-3xl border-solid border-2 shadow-xl">

                        <div class="overflow-hidden">
                            <section
                                class="flex items-center h-auto p-6 border-solid border-b-2 border-gray-300 select-none">
                                <span class="md:text-lg lg:text-xl">Most Trending Groups</span>
                            </section>

                            <section
                                class="cursor-pointer flex gap-4 items-center h-auto p-6 border-solid border-b-2 border-gray-300 select-none hover:bg-gray-100">
                                <img src="https://shorturl.at/ftBGW" class="w-16 h-16 rounded-full" alt="profile">
                                <div class="flex flex-col gap-1 w-3/5">
                                    <span class="md:text-lg lg:text-xl truncate overflow-hidden">Page Name</span>
                                    <span class="md:text-sm lg:text-base text-gray-500 truncate overflow-hidden">Some
                                        Description</span>
                                </div>
                            </section>

                        </div>

                        <section class="p-6 md:text-lg lg:text-xl text-amber-500">
                            <a href="" class="cursor-pointer hover:text-amber-600">Show more</a>
                        </section>



                    </div>


                </div>

                <div class="flex flex-col gap-12 col-span-2 min-h-[140%] max-h-screen overflow-x-hidden overflow-y-scroll">

                    <div class="flex flex-col shadow-md">
                        <nav class="flex justify-center border-b-2 p-4 text-md md:text-xl">
                            <ul class="flex text-center select-none space-x-20 md:space-x-32 lg:space-x-1">
                                <li id="post_tab_btn"
                                    class="w-24 md:w-48 hover: border-amber-500 hover:border-b-4 hover:text-amber-400 border-amber-500 border-b-4">
                                    <span class="text-amber-500">Posts</span>
                                </li>
                                <li id="pages_tab_btn"
                                    class="w-24 md:w-48 hover: border-amber-500 hover:border-b-4 hover:text-amber-400">
                                    <span>Pages</span>
                                </li>
                                <li id="groups_tab_btn"
                                    class="w-24 md:w-48 hover: border-amber-500 hover:border-b-4 hover:text-amber-400">
                                    <span>Groups</span>
                                </li>
                            </ul>
                        </nav>
                        <div class="relative flex justify-around text-lg p-4 items-center select-none">
                            <span id="create_post_arrow"
                                class="rotate-45 absolute h-6 w-6 bg-white lg:bottom-[-12px] left-[26%] z-0"></span>
                            <span id="life_event_arrow"
                                class="hidden rotate-45 absolute h-6 w-6 bg-white lg:bottom-[-14px] right-[23%] z-0"></span>
                            <span id="create_post" class="hover:text-gray-500 text-amber-500"><i
                                    class="fa-solid fa-pencil"></i> Create Post</span>
                            <span id="life_event" class="hover:text-gray-500"><i class="fa-regular fa-calendar-days"></i>
                                Life Event</span>
                        </div>

                        <section id="create_post_section">
                            <div class="h-34 bg-white p-4 rounded-lg">
                                <div class="flex gap-2 items-center ml-6">
                                    <a href="" class="h-16 w-16"><img src="images/profile.png"
                                            class="rounded-full"></a>
                                    <textarea class="w-full min-h-24 max-h-auto resize-none px-2 py-8 z-10" name="" id=""
                                        placeholder="Type here..."></textarea>
                                </div>
                            </div>

                            <hr class="h-1 bg-gray-200">

                            <div class="flex justify-between p-4 bg-white">
                                <div class="flex pl-12 gap-12 items-center text-2xl md:text-4xl lg:text-2xl text-gray-400">
                                    <button><i class="hover:text-amber-500 fa-regular fa-image"></i></button>
                                    <button><i class="hover:text-amber-500 fa-solid fa-location-dot"></i></button>
                                    <button><i class="hover:text-amber-500 fa-regular fa-face-smile"></i></button>
                                </div>

                                <button
                                    class="text-white bg-amber-500 px-14 py-4 rounded-full mr-16 text-md md:text-lg hover:bg-amber-600">Post</button>

                            </div>
                        </section>

                        <section id="life_event_section">
                            <div class="h-34 bg-white p-4 rounded-lg">
                                <div class="flex gap-2 items-center ml-6">
                                    <img src="images/profile.png" class="h-16 w-16 rounded-full">
                                    <textarea class="w-full min-h-24 max-h-auto resize-none px-2 py-8 z-10" name="" id=""
                                        placeholder="Type here..."></textarea>
                                </div>
                            </div>
                        </section>
                    </div>

                    <div class="rounded-lg bg-white min-h-96 max-h-auto shadow-xl">

                        <div class="flex justify-between px-8 py-4">
                            <div class="flex items-center">
                                <a href="" class="h-16 w-16 "><img src="images/profile.png" alt="Profile"
                                        class="rounded-full"></a>

                                <div class="min-w-auto h-auto p-4 text-gray-500">
                                    <h2 class="text-xl">Username</h2>
                                    <h6 class="text-md">@name • 22 hours ago</h6>
                                </div>
                            </div>
                            <button>
                                <i class="hover:bg-gray-200 fa-solid fa-ellipsis-vertical p-4 rounded-full w-12 h-12"></i>
                            </button>
                        </div>

                        <div class="pl-8 pr-24 text-justify py-4 h-auto">
                            <p class="leading-8">
                                My first Post
                            </p>
                        </div>

                        <hr class="h-1 bg-gray-200">
                        <div
                            class="flex justify-center space-x-20 md:space-x-48 lg:space-x-28 items-center h-12 md:text-xl">
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
                                <a href="" class="h-16 w-16 "><img src="images/profile.png" alt="Profile"
                                        class="rounded-full"></a>

                                <div
                                    class="flex flex-col md:flex-row justify-between rounded-lg min-w-auto h-auto outline p-2 text-gray-500 w-3/4">
                                    <textarea class="h-12 w-full resize-none text-lg p-2 bg-transparent active:border-none" placeholder="Reply ... "></textarea>
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

                    <div class="rounded-lg bg-white min-h-96 max-h-auto shadow-xl">

                        <div class="flex justify-between px-8 py-4">
                            <div class="flex items-center">
                                <a href="" class="h-16 w-16 "><img src="images/profile.png" alt="Profile"
                                        class="rounded-full"></a>

                                <div class="min-w-auto h-auto p-4 text-gray-500">
                                    <h2 class="text-xl">Username</h2>
                                    <h6 class="text-md">@name • 22 hours ago</h6>
                                </div>
                            </div>
                            <button>
                                <i class="hover:bg-gray-200 fa-solid fa-ellipsis-vertical p-4 rounded-full w-12 h-12"></i>
                            </button>
                        </div>

                        <div class="pl-8 pr-24 text-justify py-4 h-auto">
                            <p class="leading-8">
                                My first Post
                            </p>
                        </div>

                        <hr class="h-1 bg-gray-200">
                        <div
                            class="flex justify-center space-x-20 md:space-x-48 lg:space-x-28 items-center h-12 md:text-xl">
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
                                <a href="" class="h-16 w-16 "><img src="images/profile.png" alt="Profile"
                                        class="rounded-full"></a>

                                <div
                                    class="flex flex-col md:flex-row justify-between rounded-lg min-w-auto h-auto outline p-2 text-gray-500 w-3/4">
                                    <textarea class="h-12 w-full resize-none text-lg p-2 bg-transparent active:border-none" placeholder="Reply ... "></textarea>
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

                    <div class="rounded-lg bg-white min-h-96 max-h-auto shadow-xl">

                        <div class="flex justify-between px-8 py-4">
                            <div class="flex items-center">
                                <a href="" class="h-16 w-16 "><img src="images/profile.png" alt="Profile"
                                        class="rounded-full"></a>

                                <div class="min-w-auto h-auto p-4 text-gray-500">
                                    <h2 class="text-xl">Username</h2>
                                    <h6 class="text-md">@name • 22 hours ago</h6>
                                </div>
                            </div>
                            <button>
                                <i class="hover:bg-gray-200 fa-solid fa-ellipsis-vertical p-4 rounded-full w-12 h-12"></i>
                            </button>
                        </div>

                        <div class="pl-8 pr-24 text-justify py-4 h-auto">
                            <p class="leading-8">
                                My first Post
                            </p>
                        </div>

                        <hr class="h-1 bg-gray-200">
                        <div
                            class="flex justify-center space-x-20 md:space-x-48 lg:space-x-28 items-center h-12 md:text-xl">
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
                                <a href="" class="h-16 w-16 "><img src="images/profile.png" alt="Profile"
                                        class="rounded-full"></a>

                                <div
                                    class="flex flex-col md:flex-row justify-between rounded-lg min-w-auto h-auto outline p-2 text-gray-500 w-3/4">
                                    <textarea class="h-12 w-full resize-none text-lg p-2 bg-transparent active:border-none" placeholder="Reply ... "></textarea>
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

                    <div class="rounded-lg bg-white min-h-96 max-h-auto shadow-xl">

                        <div class="flex justify-between px-8 py-4">
                            <div class="flex items-center">
                                <a href="" class="h-16 w-16 "><img src="images/profile.png" alt="Profile"
                                        class="rounded-full"></a>

                                <div class="min-w-auto h-auto p-4 text-gray-500">
                                    <h2 class="text-xl">Username</h2>
                                    <h6 class="text-md">@name • 22 hours ago</h6>
                                </div>
                            </div>
                            <button>
                                <i class="hover:bg-gray-200 fa-solid fa-ellipsis-vertical p-4 rounded-full w-12 h-12"></i>
                            </button>
                        </div>

                        <div class="pl-8 pr-24 text-justify py-4 h-auto">
                            <p class="leading-8">
                                My first Post
                            </p>
                        </div>

                        <hr class="h-1 bg-gray-200">
                        <div
                            class="flex justify-center space-x-20 md:space-x-48 lg:space-x-28 items-center h-12 md:text-xl">
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
                                <a href="" class="h-16 w-16 "><img src="images/profile.png" alt="Profile"
                                        class="rounded-full"></a>

                                <div
                                    class="flex flex-col md:flex-row justify-between rounded-lg min-w-auto h-auto outline p-2 text-gray-500 w-3/4">
                                    <textarea class="h-12 w-full resize-none text-lg p-2 bg-transparent active:border-none" placeholder="Reply ... "></textarea>
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
                </div>

                <!-- until here -->

                <div id="pages_tab" class="flex flex-col gap-12 col-span-2 max-h-screen overflow-y-auto">

                </div>

                <div id="groups_tab" class="flex flex-col gap-12 col-span-2 max-h-screen overflow-y-auto">

                </div>
            </div>

        </div>
        <div class="hidden md:flex flex-col h-auto gap-12 mt-12">
            <div class="min-h-[600px] bg-white rounded-xl text-2xl border-solid border-2 shadow-xl">
                <div class="overflow-hidden">
                    <section class="flex items-center h-auto p-6 border-solid border-b-2 border-gray-300 select-none">
                        <span class="md:text-lg lg:text-xl">Most Active Questions</span>
                    </section>

                    <section
                        class="cursor-pointer flex gap-4 items-center h-auto p-6 border-solid border-b-2 border-gray-300 select-none hover:bg-gray-100">
                        <img src="https://shorturl.at/ftBGW" class="w-16 h-16 rounded-full" alt="profile">
                        <span class="truncate overflow-hidden md:text-lg lg:text-xl">What is Koronaasdassa?</span>
                    </section>
                </div>

                <section class="p-6 md:text-lg lg:text-xl text-amber-500">
                    <a href="" class="cursor-pointer hover:text-amber-600">Show more</a>
                </section>
            </div>
            <div class="min-h-[600px] bg-white rounded-xl text-3xl border-solid border-2 shadow-xl">

                <div class="overflow-hidden">
                    <section class="flex items-center h-auto p-6 border-solid border-b-2 border-gray-300 select-none">
                        <span class="md:text-lg lg:text-xl">Newest Events</span>
                    </section>

                    <section
                        class="cursor-pointer flex gap-4 items-center h-auto p-6 border-solid border-b-2 border-gray-300 select-none hover:bg-gray-100">
                        <img src="https://shorturl.at/ftBGW" class="w-16 h-16 rounded-full" alt="profile">
                        <div class="flex flex-col gap-1 w-3/5">
                            <span class="md:text-lg lg:text-xl truncate overflow-hidden">Event Nameasdsasa</span>
                            <span class="md:text-base lg:text-base text-gray-500 truncate overflow-hidden">Created by
                                Naasdsasame</span>
                        </div>
                    </section>
                </div>

                <section class="p-6 md:text-lg lg:text-xl text-amber-500">
                    <a href="" class="cursor-pointer hover:text-amber-600">Show more</a>
                </section>


            </div>

            <div class="min-h-[600px] bg-white rounded-xl text-3xl border-solid border-2 shadow-xl">

                <div class="overflow-hidden">
                    <section class="flex items-center h-auto p-6 border-solid border-b-2 border-gray-300 select-none">
                        <span class="md:text-lg lg:text-xl">Most Active Pages</span>
                    </section>

                    <section
                        class="cursor-pointer flex gap-4 items-center h-auto p-6 border-solid border-b-2 border-gray-300 select-none hover:bg-gray-100">
                        <img src="https://shorturl.at/ftBGW" class="w-16 h-16 rounded-full" alt="profile">
                        <div class="flex flex-col gap-1 w-3/5">
                            <span class="md:text-lg lg:text-xl truncate overflow-hidden">Page asdsaasasName</span>
                            <span class="md:text-sm lg:text-base text-gray-500 truncate overflow-hidden">Some
                                Dasdsaasescription</span>
                        </div>
                    </section>
                </div>

                <section class="p-6 md:text-lg lg:text-xl text-amber-500">
                    <a href="" class="cursor-pointer hover:text-amber-600">Show more</a>
                </section>
            </div>
        </div>
    </section>

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
