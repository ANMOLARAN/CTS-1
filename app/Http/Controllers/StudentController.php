<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class StudentController extends Controller
{
    //
   public function studentData(){
    $data=student::all();
    return view('student.student',compact('data'));
   }

//    public function saveStudent(Request $request){
//     $request->validate([
//         'name'=>'required',
//         'email'=>'required|email'
//     ]);
//    $data=new student();
//    $data->name=$request->name;
//    $data->email=$request->email;
//    $data->save();
//    return redirect('studentData');
//    }

public function saveStudent(Request $request){

   $email=$request->email;
   $student = student::where('email', $email)->first();

    if ($student) {
        return redirect()->route('addStudent')->with('error', 'The email is already in use');
    }
    
   $request->validate([
            'name'=>'required',
            'email'=>'required|email'
        ]);
       $data=new student();
       $data->name=$request->name;
       $data->email=$request->email;
       $data->save();
       return redirect('studentData');
   }


   public function update($id,Request $request){
    $item=student::find($id);
    return view('student.updateStudent',compact('item'));
    }

    public function updateData(Request $request){
        $id=$request->id;
        $data=student::find($id);
        $data->name=$request->name;
        $data->email=$request->email;
        $data->save();
        return redirect('studentData');
        }

    public function deleteStudent($id,Request $request){   
        $data=student::find($id);
        $status=$data->delete();
        return redirect('studentData');
    }

   



}
