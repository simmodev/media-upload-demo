<?php

namespace App\Http\Controllers\PostController;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class Delete extends Controller
{
    public function destory(Post $post){
        $images = $post->images()->get();
        foreach($images as $image){
            File::delete(public_path('post_images/'.$image->name));
        }

        $post->images()->delete();
        $post->delete();

        $posts = Post::get();
        return redirect()->route('post.dashboard', ['posts'=>$posts]);
    }
}
