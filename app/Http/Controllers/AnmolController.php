<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnmolController extends Controller
{
   
    public function __invoke(){
        return "<h2>Invoke function is called</h2>";
        }

    public function anmol(){
        $company="CTS";
        $role="Intern";
        return view('anmol',compact('company','role'));
    }

    public function raj($id){
        return "<h2>This is how the world works{{$id}}</h2>";
    }
    
    public function aran(){
        return "<h2>This is how the CTS works</h2>";
    }

    
    
}
