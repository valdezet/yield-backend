<?php

namespace Database\Seeders;

use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SampleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $sample = User::factory()
            ->has(Task::factory(50)->sequence(
                ['completed_at' => now()],
                ['completed_at' => null]
            ))
            ->createOne([
                'email' => "user@example.local"
            ]);
    }
}
