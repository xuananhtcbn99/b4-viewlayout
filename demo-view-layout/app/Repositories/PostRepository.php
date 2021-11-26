<?php

namespace App\Repositories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Model;

class PostRepository extends BaseRepository
{
    public function __construct(Post $posts)
    {
        parent::__construct($posts);
    }

    public function create(\Illuminate\Http\Request $request)
    {
    }
}
