@if ($paginator->hasPages())
    <nav>
        <ul class="flex justify-center gap-2 mt-14">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                {{-- <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <span aria-hidden="true">&lsaquo;</span>
                </li> --}}
                <li class="w-12 disabled h-12 text-center border rounded-full cursor-default border-gray-100/50 dark:border-zinc-600 dark:border-gray-100/20" aria-disabled="true"
                    aria-label="@lang('pagination.previous')">
                    <span class="cursor-auto">
                        <i class="mdi mdi-chevron-double-left text-16 leading-[2.8] dark:text-gray-50"></i>
                    </span>
                </li>
            @else
                {{-- <li>
                    <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
                </li> --}}
                <li class="w-12 h-12 text-center border rounded-full cursor-default border-gray-100/50 dark:border-zinc-600 dark:border-gray-100/20">
                    <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')" class="cursor-auto">
                        <i class="mdi mdi-chevron-double-left text-16 leading-[2.8] dark:text-gray-50"></i>
                    </a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            {{-- <li class="active" aria-current="page"><span>{{ $page }}</span></li> --}}
                            <li
                                class="w-12 h-12 text-center text-white border border-transparent rounded-full cursor-pointer group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500">
                                <a class="text-16 leading-[2.8]" href="{{ $url }}">{{ $page }}</a>
                            </li>
                        @else
                            <li
                                class="w-12 h-12 text-center text-gray-900 transition-all duration-300 border rounded-full cursor-pointer border-gray-100/50 dark:border-zinc-600 hover:bg-gray-100/30 focus:bg-gray-100/30 dark:border-gray-100/20 dark:text-gray-50 dark:hover:bg-gray-500/20">
                                <a class="text-16 leading-[2.8]" href="{{ $url }}">{{ $page }}</a>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                {{-- <li>
                    <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
                </li> --}}
                <li
                    class="w-12 h-12 text-center text-gray-900 transition-all duration-300 border rounded-full cursor-pointer border-gray-100/50 dark:border-zinc-600 hover:bg-gray-100/30 focus:bg-gray-100/30 dark:border-gray-100/20 dark:text-gray-50 dark:hover:bg-gray-500/20">
                    <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">
                        <i class="mdi mdi-chevron-double-right text-16 leading-[2.8]"></i>
                    </a>
                </li>
            @else
                {{-- <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span aria-hidden="true">&rsaquo;</span>
                </li> --}}
                <li  aria-disabled="true" aria-label="@lang('pagination.next')"
                    class="w-12 h-12 text-center text-gray-900 transition-all duration-300 border rounded-full cursor-pointer border-gray-100/50 dark:border-zinc-600 hover:bg-gray-100/30 focus:bg-gray-100/30 dark:border-gray-100/20 dark:text-gray-50 dark:hover:bg-gray-500/20">
                    <span aria-hidden="true">
                        <i class="mdi mdi-chevron-double-right text-16 leading-[2.8]"></i>
                    </span>
                </li>
            @endif
        </ul>
    </nav>
@endif
