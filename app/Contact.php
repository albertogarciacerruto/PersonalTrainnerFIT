<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'image', 'title', 'subtitle', 'address', 'phone', 'email',
    ];
}
