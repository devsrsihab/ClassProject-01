@extends('admin.layouts.app')
@section('breadcrumb','Course')
@section('title','Course')
@section('content')
<div class="container">
    {{-- course archive header --}}
    <div class="row align-items-center">
        <div class="success_message"></div>
        <div class="col-md-6">
            <h4>Create Course</h4>
        </div>
        <div class="col-md-6 text-right ">
            <a href="{{ url('admin/ArchCourseLesson/Create') }}" class="btn btn-primary"  > Create a Lesson</a>
        </div>
    </div>{{-- /course archive header --}}

    {{-- course_table_list --}}
    <div class="course_table_list">
					<!-- Basic datatable -->
					<div class="panel panel-flat">


						<table class="table datatable-basic">
							<thead>
								<tr>
									<th>SL</th>
									<th>Lession Name</th>
									<th>Courses Name</th>
									<th>Overview</th>
									<th>Recource</th>
									<th>Status</th>
									<th class="text-center">Actions</th>
								</tr>
							</thead>
							<tbody>
							 @if (!@empty($ArvhiveCoursesLessions))
							 @foreach ($ArvhiveCoursesLessions as $key => $ArvhiveCoursesLession )
							 <tr>
								<td>{{ ++$key }}</td>
								<td>{{ $ArvhiveCoursesLession->name }}</td>
								<td>{{ $ArvhiveCoursesLession->arch_name }}</td>
								<td>{{ $ArvhiveCoursesLession->overview }}</td>
								<td>{{ $ArvhiveCoursesLession->resource }}</td>
								<td>@if ($ArvhiveCoursesLession->valid == 1)
									<span class="label label-success">Active</span>
								@else
								<span class="label label-danger">InActive</span>
								@endif</td>								<td>
									<ul class="icons-list text-center">
									<LI class="mr-5"><a href="{{ url('admin/ArchCourseLesson/Edit/'.$ArvhiveCoursesLession->id) }}" class=" icon-pencil3 "></a>
									</LI>
									<LI class="mr-5"><a class="icon-trash courseArchiveDelete"> <input type="hidden" id="delete_Archcourse_id" value="{{ $ArvhiveCoursesLession->id }}"> </a>
									</LI>
									</ul>
								</td>
							</tr>
							 @endforeach
							 	
							 @endif



							</tbody>
						</table>
					</div>	<!-- /basic datatable -->      
    </div>   {{-- /course_table_list --}}
 
</div>
@endsection

@section('script')
<script>
	$(document).ready(function () {


		$('.courseArchiveDelete').click(function (e) {
			e.preventDefault();
			let delete_ArchcourseLessone_id = $('#delete_Archcourse_id').val();
			Swal.fire({
			title: 'Are you sure?',
			text: "You won't be able to revert this!",
			icon: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Yes, delete it!'
			}).then((result) => {

			if (result.isConfirmed) {
				$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});
		    	$.ajax({
					type: "GET",
					url: "ArchCourseLesson/Delete/"+delete_ArchcourseLessone_id,
					success: function (response) {
						location.reload()
					}
				});
				Swal.fire(
				'Deleted!',
				'Your file has been deleted.',
				'success'
				)
			}
			})
		});
	});
</script>
@endsection
