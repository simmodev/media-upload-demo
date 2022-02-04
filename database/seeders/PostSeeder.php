<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Post;
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
        $posts = [
            [
                'id'=>'12',
                'title'=>'Curabitur non nulla sit amet nisl.',
                'description'=>'Nulla quis lorem ut libero malesuada feugiat.',
            ],
            [
                'id'=>'13',
                'title'=>'Vivamus suscipit tortor eget.',
                'description'=>'Vestibulum ac diam sit amet quam vehicula elementum.'
            ],
            
        ];

        $images = [
            [
                'id'=>'30',
                'post_id'=>'12',
                'name'=>'01.jpg',
            ],
            [
                'id'=>'31',
                'post_id'=>'12',
                'name'=>'02.jpg',
            ],
            [
                'id'=>'32',
                'post_id'=>'12',
                'name'=>'03.jpg',
            ],
            [
                'id'=>'33',
                'post_id'=>'13',
                'name'=>'04.jpg',
            ],
            [
                'id'=>'34',
                'post_id'=>'13',
                'name'=>'05.jpg',
            ],
            [
                'id'=>'35',
                'post_id'=>'13',
                'name'=>'06.png',
            ],
        ];

        Post::insert($posts);
        Image::insert($images);
    }
}
