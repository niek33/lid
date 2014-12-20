<?php 

class Myevent extends Eloquent
{

    protected $table = 'myevents';

    public static $rules = [
        'title' => 'required|between:3,20',
        'description' => 'required',
        'image' => 'required',
        'date' => 'required'
    ];

}


 ?>