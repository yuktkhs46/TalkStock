<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'title' => 'required',
    );
    
    public function posts(){
        return $this->hasMany(Post::class);
    }

}
