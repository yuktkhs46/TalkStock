<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model 
{
    protected $guarded = array('id');

    public static $rules = array(
        'name' => 'required',
    );
    
    public function posts(){
        return $this->hasMany(Category::class);
    }
}
