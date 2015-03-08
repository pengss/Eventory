<?php

use Illuminate\Support\MessageBag;

class UsersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /users
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /users/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return View::make('users.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /users
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		$data = Input::only(['name','username','password','email','org_name','org_info']);

		$file = Input::file('org_logo');

		$bannerPath = '';

		if($file){

			$name = $file->getClientOriginalName();

			$destinationPath = 'public/uploads/';
			
			$bannerPath = 'public/uploads/'.$name;

			Input::file('org_logo')->move($destinationPath, $name);
		}
		else{
			$bannerPath = 'images/photo18.jpg';
		}

		$newOrganisation = [
						   [
						   		'name' => $data['org_name'],
						   		'description' => $data['org_info'],
						   		'logo' => $bannerPath
						   ]
						   ];

        $name = DB::table('users')->where('username', $data['username']) -> pluck('name');
   
        if($name == null){
        	DB::table('organization') -> insert($newOrganisation);
			$organizationId = DB::table('organization') -> where('name', $data['org_name']) -> pluck('id');

			$newUser = [
            [
                'username' => $data['username'],
                'password' => Hash::make($data['password']),
                'name' => $data['name'],
                'email' => $data['email'],
                'organization_id' => $organizationId,
                'user_type' => 'Event Organizer'
            ]
            ];

        	DB::table('users')->insert($newUser); 

        	Mail::send('emails.welcome', array('username'=>$data['username'], 'password'=>$data['password']), function($message){
				//$email = DB::table('users')->where('username', $data['username'])->pluck('email'); 
				//$username = DB::table('users')->where('id', $id)->pluck('username'); 
				$message->to(Input::get('email'), Input::get('username'))->subject('Welcome to Eventory!');
			});

        	return View::make('users.sign_up_success');
        }
		
		else{
			$errors = new MessageBag(['username' => ['Username is taken']]);
        	return Redirect::back()->withErrors($errors)->withInput(Input::except('password', 'org_logo'));
        }
	}

	/**
	 * Display the specified resource.
	 * GET /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /users/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	public function login(){ //Links to Login Page
		return View::make('users.index');
	}

	//Handles login and check whether user is Event Organiser or Sponsor
	public function handleLogin(){

		$data = Input::only(['username', 'password']);
		$userType = DB::table('users')->where('username', $data['username'])->pluck('user_type'); //SQL statement to retrieve user_type

        if(Auth::attempt(['username' => $data['username'], 'password' => $data['password']], true)){ //Laravel method to authenticate
        	if($userType == "Event Organizer"){
        		return Redirect::to('eventOrganiserProfile'); //If user is Event Organiser, send redirect to Event Organiser Page
        	}	
        	else if($userType == "Sponsor"){
        		return Redirect::to('sponsorProfile'); //If user is Sponsor, send redirect to Sponsor Page
        	}
        }
        return Redirect::route('index')->withInput(); //If fail, send redirect to login page
	}

	public function eventOrganiserProfile(){
		$name = Auth::user()->name;
		View::share('nameOfEventOrganiser', $name);
		return View::make('users.event_organiser_profile'); //Links to the Event Organiser Page
	}

	public function sponsorProfile(){
		$name = Auth::user()->name;
		View::share('nameOfSponsor', $name);
		return View::make('users.sponsor_profile'); //Links to Sponsor Page
	}

	public function logout(){ //Handles logout
		if(Auth::check()){
  		Auth::logout();
		}
 		return Redirect::route('index');
	}

	public function createOrganisation(){
		return View::make('users.create_organisation');
	}

	public function handleCreateOrganisation(){
		$data = Input::only(['name','description']);
		$testDescription = DB::table('organization')->where('name', $data['name'])->pluck('description');

		if($testDescription == null){
			
			$newOrganisation = [
            [
                'name' => $data['name'],
                'description' => $data['description']
            ]
            ];

            DB::table('organization')->insert($newOrganisation);
            return View::make('users.create');
		}

		return Redirect::to('create_organisation');
	}

	public function sponsorHome(){
		return View::make('users.sponsor');
	}

	/*
	public function successSignupEmail($username, $password) {
		Mail::send('emails.welcome', array('username'=>$username, 'password'=>$password), function($message){
			$email = DB::table('users')->where('username', $username)->pluck('email'); //retrieve the email of the logged in user
			$username = DB::table('users')->where('id', $id)->pluck('username'); //retrieve the username of the logged in user
			$message->to($email, $username)->subject('Welcome to Eventory!');
		});

		return View::make('user.sign_up_success');
	}*/

	public function resetPasswordEmail($password) {
		$id = Auth::user() -> id; //retrieve the id of logged in user
		$username = DB::table('users')->where('id', $id)->pluck('username'); //retrieve the username of the logged in user

		Mail::send('emails.password_reset', array('username'=>$username, 'password'=>$password), function($message){
			$id = Auth::user() -> id; //retrieve the id of logged in user
			$email = DB::table('users')->where('id', $id)->pluck('email'); //retrieve the email of the logged in user
			$username = DB::table('users')->where('id', $id)->pluck('username'); //retrieve the username of the logged in user
			$message->to($email, $username)->subject('Password Reset');
		});
	}
}
