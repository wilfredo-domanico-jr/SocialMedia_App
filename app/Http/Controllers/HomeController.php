<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware(['guest']);
    // }


    public function index(){

        // $userData = User::all();
        $latestPost = Post::leftJoin('users', 'posts.user_id', '=', 'users.id')
        ->orderBy('posts.created_at', 'desc')->limit(2)->get();

        return view('home')->with([
            // 'userData' => $userData,
            'latestPost' => $latestPost,
        ]);

    }


    public function createPost(Request $request){

        $validatedData = $request->validate([
            'body' => 'required',
        ]);

        $post = new Post;
        $post->user_id = auth()->user()->id;
        $post->body = $request->body;
        $post->save();
        return redirect()->back();


    }
}
