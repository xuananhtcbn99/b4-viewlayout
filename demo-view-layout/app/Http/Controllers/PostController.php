<?php

namespace App\Http\Controllers;

use App\Repositories\PostRepository;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public $postRepository;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function index()
    {
        $posts = $this->postRepository->getAll();
        return view("backend.post.list",compact('posts'));
    }

    public function showFormCreate()
    {
        $categories = $this->postRepository->getAllCategory();
        return view('backend.post.create',compact('categories'));
    }

    public function store(Request $request)
    {
        $this->postRepository->create($request);
        return redirect()->route('posts.index');
    }
}
