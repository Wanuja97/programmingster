<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function AddPost(){
        return view('admin.posts.addpost');
    }
    public function StorePost(){
        
    }
}
