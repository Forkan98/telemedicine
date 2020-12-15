<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = ['patientName','age','contact','address','bloodGroup','email'];

    public static function savePatientInfo($request) {
        Patient::create($request->all());
    }
}
