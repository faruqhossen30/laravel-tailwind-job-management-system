@extends('admin.layouts.app')
@section('breadcrumb')
    <x-breadcrumb pageone="Category" pageoneRoute="{{ route('category.index') }}" pagetwo="Edit" />
@endsection
@section('content')
    <div class="flex flex-col gap-6">
        <div class="card">
            <div class="card-header">
                <div class="p-6">

                    <form action="{{ route('category.update', $category->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="grid grid-cols-12 gap-5 ">
                            <div class="col-span-12 lg:col-span-8 bg-white dark:bg-gray-800 p-4 rounded-lg">
                                <x-form.input label="Category Name" name="name" value="{{ $category->name }}" />

                                <div class="py-2">
                                    <select id="type" name="type"
                                        class=" py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                                        <option>Select Category Type</option>
                                        <option value="circular"@if ($category->type == 'circular' ) selected @endif>circular</option>
                                        <option value="blog" @if ($category->type == 'blog') selected @endif>blog</option>
                                    </select>
                                </div>

                            </div>
                            <div class="col-span-12 lg:col-span-4 bg-white dark:bg-gray-800 p-4 rounded-lg">
                                <div class="col-span-3 pt-1 space-y-2">
                                    <label for="thumbnail" class="text-gray-500 dark:text-gray-500 text-sm font-medium">Image</label>
                                    <input name="thumbnail" class="dropify" type="file" id="myDropify" data-default-file="{{ asset('storage/' . $category->thumbnail) }}">
                                </div>
                            </div>
                        </div>
                        {{-- @include('admin.inc.modal.photo-gallery') --}}
                        <x-form.submit-button title="Update" />
                    </form>
                </div>

            </div>
        @endsection
        @push('styles')
            <link rel="stylesheet" href="{{ asset('css/dropify.min.css') }}">
            <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
            <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
            <style>
                .dropify-message p {
                    font-size: 24px
                }
            </style>
        @endpush

        @push('scripts')
            <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
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

                });
            </script>
        @endpush
