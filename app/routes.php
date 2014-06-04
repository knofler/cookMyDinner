<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', array(
	'as'	=>'home',
	'uses'	=>'HomeController@home'
	));

/*
| Unauthenticated Group
*/

Route::group(array('before'=>'guest'),function(){

	/*
	| CSRF group
	*/
	Route::group(array('before'=>'csrf'),function(){

	/*
	| Create Account (POST)
	*/
	Route::post('/account/create',array(
		'as'=>'account-create-post',
		'uses'=>'AccessController@postCreate'
	));	


	/*
	| Sign in (POST)
	*/
	Route::post('/account/login',array(
		'as'=>'account-login-post',
		'uses'=>'AccessController@postLogin'
	));

	});


	/*
	| Sign in (GET)
	*/
	Route::get('/account/login',array(
		'as'=>'account-login',
		'uses'=>'AccessController@getLogin'
	));

	/*
	| Create Account (GET)
	*/
	Route::get('/account/create',array(
		'as'=>'account-create',
		'uses'=>'AccessController@getCreate'
	));

});

/*
| Authenticated Group
*/
Route::get('/eloquent',array(
	'as'	=>'eloquent',
	'uses'	=>'AccessController@getData'
));

Route::get('/shop',array(
	'as'	=>'shop',
	'uses'	=>'AccessController@getCart'
));

Route::get('/blog',array(
	'as'	=>'blog',
	'uses'	=>'AccessController@getBlog'
));

Route::get('/invoice',array(
	'as'	=>'invoice',
	'uses'	=>'AccessController@getInvoice'
));

Route::get('/timeline',array(
	'as'	=>'timeline',
	'uses'	=>'AccessController@getTimeline'
));

Route::get('/comment',array(
	'as'	=>'comment',
	'uses'	=>'AccessController@getComment'
));

Route::get('/comment_timeline',array(
	'as'	=>'comment_timeline',
	'uses'	=>'AccessController@getComment_timeline'
));

Route::get('/shopstatus',array(
	'as'	=>'shopstatus',
	'uses'	=>'AccessController@getShopStatus'
));

Route::get('/payment',array(
	'as'	=>'stripe_payment',
	'uses'	=>'AccessController@getStripe_payment'
));

Route::get('/profile',array(
	'as'	=>'profile',
	'uses'	=>'AccessController@getProfile'
));

Route::get('/poll',array(
	'as'	=>'poll',
	'uses'	=>'AccessController@getPoll'
));

Route::get('/pricetable',array(
	'as'	=>'pricetable',
	'uses'	=>'AccessController@getPriceTable'
));

Route::get('/pricecard',array(
	'as'	=>'pricecard',
	'uses'	=>'AccessController@getPricecard'
));

Route::get('/data',array(
	'as'	=>'data_display',
	'uses'	=>'AccessController@getData_display'
));

Route::get('/chat',array(
	'as'	=>'chat',
	'uses'	=>'AccessController@getChat'
));

Route::get('/users',array(
	'as'	=>'users',
	'uses'	=>'AccessController@getUsers'
));


