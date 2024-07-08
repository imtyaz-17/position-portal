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
