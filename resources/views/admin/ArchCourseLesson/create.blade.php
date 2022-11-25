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
                    <a href="{{ url('admin/ArchCourseLesson') }}" class="btn btn-primary"  >Back To Lessone</a>
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
            <form class="form-horizontal" action="{{ url('admin/ArchCourseLesson/Store') }}" method="POST">
                @csrf
                <fieldset class="content-group">
                    <legend class="text-bold">Course Archive Create</legend>

                    <div class="form-group">
                        <label class="control-label col-lg-2" for="course_name">Archive Lesson Name</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label col-lg-2" for="course_name">Archive Course Assign Name</label>
                        <div class="col-lg-10">
                            <select name="archive_course_id" id="archive_course_id" class="form-control">
                                <option value="">Select Archive Coures</option>
                                @foreach ($ArchCourses as $ArchCourse)
                                    <option value="{{ $ArchCourse->id }}">{{ $ArchCourse->arch_name }}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-2" for="resource">Archive Lesson Resource</label>
                        <div class="col-lg-10">
                            <textarea rows="5" cols="5" id="resource" name="resource" class="form-control"
                                placeholder="Archive Courses Resource"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-2" for="overview">Archive Lessone Overview</label>
                        <div class="col-lg-10">
                            <textarea rows="5" cols="5" id="overview" name="overview" class="form-control" placeholder="Archive Courses Overview"></textarea>
                        </div>
                    </div>

                    <div class="form-group mt-10">
                        <label class="control-label col-lg-2" for="valid">Status</label>
                        <div class="col-lg-10">
                            <select name="valid" id="valid" class="form-control">
                                <option value="">Select Status</option>
                                <option value="1">Active</option>
                                <option value="0">in Active</option>

                            </select>
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