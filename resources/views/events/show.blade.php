@extends('layouts.app')

@section('content')
    <h1>Event: {{ $event->title }}</h1>
    <p>Description: {{ $event->description }}</p>
    <p>Date: {{ $event->date }}</p>
    <p>Location: {{ $event->location }}</p>
    <p>Organization: {{ $event->organization->name ?? 'No Organization' }}</p>
    <a href="{{ route('events.edit', $event) }}">Edit</a>
    <a href="{{ route('events.index') }}">Back to list</a>
@endsection
