<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\User;
use App\Models\MainApi;
class EventController extends Controller
{
    //
    public function index() {


            $search = request('search'); 

    if($search) {
        $events = Event::where('title', 'like','%'.$search.'%')->orWhere('description','like','%'.$search.'%')->get();
    } else {
        $events = Event::all();
    }

        return view('welcome', ['events' => $events, 'search' => $search]);
    }
    
    public function create() { 
        return view('events.create', );
}

    public function search(Request $request)  {
    $query = $request->get('query'); 
    $champions = MainApi::where('name', 'like', '%'.$query.'%')->limit(10)->get();
    return response()->json($champions);
}

public function store(Request $request)
{
    try {
        $event = new Event;

        $event->title = $request->title;
        $event->description = $request->description;
        $event->city = $request->city;
        $event->private = $request->private;
        $event->items = $request->items;
        $event->main = $request->main; 

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime('now')) . "." . $extension;
            $requestImage->move(public_path('img/events'), $imageName);
            $event->image = $imageName;
        }

        $user = auth()->user();
        $event->user_id = $user->id;

        $event->save();

        return redirect('/')->with('msg', "Você criou um novo evento: $event->title");
    } catch (\Exception $e) {
        return redirect('/events/create')->with('error', "Não foi possível criar um novo evento. $e");
    }
}

public function show($id) {
    $event = Event::findOrFail($id);
    $eventOwner = User::where('id', $event->user_id)->first()->toArray();

    return view('events.show', [
        'event' => $event,
        'eventOwner' => $eventOwner
    ]);
}

public function dashboard() {
    $user = auth()->user(); 
    $events = $user->events;
    return view ('events.dashboard', ['events' => $events]);
}

public function destroy($id) {
    Event::findOrFail($id)->delete();
    
    return redirect('/dashboard')->with('msg', "Você deletou com sucesso o evento de numero $id");
   
}
}




      
