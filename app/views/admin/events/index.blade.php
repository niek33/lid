@extends('admin._layouts.admin')

@section('content')



	@if(count($events))
	    <table class="table">
			<thead>
			<tr>
			    <th>Id</th>
			    <th>Event title</th>
			    <th>Date</th>
			    <th>Delete</th>
			</tr>
			</thead>
			<tbody>

		    @foreach($events as $event)
                <tr>
				    <td>{{ $event->id }}</td>
				    <td>  {{ link_to_route('admin.events.edit', $event->title, array($event->id)) }}</td>
				    <td>{{ $event->date }}</td>
				    <td>x</td>
				</tr>
	   		@endforeach
		</tbody>
		</table>
	@endif





@stop