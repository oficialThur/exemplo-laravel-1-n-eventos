<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $org1 = \App\Models\Organization::first();
        $org2 = \App\Models\Organization::skip(1)->first();
        \App\Models\Event::create([
            'title' => 'Tech Conference',
            'description' => 'A conference about technology.',
            'date' => now()->addDays(10),
            'location' => 'Tech Center',
            'organization_id' => $org1 ? $org1->id : 1,
        ]);
        \App\Models\Event::create([
            'title' => 'Music Festival',
            'description' => 'A festival with live music.',
            'date' => now()->addDays(20),
            'location' => 'Event Park',
            'organization_id' => $org2 ? $org2->id : 2,
        ]);
    }
}
