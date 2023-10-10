@extends('layouts.app')

@section('content')
    <section class="flex mt-8 mb-8 mr-12 ml-12 justify-center grid grid-cols-4 gap-4">


        <div class="col-span-3 h-screen">
            <div class="bg-[url('{{ asset('images/profile-bg.jpg') }}')] w-full h-96 mb-8 rounded-lg p-12 ">
                <span class="flex justify-end"><i class="text-2xl fa-solid fa-camera"></i></span>

                <section class="flex justify-between w-full mt-20 h-auto">
                        <div class="flex w-46 h-46">
                            <div class="relative">
                                <img src="{{ asset('images/profile.png') }}" class="">
                                <span class="absolute bottom-5 left-36 text-3xl text-white"><i class="fa-solid fa-camera"></i></span>
                            </div>


                            <div class="flex flex-col justify-center gap-0 w-46 h-46 ml-8">
                                <h1>Username</h1>
                                <h6>@tagname</h6>
                                <h3>UI/UX Designer for web and mobile</h3>
                                <span>19 Following</span>
                            </div>
                        </div>

                        <button class="w-40 mt-36 bg-white text-amber-500 p-4 rounded-full">Edit Profile</button>

                </section>
            </div>

            <div class="grid grid-cols-3 gap-4 h-auto">

                <div class="flex flex-col h-auto gap-12">

                    <div class="min-h-[400px] bg-white rounded-xl text-2xl border-solid border-2 border-gray-600">
                        <section class="flex items-center h-1/4 p-6 border-solid border-b-2 border-gray-600">
                            <i class="text-6xl mr-2 fa-regular fa-envelope"></i>
                            <div class="flex flex-end ml-8">

                                <span>Invitation Request</span>
                                <span class="flex text-gray text-center border-solid border-gray-950 ml-4">5</span>

                            </div>
                        </section>

                        <section class="flex items-center h-1/4 p-6 border-solid border-b-2 border-gray-600">
                            <i class="text-6xl mr-2 fa-solid fa-user-lock"></i>
                            <div class="flex ml-4">
                                <span>Blocked Accounts</span>
                                <span class="flex text-gray text-center border-solid border-gray-950 ml-4">0</span>
                            </div>

                        </section>

                        <section class="flex items-center h-1/4 p-6 border-solid border-b-2 border-gray-600">

                            <i class="text-6xl mr-2 fa-solid fa-circle-plus"></i>

                            <span class="ml-8">Create Page</span>


                        </section>

                        <section class="flex items-center h-1/4 p-6 border-solid border-gray-600">

                            <i class="text-6xl mr-2 fa-solid fa-circle-plus"></i>
                            <span class="ml-8">Create Group</span>

                        </section>



                    </div>

                    <div class="min-h-[600px] bg-white rounded-xl text-2xl border-solid border-2 border-gray-600">
                        <section class="flex items-center h-1/4 p-6 border-solid border-b-2 border-gray-600">
                            <div class="flex flex-end ml-8">

                                <span>Most Trending</span>
                                <span class="flex text-gray text-center border-solid border-gray-950 ml-4">5</span>

                            </div>
                        </section>

                        <section class="flex items-center h-1/4 p-6 border-solid border-b-2 border-gray-600">
                            <div class="flex flex-end ml-8">

                                <span>Most Trending</span>
                                <span class="flex text-gray text-center border-solid border-gray-950 ml-4">5</span>

                            </div>
                        </section>

                        <section class="flex items-center h-1/4 p-6 border-solid border-b-2 border-gray-600">
                            <div class="flex flex-end ml-8">

                                <span>Most Trending</span>
                                <span class="flex text-gray text-center border-solid border-gray-950 ml-4">5</span>

                            </div>
                        </section>

                        <section class="flex items-center h-1/4 p-6 border-solid border-b-2 border-gray-600">
                            <div class="flex flex-end ml-8">

                                <span>Most Trending</span>
                                <span class="flex text-gray text-center border-solid border-gray-950 ml-4">5</span>

                            </div>
                        </section>
                    </div>


                </div>

                <div class="col-span-2 h-96 bg-purple-200">

                    <nav class="flex justify-center bg-red-400 p-4 text-xl">
                        <ul class="flex space-x-64">
                            <li>Posts</li>
                            <li>Pages</li>
                            <li>Groups</li>
                        </ul>
                    </nav>

                </div>

            </div>

        </div>
        <div class="flex flex-col bg-blue-200 h-auto gap-12">

            <div class="h-96 bg-red-200 rounded-md"></div>
            <div class="h-96 bg-green-200 rounded-md"></div>

        </div>

    </section>

@endsection



