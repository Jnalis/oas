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

<hr>
<p class="text-muted" style="font-size: 18px; font-weight: bold;">
    O-Lvel Education
</p>

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

{{-- hiyo hapo juu ni form step inafanya kazi --}}
