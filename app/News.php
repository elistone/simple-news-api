<?php namespace App;
/**
  * News
  * 
  * 
  * @author ELI STONE <3li.stone@gmail.com>
**/

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
	
	protected $table 	= "news"; // set the table name

	protected $fillable = ['id','title','content','image','likes','dislikes','updated_at','category_id']; // set the fillable columns 

	protected $hidden 	= ['created_at']; // hide these from being displayed

	// set belongsTo
	public function categorys(){
		return $this->belongsTo('App\Category');
	}

}