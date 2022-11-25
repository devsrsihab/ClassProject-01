<?php

namespace App\Http\Controllers\admin;

use App\Models\ArchCourse;
use Illuminate\Http\Request;
use App\Models\ArchCourseLesson;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ArchCourseLessonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ArvhiveCoursesLessions['ArvhiveCoursesLessions'] = ArchCourseLesson::join('arch_courses', 'arch_courses.id', '=', 'arch_course_lessons.archive_course_id')->select('arch_course_lessons.*', 'arch_courses.arch_name')->latest()->get();
        
        return view('admin.ArchCourseLesson.index',$ArvhiveCoursesLessions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ArchCourses['ArchCourses'] = ArchCourse::all();
        return view('admin.ArchCourseLesson.create',$ArchCourses);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'              => 'required|unique:arch_course_lessons',
            'archive_course_id' => 'required',
            'resource'          => 'required',
            'overview'          => 'required',
           ]);
           ArchCourseLesson::create([
            'archive_course_id' => $request->archive_course_id,
            'name'              => $request->name,
            'resource'          => $request->resource,
            'overview'          => $request->overview,
            'valid'             => $request->valid,
            'created_by'        => Auth::guard('admin')->user()->id

        ]);
        Alert()->success('Course A.L Created','The Course Archive Lessone Created Successfully');
        return redirect('admin/ArchCourseLesson');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ArchCourses = ArchCourse::all();
        $ArchCourseLessons = ArchCourseLesson::find($id);
        return view('admin.ArchCourseLesson.edit',compact('ArchCourseLessons','ArchCourses'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'archive_course_id' => 'required',
            'name'              => 'required',
            'resource'          => 'required',
            'overview'          => 'required',
            'valid'             => 'required',
           ]);

           ArchCourseLesson::find($id)->update([
            'archive_course_id' => $request->archive_course_id,
            'name'              => $request->name,
            'resource'          => $request->resource,
            'overview'          => $request->overview,
            'valid'             => $request->valid,

        ]);
        Alert()->success('Archive Lessone  Updated','The Archive Course Created Successfully');
        return redirect('admin/ArchCourseLesson');

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
        $ArvhiveCoursesLession = ArchCourseLesson::find($id);
        $ArvhiveCoursesLession->delete();
        return response()->json([
            'status' => 200,
        ]);


    }
}
