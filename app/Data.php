<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    protected $fillable = [
        'user_id', 'weight', 'height', 'photo', 'file', 'contract', 'date',
    ];
}
