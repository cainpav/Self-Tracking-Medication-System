<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Records;

class MedicalController extends Controller
{
    //view
    public function index()
    {
        $medrecord = Records::all();
        //return view ('user.medicalrecord')->with('medrecord', $medrecord);
        return view('user.medicalrecord', ['medrecord'=> $medrecord]);
    }
  
    //save data
    public function store(Request $request)
    {
        $input = $request->all();
        Records::create($input);
        //tak keluar msg
        return redirect('/user/medicalrecord')->with('success','New Data Successfully Inserted');
    }
    
    //display specific id
    public function show($id)
    {
        $medrecord = Records::find($id);
        //return view ('user.show')->with('medrecord', $medrecord);
        return view('user.show',['medrecord'=>$medrecord]);
    }
    
    //edit
    public function edit($id)
    {
        $medrecord = Records::find($id);
        //return view('user.edit')->with('medrecord', $medrecord);
        return view('user.edit',['medrecord'=>$medrecord]);
    }
  

    //edit updated
    public function update(Request $request, $id)
    {
        $medrecord = Records::find($id);
        $medrecord -> update($request->all());
        return redirect('/user/medicalrecord')->with('success','Data Successfully Updated');
    }
  

    //delete
    public function delete($id)
    {
        $medrecord = Records::find($id);
        $medrecord -> delete($medrecord);
        return redirect('/user/medicalrecord')->with('success','Data Successfully Deleted');
    }
}

