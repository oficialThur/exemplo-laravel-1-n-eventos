@extends('layouts.app')

@section('content')
    <h1>Create Organization</h1>
    <form action="{{ route('organizations.store') }}" method="POST">
        @csrf
        <label>Name: <input type="text" name="name" required></label><br>
        <label>Email: <input type="email" name="email" required></label><br>
        <label>Phone: <input type="text" name="phone"></label><br>
        <label>Address: <input type="text" name="address"></label><br>
        <button type="submit">Save</button>
    </form>
@endsection
