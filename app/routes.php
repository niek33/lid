<?php
Route::get('/', 'HomeController@showHome');
Route::get('/basic-needs', 'HomeController@showBasicNeeds');
Route::get('/events', 'HomeController@showEvents');
Route::get('/event/{id}/register', 'EventController@register');
Route::get('/event/{id}/{name}', array('as' => 'event', 'uses' => 'EventController@getEvent'))->where('id', '[1-9][0-9]*');
Route::controller('users', 'UsersController');

// Admin routes


Route::group(array('prefix' => 'admin', 'before' => 'isAdmin'), function () {



	// Route::get('/', );

	Route::get('/', function() {
        return View::make('admin.index');
    });


    Route::resource('events', 'AdminEventsController');

});

// Static pages routes
Route::get('/about/', function() {
    return View::make('about');
});

Route::get('/event/', function() {
    return View::make('about');
});
	

Route::get('/team/', function() {
    return View::make('team');
});

Route::get('/contact/', function() {
    return View::make('contact');
});




