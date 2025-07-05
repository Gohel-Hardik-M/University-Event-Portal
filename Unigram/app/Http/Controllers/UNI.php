<?php

namespace App\Http\Controllers;

use App\Models\post;
use App\Models\Registrations;
use App\Models\students;
use App\Models\university;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UNI extends Controller
{
    public function index(){
        return view('layouts.guest');
    }

    public function login(){
        return view('login');
    }

    public function register(){
        return view('register');
    }
    
    public function profile(){
               $university_id = Session::get('user')->id;
        $posts = post::all()->where('university_id',$university_id);

        return view('profile',compact('posts'));

    }

    public function ranking(){
        return view('ranking');
    }

    public function create_post(){
        return view('create_post');
    }

    public function register_action(Request $request){
        
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
                return redirect()->route('login');
                

             
            }
            else{
                $student = new students();
                $student->username = $request->username;
                $student->email = $request->email;
                $student->dob = $request->dob;
                $student->mobile = $request->mobile;
                $student->password = $request->password;
                $student->save();
                return redirect()->route('login');
                }


                

            
            
        }

        else{
            session()->flash('error','registration failed');
           return   redirect()->route('register');

        }



    }


    public function login_action(Request $request){
        $validatedData = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ],[
            'username.required'=>'Username is Required',
            'password.required' => 'password is required'
        ]);
        if(!$validatedData){
            return redirect()->route('register')->withErrors($validatedData)->withInput();
        }
        else{
           $user = Registrations::where('username',$request->username)->first();

           if($user && $user->password === $request->password){
       
            Session::put('user',$user);
            if(Session::has('user') && Session::get('user')->usertype ==='admin'){
                        
               return redirect()->route('admin_index',compact('user'))->with('success','Login Successfull');

            }
            

            return redirect()->route('index',compact('user'))->with('success','Login Successfull');


            }
            else{
                return redirect()->route('login')->with('error','Login failed')->withInput();

            }



        }

    }
    public function logout(){
        Session::flush();
        return redirect()->route('login');

    }
}
