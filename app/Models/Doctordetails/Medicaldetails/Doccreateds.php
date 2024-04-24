<?php

namespace App\Models\Doctordetails\Medicaldetails;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Doctordetails\Medicaldetails\Appointmentmodel;

class Doccreateds extends Model
{
    use HasFactory;

    protected $fillable = [
        'doctorName',
        'specialist',
        'doctor_id',
        'email',
        'phone',
        'gender',
        'address',

    ];
     protected $guarded = [];

    public function appointments()
    {
        return $this->hasOne(Appointmentmodel::class);
    }
}
