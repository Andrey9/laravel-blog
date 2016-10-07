<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected  $fillable = [
        'title', 'excerpt', 'body', 'published_at',
        'user_id'//delete after adding authorizing!!!
    ];

    protected $date = ['published_at'];
}
