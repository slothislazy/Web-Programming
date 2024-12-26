<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Game;
use App\Models\User;
use Carbon\Carbon;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'username' => 'Test User',
            'email' => 'test@example.com',
            'phone_num' => '081231231'
        ]);
        User::factory()->create([
            'username' => 'Rafzy',
            'email' => 'rafze04@gmail.com',
            'phone_num' => '08111805071',
            'password' => Hash::make(12345678)

        ]);

        Category::factory()->create([
            'name' => "Role Playing Game",
            "id" => 1
        ]);
        Category::factory()->create([
            'name' => "Indie Game",
            "id" => 2
        ]);
        Category::factory()->create([
            'name' => "Action",
            "id" => 3
        ]);
        Category::factory()->create([
            'name' => "Adventure",
            "id" => 4
        ]);
        Game::factory()->count(10)->create([
            'title' => "Elden Ring",
            "developer" => "FromSoftware",
            "price" => 599000,
            "release_date" => new Carbon('2022-02-25'),
            "category_id" => 1,
            "image" => "elden-ring.jpg",
            "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
        ]);
    }
}
