<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table ='categories';
    public $timestamps = false;
    public function jobs(){
    	return $this->hasMany('App\JobSummary','category_id','id');
    }
}
