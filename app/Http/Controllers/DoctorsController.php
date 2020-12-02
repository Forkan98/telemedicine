<?php

namespace App\Http\Controllers;

use App\Doctor;
use Illuminate\Http\Request;


class DoctorsController extends Controller
{
    public function addDoctors(){
        return view('admin.doctors.add-doctors');
    }

    public function newDoctor(Request $request){
        Doctor::saveDoctorInfo($request);
       return redirect('/doctors/add-doctors')->with('message', 'Doctor info save successfully');
    }
    public  function manageDoctor(){
        return view('admin.doctors.manage-doctors',[
            'doctors' => Doctor::all()
        ]);
    }
    public function editDoctor($id){
        return view('admin.doctors.edit-doctors',[
            'doctor' => Doctor::find($id)
        ]);
    }

    public function updateDoctor(Request $request){
        $doctor = Doctor::find($request->id);
        $doctor->fullName  = $request->fullName;
        $doctor->address   = $request->address;
        $doctor->contact   = $request->contact;
        $doctor->email     = $request->email;
        $doctor->expertise = $request->expertise;
        $doctor->fee       = $request->fee;
        $doctor->save();
        return redirect('/doctors/manage-doctors')->with('message', 'Doctor info update successfully');
    }

}
