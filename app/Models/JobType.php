<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobType extends Model
{
    protected $table = 'job_type' ;
    public $timestamps = false ;
   protected $guarded = [];


    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }

    public function getActive(){
        return   $this -> active == 1 ? 'مفعل'  : 'غير مفعل';
    }
    public function scopeSelection($query)
    {

        return $query->select('id','name','description','active');

    }
    public  function jobOffer(){
        return $this -> belongsTo(Job::class,'jt_id');
    }

}
