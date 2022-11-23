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
            <a href="{{ url('admin/Courses/create') }}" class="btn btn-primary"  > Create a Course</a>
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
                                @foreach ($Courses as  $Course)
                                <tr>
									<input type="hidden" value="{{ $Course->id }}" class="courseArchive_Delete_id">
                                    <td>{{ $Course->course_name }}</td>
                                    <td>{{ $Course->course_des }}</td>
                                    <td>{{ $Course->price }}</td>
									<td><span class="label label-success">Active</span></td>
									<td class="text-center">
									<ul class="icons-list">
									<LI class="mr-5"><a href="{{ route('Courses.edit',$Course->id) }}" class=" icon-pencil3 "></a></LI>
					
									<LI class="mr-5 " >
								  <form action="{{ url('admin/Courses/'.$Course->id) }}"
										data-type="" method="POST" class="data-delete" delete-link="{{ route('Courses.destroy', $Course->id) }}">
 
										 @method('DELETE')
										 @csrf
										 <button class=""  type="submit"><i class=" icon-trash blogDelete"></i></button>
									 </form>
									</LI>
									</ul>
									</td>
                                </tr>       
							                       
                                @endforeach
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