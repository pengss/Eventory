<?php

class SponsorCreateController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /sponsorcreate
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /sponsorcreate/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return View::make('users.create_sponsor');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /sponsorcreate
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
                'user_type' => 'Sponsor'
            ]
            ];

        	DB::table('users')->insert($newUser); 
        	return View::make('sponsor.sign_up_success');
        }
		
		else{
			$errors = new MessageBag(['username' => ['Username is taken']]);
        	return Redirect::back()->withErrors($errors)->withInput(Input::except('password', 'org_logo'));
        }
	}

	/**
	 * Display the specified resource.
	 * GET /sponsorcreate/{id}
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
	 * GET /sponsorcreate/{id}/edit
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
	 * PUT /sponsorcreate/{id}
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
	 * DELETE /sponsorcreate/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}