<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller {

    public function __construct() {
       // $this->middleware('auth');
    }

    public function index(){
        //echo "sss";die;
        return view('admin.layouts.dashboard');
        //return view('admin.layouts.master');
    }
}
