<?php

namespace App\Http\Controllers;

use App\Models\ApplicationDetails;
use App\Models\ApplicationType;
use App\Models\Campuses;
use App\Models\PersonalInformation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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


    //view application
    public function view_application_details()
    {
        $reg_no = Auth()->user()->username;

        $application = ApplicationDetails::select([
            'application_details.id',
            'application_details.reg_no',
            'application_details.application_status',
            'campuses.campuses_name',
            'application_types.application_type'
        ])
            ->leftJoin('campuses', 'campuses.id', '=', 'application_details.campuses_name')
            ->leftJoin('application_types', 'application_types.id', '=', 'application_details.campuses_name')
            ->where('application_details.reg_no', $reg_no)
            ->get();

        return view('student.pages.student_view_application_details', compact('application'));
    }


    //show all info about application
    public function show_application_details($id)
    {

        $application = PersonalInformation::select([
            'personal_information.id',
            'personal_information.first_name',
            'personal_information.middle_name',
            'personal_information.surname',
            'personal_information.gender',
            'personal_information.dob',
            'personal_information.place_of_birth',
            'application_details.reg_no',
            'application_details.application_status',
            'campuses.campuses_name',
            'application_types.application_type',
            'addresses.pobox',
            'addresses.town_city',
            'addresses.district',
            'addresses.region',
            'addresses.country',
            'addresses.phone_no',
            'addresses.email',
            'next_of_kin.name_kin',
            'next_of_kin.phone_kin',
            'next_of_kin.relationship_kin',
            'next_of_kin.district_kin',
            'next_of_kin.town_city_kin',
            'applicant_details.current_work_place',
            'applicant_details.position_title',
            'applicant_details.ward',
            'applicant_details.district_council',
            'applicant_details.region_applicant',
            'applicant_details.appointment_years',
            'applicant_details.employer_phone',
            'education_backgrounds.primary_school_name',
            'education_backgrounds.level_of_education',
            'education_backgrounds.award',
            'education_backgrounds.year_completed',
            'education_backgrounds.index_number',
            'education_backgrounds.examination_center',
            'education_backgrounds.remarks',
            'college_institution_backgrounds.name_of_college',
            'college_institution_backgrounds.certificate_index_number',
            'college_institution_backgrounds.year_completed_college',
            'college_institution_backgrounds.course_attended',
            'college_institution_backgrounds.award_college'
        ])
            ->join('application_details', 'application_details.personal_id', '=', 'personal_information.id')
            ->join('campuses', 'campuses.id', '=', 'application_details.campuses_name')
            ->join('application_types', 'application_types.id', '=', 'application_details.application_type')
            ->join('addresses', 'addresses.personal_id', '=', 'personal_information.id')
            ->join('next_of_kin', 'next_of_kin.personal_id', '=', 'personal_information.id')
            ->join('applicant_details', 'applicant_details.personal_id', '=', 'personal_information.id')
            ->join('education_backgrounds', 'education_backgrounds.personal_id', '=', 'personal_information.id')
            ->join('college_institution_backgrounds', 'college_institution_backgrounds.personal_id', '=', 'personal_information.id')
            ->find($id);


        return view('student.pages.student_show_application', compact('application'));
    }
}
