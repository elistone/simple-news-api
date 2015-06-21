<?php namespace App;
/**
  * Category
  * 
  * 
  * @author ELI STONE <3li.stone@gmail.com>
**/

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	
	protected $table 	= "category"; // set the table name

	protected $fillable = ['id','title','description']; // set the fillable columns

	protected $hidden 	= ['created_at','updated_at']; // hide these

	// set has many news
	public function news(){
		return $this->hasMany('App\News');
	}

}