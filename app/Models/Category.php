<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model 
{
    protected $guarded = array('id');

    // 投稿への紐付け
    public function posts(){
        return $this->hasMany(Category::class);
    }
}