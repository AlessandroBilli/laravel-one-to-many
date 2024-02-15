
@extends('layouts.app')

@section('content')
    <h1>Edit Project</h1>
    <form action="{{ url('/projects/'.$project->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="title">Title:</label>
        <input type="text" name="title" value="{{ $project->title }}">
        <label for="description">Description:</label>
        <textarea name="description">{{ $project->description }}</textarea>
        <button type="submit">Update</button>
    </form>
@endsection
