<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Auth;

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
        // return view('home');

        if(Auth::user()->role === 'club')
            return redirect('club');
        else if(Auth::user()->role === 'advisor')
            return redirect('advisor');
        else if(Auth::user()->role === 'sssc')
            return redirect('sssc');
        else if(Auth::user()->role === 'studentengagement')
            return redirect('studentengagement');
        else if(Auth::user()->role === 'facilities_manager')
            return redirect('facilities');
        else if(Auth::user()->role === 'facilities_osha')
            return redirect('facilities');
        else if(Auth::user()->role === 'its')
            return redirect('its');
        else if(Auth::user()->role === 'registrar')
            return redirect('registrar');
        else if(Auth::user()->role === 'finance')
            return redirect('finance');
        else if(Auth::user()->role === 'execgroup')
            return redirect('execgroup');
        else if(Auth::user()->role === 'superuser')
            return redirect('superuser');
        // else
        return redirect('home');
    }
}
