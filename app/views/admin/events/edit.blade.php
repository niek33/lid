@extends('admin._layouts.admin')

@section('content')

<h1>Edit Post</h1>
    {{ Form::model($myevent, array('route' => array('admin.events.update', $myevent->id), 'method' => 'put')) }}
        @include('admin.events._partials.form')
    {{ Form::close() }}

<h1>Thumbnail</h1>
<img src="{{ asset($myevent->image) }}">

@stop