<?php 

class Myevent extends Eloquent
{

    protected $table = 'myevents';

    public static $rules = [
        'title' => 'required',
        'description' => 'required',
        'image' => 'required',
        'date' => 'required'
    ];

}


 ?>