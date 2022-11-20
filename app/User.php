<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;


class User extends Authenticatable
{
    protected $table = "users";
    use Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'email', 
        'password',
        'id_role', 
        'status',
        'last_login',
        'career',
        'expire',
        'deleted',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role() {
        return $this->belongsTo(Role::class, 'role_id', 'id');
    }
  
    public function jobFavorite(){
        return $this->belongsToMany('App\JobSummary', 'job_favorite', 'user_id', 'job_id');
    }

    public function myRecruit(){
        return $this->hasMany('App\JobSummary','user_id','id');   
    }

    public function jobApply(){
        return $this->belongsToMany('App\JobSummary', 'cv_apply', 'user_id', 'job_summary_id');
    }

    public function getCV(){
        return $this->belongsTo('App\ApplyCV','id','user_id');
    }

    public function profile(){
        return $this->belongsTo('App\Profile','id','user_id');
    }
}
