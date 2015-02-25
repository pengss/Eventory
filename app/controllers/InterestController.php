<?php

class InterestController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /interest
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /interest/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /interest
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		$data = Input::only(['name','email', 'details', 'event_date']);

		if($data != null){
			$newInterest = [
						   [
						   		'name' => $data['name'],
						   		'mail' => $data['email'],
						   		'event_name' => $data['details'],
						   		'date' => $data['event_date']
						   ]
						   ];
			DB::table('interested_event_organiser') -> insert($newInterest);
			return View::make('users.interest_success');
		}
	}

	/**
	 * Display the specified resource.
	 * GET /interest/{id}
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
	 * GET /interest/{id}/edit
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
	 * PUT /interest/{id}
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
	 * DELETE /interest/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	public function processInterest($presence){
		$id = Auth::user() -> id;

		$presenceId = $presence;

		$eventId = DB::table('presence') -> where('id', $presenceId) -> pluck('event_id');

		$newPresenceSponsor = [
							  [
							  	'sponsor_id' => $id,
							  	'presence_id' => $presenceId,
							  	'event_id' => $eventId
							  ]
							  ];

		$check = DB::table('presence_sponsor') -> where('sponsor_id', $id) -> where('presence_id', $presenceId) -> 
		where('event_id', $eventId) -> get();

		if($check != null){
			return View::make('sponsor.error');
		}

		if($newPresenceSponsor != null){
			DB::table('presence_sponsor')->insert($newPresenceSponsor);
			return View::make('sponsor.success_payment');
		}
		return View::make('sponsor.success_payment');
	}

}