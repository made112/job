<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];

protected  $table = 'job_offer';
    public $timestamps = false ;

//    public  function subCategories(){
//        return $this -> hasMany(Student::class,'category_id','id');
//    }
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
