@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Student Details</h1>
        <p><strong>Name:</strong> {{ $student->name }}</p>
        <p><strong>Email:</strong> {{ $student->email }}</p>
        <p><strong>Phone:</strong> {{ $student->phone }}</p>
        <a href="{{ route('students.index') }}" class="btn btn-secondary">Back</a>
    </div>
@endsection
