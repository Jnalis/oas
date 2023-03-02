<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NextOfKin extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_kin',
        'phone_kin',
        'relationship_kin',
        'district_kin',
        'town_city_kin',
    ];
}
