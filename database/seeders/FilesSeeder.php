<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Database\Seeder;

class FilesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $blog_images = array_diff(scandir(public_path("/assets/uploads/images")), array('.', '..'));
        Blog::whereDoesntHave('file')->get()->each(function($blog) use ($blog_images){
            $url = $blog_images[array_rand($blog_images)];
            $blog->file()->create([
                'url' => "assets/uploads/images/".$url,
                'type' => substr($url, strrpos($url, '.') + 1)
            ]);
        });

        $user_images = array_diff(scandir(public_path("/assets/uploads/users")), array('.', '..'));
        User::whereDoesntHave('file')->get()->each(function($user) use ($user_images){
            $url = $user_images[array_rand($user_images)];
            $user->file()->create([
                'url' => "assets/uploads/users/".$url,
                'type' => substr($url, strrpos($url, '.') + 1)
            ]);
        });
    }
}
