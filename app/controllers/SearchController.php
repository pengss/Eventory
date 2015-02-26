<?php

class SearchController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /search
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /search/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /search
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /search/{id}
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
	 * GET /search/{id}/edit
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
	 * PUT /search/{id}
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
	 * DELETE /search/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	public function sponsorSearchByType(){
		$type = Input::only(['example-chosen']);

		$selectedEventArray = DB::table('events_type')->where('event_type_id', $type)->select('event_id')->get();

		$wantedEvents = array();

		$allEvents = DB::table('event')->get();

		$event_types = array();

		$event_audiences = array();

		if($type['example-chosen'] == 'Select All'){
			foreach($allEvents as $currentEvent){
				array_push($wantedEvents, $currentEvent);
			}
		}
		else{
			foreach($selectedEventArray as $eventId){
				$selectedEventid = $eventId -> event_id;
				foreach($allEvents as $currentEvent){
					$currentEventId = $currentEvent -> id;
					if($currentEventId == $selectedEventid){
						array_push($wantedEvents, $currentEvent);
					}
				}
			}
		}

		foreach($wantedEvents as $current){
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

		View::share('wantedEvents', $wantedEvents);
		View::share('wanted_event_types', $event_types);
		View::share('wanted_event_audiences', $event_audiences);

		return View::make('sponsor.search_result');
	}

	public function viewThisEvent($myEvent){
		$selectedEvent = DB::table('event')->where('event_name', $myEvent)->first(); //select the event from the database using eventName passed in from route
		
		$selectedId = $selectedEvent -> creator_id;

		$event_types = DB::table('event')->join('events_type', 'event.id', '=', 'events_type.event_id')
		->join('type_of_events', 'events_type.event_type_id', '=', 'type_of_events.id')
		->select('event.id', 'type')
		->get();
		$event_audiences = DB::table('event')->join('events_audience', 'event.id', '=', 'events_audience.event_id')
		->join('target_audience', 'events_audience.audience_id', '=', 'target_audience.id')
		->select('event.id', 'type')
		->get();

		$event_presences = DB::table('event')->join('presence', 'event.id', '=', 'presence.event_id')
		->join('presence_types', 'presence.presence_type_id', '=', 'presence_types.id')
		->select('event.id as Event_ID', 'presence.id', 'type', 'price', 'presence.description')
		->get();

		View::share('selectedEvent', $selectedEvent); //share the selectedEvent accross the Views 
		View::share('event_types', $event_types);
		View::share('event_audiences', $event_audiences);
		View::share('event_presences', $event_presences);
		//View::share('selectedOrganisation', $selectedOrganisation);


		return View::make('sponsor.view_this_event'); //return to page with the information of the selected page
	}
}