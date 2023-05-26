<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $guarded = [];

    protected  $table = 'job';
    public $timestamps = false ;

    public  function JobType(){
        return $this -> hasOne(JobType::class,'job_type');
    }
//
//    public function scopeSelection($query)
//    {
//
//        return $query->select('id','name','active');
//
//    }
//    public function getActive(){
//        return   $this -> active == 1 ? 'مفعل'  : 'غير مفعل';
//    }
}
