<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function podRss()
	{
		$episodes=Episode::orderBy('created_at', 'desc')->get();

		return View::make('podRss', array('episodes' => $episodes));
	}
	public function add()
	{
		$episodes=Episode::all();
		return View::make('add', array('episodes' => $episodes));
	}
	public function addForm()
	{
		$data = Input::all();
		//echo json_encode($data);
		//$data['image']=
		$name = Input::file('sound')->getClientOriginalName();
		$name=urlencode($name);
		$destinationPath="./app/storage/mp3/";
		Input::file('sound')->move($destinationPath,$name);
		$data['url']=$name;
		$episode=new Episode($data);
		$episode->save();
		return Redirect::to('admin');
	}

	public function episodes($url){
		$episode=Episode::Where("url","=",$url)->get();
		$episode[0]->views=$episode[0]->views+1;
		$episode[0]->save();
		$response= Response::download("./app/storage/mp3/".$episode[0]->url);
		ob_end_clean();
		return $response;

	}
	public function admin()
	{
		$episodes=Episode::all()->sortBy('created_at');
		return View::make('admin', array('episodes' => $episodes));
	}

	public function delete($id){
		Episode::find($id)->delete();
		return Redirect::to('admin');
	}

	/*public function addUser()
	{

		$user = new User();
		$user->email="joaxax@gmail.com";
		$user->password=Hash::make('EnFisk');

		$user->save();


		return View::respons("usersAdded");
	}*/

}
