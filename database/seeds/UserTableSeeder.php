<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	$this->rrmdir(public_path() . "/images/missions");
    	mkdir(public_path() . "/images/missions", 0777, true);

        factory(App\User::class, 5)->create()->each(function ($u) {
            for ($i = 0; $i < 3; $i += 1) {
                if (rand(1, 100) < 70) {
                    $u->missions()->save(factory(App\Mission::class)->make());
                }
            }
        });
    }

    public function rrmdir($dir) { 
       if (is_dir($dir)) { 
            $objects = scandir($dir); 
            foreach ($objects as $object) { 
                if ($object != "." && $object != "..") { 
                    if (filetype($dir."/".$object) == "dir") {
                        rrmdir($dir."/".$object);
                    } else {
                        unlink($dir."/".$object); 
                    }
                } 
            } 
            reset($objects); 
            rmdir($dir); 
        } 
    } 
}
