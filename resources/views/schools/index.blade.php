@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Schools</h1>
        <a href="{{ route('schools.create') }}" class="btn btn-primary">Add School</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($schools as $school)
                    <tr>
                        <td>{{ $school->name }}</td>
                        <td>{{ $school->address }}</td>
                        <td>
                            <a href="{{ route('schools.show', $school->id) }}" class="btn btn-info">Show</a>
                            <a href="{{ route('schools.edit', $school->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('schools.destroy', $school->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection