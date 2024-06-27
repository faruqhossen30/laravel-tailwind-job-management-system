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
                    <div class="grid grid-cols-12 md:gap-8">
                        <div class="col-span-12 md:col-span-6 md:col-start-4">
                            <div class="text-center">
                                <p class="mb-0 font-semibold text-red-600">Fashion</p>
                                <h3 class="text-gray-900 text-[26px] dark:text-white">How to get creative in your work ?</h3>
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-12 mt-8 md:gap-14">
                        <div class="col-span-12 lg:col-span-8">
                            <div class="swiper blogdetailSlider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="assets/images/blog/img-11.jpg" alt="" class="rounded-lg">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="assets/images/blog/img-14.jpg" alt="" class="rounded-lg">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="assets/images/blog/img-15.jpg" alt="" class="rounded-lg">
                                    </div>
                                </div>
                            </div>
                            <ul class="flex flex-wrap items-center mt-3 mb-0 text-gray-500">
                                <li>
                                    <div class="flex items-center">
                                        <div class="shrink-0">
                                            <img src="assets/images/user/img-03.jpg" alt="" class="w-12 h-12 rounded-full">
                                        </div>
                                        <div class="ltr:ml-3 rtl:mr-3">
                                            <a href="blog-author.html" class="text-gray-900 dark:text-white">
                                                <h6 class="mb-0 dark:text-gray-300">By Alice Mellor</h6>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li class="ltr:ml-3 rtl:mr-3">
                                    <div class="flex items-center">
                                        <div class="shrink-0">
                                            <i class="uil uil-calendar-alt"></i>
                                        </div>
                                        <div class="ltr:ml-2 rtl:mr-2">
                                            <p class="mb-0 dark:text-gray-300"> Aug 02, 2021</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="ltr:ml-3 rtl:mr-3">
                                    <div class="flex items-center">
                                        <div class="shrink-0">
                                            <i class="uil uil-comments-alt"></i>
                                        </div>
                                        <div class="ltr:ml-2 rtl:mr-2 flex-grow-1">
                                            <p class="mb-0 dark:text-gray-300"> 2 Comments</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="mt-4">
                                <h5 class="mb-2 text-gray-900 dark:text-gray-50">What makes the best co-working space?</h5>
                                <p class="text-gray-500 dark:text-gray-300">Objectively pursue diverse catalysts for change for interoperable meta-services. Distinctively re-engineer
                                    revolutionary meta-services and premium architectures. Intrinsically incubate intuitive opportunities and real-time potentialities. Appropriately
                                    communicate one-to-one technology.</p>
                                <p class="mb-4 text-gray-500 dark:text-gray-300">Home renovations, especially those involving plentiful of demolition can be a very dusty affair. The
                                    same is true as we experience the emotional sensation of stress from our first instances of social rejection ridicule. We quickly learn to fear and
                                    thus automatically avoid potentially stressful situations of all kinds, including the most common of all making mistakes.</p>
                                <figure class="text-center blog-blockquote">
                                    <blockquote class="blockquote">
                                        <p class="text-17 dark:text-gray-50">"A business consulting agency is involved in the planning, implementation, and education of businesses."
                                        </p>
                                    </blockquote>
                                    <figcaption class="mb-4 text-base text-gray-500 blockquote-footer dark:text-gray-300">
                                        — Creative Agency<cite title="Source Title"
                                            class="font-semibold group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">
                                            Alice Mellor</cite>
                                    </figcaption>
                                </figure>
                                <p class="text-gray-500 dark:text-gray-300">Whether article spirits new her covered hastily sitting her. Money witty books nor son add. Chicken age had
                                    evening believe but proceed pretend mrs. At missed advice my it no sister. Miss told ham dull knew see she spot near can. Spirit her entire her
                                    called.</p>
                                <p class="text-gray-500 dark:text-gray-300">The advantage of its Latin origin and the relative meaninglessness of Lorum Ipsum is that the text does not
                                    attract attention to itself or distract the viewer's attention from the layout.</p>
                                <div class="flex items-center my-4">
                                    <div class="shrink-0">
                                        <b class="text-gray-900 dark:text-gray-50">Tags:</b>
                                    </div>
                                    <div class="ltr:ml-2 rtl:mr-2 flex-grow-1">
                                        <a href="javascript:void(0)" class="px-1.5 py-0.5 mt-1 text-sm font-medium text-green-500 bg-green-500/20 rounded">Business</a>
                                        <a href="javascript:void(0)" class="px-1.5 py-0.5 mt-1 text-sm font-medium text-green-500 bg-green-500/20 rounded">design</a>
                                        <a href="javascript:void(0)" class="px-1.5 py-0.5 mt-1 text-sm font-medium text-green-500 bg-green-500/20 rounded">Creative</a>
                                        <a href="javascript:void(0)" class="px-1.5 py-0.5 mt-1 text-sm font-medium text-green-500 bg-green-500/20 rounded">Event</a>
                                    </div>
                                </div>
                                <ul class="flex gap-2 mb-0 md:justify-end">
                                    <li>
                                        <b class="text-gray-900 dark:text-gray-50">Share post:</b>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="p-2.5 rounded bg-violet-500/20 text-violet-500">
                                            <i class="uil uil-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="p-2.5 rounded bg-green-500/20 text-green-500">
                                            <i class="uil uil-whatsapp"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="p-2.5 rounded bg-violet-500/20 text-violet-500">
                                            <i class="uil uil-linkedin-alt"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="p-2.5 rounded bg-red-500/20 text-red-500">
                                            <i class="uil uil-envelope"></i>
                                        </a>
                                    </li>
                                </ul>
                                <h5 class="pb-3 mt-8 text-gray-900 border-b border-gray-100/50 dark:text-gray-50 dark:border-zinc-700">Comments</h5>
                                <div class="mt-8">
                                    <div class="flex align-top">
                                        <div class="shrink-0">
                                            <img class="p-1 rounded-full w-14 h-14 ring-2 ring-gray-100/20" src="assets/images/user/img-01.jpg" alt="img">
                                        </div>
                                        <div class="ltr:ml-3 rtl:mr-3 grow">
                                            <small class="text-xs text-gray-500 ltr:float-right rtl:float-left dark:text-gray-300"><i class="uil uil-clock"></i> 30 min Ago</small>
                                            <a href="javascript:(0)" class="text-gray-900 transition-all duration-500 ease-in-out hover:bg-violet-500 dark:text-gray-50">
                                                <h6 class="mb-0 text-16 mt-sm-0">Rebecca Swartz</h6>
                                            </a>
                                            <p class="mb-0 text-sm text-gray-500 dark:text-gray-300">Aug 10, 2021</p>
                                            <div class="my-3">
                                                <a href="javascript: void(0);"
                                                    class="bg-gray-50 px-1.5 py-1 text-xs rounded group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 font-medium dark:bg-violet-500/20"><i
                                                        class="mdi mdi-reply"></i> Reply</a>
                                            </div>
                                            <p class="mb-0 italic text-gray-500 dark:text-gray-300">" There are many variations of passages of Lorem Ipsum available, but the majority
                                                have suffered alteration in some form, by injected humour "</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-8">
                                    <div class="flex align-top">
                                        <div class="shrink-0">
                                            <img class="p-1 rounded-full h-14 w-14 ring-2 ring-gray-100/20" src="assets/images/user/img-02.jpg" alt="img">
                                        </div>
                                        <div class="ltr:ml-3 rtl:mr-3 flex-grow-1">
                                            <small class="text-xs text-gray-500 ltr:float-right rtl:float-left dark:text-gray-300"><i class="uil uil-clock"></i> 2 hrs Ago</small>
                                            <a href="javascript:(0)" class="text-gray-900 transition-all duration-500 ease-in-out hover:bg-violet-500 dark:text-gray-50">
                                                <h6 class="mb-0 text-16">Adam Gibson</h6>
                                            </a>
                                            <p class="mb-0 text-sm text-gray-500 dark:text-gray-300">Aug 10, 2021</p>
                                            <div class="my-3">
                                                <a href="javascript: void(0);"
                                                    class="bg-gray-50 px-1.5 py-1 text-xs rounded group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 font-medium dark:bg-violet-500/20"><i
                                                        class="mdi mdi-reply"></i> Reply</a>
                                            </div>
                                            <p class="mb-0 text-gray-500 fst-italic dark:text-gray-300">" The most important aspect of beauty was, therefore, an inherent part of an
                                                object, rather than something applied superficially, and was based on universal, recognisable truths. "</p>

                                            <div class="flex mt-8 align-top">
                                                <div class="shrink-0">
                                                    <img class="p-1 rounded-full h-14 w-14 ring-2 ring-gray-100/20" src="assets/images/user/img-04.jpg" alt="img">
                                                </div>
                                                <div class="ltr:ml-3 rtl:mr-3 flex-grow-1">
                                                    <small class="text-xs text-gray-500 ltr:float-right rtl:float-left dark:text-gray-300"><i class="uil uil-clock"></i> 2 hrs
                                                        Ago</small>
                                                    <a href="javascript:(0)" class="text-gray-900 transition-all duration-500 ease-in-out hover:bg-violet-500 dark:text-gray-50">
                                                        <h6 class="mb-0 text-16">Kiera Finch</h6>
                                                    </a>
                                                    <p class="mb-0 text-sm text-gray-500 dark:text-gray-300">Aug 10, 2021</p>
                                                    <div class="my-3">
                                                        <a href="javascript: void(0);"
                                                            class="bg-gray-50 px-1.5 py-1 text-xs rounded group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 font-medium dark:bg-violet-500/20"><i
                                                                class="mdi mdi-reply"></i> Reply</a>
                                                    </div>
                                                    <p class="mb-0 text-gray-500 fst-italic dark:text-gray-300">" This response is important for our ability to learn from mistakes,
                                                        but it alsogives rise to self-criticism, because it is part of the threat-protection system. "</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <form action="#" class="mt-8 contact-form">
                                        <h5 class="pb-3 text-gray-900 border-b border-gray-100/50 dark:text-gray-50 dark:border-zinc-700">Leave a Message</h5>
                                        <div class="grid grid-cols-12 gap-5 mt-6">
                                            <div class="col-span-6">
                                                <div class="relative mb-3">
                                                    <label for="name" class="text-gray-900 dark:text-gray-50">Name</label>
                                                    <input name="name" id="name" type="text"
                                                        class="w-full mt-1 rounded border-gray-100/50 placeholder:text-xs dark:bg-transparent dark:border-gray-800 dark:text-gray-300"
                                                        placeholder="Enter your name*" required="">
                                                </div>
                                            </div>
                                            <div class="col-span-6">
                                                <div class="relative mb-3">
                                                    <label for="email" class="text-gray-900 dark:text-gray-50">Email address</label>
                                                    <input name="email" id="email" type="email"
                                                        class="w-full mt-1 rounded border-gray-100/50 placeholder:text-xs dark:bg-transparent dark:border-gray-800 dark:text-gray-300"
                                                        placeholder="Enter your email*" required="">
                                                </div>
                                            </div>
                                            <div class="col-span-12">
                                                <div class="relative mb-3">
                                                    <label for="subject" class="text-gray-900 dark:text-gray-50">Subject</label>
                                                    <input name="subject" id="subject" type="text"
                                                        class="w-full mt-1 rounded border-gray-100/50 placeholder:text-xs dark:bg-transparent dark:border-gray-800 dark:text-gray-300"
                                                        placeholder="Subject">
                                                </div>
                                            </div>
                                            <div class="col-span-12">
                                                <div class="relative mb-3">
                                                    <label for="comments" class="text-gray-900 dark:text-gray-50">Meassage</label>
                                                    <textarea name="comments" id="comments" rows="4"
                                                        class="w-full mt-1 rounded border-gray-100/50 placeholder:text-xs dark:bg-transparent dark:border-gray-800 dark:text-gray-300" placeholder="Enter your message"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 text-end">
                                                <button name="submit" type="submit" id="submit"
                                                    class="text-white border-transparent btn group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 hover:-translate-y-1">Send
                                                    Meassage <i class="uil uil-message ms-1"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="mt-8">
                                <h5 class="pb-3 text-gray-900 border-b border-gray-100/50 dark:text-gray-50 dark:border-zinc-700">Related Blog Posts</h5>
                                <div class="pb-5 mt-8 swiper blogSlider">
                                    <div class="pb-8 swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="relative overflow-hidden rounded-md group/blogpost">
                                                <img src="assets/images/blog/img-04.jpg" alt=""
                                                    class="w-full h-[400px] object-cover duration-500 ease scale-110 rounded-md group-hover/blogpost:-translate-x-4 group-hover/blogpost:transition-all">
                                                <div class="absolute inset-0 bg-gradient-to-t from-black/50"></div>
                                                <div class="absolute bottom-3 ltr:left-3 rtl:right-3">
                                                    <a href="blog-details.html" class="text-white">
                                                        <h5>Manage white space in responsive layouts ?</h5>
                                                    </a>
                                                    <p class="mt-1 text-gray-200"> <a href="blog-author.html" class="font-bold text-white-50">Rebecca Swartz</a> - 5 mins ago</p>
                                                </div>
                                            </div>
                                        </div><!--end blogSlider-->
                                        <div class="swiper-slide">
                                            <div class="relative overflow-hidden rounded-md group/blogpost">
                                                <img src="assets/images/blog/img-05.jpg" alt=""
                                                    class="w-full h-[400px] object-cover duration-500 ease scale-110 rounded-md group-hover/blogpost:-translate-x-4 group-hover/blogpost:transition-all">
                                                <div class="absolute inset-0 bg-gradient-to-t from-black/50"></div>
                                                <div class="absolute bottom-3 ltr:left-3 rtl:right-3">
                                                    <a href="blog-details.html" class="text-white">
                                                        <h5>A day in the of a professional fashion designer</h5>
                                                    </a>
                                                    <p class="mt-1 text-gray-200"> <a href="blog-author.html" class="font-bold text-white-50">Rebecca Swartz</a> - 5 mins ago</p>
                                                </div>
                                            </div>
                                        </div><!--end blogSlider-->
                                        <div class="swiper-slide">
                                            <div class="relative overflow-hidden rounded-md group/blogpost">
                                                <img src="assets/images/blog/img-06.jpg" alt=""
                                                    class="w-full h-[400px] object-cover duration-500 ease scale-110 rounded-md group-hover/blogpost:-translate-x-4 group-hover/blogpost:transition-all">
                                                <div class="absolute inset-0 bg-gradient-to-t from-black/50"></div>
                                                <div class="absolute bottom-3 ltr:left-3 rtl:right-3">
                                                    <a href="blog-details.html" class="text-white">
                                                        <h5>Design your apps in your own way</h5>
                                                    </a>
                                                    <p class="mt-1 text-gray-200"> <a href="blog-author.html" class="font-bold text-white-50">Rebecca Swartz</a> - 5 mins ago</p>
                                                </div>
                                            </div>
                                        </div><!--swiper-slide-->
                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 lg:col-span-4">
                            <form class="relative">
                                <input class="w-full rounded placeholder:text-sm border-gray-100/50 dark:bg-transparent dark:border-gray-800" type="text" placeholder="Search...">
                                <button class="absolute rounded top-3 ltr:right-4 rtl:left-4" type="submit"><span class="text-gray-500 mdi mdi-magnify"></span></button>
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
                                            <a href="blog-details.html" class="overflow-hidden font-medium text-gray-900 truncate dark:text-gray-50">The evolution of landing page
                                                creativity</a>
                                            <span class="block text-sm text-gray-500 dark:text-gray-300">Aug 10, 2021</span>
                                        </div>
                                    </li>
                                    <li class="flex flex-wrap items-center pb-4 mb-4 border-b gap-y-3 md:gap-y-0 border-gray-100/50 dark:border-zinc-600">
                                        <img src="assets/images/blog/img-02.jpg" alt="" class="w-[86px] object-cover h-16 rounded">
                                        <div class="ltr:ml-3 rtl:mr-3 grow"><a href="blog-details.html"
                                                class="overflow-hidden font-medium text-gray-900 truncate dark:text-gray-50">Beautiful day with friends in paris</a>
                                            <span class="block text-sm text-gray-500 dark:text-gray-300">Jun 24, 2021</span>
                                        </div>
                                    </li>
                                    <li class="flex flex-wrap items-center pb-4 mb-4 border-b gap-y-3 md:gap-y-0 border-gray-100/50 dark:border-zinc-600">
                                        <img src="assets/images/blog/img-03.jpg" alt="" class="w-[86px] object-cover h-16 rounded">
                                        <div class="ltr:ml-3 rtl:mr-3 grow"><a href="blog-details.html"
                                                class="overflow-hidden font-medium text-gray-900 truncate dark:text-gray-50">Project discussion with team</a>
                                            <span class="block text-sm text-gray-500 dark:text-gray-300">July 13, 2021</span>
                                        </div>
                                    </li>
                                    <li class="flex flex-wrap items-center pb-4 mb-4 gap-y-3 md:gap-y-0">
                                        <img src="assets/images/blog/img-10.jpg" alt="" class="w-[86px] object-cover h-16 rounded">
                                        <div class="ltr:ml-3 rtl:mr-3 grow"><a href="blog-details.html"
                                                class="overflow-hidden font-medium text-gray-900 truncate dark:text-gray-50">Smartest Applications for Business</a>
                                            <span class="block text-sm text-gray-500 dark:text-gray-300">Feb 01, 2021</span>
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
                                    <a class="mt-2 text-xs font-medium px-2 py-0.5 text-center bg-gray-50 text-gray-600 rounded hover:bg-violet-500 hover:text-white transition-all duration-200 ease-in dark:bg-gray-500/20 dark:text-gray-100 dark:hover:bg-violet-500/20 dark:hover:text-white"
                                        href="javascript:void(0)">Fashion</a>
                                    <a class="mt-2 text-xs font-medium px-2 py-0.5 text-center bg-gray-50 text-gray-600 rounded hover:bg-violet-500 hover:text-white transition-all duration-200 ease-in dark:bg-gray-500/20 dark:text-gray-100 dark:hover:bg-violet-500/20 dark:hover:text-white"
                                        href="javascript:void(0)">Jobs</a>
                                    <a class="mt-2 text-xs font-medium px-2 py-0.5 text-center bg-gray-50 text-gray-600 rounded hover:bg-violet-500 hover:text-white transition-all duration-200 ease-in dark:bg-gray-500/20 dark:text-gray-100 dark:hover:bg-violet-500/20 dark:hover:text-white"
                                        href="javascript:void(0)">Business</a>
                                    <a class="mt-2 text-xs font-medium px-2 py-0.5 text-center bg-gray-50 text-gray-600 rounded hover:bg-violet-500 hover:text-white transition-all duration-200 ease-in dark:bg-gray-500/20 dark:text-gray-100 dark:hover:bg-violet-500/20 dark:hover:text-white"
                                        href="javascript:void(0)">Corporate</a>
                                    <a class="mt-2 text-xs font-medium px-2 py-0.5 text-center bg-gray-50 text-gray-600 rounded hover:bg-violet-500 hover:text-white transition-all duration-200 ease-in dark:bg-gray-500/20 dark:text-gray-100 dark:hover:bg-violet-500/20 dark:hover:text-white"
                                        href="javascript:void(0)">E-commerce</a>
                                    <a class="mt-2 text-xs font-medium px-2 py-0.5 text-center bg-gray-50 text-gray-600 rounded hover:bg-violet-500 hover:text-white transition-all duration-200 ease-in dark:bg-gray-500/20 dark:text-gray-100 dark:hover:bg-violet-500/20 dark:hover:text-white"
                                        href="javascript:void(0)">Agency</a>
                                    <a class="mt-2 text-xs font-medium px-2 py-0.5 text-center bg-gray-50 text-gray-600 rounded hover:bg-violet-500 hover:text-white transition-all duration-200 ease-in dark:bg-gray-500/20 dark:text-gray-100 dark:hover:bg-violet-500/20 dark:hover:text-white"
                                        href="javascript:void(0)">Responsive</a>
                                </div>
                            </div>
                            <div class="mt-8">
                                <h6 class="mb-2 text-gray-900 text-16 dark:text-gray-50">Follow & Connect</h6>
                                <div class="w-full h-0.5 rounded-full bg-gray-100/60 dark:bg-gray-500/20">
                                    <div class="group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 w-[25%] h-0.5 ltr:rounded-l-full rtl:rounded-r-full"
                                        role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <ul class="flex flex-wrap gap-3 mt-4">
                                    <li
                                        class="leading-9 text-center ease-in rounded-full w-9 h-9 bg-gray-50 group-data-[theme-color=violet]:hover:bg-violet-500 group-data-[theme-color=sky]:hover:bg-sky-500 group-data-[theme-color=red]:hover:bg-red-500 group-data-[theme-color=green]:hover:bg-green-500 group-data-[theme-color=pink]:hover:bg-pink-500 group-data-[theme-color=blue]:hover:bg-blue-500 hover:text-white hover:transition-all dark:bg-gray-500/20 dark:text-white dark:hover:bg-violet-500/20 dark:hover:text-gray-50">
                                        <a href="javascript:void(0)"><i class="uil uil-facebook-f"></i></a>
                                    </li>
                                    <li
                                        class="leading-9 text-center ease-in rounded-full w-9 h-9 bg-gray-50 group-data-[theme-color=violet]:hover:bg-violet-500 group-data-[theme-color=sky]:hover:bg-sky-500 group-data-[theme-color=red]:hover:bg-red-500 group-data-[theme-color=green]:hover:bg-green-500 group-data-[theme-color=pink]:hover:bg-pink-500 group-data-[theme-color=blue]:hover:bg-blue-500 hover:text-white hover:transition-all dark:bg-gray-500/20 dark:text-white dark:hover:bg-violet-500/20 dark:hover:text-gray-50">
                                        <a href="javascript:void(0)"><i class="uil uil-whatsapp"></i></a>
                                    </li>
                                    <li
                                        class="leading-9 text-center ease-in rounded-full w-9 h-9 bg-gray-50 group-data-[theme-color=violet]:hover:bg-violet-500 group-data-[theme-color=sky]:hover:bg-sky-500 group-data-[theme-color=red]:hover:bg-red-500 group-data-[theme-color=green]:hover:bg-green-500 group-data-[theme-color=pink]:hover:bg-pink-500 group-data-[theme-color=blue]:hover:bg-blue-500 hover:text-white hover:transition-all dark:bg-gray-500/20 dark:text-white dark:hover:bg-violet-500/20 dark:hover:text-gray-50">
                                        <a href="javascript:void(0)"><i class="uil uil-twitter-alt"></i></a>
                                    </li>
                                    <li
                                        class="leading-9 text-center ease-in rounded-full w-9 h-9 bg-gray-50 group-data-[theme-color=violet]:hover:bg-violet-500 group-data-[theme-color=sky]:hover:bg-sky-500 group-data-[theme-color=red]:hover:bg-red-500 group-data-[theme-color=green]:hover:bg-green-500 group-data-[theme-color=pink]:hover:bg-pink-500 group-data-[theme-color=blue]:hover:bg-blue-500 hover:text-white hover:transition-all dark:bg-gray-500/20 dark:text-white dark:hover:bg-violet-500/20 dark:hover:text-gray-50">
                                        <a href="javascript:void(0)"><i class="uil uil-dribbble"></i></a>
                                    </li>
                                    <li
                                        class="leading-9 text-center ease-in rounded-full w-9 h-9 bg-gray-50 group-data-[theme-color=violet]:hover:bg-violet-500 group-data-[theme-color=sky]:hover:bg-sky-500 group-data-[theme-color=red]:hover:bg-red-500 group-data-[theme-color=green]:hover:bg-green-500 group-data-[theme-color=pink]:hover:bg-pink-500 group-data-[theme-color=blue]:hover:bg-blue-500 hover:text-white hover:transition-all dark:bg-gray-500/20 dark:text-white dark:hover:bg-violet-500/20 dark:hover:text-gray-50">
                                        <a href="javascript:void(0)"><i class="uil uil-envelope"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End grid -->

        </div>
    </div>
@endsection
