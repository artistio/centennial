<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $fillable = ['title', 'parent_id'];

    public function subcategories() {
        return $this->hasMany('App\Category','parent_id','id') ;
    }

    public function questions()
    {
      return $this->hasMany('App\Question');
    }
}
