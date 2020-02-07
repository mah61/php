<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\event;
use App\user;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //var_dump(Auth::user()->id);
        $events=Event::where('userId',Auth::user()->id)->orderBy('startDate','desc')->paginate(3);
        
        return view('home',compact('events'));
    }
}
