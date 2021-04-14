<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'title' => 'required',
    );

    public function category(){
        return $this->belongsTo(Category::class);
    }
    

}
