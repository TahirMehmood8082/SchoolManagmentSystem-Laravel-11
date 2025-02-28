<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\FeeController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\TransportController;
use App\Http\Controllers\HostelController;
use App\Http\Controllers\ParentController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\SecurityController;
use App\Http\Controllers\ReportController;

// Home Route
Route::get('/', function () {
    return view('welcome');
});

// Student Management
Route::resource('students', StudentController::class);

// Teacher Management
Route::resource('teachers', TeacherController::class);

// Course Management
Route::resource('courses', CourseController::class);

// Attendance Management
Route::resource('attendances', AttendanceController::class);

// Fee Management
Route::resource('fees', FeeController::class);

// Exam Management
Route::resource('exams', ExamController::class);

// Library Management
Route::resource('library', LibraryController::class);

// Transport Management
Route::resource('transports', TransportController::class);

// Hostel Management
Route::resource('hostels', HostelController::class);

// Parent Portal
Route::resource('parents', ParentController::class);

// Event Management
Route::resource('events', EventController::class);

// Security & Role Management
Route::resource('roles', SecurityController::class);

// Reporting & Analytics
Route::resource('reports', ReportController::class);
