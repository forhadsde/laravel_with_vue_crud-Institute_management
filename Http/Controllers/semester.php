<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\semesterlist;
class semester extends Controller
{
   public function semesterSubjectManage(){
       return view('Admin.subject-semester');
   }
   
   public function semesterList(){
       return semesterlist::all();
    }
    
    public function semesterStore(Request $request){
       semesterlist::create($request->all());
       return ['success'=>true,'message'=>'semester added sucessfully'];
    }
    
    public function semesterUpdate(Request $request){
       if($request->has('id')){
            semesterlist::find($request->input('id'))->update($request->all());
            return ['success'=>true,'message'=>'Semester Name Update Sucessfully'];
        }
        return ['success'=>true,'message'=>'update  sucessfully'];
    }
}
