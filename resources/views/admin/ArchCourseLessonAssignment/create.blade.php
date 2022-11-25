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
                    <a href="{{ url('admin/ArchCourseLessonAssignment') }}" class="btn btn-primary"  >Back To Lessone</a>
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
            <form class="form-horizontal" action="{{ url('/admin/ArchCourseLessonAssignment/') }}" method="POST">

                @csrf
                <fieldset class="content-group">
                    <legend class="text-bold">Title</legend>

                    <div class="form-group">
                        <label class="control-label col-lg-2" for="course_name">Archive L.A Title</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-2" for="details">Details</label>
                        <div class="col-lg-10">
                            <textarea rows="5" cols="5" id="details" name="details" class="form-control"
                                placeholder="Archive Courses details"></textarea>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label col-lg-2" for="course_name">Archive Course Name</label>
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
                        <label class="control-label col-lg-2" for="archive_course_lession_id">Archive Course Lesson </label>
                        <div class="col-lg-10">
                            <select name="archive_course_lession_id" id="archive_course_lession_id" class="form-control">
                                <option value="">Select Archive Coures</option>
                                @foreach ($ArchCourseLessons as $ArchCourseLesson)
                                    <option value="{{ $ArchCourseLesson->id }}">{{ $ArchCourseLesson->name }}</option>
                                @endforeach

                            </select>
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
                    <button type="submit" class="btn btn-primary">Create Archive L.A <i class="icon-arrow-right14 position-right"></i></button>
                </div>
            </form>
        </div>
    </div>
    {{-- /create_form --}}


    
</div>

@endsection