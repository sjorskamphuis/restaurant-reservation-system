<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
     * Show the user's profile.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = hasRole(Auth::user(), "super-admin");
        return view('profile.index', compact("user"));
    }
}
