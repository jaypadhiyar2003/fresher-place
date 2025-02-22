<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function __invoke(Tag $tag)
    {
        //jobs for this tag
        //dd($tag);
        return view('results', ['jobs' => $tag->jobs->load(['employer', 'tags'])]);
        //view('results', ['jobs' => $tag->jobs]);
    }
}
