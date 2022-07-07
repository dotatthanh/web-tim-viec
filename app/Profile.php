<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'user_id', 
        'category_id', 
        'address_id', 
        'experience', 
        'education', 
        'sex',
        'age',
    ];
}
