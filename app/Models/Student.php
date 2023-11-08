<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory, SoftDeletes;

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = strtolower($value);
    }

    public function getNameAttribute($value)
    {
        return ucwords(strtolower($value));
    }
}
// public function setNameAttribute($value)
// {
//     $this->attributes['name'] = strtolower($value);
// }

// public function getNameAttribute($value)
// {
//     return ucwords(strtolower($value));
// }
