<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;

class EventController extends Controller
{
    public function index(){
        $search = request('search');

        if($search){
            $events = Event::where([
                ['title', 'like', '%'.$search.'%'] // o like é pra dizer que pode ser uma busca de algo parecido. e a % pra dizer que pode ser algo antes ou depois
            ])->get(); // é necessario o get pra que tenha algum item no $events. dizendo que quer pegar o dado
        } else{
            $events = Event::all(); // esse metodo pega todos os dados que estao no banco
        }


        return view('welcome', ['events' => $events, 'search' => $search]);

    }

    public function create(){
        return view('events.create');
    }

    public function store(Request $request){

        $event = new Event;

        $event ->title = $request->title;
        $event ->date = $request->date;
        $event ->city = $request->city;
        $event ->private = $request->private;
        $event ->description = $request->description;
        $event ->items = $request->items;


        if($request->hasFile("image") && $request->file("image")-> isValid()){
            $requestImage = $request->image;

            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $requestImage->move(public_path('img/events'), $imageName);
            $event->image = $imageName;
        }
        $event->save();

        return redirect('/')->with('msg', 'Evento criado com sucesso');

    }

    public function contact(){
        return view('contact');
    }

    public function show($id){

        $event = Event::findOrFail($id);

        return view('events.show', ['event' => $event]);
    }
}
