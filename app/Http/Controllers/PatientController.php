<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\Hospital;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    //

    public function show()
    {
        return view('patient');
    }

    public function showTable(Request $request)
    {
        $hospitals = Hospital::all();
        if ($request['hospital_id'] !== null) {
            $patients = Patient::where('hospital_id', '=', $request['hospital_id'])->get();
        } else {
            $patients = Patient::latest()->get();
        }
        return view(
            'patientTable',
            [
                'patients' => $patients,
                'hospitals' => $hospitals
            ]
        );
    }

    public function create()
    {
        $hospitals = Hospital::all();

        return view('patientCreate', compact('hospitals'));
    }

    public function post(Request $request)
    {


        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'hospital_id' => 'required',
        ]);

        $patient = new Patient;
        $patient->name = $request['name'];
        $patient->address = $request['address'];
        $patient->phone = $request['phone'];
        $patient->email = $request['email'];
        $patient->hospital_id = $request['hospital_id'];
        $patient->save();


        return redirect('/patient');
    }

    public function destroy(Request $request)
    {
        Patient::find($request['id'])->delete();
        return response()->json('sukse');
    }

    public function put(Patient $patient)
    {
        return view('updatePatient', compact('patient'));
    }

    public function update(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'id' => 'required',
            'address' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);

        $patient = Patient::find($request['id']);
        $patient->name = $request['name'];
        $patient->address = $request['address'];
        $patient->phone = $request['phone'];
        $patient->email = $request['email'];
        $patient->update();
        return redirect('/patient');
    }
}
