<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Scoreboard extends Model {

	//
	protected $table = "scoreboard";
	protected $fillable = ['id','line','name','class_id'];
	public $timestamps = false;

}
