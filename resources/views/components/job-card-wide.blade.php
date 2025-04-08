@props(['job'])
<x-panel class="flex gap-6">
    <a href="/jobs/{{$job->id}}">
    <div>
       <!-- <img src="http://placehold.co/90x90" alt="" class="rounded-xl"> -->
        <x-employer-logo :employer="$job->employer"/>

    </div>
    </a>

    <div class="flex-1 flex flex-col">
        <a href="/jobs/{{$job->id}}">
    <p href="#" class="self-start text-sm text-gray-400">{{$job->employer->name}}</p>
        <h3 class="font-bold text-xl mt-1 group-hover:text-blue-600 transition-colors duration-500">

                {{ $job->title }}

        </h3>
        <p class="text-sm text-gray-400 mt-auto">{{$job->salary}}</p>
        </a>
    </div>
    <div >
        @foreach($job->tags as $tag)
            <x-tag :$tag/>
        @endforeach
    </div>
</x-panel>
