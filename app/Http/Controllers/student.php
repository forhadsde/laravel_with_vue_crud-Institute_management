<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\students;
use App\semesterlist;
use App\result;

class student extends Controller {

    public function studentManage() {
        $studentlist = students::all();
        return view('Admin.student-manage', compact('studentlist'));
    }

    public function storeStudent(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'roll' => 'required',
            'semester' => 'required',
        ]);
        students::create($request->all());
        return back()->with('message', "student added sucessfully");
    }

    public function editStudent($id) {
        $studentDetails = students::find($id);
        return view('Admin.student-edit', compact('studentDetails'));
    }

    public function updateStudent($id) {
        $student = students::findOrFail($id);
        $student->name = request('name');
        $student->roll = request('roll');
        $student->semester = request('semester');
        $student->save();
        return redirect()->to('manage-student')->with('message', 'Student Data Update Successfully');
    }

    public function deleteStudent($id){
       $student = students::findOrFail($id);
       $student->delete();
       return redirect()->to('manage-student')->with('message', 'Student Delete Successfully');
    }
    
    public function addResult($id) {
        $StudentProfile = students::where('id', $id)->first();
        return view('Admin.result-add', compact('StudentProfile'));
    }

    public function storeResult($id) {
        $result = new result();
        $result->std_id = $id;
        $result->subject_id = request('subject');
        $result->marks = request('marks');
        $result->grade = request('grade');
        $result->save();
        return redirect()->back()->with('message', 'Result Added Sucessfully');
    }

    public function resultView($id) {
        $StudentProfile = students::where('id', $id)->first();
        $Results = result::where('std_id', $id)->get();
        //print_r($Results);
        if(!count($Results)){
            $Message = "Result Not Assign Yet";
            return view('Admin.stude-result-view', compact('StudentProfile', 'Message'));
        }else{
            //CGPA CALCULATION START
            $TotalMainMarks = 0;
            $TotalMarks = 0;
            $CGPA = null;
            foreach ($Results as $result) {
                $TotalMainMarks = $TotalMainMarks + 100;
                $TotalMarks = $TotalMarks + $result->marks;
            }
            $OnePercentage = $TotalMainMarks / 100;
            $GetPercentage = $TotalMarks / $OnePercentage;
            if ($GetPercentage >= 80) {
                $CGPA = "A+";
            } elseif ($GetPercentage >= 75) {
                $CGPA = "A";
            } elseif ($GetPercentage >= 70) {
                $CGPA = "A-";
            } elseif ($GetPercentage >= 65) {
                $CGPA = "B+";
            } elseif ($GetPercentage >= 60) {
                $CGPA = "B";
            } elseif ($GetPercentage >= 55) {
                $CGPA = "B-";
            } elseif ($GetPercentage >= 50) {
                $CGPA = "C";
            } elseif ($GetPercentage >= 45) {
                $CGPA = "D";
            } elseif ($GetPercentage >= 40) {
                $CGPA = "E";
            } else {
                $CGPA = "FAIL";
            }
            //CGPA CALCULATION START
            return view('Admin.stude-result-view', compact('StudentProfile', 'Results', 'GetPercentage', 'CGPA'));
        }
    }

    public function uniqueStudent(Request $request) {
        $roll = $request->get('roll');
        $class = $request->get('class');
        $student = students::where('semester', $class)->where('roll', $roll)->first();
        if (!empty($student)) {
            return ['success' => true, 'message' => '1'];
        } else {
            return ['success' => true, 'message' => '0'];
        }
        //return ['success'=>true,'message'=>'0'];
    }

}
