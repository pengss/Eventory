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
		$data = Input::only(['email', 'details', 'event_date']);

		if($data != null){
			$newInterest = [
						   [
						   		'mail' => $data['email'],
						   		'event_name' => $data['details'],
						   		'date' => $data['event_date']
						   ]
						   ];
			DB::table('interested_event_organiser') -> insert($newInterest);
			return View::make('users.index');
		}
		else{
			return "error";
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

}