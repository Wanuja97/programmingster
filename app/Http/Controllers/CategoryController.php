<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
Use Auth;
Use Illuminate\Support\carbon;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    //Calling the Auth Middleware 
    public function __construct(){
        return $this-> middleware('auth');
    }

     public function AllCat(){
         $categories = Category::all();
        return view('admin/categories/index',compact('categories'));
    }

    public function AddCat(Request $request){
        $validatedData = $request->validate([
        'category_name' => 'required|unique:categories|max:25',
        'image' => 'required|mimes:jpg,jpeg,png',
         ],
        [
            'category_name.required' => 'Please Input Category Title',
        ]);
        //Storing Image and image_name

        //taking image file
        $image = $request->file('image');

        // //generating unique if for image
        $name_gen = hexdec(uniqid());
        // //Creating Extension
        $image_exte = strtolower($image->getClientOriginalExtension());
        $img_name = $name_gen. "." .$image_exte;
        // upload location
        $up_location = 'images/category/';
        $last_img = $up_location.$img_name;
        $image->move($up_location,$img_name);

       

        Category::insert([
            'category_name' => $request->category_name,
            'image' => $last_img,
            'description' => $request->description,
            'created_at' => Carbon::now(),
            'user_id' => Auth::user()->id,
        ]);
        
        return redirect()->back()->with('success','Category Inserted Successfully');

    }

    public function EditCat($id){

        //Query Builder Method
        //$row = DB::table('categories')->where('id',$id)->first();

        // Eloquoent ORM Method
        $item = Category::find($id);
        return view('admin.categories.categoryedit',compact('item'));
    }

    public function UpdateCat(Request $request, $id){
        $validatedData = $request->validate([
        'category_name' => 'max:50',
        'image' => 'mimes:jpg,jpeg,png',
         ]);
        //getting old image code
        $item = Category::find($id);
        $old_image = $item->image;
        //If User changed Image
         if($request->image){
            //taking image file
            $image = $request->file('image');
            //generating unique if for image
            $name_gen = hexdec(uniqid());
            //Creating Extension
            $image_exte = strtolower($image->getClientOriginalExtension());
            $img_name = $name_gen. "." .$image_exte;
            //upload location
            $up_location = 'images/category/';
            $last_img = $up_location.$img_name;
            $image->move($up_location,$img_name);

            unlink($old_image);
            Category::find($id)->update([
            
            'image' => $last_img,
            ]);
         }
         //if user changed brand name
         if($request->category_name){
             Category::find($id)->update([
            'category_name' => $request->category_name,
            ]);
         }
         if($request->description){
             Category::find($id)->update([
            'description' => $request->description,
            ]);
         }
         //For Any Changes
        Category::find($id)->update([
            'created_at' => Carbon::now(),
            'user_id' => Auth::user()->id,
        ]);
        $categories = Category::all();
        return view('admin.categories.index',compact('categories'))->with('success','Category Updated Successfully');
        // return redirect()->back()->with('success','Category Updated Successfully');
    }

    public function CategoryDelete($id){
        $item = Category::find($id);
        $old_image = $item->image;
        unlink($old_image);

        Category::find($id)->delete();
        return redirect()->back()->with('success','Category Deleted Successfully');
    }
    

}
