@props(['job'])

<x-panel class="flex flex-col text-center">
    <div class="self-start text-sm">{{ $job->employer->name }}</div>
    <div class="py-8 ">
        <h3 class="group-hover:text-blue-600 text-xl font-bold transition-colors duration-500">
            <a href="{{$job->url}}" target="_blank" >
                {{ $job->title }}
            </a>
            </h3>
        <p class="text-xs mt-4">{{ $job->salary }}</p>
    </div>
    <div class="flex justify-between items-center mt-auto">
        <div class="self-start">
            @foreach($job->tags as $tag)
                <x-tag :$tag size="small"/>
            @endforeach
            </div>
        <!--<img src="http://placehold.co/42x42" alt="" class="rounded-xl"> -->
        <x-employer-logo :employer="$job->employer" :width="42"/>
    </div>
</x-panel>
