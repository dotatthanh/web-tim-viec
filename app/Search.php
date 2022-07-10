<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Search extends Model
{
    protected $table = 'searchs';

    protected $fillable = [
        'user_id',
        'company_name',
        'category',
        'address',
        'salary',
        'experience'
    ];
}
