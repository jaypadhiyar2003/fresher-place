@props(['job'])
<x-panel class="flex gap-6">
    <div>
       <!-- <img src="http://placehold.co/90x90" alt="" class="rounded-xl"> -->
        <x-employer-logo :employer="$job->employer"/>
    </div>
    <div class="flex-1 flex flex-col">
    <a href="#" class="self-start text-sm text-gray-400">{{$job->employer->name}}</a>
        <h3 class="font-bold text-xl mt-1 group-hover:text-blue-600 transition-colors duration-500">
            <a href="{{$job->url}}">
                {{ $job->title }}
            </a>
        </h3>
        <p class="text-sm text-gray-400 mt-auto">{{$job->salary}}</p>
    </div>
    <div >
        @foreach($job->tags as $tag)
            <x-tag :$tag/>
        @endforeach
    </div>
</x-panel>
