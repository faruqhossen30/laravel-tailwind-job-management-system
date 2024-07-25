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
                            @foreach ($bookmarkjob as $job)
                                <div
                                    class="relative mt-4 overflow-hidden transition-all duration-500 ease-in-out bg-white border rounded-md border-gray-100/50 group/job group-data-[theme-color=violet]:hover:border-violet-500 group-data-[theme-color=sky]:hover:border-sky-500 group-data-[theme-color=red]:hover:border-red-500 group-data-[theme-color=green]:hover:border-green-500 group-data-[theme-color=pink]:hover:border-pink-500 group-data-[theme-color=blue]:hover:border-blue-500 hover:-translate-y-2 dark:bg-neutral-900 dark:border-neutral-600">
                                    <div
                                        class="w-48 absolute -top-[5px] -left-20 -rotate-45 group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 group-data-[theme-color=violet]:group-hover/job:bg-violet-500 group-data-[theme-color=sky]:group-hover/job:bg-sky-500 group-data-[theme-color=red]:group-hover/job:bg-red-500 group-data-[theme-color=green]:group-hover/job:bg-green-500 group-data-[theme-color=pink]:group-hover/job:bg-pink-500 group-data-[theme-color=blue]:group-hover/job:bg-blue-500 transition-all duration-500 ease-in-out p-[6px] text-center dark:bg-violet-500/20">
                                        <a href="" class="text-2xl text-white align-middle"><i class="mdi mdi-star"></i></a>
                                    </div>
                                    <div class="p-4">
                                        <div class="grid items-center grid-cols-12">
                                            <div class="col-span-12 lg:col-span-2">
                                                <div class="mb-4 text-center mb-md-0">
                                                    <a href="company-details.html"><img src="assets/images/featured-job/img-01.png" alt=""
                                                            class="mx-auto img-fluid rounded-3"></a>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-span-12 lg:col-span-3">
                                                <div class="mb-2 mb-md-0">
                                                    <h5 class="mb-1 fs-18"><a href="" class="text-gray-900 dark:text-gray-50">{{ $job->circular->title }}</a>
                                                    </h5>
                                                    {{-- @if ($circular->organization_name) --}}
                                                    <p class="mb-0 text-gray-500 fs-14 dark:text-gray-300">{{ $job->circular->organization_name }}</p>
                                                    {{-- @elseif($circular->company_id) --}}
                                                    <p class="mb-0 text-gray-500 fs-14 dark:text-gray-300"></p>
                                                    {{-- @endif --}}
                                                </div>
                                            </div>
                                            <!--end col-->

                                            <div class="col-span-12 lg:col-span-2">
                                                <div>
                                                    <p class="mb-2 text-gray-500 dark:text-gray-300"><span
                                                            class="group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">৳</span>

                                                        {{ $job->circular->min_salary }} - {{ $job->circular->max_salary }} / month
                                                    </p>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-span-12 lg:col-span-2">
                                                <div>
                                                    <p class="mb-0 text-gray-500 dark:text-gray-300"> <i
                                                            class="mr-1 uil uil-clock-three group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500"></i>
                                                        {{ Carbon\Carbon::parse($job->circular->created_at)->format('d M Y') }}</p>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-span-12 lg:col-span-2">
                                                <div class="flex flex-wrap gap-1.5">
                                                    @foreach ($job->circular->jobtypes as $item)
                                                        <a href="javascript:void(0)" class="primary-link text-muted">{{$item->jobtype->name ?? ''}}</a>
                                                    @endforeach

                                                    {{-- <span class=" text-green-500 text-13 px-2 py-0.5 font-medium rounded">{{ $circular->jobtypes[0]->circular_id ?? '' }}</span> --}}
                                                </div>
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->
                                    </div>
                                    <div class="px-4 py-3 bg-gray-50 dark:bg-neutral-700">
                                        <div class="grid grid-cols-12">
                                            <div class="col-span-12 lg:col-span-6">
                                                <div>
                                                    <p class="mb-0 text-gray-500 dark:text-gray-300"><span class="text-gray-900 dark:text-gray-50">Job Industry :</span>
                                                        @foreach ($job->circular->jobindustries as $item)
                                                    <a href="javascript:void(0)" class="primary-link text-muted">{{ $item->jobindustry->name ?? ''}}</a>,
                                                @endforeach
                                                    </p>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-span-12 mt-2 lg:col-span-6 lg:mt-0">
                                                <div class="ltr:lg:text-right rtl:lg:text-left dark:text-gray-50">
                                                    <a href="#applyNow" data-bs-toggle="modal">Apply Now <i class="mdi mdi-chevron-double-right"></i></a>
                                                </div>
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    {{-- <div class="grid grid-cols-12">
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
                    </div> --}}
                    <div class="">
                        {{ $bookmarkjob->appends($_GET)->links('pagination::some') }}
                    </div>
                </div>
            </section>
            <!-- End grid -->

        </div>
    </div>
@endsection
