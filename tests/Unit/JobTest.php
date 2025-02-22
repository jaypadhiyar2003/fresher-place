<?php

use App\Models\Employer;
use App\Models\Job;

it('belongs to an employer', function () {
    //arrange
    $employer = Employer::factory()->create();
    $job = Job::factory()->create([
        'employer_id' => $employer->id,
    ]);
    //act and assert
    expect($job->employer()->is($employer))->toBeTrue();
    //expect(true)->toBeTrue();
});

it('can have tags', function () {
    $job = Job::factory()->create();
    $job->tag('Front-end');
    expect($job->tags)->toHaveCount(1);
});
