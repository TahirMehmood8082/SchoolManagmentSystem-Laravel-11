@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Branches</h1>
        <a href="{{ route('branches.create') }}" class="btn btn-primary">Add Branch</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Branch Code</th>
                    <th>School</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($branches as $branch)
                    <tr>
                        <td>{{ $branch->name }}</td>
                        <td>{{ $branch->branch_code }}</td>
                        <td>{{ $branch->school->name }}</td>
                        <td>
                            <a href="{{ route('branches.show', $branch->id) }}" class="btn btn-info">Show</a>
                            <a href="{{ route('branches.edit', $branch->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('branches.destroy', $branch->id) }}" method="POST" style="display:inline;">
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