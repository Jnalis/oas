<?php

namespace App\Http\Livewire;

use App\Models\Address;
use App\Models\ApplicantDetails;
use App\Models\ApplicationDetails;
use App\Models\CollegeInstitutionBackground;
use App\Models\EducationBackground;
use App\Models\NextOfKin;
use App\Models\PersonalInformation;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;


class MultiStepForm extends Component
{

    use WithFileUploads;

    public $campuses_name;
    public $application_type;
    public $first_name;
    public $middle_name;
    public $surname;
    public $gender;
    public $dob;
    public $place_of_birth;
    public $pobox;
    public $town_city;
    public $district;
    public $region;
    public $country;
    public $phone_no;
    public $email;
    public $name_kin;
    public $phone_kin;
    public $relationship_kin;
    public $district_kin;
    public $town_city_kin;
    public $current_work_place;
    public $position_title;
    public $ward;
    public $district_council;
    public $region_applicant;
    public $appointment_years;
    public $employer_phone;
    public $primary_school_name;
    public $level_of_education;
    public $award;
    public $year_completed;
    public $index_number;
    public $examination_center;
    public $remarks;
    public $name_of_college;
    public $certificate_index_number;
    public $year_completed_college;
    public $course_attended;
    public $award_college;


    public $totalSteps = 7;
    public $currentStep = 1;

    public $student_id;
    public $personal_id_from_db;
    public $application_data_from_db;

    public $personal_details;
    public $personal_id;


    public function mount()
    {
        $this->currentStep = 1;

        $this->student_id = Auth::user()->username;
        $this->personal_id_from_db = ApplicationDetails::firstWhere('index_no', $this->student_id)->personal_id;
        $this->application_data_from_db = ApplicationDetails::select([
            'application_details.id',
            'application_details.index_no',
            'application_details.reg_no',
            'application_details.application_status',
            'campuses.campuses_name',
            'application_types.application_type'
        ])
            ->leftJoin('campuses', 'campuses.id', '=', 'application_details.campuses_name')
            ->leftJoin('application_types', 'application_types.id', '=', 'application_details.application_type')
            ->where('application_details.personal_id', $this->personal_id_from_db)
            ->first();

        $this->campuses_name = $this->application_data_from_db->campuses_name;
        $this->application_type = $this->application_data_from_db->application_type;

        $this->personal_details = PersonalInformation::where('id', $this->personal_id_from_db)->first();
        $this->first_name = $this->personal_details->first_name;
        $this->middle_name = $this->personal_details->middle_name;
        $this->surname = $this->personal_details->surname;

        $this->index_number = $this->student_id;

        // dd($this->personal_details);

        // dd($this->application_data_from_db);
    }



    public function render()
    {
        return view('livewire.multi-step-form');
    }


    public function increaseStep()
    {
        //
        $this->resetErrorBag();
        $this->validateData();

        $this->currentStep++;

        if ($this->currentStep > $this->totalSteps) {

            $this->currentStep->step = $this->totalSteps;
        }
    }

    public function decreaseStep()
    {
        //
        $this->resetErrorBag();

        $this->currentStep--;

        if ($this->currentStep < 1) {

            $this->currentStep->step = 1;
        }
    }


    public function validateData()
    {
        //
        if ($this->currentStep == 1) {

            $this->validate([
                'campuses_name' => 'required',
                'application_type' => 'required',
            ]);
        } elseif ($this->currentStep == 2) {

            $this->validate([
                'first_name' => 'required|string',
                // 'middle_name' => 'required|string',
                'surname' => 'required|string',
                'gender' => 'required',
                'dob' => 'required|date',
                'place_of_birth' => 'required|string',
            ]);
        } elseif ($this->currentStep == 3) {

            $this->validate([
                // pobox
                'town_city' => 'required|string',
                'district' => 'required|string',
                'region' => 'required|string',
                'country' => 'required|string',
                'phone_no' => 'required|string|unique:addresses',
                // email
            ]);
        } elseif ($this->currentStep == 4) {

            $this->validate([
                'name_kin' => 'required|string',
                'phone_kin' => 'required|string',
                'relationship_kin' => 'required|string',
                // district_kin
                // town_city_kin
            ]);
        }
        // elseif ($this->currentStep == 5) {

        //     $this->validate([
        //         'current_work_place' => 'required',
        //         'position_title' => 'required',
        //         'ward' => 'required',
        //         'district_council' => 'required',
        //         'region_applicant' => 'required',
        //         'appointment_years' => 'required',
        //         'employer_phone' => 'required',
        //     ]);
        // }
        elseif ($this->currentStep == 6) {

            $this->validate([
                'primary_school_name' => 'required|string',
                'level_of_education' => 'required|string',
                'award' => 'required|string',
                'year_completed' => 'required|date',
                'index_number' => 'required|string',
                'examination_center' => 'required|string',
                'remarks' => 'required|string',
            ]);
        }
    }

