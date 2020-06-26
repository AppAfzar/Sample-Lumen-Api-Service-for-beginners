<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Authenticate extends Model
{
    protected $guarded = [

    ];

    protected $hidden = [
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
