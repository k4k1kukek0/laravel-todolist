<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{

    // dapatkan data dari database dan merubah nya
    public function getTitleAttribute($value)
    {
        return ucfirst($value);
    }
    
    // dapatkan data dari user dan rubah sebelum di masukkan ke database
    public function setTitleAttribute($value)
    {
        return $this->attributes['title'] = ucfirst($value);
    }
}                                                                                                                                                                                                                                