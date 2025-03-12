<x-layout>
    <x-page-heading>
        Jobs that belongs to {{isset($tag) ? $tag->name : $query}}
    </x-page-heading>

    <div class="space-y-6">
        @foreach($jobs as $job)
            <x-job-card-wide :$job />
        @endforeach
    </div>

</x-layout>
