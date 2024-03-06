<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function getStudentDetails(Request $request)
    {
        $enrollment = $request->input('enrollment');

        $student = Student::select(
            'students.name',
            'students.enrollment',
            'students.profile_image',
            'students.father_name',
            'students.student_status',
            'tblbranch.name AS branch_name',
            'tblbranch.code',
            'courses.course_name',
        )
            ->leftJoin('tblbranch', 'tblbranch.id', '=', 'students.branch_id')
            ->leftJoin('courses', 'courses.id', '=', 'students.course')
            ->where('students.enrollment', $enrollment)
            ->first();

        if ($student) {
            return response()->json($student);
        } else {
            return response()->json(['error' => 'Invalid Enrollment'], 404);
        }
    }
}
