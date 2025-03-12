<x-layout>

    <div class="bg-gray-900 p-8 rounded-2xl shadow-lg">
        <h2 class="mt-4 text-4xl font-semibold">{{ $job->title }}</h2>
        <x-forms.divider/>
        <x-employer-logo :employer="$job->employer" />
        <p class="mt-4 text-lg text-gray-400">Posted by: {{ $job->employer->name }}</p>
        <x-forms.divider/>
        <p class="text-xl mb-4">Salary: <span class="text-green-400">{{ $job->salary }} USD</span></p>
        <p class="text-lg mb-4">Location: {{ $job->location }}</p>
        <p class="text-lg mb-4">Schedule: {{ $job->schedule }}</p>
        <p class="text-lg mb-4">Sponsored: {{ $job->featured ? 'Yes' : 'No' }}</p>
        <div class="mt-4 self-start">
            @foreach($job->tags as $tag)
                <x-tag :$tag size="small"/>
            @endforeach
        </div>

        <a href="{{ $job->url }}" class="mt-10 inline-block bg-blue-800 rounded py-2 px-6 font-bold">Apply Now</a>

    </div>


    <footer class="mt-20 text-center text-gray-600">
        &copy; 2025 Fresher-Place. All rights reserved.
    </footer>
</x-layout>
