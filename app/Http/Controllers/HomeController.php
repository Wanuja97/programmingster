<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactInfo;
use App\Models\ContactForm;
use App\Models\Slider;
use App\Models\Post;
Use Illuminate\Support\carbon;

class HomeController extends Controller
{
    //
    public function __construct(){
        return $this-> middleware('auth');
    }
    // --------------------------------------- Privacy Page --------------------------------------------------------
    public function privacy(){
        return view('privacypolicy');
    }

    // --------------------------------------- Contact Info --------------------------------------------------------
    public function contact(){
        $contact = ContactInfo::latest()->first();
        return view('contact',compact('contact'));
    }
    public function AdminContact(){
        $contact = ContactInfo::all();
        return view('admin.contact.index',compact('contact'));
    }
    Public function AdminAddContact(){
        return view('admin.contact.create');
    }

    public function StoreContact(Request $request){
        ContactInfo::insert([
            'email' => $request->email,
            'phone' => $request->phone,
            'city' => $request->city,
            'province' => $request->province,
            'country' => $request->country,
            'created_at' => Carbon::now(),

        ]);
        return Redirect()->route('all.contact')->with('success','Contact Details Inserted Successfull');
    }

    public function DeleteContact($id){
        ContactInfo::find($id)->delete();
        return redirect()->back()->with('success','Contact Details Deleted Successfully');
    }

    Public function EditContact($id){
        $contact = ContactInfo::find($id);
        return view('admin.contact.editcontact',compact('contact'));
    }
    Public function UpdateContact(Request $request, $id){
        $update = ContactInfo::find($id)->update([
            'email' => $request->email,
            'phone' => $request->phone,
            'city' => $request->city,
            'province' => $request->province,
            'country' => $request->country,
            'created_at' => Carbon::now(),

        ]);

        return Redirect()->route('all.contact')->with('success','Contact Details Updated Successfull');

    }
    
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

    public function getmessages(){
        $msgs = ContactForm::latest()->get();
        return view('admin.contact.viewmessages',compact('msgs'));
    }

    public function deletemessages($id){
        ContactForm::find($id)->delete();
        return redirect()->back()->with('success','Message Deleted Successfully');
    }
    

    //------------------------------------ Slider ---------------------------------------
    
     public function HomeSlider(){
        $sliders = slider::latest()->get();
        return view('admin.slider.index',compact('sliders'));
    }
    public function addSlider(){
        return view('admin.slider.addSlider');
    }
    
    public function storeSlider(Request $request){
         $validatedData = $request->validate([
        'title' => 'required',
        'image' => 'required',
         ],
        [
            'title.required' => 'Please Input Title',
            'image.required' => 'Please Insert a Image',
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
        $up_location = 'images/sliders/';
        $last_img = $up_location.$img_name;
        $image->move($up_location,$img_name);

        //Image Intervention Method
        // $name_gen = hexdec(uniqid()).'.'.$brand_image->getClientOriginalExtension();
        // Image::make($brand_image)->resize(150, 100)->save('images/brands/'.$name_gen);
        // $last_img = 'images/brands/'.$name_gen;

        Slider::insert([
            'title' => $request->title,
            'decription' => $request->decription,
            'image' => $last_img,
            'created_at' => Carbon::now(),
        ]);

        return redirect()->route('all.slider')->with('success','Slider Inserted Successfully');

    }

     public function deleteSlider($id){
        slider::find($id)->delete();
        return redirect()->back()->with('success','Slider Deleted Successfully');
    }
    

    public function EditeSlider($id){
        $item = Slider::find($id);
        return view('admin.slider.editslider',compact('item'));
    }

    public function updateSlider(Request $request, $id){
        $validatedData = $request->validate([
        'decription' => 'max:75',
        'image' => 'mimes:jpg,jpeg,png',
         ]);
        //getting old image code
        $item = Slider::find($id);
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
            Slider::find($id)->update([
            
            'image' => $last_img,
            ]);
         }
         //if user changed brand name
         if($request->title){
             Slider::find($id)->update([
            'title' => $request->title,
            ]);
         }
         if($request->decription){
             Slider::find($id)->update([
            'decription' => $request->decription,
            ]);
         }
         //For Any Changes
        Slider::find($id)->update([
            'created_at' => Carbon::now(),
            
        ]);
        $sliders = Slider::all();
        return view('admin.slider.index',compact('sliders'))->with('success','Slider Updated Successfully');
        // return redirect()->back()->with('success','Category Updated Successfully');
    }

}
