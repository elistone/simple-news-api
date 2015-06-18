<?php namespace App;

use Illuminate\Database\Eloquent\Model;

/**
   * Category
   * 
   * 
   * @author ELI STONE <3li.stone@gmail.com>
   */
class Category extends Model
{
	
	protected $table 	= "category"; // set the table

	protected $fillable = ['title','description']; // set the fillable cols

	protected $hidden 	= ['id','created_at','updated_at']; // hide these

	// set has many news
	public function news(){
		return $this->hasMany('App\News');
	}

}