<?php
 
class AdminEventsController extends BaseController {
 
	public function index()
	{
		$events = Myevent::all();

    	return View::make('admin.events.index', compact('events'));
	}

    public function create()
    {
        return View::make('admin.posts.create');
    }

    public function store()
    {
        $validator = Validator::make($data = Input::all(), Myevent::$rules);

        if ($validator->fails())
        {
            return Redirect::back()->withErrors($validator)->withInput();
        }

        Myevent::create($data);

        return Redirect::route('admin.events.index');
    }

    public function edit($id)
    {
        $myevent = Myevent::find($id);
        return View::make('admin.events.edit', compact('myevent'));
    }

    public function destroy($id)
    {
        Myevent::destroy($id);


    }

    public function update($id)
    {
        print 'ee';
        $event = Myevent::findOrFail($id);
        $validator = Validator::make($data = Input::all(), Myevent::$rules);
        if ($validator->fails())
        {
            return Redirect::back()->withErrors($validator)->withInput();
        }
        $event->update($data);


        return Redirect::route('admin.events.index');
    }

}
?>