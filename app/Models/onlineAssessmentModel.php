<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class onlineAssessmentModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'fnamelname',
        'age',
        'status',
        'location',
        'en-level',
        'en-score',
        'fr-level',
        'fr-score',
        'field-study',
        'academic-orientation',
        'edu-gap',
        'business-license',
        'cash-assets',
        'non-cash-assets',
        'migration-method',
        'get-know',
        'whatsapp',
        'active-email',
        'description',
        'tip',
    ];  
}
