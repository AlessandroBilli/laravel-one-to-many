
@extends('layouts.app')

@section('content')
    <h1>Projects</h1>
    <a href="{{ url('/projects/create') }}">Create New Project</a>
    <ul>
        @foreach($projects as $project)
            <li>{{ $project->title }} - {{ $project->description }}</li>
            <a href="{{ url('/projects/'.$project->id.'/edit') }}">Edit</a>
            <form action="{{ url('/projects/'.$project->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        @endforeach
    </ul>
@endsection
