@php
use App\Models\User;
    $user = User::first();
@endphp
@extends('layouts.app')
@section('breadcrumb')
    <x-breadcrumb />
@endsection
@section('content')
    <section>
        <div class="fixed z-40 flex flex-col gap-3 ltr:left-0 rtl:right-0 top-[330px]">
            <!-- light-dark mode button -->
            <a href="javascript: void(0);" id="ltr-rtl"
                class="z-40 px-3 py-3 font-medium text-white transition-all duration-300 ease-linear group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 text-14 hover:bg-violet-700 ltr:rounded-r rtl:rounded-l"
                onclick="changeMode(event)">
                <span class="ltr:hidden">LTR</span>
                <span class="rtl:hidden">RTL</span>
            </a>

        </div>

        <!-- light-dark mode button -->
        <a href="javascript: void(0);" onclick="toggleSwitcher()"
            class="fixed z-40 flex flex-col gap-3 px-4 py-3 font-normal text-white group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 top-96 text-14 ltr:rounded-r rtl:rounded-l">
            <i class="text-xl mdi mdi-cog mdi-spin"></i>
        </a>

        <div class="main-content">
            <div class="page-content py-12">
                <!-- Start grid -->
                <section class="py-20">
                    <div class="container mx-auto">
                        <div class="grid grid-cols-12 gap-y-10 lg:gap-10">
                            <div class="col-span-12 lg:col-span-4">
                                <div class="border rounded border-gray-100/50 dark:border-neutral-600">
                                    <div class="p-5 border-b border-gray-100/50 dark:border-neutral-600">
                                        <div class="text-center">
                                            <img src="{{asset('storage/'.$user->thumbnail)}}" alt="" class="w-20 h-20 object-cover p-1 mx-auto border-2 rounded-full border-gray-200/20">
                                            <h6 class="mt-4 mb-0 text-lg text-gray-900 dark:text-gray-50">{{$user ->name}}</h6>
                                            <p class="mb-4 text-gray-500 dark:text-gray-300">Developer</p>
                                            <ul class="flex flex-wrap justify-center gap-2 mb-0">
                                                <li
                                                    class="w-10 h-10 text-lg leading-10 transition-all duration-300 ease-in-out rounded bg-violet-500/20 text-violet-500 hover:bg-violet-500 hover:text-white">
                                                    <a href="javascript:void(0)" class="social-link rounded-3 "><i class="uil uil-facebook-f"></i></a>
                                                </li>
                                                <li
                                                    class="w-10 h-10 text-lg leading-10 transition-all duration-300 ease-in-out rounded bg-sky-500/20 text-sky-500 hover:bg-sky-500 hover:text-white">
                                                    <a href="javascript:void(0)" class="social-link rounded-3 btn-soft-info"><i class="uil uil-twitter-alt"></i></a>
                                                </li>
                                                <li
                                                    class="w-10 h-10 text-lg leading-10 text-green-500 transition-all duration-300 ease-in-out rounded bg-green-500/20 hover:bg-green-500 hover:text-white">
                                                    <a href="javascript:void(0)" class="social-link rounded-3 btn-soft-success"><i class="uil uil-whatsapp"></i></a>
                                                </li>
                                                <li
                                                    class="w-10 h-10 text-lg leading-10 text-red-500 transition-all duration-300 ease-in-out rounded bg-red-500/20 hover:bg-red-500 hover:text-white">
                                                    <a href="javascript:void(0)" class="social-link rounded-3 btn-soft-danger"><i class="uil uil-phone-alt"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="p-5">
                                        <h6 class="mb-3 font-semibold text-gray-900 text-17 dark:text-gray-50">Contacts</h6>
                                        <ul class="mb-0">
                                            <li class="pb-3">
                                                <div class="flex">
                                                    <label class="w-32 font-medium text-gray-900 dark:text-gray-50">Email</label>
                                                    <div>
                                                        <p class="mb-0 text-gray-500 text-break dark:text-gray-300">
                                                           {{$user->email}}
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="pb-3">
                                                <div class="flex">
                                                    <label class="w-32 font-medium text-gray-900 dark:text-gray-50">Phone Number</label>
                                                    <div>
                                                        <p class="mb-0 text-gray-500 dark:text-gray-300">{{$user->mobile}}</p>
                                                    </div>
                                                </div>
                                            </li>

                                        </ul>
                                    </div>
                                </div>

                                <div class="pt-3">
                                    <div class="w-full text-gray-900 bg-white border border-gray-200 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                        <a href="{{route('cv.create')}}" class="relative inline-flex items-center w-full px-4 py-2 text-sm font-medium border-b border-gray-200 rounded-t-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:border-gray-600 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:ring-gray-500 dark:focus:text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3 me-2.5">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5m-13.5-9L12 3m0 0 4.5 4.5M12 3v13.5" />
                                              </svg>

                                            Upload CV
                                        </a>
                                        <a href="{{route('cv.list')}}" class="relative inline-flex items-center w-full px-4 py-2 text-sm font-medium border-b border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:border-gray-600 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:ring-gray-500 dark:focus:text-white">
                                            <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7.75 4H19M7.75 4a2.25 2.25 0 0 1-4.5 0m4.5 0a2.25 2.25 0 0 0-4.5 0M1 4h2.25m13.5 6H19m-2.25 0a2.25 2.25 0 0 1-4.5 0m4.5 0a2.25 2.25 0 0 0-4.5 0M1 10h11.25m-4.5 6H19M7.75 16a2.25 2.25 0 0 1-4.5 0m4.5 0a2.25 2.25 0 0 0-4.5 0M1 16h2.25"/>
                                            </svg>
                                            Cv list
                                        </a>
                                        <button type="button" class="relative inline-flex items-center w-full px-4 py-2 text-sm font-medium border-b border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:border-gray-600 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:ring-gray-500 dark:focus:text-white">
                                            <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 18" fill="currentColor">
                                                <path d="M18 4H16V9C16 10.0609 15.5786 11.0783 14.8284 11.8284C14.0783 12.5786 13.0609 13 12 13H9L6.846 14.615C7.17993 14.8628 7.58418 14.9977 8 15H11.667L15.4 17.8C15.5731 17.9298 15.7836 18 16 18C16.2652 18 16.5196 17.8946 16.7071 17.7071C16.8946 17.5196 17 17.2652 17 17V15H18C18.5304 15 19.0391 14.7893 19.4142 14.4142C19.7893 14.0391 20 13.5304 20 13V6C20 5.46957 19.7893 4.96086 19.4142 4.58579C19.0391 4.21071 18.5304 4 18 4Z" fill="currentColor"/>
                                                <path d="M12 0H2C1.46957 0 0.960859 0.210714 0.585786 0.585786C0.210714 0.960859 0 1.46957 0 2V9C0 9.53043 0.210714 10.0391 0.585786 10.4142C0.960859 10.7893 1.46957 11 2 11H3V13C3 13.1857 3.05171 13.3678 3.14935 13.5257C3.24698 13.6837 3.38668 13.8114 3.55279 13.8944C3.71889 13.9775 3.90484 14.0126 4.08981 13.996C4.27477 13.9793 4.45143 13.9114 4.6 13.8L8.333 11H12C12.5304 11 13.0391 10.7893 13.4142 10.4142C13.7893 10.0391 14 9.53043 14 9V2C14 1.46957 13.7893 0.960859 13.4142 0.585786C13.0391 0.210714 12.5304 0 12 0Z" fill="currentColor"/>
                                            </svg>
                                            Messages
                                        </button>
                                        <button type="button" class="relative inline-flex items-center w-full px-4 py-2 text-sm font-medium rounded-b-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:border-gray-600 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:ring-gray-500 dark:focus:text-white">
                                            <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M14.707 7.793a1 1 0 0 0-1.414 0L11 10.086V1.5a1 1 0 0 0-2 0v8.586L6.707 7.793a1 1 0 1 0-1.414 1.414l4 4a1 1 0 0 0 1.416 0l4-4a1 1 0 0 0-.002-1.414Z"/>
                                                <path d="M18 12h-2.55l-2.975 2.975a3.5 3.5 0 0 1-4.95 0L4.55 12H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-4a2 2 0 0 0-2-2Zm-3 5a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z"/>
                                            </svg>
                                            Download
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-12 lg:col-span-8">
                                <div class="border rounded border-gray-100/50 dark:border-neutral-600 nav-tabs bottom-border-tab">
                                    <div class="px-6 py-0 border-b border-gray-100/50 dark:border-neutral-600">

                                        <ul class="items-center text-sm font-medium text-center text-gray-700 nav md:flex">
                                            <li class="active" role="presentation">
                                                <button class="inline-block w-full py-4 px-[18px] dark:text-gray-50 active" data-tw-toggle="tab" type="button"
                                                    data-tw-target="overview-tab">
                                                    Overview
                                                </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="inline-block w-full py-4 px-[18px] dark:text-gray-50" data-tw-toggle="tab" type="button"
                                                    data-tw-target="settings-tab">
                                                    Settings
                                                </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="inline-block w-full py-4 px-[18px] dark:text-gray-50" data-tw-toggle="tab" type="button"
                                                    data-tw-target="cv-tab">
                                                    Cv Upload
                                                </button>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="p-6 tab-content">
                                        <div class="block w-full tab-pane" id="overview-tab">
                                            <div class="mt-2 space-y-8">
                                                <div>
                                                    <h5 class="text-lg font-bold text-gray-900 dark:text-gray-50">About</h5>
                                                    <p class="mt-4 text-gray-500 dark:text-gray-300">
                                                        Developer with over 5 years' experience working in both
                                                        the public and private sectors. Diplomatic, personable,
                                                        and adept at managing sensitive situations. Highly
                                                        organized, self-motivated, and proficient with
                                                        computers. Looking to boost students’ satisfactions
                                                        scores for <b>International University</b>. Bachelor's
                                                        degree in communications.
                                                    </p>
                                                    <p class="mt-3 text-gray-500 dark:text-gray-300">
                                                        It describes the candidate's relevant experience,
                                                        skills, and achievements. The purpose of this career
                                                        summary is to explain your qualifications for the job in
                                                        3-5 sentences and convince the manager to read the whole
                                                        resume document.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="mt-6">
                                                <h6 class="text-lg font-bold text-gray-900 dark:text-gray-50">Education</h6>
                                                <div class="relative flex mt-5">
                                                    <div
                                                        class="after:content-[''] after:absolute after:hidden after:md:block after:border after:border-dashed after:h-24 after:left-5 after:top-10 after:border-violet-500/20">
                                                    </div>
                                                    <div class="w-10 h-10 text-xl leading-10 text-center rounded-full shrink-0 bg-violet-500/20 text-violet-500">
                                                        B
                                                    </div>
                                                    <div class="ml-4">
                                                        <h6 class="mb-1 text-gray-900 text-16 dark:text-gray-50">
                                                            BCA - Bachelor of Computer Applications
                                                        </h6>
                                                        <p class="mb-2 text-gray-500 dark:text-gray-300">
                                                            International University - (2004 - 2010)
                                                        </p>
                                                        <p class="text-gray-500 dark:text-gray-300">
                                                            There are many variations of passages of available,
                                                            but the majority alteration in some form. As a
                                                            highly skilled and successfull product development
                                                            and design specialist with more than 4 Years of My
                                                            experience.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="relative flex mt-5">
                                                    <div
                                                        class="after:content-[''] after:absolute after:hidden after:md:block after:border after:border-dashed after:h-24 after:left-5 after:top-10 after:border-violet-500/20">
                                                    </div>

                                                    <div class="w-10 h-10 text-xl leading-10 text-center rounded-full shrink-0 bg-violet-500/20 text-violet-500">
                                                        M
                                                    </div>
                                                    <div class="ml-4">
                                                        <h6 class="mb-1 text-gray-900 text-16 dark:text-gray-50">
                                                            MCA - Master of Computer Application
                                                        </h6>
                                                        <p class="mb-2 text-gray-500 dark:text-gray-300">
                                                            International University - (2010 - 2012)
                                                        </p>
                                                        <p class="text-gray-500 dark:text-gray-300">
                                                            There are many variations of passages of available,
                                                            but the majority alteration in some form. As a
                                                            highly skilled and successfull product development
                                                            and design specialist with more than 4 Years of My
                                                            experience.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="flex mt-5 re">
                                                    <div class="w-10 h-10 text-xl leading-10 text-center rounded-full shrink-0 bg-violet-500/20 text-violet-500">
                                                        D
                                                    </div>
                                                    <div class="ml-4">
                                                        <h6 class="mb-1 text-gray-900 text-16 dark:text-gray-50">
                                                            Design Communication Visual
                                                        </h6>
                                                        <p class="mb-2 text-gray-500 dark:text-gray-300">
                                                            International University - (2012-2015)
                                                        </p>
                                                        <p class="text-gray-500 dark:text-gray-300">
                                                            There are many variations of passages of available,
                                                            but the majority alteration in some form. As a
                                                            highly skilled and successfull product development
                                                            and design specialist with more than 4 Years of My
                                                            experience.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-6">
                                                <h6 class="text-lg font-bold text-gray-900 dark:text-gray-50">Experiences</h6>
                                                <div class="relative flex mt-5">
                                                    <div
                                                        class="after:content-[''] after:absolute after:hidden after:md:block after:border after:border-dashed after:h-24 after:left-5 after:top-10 after:border-violet-500/20">
                                                    </div>
                                                    <div class="w-10 h-10 text-xl leading-10 text-center rounded-full shrink-0 bg-violet-500/20 text-violet-500">
                                                        W
                                                    </div>
                                                    <div class="ml-4">
                                                        <h6 class="mb-1 text-gray-900 text-16 dark:text-gray-50">
                                                            Web Design & Development Team Leader
                                                        </h6>
                                                        <p class="mb-2 text-gray-500 dark:text-gray-300">
                                                            Creative Agency - (2013 - 2016)
                                                        </p>
                                                        <p class="text-gray-500 dark:text-gray-300">
                                                            There are many variations of passages of available,
                                                            but the majority alteration in some form. As a
                                                            highly skilled and successfull product development
                                                            and design specialist with more than 4 Years of My
                                                            experience.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="flex mt-5">
                                                    <div class="w-10 h-10 text-xl leading-10 text-center rounded-full shrink-0 bg-violet-500/20 text-violet-500">
                                                        P
                                                    </div>
                                                    <div class="ml-4">
                                                        <h6 class="mb-1 text-gray-900 text-16 dark:text-gray-50">
                                                            Project Manager
                                                        </h6>
                                                        <p class="mb-2 text-gray-500 dark:text-gray-300">
                                                            Jobcy Technology Pvt.Ltd - (Pressent)
                                                        </p>
                                                        <p class="text-gray-500 dark:text-gray-300">
                                                            There are many variations of passages of available,
                                                            but the majority alteration in some form. As a
                                                            highly skilled and successfull product development
                                                            and design specialist with more than 4 Years of My
                                                            experience.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-6">
                                                <h6 class="text-lg font-bold text-gray-900 dark:text-gray-50">Skills</h6>
                                                <div class="flex flex-wrap gap-3 mt-3">
                                                    <span class="mt-2 text-13 px-2 py-0.5 bg-violet-500/20 text-violet-500 rounded font-medium">Cloud Management</span>
                                                    <span class="mt-2 text-13 px-2 py-0.5 bg-violet-500/20 text-violet-500 rounded font-medium">Responsive Design</span>
                                                    <span class="mt-2 text-13 px-2 py-0.5 bg-violet-500/20 text-violet-500 rounded font-medium">Network Architecture</span>
                                                    <span class="mt-2 text-13 px-2 py-0.5 bg-violet-500/20 text-violet-500 rounded font-medium">PHP</span>
                                                    <span class="mt-2 text-13 px-2 py-0.5 bg-violet-500/20 text-violet-500 rounded font-medium">Bootstrap</span>
                                                    <span class="mt-2 text-13 px-2 py-0.5 bg-violet-500/20 text-violet-500 rounded font-medium">UI &amp; UX Designer</span>
                                                </div>
                                            </div>
                                            <div class="mt-6">
                                                <h6 class="text-lg font-bold text-gray-900 dark:text-gray-50">Spoken languages</h6>
                                                <div class="flex flex-wrap gap-3 mt-3">
                                                    <span class="mt-2 text-13 px-2 py-0.5 bg-red-500/20 text-red-500 rounded font-medium">English</span>
                                                    <span class="mt-2 text-13 px-2 py-0.5 bg-green-500/20 text-green-500 rounded font-medium">German</span>
                                                    <span class="mt-2 text-13 px-2 py-0.5 bg-sky-500/20 text-sky-500 rounded font-medium">French</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="hidden w-full tab-pane" id="settings-tab">
                                            <div class="pt-8 space-x-8">
                                                <form action="{{route('user.profile.update',$user->id)}}" method="POST" enctype='multipart/form-data'>
                                                    @csrf
                                                    @method('PUT')
                                                    <div>
                                                        <h5 class="mb-3 text-gray-900 fs-17 fw-semibold dark:text-gray-50">My Account</h5>
                                                        <div class="text-center">
                                                            <div class="relative mb-4">
                                                                <img src="{{asset('storage/'.$user->thumbnail)}}"
                                                                    class="w-40 h-40 p-1 mx-auto border-2 object-cover rounded-full border-gray-100/50 dark:border-neutral-600" id="profile-img"
                                                                    alt="">
                                                                <div
                                                                    class="absolute w-8 h-8 leading-8 text-center rounded-full shadow-md bottom-2 right-[42%] z-40 bg-gray-50 dark:bg-neutral-700 dark:text-white">
                                                                    <input id="profile-img-file-input" type="file" class="hidden"  name="thumbnail" onchange="previewImg()">
                                                                    <label for="profile-img-file-input" class="">
                                                                        <i class="uil uil-edit"></i>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mt-5">
                                                            <div class="grid grid-cols-12 gap-5">
                                                                <div class="col-span-12 lg:col-span-12">
                                                                    <div class="mb-3">
                                                                        <label for="firstName" class="text-sm text-gray-900 dark:text-gray-50"> Name</label>
                                                                        <input type="text" name="name"
                                                                            class="w-full mt-1 text-gray-500 border rounded border-gray-100/50 text-13 dark:bg-transparent dark:border-neutral-600"
                                                                            id="firstName" value="{{$user->name}}">
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <!--end row-->
                                                    </div>
                                                    <!--end account-->
                                                    <div class="mt-4">
                                                        <h5 class="mb-3 font-semibold text-gray-900 text-17 dark:text-gray-50">Profile</h5>
                                                        <div class="grid grid-cols-12 gap-5">
                                                            <div class="col-span-12">
                                                                <div class="mb-3">
                                                                    <label for="exampleFormControlTextarea1" class="form-label dark:text-gray-300">Introduce Yourself</label>
                                                                    <textarea name="bio" class="w-full mt-1 text-sm rounded border-gray-100/50 dark:bg-transparent dark:border-neutral-600 dark:text-gray-300" id="exampleFormControlTextarea1" rows="5">{{$user->bio}}</textarea>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-span-12 lg:col-span-6">
                                                                <div class="mb-3">
                                                                    <label for="phone" class="text-sm text-gray-900 dark:text-gray-50">phone</label>
                                                                    <input type="text" name="mobile"
                                                                        class="w-full mt-1 text-gray-500 border rounded border-gray-100/50 text-13 dark:bg-transparent dark:border-neutral-600"
                                                                        id="phone" value="{{$user->mobile}}">
                                                                </div>
                                                            </div>
                                                            <div class="col-span-12 lg:col-span-6">
                                                                <div class="mb-3">
                                                                    <label for="email" class="text-sm text-gray-900 dark:text-gray-50">Email</label>
                                                                    <input type="text" name="email"
                                                                        class="w-full mt-1 text-gray-500 border rounded border-gray-100/50 text-13 dark:bg-transparent dark:border-neutral-600"
                                                                        id="email" value="{{$user->email}}">
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <!--end row-->
                                                    </div>
                                                    <!--end profile-->


                                                    <!--end Change-password-->
                                                    <div class="mt-8 text-right">
                                                        <button href="javascript:void(0)" type="submit"
                                                            class="text-white btn group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 border-transparent focus:ring group-data-[theme-color=violet]:focus:ring-violet-500/20 group-data-[theme-color=sky]:focus:ring-sky-500/20 group-data-[theme-color=red]:focus:ring-red-500/20 group-data-[theme-color=green]:focus:ring-green-500/20 group-data-[theme-color=pink]:focus:ring-pink-500/20 group-data-[theme-color=blue]:focus:ring-blue-500/20">Update</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="hidden w-full tab-pane" id="cv-tab">
                                            <div class="pt-8 space-x-8">
                                                <form action="{{route('cv.store')}}" method="POST" enctype='multipart/form-data'>
                                                    @csrf

                                                    <div>
                                                        <h5 class="mb-3 text-gray-900 fs-17 fw-semibold dark:text-gray-50">Account</h5>

                                                        <div class="mt-5">
                                                            <div class="grid grid-cols-12 gap-5">
                                                                <div class="col-span-12 lg:col-span-12">

                                                                    <div class="col-span-12 lg:col-span-4 bg-white dark:bg-gray-800 p-4 rounded-lg">
                                                                        <input class="dropify" type="file" id="myDropify" name="file">
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <!--end row-->
                                                    </div>
                                                    <!--end account-->

                                                    <!--end Change-password-->
                                                    <div class="mt-8 text-right">
                                                        <button href="javascript:void(0)" type="submit"
                                                            class="text-white btn group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 border-transparent focus:ring group-data-[theme-color=violet]:focus:ring-violet-500/20 group-data-[theme-color=sky]:focus:ring-sky-500/20 group-data-[theme-color=red]:focus:ring-red-500/20 group-data-[theme-color=green]:focus:ring-green-500/20 group-data-[theme-color=pink]:focus:ring-pink-500/20 group-data-[theme-color=blue]:focus:ring-blue-500/20">Update</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End grid -->
            </div>
        </div>
    </section>
@endsection
