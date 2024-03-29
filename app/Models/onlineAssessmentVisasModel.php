<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class onlineAssessmentVisasModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'online_assessment_id',
        'visas',
        'type-visa',
        'enter-date',
        'exit-date'
    ];
}
