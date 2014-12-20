@extends('admin._layouts.admin')

@section('content')

@if(count($events))
    <ul>
    @foreach($events as $event)
        <li>
            {{ link_to_route('admin.events.edit', $event->title, array($event->id)) }}
        </li>
    @endforeach
    </ul>
@endif

@stop