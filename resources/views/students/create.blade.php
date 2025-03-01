@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create Student</h1>
        <form action="{{ route('students.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>
                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" name="phone" class="form-control" value="{{ old('phone') }}" required>
                @error('phone')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="guardian_name">Guardian Name</label>
                <input type="text" name="guardian_name" class="form-control" value="{{ old('guardian_name') }}" required>
                @error('guardian_name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="guardian_phone">Guardian Phone</label>
                <input type="text" name="guardian_phone" class="form-control" value="{{ old('guardian_phone') }}" required>
                @error('guardian_phone')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="class_id">Class</label>
                <select name="class_id" id="class_id" class="form-control" required>
                    <option value="">Select Class</option>
                    @foreach ($classes as $class)
                        <option value="{{ $class->id }}" {{ old('class_id') == $class->id ? 'selected' : '' }}>{{ $class->name }}
                        </option>
                    @endforeach
                </select>
                @error('class_id')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="section_id">Section</label>
                <select name="section_id" id="section_id" class="form-control" required>
                    <option value="">Select Section</option>
                </select>
                @error('section_id')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const classSelect = document.getElementById('class_id');
            const sectionSelect = document.getElementById('section_id');

            classSelect.addEventListener('change', function () {
                const classId = this.value;

                if (classId) {
                    fetch(`/sections/by-class/${classId}`)
                        .then(response => response.json())
                        .then(sections => {
                            sectionSelect.innerHTML = '<option value="">Select Section</option>'; // Clear and add default option
                            sections.forEach(section => {
                                const option = document.createElement('option');
                                option.value = section.id;
                                option.textContent = section.name;
                                sectionSelect.appendChild(option);
                            });
                        });
                } else {
                    sectionSelect.innerHTML = '<option value="">Select Section</option>'; // Clear if no class selected
                }
            });
        });
    </script>
@endsection