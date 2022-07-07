<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobFavorite extends Model
{
    //
     protected $table = 'job_favorite';
     public function jobFavorite(){
        return $this->belongsToMany('App\User', 'job_favorite', 'user_id', 'job_id');
    }

}
