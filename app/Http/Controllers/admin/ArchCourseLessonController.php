<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Models\ArchCourseLesson;
use App\Http\Controllers\Controller;

class ArchCourseLessonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ArvhiveCoursesLessions = ArchCourseLesson::join('courses', 'archive_courses.id', '=', 'archive_course_lessions.archive_course_id')->select('archive_course_lessions.*', 'archive_courses.name')->latest()->get();
        $ArvhiveCoursesLessions = ArchCourseLesson::JOIN('arch_courses');
        // $ArvhiveCoursesLessions = ArchiveCourseLession::latest()->get();
        return view('admin.ArchCourseLesson.index',$ArvhiveCoursesLessions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.ArchCourseLesson.create');
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
            'course_name' => 'required|max:109',
            'course_des' => 'required|max:231',
            'price' => 'required|numeric',
           ]);
           ArchCourseLesson::create([
            'archive_course_id' => $request->archive_course_id,
            'name'              => $request->name,
            'resource'          => $request->resource,
            'overview'          => $request->overview,
            'created_by'        => $request->created_by

        ]);
        Alert()->success('Course Archive Lessone Added','The Course Archive Lessone Created Successfully');
        return redirect('ArchCourseLesson');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
        
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
       

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
       

    }
}
