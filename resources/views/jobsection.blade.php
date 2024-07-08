<section class="py-20 bg-gray-50 dark:bg-neutral-700">
    <div class="container mx-auto">
        <div class="grid grid-cols-1 gap-5">
            <div class="mb-5 text-center">
                <h3 class="mb-3 text-3xl text-gray-900 dark:text-gray-50">New & Random Jobs</h3>
                <p class="mb-5 text-gray-500 whitespace-pre-line dark:text-gray-300">Post a job to tell us about your project. We'll quickly match you with the right
                    <br> freelancers.
                </p>
            </div>
        </div>
        <div class="nav-tabs chart-tabpill">
            <div class="grid grid-cols-12">
                <div class="col-span-12 lg:col-span-8 lg:col-start-3">
                    <div class="p-1.5 bg-white dark:bg-neutral-900 shadow-lg shadow-gray-100/30 rounded-lg dark:shadow-neutral-700">
                        <ul class="items-center text-sm font-medium text-center text-gray-700 nav md:flex">
                            @foreach ($categories as $key=> $category)
                                <li class="w-full">
                                    <button data-tw-toggle="tab" data-tw-target="{{ $category->id }}" class="inline-block w-full py-[12px] px-[18px] dark:text-gray-50 @if($key == 0) active @endif"
                                        aria-current="page">{{ $category->name }}</button>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="tab-content">
                @foreach ($categories as $category)
                    <div class=" w-full tab-pane" id="{{ $category->id }}">
                        <div class="pt-8 ">
                            <div class="space-y-8">
                                @foreach ($category->circulars as $circular)
                                    <div
                                        class="relative mt-4 overflow-hidden transition-all duration-500 ease-in-out bg-white border rounded-md border-gray-100/50 group group-data-[theme-color=sky]:hover:border-sky-500 group-data-[theme-color=red]:hover:border-red-500 group-data-[theme-color=green]:hover:border-green-500 group-data-[theme-color=pink]:hover:border-pink-500 group-data-[theme-color=blue]:hover:border-blue-500 hover:-translate-y-2 dark:bg-neutral-900 dark:border-neutral-600 dark:hover:bg-violet-500">
                                        <div
                                            class="w-48 absolute -top-[5px] -left-20 -rotate-45 group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 p-[6px] text-center">
                                            <a href="javascript:void(0)" class="text-2xl text-white align-middle"><i class="mdi mdi-star"></i></a>
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
                                                        <h5 class="mb-1 fs-18"><a href="job-details.html" class="text-gray-900 dark:text-gray-50">{{ $circular->title }}</a>
                                                        </h5>

                                                        @if ($circular->organization_name)
                                                            <p class="mb-0 text-gray-500 fs-14 dark:text-gray-300">{{ $circular->organization_name }}</p>
                                                        @elseif($circular->company_id)
                                                            <p class="mb-0 text-gray-500 fs-14 dark:text-gray-300">{{ $circular->company->name }}</p>
                                                        @endif
                                                        {{-- <p class="mb-0 text-gray-500 fs-14 dark:text-gray-300">Web Technology pvt.Ltd</p> --}}
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-3">
                                                    <div class="mb-2 lg:flex">
                                                        <div class="flex-shrink-0">
                                                            <i
                                                                class="mr-1 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 mdi mdi-map-marker"></i>
                                                        </div>
                                                        <p class="mb-0 text-gray-500 dark:text-gray-300">Oakridge Lane Richardson</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-2">
                                                    <div>
                                                        <p class="mb-2 text-gray-500 dark:text-gray-300"><span
                                                                class="group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">৳</span>
                                                            {{ $circular->min_salary }} - {{ $circular->max_salary }}/m
                                                        </p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-2">
                                                    <div class="flex flex-wrap gap-2">

                                                        @foreach ($circular->jobtypes as $jobtype)
                                                            {{-- <p class="font-medium text-gray-900 dark:text-gray-50">{{ $jobtype->jobtype->name }}</p> --}}
                                                            <span class="badge bg-green-500/20 text-green-500 text-13 px-2 py-0.5 font-medium rounded">{{ $jobtype->jobtype->name ?? ''}}</span>
                                                        @endforeach
                                                    </div>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </div>

                                        <div class="p-3 bg-gray-50 dark:bg-neutral-700">
                                            <div class="grid grid-cols-12">
                                                <div class="col-span-12 lg:col-span-4">
                                                    <div>
                                                        <p class="mb-0 text-gray-500 dark:text-gray-300"><span class="text-gray-900 dark:text-gray-50">Job Industry :</span>



                                                            @foreach ($circular->jobindustries as $jobindustry)
                                                                <a href="javascript:void(0)" class="primary-link text-muted">{{ $jobindustry->jobindustry->name }}</a>,
                                                            @endforeach
                                                        </p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-6">
                                                    <div>
                                                        <p class="mb-0 text-gray-500 dark:text-gray-300"><span class="text-gray-900 dark:text-gray-50">Notes :</span>
                                                            languages only differ in their grammar. </p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-3 lg:col-span-2">
                                                    <div class="text-start text-md-end dark:text-gray-50">
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
                    </div>
                @endforeach
            </div>
        </div>

        <div class="mt-8">
            <div class="grid grid-cols-1">
                <div class="text-center">
                    <a href="job-categories.html"
                        class="text-white border-transparent group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 btn focus:ring focus:ring-custom-500/20">View
                        More <i class="uil uil-arrow-right ms-1"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
