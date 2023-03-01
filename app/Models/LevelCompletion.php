<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LevelCompletion extends Model
{
    use HasFactory;

    protected $fillable = [
        'level_completion_status',
    ];
}
