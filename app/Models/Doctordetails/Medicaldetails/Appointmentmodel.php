<?php

namespace App\Models\Doctordetails\Medicaldetails;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Doctordetails\Medicaldetails\Doccreateds;

class Appointmentmodel extends Model
{
    use HasFactory;

    protected $fillable = [
        'doccreateds_id',
        // 'date',
        'am_time',
         'pm_time',
        //  'hours',
        //  'minutes',

    ];

     public function appointments()
    {
        return $this->belongsTo(Doccreateds::class, 'doccreateds_id');
    }
}
