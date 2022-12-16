<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users =  User::factory(10)->create();
        $images = array_diff(scandir(public_path("/assets/uploads/users")), array('.', '..'));
        
        $users->each(function($user) use ($images){
            $url = $images[array_rand($images)];
            $user->file()->create([
                'url' => "assets/uploads/users/".$url,
                'type' => substr($url, strrpos($url, '.'))
            ]);

        });
    }
}
