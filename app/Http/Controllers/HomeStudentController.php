<?php

namespace App\Http\Controllers;

use App\Models\ApplicantDetails;
use App\Models\ApplicationDetails;
use App\Models\ApplicationType;
use App\Models\Campuses;
use App\Models\NextOfKin;
use App\Models\PersonalInformation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeStudentController extends Controller
{
    //

    public function index()
    {

        return view('student.pages.home');
    }

    public function apply_form()
    {

        $campuses = Campuses::all();

        $application = ApplicationType::all();

        return view('student.pages.application', compact('campuses', 'application'));
    }



    public function apply_form_submit(Request $request)
    {

        $request->validate([
            'campuses_name' => 'required',
            'application_type' => 'required',
            'first_name' => 'required',
            'surname' => 'required',
        ]);

        if ($request->index_number != null) {
            $index_no = $request->index_number;
        } else {
            $index_no = $request->eq_number;
        }

        // return strtoupper($request->surname);

        $personal_info = new PersonalInformation();
        $personal_info->first_name = $request->first_name;
        $personal_info->middle_name = $request->middle_name;
        $personal_info->surname = $request->surname;
        $personal_info->save();


        $last_personal_id = PersonalInformation::latest()->first();
        $last_inserted_id = $last_personal_id->id;

        $application = new ApplicationDetails();

        // $year = date("Y");
        // $numbers = rand(1, 999);
        // $reg_no = 'ADEM/' . $year . '/' . $numbers;
        $application->index_no = $index_no;
        $application->personal_id = $last_inserted_id;
        $application->campuses_name = $request->campuses_name;
        $application->application_type = $request->application_type;
        $application->save();

        $user = new User();
        $user->name = $request->first_name . ' ' . $request->middle_name . ' ' . $request->surname;
        $user->email = null;
        $user->username = $index_no;
        $user->password = Hash::make(strtoupper($request->surname));
        $user->save();

        $notification = array(
            'message' => 'Successfully Registered but temporary please login to finish the process',
            'alert-type' => 'success',
        );


        return redirect()->route('home')->with($notification);
    }


    // after login
    public function after_login()
    {

        $student_id = Auth::user()->username;
        $application_status = ApplicationDetails::firstWhere('index_no', $student_id)->application_status;

        return view('student.pages.index', compact('application_status'));
    }

    //function to view student profile
    public function view_profile()
    {
        //
        $index_no = Auth()->user()->username;

        $personal_id = ApplicationDetails::firstWhere('index_no', $index_no)->personal_id;

        $personal_info = PersonalInformation::select([
            'personal_information.id',
            'personal_information.first_name',
            'personal_information.middle_name',
            'personal_information.surname',
            'personal_information.gender',
            'personal_information.dob',
            'personal_information.place_of_birth',
            'addresses.pobox',
            'addresses.town_city',
            'addresses.district',
            'addresses.region',
            'addresses.country',
            'addresses.phone_no',
            'addresses.email'
        ])
            ->join('addresses', 'addresses.personal_id', '=', 'personal_information.id')
            ->find($personal_id);

        $student_kin_info = NextOfKin::where('personal_id', $personal_id)->get();

        $student_working_info = ApplicantDetails::where('personal_id', $personal_id)->get();

        return view('student.pages.student_view_profile', compact(
            'personal_info',
            'student_kin_info',
            'student_working_info',
        ));
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
