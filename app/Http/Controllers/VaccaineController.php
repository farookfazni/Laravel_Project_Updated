<?php

namespace App\Http\Controllers;

use App\Models\Vaccaine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VaccaineController extends Controller
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
    public function vaccaine()
    {
        return view('vaccaine');
    }
    public function storevac(Request $request)
    {
        // $this->validate($request, [
        //     'name' => 'required',
        //     'ino' => 'required',
        //     'mobile' => 'required',
        //     'address' => 'required',
        //     'city' => 'required',
        //     'dob' => 'required',
        // ]);
        // $profile = userprofile::find($request->id);

        $test = new Vaccaine;
        $id = Auth::id();
        $test->user_id = $id;
        $test->name = $request->name;
        $test->ino = $request->ino;
        $test->mobile = $request->mobile;
        $test->address = $request->address;
        $test->vactype = $request->vactype;
        $test->dose = $request->dose;
        $test->vacdate = $request->vacdate;
        $test->vactime = $request->vactime;
        $test->save();
        return redirect()->back()->with('status', 'Vaccine added Succseefully');
    }
}
