<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteSetting;

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
        $data = SiteSetting::where('setting_page', 'home')->pluck('setting_value', 'setting_name');
        return view('blog.home', [ 'title'=> $data['Title'], 'description' =>  $data['Description']]);
    }
}
