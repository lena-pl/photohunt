<?php

use Illuminate\Database\Seeder;

class AttemptsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Mission::all()->each(function ($m) {
            $m->attempts()->save(factory(App\Attempt::class)->make());
            $m->attempts()->save(factory(App\Attempt::class)->make());
            $m->attempts()->save(factory(App\Attempt::class)->make());
        });
    }
}