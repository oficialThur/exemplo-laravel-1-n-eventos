@extends('layouts.app')

@section('content')
    <h1>Create Event</h1>
    <form action="{{ route('events.store') }}" method="POST">
        @csrf
        <label>Title: <input type="text" name="title" required></label><br>
        <label>Description: <textarea name="description"></textarea></label><br>
        <label>Date: <input type="date" name="date" required></label><br>
        <label>Location: <input type="text" name="location" required></label><br>
        <label>Organization:
            <select name="organization_id" required>
                <option value="">Select</option>
                @foreach($organizations as $organization)
                    <option value="{{ $organization->id }}">{{ $organization->name }}</option>
                @endforeach
            </select>
        </label><br>
        <button type="submit">Save</button>
    </form>
@endsection
