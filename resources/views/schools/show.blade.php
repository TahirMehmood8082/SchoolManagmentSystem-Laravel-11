@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>School Details</h1>
        <p><strong>Name:</strong> {{ $school->name }}</p>
        <p><strong>Address:</strong> {{ $school->address }}</p>
        <a href="{{ route('schools.index') }}" class="btn btn-secondary">Back</a>
    </div>
@endsection