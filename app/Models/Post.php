<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'title' => 'required',
        
        'content' => 'required',
        'punchline' => 'required',
    );

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    protected static function boot()
    {
    parent::boot();
 
    // 保存時user_idをログインユーザーに設定
    self::saving(function($post) {
        $post->user_id = \Auth::id();
    });
    }

    public function users()
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }

}
