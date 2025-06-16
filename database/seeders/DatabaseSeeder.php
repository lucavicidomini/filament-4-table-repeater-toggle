<?php

namespace Database\Seeders;

use App\Models\Sample;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Sample::create([
            'name' => 'Please edit me :)',
            'data' => [
                ['name' => 'Control 1', 'enabled' => true],
                ['name' => 'Control 2', 'enabled' => true],
                ['name' => 'Control 3', 'enabled' => false],
            ],
        ]);
    }
}
