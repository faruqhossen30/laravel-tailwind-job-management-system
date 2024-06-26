@extends('admin.layouts.app')
@section('breadcrumb')
    <x-breadcrumb pageone="Education" class="py-2" pageoneRoute="{{ route('education.index') }}" pagetwo="Create" />
@endsection
@section('content')
    <div class="flex flex-col gap-6 ">
        <div class="card">
            <div class="card-header">
                <div class="p-6">
                    <form action="{{ route('education.update',$education->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="grid grid-cols-12 gap-5 ">
                            <div class="col-span-12 lg:col-span-12 bg-white dark:bg-gray-800 p-4 rounded-lg">
                                <x-form.input label="Name" name="name" value="{{$education->name}}" />
                            </div>
                        </div>
                        <x-form.submit-button  title="Update"/>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
