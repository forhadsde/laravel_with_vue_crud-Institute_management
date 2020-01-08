<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\subject;
class result extends Model
{
    protected $guarded=[];
    
    public function subjectname(){
       return $this->belongsTo(subject::class,'subject_id');
    }
}
