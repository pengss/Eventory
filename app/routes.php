<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('users.index');
});

Route::get('index', array('as' => 'index', 'uses' => 'UsersController@login')); //route to display log in form

Route::post('/index', array('as' => 'index', 'uses' => 'UsersController@handleLogin')); //route to process log in

Route::get('create_organisation', array('as' => 'create_organisation', 'uses' => 'UsersController@createOrganisation')); //route to display create Organisation form

Route::post('/create_organisation', array('as' => 'create_organisation', 'uses' => 'UsersController@handleCreateOrganisation')); //route to process create Organisation

Route::resource('user', 'UsersController');

Route::resource('sponsorCreate', 'SponsorCreateController');

Route::resource('interest', 'InterestController');

Route::group(array('before' => 'auth'), function()
{
	Route::group(array('before' => 'onlyAllowSponsor'), function(){
		Route::get('/sponsorProfile', array('as' => 'sponsorProfile', 'uses' => 'UsersController@sponsorProfile')); //route to display Sponsor Profile
		
		Route::get('sponsor_category', array('as' => 'sponsor_category', 'uses' => 'SponsorController@sponsorCategory')); //route for Sponsors to add their categories
		
		Route::get('send_email', array('as' => 'send_email', 'uses' => 'SponsorController@sendEmail'));

		Route::get('find_events', array('as' => 'find_events', 'uses' => 'SponsorController@findEvents' )); //route to view all events

		Route::post('/find_events', array('as' => 'find_events', 'uses' => 'SearchController@sponsorSearchByType'));

		Route::get('view_this_event/{myEvent}', array('as' => 'view_this_event', 'uses' => 'SearchController@viewThisEvent' )); //route to view specific event

		Route::get('relevant_events', array('as' => 'relevant_events', 'uses' => 'SponsorController@getRelevantEvents'));

		Route::post('discuss/{id}', array('as' => 'discuss', 'uses' => 'DiscussController@storeDiscussion' )); 

		Route::get('success_payment', array('as' => 'success_payment', 'uses' => 'SponsorController@successPayment'));

		Route::get('/process_interest/{presence}', array('as' => 'process_interest', 'uses' => 'InterestController@processInterest'));

		Route::resource('sponsor', 'SponsorController');

		Route::resource('discuss', 'DiscussController');
	});

	Route::group(array('before' => 'onlyAllowEventOrganiser'), function(){
		Route::get('/eventOrganiserProfile', array('as' => 'eventOrganiserProfile', 'uses' => 'UsersController@eventOrganiserProfile')); //route to display Event Organiser Profile

		Route::get('create_event', array('as' => 'create_event', 'uses' => 'EventsController@createEvent')); //route to create event page

		Route::get('create_presence/{myEvent}', array('as' => 'create_presence', 'uses' => 'EventsController@createPresence')); //route to create presence page

		Route::post('/create_presence/{myEvent}', array('as' => 'create_presence', 'uses' => 'EventsController@handleCreatePresence')); //route to process created presence

		Route::get('view_events', array('as' => 'view_events', 'uses' => 'EventsController@viewMyEvents' )); //route to view all events

		Route::get('view_my_event/{myEvent}', array('as' => 'view_my_event', 'uses' => 'EventsController@viewMyEvent' )); //route to view specific event

		Route::get('edit_my_event/{myEvent}', array('as' => 'edit_my_event', 'uses' => 'EventsController@editMyEvent')); //route to edit specific event with form filled

		//Route::post('/edit_my_event/{myEvent}', array('as' => 'edit_my_event', 'uses' => 'EventsController@handleEditMyEvent'));

		Route::get('/success', array('as' => 'success', 'uses' => 'EventsController@createPresence')); //display success page after creating event

		Route::get('successEvent', array('as' => 'successEvent', 'uses' => 'EventsController@success'));

		Route::resource('event', 'EventsController');

		Route::resource('editEvent', 'EditEventController');


	});

	Route::get('/logout', array('as' => 'logout', 'uses' => 'UsersController@logout')); //route to process logout
});
