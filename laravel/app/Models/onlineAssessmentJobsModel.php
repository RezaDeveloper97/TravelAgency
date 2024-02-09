<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class onlineAssessmentJobsModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'online_assessment_id',
        'job-name',
        'work-experience',
        'employment-period',
        'management-experience'
    ];
}
