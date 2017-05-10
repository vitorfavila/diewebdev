<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;
use Auth;
use App\Repositories\PostRepository;

class PostController extends Controller
{
    protected $posts;

    public function __construct(PostRepository $posts)
    {
        $this->posts = $posts;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req, $category_name = null)
    {
        if ($category_name) {
            return view('home', [
                'posts' => $this->posts->postedIn($category_name)
            ]);
        } else {
            return view('home', [
                'posts' => $this->posts->all(),
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Post $post)
    {
        if ($post) {
            $post->title = request('title');
            $post->subtitle = request('subtitle');
            $post->slug = str_slug(request('title'), '-');
            $post->content = request('content');
            $post->save();

            return redirect()->route('post.index');
        }

        $post = Post::create([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'slug' => str_slug($request->title, '-'),
            'content' => $request->content,
            'user_id' => Auth::user()->id,
        ]);

        return redirect()->route('post.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('post.create', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function disable(Post $post)
    {
        $post->active = "N";
        $post->save();

        return back();
    }
}
