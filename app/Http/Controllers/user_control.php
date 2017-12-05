<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class user_control extends Controller
{
    public function store(Request $request){
   		$name = $request->input('name');
   		$surname = $request->input('surname');
   		$comment = $request->input('comment');
   		DB::table('expression')->insert(
   			['name'=>$name, 'surname'=>$surname, 'comment'=>$comment]
   		);
   		return redirect('/com');
	}

	public function show(){
   	$expression = DB::table('expression')->get();
   	return view('com')->with('expression', $expression);
   }
}