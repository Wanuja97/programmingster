<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
Use Auth;
Use Illuminate\Support\carbon;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    //
    public function __construct(){
        return $this-> middleware('auth');
    }
    public function index(){
        $posts = Post::all();
        return view('admin.posts.index',compact('posts'));
    }


    public function AddPost(){
        return view('admin.posts.addpost');
    }


    public function StorePost(Request $request){

         
        if($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName.'_'.time().'.'.$extension;
            $request->file('upload')->move(public_path('images\posts'), $fileName);
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('images/posts/'.$fileName); 
            $msg = 'Image successfully uploaded'; 
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
               
            @header('Content-type: text/html; charset=utf-8'); 
            echo $response;
        }
        $image = $request->file('image');

        // //generating unique if for image
        $name_gen = hexdec(uniqid());
        // //Creating Extension
        $image_exte = strtolower($image->getClientOriginalExtension());
        $img_name = $name_gen. "." .$image_exte;
        // upload location
        $up_location = 'images/posts/';
        $last_img = $up_location.$img_name;
        $image->move($up_location,$img_name);

        $postArray      =   array( 
            "title"  =>  $request->title,
            "user_id" => Auth::user()->id,
            "cat_id" => $request->cat_id,
            "description" => $request->description,
            "post_img" => $last_img,
            "content" => $request->editor

        );

            $post  =       Post::create($postArray);

            return redirect()->back();
    }
}
