<?php

namespace App\Http\Controllers;

use App\Models\Testing;
use App\Models\User;
use App\Models\Vaccaine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
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
    public function index()
    {
        $data=User::all()->where('id',"==",Auth::id());
        $test=Testing::all()->where('user_id',"==",Auth::id());
        $vac=Vaccaine::all()->where('user_id',"==",Auth::id());
        return view('home',compact('data','test','vac'));
    }
    public function delete($id)
    {
        $test=Testing::find($id);
        $test->delete();
        return redirect('home');
    }
    public function deletevac($id)
    {
        $vac=Vaccaine::find($id);
        $vac->delete();
        return redirect('home');
    }
    // public function test()
    // {
    //     $test=Testing::all()->where('user_id',"==",Auth::id());
    //     return view('home',compact('test'));
    // }
    // public function editprofile()
    // {
    //     return view('editProfile');
    // }
    // public function profile()
    // {
    //     return view('Profile');
    // }
}
