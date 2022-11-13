@extends('layouts.app')
@section('breadcrumb','Course')
@section('title','Course')
@section('content')
<div class="container">
    <div class="row align-items-center">
        <div class="col-md-6">
            <h4>Courses</h4>
        </div>
        <div class="col-md-6 text-center ">
            <a data-toggle="modal" data-target="#course_create" ><button class="btn btn-success">Create a Course</button></a>
        </div>
    </div>
</div>

{{-- create modal --}}
@include('admin.course.course_modals.create')
@endsection