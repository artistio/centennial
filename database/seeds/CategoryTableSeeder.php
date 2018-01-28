<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Delete old data
        DB::table('categories')->delete();

        // Load new data
        $category = App\Category::create(['title'=>'Other', 'parent_id'=>'0']);
        $category = App\Category::create(['title'=>'Food', 'parent_id'=>'0']);
        $category = App\Category::create(['title'=>'Move', 'parent_id'=>'0']);
        $category = App\Category::create(['title'=>'Rest', 'parent_id'=>'0']);
        $category = App\Category::create(['title'=>'Mind', 'parent_id'=>'0']);
        /*
        DB::table('categories')->insert(array(
          array('title'=>'food','parent_id'=>'0'),
          array('title'=>'exercise','parent_id'=>'0'),
          array('title'=>'rest','parent_id'=>'0')
        ));
        */
    }
}
