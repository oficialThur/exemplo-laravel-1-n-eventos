<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrganizationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Organization::create([
            'name' => 'Tech Group',
            'email' => 'contact@techgroup.com',
            'phone' => '123456789',
            'address' => '123 Tech Street',
        ]);
        \App\Models\Organization::create([
            'name' => 'Event Masters',
            'email' => 'info@eventmasters.com',
            'phone' => '987654321',
            'address' => '456 Event Ave',
        ]);
    }
}
