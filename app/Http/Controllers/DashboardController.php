<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Course;
use App\Models\Attendance;
use App\Models\Fee;
use App\Models\Exam;
use App\Models\Library;
use App\Models\Transport;
use App\Models\Hostel;
use App\Models\ParentModel; // Assuming your Parent model is named ParentModel
use App\Models\Event;
use App\Models\Role;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        // Example data retrieval (you can customize this)
        $studentCount = Student::count();
        $teacherCount = Teacher::count();
        $courseCount = Course::count();

        // Example: Recent Attendances (last 5)
        $recentAttendances = Attendance::with(['student', 'course'])
            ->latest()
            ->take(5)
            ->get();

        // Example: Total Fees Collected
        $totalFees = Fee::sum('amount');

        // Example: Students per Course (using DB facade for aggregation)
        $studentsPerCourse = DB::table('student_course')
            ->join('courses', 'student_course.course_id', '=', 'courses.id')
            ->select('courses.name', DB::raw('count(*) as student_count'))
            ->groupBy('courses.name')
            ->get();

        // Example: Other counts
        $examCount = Exam::count();
        $libraryBookCount = Library::count();
        $transportCount = Transport::count();
        $hostelCount = Hostel::count();
        $parentCount = ParentModel::count();
        $eventCount = Event::count();
        $roleCount = Role::count();

        return view('layouts.dashboard', compact(
            'studentCount',
            'teacherCount',
            'courseCount',
            'recentAttendances',
            'totalFees',
            'studentsPerCourse',
            'examCount',
            'libraryBookCount',
            'transportCount',
            'hostelCount',
            'parentCount',
            'eventCount',
            'roleCount'
        ));
    }

    // You can add other dashboard-related methods here
}
