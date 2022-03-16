<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    //


    public function show()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        // dd($request);
        $input = $request->all();

        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);

        $fieldType = filter_var($request->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        if (auth()->attempt(array($fieldType => $input['username'], 'password' => $input['password']))) {
            return redirect('/');
        } else {
            return redirect()->route('login')
                ->with('error', 'Email-Address And Password Are Wrong.');
        }
    }
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login');
    }
}
