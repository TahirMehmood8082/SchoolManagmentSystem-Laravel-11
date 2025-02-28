@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Student</h1>
        <form action="{{ route('students.update', $student->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" value="{{ $student->name }}" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" value="{{ $student->email }}" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" name="phone" class="form-control" value="{{ $student->phone }}" required>
            </div>
            <div class="form-group">
                <label for="guardian_name">Guardian Name</label>
                <input type="text" name="guardian_name" class="form-control" value="{{ $student->guardian_name }}" required>
            </div>
            <div class="form-group">
                <label for="guardian_phone">Guardian Phone</label>
                <input type="text" name="guardian_phone" class="form-control" value="{{ $student->guardian_phone }}"
                    required>
            </div>
            <div class="form-group">
                <label for="class_id">Class</label>
                <select name="class_id" class="form-control" required>
                    @foreach ($classes as $class)
                        <option value="{{ $class->id }}" {{ $student->class_id == $class->id ? 'selected' : '' }}>
                            {{ $class->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="section_id">Section</label>
                <select name="section_id" class="form-control" required>
                    @foreach ($sections as $section)
                        <option value="{{ $section->id }}" {{ $student->section_id == $section->id ? 'selected' : '' }}>
                            {{ $section->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
