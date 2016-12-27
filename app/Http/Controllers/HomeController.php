<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

use Auth;
use App\User;
use App\Role;
use DB;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [];
        $username = Auth::user()->username;
        $data['name'] = Auth::user()->name;
        // $data['role'] = User::where('username', $username)->first();

        // a user can have many roles
        // NOTE: this might leak a bug - multiple role
        $roles = User::where('username', $username)->first()->roles;
        $data['role'] = [];
        foreach ($roles as $role)
            $data['role'] = $role->name;

        switch ($data['role']) {
            case 'student':
                return redirect()->action('StudentController@index');
                break;

            default:
                # code...
                break;
        }

        return view('home', $data);
    }
}
