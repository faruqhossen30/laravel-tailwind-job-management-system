@php
    use App\Models\Blog;
    $blogs = Blog::latest()->paginate(10);
@endphp
@extends('layouts.app')
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
                    <div class="grid grid-cols-12 md:gap-12 gap-y-8 md:gap-y-0">
                        <div class="col-span-12 lg:col-span-8">
                            <div class="grid grid-cols-12 md:gap-5">

                                @foreach ($blogs as $blog)
                                    <div class="col-span-12 lg:col-span-6">
                                        <div class="p-2 transition-all duration-500 bg-white rounded-md shadow-md hover:-translate-y-2 dark:bg-transparent dark:shadow-none">
                                            <img src="assets/images/blog/img-04.jpg" alt="" class="img-fluid">
                                            <div class="p-5">
                                                <ul class="flex justify-between mb-3 list-inline">
                                                    <li>
                                                        <p class="mb-0 text-gray-500 dark:text-gray-300"><a href="blog-author.html" class="font-semibold text-muted">Alice Mellor</a>
                                                            - Aug 08, 2021</p>
                                                    </li>
                                                    <li>
                                                        <p class="mb-0 text-gray-500 dark:text-gray-300"><i class="mdi mdi-eye"></i> 432</p>
                                                    </li>
                                                </ul>
                                                <a href="{{route('single.blog.page')}}" class="primary-link">
                                                    <h6
                                                        class="text-gray-900 transition-all duration-300 text-17 dark:text-white group-data-[theme-color=violet]:hover:text-violet-500 group-data-[theme-color=sky]:hover:text-sky-500 group-data-[theme-color=red]:hover:text-red-500 group-data-[theme-color=green]:hover:text-green-500 group-data-[theme-color=pink]:hover:text-pink-500 group-data-[theme-color=blue]:hover:text-blue-500">
                                                       {{$blog->title}}</h6>
                                                </a>
                                                <p class="mt-2 text-gray-500 dark:text-gray-300">   <?php echo substr($blog->description, 0, 100); ?></p>
                                                <div
                                                    class="mt-4 font-medium group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">
                                                    <a href="{{route('single.blog.page')}}" class="form-text ">Read More <i class="uil uil-angle-right-b"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>

                            <ul class="flex justify-center gap-2 mt-14">
                                <li class="w-12 h-12 text-center border rounded-full cursor-default border-gray-100/50 dark:border-zinc-600 dark:border-gray-100/20">
                                    <a class="cursor-auto" href="javascript:void(0)" tabindex="-1">
                                        <i class="mdi mdi-chevron-double-left text-16 leading-[2.8] dark:text-gray-50"></i>
                                    </a>
                                </li>
                                <li
                                    class="w-12 h-12 text-center text-white border border-transparent rounded-full cursor-pointer group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500">
                                    <a class="text-16 leading-[2.8]" href="javascript:void(0)">1</a>
                                </li>
                                <li
                                    class="w-12 h-12 text-center text-gray-900 transition-all duration-300 border rounded-full cursor-pointer border-gray-100/50 dark:border-zinc-600 hover:bg-gray-100/30 focus:bg-gray-100/30 dark:border-gray-100/20 dark:text-gray-50 dark:hover:bg-gray-500/20">
                                    <a class="text-16 leading-[2.8]" href="javascript:void(0)">2</a>
                                </li>
                                <li
                                    class="w-12 h-12 text-center text-gray-900 transition-all duration-300 border rounded-full cursor-pointer border-gray-100/50 dark:border-zinc-600 hover:bg-gray-100/30 focus:bg-gray-100/30 dark:border-gray-100/20 dark:text-gray-50 dark:hover:bg-gray-500/20">
                                    <a class="text-16 leading-[2.8]" href="javascript:void(0)">3</a>
                                </li>
                                <li
                                    class="w-12 h-12 text-center text-gray-900 transition-all duration-300 border rounded-full cursor-pointer border-gray-100/50 dark:border-zinc-600 hover:bg-gray-100/30 focus:bg-gray-100/30 dark:border-gray-100/20 dark:text-gray-50 dark:hover:bg-gray-500/20">
                                    <a class="text-16 leading-[2.8]" href="javascript:void(0)">4</a>
                                </li>
                                <li
                                    class="w-12 h-12 text-center text-gray-900 transition-all duration-300 border rounded-full cursor-pointer border-gray-100/50 dark:border-zinc-600 hover:bg-gray-100/30 focus:bg-gray-100/30 dark:border-gray-100/20 dark:text-gray-50 dark:hover:bg-gray-500/20">
                                    <a href="javascript:void(0)" tabindex="-1">
                                        <i class="mdi mdi-chevron-double-right text-16 leading-[2.8]"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-span-12 lg:col-span-4">
                            <form class="relative">
                                <input class="w-full rounded border-gray-100/50 placeholder:text-13 dark:border-zinc-600 dark:bg-transparent" type="search" placeholder="Search...">
                                <button class="absolute text-gray-500 bg-transparent border-0 ltr:mr-2 rtl:ml-2 top-3 ltr:right-2 rtl:left-2 translate-middle-y" type="submit"><span
                                        class="mdi mdi-magnify text-muted"></span></button>
                            </form>

                            <div class="mt-8">
                                <h6 class="mb-2 text-gray-900 text-16 dark:text-gray-50">Categories</h6>
                                <div class="w-full h-0.5 rounded-full bg-gray-100/60 dark:bg-gray-500/20">
                                    <div class="group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 w-[25%] h-0.5 ltr:rounded-l-full rtl:rounded-r-full"
                                        role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="my-4">
                                    <div class="mb-3">
                                        <input
                                            class="rounded cursor-pointer border-gray-100/50 bg-gray-50 group-data-[theme-color=violet]:checked:bg-violet-500 group-data-[theme-color=sky]:checked:bg-sky-500 group-data-[theme-color=red]:checked:bg-red-500 group-data-[theme-color=green]:checked:bg-green-500 group-data-[theme-color=pink]:checked:bg-pink-500 group-data-[theme-color=blue]:checked:bg-blue-500 checked:border-transparent focus:ring-0 focus:ring-offset-0 dark:bg-zinc-700 dark:border-zinc-600 checked:dark:bg-violet-500/20"
                                            type="checkbox" value="" id="education">
                                        <label class="align-middle ltr:ml-2 rtl:mr-2 dark:text-gray-300" for="education">Education</label>
                                    </div>
                                    <div class="mb-3">
                                        <input
                                            class="rounded cursor-pointer border-gray-100/50 bg-gray-50 group-data-[theme-color=violet]:checked:bg-violet-500 group-data-[theme-color=sky]:checked:bg-sky-500 group-data-[theme-color=red]:checked:bg-red-500 group-data-[theme-color=green]:checked:bg-green-500 group-data-[theme-color=pink]:checked:bg-pink-500 group-data-[theme-color=blue]:checked:bg-blue-500 checked:border-transparent focus:ring-0 focus:ring-offset-0 dark:bg-zinc-700 dark:border-zinc-600 checked:dark:bg-violet-500/20"
                                            checked type="checkbox" value="" id="education">
                                        <label class="align-middle ltr:ml-2 rtl:mr-2 dark:text-gray-300" for="Business">Business</label>
                                    </div>
                                    <div class="mb-3">
                                        <input
                                            class="rounded cursor-pointer border-gray-100/50 bg-gray-50 group-data-[theme-color=violet]:checked:bg-violet-500 group-data-[theme-color=sky]:checked:bg-sky-500 group-data-[theme-color=red]:checked:bg-red-500 group-data-[theme-color=green]:checked:bg-green-500 group-data-[theme-color=pink]:checked:bg-pink-500 group-data-[theme-color=blue]:checked:bg-blue-500 checked:border-transparent focus:ring-0 focus:ring-offset-0 dark:bg-zinc-700 dark:border-zinc-600 checked:dark:bg-violet-500/20"
                                            checked type="checkbox" value="" id="education">
                                        <label class="align-middle ltr:ml-2 rtl:mr-2 dark:text-gray-300" for="Information">Information</label>
                                    </div>
                                    <div class="mb-3">
                                        <input
                                            class="rounded cursor-pointer border-gray-100/50 bg-gray-50 group-data-[theme-color=violet]:checked:bg-violet-500 group-data-[theme-color=sky]:checked:bg-sky-500 group-data-[theme-color=red]:checked:bg-red-500 group-data-[theme-color=green]:checked:bg-green-500 group-data-[theme-color=pink]:checked:bg-pink-500 group-data-[theme-color=blue]:checked:bg-blue-500 checked:border-transparent focus:ring-0 focus:ring-offset-0 dark:bg-zinc-700 dark:border-zinc-600 checked:dark:bg-violet-500/20"
                                            type="checkbox" value="" id="education">
                                        <label class="align-middle ltr:ml-2 rtl:mr-2 dark:text-gray-300" for="Interview">Interview</label>
                                    </div>
                                    <div class="mb-3">
                                        <input
                                            class="rounded cursor-pointer border-gray-100/50 bg-gray-50 group-data-[theme-color=violet]:checked:bg-violet-500 group-data-[theme-color=sky]:checked:bg-sky-500 group-data-[theme-color=red]:checked:bg-red-500 group-data-[theme-color=green]:checked:bg-green-500 group-data-[theme-color=pink]:checked:bg-pink-500 group-data-[theme-color=blue]:checked:bg-blue-500 checked:border-transparent focus:ring-0 focus:ring-offset-0 dark:bg-zinc-700 dark:border-zinc-600 checked:dark:bg-violet-500/20"
                                            type="checkbox" value="" id="education">
                                        <label class="align-middle ltr:ml-2 rtl:mr-2 dark:text-gray-300" for="Interview">Travel</label>
                                    </div>
                                    <div class="mb-3">
                                        <input
                                            class="rounded cursor-pointer border-gray-100/50 bg-gray-50 group-data-[theme-color=violet]:checked:bg-violet-500 group-data-[theme-color=sky]:checked:bg-sky-500 group-data-[theme-color=red]:checked:bg-red-500 group-data-[theme-color=green]:checked:bg-green-500 group-data-[theme-color=pink]:checked:bg-pink-500 group-data-[theme-color=blue]:checked:bg-blue-500 checked:border-transparent focus:ring-0 focus:ring-offset-0 dark:bg-zinc-700 dark:border-zinc-600 checked:dark:bg-violet-500/20"
                                            type="checkbox" value="" id="education">
                                        <label class="align-middle ltr:ml-2 rtl:mr-2 dark:text-gray-300" for="Interview">Jobs</label>
                                    </div>
                                    <div class="mb-3">
                                        <input
                                            class="rounded cursor-pointer border-gray-100/50 bg-gray-50 group-data-[theme-color=violet]:checked:bg-violet-500 group-data-[theme-color=sky]:checked:bg-sky-500 group-data-[theme-color=red]:checked:bg-red-500 group-data-[theme-color=green]:checked:bg-green-500 group-data-[theme-color=pink]:checked:bg-pink-500 group-data-[theme-color=blue]:checked:bg-blue-500 checked:border-transparent focus:ring-0 focus:ring-offset-0 dark:bg-zinc-700 dark:border-zinc-600 checked:dark:bg-violet-500/20"
                                            type="checkbox" value="" id="education">
                                        <label class="align-middle ltr:ml-2 rtl:mr-2 dark:text-gray-300" for="Interview">Fashion</label>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-8">
                                <h6 class="mb-2 text-gray-900 text-16 dark:text-gray-50">Popular Post</h6>
                                <div class="w-full h-0.5 rounded-full bg-gray-100/60 dark:bg-gray-500/20">
                                    <div class="group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 w-[25%] h-0.5 ltr:rounded-l-full rtl:rounded-r-full"
                                        role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <ul class="my-4">
                                    <li class="flex flex-wrap items-center pb-4 mb-4 border-b gap-y-3 md:gap-y-0 border-gray-100/50 dark:border-zinc-600">
                                        <img src="assets/images/blog/img-01.jpg" alt="" class="w-[86px] object-cover h-16 rounded">
                                        <div class="ltr:ml-3 rtl:mr-3 grow">
                                            <a href="blog-details.html" class="overflow-hidden truncate dark:text-gray-50">The evolution of landing page creativity</a>
                                            <span class="block text-sm text-gray-500">Aug 10, 2021</span>
                                        </div>
                                    </li>
                                    <li class="flex flex-wrap items-center pb-4 mb-4 border-b gap-y-3 md:gap-y-0 border-gray-100/50 dark:border-zinc-600">
                                        <img src="assets/images/blog/img-02.jpg" alt="" class="w-[86px] object-cover h-16 rounded">
                                        <div class="ltr:ml-3 rtl:mr-3 grow"><a href="blog-details.html" class="overflow-hidden truncate dark:text-gray-50">Beautiful day with friends
                                                in paris</a>
                                            <span class="block text-sm text-gray-500">Jun 24, 2021</span>
                                        </div>
                                    </li>
                                    <li class="flex flex-wrap items-center pb-4 mb-4 border-b gap-y-3 md:gap-y-0 border-gray-100/50 dark:border-zinc-600">
                                        <img src="assets/images/blog/img-03.jpg" alt="" class="w-[86px] object-cover h-16 rounded">
                                        <div class="ltr:ml-3 rtl:mr-3 grow"><a href="blog-details.html" class="overflow-hidden truncate dark:text-gray-50">Project discussion with
                                                team</a>
                                            <span class="block text-sm text-gray-500">July 13, 2021</span>
                                        </div>
                                    </li>
                                    <li class="flex flex-wrap items-center pb-4 mb-4 gap-y-5 md:gap-3-0">
                                        <img src="assets/images/blog/img-10.jpg" alt="" class="w-[86px] object-cover h-16 rounded">
                                        <div class="ltr:ml-3 rtl:mr-3 grow"><a href="blog-details.html" class="overflow-hidden truncate dark:text-gray-50">Smartest Applications for
                                                Business</a>
                                            <span class="block text-sm text-gray-500">Feb 01, 2021</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="mt-8">
                                <h6 class="mb-2 text-gray-900 text-16 dark:text-gray-50">Text Widget</h6>
                                <div class="w-full h-0.5 rounded-full bg-gray-100/60 dark:bg-gray-500/20">
                                    <div class="group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 w-[25%] h-0.5 ltr:rounded-l-full rtl:rounded-r-full"
                                        role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="my-4">
                                    <p class="mt-3 mb-0 text-gray-500 dark:text-gray-300">
                                        Exercitation photo booth stumptown tote bag Banksy, elit small batch freegan sed. Craft
                                        beer elit seitan exercitation, photo booth et 8-bit kale chips proident chillwave deep v
                                        laborum. Aliquip veniam
                                        delectus, Marfa eiusmod Pinterest in do umami readymade swag.
                                    </p>
                                </div>
                            </div>

                            <div class="mt-8">
                                <h6 class="mb-2 text-gray-900 text-16 dark:text-gray-50">Archives</h6>
                                <div class="w-full h-0.5 rounded-full bg-gray-100/60 dark:bg-gray-500/20">
                                    <div class="group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 w-[25%] h-0.5 ltr:rounded-l-full rtl:rounded-r-full"
                                        role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <ul class="mt-3 mb-0 text-gray-900 dark:text-gray-50">
                                    <li class="py-1"><a class="mr-2 text-gray-500 dark:text-gray-300" href="javascript:void(0)"><i class="uil uil-angle-right-b"></i> March
                                            2021</a> (40)</li>
                                    <li class="py-1"><a class="mr-2 text-gray-500 dark:text-gray-300" href="javascript:void(0)"><i class="uil uil-angle-right-b"></i> April
                                            2021</a> (08)</li>
                                    <li class="py-1"><a class="mr-2 text-gray-500 dark:text-gray-300" href="javascript:void(0)"><i class="uil uil-angle-right-b"></i> Nov 2020</a>
                                        (32)</li>
                                    <li class="py-1"><a class="mr-2 text-gray-500 dark:text-gray-300" href="javascript:void(0)"><i class="uil uil-angle-right-b"></i> May 2020</a>
                                        (11)</li>
                                    <li class="py-1"><a class="mr-2 text-gray-500 dark:text-gray-300" href="javascript:void(0)"><i class="uil uil-angle-right-b"></i> Jun 2019</a>
                                        (21)</li>
                                </ul>
                            </div>

                            <div class="mt-8">
                                <h6 class="mb-2 text-gray-900 text-16 dark:text-gray-50">Latest Tags</h6>
                                <div class="w-full h-0.5 rounded-full bg-gray-100/60 dark:bg-gray-500/20">
                                    <div class="group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 w-[25%] h-0.5 ltr:rounded-l-full rtl:rounded-r-full"
                                        role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="flex flex-wrap gap-2 mt-3">
                                    <a class="mt-2 text-xs font-medium px-2 py-0.5 text-center bg-gray-50 text-gray-600 rounded group-data-[theme-color=violet]:hover:bg-violet-500 group-data-[theme-color=sky]:hover:bg-sky-500 group-data-[theme-color=red]:hover:bg-red-500 group-data-[theme-color=green]:hover:bg-green-500 group-data-[theme-color=pink]:hover:bg-pink-500 group-data-[theme-color=blue]:hover:bg-blue-500 hover:text-white transition-all duration-200 ease-in dark:bg-gray-500/20 dark:text-gray-100 dark:hover:bg-violet-500/20 dark:hover:text-white"
                                        href="javascript:void(0)">Fashion</a>
                                    <a class="mt-2 text-xs font-medium px-2 py-0.5 text-center bg-gray-50 text-gray-600 rounded group-data-[theme-color=violet]:hover:bg-violet-500 group-data-[theme-color=sky]:hover:bg-sky-500 group-data-[theme-color=red]:hover:bg-red-500 group-data-[theme-color=green]:hover:bg-green-500 group-data-[theme-color=pink]:hover:bg-pink-500 group-data-[theme-color=blue]:hover:bg-blue-500 hover:text-white transition-all duration-200 ease-in dark:bg-gray-500/20 dark:text-gray-100 dark:hover:bg-violet-500/20 dark:hover:text-white"
                                        href="javascript:void(0)">Jobs</a>
                                    <a class="mt-2 text-xs font-medium px-2 py-0.5 text-center bg-gray-50 text-gray-600 rounded group-data-[theme-color=violet]:hover:bg-violet-500 group-data-[theme-color=sky]:hover:bg-sky-500 group-data-[theme-color=red]:hover:bg-red-500 group-data-[theme-color=green]:hover:bg-green-500 group-data-[theme-color=pink]:hover:bg-pink-500 group-data-[theme-color=blue]:hover:bg-blue-500 hover:text-white transition-all duration-200 ease-in dark:bg-gray-500/20 dark:text-gray-100 dark:hover:bg-violet-500/20 dark:hover:text-white"
                                        href="javascript:void(0)">Business</a>
                                    <a class="mt-2 text-xs font-medium px-2 py-0.5 text-center bg-gray-50 text-gray-600 rounded group-data-[theme-color=violet]:hover:bg-violet-500 group-data-[theme-color=sky]:hover:bg-sky-500 group-data-[theme-color=red]:hover:bg-red-500 group-data-[theme-color=green]:hover:bg-green-500 group-data-[theme-color=pink]:hover:bg-pink-500 group-data-[theme-color=blue]:hover:bg-blue-500 hover:text-white transition-all duration-200 ease-in dark:bg-gray-500/20 dark:text-gray-100 dark:hover:bg-violet-500/20 dark:hover:text-white"
                                        href="javascript:void(0)">Corporate</a>
                                    <a class="mt-2 text-xs font-medium px-2 py-0.5 text-center bg-gray-50 text-gray-600 rounded group-data-[theme-color=violet]:hover:bg-violet-500 group-data-[theme-color=sky]:hover:bg-sky-500 group-data-[theme-color=red]:hover:bg-red-500 group-data-[theme-color=green]:hover:bg-green-500 group-data-[theme-color=pink]:hover:bg-pink-500 group-data-[theme-color=blue]:hover:bg-blue-500 hover:text-white transition-all duration-200 ease-in dark:bg-gray-500/20 dark:text-gray-100 dark:hover:bg-violet-500/20 dark:hover:text-white"
                                        href="javascript:void(0)">E-commerce</a>
                                    <a class="mt-2 text-xs font-medium px-2 py-0.5 text-center bg-gray-50 text-gray-600 rounded group-data-[theme-color=violet]:hover:bg-violet-500 group-data-[theme-color=sky]:hover:bg-sky-500 group-data-[theme-color=red]:hover:bg-red-500 group-data-[theme-color=green]:hover:bg-green-500 group-data-[theme-color=pink]:hover:bg-pink-500 group-data-[theme-color=blue]:hover:bg-blue-500 hover:text-white transition-all duration-200 ease-in dark:bg-gray-500/20 dark:text-gray-100 dark:hover:bg-violet-500/20 dark:hover:text-white"
                                        href="javascript:void(0)">Agency</a>
                                    <a class="mt-2 text-xs font-medium px-2 py-0.5 text-center bg-gray-50 text-gray-600 rounded group-data-[theme-color=violet]:hover:bg-violet-500 group-data-[theme-color=sky]:hover:bg-sky-500 group-data-[theme-color=red]:hover:bg-red-500 group-data-[theme-color=green]:hover:bg-green-500 group-data-[theme-color=pink]:hover:bg-pink-500 group-data-[theme-color=blue]:hover:bg-blue-500 hover:text-white transition-all duration-200 ease-in dark:bg-gray-500/20 dark:text-gray-100 dark:hover:bg-violet-500/20 dark:hover:text-white"
                                        href="javascript:void(0)">Responsive</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
            <!-- End grid -->

        </div>
    </div>
@endsection
