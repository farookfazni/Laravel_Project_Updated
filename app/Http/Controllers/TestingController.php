<?php

namespace App\Http\Controllers;

use App\Models\Testing;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestingController extends Controller
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
    public function testing()
    {
        return view('testing');
    }

    public function storetest(Request $request)
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

        $test = new Testing;
        $id = Auth::id();
        $test->user_id = $id;
        $test->name = $request->name;
        $test->ino = $request->ino;
        $test->mobile = $request->mobile;
        $test->address = $request->address;
        $test->testtype = $request->testtype;
        $test->testdate = $request->testdate;
        $test->testtime = $request->testtime;
        $test->save();
        return redirect()->back()->with('status', 'Testing added Succseefully');
    }
}
