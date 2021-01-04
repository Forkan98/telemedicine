<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SearchDoctor extends Model
{

    protected $fillable = ['drName_id','contact','department','fee','yourName','mobile','email','gender','symptoms','date','time','payment'];

    public static function saveNewSearchInfo($request) {
        SearchDoctor::create($request->all());
    }

    public  static function updatePatientInfo($request){
        $searchDoctor =  SearchDoctor::find($request->id);
        $searchDoctor->drName_id  =  $request->drName_id;
        $searchDoctor->contact    =  $request->contact;
        $searchDoctor->department =  $request->department;
        $searchDoctor->fee        =  $request->fee;
        $searchDoctor->yourName   =  $request->yourName;
        $searchDoctor->mobile     =  $request->mobile;
        $searchDoctor->email      =  $request->email;
        $searchDoctor->gender     =  $request->gender;
        $searchDoctor->symptoms   =  $request->symptoms;
        $searchDoctor->date       =  $request->date;
        $searchDoctor->time       =  $request->time;
        $searchDoctor->payment    =  $request->payment;
        $searchDoctor->save();

    }
}
