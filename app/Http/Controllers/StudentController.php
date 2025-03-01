<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\ClassModel;
use App\Models\Section;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

   public function create($selectedClassId = null) // Add an optional parameter
    {
        $classes = ClassModel::all();
        $sections = Section::all();

        if ($selectedClassId) {
            $sections = Section::where('class_id', $selectedClassId)->get();
        }

        return view('students.create', [
            'classes' => $classes,
            'sections' => $sections,
            'selectedClassId' => $selectedClassId,
        ]);
    }

    public function getSectionsByClass($classId)
    {
        $sections = Section::where('class_id', $classId)->get();
        return response()->json($sections);
    }

    public function store(Request $request)
    {
       // dd($request->all());
        // Validate the request data
        $request->validate([
            'name' => ['required', 'regex:/^[a-zA-Z\s]+$/'],
            'email' => 'required|email|unique:students',
            'phone' => ['required', 'regex:/^\+?[0-9]{11,12}$/'],
            'guardian_name' => ['required', 'regex:/^[a-zA-Z\s]+$/'],
            'guardian_phone' => ['required', 'regex:/^\+?[0-9]{11,12}$/'],
            'class_id' => 'required|exists:classes,id',
            'section_id' => 'required|exists:sections,id',
        ]);

        // Exclude the _token field from the request data
        $data = $request->except('_token');

        // Create the student
        Student::create($data);

        return redirect()->route('students.index')->with('success', 'Student created successfully.');
    }

    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    public function edit(Student $student)
    {
        $classes = ClassModel::all(); // Fetch all classes
        $sections = Section::all();    // Fetch all sections
        return view('students.edit', compact('student','classes', 'sections'));
    }

    public function update(Request $request, Student $student)
    {
        // Validate the request data
        $request->validate([
            'name' => ['required', 'regex:/^[a-zA-Z\s]+$/'],
            'email' => 'required|email|unique:students,email,' . $student->id,
            'phone' => ['required', 'regex:/^\+?[0-9]{11,12}$/'],
            'guardian_name' => ['required', 'regex:/^[a-zA-Z\s]+$/'],
            'guardian_phone' => ['required', 'regex:/^\+?[0-9]{11,12}$/'],
            'class_id' => 'required|exists:classes,id',
            'section_id' => 'required|exists:sections,id',
        ]);

        // Exclude the _token field from the request data
        $data = $request->except('_token');

        // Update the student
        $student->update($data);

        return redirect()->route('students.index')->with('success', 'Student updated successfully.');
    }

    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index')->with('success', 'Student deleted successfully.');
    }
}
