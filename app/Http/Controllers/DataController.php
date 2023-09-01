<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Hirer;

class DataController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function employee(Request $request){

        $request->validate(

            [
                'fname'=>'required',
                'lname'=>'required',
                'email'=>'required|email',
                'phone'=>'required',
                'answer'=>'required',
                'password'=>'required | confirmed',
                'password_confirmation'=>'required'
            ]
            );
        
      
        // echo "<pre>";
        // print_r($request->all());
        // echo "</pre>";

        $employee = new Employee;
        $employee->fname=$request['fname'];
        $employee->lname=$request['lname'];
        $employee->email=$request['email'];
        $employee->gender=$request['gender'];
        $employee->phone=$request['phone'];
        $employee->question=$request['question'];
        $employee->answer=$request['answer'];
        $employee->password=md5($request['password']);
        $employee->save();

        return redirect('/');

    }

    public function hirer(Request $request){

        $request->validate(

            [
                'fname'=>'required',
                'lname'=>'required',
                'email'=>'required|email',
                'phone'=>'required',
                'answer'=>'required',
                'password'=>'required | confirmed',
                'password_confirmation'=>'required'
            ]
            );
        
        // echo "<pre>";
        // print_r($request->all());
        // echo "</pre>";

        $hirer = new Hirer;
        $hirer->fname=$request['fname'];
        $hirer->lname=$request['lname'];
        $hirer->email=$request['email'];
        $hirer->phone=$request['phone'];
        $hirer->question=$request['question'];
        $hirer->answer=$request['answer'];
        $hirer->password=md5($request['password']);
        $hirer->save();
        return redirect('/');

    }
}
