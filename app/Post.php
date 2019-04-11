<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function user()
    {
        return $this->belongsToMany("App\User", "user_post", "post_id", "user_id");
    }
}
