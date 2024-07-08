@extends('layouts.app')

@section('OG')
    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@">
    <meta name="twitter:creator" content="@">
    <meta name="twitter:title" content="Monodeep Samanata Blogs | All Latest Contribution of Monodeep ">
    <meta name="twitter:description" content="Stay updated with Monodeep Samanta's blog, featuring insights and tips from an experienced  UI/UX designer.">
    <meta name="twitter:image" content="{{ asset('logo.jpg') }}">

    <!-- Facebook -->
    <meta property="og:url" content="{{ route('homepage') }}">
    <meta property="og:title" content="Monodeep Samanata Blogs | All Latest Contribution of Monodeep ">
    <meta property="og:description" content="Stay updated with Monodeep Samanta's blog, featuring insights and tips from an experienced  UI/UX designer.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{ asset('logo.jpg') }}">
    <meta property="og:image:type" content="image/png">
@endsection
@section('content')
    <div class="hidden px-5 mx-auto border-gray-200 container-fluid lg:px-24 bg-gray-50 md:block dark:bg-neutral-600">
        <div class="grid items-center grid-cols-12">
            <div class="col-span-7">
                <ul class="flex items-center py-3">
                    <li class="ltr:mr-4 rtl:ml-4">
                        <p class="mb-0 text-gray-800 text-13 dark:text-gray-50"> <i class="mdi mdi-map-marker"></i> Your Location: <a href="javascript:void(0)" class="font-medium">New
                                Caledonia</a></p>
                    </li>
                    <li>
                        <ul class="flex flex-wrap gap-4 text-gray-800 ">
                            <li class="transition-all duration-200 ease-in hover:text-green-500 dark:text-gray-50 dark:hover:text-green-500"><a href="javascript:void(0)"
                                    class="social-link"><i class="uil uil-whatsapp"></i></a></li>
                            <li class="transition-all duration-200 ease-in hover:text-green-500 dark:text-gray-50 dark:hover:text-green-500"><a href="javascript:void(0)"
                                    class="social-link"><i class="uil uil-facebook-messenger-alt"></i></a></li>
                            <li class="transition-all duration-200 ease-in hover:text-green-500 dark:text-gray-50 dark:hover:text-green-500"><a href="javascript:void(0)"
                                    class="social-link"><i class="uil uil-instagram"></i></a></li>
                            <li class="transition-all duration-200 ease-in hover:text-green-500 dark:text-gray-50 dark:hover:text-green-500"><a href="javascript:void(0)"
                                    class="social-link"><i class="uil uil-envelope"></i></a></li>
                            <li class="transition-all duration-200 ease-in hover:text-green-500 dark:text-gray-50 dark:hover:text-green-500"><a href="javascript:void(0)"
                                    class="social-link"><i class="uil uil-twitter-alt"></i></a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="col-span-5 ltr:ml-auto rtl:mr-auto">
                <ul class="flex items-center gap-4">
                    <li>
                        <a href="#signupModal" class="py-3 font-medium text-gray-800 text-13 dark:text-gray-50" data-tw-toggle="modal" data-tw-target="#modal-id_form"><i
                                class="uil uil-lock ltr:mr-1 rtl:ml-1"></i>Sign Up</a>

                        <div class="relative z-50 hidden modal" id="modal-id_form" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                            <div class="fixed top-0 bottom-0 left-0 right-0 z-50 overflow-hidden">
                                <div class="absolute inset-0 transition-opacity bg-black bg-opacity-60 modal-overlay"></div>
                                <div class="box-content p-4 mx-auto animate-translate sm:max-w-lg">
                                    <div class="relative overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl top-36 dark:bg-neutral-800">
                                        <div class="p-12 bg-white dark:bg-neutral-800">
                                            <div class="mb-4 text-center">
                                                <h5 class="mb-1 text-gray-800 dark:text-gray-50">Sign Up</h5>
                                                <p class="text-gray-500 dark:text-gray-300">Sign Up and get access to all the features of Jobcy</p>
                                            </div>
                                            <div class="mb-4">
                                                <label for="usernameInput" class="block text-gray-900 dark:text-gray-50 ltr:text-left rtl:text-right">Username</label>
                                                <input type="text"
                                                    class="w-full mt-2 border-gray-100 rounded placeholder:text-13 placeholder:text-gray-200 focus:ring-1 focus:ring-violet-500 dark:bg-transparent dark:text-gray-50 dark:border-neutral-600"
                                                    id="usernameInput" placeholder="Enter your username">
                                            </div>
                                            <div class="mb-4">
                                                <label for="emailInput" class="block text-gray-900 dark:text-gray-50 ltr:text-left rtl:text-right">Email</label>
                                                <input type="email"
                                                    class="w-full mt-2 border-gray-100 rounded placeholder:text-13 placeholder:text-gray-200 focus:ring-1 focus:ring-violet-500 dark:bg-transparent dark:text-gray-50 dark:border-neutral-600"
                                                    id="usernameInput" placeholder="Enter your email">
                                            </div>
                                            <div class="mb-4">
                                                <label for="passwordInput" class="block text-gray-900 dark:text-gray-50 ltr:text-left rtl:text-right">Password</label>
                                                <input type="password"
                                                    class="w-full mt-2 border-gray-100 rounded placeholder:text-13 placeholder:text-gray-200 focus:ring-1 focus:ring-violet-500 dark:bg-transparent dark:text-gray-50 dark:border-neutral-600"
                                                    id="usernameInput" placeholder="Enter your password">
                                            </div>
                                            <div class="mb-3 ltr:float-left rtl:float-right">
                                                <a href="#!">
                                                    <input
                                                        class="mr-1 align-middle rounded cursor-pointer group-data-[theme-color=violet]:checked:bg-violet-500 group-data-[theme-color=sky]:checked:bg-sky-500 group-data-[theme-color=red]:checked:bg-red-500 group-data-[theme-color=green]:checked:bg-green-500 group-data-[theme-color=pink]:checked:bg-pink-500 group-data-[theme-color=blue]:checked:bg-blue-500 checked:ring-0 checked:ring-offset-0 focus:ring-0 focus:ring-offset-0 dark:bg-neutral-800 dark:border-neutral-500 dark:checked:bg-violet-500/20"
                                                        type="checkbox" id="flexCheckDefault">
                                                    <label class="dark:text-gray-50" for="flexCheckDefault">I agree to the <a href="javascript:void(0)"
                                                            class="underline group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">Terms
                                                            and conditions</a></label>
                                                </a>
                                            </div>
                                            <div class="text-center">
                                                <button type="submit"
                                                    class="w-full mt-4 text-white border-transparent btn group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500">Sign
                                                    Up</button>
                                            </div>
                                            <div class="mt-4 text-center">
                                                <p class="mb-0 text-gray-800 dark:text-gray-300">Already a member ? <a href="sign-in.html"
                                                        class="font-medium underline group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">
                                                        Sign-in </a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="relative hidden dropdown language sm:block">
                            <button class="px-4 py-3 border-0 btn dropdown-toggle" type="button" aria-expanded="false" data-dropdown-toggle="navNotifications">
                                <img src="assets/images/flags/us.jpg" alt="" class="h-4" id="header-lang-img">
                            </button>
                            <div class="absolute top-auto z-50 hidden w-40 list-none bg-white rounded shadow dropdown-menu -left-20 dark:bg-neutral-700" id="navNotifications">
                                <ul class="border border-gray-50 dark:border-gray-700" aria-labelledby="navNotifications">
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50/50 dark:text-gray-200 dark:hover:bg-neutral-600/50 dark:hover:text-white"><img
                                                src="assets/images/flags/us.jpg" alt="user-image" class="inline-block h-3 mr-1"> <span class="align-middle">English</span></a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50/50 dark:text-gray-200 dark:hover:bg-neutral-600/50 dark:hover:text-white"><img
                                                src="assets/images/flags/spain.jpg" alt="user-image" class="inline-block h-3 mr-1"> <span class="align-middle">Spanish</span></a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50/50 dark:text-gray-200 dark:hover:bg-neutral-600/50 dark:hover:text-white"><img
                                                src="assets/images/flags/germany.jpg" alt="user-image" class="inline-block h-3 mr-1"> <span class="align-middle">German</span></a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50/50 dark:text-gray-200 dark:hover:bg-neutral-600/50 dark:hover:text-white"><img
                                                src="assets/images/flags/italy.jpg" alt="user-image" class="inline-block h-3 mr-1"> <span class="align-middle">Italian</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>






    <div class="fixed z-40 flex flex-col gap-3 ltr:left-0 rtl:right-0 top-[330px]">
        <!-- light-dark mode button -->
        <a href="javascript: void(0);" id="ltr-rtl"
            class="z-40 px-3 py-3 font-medium text-white transition-all duration-300 ease-linear group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 text-14 hover:bg-violet-700 ltr:rounded-r rtl:rounded-l"
            onclick="changeMode(event)">
            <span class="ltr:hidden">LTR</span>
            <span class="rtl:hidden">RTL</span>
        </a>

    </div>

    <div class="fixed transition-all duration-300 ease-linear top-[27.5rem] switcher" id="style-switcher">
        <div class="w-48 p-4 bg-white shadow-md">
            <div>
                <h3 class="mb-2 font-semibold text-gray-900 text-16">Select your color</h3>
                <ul class="flex gap-3 ">
                    <li>
                        <a class="h-10 w-10 bg-[#815DF2] block rounded-full" data-color="violet" href="javascript: void(0);"></a>
                    </li>
                    <li>
                        <a class="h-10 w-10 bg-[#69cdf1] block rounded-full" data-color="sky" href="javascript: void(0);"></a>
                    </li>
                    <li>
                        <a class="h-10 w-10 bg-[#dd4948] block rounded-full" data-color="red" href="javascript: void(0);"></a>
                    </li>
                </ul>
                <ul class="flex gap-3 mt-4">
                    <li>
                        <a class="h-10 w-10 bg-[#38c284] block rounded-full" data-color="green" href="javascript: void(0);"></a>
                    </li>
                    <li>
                        <a class="h-10 w-10 bg-[#e35490] block rounded-full" data-color="pink" href="javascript: void(0);"></a>
                    </li>
                    <li>
                        <a class="h-10 w-10 bg-[#5276f4] block rounded-full" data-color="blue" href="javascript: void(0);"></a>
                    </li>
                </ul>
            </div>

            <div class="mt-5">
                <h3 class="mb-2 font-semibold text-gray-900 text-16">Light/dark Layout</h3>
                <div class="flex justify-center mt-2">
                    <!-- light-dark mode button -->
                    <a href="javascript: void(0);" id="mode" class="z-40 px-6 py-2 font-normal text-white transition-all duration-300 ease-linear rounded text-14 bg-zinc-800"
                        onclick="changeMode(event)">
                        <i class="hidden text-xl uil uil-brightness dark:text-white dark:inline-block"></i>
                        <i class="inline-block text-xl uil uil-moon dark:text-zinc-800 dark:hidden"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- light-dark mode button -->
    <a href="javascript: void(0);" onclick="toggleSwitcher()"
        class="fixed z-40 flex flex-col gap-3 px-4 py-3 font-normal text-white group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 top-96 text-14 ltr:rounded-r rtl:rounded-l">
        <i class="text-xl mdi mdi-cog mdi-spin"></i>
    </a>

    <div class="main-content">
        <div class="page-content">



            <!-- Start grid -->
            <section class="py-16">
                <div class="container mx-auto">
                    <div class="grid grid-cols-12 gap-y-10 lg:gap-10">
                        <div class="col-span-12 lg:col-span-8">
                            <div class="border rounded-md border-gray-100/30 dark:border-neutral-600/80">
                                <div class="relative">
                                    <img src="{{ asset('storage/' . $circular->thumbnail) }}" alt="" class="rounded-md img-fluid mb-7 w-full h-96">
                                    <div class="absolute z-20 -bottom-7 left-7 ">
                                        <img src="{{ asset('assets/images/blog/img-10.jpg') }}" alt="" class="rounded-md img-fluid h-14  w-14 ">
                                    </div>
                                </div>
                                <div class="p-6">
                                    <div class="grid grid-cols-12">
                                        <div class="col-span-12 lg:col-span-8">
                                            <div class="relative">
                                                <h5 class="mb-1 text-gray-600 dark:text-gray-50 text-xl font-semibold">{{ $circular->title }}</h5>
                                                <ul class="flex gap-4 text-gray-500 dark:text-gray-300">
                                                    <li>
                                                        <i class="mdi mdi-account"></i> {{ $circular->vacancy }} Vacancy
                                                    </li>
                                                    <li class="text-yellow-500">

                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-span-12 lg:col-span-4">
                                            <div class="flex gap-3 md:justify-end">
                                                <div
                                                    class="w-8 h-8 text-center text-gray-100 transition-all duration-300 bg-transparent border rounded cursor-pointer border-gray-100/50 hover:bg-red-600 hover:text-white hover:border-transparent dark:border-zinc-700">
                                                    <a href="javascript:void(0)"><i class="uil uil-heart-alt text-lg leading-[1.8]"></i></a>
                                                </div>
                                                <div
                                                    class="w-8 h-8 text-center text-gray-100 transition-all duration-300 bg-transparent border rounded cursor-pointer border-gray-100/50 hover:bg-red-600 hover:text-white hover:border-transparent dark:border-zinc-700">
                                                    <a href="javascript:void(0)"><i class="uil uil-setting text-lg leading-[1.8]"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-12 mt-8 gap-y-3 lg:gap-3">
                                        <div class="col-span-12 lg:col-span-3">
                                            <div class="p-4 border rounded border-gray-100/50 dark:border-neutral-600/80">
                                                <p class="mb-1 text-gray-500 dark:text-gray-300 text-13">Experience</p>
                                                <p class="font-medium text-gray-900 dark:text-gray-50">Minimum 1 Year</p>
                                            </div>
                                        </div>
                                        <div class="col-span-12 lg:col-span-3">
                                            <div class="p-4 border rounded border-gray-100/50 dark:border-neutral-600/80">
                                                <p class="mb-1 text-gray-500 dark:text-gray-300 text-13">Employee type</p>

                                                @foreach ($circular->jobtypes as $jobtype)
                                                    <p class="font-medium text-gray-900 dark:text-gray-50">{{ $jobtype->jobtype->name ?? ''}}</p>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="col-span-12 lg:col-span-3">
                                            <div class="p-4 border rounded border-gray-100/50 dark:border-neutral-600/80">
                                                <p class="mb-1 text-gray-500 dark:text-gray-300 text-13">Position</p>
                                                @foreach ($circular->careerlabels as $jobcareerlables)
                                                    <p class="font-medium text-gray-900 dark:text-gray-50">{{ $jobcareerlables->jobcareerlables->name ?? '' }}</p>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="col-span-12 lg:col-span-3">
                                            <div class="p-4 border rounded border-gray-100/50 dark:border-neutral-600/80">
                                                <p class="mb-1 text-gray-500 dark:text-gray-300 text-13">Offer Salary</p>
                                                <p class="font-medium text-gray-900 dark:text-gray-50"> ৳{{ $circular->min_salary }} - {{ $circular->max_salary }} / m</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="py-3">

                                        {!! $circular->description !!}
                                    </div>
                                    <div class="mt-4">
                                        @foreach ($circular->jobskills as $skill)
                                            <span class="px-2 py-1 text-white rounded text-11 group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500">{{ $skill->name }}</span>
                                        @endforeach
                                    </div>

                                    <div class="pt-3 mt-4">
                                        <ul class="flex flex-wrap items-center gap-3 mb-0">
                                            <li class="mt-1 dark:text-gray-50">
                                                Share this job:
                                            </li>
                                            <li class="mt-1">
                                                <a href="https://www.facebook.com/sharer/sharer.php?u="
                                                    class="px-3 py-1 text-xs font-medium text-center inline-flex items-center text-white bg-blue-700 rounded-lg hover:bg-blue-800  focus:outline-none  dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                    <svg class="w-4 h-4 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" fill="currentColor" viewBox="0 0 24 24">
                                                        <path fill-rule="evenodd"
                                                            d="M13.135 6H15V3h-1.865a4.147 4.147 0 0 0-4.142 4.142V9H7v3h2v9.938h3V12h2.021l.592-3H12V6.591A.6.6 0 0 1 12.592 6h.543Z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                    facebook
                                                </a>
                                                <a href="https://twitter.com/intent/tweet?url="
                                                    class="px-3  py-1  space-x-2 text-xs font-medium text-center inline-flex items-center text-white bg-[#1DA1F2] rounded-lg hover:bg-blue-800  focus:outline-none  dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                    <svg class="w-4 h-4 text-white  dark:text-white mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" fill="currentColor" viewBox="0 0 24 24">
                                                        <path fill-rule="evenodd"
                                                            d="M22 5.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.343 8.343 0 0 1-2.605.981A4.13 4.13 0 0 0 15.85 4a4.068 4.068 0 0 0-4.1 4.038c0 .31.035.618.105.919A11.705 11.705 0 0 1 3.4 4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 6.1 13.635a4.192 4.192 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 2 18.184 11.732 11.732 0 0 0 8.291 20 11.502 11.502 0 0 0 19.964 8.5c0-.177 0-.349-.012-.523A8.143 8.143 0 0 0 22 5.892Z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                    twitter
                                                </a>
                                                <a href="https://www.linkedin.com/shareArticle?mini=true&url="
                                                    class="px-3  py-1  space-x-2 text-xs font-medium text-center inline-flex items-center text-white bg-[#E4405F] rounded-lg hover:bg-blue-800  focus:outline-none  dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                    <svg class="w-4 h-4 text-white mr-1 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" fill="none" viewBox="0 0 24 24">
                                                        <path fill="currentColor" fill-rule="evenodd"
                                                            d="M3 8a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v8a5 5 0 0 1-5 5H8a5 5 0 0 1-5-5V8Zm5-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3H8Zm7.597 2.214a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2h-.01a1 1 0 0 1-1-1ZM12 9a3 3 0 1 0 0 6 3 3 0 0 0 0-6Zm-5 3a5 5 0 1 1 10 0 5 5 0 0 1-10 0Z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                    instagram
                                                </a>
                                                <a href="https://www.linkedin.com/shareArticle?mini=true&url="
                                                    class="px-3  py-1  space-x-2 text-xs font-medium text-center inline-flex items-center text-white bg-[#0A66C2] rounded-lg hover:bg-blue-800  focus:outline-none  dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                    <svg class="w-4 h-4 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" fill="currentColor" viewBox="0 0 24 24">
                                                        <path fill-rule="evenodd"
                                                            d="M12.51 8.796v1.697a3.738 3.738 0 0 1 3.288-1.684c3.455 0 4.202 2.16 4.202 4.97V19.5h-3.2v-5.072c0-1.21-.244-2.766-2.128-2.766-1.827 0-2.139 1.317-2.139 2.676V19.5h-3.19V8.796h3.168ZM7.2 6.106a1.61 1.61 0 0 1-.988 1.483 1.595 1.595 0 0 1-1.743-.348A1.607 1.607 0 0 1 5.6 4.5a1.601 1.601 0 0 1 1.6 1.606Z"
                                                            clip-rule="evenodd" />
                                                        <path d="M7.2 8.809H4V19.5h3.2V8.809Z" />
                                                    </svg>
                                                    linkedin
                                                </a>
                                                <a href="https://api.whatsapp.com/send?text="
                                                    class="px-3  py-1  space-x-2 text-xs font-medium text-center inline-flex items-center text-white bg-green-400 rounded-lg hover:bg-blue-800  focus:outline-none  dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                    <svg class="w-4 h-4 text-white mr-1 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" fill="currentColor" viewBox="0 0 24 24">
                                                        <path fill-rule="evenodd"
                                                            d="M21.7 8.037a4.26 4.26 0 0 0-.789-1.964 2.84 2.84 0 0 0-1.984-.839c-2.767-.2-6.926-.2-6.926-.2s-4.157 0-6.928.2a2.836 2.836 0 0 0-1.983.839 4.225 4.225 0 0 0-.79 1.965 30.146 30.146 0 0 0-.2 3.206v1.5a30.12 30.12 0 0 0 .2 3.206c.094.712.364 1.39.784 1.972.604.536 1.38.837 2.187.848 1.583.151 6.731.2 6.731.2s4.161 0 6.928-.2a2.844 2.844 0 0 0 1.985-.84 4.27 4.27 0 0 0 .787-1.965 30.12 30.12 0 0 0 .2-3.206v-1.516a30.672 30.672 0 0 0-.202-3.206Zm-11.692 6.554v-5.62l5.4 2.819-5.4 2.801Z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                    Whatsup
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                            <div class="mt-10 space-y-8">
                                <h5 class="text-gray-900 dark:text-gray-50">Related Jobs</h5>

                                @foreach ($circular->latestCircular() as  $circular)

                                <div
                                    class="relative overflow-hidden transition-all duration-500 ease-in-out bg-white border rounded-md border-gray-100/50 group group-data-[theme-color=violet]:hover:border-violet-500 group-data-[theme-color=sky]:hover:border-sky-500 group-data-[theme-color=red]:hover:border-red-500 group-data-[theme-color=green]:hover:border-green-500 group-data-[theme-color=pink]:hover:border-pink-500 group-data-[theme-color=blue]:hover:border-blue-500 hover:-translate-y-2 dark:bg-neutral-900 dark:border-neutral-600">
                                    <div class="p-6">
                                        <div class="grid grid-cols-12 gap-5">
                                            <div class="col-span-12 lg:col-span-1">
                                                <div class="mb-4 text-center mb-md-0">
                                                    <a href="company-details.html"><img src="assets/images/featured-job/img-01.png" alt=""
                                                            class="mx-auto img-fluid rounded-3"></a>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-span-12 lg:col-span-10">
                                                <h5 class="mb-1 text-gray-900 fs-17"><a href="job-details.html" class="dark:text-gray-50">{{$circular->title}}</a>
                                                    <small class="font-normal text-gray-500 dark:text-gray-300">(0-2 Yrs Exp.)</small>
                                                </h5>
                                                <ul class="flex flex-wrap gap-3 mb-0">
                                                    <li>
                                                        <p class="mb-0 text-sm text-gray-500 dark:text-gray-300">{{$circular->organization_name}}</p>
                                                    </li>
                                                    <li>
                                                        <p class="mb-0 text-sm text-gray-500 dark:text-gray-300"><i class="mdi mdi-map-marker"></i> New York</p>
                                                    </li>
                                                    <li>
                                                        <p class="mb-0 text-sm text-gray-500 dark:text-gray-300"><i class="uil uil-wallet"></i> ৳{{ $circular->min_salary }} - {{ $circular->max_salary }} / m</p>
                                                    </li>
                                                </ul>
                                                <div class="mt-4">
                                                    <div class="flex flex-wrap gap-1.5">
                                                        <span class="bg-green-500/20 text-green-500 text-11 px-2 py-0.5 font-medium rounded">Full Time</span>
                                                        <span class="bg-yellow-500/20 text-yellow-500 text-11 px-2 py-0.5 font-medium rounded">Urgent</span>
                                                        <span class="bg-sky-500/20 text-sky-500 text-11 px-2 py-0.5 font-medium rounded">Private</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end row-->
                                    </div>
                                    <div class="px-4 py-3 bg-gray-50 dark:bg-neutral-700">
                                        <div class="grid grid-cols-12">
                                            <div class="col-span-12 lg:col-span-6">
                                                <ul class="flex flex-wrap gap-2 text-gray-700 dark:text-gray-50">
                                                    <li><i class="uil uil-tag"></i> Keywords :</li>
                                                    <li><a href="javascript:void(0)" class="text-gray-500 dark:text-gray-50">Ui designer</a>,</li>
                                                    <li><a href="javascript:void(0)" class="text-gray-500 dark:text-gray-50">developer</a></li>
                                                </ul>
                                            </div>
                                            <!--end col-->
                                            <div class="col-span-12 mt-2 lg:col-span-6 lg:mt-0">
                                                <div class="ltr:lg:text-end rtl:lg:text-start dark:text-gray-50">
                                                    <a href="#applyNow" data-bs-toggle="modal">Apply Now <i class="mdi mdi-chevron-double-right"></i></a>
                                                </div>
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->
                                    </div>
                                    <div class="absolute top-4 ltr:right-4 rtl:left-4">
                                        <div
                                            class="w-8 h-8 text-center text-gray-100 transition-all duration-300 bg-transparent border rounded border-gray-100/50 hover:bg-red-600 hover:text-white hover:border-transparent dark:border-zinc-700">
                                            <a href="javascript:void(0)"><i class="uil uil-heart-alt text-lg leading-[1.8]"></i></a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                                {{-- <div
                                    class="relative overflow-hidden transition-all duration-500 ease-in-out bg-white border rounded-md border-gray-100/50 group group-data-[theme-color=violet]:hover:border-violet-500 group-data-[theme-color=sky]:hover:border-sky-500 group-data-[theme-color=red]:hover:border-red-500 group-data-[theme-color=green]:hover:border-green-500 group-data-[theme-color=pink]:hover:border-pink-500 group-data-[theme-color=blue]:hover:border-blue-500 hover:-translate-y-2 dark:bg-neutral-900 dark:border-neutral-600">
                                    <div class="p-6">
                                        <div class="grid grid-cols-12 gap-5">
                                            <div class="col-span-12 lg:col-span-1">
                                                <div class="mb-4 text-center mb-md-0">
                                                    <a href="company-details.html"><img src="assets/images/featured-job/img-02.png" alt=""
                                                            class="mx-auto img-fluid rounded-3"></a>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-span-10">
                                                <h5 class="mb-1 text-gray-900 fs-17"><a href="job-details.html" class="dark:text-gray-50">Marketing Director</a>
                                                    <small class="font-normal text-gray-500 dark:text-gray-300">(2-4 Yrs Exp.)</small>
                                                </h5>
                                                <ul class="flex flex-wrap gap-3 mb-0">
                                                    <li>
                                                        <p class="mb-0 text-sm text-gray-500 dark:text-gray-300">Jobcy Technology Pvt.Ltd</p>
                                                    </li>
                                                    <li>
                                                        <p class="mb-0 text-sm text-gray-500 dark:text-gray-300"><i class="mdi mdi-map-marker"></i> California</p>
                                                    </li>
                                                    <li>
                                                        <p class="mb-0 text-sm text-gray-500 dark:text-gray-300"><i class="uil uil-wallet"></i> $250 - $800 / month</p>
                                                    </li>
                                                </ul>
                                                <div class="mt-4">
                                                    <div class="flex flex-wrap gap-1.5">
                                                        <span class="bg-red-500/20 text-red-500 text-11 px-2 py-0.5 font-medium rounded">Part Time</span>
                                                        <span class="bg-sky-500/20 text-sky-500 text-11 px-2 py-0.5 font-medium rounded">Private</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end row-->
                                    </div>
                                    <div class="px-4 py-3 bg-gray-50 dark:bg-neutral-700">
                                        <div class="grid grid-cols-12">
                                            <div class="col-span-12 lg:col-span-6">
                                                <ul class="flex flex-wrap gap-2 text-gray-700 dark:text-gray-50">
                                                    <li><i class="uil uil-tag"></i> Keywords :</li>
                                                    <li><a href="javascript:void(0)" class="text-gray-500 dark:text-gray-50">Ui designer</a>,</li>
                                                    <li><a href="javascript:void(0)" class="text-gray-500 dark:text-gray-50">developer</a></li>
                                                </ul>
                                            </div>
                                            <!--end col-->
                                            <div class="col-span-12 mt-2 lg:col-span-6 lg:mt-0">
                                                <div class="ltr:lg:text-end rtl:lg:text-start dark:text-gray-50">
                                                    <a href="#applyNow" data-bs-toggle="modal">Apply Now <i class="mdi mdi-chevron-double-right"></i></a>
                                                </div>
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->
                                    </div>
                                    <div class="absolute top-4 ltr:right-4 rtl:left-4">
                                        <div class="w-8 h-8 text-center text-white bg-red-600 rounded">
                                            <a href="javascript:void(0)"><i class="uil uil-heart-alt text-lg leading-[1.9]"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="relative overflow-hidden transition-all duration-500 ease-in-out bg-white border rounded-md border-gray-100/50 group group-data-[theme-color=violet]:hover:border-violet-500 group-data-[theme-color=sky]:hover:border-sky-500 group-data-[theme-color=red]:hover:border-red-500 group-data-[theme-color=green]:hover:border-green-500 group-data-[theme-color=pink]:hover:border-pink-500 group-data-[theme-color=blue]:hover:border-blue-500 hover:-translate-y-2 dark:bg-neutral-900 dark:border-neutral-600">
                                    <div class="p-6">
                                        <div class="grid grid-cols-12 gap-5">
                                            <div class="col-span-12 lg:col-span-1">
                                                <div class="mb-4 text-center mb-md-0">
                                                    <a href="company-details.html"><img src="assets/images/featured-job/img-03.png" alt=""
                                                            class="mx-auto img-fluid rounded-3"></a>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-span-10">
                                                <h5 class="mb-1 text-gray-900 fs-17"><a href="job-details.html" class="dark:text-gray-50">HTML Developer</a>
                                                    <small class="font-normal text-gray-500 dark:text-gray-300">(2-4 Yrs Exp.)</small>
                                                </h5>
                                                <ul class="flex flex-wrap gap-3 mb-0">
                                                    <li>
                                                        <p class="mb-0 text-sm text-gray-500 dark:text-gray-300">Jobcy Technology Pvt.Ltd</p>
                                                    </li>
                                                    <li>
                                                        <p class="mb-0 text-sm text-gray-500 dark:text-gray-300"><i class="mdi mdi-map-marker"></i> California</p>
                                                    </li>
                                                    <li>
                                                        <p class="mb-0 text-sm text-gray-500 dark:text-gray-300"><i class="uil uil-wallet"></i> $250 - $800 / month</p>
                                                    </li>
                                                </ul>
                                                <div class="mt-4">
                                                    <div class="flex flex-wrap gap-1.5">
                                                        <span class="bg-violet-500/20 text-violet-500 text-11 px-2 py-0.5 font-medium rounded">Freelance</span>
                                                        <span class="bg-sky-500/20 text-sky-500 text-11 px-2 py-0.5 font-medium rounded">Internship</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end row-->
                                    </div>
                                    <div class="px-4 py-3 bg-gray-50 dark:bg-neutral-700">
                                        <div class="grid grid-cols-12">
                                            <div class="col-span-12 lg:col-span-6">
                                                <ul class="flex flex-wrap gap-2 text-gray-700 dark:text-gray-50">
                                                    <li><i class="uil uil-tag"></i> Keywords :</li>
                                                    <li><a href="javascript:void(0)" class="text-gray-500 dark:text-gray-50">Ui designer</a>,</li>
                                                    <li><a href="javascript:void(0)" class="text-gray-500 dark:text-gray-50">developer</a></li>
                                                </ul>
                                            </div>
                                            <!--end col-->
                                            <div class="col-span-12 mt-2 lg:col-span-6 lg:mt-0">
                                                <div class="ltr:lg:text-end rtl:lg:text-start dark:text-gray-50">
                                                    <a href="#applyNow" data-bs-toggle="modal">Apply Now <i class="mdi mdi-chevron-double-right"></i></a>
                                                </div>
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->
                                    </div>
                                    <div class="absolute top-4 ltr:right-4 rtl:left-4">
                                        <div
                                            class="w-8 h-8 text-center text-gray-100 transition-all duration-300 bg-transparent border rounded border-gray-100/50 hover:bg-red-600 hover:text-white hover:border-transparent dark:border-zinc-700">
                                            <a href="javascript:void(0)"><i class="uil uil-heart-alt text-lg leading-[1.8]"></i></a>
                                        </div>
                                    </div>
                                </div> --}}

                                <div class="mt-4 text-center">
                                    <a href="job-list.html" class="font-medium text-gray-900 dark:text-gray-50">View More <i class="mdi mdi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 space-y-6 lg:col-span-4">
                            <div class="border rounded border-gray-100/30 dark:border-neutral-600/80">
                                <div class="p-6">
                                    <h6 class="text-gray-900 text-17 dark:text-gray-50">Job Overview</h6>

                                    <ul>
                                        <li>
                                            <div class="flex mt-6">
                                                <i
                                                    class="uil uil-user icon group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 h-12 w-12 text-center leading-[2.4] text-xl group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 rounded-full"></i>
                                                <div class="ltr:ml-4 rtl:mr-4">
                                                    <h6 class="mb-2 text-sm text-gray-900 dark:text-gray-50">Job Title</h6>
                                                    <p class="text-gray-500 dark:text-gray-300">{{$circular->title}}</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex mt-6">
                                                <i
                                                    class="uil uil-star-half-alt icon group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 h-12 w-12 text-center leading-[2.4] text-xl group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 rounded-full"></i>
                                                <div class="ltr:ml-4 rtl:mr-4">
                                                    <h6 class="mb-2 text-sm text-gray-900 dark:text-gray-50">Experience</h6>
                                                    <p class="text-gray-500 dark:text-gray-300"> 0-3 Years</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex mt-6">
                                                <i
                                                    class="uil uil-location-point icon group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 h-12 w-12 text-center leading-[2.4] text-xl group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 rounded-full"></i>
                                                <div class="ltr:ml-4 rtl:mr-4">
                                                    <h6 class="mb-2 text-sm text-gray-900 dark:text-gray-50">Location</h6>
                                                    <p class="text-gray-500 dark:text-gray-300"> New york</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex mt-6">
                                                <i
                                                    class="uil uil-usd-circle icon group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 h-12 w-12 text-center leading-[2.4] text-xl group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 rounded-full"></i>
                                                <div class="ltr:ml-4 rtl:mr-4">
                                                    <h6 class="mb-2 text-sm text-gray-900 dark:text-gray-50">Offered Salary</h6>
                                                    <p class="text-gray-500 dark:text-gray-300">৳{{ $circular->min_salary }} - {{ $circular->max_salary }} / m</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex mt-6">
                                                <i
                                                    class="uil uil-graduation-cap icon group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 h-12 w-12 text-center leading-[2.4] text-xl group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 rounded-full"></i>
                                                <div class="ltr:ml-4 rtl:mr-4">
                                                    <h6 class="mb-2 text-sm text-gray-900 dark:text-gray-50">Qualification</h6>
                                                    @foreach ( $circular->educations as $education )

                                                    <p class="text-gray-500 dark:text-gray-300">{{$education->education->name}}</p>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex mt-6">
                                                <i
                                                    class="uil uil-building icon group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 h-12 w-12 text-center leading-[2.4] text-xl group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 rounded-full"></i>
                                                <div class="ltr:ml-4 rtl:mr-4">
                                                    <h6 class="mb-2 text-sm text-gray-900 dark:text-gray-50">Industry</h6>

                                                    @foreach (  $circular->jobindustries as $jobindustry)

                                                    <p class="text-gray-500 dark:text-gray-300">{{$jobindustry->jobindustry->name}}</p>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex mt-6">
                                                <i
                                                    class="uil uil-history icon group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 h-12 w-12 text-center leading-[2.4] text-xl group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 rounded-full"></i>
                                                <div class="ltr:ml-4 rtl:mr-4">
                                                    <h6 class="mb-2 text-sm text-gray-900 dark:text-gray-50">Date Posted</h6>
                                                    <p class="text-gray-500 dark:text-gray-300"> {{ Carbon\Carbon::parse($circular->start_date)->format('d M Y') }}</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex mt-6">
                                                <i
                                                    class="uil uil-history icon group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 h-12 w-12 text-center leading-[2.4] text-xl group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 rounded-full"></i>
                                                <div class="ltr:ml-4 rtl:mr-4">
                                                    <h6 class="mb-2 text-sm text-gray-900 dark:text-gray-50">Expire Date</h6>
                                                    <p class="text-gray-500 dark:text-gray-300"> {{ Carbon\Carbon::parse($circular->end_date)->format('d M Y') }}</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>

                                    <div class="mt-8 space-y-2">
                                        <a href="#applyNow" data-bs-toggle="modal"
                                            class="btn w-full group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 border-transparent text-white hover:-translate-y-1.5">Apply
                                            Now <i class="uil uil-arrow-right"></i></a>
                                        <a href="bookmark-jobs.html"
                                            class="btn w-full bg-yellow-500/20 border-transparent text-yellow-500 hover:-translate-y-1.5 dark:bg-yellow-500/30"><i
                                                class="uil uil-bookmark"></i> Add Bookmark</a>
                                    </div>
                                </div>
                            </div>
                            <div class="border rounded border-gray-100/30 dark:border-neutral-600/80">
                                <div class="p-6">
                                    <div>
                                        <img src="assets/images/featured-job/img-02.png" alt="" class="mx-auto img-fluid">

                                        <div class="mt-4 text-center">


                                            <h6 class="text-gray-900 text-17 dark:text-gray-50">{{$circular->company->name}}</h6>

                                            {{-- <p class="text-gray-500 dark:text-gray-300">Since July 2017</p> --}}
                                        </div>

                                        <ul class="mt-4 space-y-4">
                                            <li>
                                                <div class="flex">
                                                    <i
                                                        class="text-xl uil uil-phone-volume group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500"></i>
                                                    <div class="ltr:ml-3 rtl:mr-3">
                                                        <h6 class="mb-1 text-sm text-gray-900 dark:text-gray-50">Phone</h6>
                                                        <p class="text-sm text-gray-500 dark:text-gray-300">{{$circular->company->mobile}}</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="mt-3">
                                                <div class="flex">
                                                    <i
                                                        class="text-xl uil uil-envelope group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500"></i>
                                                    <div class="ltr:ml-3 rtl:mr-3">
                                                        <h6 class="mb-1 text-sm text-gray-900 dark:text-gray-50">Email</h6>
                                                        <p class="text-sm text-gray-500 dark:text-gray-300">{{$circular->company->email}}</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="mt-3">
                                                <div class="flex">
                                                    <i
                                                        class="text-xl uil uil-globe group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500"></i>
                                                    <div class="ltr:ml-3 rtl:mr-3">
                                                        <h6 class="mb-1 text-sm text-gray-900 dark:text-gray-50">Website</h6>
                                                        <p class="mb-0 text-gray-500 dark:text-gray-300 fs-14 text-break">{{$circular->organization_website}}</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="mt-3">
                                                <div class="flex">
                                                    <i
                                                        class="text-xl uil uil-map-marker group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500"></i>
                                                    <div class="ltr:ml-3 rtl:mr-3">
                                                        <h6 class="mb-1 text-sm text-gray-900 dark:text-gray-50">Location</h6>
                                                        <p class="text-sm text-gray-500 dark:text-gray-300">Oakridge Lane Richardson.</p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>

                                        <div class="mt-6">
                                            <a href="company-details.html"
                                                class="w-full text-white border-transparent btn group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500"><i
                                                    class="mdi mdi-eye"></i> View Profile</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4">
                                <h6 class="mb-3 text-16 dark:text-gray-50">Job location</h6>
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.15830869428!2d-74.119763973046!3d40.69766374874431!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sin!4v1628067715234!5m2!1sen!2sin"
                                    style="width:100%" height="250" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End grid -->

        </div>
    </div>
@endsection
