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
									<th>Course Name</th>
									<th>Course Description</th>
									<th>Price</th>
									<th>Status</th>
									<th class="text-center">Actions</th>
								</tr>
							</thead>
							<tbody>
							 @if (!empty($ArchCourseLessones))
							 @foreach ($ArchCourseLessones as $key $$ArchCourseLessone )
							 <tr>
								<td{{ >++$key }}</td>
								<td>$ArchCourseLessone</td>
								<td>ss</td>
								<td>ss</td>
								<td>
									<ul class="icons-list text-center">
									<LI class="mr-5"><a href="{{ url('CourseArchives/edit') }}" class=" icon-pencil3 "></a>
									</LI>
									<LI class="mr-5"><a href="{{ url('CourseArchives/destroy') }}" class="icon-trash"></a>
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

		$('.courseArchive').click(function (e) {
			e.preventDefault();
			let destroy_id = $(this).closest('tr').find('.courseArchive_Delete_id').val();


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