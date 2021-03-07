<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//        factory('\App\Models\User',10)->create()->each(function($user){
//
//                $user->posts()->save(factory(' App\Post')->make());
//
//                });
       \App\Models\User::factory()->count(10)->create();
    }


}
