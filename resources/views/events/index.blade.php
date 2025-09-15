@extends('layouts.app')

@section('content')
    <h1>Events</h1>
    <a href="{{ route('events.create') }}">Create Event</a>
    <ul>
        @foreach($events as $event)
            <li>
                <a href="{{ route('events.show', $event) }}">{{ $event->title }}</a> ({{ $event->organization->name ?? 'No Organization' }})
                <a href="{{ route('events.edit', $event) }}" class="action-link">Edit</a>
                <form action="{{ route('events.destroy', $event) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="action-link" style="border:none;">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
