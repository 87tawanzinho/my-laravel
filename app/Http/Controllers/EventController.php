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
public function store(Request $request)
{
    try {
        $event = new Event;

        $event->title = $request->title;
        $event->description = $request->description;
        $event->city = $request->city;
        $event->private = $request->private;

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime('now')) . "." . $extension;
            $requestImage->move(public_path('img/events'), $imageName);
            $event->image = $imageName;
        }

        $event->save();

        return redirect('/')->with('msg', "Você criou um novo evento: $event->title");
    } catch (\Exception $e) {
        return redirect('/events/create')->with('error', 'Não foi possível criar um novo evento.');
    }
}

public function show($id) {
    $event = Event::findOrFail($id);


    return view('events.show', [
        'event' => $event
    ]);
}

}




      
