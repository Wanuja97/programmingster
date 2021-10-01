<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactInfo;
use App\Models\ContactForm;
use App\Models\Post;
use Auth;
Use Illuminate\Support\carbon;

class HomeController extends Controller
{
    //
    public function __construct(){
        return $this-> middleware('auth');
    }
    
    public function Adminprofile(){
        return view('profile.show');
    }
    public function Logout(){
        Auth::logout();
        return Redirect()->route('login')->with('success','User logout successfully');
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
    
    

    public function getmessages(){
        $msgs = ContactForm::latest()->get();
        return view('admin.contact.viewmessages',compact('msgs'));
    }

    public function deletemessages($id){
        ContactForm::find($id)->delete();
        return redirect()->back()->with('success','Message Deleted Successfully');
    }
    

    
    
    

}
