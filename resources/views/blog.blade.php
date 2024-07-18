@php
    use App\Models\Blog;
    $blogs = Blog::take(3)->latest()->get();
@endphp

<section class="py-20 bg-gray-50 dark:bg-neutral-700">
    <div class="container mx-auto">
        <div class="grid grid-cols-1 gap-5">
            <div class="mb-5 text-center">
                <h3 class="mb-3 text-3xl text-gray-900 dark:text-gray-50">Quick Career Tips</h3>
                <p class="mb-5 text-gray-500 whitespace-pre-line dark:text-gray-300">Post a job to tell us about your project. We'll quickly match you with the right
                    <br> freelancers.
                </p>
            </div>
        </div>
        <div class="grid grid-cols-12 gap-5">
            @foreach ($blogs as $blog)
            <div class="col-span-12 md:col-span-6 lg:col-span-4">
                    <div class="p-2 mt-3 transition-all duration-500 bg-white rounded shadow-lg shadow-gray-100/50 card dark:bg-neutral-800 dark:shadow-neutral-600/20 group/blog">
                        <div class="relative overflow-hidden">
                            <img src="{{ asset('storage/'.$blog->thumbnail) }}" alt="" class="rounded">
                            <div class="absolute inset-0 hidden transition-all duration-500 rounded-md bg-black/30 group-hover/blog:block"></div>
                            <div class="hidden text-white transition-all duration-500 top-2 left-2 group-hover/blog:block author group-hover/blog:absolute">
                                <p class="mb-0 "><i class="mdi mdi-account text-light"></i> <a href="javascript:void(0)" class="text-light user">Dirio Walls</a>
                                </p>
                                <p class="mb-0 text-light date"><i class="mdi mdi-calendar-check"></i> {{ Carbon\Carbon::parse($blog->created_at)->format('d M Y') }}</p>
                            </div>
                            <div class="hidden bottom-2 right-2 group-hover/blog:block author group-hover/blog:absolute">
                                <ul class="mb-0 list-unstyled">
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="text-white"><i class="mdi mdi-heart-outline me-1"></i> 33</a>
                                    </li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="text-white"><i class="mdi mdi-comment-outline me-1"></i> 08</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="p-5">
                            <a href="{{route('blog.page')}}" class="primary-link">
                                <h5 class="mb-1 text-gray-900 fs-17 dark:text-gray-50">{{$blog->title}}</h5>
                            </a>
                            <p class="mb-3 text-gray-500 dark:text-gray-300"> <?php echo substr($blog->description, 0, 100); ?></p>
                            <a href="{{route('blog.page')}}"
                                class="font-medium group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">Read
                                more <i class="align-middle mdi mdi-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
        </div>
    </div>
</section>
