<?php

namespace App\Http\Controllers;
use App\Http\Resources\PostResource;
use Illuminate\Http\Request;
use App\Models\Post;

class PostIndexController extends Controller
{
    //
    public function __invoke(){
        return PostResource::collection(Post::get());
    }

}
