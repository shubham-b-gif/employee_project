<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\employee;
use App\Models\job;
use App\Models\department;
class EmployeeController extends Controller
{
    function Showpage(){
        
        
        $jobs = DB::table('jobs')->get();
        $departments = DB::table('departments')->get();
        return view('form', compact('jobs','departments'));
       
   }
   function showdata(){
    $pdata=employee::all(); 
    return view('welcome',['data'=>$pdata]);   
  }
   function insert(Request $req){
    // dd($req);
    $validated = $req->validate([
        'First_name' => 'required',
        'Last_name' => 'required',
        'hire_date' => 'required',
        'salary' => 'required',
        'email' => 'required',
        'job' => 'required',
        'dept' => 'required',
        'manager' => 'required',
    ]);
    // dd($req);
    $employeeData=new employee();
    $employeeData->first_name=$req->First_name;
    $employeeData->last_name=$req->Last_name;
    $employeeData->hire_date=$req->hire_date;
    $employeeData->salary=$req->salary;
    $employeeData->email=$req->email;
    $employeeData->job_id=$req->job;
    // $employeeData->department_id=$req->dept;
    $employeeData->manager_id=$req->manager;
    $employeeData->save();
    // dd($employeeData);
    return redirect('/')->with('success','Employee Added successfully!');
    // return redirect()->route('/')->with('success','Item created successfully!');
    
}
function update ($pid){
    // echo$pid;
    $pdata=employee::findorfail($pid);
    $ejob=job::findorfail($pid);

    $jobs = DB::table('jobs')->get();
    $departments = DB::table('departments')->get();
//    return view('update',['pdata'=>$pdata]);
   return view('update', compact('pdata','jobs','departments','ejob'));   
}
function saveupdate($id,Request $req){
    $validated = $req->validate([
        'First_name' => 'required',
        'Last_name' => 'required',
        'hire_date' => 'required',
        'salary' => 'required',
        'email' => 'required',
        'job' => 'required',
        
    ]);
    $employeeData=employee::find($id);
    $employeeData->first_name=$req->First_name;
    $employeeData->last_name=$req->Last_name;
    $employeeData->hire_date=$req->hire_date;
    $employeeData->salary=$req->salary;
    $employeeData->email=$req->email;
    $employeeData->job_id=$req->job;
    $employeeData->save();
    // return redirect('/');
    return redirect('/')->with('success','Employee updated successfully!');
        
}
function delete($id,Request $req){

    $employeeData=employee::findorfail($id);
    $employeeData->delete();
    return redirect('/')->with('error','Employee daata deleted!');
}
}
