<?php

namespace App\Models;

use App\Models\ArchCourse;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ArchCourseLesson extends Model
{
    use HasFactory;
    protected $table = 'arch_course_lessons';
    protected $fillable = [
        'archive_course_id',
        'name',
        'resource',
        'overview',
        'created_by',
        'valid'
    ];

    public function ArchCourses()
    {
        return $this->belongsTo(ArchCourse::class,'archive_course_id','id');
    }
    public function ArchCoursesLessonAssignment()
    {
        return $this->hasMany(ArchCourseLessonAssignment::class,'archive_course_id','id');
    }
}

