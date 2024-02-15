
@extends('layouts.app')

@section('content')
    <h1>Create New Project</h1>
    <form action="{{ url('/projects') }}" method="POST">
        @csrf
        <label for="title">Title:</label>
        <input type="text" name="title">
        <label for="description">Description:</label>
        <textarea name="description"></textarea>
        <button type="submit">Create</button>
    </form>
@endsection
