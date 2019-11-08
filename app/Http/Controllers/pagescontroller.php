<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;
class pagescontroller extends Controller
{
    public function new() {
    	$readFromDb = Todo::all();
    	return view('new')->with('read',$readFromDb);
    }
}
