<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        .sidebar {
            width: 250px;
            background-color: #343a40;
            color: white;
            padding-top: 20px;
        }

        .sidebar a {
            padding: 10px 15px;
            text-decoration: none;
            font-size: 16px;
            color: white;
            display: block;
        }

        .sidebar a:hover {
            background-color: #b51b1b;
        }

        .content {
            margin-left: 250px;
            padding: 20px;
        }

        .sidebar .nav-link {
            padding: 10px 15px;
            color: white;
        }

        .sidebar .nav-link:hover {
            background-color: #495057;
        }

        .main-content-wrapper {
            display: flex;
            overflow-y: auto;
            /* Keep overflow-y: auto; */
        }
    </style>
</head>

<body>
    @include('layouts.header')

    <div class="main-content-wrapper">
        <div class="sidebar">
            <div class="text-center mb-4">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="img-fluid" style="max-width: 100px;">
                <h4 class="mt-2">School Management</h4>
            </div>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('students.index') }}">
                        <i class="bi bi-person-fill"></i> Students
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('teachers.index') }}">
                        <i class="bi bi-person-lines-fill"></i> Teachers
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('courses.index') }}">
                        <i class="bi bi-journal-bookmark-fill"></i> Courses
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('attendances.index') }}">
                        <i class="bi bi-calendar-check-fill"></i> Attendances
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('fees.index') }}">
                        <i class="bi bi-cash-coin"></i> Fees
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('exams.index') }}">
                        <i class="bi bi-file-earmark-text-fill"></i> Exams
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('library.index') }}">
                        <i class="bi bi-bookshelf"></i> Library
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('transports.index') }}">
                        <i class="bi bi-truck-front-fill"></i> Transports
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('hostels.index') }}">
                        <i class="bi bi-house-door-fill"></i> Hostels
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('parents.index') }}">
                        <i class="bi bi-people-fill"></i> Parents
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('events.index') }}">
                        <i class="bi bi-calendar-event-fill"></i> Events
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('roles.index') }}">
                        <i class="bi bi-shield-lock-fill"></i> Roles
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('reports.index') }}">
                        <i class="bi bi-bar-chart-line-fill"></i> Reports
                    </a>
                </li>
            </ul>
        </div>

        <div class="content">
            @yield('content')
        </div>
    </div>

    @include('layouts.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>