@php
    $querycarierlabes = null;
    if (isset($_GET['careerlabel'])) {
        $querycarierlabes = $_GET['careerlabel'];
    }

    $queryjobtypes = null;
    if (isset($_GET['queryjobtypes'])) {
        $queryjobtypes = $_GET['queryjobtypes'];
    }

    $educatonquery = null;
    if (isset($_GET['educatonquery'])) {
        $educatonquery = $_GET['educatonquery'];
    }
    $jobindustryquery = null;
    if (isset($_GET['jobindustryquery'])) {
        $jobindustryquery = $_GET['jobindustryquery'];
    }
    $keyword = null;
    if (isset($_GET['keyword'])) {
        $keyword = trim($_GET['keyword']);
    }
@endphp

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
            <!-- Start team -->
            <section class="py-28">
                <div class="container mx-auto">
                    <div class="grid grid-cols-12 gap-y-10 lg:gap-10">
                        <div class="col-span-12 xl:col-span-9">
                            <div class="job-list-header">
                                <form action="{{ route('search') }}" method="GET">
                                    <div class="grid grid-cols-12 gap-3">
                                        <div class="col-span-12 lg:col-span-8">
                                            <div class="relative filler-job-form">
                                                <i class="uil uil-briefcase-alt"></i>
                                                <input type="search" @if ($keyword) value="{{ $keyword }}" @endif name="keyword"
                                                    class="w-full filter-job-input-box dark:text-gray-100" id="exampleFormControlInput1" placeholder="Job, company... ">
                                            </div>
                                        </div>


                                        <!--end col-->
                                        <div class="col-span-12 lg:col-span-3">
                                            <button type="submit"
                                                class="w-full text-white border-transparent btn group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 focus:ring focus:ring-custom-500/30"><i
                                                    class="uil uil-filter"></i> Search</button>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end grid-->
                                </form>
                            </div>
                            <div class="mt-8">
                                <h6 class="mb-4 text-gray-900 dark:text-gray-50">Popular</h6>
                                <ul class="flex flex-wrap gap-3 ">

                                    @foreach ($circularscategory as $category)
                                        <li class="border p-[6px] border-gray-100/50 rounded group/joblist dark:border-gray-100/20 ">
                                            <div class="flex items-center px-4">
                                                <div
                                                    class="h-8 w-8 text-center group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 leading-[2.4] rounded group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 text-sm font-medium">
                                                    {{ $category->circulars_count }}
                                                </div>
                                                <a href="javascript:void(0)" class="text-gray-900 ltr:ml-2 rtl:mr-2 dark:text-gray-50">
                                                    <h6
                                                        class="mb-0 transition-all duration-300 fs-14 group-data-[theme-color=violet]:group-hover/joblist:text-violet-500 group-data-[theme-color=sky]:group-hover/joblist:text-sky-500 group-data-[theme-color=red]:group-hover/joblist:text-red-500 group-data-[theme-color=green]:group-hover/joblist:text-green-500 group-data-[theme-color=pink]:group-hover/joblist:text-pink-500 group-data-[theme-color=blue]:group-hover/joblist:text-blue-500">
                                                        {{ $category->name }}</h6>
                                                </a>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="mt-14">

                                @foreach ($circulars as $circular)
                                    <div
                                        class="relative mt-4 overflow-hidden transition-all duration-500 ease-in-out bg-white border rounded-md border-gray-100/50 group/job group-data-[theme-color=violet]:hover:border-violet-500 group-data-[theme-color=sky]:hover:border-sky-500 group-data-[theme-color=red]:hover:border-red-500 group-data-[theme-color=green]:hover:border-green-500 group-data-[theme-color=pink]:hover:border-pink-500 group-data-[theme-color=blue]:hover:border-blue-500 hover:-translate-y-2 dark:bg-neutral-900 dark:border-neutral-600">
                                        <div
                                            class="w-48 absolute -top-[5px] -left-20 -rotate-45 group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 group-data-[theme-color=violet]:group-hover/job:bg-violet-500 group-data-[theme-color=sky]:group-hover/job:bg-sky-500 group-data-[theme-color=red]:group-hover/job:bg-red-500 group-data-[theme-color=green]:group-hover/job:bg-green-500 group-data-[theme-color=pink]:group-hover/job:bg-pink-500 group-data-[theme-color=blue]:group-hover/job:bg-blue-500 transition-all duration-500 ease-in-out p-[6px] text-center dark:bg-violet-500/20">
                                            <a href="{{ route('bookmark.store', $circular->id) }}" class="text-2xl text-white align-middle"><i class="mdi mdi-star"></i></a>
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
                                                        <h5 class="mb-1 fs-18"><a href="{{ route('job.details', $circular->slug) }}"
                                                                class="text-gray-900 dark:text-gray-50">{{ $circular->title }}</a>
                                                        </h5>
                                                        @if ($circular->organization_name)
                                                            <p class="mb-0 text-gray-500 fs-14 dark:text-gray-300">{{ $circular->organization_name }}</p>
                                                        @elseif($circular->company_id)
                                                            <p class="mb-0 text-gray-500 fs-14 dark:text-gray-300">{{ $circular->company->name }}</p>
                                                        @endif
                                                    </div>
                                                </div>
                                                <!--end col-->

                                                <div class="col-span-12 lg:col-span-2">
                                                    <div>
                                                        <p class="mb-2 text-gray-500 dark:text-gray-300"><span
                                                                class="group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">৳</span>

                                                            {{ $circular->min_salary }} - {{ $circular->max_salary }} / month
                                                        </p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-2">
                                                    <div>
                                                        <p class="mb-0 text-gray-500 dark:text-gray-300"> <i
                                                                class="mr-1 uil uil-clock-three group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500"></i>
                                                            {{ Carbon\Carbon::parse($circular->created_at)->format('d M Y') }}</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-2">
                                                    <div class="flex flex-wrap gap-1.5">
                                                        @foreach ($circular->jobtypes as $jobtype)
                                                            <a href="javascript:void(0)" class="primary-link text-muted">{{ $jobtype->jobtype->name ?? '' }}</a>
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
                                                            @foreach ($circular->jobindustries as $jobindustry)
                                                                <a href="javascript:void(0)" class="primary-link text-muted">{{ $jobindustry->jobindustry->name ?? '' }}</a>,
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

                            <div class="">
                                {{ $circulars->appends($_GET)->links('pagination::some') }}
                            </div>
                        </div>
                        <div class="col-span-12 space-y-5 lg:col-span-3">

                            <form action="" method="GET">
                                <div data-tw-accordion="collapse">
                                    <div class="text-gray-700 accordion-item dark:text-gray-300">
                                        <h6>
                                            <button type="button"
                                                class="flex items-center justify-between w-full px-4 py-2 font-medium text-left accordion-header group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 group active">
                                                <span class="text-gray-900 text-15 dark:text-gray-50"> Careerlavel</span>
                                                <i class="mdi mdi-chevron-down text-xl group-[.active]:rotate-180 text-gray-900 dark:text-gray-50"></i>
                                            </button>
                                        </h6>
                                        <div class="block accordion-body">
                                            <div class="p-5">

                                                @foreach ($careerlabels as $careerlabel)
                                                    <div class="mt-2">
                                                        <input
                                                            class="rounded cursor-pointer group-data-[theme-color=violet]:checked:bg-violet-500 group-data-[theme-color=sky]:checked:bg-sky-500 group-data-[theme-color=red]:checked:bg-red-500 group-data-[theme-color=green]:checked:bg-green-500 group-data-[theme-color=pink]:checked:bg-pink-500 group-data-[theme-color=blue]:checked:bg-blue-500 focus:ring-0 focus:ring-offset-0 dark:bg-neutral-600 dark:checked:bg-violet-500/20"
                                                            type="checkbox" name="careerlabel[]" value="{{ $careerlabel->id }}" id="flexCheckChecked1{{ $careerlabel->id }}"
                                                            @if ($querycarierlabes && in_array($careerlabel->id, $querycarierlabes)) checked @endif onchange="this.form.submit()">
                                                        <label class="text-gray-500 cursor-pointer ltr:ml-2 rtl:mr-2 dark:text-gray-300"
                                                            for="{{ $careerlabel->id }}">{{ $careerlabel->name }}</label>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-tw-accordion="collapse">
                                    <div class="text-gray-700 accordion-item dark:text-gray-300">
                                        <h6>
                                            <button type="button"
                                                class="flex items-center justify-between w-full px-4 py-2 font-medium text-left accordion-header group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 group active">
                                                <span class="text-gray-900 text-15 dark:text-gray-50">Education</span>
                                                <i class="mdi mdi-chevron-down text-xl group-[.active]:rotate-180 text-gray-900 dark:text-gray-50"></i>
                                            </button>
                                        </h6>
                                        <div class="block accordion-body">
                                            <div class="p-5">
                                                @foreach ($educations as $education)
                                                    <div class="mt-2">
                                                        <input
                                                            class="rounded cursor-pointer group-data-[theme-color=violet]:checked:bg-violet-500 group-data-[theme-color=sky]:checked:bg-sky-500 group-data-[theme-color=red]:checked:bg-red-500 group-data-[theme-color=green]:checked:bg-green-500 group-data-[theme-color=pink]:checked:bg-pink-500 group-data-[theme-color=blue]:checked:bg-blue-500 focus:ring-0 focus:ring-offset-0 dark:bg-neutral-600 dark:checked:bg-violet-500/20"
                                                            type="checkbox" name="educatonquery[]" value="{{ $education->id }}" id="flexCheckChecked1{{ $education->id }}"
                                                            @if ($educatonquery && in_array($education->id, $educatonquery)) checked @endif onchange="this.form.submit()">
                                                        <label class="text-gray-500 cursor-pointer ltr:ml-2 rtl:mr-2 dark:text-gray-300"
                                                            for="{{ $education->id }}">{{ $education->name }}</label>
                                                    </div>
                                                @endforeach

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-tw-accordion="collapse">
                                    <div class="text-gray-700 accordion-item dark:text-gray-300">
                                        <h6>
                                            <button type="button"
                                                class="flex items-center justify-between w-full px-4 py-2 font-medium text-left accordion-header group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 group ">
                                                <span class="text-gray-900 text-15 dark:text-gray-50">Jobtype</span>
                                                <i class="mdi mdi-chevron-down text-xl group-[.active]:rotate-180 text-gray-900 dark:text-gray-50"></i>
                                            </button>
                                        </h6>
                                        <div class="block accordion-body">
                                            <div class="p-5">
                                                @foreach ($jobtypes as $jobtype)
                                                    <div class="mt-2">
                                                        <input
                                                            class="rounded cursor-pointer group-data-[theme-color=violet]:checked:bg-violet-500 group-data-[theme-color=sky]:checked:bg-sky-500 group-data-[theme-color=red]:checked:bg-red-500 group-data-[theme-color=green]:checked:bg-green-500 group-data-[theme-color=pink]:checked:bg-pink-500 group-data-[theme-color=blue]:checked:bg-blue-500 focus:ring-0 focus:ring-offset-0 dark:bg-neutral-600 dark:checked:bg-violet-500/20"
                                                            type="checkbox" name="queryjobtypes[]" value="{{ $jobtype->id }}" id="flexCheckChecked1{{ $jobtype->id }}"
                                                            @if ($queryjobtypes && in_array($jobtype->id, $queryjobtypes)) checked @endif onchange="this.form.submit()">
                                                        <label class="text-gray-500 cursor-pointer ltr:ml-2 rtl:mr-2 dark:text-gray-300"
                                                            for="{{ $jobtype->id }}">{{ $jobtype->name }}</label>
                                                    </div>
                                                @endforeach

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div data-tw-accordion="collapse">
                                    <div class="text-gray-700 accordion-item dark:text-gray-300">
                                        <h6>
                                            <button type="button"
                                                class="flex items-center justify-between w-full px-4 py-2 font-medium text-left accordion-header group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 group ">
                                                <span class="text-gray-900 text-15 dark:text-gray-50">jobindustries</span>
                                                <i class="mdi mdi-chevron-down text-xl group-[.active]:rotate-180 text-gray-900 dark:text-gray-50"></i>
                                            </button>
                                        </h6>
                                        <div class="block accordion-body">
                                            <div class="p-5">
                                                @foreach ($jobindustries as $jobindustry)
                                                    <div class="mt-2">
                                                        <input
                                                            class="rounded cursor-pointer group-data-[theme-color=violet]:checked:bg-violet-500 group-data-[theme-color=sky]:checked:bg-sky-500 group-data-[theme-color=red]:checked:bg-red-500 group-data-[theme-color=green]:checked:bg-green-500 group-data-[theme-color=pink]:checked:bg-pink-500 group-data-[theme-color=blue]:checked:bg-blue-500 focus:ring-0 focus:ring-offset-0 dark:bg-neutral-600 dark:checked:bg-violet-500/20"
                                                            type="checkbox" name="jobindustryquery[]" value="{{ $jobindustry->id }}" id="flexCheckChecked1{{ $jobindustry->id }}"
                                                            @if ($jobindustryquery && in_array($jobindustry->id, $jobindustryquery)) checked @endif onchange="this.form.submit()">
                                                        <label class="text-gray-500 cursor-pointer ltr:ml-2 rtl:mr-2 dark:text-gray-300"
                                                            for="{{ $jobindustry->id }}">{{ $jobindustry->name }}</label>
                                                    </div>
                                                @endforeach

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </section>
            <!-- End team -->



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
    <!-- Footer Start -->
@endsection
