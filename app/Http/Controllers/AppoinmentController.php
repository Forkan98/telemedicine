<?php

namespace App\Http\Controllers;

use App\Doctor;
use App\Patient;
use App\SearchDoctor;
use Illuminate\Http\Request;
use DB;

class AppoinmentController extends Controller
{
    public function searchDoctors(){

        return view('admin.patients.search-doctors',[
            'doctors' => Doctor::where('status',1)->get()
        ]);
    }

    public function newSearch( Request $request){
        //return $request->all();
        SearchDoctor::saveNewSearchInfo($request);
        return redirect('/patients/manage-patients')->with('message', 'Your booking has been accepted!');
    }

    public function managePatients(){

       $search_doctors = DB::table('search_doctors')
            ->join('doctors','search_doctors.drName_id', '=', 'doctors.id')
            ->select('search_doctors.*', 'doctors.fullName')
            ->get();

        return view('admin.patients.manage-patients',[
            'searchDoctors' => $search_doctors
        ]);
    }














    public function addPatients(){
        return view('admin.patients.add-patients');
    }

    public function newPatients(Request $request){
        Patient::savePatientInfo($request);
        return redirect('/patients/add-patients')->with('message', 'Patient info save successfully');
    }
}
