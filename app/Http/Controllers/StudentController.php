<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string',
            'prodi' => 'required|string',
            'nim' => 'required|integer',
        ]);

        Student::create($validatedData);

        return redirect('/students')->with('success', 'Student information saved successfully');
    }
}
