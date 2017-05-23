<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Scoreboard;
use App\Classes;
use Illuminate\Http\Request;

class ScoreboardController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function management()
	{
		//
		return view('scoreboard');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function csvReader()
	{
		//
		$del = Scoreboard::where('class_id',4)->delete();
		$input = fopen(app_path().'/test.csv', "r");
		if($input !== FALSE){		
			while(($data = fgetcsv($input,1000,"|")) !== FALSE){
				$score = new Scoreboard();
				$score->class_id = 4;
				$score->name = $data[0];
				$score->link = "../Contents/attach/".$data[0];
				$score->save();
			}
		}
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function get_scoreboard(Request $request)
	{
		$scoreboard = Scoreboard::where('class_id',$request->lstClass)->get()->toArray();
		$classes = Classes::all()->toArray();
		return view('getScoreboard',compact('scoreboard','classes'));
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
