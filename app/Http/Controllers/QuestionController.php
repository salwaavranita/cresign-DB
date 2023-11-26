<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreQuestionRequest;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuestionController extends Controller
{
    //
    public function index(Request $request)
    {
        $questions = DB::table('questions')
        ->when($request->input('questions'), function ($query, $search) {
            return $query->where('question', 'like', '%' . $search . '%');
        })
        ->orderBy('id', 'desc')
        ->paginate(10);
        return view('pages.questions.index', compact('questions'));
    }

    public function create(){
        return view('pages.questions.create');
    }

    public function store(StoreQuestionRequest $request){
        $data = $request ->all();
        Question::create($data);
        return redirect()->route('questions.index')->with('success', 'Question successfully created');
    }

    public function edit(Question $question){
        $question = Question::findOrFail($question->id);
        return view('pages.questions.edit', compact('question'));
    }

    public function update(StoreQuestionRequest $request, Question $question){
        $data = $request->all();
        $question->update($data);
        return redirect()->route('questions.index')->with('success', 'Question successfully updated');
    }

    public function destroy(Question $question){
        $question->delete();
        return redirect()->route('questions.index')->with('success', 'Question successfully deleted');
    }



}
