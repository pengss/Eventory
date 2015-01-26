<?php

class SponsorController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /sponsor
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /sponsor/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /sponsor
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		$id = Auth::user() -> id; //get the id of the current user to be used during creation

		$data = Input::only(['target_audience','turnout','event_types','sponsorship']);

		if($data != null){

			if(count($data['target_audience']) != 0){
				foreach($data['target_audience'] as $targetAudience){
					$newSponsorAudience =[
										 [
										 	'sponsor_id' => $id,
										 	'audience_id' => $targetAudience
										 ]	
										 ];
					DB::table('sponsor_audience') -> insert($newSponsorAudience);
				}
			}

			if(count($data['event_types']) != 0){
				foreach($data['event_types'] as $eventTypes){
					$newSponsorEventType =[
										 [
										 	'sponsor_id' => $id,
										 	'event_type_id' => $eventTypes
										 ]	
										 ];
					DB::table('sponsor_event_type') -> insert($newSponsorEventType);
				}
			}

			$wantedSponsorshipId = DB::table('type_of_sponsorship') -> where('sponsorship_type', $data['sponsorship']) -> pluck('id');
			$newSponsorship = [
							  [
								 'sponsor_id' => $id,
								 'sponsorship_type_id' => $wantedSponsorshipId
						 	  ]
						 	  ];
			DB::table('sponsor_sponsorship_type') -> insert($newSponsorship);

			$newSponsorTurnout =[
							 [
								'sponsor_id' => $id,
								'expected_turnout' => $data['turnout']
							 ]
							 ];
			DB::table('sponsor_turnout') -> insert($newSponsorTurnout);
			return View::make('users.sponsor_profile');
		}
		else{
			return 'Error';
		}
	}

	/**
	 * Display the specified resource.
	 * GET /sponsor/{id}
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
	 * GET /sponsor/{id}/edit
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
	 * PUT /sponsor/{id}
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
	 * DELETE /sponsor/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	public function sponsorCategory(){
		return View::make('sponsor.category');
	}

	public function sendEmail() {	
		$id = Auth::user() -> id; //retrieve the id of logged in user
		$username = DB::table('users')->where('id', $id)->pluck('username'); //retrieve the username of the logged in user

		Mail::send('emails.welcome', array('username'=>$username), function($message){
			$id = Auth::user() -> id; //retrieve the id of logged in user
			$email = DB::table('users')->where('id', $id)->pluck('email'); //retrieve the email of the logged in user
			$username = DB::table('users')->where('id', $id)->pluck('username'); //retrieve the username of the logged in user
			$message->to($email, $username)->subject('Welcome to Eventory!');
		});
	}
}