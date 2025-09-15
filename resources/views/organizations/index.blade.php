@extends('layouts.app')

@section('content')
    <h1>Organizations</h1>
    <a href="{{ route('organizations.create') }}">Create Organization</a>
    <ul>
        @foreach($organizations as $organization)
            <li>
                <a href="{{ route('organizations.show', $organization) }}">{{ $organization->name }}</a>
                <a href="{{ route('organizations.edit', $organization) }}" class="action-link">Edit</a>
                <form action="{{ route('organizations.destroy', $organization) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="action-link" style="border:none;">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
