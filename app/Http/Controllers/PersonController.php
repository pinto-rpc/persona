<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;

class PersonController extends Controller
{
    public function __construct(){
        $this->middleware('auth');

    }

    public function index(Request $request){

        $persons = $request->user()->persons()->orderBy('created_at', 'desc')->get();
        return view('person.index', ['persons' => $persons]);
    }

    public function store(Request $request){

        $this->validate($request, [
            'name' => 'required | max:255',
            'lastname' => 'required | max:255'
        ]);

        $request->user()->persons()->create([
            'name' => $request->name,
            'lastname' => $request->lastname
        ]);

        return redirect('/personas');

    }

    public function editView(){

    }

    public function edit(){

    }

    public function destroy($id){
        
        $person = Person::find($id);
        
        if(empty($person)){
            return redirect('/personas');
        }
         $person->delete();
         return redirect('/personas');
    
    }
}
