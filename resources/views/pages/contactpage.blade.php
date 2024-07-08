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
            <section class="pt-16">
                <div class="container mx-auto">
                    <div class="grid items-center grid-cols-12 mt-5 lg:gap-8 gap-y-8">
                        <div class="col-span-12 lg:col-span-6">
                            <div class="mt-4">
                                <h3 class="mb-2 text-3xl text-gray-900 dark:text-white">Get in touch</h3>
                                <p class="text-gray-500 dark:text-gray-300">Start working with Jobcy that can provide everything you need to generate
                                    awareness, drive traffic, connect.</p>
                                <form action="{{ route('contact.send') }}" method="post" enctype="multipart/form-data" class="mt-4 contact-form" name="myForm" id="myForm">
                                    @csrf
                                    <span id="error-msg"></span>
                                    <div class="grid grid-cols-12 gap-5">
                                        <div class="col-span-12">
                                            <div class="mb-3">
                                                <label for="nameInput" class="text-gray-900 dark:text-gray-50">Name</label>
                                                <input type="text" name="name" id="name"
                                                    class="w-full mt-1 rounded border-gray-100/50 placeholder:text-sm placeholder:text-gray-400 dark:bg-transparent dark:border-gray-800 focus:ring-0 focus:ring-offset-0 dark:text-gray-200"
                                                    placeholder="Enter your name">
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-span-12 lg:col-span-4">
                                            <div class="mb-3">
                                                <label for="emailInput" class="text-gray-900 dark:text-gray-50">Email</label>
                                                <input type="email"
                                                    class="w-full mt-1 rounded border-gray-100/50 placeholder:text-sm placeholder:text-gray-400 dark:bg-transparent dark:border-gray-800 focus:ring-0 focus:ring-offset-0 dark:text-gray-200"
                                                    id="emaiol" name="email" placeholder="Enter your email">
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-span-12 lg:col-span-4">
                                            <div class="mb-3">
                                                <label for="subjectInput" class="text-gray-900 dark:text-gray-50">Phone</label>
                                                <input type="text"
                                                    class="w-full mt-1 rounded border-gray-100/50 placeholder:text-sm placeholder:text-gray-400 dark:bg-transparent dark:border-gray-800 focus:ring-0 focus:ring-offset-0 dark:text-gray-200"
                                                    id="subjectInput" name="phone" placeholder="Enter your phone">
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-span-12 lg:col-span-4">
                                            <div class="mb-3">
                                                <label for="subjectInput" class="text-gray-900 dark:text-gray-50">Subject</label>
                                                <input type="text"
                                                    class="w-full mt-1 rounded border-gray-100/50 placeholder:text-sm placeholder:text-gray-400 dark:bg-transparent dark:border-gray-800 focus:ring-0 focus:ring-offset-0 dark:text-gray-200"
                                                    id="subjectInput" name="subject" placeholder="Enter your subject">
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-span-12">
                                            <div class="mb-3">
                                                <label for="meassageInput" class="text-gray-900 dark:text-gray-50">Your Message</label>
                                                <textarea
                                                    class="w-full mt-1 rounded border-gray-100/50 placeholder:text-sm placeholder:text-gray-400 dark:bg-transparent dark:border-gray-800 focus:ring-0 focus:ring-offset-0 dark:text-gray-200"
                                                    id="meassageInput" placeholder="Enter your message" name="message" rows="3"></textarea>
                                            </div>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                    <div class="text-right">
                                        <button type="submit" id="submit"
                                            class="text-white border-transparent btn group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500">
                                            Send Message <i class="uil uil-message ms-1"></i></button>
                                    </div>
                                </form><!--end form-->
                            </div>
                        </div><!--end col-->
                        <div class="col-span-12 lg:col-span-5 lg:ml-20">
                            <div class="text-center">
                                <img src="assets/images/contact.png" alt="" class="img-fluid">
                            </div>
                            <div class="pt-3 mt-4">
                                <div class="flex items-center mt-2 text-gray-500">
                                    <div
                                        class="group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 shrink-0 text-22">
                                        <i class="uil uil-map-marker"></i>
                                    </div>
                                    <div class="ltr:ml-2 rtl:mr-2 grow-1">
                                        <p class="mb-0 dark:text-gray-300">2453 Clinton StreetLittle Rock, California, USA</p>
                                    </div>
                                </div>
                                <div class="flex items-center mt-2 text-gray-500">
                                    <div
                                        class="group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 shrink-0 text-22">
                                        <i class="uil uil-envelope"></i>
                                    </div>
                                    <div class="ltr:ml-2 rtl:mr-2 grow-1">
                                        <p class="mb-0 dark:text-gray-300">contactus@Jobcy.com</p>
                                    </div>
                                </div>
                                <div class="flex items-center mt-2 text-gray-500">
                                    <div
                                        class="group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 shrink-0 text-22">
                                        <i class="uil uil-phone-alt"></i>
                                    </div>
                                    <div class="ltr:ml-2 rtl:mr-2 grow-1">
                                        <p class="mb-0 dark:text-gray-300">(+245) 223 1245</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                </div>
                <div class="pt-20">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6509157.364974411!2d-123.79641389801948!3d37.193115265681!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb9fe5f285e3d%3A0x8b5109a227086f55!2sCalifornia%2C%20USA!5e0!3m2!1sen!2sin!4v1628684675253!5m2!1sen!2sin"
                        height="350" style="border:0;width: 100%;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </section>
            <!-- End grid -->

        </div>
    </div>


    <!-- start subscribe -->
    <section class="relative py-16 overflow-hidden bg-zinc-700 dark:bg-neutral-900">
        <div class="container mx-auto">
            <div class="grid items-center grid-cols-12 gap-5">
                <div class="col-span-12 lg:col-span-7">
                    <div class="text-center lg:text-start">
                        <h4 class="text-white">Get New Jobs Notification!</h4>
                        <p class="mt-1 mb-0 text-white/50 dark:text-gray-300">Subscribe &amp; get all related jobs notification.</p>
                    </div>
                </div>
                <div class="z-40 col-span-12 lg:col-span-5">
                    <form class="flex" action="#">
                        <input type="text"
                            class="w-full text-gray-100 bg-transparent rounded-md border-gray-50/30 ltr:border-r-0 rtl:border-l-0 ltr:rounded-r-none rtl:rounded-l-none placeholder:text-13 placeholder:text-gray-100 dark:text-gray-100 dark:bg-white/5 dark:border-neutral-600 focus:ring-0 focus:ring-offset-0"
                            id="subscribe" placeholder="Enter your email">
                        <button
                            class="text-white border-transparent btn ltr:rounded-l-none rtl:rounded-r-none group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 focus:ring focus:ring-custom-500/30"
                            type="button" id="subscribebtn">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="absolute right-0 -top-10 -z-0 opacity-20">
            <img src="assets/images/subscribe.png" alt="" class="img-fluid">
        </div>
    </section>
    <!-- end subscribe -->
@endsection
