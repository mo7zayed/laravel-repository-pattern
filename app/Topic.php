<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $fillable = [
        "title",
        "user_id",
        "slug"
    ];
}
