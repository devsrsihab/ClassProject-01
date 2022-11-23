<?php

namespace App\Http\Controllers\admin;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Course['Courses'] = Course::all();
        return view('admin.Course.index',$Course);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Course.create');
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
           Course::create([
            'course_name' => $request->course_name,
            'course_des'  => $request->course_des,
            'price'       => $request->price

        ]);
        Alert()->success('Course Archive Added','The Course Created Successfully');
        return redirect()->route('Courses.index');

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
        $Course['Courses'] = Course::find($id);
        return view('admin.Course.edit',$Course);
        
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
            'course_name' => 'required|max:109',
            'course_des' => 'required|max:231',
            'price' => 'required|max:109',
           ]);
           Course::find($id)->update([
            'course_name' => $request->course_name,
            'course_des'  => $request->course_des,
            'price'       => $request->price

        ]);
        Alert()->success('Course Archive Updated','The Course Updated Successfully');
        return redirect()->route('Courses.index');

    }


    /**
     * Confirm Deleted SweetAlert
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function isDelete()
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
       
        Course::find($id)->delete();
        Alert()->success('Course Deleted','The Course Deleted Successfully');
        return redirect()->route('Courses.index');

    }
}
