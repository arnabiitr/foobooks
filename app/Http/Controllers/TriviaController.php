<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TriviaController extends Controller
{
    public function index()
    {
        return 'Show the clue, followed by the form where the visitor can enter their guess';
    }

    public function checkAnswer()
    {
        return 'Check the answer and redirect the user back to the form with the results';
    }
}
