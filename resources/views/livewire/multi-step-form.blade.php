<div>


    <form action="" wire:submit.prevent="register">


        {{-- step 1 --}}
        @if ( $currentStep == 1 )
        <div class="step-one">
            <div class="card">
                <div class="card-header bg-secondary text-white">STEP 1/7 - Capmuses & Program Selected</div>

                <div class="card-body">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-form-label" for="campuses_name">
                                    Select Campuses <sup style="color: red; font-size: 18px;">*</sup>
                                </label>

                                <select class="form-control form-select" wire:model="campuses_name" readonly>

                                    <option selected wire:model="campuses_name">{{ $campuses_name }}</option>

                                </select>

                                <span class="text-danger">@error('campuses_name'){{ $message }} @enderror</span>

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-form-label" for="application_type">
                                    Select Program <sup style="color: red; font-size: 18px;">*</sup>
                                </label>

                                <select class="form-control form-select" wire:model="application_type" readonly>

                                    <option selected wire:model="application_type">{{ $application_type }}</option>

                                </select>

                                <span class="text-danger">@error('application_type'){{ $message }} @enderror</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        @endif



        {{-- step 2 --}}
        @if ( $currentStep == 2 )
        <div class="step-two">
            <div class="card">

                <div class="card-header bg-secondary text-white">STEP 2/7 - Personal Details</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-form-label" for="first_name">
                                    First name
                                </label>

                                <input type="text" id="first_name" class="form-control" wire:model="first_name" readonly>

                                <span class="text-danger">@error('first_name'){{ $message }} @enderror</span>


                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-form-label" for="middle_name">
                                    Middle name
                                </label>

                                <input type="text" id="middle_name" class="form-control" wire:model="middle_name" readonly>

                                <span class="text-danger">@error('middle_name'){{ $message }} @enderror</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-form-label" for="surname">
                                    Surname
                                </label>

                                <input type="text" id="surname" class="form-control" wire:model="surname" readonly>

                                <span class="text-danger">@error('surname'){{ $message }} @enderror</span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">

                            <label class="col-form-label" for="gender">
                                Gender <sup style="color: red; font-size: 18px;">*</sup>
                            </label>

                            <select class="form-select form-control" name="gender" wire:model="gender">
                                <option></option>

                                <option value="Male">Male</option>
                                <option value="Female">Female</option>

                            </select>

                            <span class="text-danger">@error('gender'){{ $message }} @enderror</span>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-form-label" for="dob">
                                    Date of Birth <sup style="color: red; font-size: 18px;">*</sup>
                                </label>

                                <input type="date" name="dob" id="dob" class="form-control" value="{{ old('dob') }}"
                                    wire:model="dob">

                                <span class="text-danger">@error('dob'){{ $message }} @enderror</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-form-label" for="place_of_birth">
                                    Place of Birth <sup style="color: red; font-size: 18px;">*</sup>
                                </label>

                                <input type="text" name="place_of_birth" id="place_of_birth" class="form-control"
                                    value="{{ old('place_of_birth') }}" wire:model="place_of_birth">

                                <span class="text-danger">@error('place_of_birth'){{ $message }} @enderror</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif




        {{-- step 3 --}}
        @if ( $currentStep == 3 )
        <div class="step-three">
            <div class="card">

                <div class="card-header bg-secondary text-white">STEP 3/7 - Address & Contacts</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-form-label" for="pobox">
                                    P.O.Box
                                </label>

                                <input type="text" name="pobox" id="pobox" class="form-control"
                                    value="{{ old('pobox') }}" wire:model="pobox">


                                <span class="text-danger">@error('pobox'){{ $message }} @enderror</span>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-form-label" for="town_city">
                                    Town/City <sup style="color: red; font-size: 18px;">*</sup>
                                </label>

                                <input type="text" name="town_city" id="town_city" class="form-control"
                                    value="{{ old('town_city') }}" wire:model="town_city">


                                <span class="text-danger">@error('town_city'){{ $message }} @enderror</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-form-label" for="district">
                                    District <sup style="color: red; font-size: 18px;">*</sup>
                                </label>

                                <input type="text" name="district" id="district" class="form-control"
                                    value="{{ old('district') }}" wire:model="district">


                                <span class="text-danger">@error('district'){{ $message }} @enderror</span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-form-label" for="region">
                                    Region <sup style="color: red; font-size: 18px;">*</sup>
                                </label>

                                <input type="text" name="region" id="region" class="form-control"
                                    value="{{ old('region') }}" wire:model="region">

                                <span class="text-danger">@error('region'){{ $message }} @enderror</span>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-form-label" for="country">
                                    Country <sup style="color: red; font-size: 18px;">*</sup>
                                </label>

                                <input type="text" name="country" id="country" class="form-control"
                                    value="{{ old('country') }}" wire:model="country">


                                <span class="text-danger">@error('country'){{ $message }} @enderror</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-form-label" for="phone_no">
                                    Phone No <sup style="color: red; font-size: 18px;">*</sup>
                                </label>

                                <input type="text" name="phone_no" id="phone_no" class="form-control"
                                    value="{{ old('phone_no') }}" wire:model="phone_no">


                                <span class="text-danger">@error('phone_no'){{ $message }} @enderror</span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="col-form-label" for="email">
                                    Email
                                </label>

                                <input type="email" name="email" id="email" class="form-control"
                                    value="{{ old('email') }}" wire:model="email">


                                <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif




        {{-- step 4 --}}
        @if ( $currentStep == 4 )
        <div class="step-four">
            <div class="card">

                <div class="card-header bg-secondary text-white">STEP 4/7 - Next of Kin Details</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-form-label" for="name_kin">
                                    Name <sup style="color: red; font-size: 18px;">*</sup>
                                </label>

                                <input type="text" name="name_kin" id="name_kin" class="form-control"
                                    value="{{ old('name_kin') }}" wire:model="name_kin">


                                <span class="text-danger">@error('name_kin'){{ $message }} @enderror</span>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-form-label" for="phone_kin">
                                    Phone <sup style="color: red; font-size: 18px;">*</sup>
                                </label>

                                <input type="text" name="phone_kin" id="phone_kin" class="form-control"
                                    value="{{ old('phone_kin') }}" wire:model="phone_kin">


                                <span class="text-danger">@error('phone_kin'){{ $message }} @enderror</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-form-label" for="relationship_kin">
                                    Relationship <sup style="color: red; font-size: 18px;">*</sup>
                                </label>

                                <input type="text" name="relationship_kin" id="relationship_kin" class="form-control"
                                    value="{{ old('relationship_kin') }}" wire:model="relationship_kin">


                                <span class="text-danger">@error('relationship_kin'){{ $message }} @enderror</span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-form-label" for="district_kin">
                                    District
                                </label>

                                <input type="text" name="district_kin" id="district_kin" class="form-control"
                                    value="{{ old('district_kin') }}" wire:model="district_kin">


                                <span class="text-danger">@error('district_kin'){{ $message }} @enderror</span>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-form-label" for="town_city_kin">
                                    Town/City
                                </label>

                                <input type="text" name="town_city_kin" id="town_city_kin" class="form-control"
                                    value="{{ old('town_city_kin') }}" wire:model="town_city_kin">


                                <span class="text-danger">@error('town_city_kin'){{ $message }} @enderror</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif




        {{-- step 5 --}}
        @if ( $currentStep == 5 )
        <div class="step-five">
            <div class="card">

                <div class="card-header bg-secondary text-white">STEP 5/7 - APPLICANT'S DETAILS</div>

                <div class="card-body">
                    <div class="row">

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-form-label" for="current_work_place">
                                    Current Working Place
                                </label>

                                <input type="text" name="current_work_place" id="current_work_place"
                                    class="form-control" value="{{ old('current_work_place') }}"
                                    wire:model="current_work_place">


                                <span class="text-danger">@error('current_work_place'){{ $message }} @enderror</span>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-form-label" for="position_title">
                                    Position/Title
                                </label>

                                <input type="text" name="position_title" id="position_title" class="form-control"
                                    value="{{ old('position_title') }}" wire:model="position_title">


                                <span class="text-danger">@error('position_title'){{ $message }} @enderror</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-form-label" for="ward">
                                    Ward
                                </label>

                                <input type="text" name="ward" id="ward" class="form-control" value="{{ old('ward') }}"
                                    wire:model="ward">


                                <span class="text-danger">@error('ward'){{ $message }} @enderror</span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-form-label" for="district_council">
                                    District/Council
                                </label>

                                <input type="text" name="district_council" id="district_council" class="form-control"
                                    value="{{ old('district_council') }}" wire:model="district_council">


                                <span class="text-danger">@error('district_council'){{ $message }} @enderror</span>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-form-label" for="region_applicant">
                                    Region
                                </label>

                                <input type="text" name="region_applicant" id="region_applicant" class="form-control"
                                    value="{{ old('region_applicant') }}" wire:model="region_applicant">


                                <span class="text-danger">@error('region_applicant'){{ $message }} @enderror</span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-form-label" for="appointment_years">
                                    Number of Years From first Appointment
                                </label>

                                <input type="text" name="appointment_years" id="appointment_years" class="form-control"
                                    value="{{ old('appointment_years') }}" wire:model="appointment_years">


                                <span class="text-danger">@error('appointment_years'){{ $message }} @enderror</span>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-form-label" for="employer_phone">
                                    Employer Phone
                                </label>

                                <input type="text" name="employer_phone" id="employer_phone" class="form-control"
                                    value="{{ old('employer_phone') }}" wire:model="employer_phone">



                                <span class="text-danger">@error('employer_phone'){{ $message }} @enderror</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif



        {{-- step 6 --}}
        @if ( $currentStep == 6 )
        <div class="step-six">
            <div class="card">

                <div class="card-header bg-secondary text-white">STEP 6/7 - EDUCATION BACKGROUND</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="col-form-label" for="primary_school_name">
                                    Primary School Name <sup style="color: red; font-size: 18px;">*</sup>
                                </label>

                                <input type="text" name="primary_school_name" id="primary_school_name"
                                    class="form-control" value="{{ old('primary_school_name') }}"
                                    wire:model="primary_school_name">


                                <span class="text-danger">@error('primary_school_name'){{ $message }} @enderror</span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-form-label" for="level_of_education">
                                    Level of Education <sup style="color: red; font-size: 18px;">*</sup>
                                </label>

                                <input type="text" name="level_of_education" id="level_of_education"
                                    class="form-control" value="{{ old('level_of_education') }}"
                                    wire:model="level_of_education">


                                <span class="text-danger">@error('level_of_education'){{ $message }} @enderror</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-form-label" for="award">
                                    Award <sup style="color: red; font-size: 18px;">*</sup>
                                </label>

                                <input type="text" name="award" id="award" class="form-control"
                                    value="{{ old('award') }}" wire:model="award">


                                <span class="text-danger">@error('award'){{ $message }} @enderror</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-form-label" for="year_completed">
                                    Year Compleated <sup style="color: red; font-size: 18px;">*</sup>
                                </label>

                                <input type="date" name="year_completed" id="year_completed" class="form-control"
                                    value="{{ old('year_completed') }}" wire:model="year_completed">


                                <span class="text-danger">@error('year_completed'){{ $message }} @enderror</span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-form-label" for="index_number">
                                    Index Number <sup style="color: red; font-size: 18px;">*</sup>
                                </label>

                                <input type="text" name="index_number" id="index_number" class="form-control"
                                    value="{{ old('index_number') }}" wire:model="index_number" readonly>


                                <span class="text-danger">@error('index_number'){{ $message }} @enderror</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-form-label" for="examination_center">
                                    Examination Center <sup style="color: red; font-size: 18px;">*</sup>
                                </label>

                                <input type="text" name="examination_center" id="examination_center"
                                    class="form-control" value="{{ old('examination_center') }}"
                                    wire:model="examination_center">


                                <span class="text-danger">@error('examination_center'){{ $message }} @enderror</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-form-label" for="remarks">
                                    Remarks <sup style="color: red; font-size: 18px;">*</sup>
                                </label>

                                <input type="text" name="remarks" id="remarks" class="form-control"
                                    value="{{ old('remarks') }}" wire:model="remarks">


                                <span class="text-danger">@error('remarks'){{ $message }} @enderror</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif




        {{-- step 7 --}}
        @if ( $currentStep == 7 )
        <div class="step-seven">
            <div class="card">

                <div class="card-header bg-secondary text-white">STEP 7/7 - EDUCATION BACKGROUND
                    <small>College / Institution attended</small>
                </div>

                <div class="card-body">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="col-form-label" for="name_of_college">
                                    Name of college <sup style="color: red; font-size: 18px;">*</sup>
                                </label>

                                <input type="text" name="name_of_college" id="name_of_college" class="form-control"
                                    value="{{ old('name_of_college') }}" wire:model="name_of_college">


                                <span class="text-danger">@error('name_of_college'){{ $message }} @enderror</span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-form-label" for="certificate_index_number">
                                    Certificate Number/Index Number <sup style="color: red; font-size: 18px;">*</sup>
                                </label>

                                <input type="text" name="certificate_index_number" id="certificate_index_number"
                                    class="form-control" value="{{ old('certificate_index_number') }}"
                                    wire:model="certificate_index_number">


                                <span class="text-danger">@error('certificate_index_number'){{ $message }}
                                    @enderror</span>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-form-label" for="year_completed_college">
                                    Year Compleated <sup style="color: red; font-size: 18px;">*</sup>
                                </label>

                                <input type="date" name="year_completed_college" id="year_completed_college"
                                    class="form-control" value="{{ old('year_completed_college') }}"
                                    wire:model="year_completed_college">


                                <span class="text-danger">@error('year_completed_college'){{ $message }}
                                    @enderror</span>
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-form-label" for="course_attended">
                                    Course attended <sup style="color: red; font-size: 18px;">*</sup>
                                </label>

                                <input type="text" name="course_attended" id="course_attended" class="form-control"
                                    value="{{ old('course_attended') }}" wire:model="course_attended">


                                <span class="text-danger">@error('course_attended'){{ $message }} @enderror</span>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="col-form-label" for="award_college">
                                    Award <sup style="color: red; font-size: 18px;">*</sup>
                                </label>

                                <input type="text" name="award_college" id="award_college" class="form-control"
                                    value="{{ old('award_college') }}" wire:model="award_college">


                                <span class="text-danger">@error('award_college'){{ $message }} @enderror</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        @endif


        <div class="action-button d-flex justify-content-between bg-white pt-2 pb-2">
            @if ( $currentStep == 1 )

            <div></div>

            @endif
            @if ( $currentStep == 2 || $currentStep == 3 || $currentStep == 4 || $currentStep == 5
            || $currentStep == 6 || $currentStep == 7 )

            <button type="button" class="btn btn-lg btn-secondary" wire:click="decreaseStep()">Back</button>

            @endif
            @if ( $currentStep == 1 || $currentStep == 2 || $currentStep == 3 || $currentStep == 4 || $currentStep == 5
            || $currentStep == 6 )

            <button type="button" class="btn btn-lg btn-primary" wire:click="increaseStep()">Next</button>

            @endif
            @if ( $currentStep == 7 )

            <button type="submit" class="btn btn-lg btn-success">Submit</button>
            @endif
        </div>


    </form>


</div>
