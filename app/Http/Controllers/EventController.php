<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
class EventController extends Controller
{
    //
    public function index() {
        $events = Event::all();
        return view('welcome', ['events' => $events]);
    }

    public function create() { 
        return view('events.create');
}

    public function store(Request $request) {
       try {
        $event = new Event; 

        $event->title = $request->title;
        $event->description = $request->description;
        $event->city = $request->city;
        $event->private = $request->private;

        $event->save();

        return redirect('/')->with('msg','Você criou um novo evento.');
       } catch(err) {
        return redirect('/events/create')->with('error','Não foi possivel criar um novo evento.');
       }
    }
}