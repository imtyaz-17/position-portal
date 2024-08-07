<?php

use App\Models\Employer;
use App\Models\JobPosition;

it('belongs to an employer', function () {
    $employer = Employer::factory()->create();
    $job = JobPosition::factory()->create([
        'employer_id' => $employer->id,
    ]);
    expect($job->employer->is($employer))->toBeTrue();
});
it('can have tags', function () {
    $job = JobPosition::factory()->create();
    $job->tag('frontend');
    expect($job->tags)->toHaveCount(1);
});
