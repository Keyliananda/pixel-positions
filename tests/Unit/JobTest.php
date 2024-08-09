<?php

use App\Models\Employer;
use App\Models\Job;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class JobTest extends TestCase
{
    use DatabaseMigrations;
}

it('belongs to an employer', function ()
{
    $employer = Employer::factory()->create();
    $job = Job::factory()->create([
        'employer_id' => $employer->id,
    ]);

    expect($job->employer->is($employer))->toBeTrue();
});
