<?php

namespace Database\Seeders;

use App\Models\Job;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tag = Tag::factory(3)->create();
        Job::factory(20)->hasAttached($tag)->create(new Sequence([
            'featured' => false,
            'schedule' => 'Full Time',
        ],
        [
            'featured' => true,
            'schedule' => 'Part Time',
        ]));

    }
}
