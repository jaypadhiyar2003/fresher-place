<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TagController extends Controller
{
    public function __invoke(Tag $tag)
    {
        //jobs for this tag
        //dd($tag);
        Log::info('Tag Found: ', ['tag' => $tag]);
        $jobs = $tag->jobs()->with(['employer', 'tags'])->get();

        return view('results', ['jobs' => $jobs, 'tag' => $tag]);
        //view('results', ['jobs' => $tag->jobs]);
    }
}
