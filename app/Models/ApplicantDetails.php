<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicantDetails extends Model
{
    use HasFactory;

    protected $fillable = [
        'personal_id',
        'current_work_place',
        'position_title',
        'ward',
        'district_council',
        'region_applicant',
        'appointment_years',
        'employer_phone',
    ];
}
