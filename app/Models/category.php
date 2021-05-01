<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $guarded = array('id');
    public function posts(){
        return $this->hasMany(Post::class);
    }

    
}
