<?php

use Illuminate\Database\Seeder;

class QuestionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // Delete old data
      DB::table('questions')->delete();

      // Load new data
      $question = App\Question::create(['category_id'=>'4', 'title'=>'What time were you going to sleep?']);
      $question = App\Question::create(['category_id'=>'2', 'title'=>'Did you eat vegetables today?']);
      $question = App\Question::create(['category_id'=>'2', 'title'=>'Did you eat fruits today?']);
      $question = App\Question::create(['category_id'=>'2', 'title'=>'Did you eat chicken or beef today?']);
      $question = App\Question::create(['category_id'=>'2', 'title'=>'Did you eat sugar, including cakes, today?']);
      $question = App\Question::create(['category_id'=>'2', 'title'=>'How much alcohol you drink today?']);
      $question = App\Question::create(['category_id'=>'3', 'title'=>'Did you exercise, like running?']);
      $question = App\Question::create(['category_id'=>'2', 'title'=>'How much coffee you drink today?']);
      $question = App\Question::create(['category_id'=>'2', 'title'=>'Did you eat fried food today?']);
      $question = App\Question::create(['category_id'=>'2', 'title'=>'Did you smoke today?']);
      $question = App\Question::create(['category_id'=>'3', 'title'=>'Were you spending time outdoor?']);
      $question = App\Question::create(['category_id'=>'5', 'title'=>'Did you meditate today?']);
      $question = App\Question::create(['category_id'=>'2', 'title'=>'Did you eat processed food today?']);
      $question = App\Question::create(['category_id'=>'2', 'title'=>'What time is your last food today?']);
    }
}
