<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Session;

class CompanyController extends Controller
{
    public function index()
    {
    	$user = User::find(Session::get('user_id'));

    	return view('frontEnd.company.company-info',compact('user'));
    }
}
