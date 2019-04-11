<?php

namespace App\Http\Controllers;


use App\Company;
use App\Job;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class JobController extends Controller
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


    public function store(Request $request, Company $company)
    {
        $res = Validator::make($request->all());

        $job = new Job();
        $job->description = $request->get('contenu');
        $job->id = $company->id;
        $job->company_id = $company->company_id;
        $job->save();
        event(new NewJob($company));

        return redirect()->route('jobs.show', $company->id);
    }

    public function storeNewJob(Request $request)
    {
        $res = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'description' => 'required',
            'location' => 'required',
            'salary' => 'required',
        ])->validate();

        return redirect()->route('companyHome');
    }

    public function index()
    {
        if (auth()->user()->hasPermissionTo('post a job')) {
            $jobs = Job::all();
            return view('home', ['jobs' => $jobs]);
        }
        else {
            $jobs = Job::all();
            return view('home', ['jobs' => $jobs]);
        }
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function show(Request $request, Job $company)
    {
        return view('jobs.show', [
            'job' => $company
        ]);
    }

    public function create()
    {
        return view('jobs.create');
    }
}
