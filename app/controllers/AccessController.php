<?php

class AccessController extends BaseController{

	public function getData(){

	return View::make('eloquent')->with('bears',Bear::all());
	}

	public function getTimelines(){

	return View::make('timelines');
	}

	public function getChat(){

	return View::make('chat');
	}

	public function getData_display(){

	return View::make('data_display');
	}

	public function getPriceTable(){

	return View::make('pricetable');
	}

	public function getPricecard(){

	return View::make('pricecard');
	}

	public function getPoll(){

	return View::make('poll');
	}

	public function getProfile(){

	return View::make('profile');
	}

	public function getStripe_payment(){

	return View::make('stripe_payment');
	}

	public function getShopStatus(){

	return View::make('shopping_status');
	}

	public function getComment(){

	return View::make('comment');
	}

	public function getComment_timeline(){

	return View::make('comment_timeline');
	}

	public function getCart(){

		return View::make('shop');
	}

	public function getInvoice(){

		return View::make('invoice');
	}

	public function getBlog(){

		return View::make('blog');
	}

	public function getUsers(){

		return View::make('users');
	}

	public function getCreate(){

		return View::make('account.create');
	}

	public function postCreate(){

		$validator=Validator::make(Input::all(),

			array(

				'first_name' 		=> 'required|max:50',
				'last_name' 		=> 'required|max:50',
				'email'				=> 'required|max:50|email|unique:users',
				'username' 			=> 'required|max:20|min:3|unique:users',
				'password' 			=> 'required|max:20|min:3',
				'password_again' 	=> 'required|same:password'
			)
		);

		if($validator->fails()){
			return 
			Redirect::route('account-create')->withErrors($validator)->withInput();
		}else{
			$first_name=Input::get('first_name');
			$last_name=Input::get('last_name');
			$username=Input::get('username');
			$email=Input::get('email');
			$password=Input::get('password');

			//Generate Activation Code
			$code=str_random(60);	

			$user=User::create(array(
				'first_name'	=>$first_name,
				'last_name'		=>$last_name,
				'email'			=>$email,
				'username'		=>$username,
				'password'		=>$password,
				'code'			=>$code,
				'active'		=>0
			));

			if($user){

					//create Account here


				return Redirect::route('home')->with('global','Account Has been created!');
			}
		}
	}


	public function getLogin(){

		return View::make('account.login');
	}

	public function postLogin(){

		
	}

}


?>