<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Add some initial entrees to the Tasks table
        DB::table('tasks')->insert([
            'taskname' => 'Test our code',
            'priority' => 1,
            'timestamp' => '1697913073'
        ]);
        
        DB::table('tasks')->insert([
            'taskname' => 'Check the time',
            'priority' => 2,
            'timestamp' => '1697913074'
        ]);
    }
}
