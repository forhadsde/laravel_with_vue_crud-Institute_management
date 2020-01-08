<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\subject;
class subjects extends Controller
{
   public function subjectList(){
       return subject::all();
    }
    
    public function subjectStore(Request $request){
       subject::create($request->all());
       return ['success'=>true,'message'=>'Subject added sucessfully'];
    }
    
    public function subjectUpdate(Request $request){
        if($request->has('id')){
            subject::find($request->input('id'))->update($request->all());
            return ['success'=>true,'message'=>'Subject Update Sucessfully'];
        }
    }
    
    public function subjectDelete(Request $r){
       if($r->has('id')){
            subject::find($r->input('id'))->delete();
            return ['success'=>true,'message'=>'Subject Delete  sucessfully'];
        }
    }
}
