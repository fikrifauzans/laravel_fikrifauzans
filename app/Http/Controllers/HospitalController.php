<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hospital;

class HospitalController extends Controller
{
    //

    public function show()
    {

        return view('home');
    }
    public function showTable(Request $request)
    {
        $hospitals = Hospital::latest()->paginate(10);
        return view('tableHospital', compact('hospitals'));
    }

    public function post(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'email' => 'required',
            'phone' => 'required'
        ]);

        $hospital = new Hospital;
        $hospital->name = $request['name'];
        $hospital->address = $request['address'];
        $hospital->phone = $request['phone'];
        $hospital->email = $request['email'];
        $hospital->save();


        return response()->json('sukses');
    }


    public function update(Hospital $hospital)
    {

        return view('updateHospital', compact('hospital'));
    }

    public function put(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'id' => 'required',
            'address' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);

        $hospital = Hospital::find($request['id']);
        $hospital->name = $request['name'];
        $hospital->address = $request['address'];
        $hospital->phone = $request['phone'];
        $hospital->email = $request['email'];
        $hospital->update();
        return redirect('/');
    }

    public function destroy(Request $request)
    {
        Hospital::find($request['id'])->delete();
        return response()->json('sukses');
    }
}
