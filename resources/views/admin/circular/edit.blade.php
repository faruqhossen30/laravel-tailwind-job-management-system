@extends('admin.layouts.app')
@section('breadcrumb')
    <x-breadcrumb pageone="Circular" pageoneRoute="{{ route('circular.index') }}" pagetwo="Create" />
@endsection
@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <p><strong>Opps Something went wrong</strong></p>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="dark:text-slate-400 p-2">
        <div class="flex flex-col">
            <div class="-m-1.5 overflow-x-auto">
                <div class="p-1.5 min-w-full inline-block align-middle">
                    <form action="{{ route('circular.update', $circular->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="grid grid-cols-12 gap-5 ">
                            <div class="col-span-12 lg:col-span-8 bg-white dark:bg-gray-800 p-4 rounded-lg">
                                <x-form.input label="Title" name="title" value="{{ $circular->title }}" />

                                <div class="description py-2">
                                    <textarea name="description" class="ckeditor" id="editor" cols="30" rows="10">{!! $circular->description !!}</textarea>
                                    @error('description')
                                        <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="">
                                    <label for="category_ids" class="block text-sm font-medium mb-2 dark:text-white">Select
                                        Categories</label>

                                    <select id="category_id" name="category_id"
                                        class=" py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-200 dark:focus:ring-gray-600"
                                       >
                                        <option>Select Categories</option>
                                        @foreach ($categories as $cat)
                                            <option value="{{ $cat->id }}" @if ($cat->id == $circular->category_id) selected @endif>{{ $cat->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="grid grid-cols-12 py-4 space-x-3">
                                    <div class="col-span-6 px-4 ">
                                        <div>
                                            <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Start From</label>
                                            <input type="date" id="first_name" name="start_date" value="{{ $circular->start_date }}"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="John" required />
                                        </div>
                                        <div>
                                            <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Minimum salary</label>
                                            <input type="number" id="last_name" name="min_salary" value="{{ $circular->min_salary }}"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="Doe" required />
                                        </div>
                                    </div>
                                    <div class="col-span-6 px-4">
                                        <div>
                                            <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">End From</label>
                                            <input type="date" id="first_name" name="end_date" value="{{ $circular->end_date }}"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="John" required />
                                        </div>
                                        <div>
                                            <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Maximum salary</label>
                                            <input type="number" id="last_name" name="max_salary" value="{{ $circular->max_salary }}"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="Doe" required />
                                        </div>
                                    </div>
                                </div>
                                <div class=" p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                    <x-divider title="Organization Information" />

                                    <div class="">
                                        <label for="company" class="block text-sm font-medium mb-2 dark:text-white">
                                            Company</label>
                                        <select id="company" name="company_id"
                                            class=" py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-200 dark:focus:ring-gray-600"
                                          >
                                            <option value="Company">Select Company</option>

                                            @foreach ($company as $com )

                                            <option value="{{$com->id}}"@if ($com->id == $circular->company_id) selected @endif>{{$com->name}}</option>
                                            @endforeach


                                        </select>
                                    </div>

                                    <div>
                                        <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Organization Name</label>
                                        <input type="text" id="last_name" name="organization_name" value="{{ $circular->organization_name }}"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            placeholder="name" required />
                                    </div>
                                    <div>
                                        <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Organization Website</label>
                                        <input type="text" id="last_name" name="organization_website" value="{{ $circular->organization_website }}"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            placeholder="Website" required />
                                    </div>
                                    <div>
                                        <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Apply Link</label>
                                        <input type="text" id="last_name" name="apply_link" value="{{ $circular->apply_link }}"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            placeholder="link" required />
                                    </div>
                                    <div>
                                        <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Vacancy</label>
                                        <input type="number" id="last_name" name="vacancy" value="{{ $circular->vacancy }}"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            placeholder="vacancy" required />
                                    </div>
                                </div>




                            </div>
                            <div class="col-span-12 lg:col-span-4 bg-white dark:bg-gray-800 p-4 rounded-lg">
                                <input class="dropify" type="file" id="myDropify" name="thumbnail"
                                    @if ($circular->thumbnail) data-default-file="{{ asset('storage/' . $circular->thumbnail) }}" @endif>

                                <div class="py-3">
                                    <label for="Education" class="block text-sm font-medium mb-2 dark:text-white">
                                        EDUCATION</label>
                                    <select name="education[]" class="js-example-basic-multiple form-select" multiple="multiple" data-width="100%">
                                        @foreach ($educations as $education)
                                            <option value="{{ $education->id }}" @if (!empty($circular->educations) && in_array($education->id, $circular->educations->pluck('education_id')->toArray())) selected @endif>{{ $education->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="py-3">
                                    <label for="Skills" class="block text-sm font-medium mb-2 dark:text-white">
                                        Skills</label>
                                    <select name="skill[]" class="js-example-basic-multiple form-select" multiple="multiple" data-width="100%">
                                        @foreach ($skills as $skill)
                                            <option value="{{ $skill->id }}" @if (!empty($circular->skills) && in_array($skill->id, $circular->skills->pluck('skill_id')->toArray())) selected @endif>{{ $skill->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="py-3">
                                    <label for="JOB INDUSTRY" class="block text-sm font-medium mb-2 dark:text-white">
                                        JOB INDUSTRY</label>
                                    <select name="job_industry[]" class="js-example-basic-multiple form-select" multiple="multiple" data-width="100%">
                                        @foreach ($jobindustries as $jobindustry)
                                            <option value="{{ $jobindustry->id }}" @if (!empty($circular->jobindustries) && in_array($jobindustry->id, $circular->jobindustries->pluck('job_industry_id')->toArray())) selected @endif>{{ $jobindustry->name }}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <div class="py-3">
                                    <label for="JOB INDUSTRY" class="block text-sm font-medium mb-2 dark:text-white">
                                        CAREER LABEL</label>
                                    <select name="career_label[]" class="js-example-basic-multiple form-select" multiple="multiple" data-width="100%">
                                        @foreach ($careerlabels as $careerlabel)
                                            <option value="{{ $careerlabel->id }}" @if (!empty($circular->careerlabels) && in_array($careerlabel->id, $circular->careerlabels->pluck('career_label_id')->toArray())) selected @endif>{{ $careerlabel->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="py-3">
                                    <label for="JOB INDUSTRY" class="block text-sm font-medium mb-2 dark:text-white">
                                        SALARY PREIOD</label>
                                    <select name="salary_period[]" class="js-example-basic-multiple form-select" multiple="multiple" data-width="100%">
                                        @foreach ($salaryperiods as $salarypreiod)
                                            <option value="{{ $salarypreiod->id }}" @if (!empty($circular->salaryperiods) && in_array($salarypreiod->id, $circular->salaryperiods->pluck('salary_period_id')->toArray())) selected @endif>{{ $salarypreiod->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="py-3">
                                    <label for="JOB INDUSTRY" class="block text-sm font-medium mb-2 dark:text-white">
                                        JOB TYPE</label>
                                    <select name="job_type[]" class="js-example-basic-multiple form-select" multiple="multiple" data-width="100%">
                                        @foreach ($jobtypes as $jobtype)
                                            <option value="{{ $jobtype->id }}" @if (!empty($circular->jobtypes) && in_array($jobtype->id, $circular->jobtypes->pluck('job_type_id')->toArray())) selected @endif>{{ $jobtype->name }}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>


                        </div>

                        <x-form.submit-button title="Update" />
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('styles')
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/dropify.min.css') }}">
    <style>
        .dropify-message p {
            font-size: 24px
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpush

@push('scripts')
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="{{ asset('js/dropify.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.dropify').dropify({
                messages: {
                    'default': 'Drag and drop a file here or click',
                    'replace': 'Drag and drop or click to replace',
                    'remove': 'Remove',
                    'error': 'Ooops, something wrong happended.'
                }
            });
            $('.js-example-basic-multiple').select2();
        });
    </script>
@endpush
