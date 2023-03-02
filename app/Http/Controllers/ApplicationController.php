<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\ApplicantDetails;
use App\Models\ApplicationDetails;
use App\Models\CollegeInstitutionBackground;
use App\Models\EducationBackground;
use App\Models\NextOfKin;
use App\Models\PersonalInformation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // return $request->all();

        $personal_info = new PersonalInformation();
        $personal_info->first_name = $request->first_name;
        $personal_info->middle_name = $request->middle_name;
        $personal_info->surname = $request->surname;
        $personal_info->gender = $request->gender;
        $personal_info->dob = $request->dob;
        $personal_info->place_of_birth = $request->place_of_birth;
        $personal_info->save();


        $last_personal_id = PersonalInformation::latest()->first();
        $id = $last_personal_id->id;


        $address = new Address();
        $address->personal_id = $id;
        $address->pobox = $request->pobox;
        $address->town_city = $request->town_city;
        $address->district = $request->district;
        $address->region = $request->region;
        $address->country = $request->country;
        $address->phone_no = $request->phone_no;
        $address->email = $request->email;
        $address->save();

        $next_of_kin = new NextOfKin();
        $next_of_kin->personal_id = $id;
        $next_of_kin->name_kin = $request->name_kin;
        $next_of_kin->phone_kin = $request->phone_kin;
        $next_of_kin->relationship_kin = $request->relationship_kin;
        $next_of_kin->district_kin = $request->district_kin;
        $next_of_kin->town_city_kin = $request->town_city_kin;
        $next_of_kin->save();

        $applicant_detail = new ApplicantDetails();
        $applicant_detail->personal_id = $id;
        $applicant_detail->current_work_place = $request->current_work_place;
        $applicant_detail->position_title = $request->position_title;
        $applicant_detail->ward = $request->ward;
        $applicant_detail->district_council = $request->district_council;
        $applicant_detail->region_applicant = $request->region_applicant;
        $applicant_detail->appointment_years = $request->appointment_years;
        $applicant_detail->employer_phone = $request->employer_phone;
        $applicant_detail->save();

        $education_back = new EducationBackground();
        $education_back->personal_id = $id;
        $education_back->primary_school_name = $request->primary_school_name;
        $education_back->level_of_education = $request->level_of_education;
        $education_back->award = $request->award;
        $education_back->year_completed = $request->year_completed;
        $education_back->index_number = $request->index_number;
        $education_back->examination_center = $request->examination_center;
        $education_back->remarks = $request->remarks;
        $education_back->save();

        $college = new CollegeInstitutionBackground();
        $college->personal_id = $id;
        $college->name_of_college = $request->name_of_college;
        $college->certificate_index_number = $request->certificate_index_number;
        $college->year_completed_college = $request->year_completed_college;
        $college->course_attended = $request->course_attended;
        $college->award_college = $request->award_college;
        $college->save();

        $application = new ApplicationDetails();

        $year = date("Y");
        $numbers = rand(1, 999);
        $reg_no = 'ADEM/' . $year . '/' . $numbers;


        $application->personal_id = $id;
        $application->reg_no = $reg_no;
        $application->campuses_name = $request->campuses_name;
        $application->application_type = $request->application_type;
        $application->save();

        $user = new User();
        $user->name = $request->first_name;
        $user->email = null;
        $user->username = $reg_no;
        $user->password = Hash::make($request->surname);
        $user->save();

        return redirect()->route('student.home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
