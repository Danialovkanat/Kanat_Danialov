<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function get_students(){
    	static $students= array(0=>"Dauren",1=>"Talgat",2=>"Maksay" );
		return $students;    
    }
    public function get_age(){
    	static $age = array(0 =>"35",1=>"20",2=>"16" );
    	return $age;
    }
   	public function get_dat(){
   		static $birth = array(0 =>"1985",1=>"2001",2=>"2004");
   		return $birth;
   	} 
    public function show($id){
    	$students=$this->get_students();
    	$age=$this->get_age();
    	$birth=$this->get_dat();
    	 return view("students",["name"=>$students[$id]]);
    	 // return view('students')->with("$age",$age);
    } 
public function birth($number){
    	 return view('students')->with('$bith',2002);
    } 
  public function age($age{
    	$students=$this->get_students();
    	static $age=18;
    	$birth=$this->get_dat();
    	 return view("$age",compact('age'));
    	 
    } }
