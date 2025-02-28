<?php

namespace Database\Seeders;

use App\Models\ClassModel;
use App\Models\Section;
use App\Models\Student;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Create classes
        $class1 = ClassModel::create(['name' => 'Class 1']);
        $class2 = ClassModel::create(['name' => 'Class 2']);

        // Create sections
        $section1 = Section::create(['name' => 'Section A']);
        $section2 = Section::create(['name' => 'Section B']);

        // Create students
        Student::create([
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'phone' => '1234567890',
            'guardian_name' => 'Jane Doe',
            'guardian_phone' => '0987654321',
            'class_id' => $class1->id,
            'section_id' => $section1->id,
        ]);

        Student::create([
            'name' => 'Jane Smith',
            'email' => 'jane@example.com',
            'phone' => '9876543210',
            'guardian_name' => 'John Smith',
            'guardian_phone' => '0123456789',
            'class_id' => $class2->id,
            'section_id' => $section2->id,
        ]);
    }
}
