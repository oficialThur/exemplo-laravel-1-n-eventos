@extends('layouts.app')

@section('content')
    <h1>Edit Event</h1>
    <form action="{{ route('events.update', $event) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Title: <input type="text" name="title" value="{{ $event->title }}" required></label><br>
        <label>Description: <textarea name="description">{{ $event->description }}</textarea></label><br>
        <label>Date: <input type="date" name="date" value="{{ $event->date }}" required></label><br>
        <label>Location: <input type="text" name="location" value="{{ $event->location }}" required></label><br>
        <label>Organization:
            <select name="organization_id" required>
                @foreach($organizations as $organization)
                    <option value="{{ $organization->id }}" @if($event->organization_id == $organization->id) selected @endif>{{ $organization->name }}</option>
                @endforeach
            </select>
        </label><br>
        <button type="submit">Update</button>
    </form>
@endsection
