<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArchCourseLesson extends Model
{
    use HasFactory;
    protected $table = 'arch_course_lessons';
    protected $fillable = [
        'archive_course_id',
        'name',
        'resource',
        'overview',
        'created_by'
    ];
}
