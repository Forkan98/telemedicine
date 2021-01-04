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
        return redirect('/patients/search-doctors')->with('message', 'Your booking has been accepted!');
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
    public function editPatients($id){
        return view('admin.patients.edit-patients',[
            'doctors'        => Doctor::where('status',1)->get(),
            'searchDoctor'  => SearchDoctor::find($id)
        ]);
    }

    public function updatePatients( Request $request){
        SearchDoctor::updatePatientInfo($request);

        return redirect('/patients/manage-patients')->with('message', 'Patients info update successfully');
    }

//    public function deletePatients(Request $request){
//        $searchDoctor =  SearchDoctor::find($request->id);
//        $searchDoctor -> delete();
//        return redirect('/patients/manage-patients')->with('message', 'Patients info delete successfully');
//    }














    public function addPatients(){
        return view('admin.patients.add-patients');
    }

    public function newPatients(Request $request){
        Patient::savePatientInfo($request);
        return redirect('/patients/add-patients')->with('message', 'Patient info save successfully');
    }
}
