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
            <a href="{{ url('admin/ArchCourseLessonAssignment/create') }}" class="btn btn-primary"  > Create a Lesson</a>
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
									<th>Course Name</th>
									<th>Title</th>
									<th>Description</th>
									<th>Status</th>
									<th class="text-center">Actions</th>
								</tr>
							</thead>
							<tbody>
							 @if (!@empty($ArchCourseLessonAssignments))
							 @foreach ($ArchCourseLessonAssignments as $key => $ArchCourseLessonAssignment )
							 <tr>
								<td>{{ ++$key }}</td>
								<td>{{ $ArchCourseLessonAssignment->name }}</td>
								<td>{{ $ArchCourseLessonAssignment->arch_name }}</td>
								<td>{{ $ArchCourseLessonAssignment->title }}</td>
								<td>{{ $ArchCourseLessonAssignment->details }}</td>
								<td>@if ($ArchCourseLessonAssignment->valid == 1)
									<span class="label label-success">Active</span>
								@else
								<span class="label label-danger">InActive</span>
								@endif</td>								<td>
									<ul class="icons-list text-center">
									<LI class="mr-5"><a href="{{ url('admin/ArchCourseLessonAssignment/'.$ArchCourseLessonAssignment->id.'/edit') }}" class="icon-pencil3"></a>
									</LI>
									<LI class="mr-5">
									<form action="{{ url('admin/ArchCourseLessonAssignment/'.$ArchCourseLessonAssignment->id) }}" method="POST">
										@csrf
										@method('DELETE')
										<button type="submit"><i  class="icon-trash "> </i></button>
										</form>
									</LI>									
									{{-- <LI class="mr-5"><a class="icon-trash courseArchLessonAssignmentDelete"> 
										<input type="hidden" id="delete_Archcourse_lesson_assignment_id" value="{{ $ArchCourseLessonAssignment->id }}"> 
									</a>
									</LI> --}}
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


		$('.courseArchLessonAssignmentDelete').click(function (e) {
			e.preventDefault();
			let delete_ArchcourseLessonAssignment_id = $('#delete_Archcourse_lesson_assignment_id').val();
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
					url: "ArchCourseLessonAssignment/"+delete_ArchcourseLessonAssignment_id,
					success: function (response) {
						location.reload()
					}
				});
				Swal.fire(
				'Deleted!',
				'Your A.C.L Assignment has been deleted.',
				'success'
				)
			}
			})
		});
	});
</script>
@endsection
