<?php

class PaymentController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /payment
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /payment/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /payment
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /payment/{id}
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
	 * GET /payment/{id}/edit
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
	 * PUT /payment/{id}
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
	 * DELETE /payment/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	public function processPayment($selectedEvent, $selectPresence){
		$id = Auth::user() -> id;

		$eventId = $selectEvent -> id;

		$presenceId = DB::table('presence_types')->where('type', $selectPresence)->pluck('id');

		$newPresenceSponsor = [
							  [
							  	'sponsor_id' => $id,
							  	'presence_id' => $presenceId,
							  	'event_id' => $eventId
							  ]
							  ];

		if($newPresenceSponsor != null){
			DB::table('presence_sponsor')->insert($newPresenceSponsor);
		}
	}
}