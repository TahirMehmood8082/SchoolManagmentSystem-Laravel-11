@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Branch Details</h1>
        <p><strong>Name:</strong> {{ $branch->name }}</p>
        <p><strong>Branch Code:</strong> {{ $branch->branch_code }}</p>
        <p><strong>School:</strong> {{ $branch->school->name }}</p>
        <a href="{{ route('branches.index') }}" class="btn btn-secondary">Back</a>
    </div>
@endsection