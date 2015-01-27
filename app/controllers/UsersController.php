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
		$data = Input::only(['name','username','password','email','organisation','user_type']);

		$organizationId = DB::table('organization')->where('name', $data['organisation'])-> pluck('id');

        $newUser = [
            [
                'username' => $data['username'],
                'password' => Hash::make($data['password']),
                'name' => $data['name'],
                'email' => $data['email'],
                'organization_id' => $organizationId,
                'user_type' => $data['user_type']
            ]
            ];
        $name = DB::table('users')->where('username', $data['username']) -> pluck('name');
   
        if($name == null){
        	DB::table('users')->insert($newUser); 
        	return View::make('users.index');
        }
		else{
			$errors = new MessageBag(['username' => ['Username is taken']]);
        	return Redirect::back()->withErrors($errors)->withInput(Input::except('password'));
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
		return View::make('users.event_organiser_profile'); //Links to the Event Organiser Page
	}

	public function sponsorProfile(){
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
}