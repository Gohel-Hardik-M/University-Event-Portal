<?php

namespace App\Http\Controllers;

use App\Models\post;
use App\Models\Registrations;
use App\Models\students;
use App\Models\university;
use Illuminate\Http\Request;

class admin_controller extends Controller
{
    public function admin_index(){
        return view('admin_index');
    }


    public function admin_create(){
        return view('admin_create');
    }

    public function admin_register(){
        return view('admin_register');
    }



    public function admin_register_action(Request $request){
        
        $register = new Registrations();
        $register->username =  $request->username;
        $register->email = $request->email;
        $register->password = $request->password;
        $register->dob = $request->dob;
        $register->university_address = $request->university_address;
        $register->usertype = $request->usertype;
        $register->mobile = $request ->mobile;

        if($register->save()){
            if($request->usertype === 'university'){
                $university = new university();
                $university->username = $request->username;
                $university->email = $request->email;
                $university->mobile = $request->mobile;
                $university->university_address = $request->university_address;
                $university->password = $request->password;
                $university->save();
                return redirect()->back()->with('success','Registration Successfull !');
                

             
            }
            else{
                $student = new students();
                $student->username = $request->username;
                $student->email = $request->email;
                $student->dob = $request->dob;
                $student->mobile = $request->mobile;
                $student->password = $request->password;
                $student->save();
                return redirect()->back()->with('success','Registration Successfull !');
                }


                

            
            
        }

        else{
           return   redirect()->back()->with('error','Registation Failed');

        }



    }



    public function admin_university(){
        $universities = university::all();
        return view('admin_university',compact('universities'));
    }

    public function admin_university_view(Request $request){
      
        $posts = post::all()->where('university_id',$request->university_id);

        return view('admin_university_view',compact('posts'));

    }
}
