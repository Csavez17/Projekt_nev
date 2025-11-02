<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $questions = Question::all();
        return view('questions.index', compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('questions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'question_name' => 'required|min:3|max:255',
        ]);

        $question = new Question();
        $question->question_name = $request->question_name;
        $question->save();

        return redirect()->route('questions.index')->with('success', 'Kérdés sikeresen létrehozva.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //$question = Question::find($id);
        //return view('questions.show', compact('question'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       //$question = Question::find($id);
        //return view('questions.edit', compact('question')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
