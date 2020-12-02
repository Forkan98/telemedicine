<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Doctor extends Model
{
    protected $fillable = ['fullName','address','contact','email','expertise','userId','fee','password'];

    public static function saveDoctorInfo($request){
        $doctor = new Doctor();
        $doctor->fullName  = $request->fullName;
        $doctor->address   = $request->address;
        $doctor->contact   = $request->contact;
        $doctor->email     = $request->email;
        $doctor->expertise = $request->expertise;
        $doctor->userId    = $request->userId;
        $doctor->fee       = $request->fee;
        $doctor->password  = $request->password;
        $doctor->save();
    }

}
