<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeStudentController extends Controller
{
    //

    public function index (){

        return view('student.pages.home');
    }

    public function apply_form(){
        return view('student.pages.application');
    }
}
