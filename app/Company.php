<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //
    protected $table = "companies";
    public $timestamps = false;
    public function jobSummaries(){
    	return $this->hasMany('App\JobSummary','company_id','id');
    }
    public function address(){
    	return $this->belongsTo('App\Address', 'address_id','id');
    }
}
