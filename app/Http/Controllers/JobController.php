<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreJobRequest;
use App\Http\Requests\UpdateJobRequest;
use App\Models\Employer;
use App\Models\Job;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $job = Job::latest()->with(['employer','tags'])->get()->groupBy('featured'); //$job = Job::all()->groupBy('featured'); here latest() doesn't defined but stil work .  i don't know why but it's working

        return view('jobs.index',[
            'jobs' => $job[0],
            'featuredJobs' => $job[1],
            'tags' => Tag::all(),
        ]);
    }
    public function show(Job $job){
        return view('jobs.show',['job' => $job]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $attributes = $request->validate([
            'title' => ['required'],
            'salary' => ['required'],
            'location' => ['required'],
            'schedule' => ['required',Rule::in(['Part Time','Full Time'])],
            'url' => ['required','active_url'],
            'tags' => ['nullable'],
        ]);
        $attributes['featured'] = $request->has('featured');
        $job = Auth::user()->employer->jobs()->create(Arr::except($attributes,'tags'));;

        if($attributes['tags'] ?? false){
            foreach ( explode(',',$attributes['tags'])as $tag){
                $job->tag($tag);
            }
        }
        return redirect('/');
    }
}
