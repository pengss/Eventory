<?php

class EditEventController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /editevent
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /editevent/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /editevent
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		$data = Input::only(['event_name','location','start_date','end_date','start_time','end_time','event_types','target_audience',
			'banner', 'turnout','desc', 'facebook', 'facebook_event', 'twitter', 'instagram', 'website',
			'presence', 'description', 'price', 'slot']); //retrieve all the inputs by the user

		$file = Input::file('banner');
		$name = $file->getClientOriginalName();

		$destinationPath = 'public/uploads/';

		$bannerPath = '';

		if($file){
			
			$bannerPath = 'public/uploads/'.$name;

			Input::file('banner')->move($destinationPath, $name);
		}
		else{
			$bannerPath = 'images/photo18.jpg';
		}

		DB::table('event') -> where('event_name', $data['event_name']) -> update(array('event_name' => $data['event_name'], 'banner' => $bannerPath, 
			'location' => $data['location'], 'turnout' => $data['turnout'], 'description' => $data['desc'],'start_date' => $data['start_date'],
			'end_date' => $data['end_date'], 'start_time' => $data['start_time'], 'end_time' => $data['end_time'], 'facebook' => $data['facebook'],
			'facebook_event' => $data['facebook_event'], 'twitter' => $data['twitter'], 'instagram' => $data['instagram'], 'website' => $data['website'])); 
			//updates the event table based on the event chosen

		$eventId = DB::table('event') -> where('event_name', $data['event_name']) -> pluck('id');

		DB::table('events_audience') -> where('event_id', $eventId) -> delete();

		DB::table('events_type') -> where('event_id', $eventId) -> delete();

		DB::table('presence') -> where('event_id', $eventId) -> delete();

		if(count($data['event_types']) != 0){
       		foreach($data['event_types'] as $eventType){
       			$newEventType = [
       			[
       			'event_id' => $eventId,
       			'event_type_id' => $eventType
       			]
       			];
       			DB::table('events_type')->insert($newEventType);
       		}
       	}

       	if(count($data['target_audience']) != 0){
       		foreach($data['target_audience'] as $targetAudience){
       			$newTargetAudience = [
       			[
       			'event_id' => $eventId,
       			'audience_id' => $targetAudience
       			]
       			];
       			DB::table('events_audience')->insert($newTargetAudience);
       		}
       	}

       	$presence = $data['presence'];
       	$description = $data['description'];
       	$price = $data['price'];
       	$slot = $data['slot'];

 		$noOfPresence = sizeof($data['presence']);

 		for($x = 0; $x < $noOfPresence; $x++){
 			$presenceId = $presence[$x];
 			$currentDescription = $description[$x];
 			$currentPrice = $price[$x];
 			$currentSlot = $slot[$x];

 			$newPresence = [
 						   [
 						   		'presence_type_id' => $presenceId,
 						   		'description' => $currentDescription,
 						   		'price' => $currentPrice,
 						   		'slot' => $currentSlot,
 						   		'event_id' => $eventId
 						   ]
 						   ];
 			if($newPresence != null){
 				DB::table('presence') -> insert($newPresence);
 			}
 		}


		$id = Auth::user() -> id; //checks for current user's id

		$events = DB::table('event')->where('creator_id', '=', $id)->get(); //retrieve all events with the user's id from the database

		$event_types = array();

		$event_audiences = array();

		foreach($events as $current){
			$currentEventId = $current -> id;
			$event_types = DB::table('event')->join('events_type', 'event.id', '=', 'events_type.event_id')
			->join('type_of_events', 'events_type.event_type_id', '=', 'type_of_events.id')
			->select('event.id', 'type')
			->get();
			$event_audiences = DB::table('event')->join('events_audience', 'event.id', '=', 'events_audience.event_id')
			->join('target_audience', 'events_audience.audience_id', '=', 'target_audience.id')
			->select('event.id', 'type')
			->get();
		}

		View::share('events', $events); //share the variable accross all views, such that there is direct access to this variable
		View::share('event_types', $event_types);
		View::share('event_audiences', $event_audiences);

		return View::make('events.view_all_events'); //return to page with all events listed
	}

	/**
	 * Display the specified resource.
	 * GET /editevent/{id}
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
	 * GET /editevent/{id}/edit
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
	 * PUT /editevent/{id}
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
	 * DELETE /editevent/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}