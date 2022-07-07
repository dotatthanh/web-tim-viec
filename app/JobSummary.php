<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobSummary extends Model
{
	protected $table = 'job_summaries';
	public $timestamps = false;
	public function address(){
		return $this->belongsTo('App\Address','address_id','id');
	}
	public function company(){
		return $this->belongsTo('App\Company','company_id','id');
	}
	public function category(){
		return $this->belongsTo('App\Category','category_id','id');
	}
	public function user(){
		return $this->belongsTo('App\User','user_id','id');
	}

	public function detail(){
    	return $this->belongsTo('App\JobDetail','job_detail_id','id');
    }

    public function userApply(){
        return $this->belongsToMany('App\User', 'cv_apply', 'job_summary_id', 'user_id');
    }

    
}
