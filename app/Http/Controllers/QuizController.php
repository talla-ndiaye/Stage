<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;

class QuizController extends Controller
{
    public function index()
    {
        $questions = Question::all();
        return view('paysage', ['questions_paysage' => $questions]);
    }

    public function index1()
    {
        $questions = Question::all();
        return view('sport', ['questions_sport' => $questions]);
    }

    public function index2()
    {
        $questions = Question::all();
        return view('histoire', ['questions_histoire' => $questions]);
    }

        public function index3()
    {
        $questions = Question::all();
        return view('education', ['questions_education' => $questions]);
    }

    public function index4()
    {
        $questions = Question::all();
        return view('personnage', ['questions_personnage' => $questions]);
    }

    public function index5()
    {
        $questions = Question::all();
        return view('culture', ['questions_culture' => $questions]);
    }
}


