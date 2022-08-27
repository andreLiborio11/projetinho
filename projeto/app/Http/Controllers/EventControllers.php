<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;
use App\Models\User;

class EventControllers extends Controller
{
    public function index(){

        $search = request ('search');

        if($search){
            $events = Event::where([
                ['title', 'like','%'.$search.'%']
            ])->get();
        }else {
            $events = Event::all();
        }
       


        return view('welcome',['events' => $events, 'search'=> $search]);
    }
    public function create(){
        return view('events.create');
    }
    public function store(Request $request){

        $events = new Event;
        $events-> title = $request->title;
        $events-> descricao = $request->descricao;
        $events-> nota = $request->nota;



        if($request->hasFile('image') && $request->file('image')->isValid()){
            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalname(). strtotime("now")) . ".". $extension;

            $request->image->move(public_path('img/events'), $imageName);

            $events->image =$imageName;
        }
        $user = auth()->user();
        $events->user_id = $user->id;


        $events->save();

        return redirect('/')->with('msg','criado com sucesso');
    }
    public function show($id){
        $events =Event::findOrfail($id);

        $eventowner = User::where('id', $events->user_id)->first()->toArray();
        return view('events.show',['event' => $events, 'eventOwner'=> $eventowner]);
    }
    public function dashboard(){
        $user = auth()->user();

        $events = $user->events;

        return view('events.dashboard',['events'=>$events]);
    }
    public function destroy($id){
        Event::findorfail($id)->delete();
        return redirect('/dashboard')->with('msg','Excluido com Sucesso');
    }
    public function edit($id){
        $events =  Event::findOrFail($id);
        return view('events.edit',['events'=>$events]);
    }
    public function update(Request $request){



        $data = $request->all();

        if($request->hasFile('image') && $request->file('image')->isValid()){
            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalname(). strtotime("now")) . ".". $extension;

            $request->image->move(public_path('img/events'), $imageName);

            $data['image'] =$imageName;
        }


        Event::findOrFail($request->id)->update($data);

        return redirect('/dashboard')->with('msg', 'Conteudo Editado!!!');
    }

}
