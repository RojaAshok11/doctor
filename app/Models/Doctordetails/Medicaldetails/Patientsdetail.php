<?php

namespace App\Models\Doctordetails\Medicaldetails;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patientsdetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'phone_number',
        // 'specialist',
        'doccreateds_id',
        'appointmentmodel_id',

        'appointmenttime',
        'date',
        'status',


    ];

    public function doctor()
    {
        return $this->belongsTo(Doccreateds::class, 'doccreateds_id');
    }

}
