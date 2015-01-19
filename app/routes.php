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
	return View::make('hello');
});

Route::get('index', array('as' => 'index', 'uses' => 'UsersController@login')); //route to display log in form

Route::post('/index', array('as' => 'index', 'uses' => 'UsersController@handleLogin')); //route to process log in

Route::get('create_organisation', array('as' => 'create_organisation', 'uses' => 'UsersController@createOrganisation')); //route to display create Organisation form

Route::post('/create_organisation', array('as' => 'create_organisation', 'uses' => 'UsersController@handleCreateOrganisation')); //route to process create Organisation

Route::resource('user', 'UsersController');

Route::get('/sponsorProfile', array('as' => 'sponsorProfile', 'uses' => 'UsersController@sponsorProfile')); //route to display Sponsor Profile
Route::get('sponsor_category', array('as' => 'sponsor_category', 'uses' => 'SponsorController@sponsorCategory')); //route for Sponsors to add their categories
Route::resource('sponsor', 'SponsorController');

Route::get('/eventOrganiserProfile', array('as' => 'eventOrganiserProfile', 'uses' => 'UsersController@eventOrganiserProfile')); //route to display Event Organiser Profile

Route::get('create_event', array('as' => 'create_event', 'uses' => 'EventsController@createEvent')); //route to create event page

Route::get('create_presence/{myEvent}', array('as' => 'create_presence', 'uses' => 'EventsController@createPresence')); //route to create presence page

Route::post('/create_presence/{myEvent}', array('as' => 'create_presence', 'uses' => 'EventsController@handleCreatePresence')); //route to process created presence

Route::get('view_events', array('as' => 'view_events', 'uses' => 'EventsController@viewAllEvents' )); //route to view all events

Route::get('view_my_event/{myEvent}', array('as' => 'view_my_event', 'uses' => 'EventsController@viewMyEvent' )); //route to view specific event

Route::get('edit_my_event/{myEvent}', array('as' => 'edit_my_event', 'uses' => 'EventsController@editMyEvent')); //route to edit specific event with form filled

Route::post('/edit_my_event/{myEvent}', array('as' => 'edit_my_event', 'uses' => 'EventsController@handleEditMyEvent'));

Route::resource('event', 'EventsController');

Route::get('/logout', array('as' => 'logout', 'uses' => 'UsersController@logout')); //route to process logout

/*Route::group(array('before' => 'auth'), function()
{
	Route::group(array('before' => 'onlyAllowSponsor'), function(){
		Route::get('/sponsorProfile', array('as' => 'sponsorProfile', 'uses' => 'UsersController@sponsorProfile')); //route to display Sponsor Profile
		Route::get('sponsor_category', array('as' => 'sponsor_category', 'uses' => 'SponsorController@sponsorCategory')); //route for Sponsors to add their categories
		Route::resource('sponsor', 'SponsorController');
	});

	Route::group(array('before' => 'onlyAllowEventOrganiser'), function(){
		Route::get('/eventOrganiserProfile', array('as' => 'eventOrganiserProfile', 'uses' => 'UsersController@eventOrganiserProfile')); //route to display Event Organiser Profile

		Route::get('create_event', array('as' => 'create_event', 'uses' => 'EventsController@createEvent')); //route to create event page

		Route::get('create_presence/{myEvent}', array('as' => 'create_presence', 'uses' => 'EventsController@createPresence')); //route to create presence page

		Route::post('/create_presence/{myEvent}', array('as' => 'create_presence', 'uses' => 'EventsController@handleCreatePresence')); //route to process created presence

		Route::get('view_events', array('as' => 'view_events', 'uses' => 'EventsController@viewAllEvents' )); //route to view all events

		Route::get('view_my_event/{myEvent}', array('as' => 'view_my_event', 'uses' => 'EventsController@viewMyEvent' )); //route to view specific event

		Route::get('edit_my_event/{myEvent}', array('as' => 'edit_my_event', 'uses' => 'EventsController@editMyEvent')); //route to edit specific event with form filled

		Route::post('/edit_my_event/{myEvent}', array('as' => 'edit_my_event', 'uses' => 'EventsController@handleEditMyEvent'));

		Route::resource('event', 'EventsController');
	});

	Route::get('/logout', array('as' => 'logout', 'uses' => 'UsersController@logout')); //route to process logout
});*/
