<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class MainController extends Controller
{

    /**
     *
     * Create new controller instance
     *
     * @return void
     */

    public function __construct() {

    }
    /**
     *
     * Show the application home page
     *
     * @return View
     */

    public function home() : View
    {
        return view('home');
    }

    /**
     *
     * Show test page of side menu
     *
     * @return View
     */

    public function side() : View
    {
        return view('sideMenu');
    }

}
