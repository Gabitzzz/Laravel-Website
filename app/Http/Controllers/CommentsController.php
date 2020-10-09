<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Tweet;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
 
 
    public function store(Request $request)
    {
        $tweet = Tweet::findOrFail($request->tweet_id);
 
        Comment::create([
            'body' => $request->body,
            'user_id' => auth()->id,
            'post_id' => $tweet->id,
        ]);
        return redirect()->route('tweets.show', $tweet->id);
    }
}
