<?php

class EventController extends BaseController {

    /*
    |--------------------------------------------------------------------------
    | Default Home Controller
    |--------------------------------------------------------------------------
    |
    | You may wish to use controllers instead of, or in addition to, Closure
    | based routes. That's great! Here is an example controller method to
    | get you started. To route to this controller, just add the route:
    |
    |	Route::get('/', 'HomeController@showWelcome');
    |
    */

    public function showHome()
    {
        return View::make('home');
    }

    public function showBasicNeeds()
    {
        return View::make('basic-needs');
    }

    public function getEvent($id)
    {
        $event = Myevent::find($id);
        return View::make('event', compact('event'));

    }

    public function register($id)
    {
        print 'LOL!';
    }



}
