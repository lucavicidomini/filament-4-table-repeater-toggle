<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sample extends Model
{
    public $casts = [
        'data' => 'array'
    ];
}
