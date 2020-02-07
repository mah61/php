<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\views;
use Illuminate\Support\Facades\DB;
use App\event;
use App\user;
use Illuminate\Support\Facades\Input;



class ConfirmeventController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
   public function submit(Request $req,User $user)
   {
    

       $req->validate([
        'name'=>'string',        
        'description'=>'max:1000',        
        'endDate'=>'after_or_equal:startDate',
        'venue'=>'string',
        'street'=>'string',
        'city'=>'alpha',
        'province'=>'regex:/^[A-Z ]+$/|max:2',                   
        'postalCode'=>'regex:/^[A-Z][0-9][A-Z] [0-9][A-Z][0-9]$/'
        ]);    

       $event = new event;
       $event->name = $req->name;       
       $event->filepath=$req->file('picture')->store('images', 'public');
       $event->category = $req->category;
       $event->description = $req->description;
       $event->startDate = $req->startDate;
       $event->endDate = $req->endDate;
       $event->venue = $req->venue;
       $event->street= $req->street;
       $event->city = $req->city;
       $event->province = $req->province;
       $event->postalCode = $req->postalCode;
       $event->userId=$req->user()->id;
       $event->save(); 
       return redirect()->route('browse');
   }  

   public function update(Request $request)
   {
    $request->validate([
        'name'=>'string',
        'description'=>'max:200',        
        'endDate'=>'after_or_equal:startDate',
        'venue'=>'string',
        'street'=>'string',
        'city'=>'alpha',
        'province'=>'regex:/^[A-Z ]+$/|max:2',                   
        'postalCode'=>'regex:/^[A-Z][0-9][A-Z] [0-9][A-Z][0-9]$/'
        ]);    
        
       $event  =  Event::find($request->id);
       $event->name=$request->name;
       $event->filepath=$request->file('picture')->store('images', 'public');
       $event->category=$request->category;
       $event->description=$request->description;
       $event->startDate=$request->startDate;
       $event->endDate=$request->endDate;
       $event->venue=$request->venue;
       $event->street=$request->street;
       $event->city=$request->city;
       $event->province=$request->province;
       $event->postalCode=$request->postalCode;
       $event->save();
       
       return redirect()->route('browse');
   }
  


   public function deletethisevent($id)
   {
        $event  =  Event::find($id);
        $event->delete();
        $events=Event::orderBy('startDate','desc')->paginate(3);
        return redirect()->route('browse');
   }

   public function editthisevent($id)
   {
       $event = Event::find($id);
       return view('editevent')->with('event',  $event);
   }

   public function showupload()
   {
        return view('upload');
   }

   public function upload(Request $request)
   {
    if ($request->hasFile('picture')) {
        echo "OK";
    }else{
        echo "error";
    }
    //return redirect('/');
    //{{asset('styles.css')}}
        $path = $request->file('picture')->store('images');
        //dd(request()->all());
        return redirect('/');
   }

}
