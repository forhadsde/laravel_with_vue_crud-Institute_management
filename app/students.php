<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\semesterlist;
use App\result;
class students extends Model
{
    protected $guarded=[];
    
    public function classname(){
        return $this->belongsTo(semesterlist::class,'semester');
    }
    
}
