<?php

namespace Database\Seeders;

use App\Models\Foo;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\Post::factory(10)->create();
        \App\Models\Post::factory(100)->has(\App\Models\foo::factory()->count(50))->create();
    }
}
