<?php

class SponsorInterestController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /sponsorinterest
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /sponsorinterest/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /sponsorinterest
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		$data = Input::only(['name','email', 'organisationName']);

		if($data != null){
			$newInterest = [
						   [
						   		'name' => $data['name'],
						   		'mail' => $data['email'],
						   		'organisation_name' => $data['organisationName'],
						   ]
						   ];
			DB::table('interested_sponsor') -> insert($newInterest);

			Mail::send('emails.sponsor_interest', array('email'=>$data['email'], 'organisation_name'=>$data['organisationName'], 'name'=>$data['name']), function($message){
				$message->to('support@eventory.com.sg', Input::get('name'))->subject('Eventory - Sponsor Interest Confirmed');
			});

			return View::make('sponsor.success_interest');
		}
	}

	/**
	 * Display the specified resource.
	 * GET /sponsorinterest/{id}
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
	 * GET /sponsorinterest/{id}/edit
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
	 * PUT /sponsorinterest/{id}
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
	 * DELETE /sponsorinterest/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}