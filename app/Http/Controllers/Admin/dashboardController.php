<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    //
    public function __construct(){
        $this ->middleware('AdminAuth');
    }
    public function index(){
        return view('Admin.dashboard.index');
    }
}
