<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArchCourse extends Model
{
    use HasFactory;
    protected $table = 'arch_courses';
    protected $fillable = [
        'arch_name',
        'arch_description',
        'valid'
    ];
}
