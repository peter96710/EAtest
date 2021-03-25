<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Event_Actor;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        return view('home');
    }
    public function events()
    {

        $events = Event::with('location','event_actor.actor')->get();
        return view('events',compact('events'));
    }

    public function tickets($id)
    {
        $ticket = new Ticket;
        $ticket->event_id = $id;
        $ticket->user_id = Auth::id();
        $ticket->save();


        $events = Event::with('location','event_actor.actor')->get();
        return view('events',compact('events'));
    }
}
