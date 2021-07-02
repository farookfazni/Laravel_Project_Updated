<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function editprofile()
    {
        return view('editprofile');
    }

    public function changepassword(Request $request)
    {
        // return $request->all();
        $this->validate($request,[
            'currentpassword' => 'required',
            'newpassword' => 'required'
        ]);

        $hashedPassword = Auth::user()->password;
        // return $hashedPassword;
        if(Hash::check($request->currentpassword,$hashedPassword)){
            $user = User::find(Auth::id());
            $user->password = Hash::make($request->newpassword);
            $user->save();
            Auth::logout();
            return redirect()->route('login')->with('successMsg',"Password is Changed Successfully");
        }else{
            return redirect()->back()->with('errorMsg',"Current Password is Invalid");
        }
    }
}
