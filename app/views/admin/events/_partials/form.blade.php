<ul>
    <li>
        {{ Form::label('title', 'Title') }}<br />
        {{ Form::text('title') }}
        {{ $errors->first('title', '<p class="error">:message</p>') }}
    </li>
    <li>
        {{ Form::label('description', 'Description') }}<br />
        {{ Form::textarea('description') }}
        {{ $errors->first('description', '<p class="error">:message</p>') }}
    </li>
    <li>
        {{ Form::submit('Save') }}
    </li>
</ul>
