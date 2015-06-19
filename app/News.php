<?php namespace App;

use Illuminate\Database\Eloquent\Model;

/**
   * News
   * 
   * 
   * @author ELI STONE <3li.stone@gmail.com>
   */
class News extends Model
{
	
	protected $table 	= "news"; // set the table

	protected $fillable = ['id','title','content','image','category','likes','dislikes','updated_at']; // set the fillable cols

	protected $hidden 	= ['created_at']; // hide these

	// set belongsTo
	public function categorys(){
		return $this->belongsTo('App\Category');
	}

}