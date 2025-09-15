@extends('layouts.app')

@section('content')
    <h1>Edit Organization</h1>
    <form action="{{ route('organizations.update', $organization) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Name: <input type="text" name="name" value="{{ $organization->name }}" required></label><br>
        <label>Email: <input type="email" name="email" value="{{ $organization->email }}" required></label><br>
        <label>Phone: <input type="text" name="phone" value="{{ $organization->phone }}"></label><br>
        <label>Address: <input type="text" name="address" value="{{ $organization->address }}"></label><br>
        <button type="submit">Update</button>
    </form>
@endsection
