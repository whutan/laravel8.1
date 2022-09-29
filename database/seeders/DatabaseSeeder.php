<?php

namespace Database\Seeders;

use App\Models\Admin;
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
        // \App\Models\User::factory(10)->create();
        Admin::truncate();
        $users=Admin::factory(10)->create();
        
        $user=$users[0];
        $user->name='admin';
        $user->nickname='向军大叔';
        $user->save();
    }
}
