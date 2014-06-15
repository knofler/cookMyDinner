<?php
	
	class Comment extends Eloquent{

	// MASS ASSIGNMENT -------------------------------------------------------
	// define which attributes are mass assignable (for security)
	// we only want these 3 attributes able to be filled
	protected $fillable = array('food_id','comment','feedback','location');


	// DEFINE RELATIONSHIPS --------------------------------------------------
	public function food(){
		return $this->belongsTo('Food');
	}



	}
?>