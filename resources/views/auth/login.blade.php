@extends('layouts.login_layout')

@section('content')
<section class="h-screen">
    <div class="h-full">
      <!-- Left column container with background-->
      <div
        class="g-6 flex h-full flex-wrap items-center justify-center lg:justify-between">
        <div
          class="shrink-1 mb-12 grow-0 basis-auto md:mb-0 md:w-9/12 md:shrink-0 lg:w-6/12 xl:w-6/12">
          <img
            src="images/login-social.svg"
            class="w-full"
            alt="Social SVG" />
        </div>

        <!-- Right column container -->
        <div class="mb-12 md:mb-0 md:w-8/12 lg:w-5/12 xl:w-5/12">
                <h1 class="text-center">Social App</h1>
                <div class="my-4 flex items-center before:mt-0.5 before:flex-1 before:border-t before:border-neutral-300 after:mt-0.5 after:flex-1 after:border-t after:border-neutral-300">

                </div>
          <form action="{{ route('login.loggedin') }}" method="post">
            <!--Sign in section-->
            @csrf
            <div class="flex flex-col gap-4 items-center justify-center lg:justify-start">
                <p class="mb-0 mr-4 text-lg">Sign in with</p>
                    <div class="flex justify-between">
                        <!-- Facebook -->
                        <a href="/auth/facebook/redirect"
                            class="flex items-center justify-center mx-1 h-9 w-9 rounded-full bg-blue-600 text-white hover:border-gray-300 hover:border-2">

                            <i class="fa-brands fa-facebook"></i>
                        </a>
                        <!-- Twitter -->
                        <a href="/auth/twitter/redirect"
                            class="flex items-center justify-center mx-1 h-9 w-9 rounded-full bg-blue-400 text-white hover:border-gray-300 hover:border-2">

                            <i class="fa-brands fa-twitter"></i>
                        </a>
                        <!-- Linkedin -->
                        <a href="/auth/linkedin/redirect"
                            class="flex items-center justify-center mx-1 h-9 w-9 rounded-full bg-blue-500 text-white hover:border-gray-300 hover:border-2">

                            <i class="fa-brands fa-linkedin"></i>
                        </a>

                        <!-- Google -->
                        <a href="/auth/google/redirect"
                            class="flex items-center justify-center mx-1 h-9 w-9 rounded-full bg-blue-500 text-white hover:border-gray-300 hover:border-2">
                            <i class="fa-brands fa-google"></i>
                        </a>
                    </div>
            </div>

            <!-- Separator between social media sign in and email/password sign in -->
            <div
              class="my-4 flex items-center before:mt-0.5 before:flex-1 before:border-t before:border-neutral-300 after:mt-0.5 after:flex-1 after:border-t after:border-neutral-300">
              <p
                class="mx-4 mb-0 text-center font-semibold dark:text-white">
                Or
              </p>
            </div>

            <!-- Email input -->
            <div class="relative mb-6" data-te-input-wrapper-init>
              <input
                type="text"
                name="email"
                id="email"
                class="peer block min-h-[auto] w-full rounded
                border-0 bg-transparent px-3 py-[0.32rem] leading-[2.15]
                outline-none transition-all duration-200 ease-linear
                focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100
                motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200
                [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                id="exampleFormControlInput2"
                placeholder="Email address" />
              <label
                for="exampleFormControlInput2"
                class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[2.15] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[1.15rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[1.15rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                >Email address
              </label>
            </div>

            <!-- Password input -->
            <div class="relative mb-6" data-te-input-wrapper-init>
              <input
                type="password"
                name="password"
                id="password"
                class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[2.15] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                id="exampleFormControlInput22"
                placeholder="Password" />
              <label
                for="exampleFormControlInput22"
                class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[2.15] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[1.15rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[1.15rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                >Password
              </label>
            </div>

            <div class="mb-6 flex items-center justify-between">
              <!-- Remember me checkbox -->
              <div class="mb-[0.125rem] block min-h-[1.5rem] pl-[1.5rem]">
                <input
                  class="relative float-left -ml-[1.5rem] mr-[6px] mt-[0.15rem]
                  h-[1.125rem] w-[1.125rem] appearance-none rounded-[0.25rem]
                  border-[0.125rem] border-solid border-neutral-300 outline-none
                  before:pointer-events-none before:absolute before:h-[0.875rem]
                  before:w-[0.875rem] before:scale-0 before:rounded-full
                  before:bg-transparent before:opacity-0 before:shadow-[0px_0px_0px_13px_transparent]
                   before:content-[''] checked:border-primary checked:bg-amber-500 checked:before:opacity-[0.16] checked:after:absolute checked:after:-mt-px checked:after:ml-[0.25rem] checked:after:block checked:after:h-[0.8125rem] checked:after:w-[0.375rem] checked:after:rotate-45 checked:after:border-[0.125rem] checked:after:border-l-0 checked:after:border-t-0 checked:after:border-solid checked:after:border-white checked:after:bg-transparent checked:after:content-[''] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:before:transition-[box-shadow_0.2s,transform_0.2s] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-[0.125rem] focus:after:content-[''] checked:focus:before:scale-100 checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca] checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:after:-mt-px checked:focus:after:ml-[0.25rem] checked:focus:after:h-[0.8125rem] checked:focus:after:w-[0.375rem] checked:focus:after:rotate-45 checked:focus:after:rounded-none checked:focus:after:border-[0.125rem] checked:focus:after:border-l-0 checked:focus:after:border-t-0 checked:focus:after:border-solid checked:focus:after:border-white checked:focus:after:bg-transparent dark:border-neutral-600 dark:checked:border-primary dark:checked:bg-primary dark:focus:before:shadow-[0px_0px_0px_13px_rgba(255,255,255,0.4)] dark:checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca]"
                  type="checkbox"
                  value=""
                  name="remember"
                  id="remember"/>
                <label
                  class="inline-block pl-[0.15rem] hover:cursor-pointer"
                  for="exampleCheck2">
                  Remember me
                </label>
              </div>

              <!--Forgot password link-->
              <a href="#!" class="hover:text-amber-500">Forgot password?</a>
            </div>

            <!-- Login button -->
            <div class="text-center lg:text-left">
              <button
                type="submit"
                class="bg-amber-500 px-6 text-white rounded-md py-3">
                Login
              </button>

              <!-- Register link -->
              <p class="mb-0 mt-2 pt-1 text-sm font-semibold">
                Don't have an account?
                {{-- <a
                  href="{{ route('register') }}"
                  class="text-danger transition duration-150
                  ease-in-out hover:text-amber-600
                  focus:text-danger-600 active:text-danger-700"
                  >Register</a
                > --}}
              </p>
            </div>
          </form>
        </div>
      </div>
    </div>
</section>
@endsection