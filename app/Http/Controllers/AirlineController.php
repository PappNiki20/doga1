<?php

namespace App\Http\Controllers;

use App\Models\Airlines;
use Illuminate\Http\Request;

class AirlineController extends Controller
{public function  index(){
    return Airlines::all();
}
public function  show($id){
    return Airlines::find($id);
}
public function destroy ($id){
    Airlines::find($id)->delete();
 return redirect('/airline/list');
}
public function update(Request $request, $id){
    $airline = Airlines::find($id);
    $airline->name = $request->name;
    $airline->country = $request->country;

    $airline->save();
   return redirect('/airline/list');
}
public function store(Request $request){
    $airline = new Airlines();
    $airline->name = $request->name;
    $airline->country = $request->country;
   
    $airline->save();
 return redirect('/airline/list');
}
public function  newView(){
    $airlines = Airlines::all();
    return view('airlines.new', ['airlines'=>$airlines]);
}
public function  editView($id){
    $airlines = Airlines::all();
    $airline = Airlines::find($id);
    return view('airlines.edit', ['airlines'=>$airlines , 'airline'=>$airline]);
}
public function listView(){
    $airlines = Airlines::all();
    return view('airline.list', ['airlines'=>$airlines]);
}
}
