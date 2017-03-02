<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    public function getBodyAttribute($value)
    {
        return ucfirst($value);
    }
}
