<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationBackground extends Model
{
    use HasFactory;

    protected $fillable = [
        'primary_school_name',
        'level_of_education',
        'award',
        'year_completed',
        'index_number',
        'examination_center',
        'remarks',
    ];
}
