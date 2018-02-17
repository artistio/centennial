<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Question;
use App\Option;
use App\Category;
use App\Score;

class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // This function is to show the questionaire
        // $categoryList = Category::all();
        return View::make('welcome')->with('categoryList', Category::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $optionList = Option::all()->keyBy('id');
        $questionList = Question::all();
        $totalScore = 0;

        // Calculating the total score based on the answers
        foreach ($questionList as $question) {
          $optionSelected = $optionList->firstWhere('id', $request['question'.$question->id]);
          $totalScore += $optionSelected['score'];
        }

        // Saving the total score to database
        $checkScore = Score::where('dateAnswered', '=', date('Y-m-d'))->first();
        if ($checkScore == null) {
          $newScore = new Score;
          $newScore->dateAnswered = date('Y-m-d');
          $newScore->score = $totalScore;
          $newScore->save();
        } else {
          $checkScore->score = $totalScore;
          $checkScore->save();
        }

        // And finally, return the total score to the user
        return View::make('score')->with('totalScore', $totalScore)->with('dateAnswered', date('D, d-M-Y'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
