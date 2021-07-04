<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\userprofile;
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
    public function profile()
    {
        $id=User::find(Auth::id());
        $data=User::all()->where('id',"==",Auth::id());
        return view('profile',compact('data'));
        // where('id',"=",$id)->first();
    }

    public function changepassword(Request $request)
    {
        // return $request->all();
        $this->validate($request, [
            'currentpassword' => 'required',
            'newpassword' => 'required'
        ]);

        $hashedPassword = Auth::user()->password;
        // return $hashedPassword;
        if (Hash::check($request->currentpassword, $hashedPassword)) {
            $user = User::find(Auth::id());
            $user->password = Hash::make($request->newpassword);
            $user->save();
            Auth::logout();
            return redirect()->route('login')->with('successMsg', "Password is Changed Successfully");
        } else {
            return redirect()->back()->with('errorMsg', "Current Password is Invalid");
        }
    }

    public function storeprof(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'ino' => 'required',
            'mobile' => 'required',
            'address' => 'required',
            'city' => 'required',
            'dob' => 'required',
        ]);
        // $profile = userprofile::find($request->id);

        // $profile = new userprofile;
        $profile = User::find(Auth::id());
        $profile->name = $request->name;
        $profile->ino = $request->ino;
        $profile->mobile = $request->mobile;
        $profile->address = $request->address;
        $profile->city = $request->city;
        $profile->dob = $request->dob;
        if ($request->hasFile('propic')) {
            $file = $request->file('propic');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images/profile/', $filename);
            $profile->propic = $filename;
        }
        $profile->save();
        return redirect()->back()->with('status', 'Profile Updated Succseefully');
    }
    
}
