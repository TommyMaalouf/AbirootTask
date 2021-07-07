<?php

namespace App\Http\Controllers;
use App\Models\Dropdown;
use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    public function index(){
        $dropdownList = Dropdown::select('id','position')->get();
        
        
        return view ('home',compact('dropdownList'));
        
        
    }
}
