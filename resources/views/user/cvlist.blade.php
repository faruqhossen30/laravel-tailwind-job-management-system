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
                                            <img src="{{ asset('storage/' . $user->thumbnail) }}" alt=""
                                                class="w-20 h-20 object-cover p-1 mx-auto border-2 rounded-full border-gray-200/20">
                                            <h6 class="mt-4 mb-0 text-lg text-gray-900 dark:text-gray-50">{{ $user->name }}</h6>
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
                                                            {{ $user->email }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="pb-3">
                                                <div class="flex">
                                                    <label class="w-32 font-medium text-gray-900 dark:text-gray-50">Phone Number</label>
                                                    <div>
                                                        <p class="mb-0 text-gray-500 dark:text-gray-300">{{ $user->mobile }}</p>
                                                    </div>
                                                </div>
                                            </li>

                                        </ul>
                                    </div>
                                </div>


                                <div class="pt-3">
                                    <div class="w-full text-gray-900 bg-white border border-gray-200 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                        <a href="{{ route('cv.create') }}"
                                            class="relative inline-flex items-center w-full px-4 py-2 text-sm font-medium border-b border-gray-200 rounded-t-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:border-gray-600 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:ring-gray-500 dark:focus:text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3 me-2.5">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5m-13.5-9L12 3m0 0 4.5 4.5M12 3v13.5" />
                                            </svg>

                                            Upload CV
                                        </a>
                                        <button type="button"
                                            class="relative inline-flex items-center w-full px-4 py-2 text-sm font-medium border-b border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:border-gray-600 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:ring-gray-500 dark:focus:text-white">
                                            <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M7.75 4H19M7.75 4a2.25 2.25 0 0 1-4.5 0m4.5 0a2.25 2.25 0 0 0-4.5 0M1 4h2.25m13.5 6H19m-2.25 0a2.25 2.25 0 0 1-4.5 0m4.5 0a2.25 2.25 0 0 0-4.5 0M1 10h11.25m-4.5 6H19M7.75 16a2.25 2.25 0 0 1-4.5 0m4.5 0a2.25 2.25 0 0 0-4.5 0M1 16h2.25" />
                                            </svg>
                                            Cv list
                                        </button>
                                        <button type="button"
                                            class="relative inline-flex items-center w-full px-4 py-2 text-sm font-medium border-b border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:border-gray-600 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:ring-gray-500 dark:focus:text-white">
                                            <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 18" fill="currentColor">
                                                <path
                                                    d="M18 4H16V9C16 10.0609 15.5786 11.0783 14.8284 11.8284C14.0783 12.5786 13.0609 13 12 13H9L6.846 14.615C7.17993 14.8628 7.58418 14.9977 8 15H11.667L15.4 17.8C15.5731 17.9298 15.7836 18 16 18C16.2652 18 16.5196 17.8946 16.7071 17.7071C16.8946 17.5196 17 17.2652 17 17V15H18C18.5304 15 19.0391 14.7893 19.4142 14.4142C19.7893 14.0391 20 13.5304 20 13V6C20 5.46957 19.7893 4.96086 19.4142 4.58579C19.0391 4.21071 18.5304 4 18 4Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M12 0H2C1.46957 0 0.960859 0.210714 0.585786 0.585786C0.210714 0.960859 0 1.46957 0 2V9C0 9.53043 0.210714 10.0391 0.585786 10.4142C0.960859 10.7893 1.46957 11 2 11H3V13C3 13.1857 3.05171 13.3678 3.14935 13.5257C3.24698 13.6837 3.38668 13.8114 3.55279 13.8944C3.71889 13.9775 3.90484 14.0126 4.08981 13.996C4.27477 13.9793 4.45143 13.9114 4.6 13.8L8.333 11H12C12.5304 11 13.0391 10.7893 13.4142 10.4142C13.7893 10.0391 14 9.53043 14 9V2C14 1.46957 13.7893 0.960859 13.4142 0.585786C13.0391 0.210714 12.5304 0 12 0Z"
                                                    fill="currentColor" />
                                            </svg>
                                            Messages
                                        </button>
                                        <button type="button"
                                            class="relative inline-flex items-center w-full px-4 py-2 text-sm font-medium rounded-b-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:border-gray-600 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:ring-gray-500 dark:focus:text-white">
                                            <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="M14.707 7.793a1 1 0 0 0-1.414 0L11 10.086V1.5a1 1 0 0 0-2 0v8.586L6.707 7.793a1 1 0 1 0-1.414 1.414l4 4a1 1 0 0 0 1.416 0l4-4a1 1 0 0 0-.002-1.414Z" />
                                                <path
                                                    d="M18 12h-2.55l-2.975 2.975a3.5 3.5 0 0 1-4.95 0L4.55 12H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-4a2 2 0 0 0-2-2Zm-3 5a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z" />
                                            </svg>
                                            Download
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-12 lg:col-span-8">
                                <div class="border rounded border-gray-100/50 dark:border-neutral-600 nav-tabs bottom-border-tab">
                                    <div class="p-6 tab-content">
                                        <div class=" w-full tab-pane" id="cv-tab">
                                            <div class="grid grid-cols-12 gap-y-5 md:gap-8">
                                                <div class="col-span-12">
                                                    <div class="mt-10 rounded bg-gray-50 dark:bg-neutral-700">
                                                        <div class="p-6">
                                                            <ul class="space-y-4">
                                                                @foreach ($user->cvs as $key => $item)
                                                                    <li class="px-4 py-2 bg-white rounded dark:bg-neutral-600">
                                                                        {{ $key + 1 }} .
                                                                        <a href="{{asset('storage/'.$item->file)}}" target="_blank"  class="text-gray-900 dark:text-white">{{ $item->title }}<span download=""
                                                                                class="px-2 py-1 rounded bg-sky-500/20 text-11 text-sky-500 ltr:float-right rtl:float-left"><i
                                                                                    class="uil uil-import"></i></span></a>
                                                                    </li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    </div>
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
