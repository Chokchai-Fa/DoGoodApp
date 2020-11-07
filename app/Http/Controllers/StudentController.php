<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Student; //นำโมเดลใช้งาน


class StudentController extends Controller
{
    //

    public function addstudentview(){
        return view('addstudent');
    }


    public function addstudent(Request $request) {
        $savedb = new Student;
        $savedb->student = $request['inputname'];
        $savedb->Age = $request['inputage'];
        $savedb->Tel = $request['inputtel'];
        $savedb->save();
        return redirect('management/student');
    }

    public function index(){
        $_student = Student::all(); //แสดงข้อมูลทั้งหมดในตาราง
        $count = Student::count();//นับจำนวนแถวทั้งหมด
        return view('management',[
            'stdinfo'=>$_student,
            'count'=>$count
        ]);
    }


   /* public function index(){
        $_student = Student::all(); //แสดงข้อมูลทั้งหมดในตาราง
        return response()->json([
            'stdinfo'=>$_student
        ]);
    } */


    public function destroy($id){
        Student::destroy($id);
        return back();
    }

    public function editview($id){
        $_student = Student::find($id);
        return view('updateprofile',[
            'stdinfo'=>$_student
        ]);
    }

    public function edit(Request $request){
        $savedb = Student::find($request['inputid']);
        $savedb->student = $request['inputname'];
        $savedb->Age = $request['inputage'];
        $savedb->Tel = $request['inputtel'];
        $savedb->save();
        return redirect('management/student');
    }



}
