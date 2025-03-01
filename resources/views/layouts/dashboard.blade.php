@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Dashboard</h1>

        <div class="row">
            <div class="col-md-3">
                <div class="card bg-primary text-white mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Students</h5>
                        <p class="card-text">{{ $studentCount }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-success text-white mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Teachers</h5>
                        <p class="card-text">{{ $teacherCount }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-info text-white mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Courses</h5>
                        <p class="card-text">{{ $courseCount }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-warning text-white mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Total Fees</h5>
                        <p class="card-text">{{ $totalFees }}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <div class="card bg-danger text-white mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Exams</h5>
                        <p class="card-text">{{ $examCount }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-secondary text-white mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Library Books</h5>
                        <p class="card-text">{{ $libraryBookCount }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-dark text-white mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Transports</h5>
                        <p class="card-text">{{ $transportCount }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-light text-dark mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Hostels</h5>
                        <p class="card-text">{{ $hostelCount }}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <div class="card bg-primary text-white mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Parents</h5>
                        <p class="card-text">{{ $parentCount }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-success text-white mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Events</h5>
                        <p class="card-text">{{ $eventCount }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-info text-white mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Roles</h5>
                        <p class="card-text">{{ $roleCount }}</p>
                    </div>
                </div>
            </div>
        </div>

        <h2>Recent Attendances</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Student</th>
                    <th>Course</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($recentAttendances as $attendance)
                    <tr>
                        <td>{{ $attendance->student->name }}</td>
                        <td>{{ $attendance->course->name }}</td>
                        <td>{{ $attendance->created_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <h2>Students per Course</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Course</th>
                    <th>Student Count</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($studentsPerCourse as $course)
                    <tr>
                        <td>{{ $course->name }}</td>
                        <td>{{ $course->student_count }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection