<?php

namespace App\Http\Controllers;

use App\Models\ApplicationType;
use App\Models\Campuses;
use Illuminate\Http\Request;

class HomeStudentController extends Controller
{
    //

    public function index (){

        return view('student.pages.home');
    }

    public function apply_form(){

        $campuses = Campuses::all();

        $application = ApplicationType::all();

        return view('student.pages.application', compact('campuses', 'application'));
    }


    // after login
    public function after_login(){
        return view('student.pages.index');
    }
}
