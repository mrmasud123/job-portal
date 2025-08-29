<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\JobList;
class JobsController extends Controller
{
    public function index()
    {
        $jobs = JobList::all();
        return view('components.jobs', compact('jobs'));
    }

    public function show(JobList $job)
    {
        $job->load('employer');
        return view('jobs.show', compact('job'));
    }

    public function create()
    {
        // Only employers can create jobs
        // if (auth()->user()->role !== 'employer') {
        //     abort(403, 'Only employers can post jobs');
        // }
        
        // return view('jobs.create');
       JobList::insert([
    [
        'title'=>"Title 1",
        'description'=>"Description1",
    ],
    [
        'title'=>"Title 2",
        'description'=>"Description2",
    ],
    [
        'title'=>"Title 3",
        'description'=>"Description3",
    ],
]);

    }

    public function store(Request $request)
    {

        
        
        // if (auth()->user()->role !== 'employer') {
        //     abort(403, 'Only employers can post jobs');
        // }

        // $validator = Validator::make($request->all(), [
        //     'title' => 'required|string|max:255',
        //     'description' => 'required|string',
        //     'location' => 'required|string|max:255',
        //     'type' => 'required|in:full-time,part-time,contract',
        //     'salary_min' => 'nullable|numeric|min:0',
        //     'salary_max' => 'nullable|numeric|min:0',
        //     'requirements' => 'nullable|array',
        // ]);

        // if ($validator->fails()) {
        //     return back()->withErrors($validator)->withInput();
        // }

        // EmployeeJob::create([
        //     'employer_id' => auth()->id(),
        //     'title' => $request->title,
        //     'description' => $request->description,
        //     'location' => $request->location,
        //     'type' => $request->type,
        //     'salary_min' => $request->salary_min,
        //     'salary_max' => $request->salary_max,
        //     'requirements' => $request->requirements,
        // ]);

        // return redirect()->route('dashboard')->with('success', 'Job posted successfully!');
    }
}