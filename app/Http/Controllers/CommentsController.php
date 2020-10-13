<?php

namespace App\Http\Controllers;

// use App\Comment;
// use App\Tweet;
// use Illuminate\Http\Request;

// class CommentsController extends Controller
// {
    // public function __construct() {
        // $this->middleware('auth');
    // }
 
 
    // public function store(Request $request)
    // {
        // $tweet = Tweet::findOrFail($request->tweet_id);
 
        // Comment::create([
            // 'body' => $request->body,
            // 'user_id' => auth()->id,
            // 'post_id' => $tweet->id,
        // ]);
        // return redirect()->route('tweets.show', $tweet->id);
    // }
// }


use Illuminate\Http\Request;
use App\Comment;
use App\Tweet;

class CommentsController extends Controller
{
    public function store(Request $request)
    {
        $comment = new Comment;
        $comment->body = $request->get('comment_body');
        $comment->user()->associate($request->user());
        $tweet = Tweet::find($request->get('tweet_id'));
        $tweet->comments()->save($comment);

        return back();
    }
}