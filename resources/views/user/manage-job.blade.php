@extends('layouts.app')

@section('content')
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
            <section class="py-20">
                <div class="container mx-auto">
                    <div class="grid items-center grid-cols-12 mb-4">
                        <div class="col-span-12 lg:col-span-8">
                            <div class="mb-3 mb-lg-0">
                                <h6 class="text-gray-900 text-16 dark:text-gray-50"> Showing 1 – 8 of 11 results </h6>
                            </div>
                        </div><!--end col-->


                        <div class="col-span-12 lg:col-span-4">
                            <div class="candidate-list-widgets">
                                <div class="grid items-center grid-cols-12 gap-3">
                                    <div class="col-span-12 lg:col-span-6">
                                        <div class="selection-widget">
                                            <select class="form-select" data-trigger name="choices-single-filter-orderby" id="choices-single-filter-orderby"
                                                aria-label="Default select example">
                                                <option value="df">Default</option>
                                                <option value="ne">Newest</option>
                                                <option value="od">Oldest</option>
                                                <option value="rd">Random</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-span-12 lg:col-span-6">
                                        <div class="selection-widget">
                                            <select class="form-select" data-trigger name="choices-candidate-page" id="choices-candidate-page" aria-label="Default select example">
                                                <option value="df">All</option>
                                                <option value="ne">8 per Page</option>
                                                <option value="ne">12 per Page</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end candidate-list-widgets-->
                        </div><!--end col-->
                    </div>
                    <div class="mt-8">
                        <div class="grid grid-cols-1 gap-y-5">
                            <div
                                class="p-5 border border-gray-100/50 rounded-md relative hover:-translate-y-1.5 transition-all duration-500 ease-in-out group-data-[theme-color=violet]:hover:border-violet-500 group-data-[theme-color=sky]:hover:border-sky-500 group-data-[theme-color=red]:hover:border-red-500 group-data-[theme-color=green]:hover:border-green-500 group-data-[theme-color=pink]:hover:border-pink-500 group-data-[theme-color=blue]:hover:border-blue-500 hover:shadow-md hover:shadow-gray-100/30 dark:border-neutral-600 dark:hover:shadow-neutral-900">
                                <div class="grid grid-cols-12">
                                    <div class="col-span-12 lg:col-span-1">
                                        <a href="company-details.html"><img src="assets/images/featured-job/img-01.png" alt="" class="img-fluid rounded-3"></a>
                                    </div><!--end col-->
                                    <div class="col-span-12 lg:col-span-9">
                                        <div class="mt-4 lg:mt-0">
                                            <h5 class="mb-1 text-17"><a href="job-details.html" class="text-gray-900 dark:text-gray-50">Business Associate</a></h5>
                                            <ul class="flex gap-3 mb-0">
                                                <li class="">
                                                    <p class="mb-0 text-sm text-gray-500 dark:text-gray-300">Jobcy Technology Pvt.Ltd</p>
                                                </li>
                                                <li class="">
                                                    <p class="mb-0 text-sm text-gray-500 dark:text-gray-300"><i class="mdi mdi-map-marker"></i> California</p>
                                                </li>
                                                <li class="">
                                                    <p class="mb-0 text-sm text-gray-500 dark:text-gray-300"><i class="uil uil-wallet"></i> $250 - $800 / month</p>
                                                </li>
                                            </ul>
                                            <div class="flex flex-wrap gap-2 mt-3">
                                                <span class="px-2 py-0.5 mt-1 font-medium text-red-500 rounded bg-red-500/20 text-13">Part Time</span>
                                                <span class="px-2 py-0.5 mt-1 font-medium text-yellow-500 rounded bg-yellow-500/20 text-13">Urgent</span>
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                    <div class="items-center col-span-12 lg:col-span-2 ">
                                        <ul class="flex flex-wrap gap-3 mt-4 lg:mt-0">
                                            <li class="w-10 h-10 text-lg leading-10 text-center text-green-500 rounded-full bg-green-500/20" data-bs-toggle="tooltip"
                                                data-bs-placement="top" aria-label="Edit" data-bs-original-title="Edit">
                                                <a href="manage-jobs-post.html" class="text-center avatar-sm success-bg-subtle d-inline-block rounded-circle fs-18">
                                                    <i class="uil uil-edit"></i>
                                                </a>
                                            </li>
                                            <li class="w-10 h-10 text-lg leading-10 text-center text-red-500 rounded-full bg-red-500/20" data-bs-toggle="tooltip"
                                                data-bs-placement="top" aria-label="Delete" data-bs-original-title="Delete">
                                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#deleteModal"
                                                    class="text-center avatar-sm danger-bg-subtle d-inline-block rounded-circle fs-18">
                                                    <i class="uil uil-trash-alt"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div>

                            <div
                                class="p-5 border border-gray-100/50 rounded-md relative hover:-translate-y-1.5 transition-all duration-500 ease-in-out group-data-[theme-color=violet]:hover:border-violet-500 group-data-[theme-color=sky]:hover:border-sky-500 group-data-[theme-color=red]:hover:border-red-500 group-data-[theme-color=green]:hover:border-green-500 group-data-[theme-color=pink]:hover:border-pink-500 group-data-[theme-color=blue]:hover:border-blue-500 hover:shadow-md hover:shadow-gray-100/30 dark:border-neutral-600 dark:hover:shadow-neutral-900">
                                <div class="grid grid-cols-12">
                                    <div class="col-span-12 lg:col-span-1">
                                        <a href="company-details.html"><img src="assets/images/featured-job/img-02.png" alt="" class="img-fluid rounded-3"></a>
                                    </div><!--end col-->
                                    <div class="col-span-12 lg:col-span-9">
                                        <div class="mt-4 lg:mt-0">
                                            <h5 class="mb-1 text-17"><a href="job-details.html" class="text-gray-900 dark:text-gray-50">Marketing Director</a> <small
                                                    class="font-normal text-gray-500">(2-4 Yrs Exp.)</small></h5>
                                            <ul class="flex gap-3 mb-0">
                                                <li class="">
                                                    <p class="mb-0 text-sm text-gray-500 dark:text-gray-300">Creative Agency</p>
                                                </li>
                                                <li class="">
                                                    <p class="mb-0 text-sm text-gray-500 dark:text-gray-300"><i class="mdi mdi-map-marker"></i> New York</p>
                                                </li>
                                                <li class="">
                                                    <p class="mb-0 text-sm text-gray-500 dark:text-gray-300"><i class="uil uil-wallet"></i> $250 - $800 / month</p>
                                                </li>
                                            </ul>
                                            <div class="flex flex-wrap gap-2 mt-3">
                                                <span class="px-2 py-0.5 mt-1 font-medium text-red-500 rounded bg-red-500/20 text-13">Part Time</span>
                                                <span class="px-2 py-0.5 mt-1 font-medium text-sky-500 rounded bg-sky-500/20 text-13">Private</span>
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                    <div class="items-center col-span-12 lg:col-span-2">
                                        <ul class="flex flex-wrap gap-3 mt-4 lg:mt-0">
                                            <li class="w-10 h-10 text-lg leading-10 text-center text-green-500 rounded-full bg-green-500/20" data-bs-toggle="tooltip"
                                                data-bs-placement="top" aria-label="Edit" data-bs-original-title="Edit">
                                                <a href="manage-jobs-post.html" class="text-center avatar-sm success-bg-subtle d-inline-block rounded-circle fs-18">
                                                    <i class="uil uil-edit"></i>
                                                </a>
                                            </li>
                                            <li class="w-10 h-10 text-lg leading-10 text-center text-red-500 rounded-full bg-red-500/20" data-bs-toggle="tooltip"
                                                data-bs-placement="top" aria-label="Delete" data-bs-original-title="Delete">
                                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#deleteModal"
                                                    class="text-center avatar-sm danger-bg-subtle d-inline-block rounded-circle fs-18">
                                                    <i class="uil uil-trash-alt"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div>

                            <div
                                class="p-5 border border-gray-100/50 rounded-md relative hover:-translate-y-1.5 transition-all duration-500 ease-in-out group-data-[theme-color=violet]:hover:border-violet-500 group-data-[theme-color=sky]:hover:border-sky-500 group-data-[theme-color=red]:hover:border-red-500 group-data-[theme-color=green]:hover:border-green-500 group-data-[theme-color=pink]:hover:border-pink-500 group-data-[theme-color=blue]:hover:border-blue-500 hover:shadow-md hover:shadow-gray-100/30 dark:border-neutral-600 dark:hover:shadow-neutral-900">
                                <div class="grid grid-cols-12">
                                    <div class="col-span-12 lg:col-span-1">
                                        <a href="company-details.html"><img src="assets/images/featured-job/img-03.png" alt="" class="img-fluid rounded-3"></a>
                                    </div><!--end col-->
                                    <div class="col-span-12 lg:col-span-9">
                                        <div class="mt-4 lg:mt-0">
                                            <h5 class="mb-1 text-17"><a href="job-details.html" class="text-gray-900 dark:text-gray-50">HTML Developer</a> <small
                                                    class="font-normal text-gray-500">(2-4 Yrs Exp.)</small></h5>
                                            <ul class="flex gap-3 mb-0">
                                                <li class="">
                                                    <p class="mb-0 text-sm text-gray-500 dark:text-gray-300">Jobcy Technology Pvt.Ltd</p>
                                                </li>
                                                <li class="">
                                                    <p class="mb-0 text-sm text-gray-500 dark:text-gray-300"><i class="mdi mdi-map-marker"></i> California</p>
                                                </li>
                                                <li class="">
                                                    <p class="mb-0 text-sm text-gray-500 dark:text-gray-300"><i class="uil uil-wallet"></i> $250 - $800 / month</p>
                                                </li>
                                            </ul>
                                            <div class="flex flex-wrap gap-2 mt-3">
                                                <span class="px-2 py-0.5 mt-1 font-medium text-violet-500 rounded bg-violet-500/20 text-13">Freelance</span>
                                                <span class="px-2 py-0.5 mt-1 font-medium text-violet-500 rounded bg-violet-500/20 text-13">Freelance</span>
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                    <div class="items-center col-span-12 lg:col-span-2">
                                        <ul class="flex flex-wrap gap-3 mt-4 lg:mt-0">
                                            <li class="w-10 h-10 text-lg leading-10 text-center text-green-500 rounded-full bg-green-500/20" data-bs-toggle="tooltip"
                                                data-bs-placement="top" aria-label="Edit" data-bs-original-title="Edit">
                                                <a href="manage-jobs-post.html" class="text-center avatar-sm success-bg-subtle d-inline-block rounded-circle fs-18">
                                                    <i class="uil uil-edit"></i>
                                                </a>
                                            </li>
                                            <li class="w-10 h-10 text-lg leading-10 text-center text-red-500 rounded-full bg-red-500/20" data-bs-toggle="tooltip"
                                                data-bs-placement="top" aria-label="Delete" data-bs-original-title="Delete">
                                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#deleteModal"
                                                    class="text-center avatar-sm danger-bg-subtle d-inline-block rounded-circle fs-18">
                                                    <i class="uil uil-trash-alt"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div>

                            <div
                                class="p-5 border border-gray-100/50 rounded-md relative hover:-translate-y-1.5 transition-all duration-500 ease-in-out group-data-[theme-color=violet]:hover:border-violet-500 group-data-[theme-color=sky]:hover:border-sky-500 group-data-[theme-color=red]:hover:border-red-500 group-data-[theme-color=green]:hover:border-green-500 group-data-[theme-color=pink]:hover:border-pink-500 group-data-[theme-color=blue]:hover:border-blue-500 hover:shadow-md hover:shadow-gray-100/30 dark:border-neutral-600 dark:hover:shadow-neutral-900">
                                <div class="grid grid-cols-12">
                                    <div class="col-span-12 lg:col-span-1">
                                        <a href="company-details.html"><img src="assets/images/featured-job/img-04.png" alt="" class="img-fluid rounded-3"></a>
                                    </div><!--end col-->
                                    <div class="col-span-12 lg:col-span-9">
                                        <div class="mt-4 lg:mt-0">
                                            <h5 class="mb-1 text-17"><a href="job-details.html" class="text-gray-900 dark:text-gray-50">HTML Developer</a> <small
                                                    class="font-normal text-gray-500">(5+ Yrs Exp.)</small></h5>
                                            <ul class="flex gap-3 mb-0">
                                                <li class="">
                                                    <p class="mb-0 text-sm text-gray-500 dark:text-gray-300">Jobcy Technology Pvt.Ltd</p>
                                                </li>
                                                <li class="">
                                                    <p class="mb-0 text-sm text-gray-500 dark:text-gray-300"><i class="mdi mdi-map-marker"></i> California</p>
                                                </li>
                                                <li class="">
                                                    <p class="mb-0 text-sm text-gray-500 dark:text-gray-300"><i class="uil uil-wallet"></i> $250 - $800 / month</p>
                                                </li>
                                            </ul>
                                            <div class="flex flex-wrap gap-2 mt-3">
                                                <span class="px-2 py-0.5 mt-1 font-medium text-green-500 rounded bg-green-500/20 text-13">Full Time</span>
                                                <span class="px-2 py-0.5 mt-1 font-medium text-sky-500 rounded bg-sky-500/20 text-13">Private</span>
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                    <div class="items-center col-span-12 lg:col-span-2">
                                        <ul class="flex flex-wrap gap-3 mt-4 lg:mt-0">
                                            <li class="w-10 h-10 text-lg leading-10 text-center text-green-500 rounded-full bg-green-500/20" data-bs-toggle="tooltip"
                                                data-bs-placement="top" aria-label="Edit" data-bs-original-title="Edit">
                                                <a href="manage-jobs-post.html" class="text-center avatar-sm success-bg-subtle d-inline-block rounded-circle fs-18">
                                                    <i class="uil uil-edit"></i>
                                                </a>
                                            </li>
                                            <li class="w-10 h-10 text-lg leading-10 text-center text-red-500 rounded-full bg-red-500/20" data-bs-toggle="tooltip"
                                                data-bs-placement="top" aria-label="Delete" data-bs-original-title="Delete">
                                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#deleteModal"
                                                    class="text-center avatar-sm danger-bg-subtle d-inline-block rounded-circle fs-18">
                                                    <i class="uil uil-trash-alt"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div>

                            <div
                                class="p-5 border border-gray-100/50 rounded-md relative hover:-translate-y-1.5 transition-all duration-500 ease-in-out group-data-[theme-color=violet]:hover:border-violet-500 group-data-[theme-color=sky]:hover:border-sky-500 group-data-[theme-color=red]:hover:border-red-500 group-data-[theme-color=green]:hover:border-green-500 group-data-[theme-color=pink]:hover:border-pink-500 group-data-[theme-color=blue]:hover:border-blue-500 hover:shadow-md hover:shadow-gray-100/30 dark:border-neutral-600 dark:hover:shadow-neutral-900">
                                <div class="grid grid-cols-12">
                                    <div class="col-span-12 lg:col-span-1">
                                        <a href="company-details.html"><img src="assets/images/featured-job/img-05.png" alt="" class="img-fluid rounded-3"></a>
                                    </div><!--end col-->
                                    <div class="col-span-12 lg:col-span-9">
                                        <div class="mt-4 lg:mt-0">
                                            <h5 class="mb-1 text-17"><a href="job-details.html" class="text-gray-900 dark:text-gray-50">Product Designer </a> <small
                                                    class="font-normal text-gray-500">(0-5 Yrs Exp.)</small></h5>
                                            <ul class="flex gap-3 mb-0">
                                                <li class="">
                                                    <p class="mb-0 text-sm text-gray-500 dark:text-gray-300">Creative Agency </p>
                                                </li>
                                                <li class="">
                                                    <p class="mb-0 text-sm text-gray-500 dark:text-gray-300"><i class="mdi mdi-map-marker"></i> California</p>
                                                </li>
                                                <li class="">
                                                    <p class="mb-0 text-sm text-gray-500 dark:text-gray-300"><i class="uil uil-wallet"></i> $250 - $800 / month</p>
                                                </li>
                                            </ul>
                                            <div class="flex flex-wrap gap-2 mt-3">
                                                <span class="px-2 py-0.5 mt-1 font-medium text-blue-500 rounded bg-blue-500/20 text-13">Internship</span>
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                    <div class="items-center col-span-12 lg:col-span-2">
                                        <ul class="flex flex-wrap gap-3 mt-4 lg:mt-0">
                                            <li class="w-10 h-10 text-lg leading-10 text-center text-green-500 rounded-full bg-green-500/20" data-bs-toggle="tooltip"
                                                data-bs-placement="top" aria-label="Edit" data-bs-original-title="Edit">
                                                <a href="manage-jobs-post.html" class="text-center avatar-sm success-bg-subtle d-inline-block rounded-circle fs-18">
                                                    <i class="uil uil-edit"></i>
                                                </a>
                                            </li>
                                            <li class="w-10 h-10 text-lg leading-10 text-center text-red-500 rounded-full bg-red-500/20" data-bs-toggle="tooltip"
                                                data-bs-placement="top" aria-label="Delete" data-bs-original-title="Delete">
                                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#deleteModal"
                                                    class="text-center avatar-sm danger-bg-subtle d-inline-block rounded-circle fs-18">
                                                    <i class="uil uil-trash-alt"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div>

                            <div
                                class="p-5 border border-gray-100/50 rounded-md relative hover:-translate-y-1.5 transition-all duration-500 ease-in-out group-data-[theme-color=violet]:hover:border-violet-500 group-data-[theme-color=sky]:hover:border-sky-500 group-data-[theme-color=red]:hover:border-red-500 group-data-[theme-color=green]:hover:border-green-500 group-data-[theme-color=pink]:hover:border-pink-500 group-data-[theme-color=blue]:hover:border-blue-500 hover:shadow-md hover:shadow-gray-100/30 dark:border-neutral-600 dark:hover:shadow-neutral-900">
                                <div class="grid grid-cols-12">
                                    <div class="col-span-12 lg:col-span-1">
                                        <a href="company-details.html"><img src="assets/images/featured-job/img-06.png" alt="" class="img-fluid rounded-3"></a>
                                    </div><!--end col-->
                                    <div class="col-span-12 lg:col-span-9">
                                        <div class="mt-4 lg:mt-0">
                                            <h5 class="mb-1 text-17"><a href="job-details.html" class="text-gray-900 dark:text-gray-50">Project Manager </a> <small
                                                    class="font-normal text-gray-500">(0-2 Yrs Exp.)</small></h5>
                                            <ul class="flex gap-3 mb-0">
                                                <li class="">
                                                    <p class="mb-0 text-sm text-gray-500 dark:text-gray-300">Jobcy Technology Pvt.Ltd </p>
                                                </li>
                                                <li class="">
                                                    <p class="mb-0 text-sm text-gray-500 dark:text-gray-300"><i class="mdi mdi-map-marker"></i> California</p>
                                                </li>
                                                <li class="">
                                                    <p class="mb-0 text-sm text-gray-500 dark:text-gray-300"><i class="uil uil-wallet"></i> $250 - $800 / month</p>
                                                </li>
                                            </ul>
                                            <div class="flex flex-wrap gap-2 mt-3">
                                                <span class="px-2 py-0.5 mt-1 font-medium text-blue-500 rounded bg-blue-500/20 text-13">Internship</span>
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                    <div class="items-center col-span-12 lg:col-span-2">
                                        <ul class="flex flex-wrap gap-3 mt-4 lg:mt-0">
                                            <li class="w-10 h-10 text-lg leading-10 text-center text-green-500 rounded-full bg-green-500/20" data-bs-toggle="tooltip"
                                                data-bs-placement="top" aria-label="Edit" data-bs-original-title="Edit">
                                                <a href="manage-jobs-post.html" class="text-center avatar-sm success-bg-subtle d-inline-block rounded-circle fs-18">
                                                    <i class="uil uil-edit"></i>
                                                </a>
                                            </li>
                                            <li class="w-10 h-10 text-lg leading-10 text-center text-red-500 rounded-full bg-red-500/20" data-bs-toggle="tooltip"
                                                data-bs-placement="top" aria-label="Delete" data-bs-original-title="Delete">
                                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#deleteModal"
                                                    class="text-center avatar-sm danger-bg-subtle d-inline-block rounded-circle fs-18">
                                                    <i class="uil uil-trash-alt"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-12">
                        <div class="col-span-12">
                            <ul class="flex justify-center gap-2 mt-8">
                                <li class="w-12 h-12 text-center border rounded-full cursor-default border-gray-100/50 dark:border-gray-100/20">
                                    <a class="cursor-auto" href="javascript:void(0)" tabindex="-1">
                                        <i class="mdi mdi-chevron-double-left text-16 leading-[2.8] dark:text-white"></i>
                                    </a>
                                </li>
                                <li
                                    class="w-12 h-12 text-center text-white border border-transparent rounded-full cursor-pointer group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500">
                                    <a class="text-16 leading-[2.8]" href="javascript:void(0)">1</a>
                                </li>
                                <li
                                    class="w-12 h-12 text-center text-gray-900 transition-all duration-300 border rounded-full cursor-pointer border-gray-100/50 hover:bg-gray-100/30 focus:bg-gray-100/30 dark:border-gray-100/20 dark:text-gray-50 dark:hover:bg-gray-500/20">
                                    <a class="text-16 leading-[2.8]" href="javascript:void(0)">2</a>
                                </li>
                                <li
                                    class="w-12 h-12 text-center text-gray-900 transition-all duration-300 border rounded-full cursor-pointer border-gray-100/50 hover:bg-gray-100/30 focus:bg-gray-100/30 dark:border-gray-100/20 dark:text-gray-50 dark:hover:bg-gray-500/20">
                                    <a class="text-16 leading-[2.8]" href="javascript:void(0)">3</a>
                                </li>
                                <li
                                    class="w-12 h-12 text-center text-gray-900 transition-all duration-300 border rounded-full cursor-pointer border-gray-100/50 hover:bg-gray-100/30 focus:bg-gray-100/30 dark:border-gray-100/20 dark:text-gray-50 dark:hover:bg-gray-500/20">
                                    <a class="text-16 leading-[2.8]" href="javascript:void(0)">4</a>
                                </li>
                                <li
                                    class="w-12 h-12 text-center text-gray-900 transition-all duration-300 border rounded-full cursor-pointer border-gray-100/50 hover:bg-gray-100/30 focus:bg-gray-100/30 dark:border-gray-100/20 dark:text-gray-50 dark:hover:bg-gray-500/20">
                                    <a href="javascript:void(0)" tabindex="-1">
                                        <i class="mdi mdi-chevron-double-right text-16 leading-[2.8]"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!--end col-->
                    </div>
                </div>
            </section>
            <!-- End grid -->

        </div>
    </div>






@endsection


@push('scripts')
<script src="https://unicons.iconscout.com/release/v4.0.0/script/monochrome/bundle.js"></script>
<script src="assets/libs/@popperjs/core/umd/popper.min.js"></script>
<script src="assets/libs/simplebar/simplebar.min.js"></script>


<script src="assets/js/pages/switcher.js"></script>

<!-- Choice Js -->
<script src="assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>

<script src="assets/js/pages/candidate.init.js"></script>

<script src="assets/js/pages/dropdown&modal.init.js"></script>

<script src="assets/js/pages/nav&tabs.js"></script>

<script src="assets/js/app.js"></script>
@endpush
