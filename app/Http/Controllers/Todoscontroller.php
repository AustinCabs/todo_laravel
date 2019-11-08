<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo; 
use Session;
class Todoscontroller extends Controller
{
    public function read()
    {
    	$todos = Todo::all();
    	return view('todo')->with('todos',$todos);
    }
    public function insert(Request $data ) 
     {
    	$insertToDb = new Todo;
    	$insertToDb -> todo = $data -> insert_data;
    	$insertToDb -> save();
    	Session::flash('success','New Todo is Created');
    	return redirect()->back();
    }
    public function remove($id)
    {
    	$deleteFromDb = Todo::find($id);
    	$deleteFromDb -> delete();
    	Session::flash('success',' Todo Has Been Deleted');
    	return redirect()->back();
    }
    public function update($id)
    {
    	$updateFromDb = Todo::find($id);
    	return view('update')->with('data',$updateFromDb);
    }
    public function saveUpdatedData(Request $request, $id)
    {
        $saveUpdatedData = Todo::find($id);
        $saveUpdatedData->todo = $request->update_data;
        $saveUpdatedData->save();
        Session::flash('success',' Todo has been updated');
        return redirect()->route('index');
      /*  dd($request->all());*/
    }
    public function markAsCompleted($id)
    {
    	$mark = Todo::find($id);
    	$mark->completed = 1;
    	$mark->save();
    	Session::flash('success','Completed');
    	return redirect()->back();
    }
}
