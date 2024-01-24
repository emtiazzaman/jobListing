<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Jobs;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       //  \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        
        //Jobs::factory(10)->create();

        $user = User::factory()->create();

        $category = Category::factory()->create([
            'name' => 'Web Development'
        ]);

        Jobs::factory(10)->create([
            'category_id' => $category->id,
            'user_id' =>  $user->id
        ]);

    }
}
