@extends('layouts.app')

@section('content')
    <h1>Organization: {{ $organization->name }}</h1>
    <p>Email: {{ $organization->email }}</p>
    <p>Phone: {{ $organization->phone }}</p>
    <p>Address: {{ $organization->address }}</p>
    <a href="{{ route('organizations.edit', $organization) }}">Edit</a>
    <a href="{{ route('organizations.index') }}">Back to list</a>
@endsection
