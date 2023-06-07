<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Score;
use App\Models\Student;
use App\Models\Subject;

class ScoreController extends Controller
{
    public function index()
    {
        $scores = Score::all();
        return view('scores.index', compact('scores'));
    }

    public function create()
    {
        $students = Student::all();
        $subjects = Subject::all();
        return view('scores.create', compact('students', 'subjects'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'student_id' => 'required|exists:students,id',
            'subject_id' => 'required|exists:subjects,id',
            'score' => 'required|numeric',
        ]);

        Score::create($request->all());
        return redirect()->route('scores.index');
    }

    public function show(Score $score)
    {
        return view('scores.show', compact('score'));
    }

    public function edit(Score $score)
    {
        $students = Student::all();
        $subjects = Subject::all();
        return view('scores.edit', compact('score', 'students', 'subjects'));
    }

    public function update(Request $request, Score $score)
    {
        $request->validate([
            'student_id' => 'required|exists:students,id',
            'subject_id' => 'required|exists:subjects,id',
            'score' => 'required|numeric',
        ]);

        $score->update($request->all());
        return redirect()->route('scores.index');
    }

    public function destroy(Score $score)
    {
        $score->delete();
        return redirect()->route('scores.index');
    }
}

