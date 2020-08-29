<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function __construct(){
        $this->middleware('auth');

    }

    public function index(){
        return 'hola';
    }

    public function store(){

    }

    public function editView(){

    }

    public function edit(){

    }

    public function destroy(){
        
    }
}
