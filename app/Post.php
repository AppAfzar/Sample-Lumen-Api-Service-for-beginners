<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $timestamps = true;
    protected $fillable = [
        'title', 'description', 'image_url'
    ];
    protected $hidden = ['image_url'];

}
