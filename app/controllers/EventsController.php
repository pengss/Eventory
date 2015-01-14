<?php

class EventsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /events
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /events/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /events
	 *
	 * @return Response
	 */
	public function store()
	{
		$id = Auth::user() -> id; //get the id of the current user to be used during creation

		$data = Input::only(['event_name','banner','location','event_type','turnout','target_audience','description','organisation_info', 'start_date', 'end_date',
			'start_time', 'end_time', 'facebook', 'facebook_event', 'twitter', 'instagram', 'website']); //retrieve all the inputs by the user

		$newEvent = [ //create instance of a new event with current user id and all the inputs by the user
            [
                'event_organiser_id' => $id,
                'event_name' => $data['event_name'],
                'banner' => $data['banner'],
                'location' => $data['location'],
                'event_type' => $data['event_type'],
                'turnout' => $data['turnout'],
                'target_audience' => $data['target_audience'],
                'description' => $data['description'],
                'organisation_info' => $data['organisation_info'],
                'start_date' => $data['start_date'],
                'end_date' => $data['end_date'],
                'start_time' => $data['start_time'],
                'end_time' => $data['end_time'],
                'facebook' => $data['facebook'],
                'facebook_event' => $data['facebook_event'],
                'twitter' => $data['twitter'],
                'instagram' => $data['instagram'],
                'website' => $data['website']
            ]
            ];

       	DB::table('event')->insert($newEvent); //insert event into the database

       	$event = DB::table('event') -> where('event_name', $data['event_name']) -> first();

       	/*$eventId = DB::table('event') -> where('event_name', $data['event_name']) -> pluck('id');
       	$eventType = DB::table('event') -> where('event_name', $data['event_name']) -> pluck('event_type');

       	$eventTypeId = DB::table('list_event_type') -> where('type', $eventType) -> pluck('id');

       	$newEventType = [
       		[
       			'event_id' => $eventId,
       			'event_type_id' => $eventTypeId
       		]
       		];

       	DB::table('event_type') -> insert($newEventType);*/
       	return $this -> findRelevantSponsor($event);	    
	}

	/**
	 * Display the specified resource.
	 * GET /events/{id}
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
	 * GET /events/{id}/edit
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
	 * PUT /events/{id}
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
	 * DELETE /events/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	public function createEvent(){ //redirect user to create event page
		return View::make('events.create'); //redirect to create.blade.php
	}

	public function viewAllEvents(){ //redirect users to view all the listed events
		$id = Auth::user() -> id; //checks for current user's id

		$events = DB::table('event')->where('event_organiser_id', '=', $id)->get(); //retrieve all events with the user's id from the database

		View::share('events', $events); //share the variable accross all views, such that there is direct access to this variable

		return View::make('events.view_all_events'); //return to page with all events listed
		//return $events;
	}

	public function viewMyEvent($myEvent){ //redirect users to specific events that they chose
		$selectedEvent = DB::table('event')->where('event_name', $myEvent)->first(); //select the event from the database using eventName passed in from route
		
		$selectedId = $selectedEvent -> event_organiser_id;

		$selectedUser = DB::table('users')->where('id', $selectedId) -> pluck('organisation');

		$selectedOrganisation = DB::table('organisation')->where('name', $selectedUser)->first();

		View::share('selectedEvent', $selectedEvent); //share the selectedEvent accross the Views 
		View::share('selectedOrganisation', $selectedOrganisation);

		return View::make('events.view_selected_event'); //return to page with the information of the selected page
	}

	public function editMyEvent($myEvent){ //redirect users to edit event page with all past information filled
		$editEvent = DB::table('event')->where('event_name', $myEvent)->first(); //select the specific instance of event from database

		return View::make('events.edit_my_event', compact('editEvent')); //share this variable accross views
	}

	public function handleEditMyEvent($myEvent){ //updates database based on the inputs by the user
		$data = Input::only(['event_name','banner','location','turnout','description','organisation_info', 'start_date', 'end_date',
			'start_time', 'end_time', 'facebook', 'facebook_event', 'twitter', 'instagram', 'website']); //retrieve all the inputs by the user

		DB::table('event') -> where('event_name', $myEvent) -> update(array('event_name' => $data['event_name'], 'banner' => $data['banner'], 
			'location' => $data['location'], 'turnout' => $data['turnout'], 'description' => $data['description'], 'organisation_info' => $data['organisation_info'],
			'start_date' => $data['start_date'], 'end_date' => $data['end_date'], 'start_time' => $data['start_time'], 'end_time' => $data['end_time'],
			'facebook' => $data['facebook'], 'facebook_event' => $data['facebook_event'], 'twitter' => $data['twitter'], 'instagram' => $data['instagram'], 'website' => $data['website'])); 
			//updates the event table based on the event chosen

		$id = Auth::user() -> id; //checks for current user's id

		$events = DB::table('event')->where('event_organiser_id', '=', $id)->get(); //retrieve all events with the user's id from the database

		View::share('events', $events); //share the variable accross all views, such that there is direct access to this variable

		return View::make('events.view_all_events'); //successfully updates the database and return to all events page
	}

	public function createPresence($myEvent){
		$currentEvent = DB::table('event')->where('event_name', $myEvent)->first(); //select the specific instance of event from database

		return View::make('events.create_presence', compact('currentEvent')); //return the page to create presence for a certain event
	}

	public function handleCreatePresence($myEvent){
		$data = Input::only(['presence_type', 'presence_quantity', 'presence_price']); //retrieve all inputs by the user

		$currentEventId = DB::table('event') -> where('event_name', $myEvent) -> pluck('id'); //retrieve current event's id from the database

		if($data != null){
			$newPresence = [ //create instance of a new presence with current event id and all the inputs by the user
            [
                'event_id' => $currentEventId,
                'presence_type' => $data['presence_type'],
                'presence_quantity' => $data['presence_quantity'],
                'presence_price' => $data['presence_price']
            ]
            ];

            DB::table('presence') -> insert($newPresence);
            return 'successful';
		}
		else{
			return 'error';
		}
	}

	public function findRelevantSponsor($currentEvent){
		$sponsors = DB::table('sponsor') -> get();

		$currentEventId = $currentEvent -> id;

		$eventType = $currentEvent -> event_type;
		$eventTypeArray = explode(',', $eventType);

		$turnout = $currentEvent -> turnout;

		$targetAudience = $currentEvent -> target_audience;
		$targetAudienceArray = explode(',', $targetAudience);

		$relevantSponsor = "";

		foreach($sponsors as $sponsor){
			$score = 0;
			$sponsorId = $sponsor -> sponsor_id;
			$sponsorEventType = $sponsor -> event_type;
			$sponsorExpectedTurnOut = $sponsor -> minimum_turnout;
			$sponsorTargetAudience = $sponsor -> target_audience;

			$eventTypeArraySponsor = explode(',', $sponsorEventType);
			$targetAudienceArraySponsor = explode(',', $sponsorTargetAudience);

			foreach($eventTypeArraySponsor as $eventTypeSponsor){
				foreach($eventTypeArray as $event){
					if($event == $eventTypeSponsor){
						$score = $score + 5;
					}
				}
			}

			if($targetAudience >= $sponsorExpectedTurnOut){
				$score = $score + 25;
			}

			foreach($targetAudienceArraySponsor as $targetAudienceSponsor){
				foreach($targetAudienceArray as $audience){
					if($audience == $targetAudienceSponsor){
						$score = $score + 5;
					}
				}
			}

			if($score >= 50){
				$relevantSponsor .= $sponsorId ;
				$relevantSponsor .= ',';
			}

			DB::table('event') -> where('id', $currentEventId)
			                   -> update(array('relevant_sponsor' => $relevantSponsor));
		}
		return $eventTypeArray;
	}
}	