<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;
    protected $fillable = [
        'about_banner',
        'course_banner',
        'teacher_banner',
        'blog_banner',
        'contact_banner',
    
    ];
}
