<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $blogs  = Blog::factory(30)->create();
        $images = array_diff(scandir(public_path("/assets/uploads/images")), array('.', '..'));
        $blogs->each(function($blog) use ($images){
            $url = $images[array_rand($images)];
            $blog->file()->create([
                'url' => "assets/uploads/images/".$url,
                'type' => substr($url, strrpos($url, '.'))
            ]);
        });
    }
}
