<?php

	class Food extends Eloquent{

	// MASS ASSIGNMENT -------------------------------------------------------
	// define which attributes are mass assignable (for security)
	// we only want these  attributes able to be filled
	protected $fillable = array('food_name','food_type','food_genre','status');


	// DEFINE RELATIONSHIPS --------------------------------------------------


	}

?>