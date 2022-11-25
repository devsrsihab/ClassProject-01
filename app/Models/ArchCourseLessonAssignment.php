<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArchCourseLessonAssignment extends Model
{
    use HasFactory;
    protected $table = 'arch_course_lesson_assignments';
    protected $fillable = [
        'archive_course_id',
        'archive_course_lession_id',
        'title',
        'details',
        'created_by',
        'valid',
    ];

    // public function ArchCourses()
    // {
    //     return $this->belongsTo(ArchCourse::class,'archive_course_id','id');
    // }
    // public function ArchCourseLesson()
    // {
    //     return $this->belongsTo(ArchCourseLesson::class,'archive_course_id','id');
    // }
}
