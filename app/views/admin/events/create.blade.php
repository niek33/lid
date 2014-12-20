@extends('admin._layouts.admin')

@section('content')

<h1>Create Post</h1>
{{ Form::open(array('route' => 'admin.events.store')) }}
    @include('admin.events._partials.form')
{{ Form::close() }}
@stop