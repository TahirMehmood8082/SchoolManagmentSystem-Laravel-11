@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Teacher Details</h1>
        <p><strong>Name:</strong> {{ $teacher->name }}</p>
        <p><strong>Email:</strong> {{ $teacher->email }}</p>
        <p><strong>Phone:</strong> {{ $teacher->phone }}</p>
        <a href="{{ route('teachers.index') }}" class="btn btn-secondary">Back</a>
    </div>
@endsection
