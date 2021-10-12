<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'title',
        'cat_id',
        'description',
        'post_img',
        'content',
        'slug',
    ];
    public function category(){
        return $this->hasMany(Category::class,'id','cat_id');
    }
     public function user(){
        return $this->hasOne(User::class,'id','user_id');
    }
}
