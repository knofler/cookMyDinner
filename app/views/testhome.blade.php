@extends('layout.main')


@section('content')

	Hello this is home <br />
	<?php  
	foreach (Bear::all() as $bear) {
		echo $bear->name ,'<br />' ; 
	}
	echo Tree::find(1)->type , '<br />';
	$adobot=Bear::where('name','=','adobot')->first();
	$fish=$adobot->fish;
	echo 'Adobot bear\'s fish weight is: ', $fish->weight, '<br />';
	
	$lawly=Bear::where('name','=','lawly')->first();
	echo 'Lawly bear: ',$lawly;
	foreach ($lawly->trees as $tree){

		echo 'Tree type : ',$tree->type, ' & ', 'Tree age is : ', $tree->age , '<br />';
	}

	$cerms=Bear::where('name','=','Cerms')->first();
	echo 'Bear :' ,$cerms ,'<br />';
	echo 'fish: ', $cerms->fish ,'<br />';
	echo 'Fish Property: ', $cerms->fish->weight ,'<br />';
	
	foreach ($cerms->picnics as $picnic){

		echo $picnic->name ,'<br />';
	}

	// get the bears that go to the Grand Canyon picnic -------------
	$grandCanyon = Picnic::where('name', '=', 'GrandCanyon')->first();
	// show the bears
	echo 'Grand Canyon Picnic: ',$grandCanyon,'<br />';
	 foreach($grandCanyon->bears as $bear){
	 	echo $bear->name,'<br />';
	 }
?> 
	
@stop	