<?php

namespace App\Http\Controllers;

use App\Company;
use App\Job;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

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
        if (auth()->user()->hasPermissionTo('post a job')) {
            $jobs = Job::all();
            return view('companyHome', ['jobs' => $jobs]);
        }
        else {
            $jobs = Job::all();
            return view('home', ['jobs' => $jobs]);
        }
    }


}
