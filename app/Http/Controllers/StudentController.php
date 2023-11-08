<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function store()
    {
        $student = new Student();
        $student->name = 'miChAeL tIo';
        $student->save();
    }
    
    public function index()
    {
        $results = Student::all();
        return view('students', ['results' => $results]);
    }
}
// public function store()
// {
//     $student = new Student();
//     $student->name = "miChAel tIo";
//     $student->save();
// }
