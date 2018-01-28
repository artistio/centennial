<?php

use Illuminate\Database\Seeder;

class OptionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // Delete old data
      DB::table('options')->delete();

      // Load new data
      $question = App\Option::create(['question_id'=>1, 'title'=>'Before or at 10PM', 'score'=>1]);
      $question = App\Option::create(['question_id'=>1, 'title'=>'After 10PM', 'score'=>-1]);
      $question = App\Option::create(['question_id'=>2, 'title'=>'Yes', 'score'=>1]);
      $question = App\Option::create(['question_id'=>2, 'title'=>'No', 'score'=>-1]);
      $question = App\Option::create(['question_id'=>3, 'title'=>'Yes', 'score'=>1]);
      $question = App\Option::create(['question_id'=>3, 'title'=>'No', 'score'=>-1]);
      $question = App\Option::create(['question_id'=>4, 'title'=>'Yes', 'score'=>-1]);
      $question = App\Option::create(['question_id'=>4, 'title'=>'No', 'score'=>1]);
      $question = App\Option::create(['question_id'=>5, 'title'=>'Yes', 'score'=>-1]);
      $question = App\Option::create(['question_id'=>5, 'title'=>'No', 'score'=>1]);
      $question = App\Option::create(['question_id'=>6, 'title'=>'None', 'score'=>1]);
      $question = App\Option::create(['question_id'=>6, 'title'=>'Less than 500 ml beer, or 2 glass of wine', 'score'=>0]);
      $question = App\Option::create(['question_id'=>6, 'title'=>'More than 500 ml beer, more than 2 glass of wine, and any other alcohol', 'score'=>-1]);
      $question = App\Option::create(['question_id'=>7, 'title'=>'Yes', 'score'=>1]);
      $question = App\Option::create(['question_id'=>7, 'title'=>'No', 'score'=>0]);
      $question = App\Option::create(['question_id'=>8, 'title'=>'None', 'score'=>+1]);
      $question = App\Option::create(['question_id'=>8, 'title'=>'2 cups or less', 'score'=>0]);
      $question = App\Option::create(['question_id'=>8, 'title'=>'More than 2 cups', 'score'=>-1]);
      $question = App\Option::create(['question_id'=>9, 'title'=>'Yes', 'score'=>-1]);
      $question = App\Option::create(['question_id'=>9, 'title'=>'No', 'score'=>1]);
      $question = App\Option::create(['question_id'=>10, 'title'=>'Yes', 'score'=>-1]);
      $question = App\Option::create(['question_id'=>10, 'title'=>'No', 'score'=>1]);
      $question = App\Option::create(['question_id'=>11, 'title'=>'Yes', 'score'=>1]);
      $question = App\Option::create(['question_id'=>11, 'title'=>'No', 'score'=>-1]);
      $question = App\Option::create(['question_id'=>12, 'title'=>'Yes', 'score'=>1]);
      $question = App\Option::create(['question_id'=>12, 'title'=>'No', 'score'=>-1]);
      $question = App\Option::create(['question_id'=>13, 'title'=>'Yes', 'score'=>-1]);
      $question = App\Option::create(['question_id'=>13, 'title'=>'No', 'score'=>1]);
      $question = App\Option::create(['question_id'=>14, 'title'=>'6PM or before', 'score'=>1]);
      $question = App\Option::create(['question_id'=>14, 'title'=>'Between 6PM to 8PM', 'score'=>0]);
      $question = App\Option::create(['question_id'=>14, 'title'=>'Between 8PM to 10PM', 'score'=>-1]);
      $question = App\Option::create(['question_id'=>14, 'title'=>'After 10PM', 'score'=>-2]);
    }
}
