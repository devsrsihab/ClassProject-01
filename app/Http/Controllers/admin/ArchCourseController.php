<?php

namespace App\Http\Controllers\admin;

use App\Models\ArchCourse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArchCourseController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $ArchiveCourses['ArchiveCourses'] = ArchCourse::all();
        // $ArvhiveCourses = ArchiveCourseLession::latest()->get();
        return view('admin.ArchCourse.index',$ArchiveCourses);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.ArchCourse.create');
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
            'arch_name'        => 'required|max: 109',
            'arch_description' => 'required|max: 231',
            'valid'            => 'required',
           ]);
           ArchCourse::create([
            'arch_name'        => $request->arch_name,
            'arch_description' => $request->arch_description,
            'valid'            => $request->valid

        ]);
        Alert()->success('Archive Course  Added','The Archive Course Created Successfully');
        return redirect('admin/ArchCourses');

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
        $ArchiveCourses['ArchiveCourses'] = ArchCourse::find($id);
        return view('admin.ArchCourse.edit',$ArchiveCourses);

        
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
            'arch_name'        => 'required|max: 109',
            'arch_description' => 'required|max:231',
            'valid' => 'required',
           ]);

           ArchCourse::find($id)->update([
            'arch_name'        => $request->arch_name,
            'arch_description' => $request->arch_description,
            'valid' => $request->valid

        ]);
        Alert()->success('Archive Course  Added','The Archive Course Created Successfully');
        return redirect('admin/ArchCourses');

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ArchCourseDelete = ArchCourse::find($id);
        $ArchCourseDelete->delete();
        return response()->json([
            'status' => 200,
            'message' => 'Deleted',
        ]);

    }
}