    public function register()
    {
        //
        // dd($this->personal_id_from_db);

        if ($this->currentStep == 7) {

            $this->validate([
                'name_of_college' => 'required|string',
                'certificate_index_number' => 'required|string',
                'year_completed_college' => 'required|date',
                'course_attended' => 'required|string',
                'award_college' => 'required|string',
            ]);
        }

        PersonalInformation::whereId($this->personal_id_from_db)->update(
            [
                'gender' => $this->gender,
                'dob' => $this->dob,
                'place_of_birth' => $this->place_of_birth,
            ]
        );

        Address::create(
            [
                'personal_id' => $this->personal_id_from_db,
                'pobox' => $this->pobox,
                'town_city' => $this->town_city,
                'district' => $this->district,
                'region' => $this->region,
                'country' => $this->country,
                'phone_no' => $this->phone_no,
                'email' => $this->email,
            ]
        );

        NextOfKin::create(
            [
                'personal_id' => $this->personal_id_from_db,
                'name_kin' => $this->name_kin,
                'phone_kin' => $this->phone_kin,
                'relationship_kin' => $this->relationship_kin,
                'district_kin' => $this->district_kin,
                'town_city_kin' => $this->town_city_kin,
            ]
        );

        ApplicantDetails::create(
            [
                'personal_id' => $this->personal_id_from_db,
                'current_work_place' => $this->current_work_place,
                'position_title' => $this->position_title,
                'ward' => $this->ward,
                'district_council' => $this->district_council,
                'region_applicant' => $this->region_applicant,
                'appointment_years' => $this->appointment_years,
                'employer_phone' => $this->employer_phone,
            ]
        );

        EducationBackground::create(
            [
                'personal_id' => $this->personal_id_from_db,
                'primary_school_name' => $this->primary_school_name,
                'level_of_education' => $this->level_of_education,
                'award' => $this->award,
                'year_completed' => $this->year_completed,
                'index_number' => $this->index_number,
                'examination_center' => $this->examination_center,
                'remarks' => $this->remarks,
            ]
        );

        CollegeInstitutionBackground::create(

            [
                'personal_id' => $this->personal_id_from_db,
                'name_of_college' => $this->name_of_college,
                'certificate_index_number' => $this->certificate_index_number,
                'year_completed_college' => $this->year_completed_college,
                'course_attended' => $this->course_attended,
                'award_college' => $this->award_college,
            ]
        );

        ApplicationDetails::whereId($this->personal_id_from_db)->update(
            [

                'application_status' => 'not approved',
            ]
        );

        // PersonalInformation::update($values_personal_info)->where('id', $this->personal_id_from_db);
        // Address::insert($values_address_working_address);
        // NextOfKin::insert($values_next_of_kin);
        // ApplicantDetails::insert($values_applicant_details);
        // EducationBackground::insert($values_education_background);
        // CollegeInstitutionBackground::insert($values_education_background_college);
        // ApplicationDetails::update($value_application_detail)->where('index_no', $this->student_id = Auth::user()->username);

        session()->flash('message', 'Profile Updated Successfully');

        return redirect()->route('student.dashboard');


        // dd($values_personal_info, $values_address_working_address, $values_next_of_kin, $values_applicant_details, $values_education_background, $values_education_background, $value_application_detail);
    }
}
