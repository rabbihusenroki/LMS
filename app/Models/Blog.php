<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = [
        'author',
        'title',
        'image',
        'blog_description',
    
    ];
    public function user(){
        return $this->hasOne(User::class,'id','author');
    }
}
