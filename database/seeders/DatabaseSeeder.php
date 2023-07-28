<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\staff;
use App\Models\product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        $users = User::factory(10)->create();
        $product = product::all();
        
        foreach ($users as $user) {
            product::factory()->create([
                'user_id' => $user->id
            ]);
        }

        foreach ($users as $user) {
            staff::factory()->create([
                'user_id' => $user->id
            ]);
        }
        
    }
}
