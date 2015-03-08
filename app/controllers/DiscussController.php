<?php

class DiscussController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /discuss
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /discuss/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /discuss
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /discuss/{id}
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
	 * GET /discuss/{id}/edit
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
	 * PUT /discuss/{id}
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
	 * DELETE /discuss/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	public function storeDiscussion($id){

		$sponsorId = Auth::user() -> id;

		$data = Input::only(['discuss_content']);

		$eventId = $id;

		$creatorId = DB::table('event') -> where('id', $id) -> pluck('creator_id');

		$newDiscuss = [
					  [
					  	'sponsor_id' => $sponsorId,
					  	'creator_id' => $creatorId,
					  	'event_id' => $eventId,
					  	'content' => $data['discuss_content']
					  ]
					  ];
		if($newDiscuss != null){
			DB::table('discuss') -> insert($newDiscuss);
			return View::make('sponsor.discuss_success');
		}
	}

	public function discussEmail($eventId, $sponsorId, $content) {
		Mail::send('emails.discuss', array('sponsorId'=>$sponsorId, 'eventId'=>$eventId, 'content'=>$content), function($message){
			$message->to('support@eventory.com.sg')->subject('Discuss Email Support');
		});	
	}
}