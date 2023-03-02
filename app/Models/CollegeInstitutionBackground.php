<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CollegeInstitutionBackground extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_of_college',
        'certificate_index_number',
        'year_completed_college',
        'course_attended',
        'award_college'
    ];
}
