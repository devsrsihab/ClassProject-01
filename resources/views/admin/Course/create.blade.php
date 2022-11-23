@extends('admin.layouts.app')
@section('breadcrumb','Course')
@section('title','Course')
@section('content')
<div class="container">
    {{-- course archive header --}}
    <div class="row align-items-center">
        <div class="col-md-8 ">  
            <div class="row">
                <div class="col-md-6">
                    <h4 >Create Course</h4>
                </div>
                <div class="col-md-6 text-right">
                    <a href="{{ url('admin/CourseArchives') }}" class="btn btn-primary"  >Back To Course List</a>
                </div>
            </div>          

        </div>
    </div>{{-- /course archive header --}}

    {{-- create_form --}}
    <div class="row">
        <div class="col-md-8">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            <form class="form-horizontal" action="{{ route('Courses.store') }}" method="POST">
                @csrf
                <fieldset class="content-group">
                    <legend class="text-bold">Course Archive Create</legend>

                    <div class="form-group">
                        <label class="control-label col-lg-2" for="course_name">Course Name</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="course_name" name="course_name" value="{{ old('course_name') }}">
                            {{-- @error('course_name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror --}}
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-2" for="course_des" >Course Description</label>
                        <div class="col-lg-10">
                            <textarea rows="5" cols="5" class="form-control" id="course_des" placeholder="Default textarea" name="course_des">{{ old('course_des') }}</textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-2" for="price" >Price</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="price" name="price" value="{{ old('price') }}">
                        </div>
                    </div>

                </fieldset>

                <div class="text-right">
                    <button type="submit" class="btn btn-primary">Create Course <i class="icon-arrow-right14 position-right"></i></button>
                </div>
            </form>
        </div>
    </div>
    {{-- /create_form --}}


    
</div>

@endsection