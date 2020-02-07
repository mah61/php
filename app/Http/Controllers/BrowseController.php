<?php

namespace App\Http\Controllers;
use App\event;
use App\user;

use Illuminate\Http\Request;

class BrowseController extends Controller
{
    public function browse()
    {
        $events=Event::orderBy('startDate','desc')->paginate(3);
        return view('browse',compact('events'));
    }

    public function showthisevent($id)
   {
       $event=Event::find($id);
       return view('showevent')->with('event',  $event);
   }
   
   public function search(Request $request)
   {
        $q = $request->input('q');   
        if($q != "")
        {
            $event = Event::where('name', 'LIKE', '%' . $q . '%')
                    ->orWhere('category','LIKE','%'.$q.'%')
                    ->orWhere('description','LIKE','%'.$q.'%')
                    ->orWhere('startDate','LIKE','%'.$q.'%')
                    ->orWhere('endDate','LIKE','%'.$q.'%')
                    ->orWhere('venue','LIKE','%'.$q.'%')
                    ->orWhere('street','LIKE','%'.$q.'%')
                    ->orWhere('city','LIKE','%'.$q.'%')
                    ->orWhere('province','LIKE','%'.$q.'%')
                    ->orWhere('postalCode','LIKE','%'.$q.'%')
                    ->orWhere('userId','LIKE','%'.$q.'%')
                    ->orWhere('created_at','LIKE','%'.$q.'%')
                    ->orWhere('updated_at','LIKE','%'.$q.'%')
                    ->get();
            if(count($event)>0)
                return view('resultsearch')->withDetails($event)->withQuery($q);

        }
        return view('resultsearch')->withMessage("No events found!");
    }


}
