<?php

namespace Scool\Curriculum\Database\Seeds;

use Illuminate\Database\Seeder;
use Scool\Curriculum\Models\Study;
use Scool\Foundation\User;

class StudyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 5)->create()->each(function ($user) {
            $user->studies()->saveMany(
                factory(Study::class, 10)->create(['user_id' => $user->id])
            );
        });
    }
}
