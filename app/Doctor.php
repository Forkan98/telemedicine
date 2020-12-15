<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use DB;
class Doctor extends Model

{
    protected $fillable = ['fullName','address','contact','email','expertise','fee','status'];


    public static function saveDoctorInfo($request){
        $doctor = new Doctor();
        $doctor->fullName  = $request->fullName;
        $doctor->address   = $request->address;
        $doctor->contact   = $request->contact;
        $doctor->email     = $request->email;
        $doctor->expertise = $request->expertise;
        $doctor->fee       = $request->fee;
        $doctor->status    = $request->status;
        $doctor->save();
       //Doctor::create($request->all());

    }


    public static function updateDoctorInfo ($request){
        $doctor = Doctor::find($request->id);
        $doctor->fullName  = $request->fullName;
        $doctor->address   = $request->address;
        $doctor->contact   = $request->contact;
        $doctor->email     = $request->email;
        $doctor->expertise = $request->expertise;
        $doctor->fee       = $request->fee;
        $doctor->save();
    }
}
