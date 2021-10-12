<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Post;
use App\Models\ContactInfo;
use App\Models\ContactForm;
Use Auth;
Use Illuminate\Support\carbon;
use Illuminate\Support\Facades\DB;

class PublicController extends Controller
{
    // --------------------------------------- Privacy Page --------------------------------------------------------
    public function privacy(){
        return view('privacypolicy');
    }

     // --------------------------------------- About Page ----------------------------------------------------------

    public function about(){
        return view('about');
    }
    // --------------------------------------- Contact Info --------------------------------------------------------
    public function contact(){
        $contact = ContactInfo::latest()->first();
        return view('contact',compact('contact'));
    }


    // --------------------------------------- Category View --------------------------------------------------------
    public function ViewCategory($id){
        $posts = DB::table('posts')
                ->select('posts.*')
                ->where('posts.cat_id', '=', $id)
                ->get();
         
         return view('layouts.pages.viewcategory',compact('posts'));
    }


    // --------------------------------------- View Post --------------------------------------------------------
    public function ViewPost($slug){
        $post = DB::table('posts')
                ->select('posts.*')
                ->where('posts.slug', '=', $slug)
                ->first();
        // $post = Post::find($id);
        return view('layouts.pages.post',compact('post'));
    }


    // --------------------------------------- Send Message in Contact Form --------------------------------------------------------
    public function ContactForm(Request $request){
        ContactForm::insert([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
            'created_at' => Carbon::now(),

        ]);
       return redirect()->route('contact')->with('success','Your message has been sent. Thank you!');
    }

    public function SearchResults(Request $request){
        $searchTerm =$request->keyword;
        $reservedSymbols = ['-', '+', '<', '>', '@', '(', ')', '~'];
        $searchTerm = str_replace($reservedSymbols, ' ', $searchTerm);

        $searchValues = preg_split('/\s+/', $searchTerm, -1, PREG_SPLIT_NO_EMPTY);

        $posts = Post::where(function ($q) use ($searchValues) {
            foreach ($searchValues as $value) {
            $q->orWhere('title', 'like', "%{$value}%");
           
            }
        })->latest()->get();
        // $keyword = $request->keyword;
        // $posts = Post::where('title','LIKE', '%'.$keyword.'%')->latest()->get();
        return view('layouts.pages.searchresults',compact('posts'));
    }
}
