<?php

namespace App\Http\Controllers\admin;

use App\Models\ArchCourse;
use Illuminate\Http\Request;
use App\Models\ArchCourseLesson;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\ArchCourseLessonAssignment;

class ArchCourseLessonAssignmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $ArchCourseLessonAssignments =
        DB::table('arch_course_lesson_assignments')
        ->join('arch_course_lessons', 'arch_course_lessons.id', '=', 'arch_course_lesson_assignments.archive_course_lession_id')
        ->join('arch_courses', 'arch_courses.id', '=', 'arch_course_lesson_assignments.archive_course_id')
        ->select('arch_course_lesson_assignments.*', 'arch_course_lessons.name', 'arch_courses.arch_name')
        ->get();

        return view('admin.ArchCourseLessonAssignment.index',compact('ArchCourseLessonAssignments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ArchCourses= ArchCourse::all();
        $ArchCourseLessons= ArchCourseLesson::all();
        return view('admin.ArchCourseLessonAssignment.create',compact('ArchCourses', 'ArchCourseLessons'));

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
            'archive_course_id'         => 'required',
            'archive_course_lession_id' => 'required',
            'title'                     => 'required',
            'details'                   => 'required',
           ]);
           ArchCourseLessonAssignment::create([
            'archive_course_id'         => $request->archive_course_id,
            'archive_course_lession_id' => $request->archive_course_lession_id,
            'title'                     => $request->title,
            'details'                   => $request->details,
            'valid'                     => $request->valid,
            'created_by'                => Auth::guard('admin')->user()->id

        ]);
        Alert()->success('A.C.L Assignment Added','The Archive Course  Lessone Assignment Created Successfully');
        return redirect('admin/ArchCourseLessonAssignment');
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
        $ArchCourses= ArchCourse::all();
        $ArchCourseLessons= ArchCourseLesson::all();
        $ArchCourseLessonAssignments = ArchCourseLessonAssignment::find($id);
        return view('admin.ArchCourseLessonAssignment.edit',compact('ArchCourseLessonAssignments','ArchCourses','ArchCourseLessons'));
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
            'archive_course_id'         => 'required',
            'archive_course_lession_id' => 'required',
            'title'                     => 'required',
            'details'                   => 'required',
            'valid'                     => 'required',
           ]);

           ArchCourseLessonAssignment::find($id)->update([
            'archive_course_id'         => $request->archive_course_id,
            'archive_course_lession_id' => $request->archive_course_lession_id,
            'title'                     => $request->title,
            'details'                   => $request->details,
            'valid'                     => $request->valid,

        ]);
        Alert()->success('A.L Assignment  Updated','The Archive Course Created Successfully');
        return redirect('admin/ArchCourseLessonAssignment');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ArchCourseLessonAssignments = ArchCourseLessonAssignment::find($id);
        $ArchCourseLessonAssignments->delete();
        return redirect()->route('ArchCourseLessonAssignment.index');
    }
}
