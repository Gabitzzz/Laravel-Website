<?php

namespace App\Http\Controllers;

use App\User;
use App\Tweet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Validator;

class TweetsController extends Controller
{

    public function index()
    {
        return view('tweets.index', [
            'tweets' => User::find(auth()->user()->id)
                            ->timeline()
        ]);
    }

    public function store()
    {

        $attributes = request()->validate([
            'body' => 'required|max:255',
            'image' => 'nullable|image',
            ]);

            if(request()->hasFile('image')) {
                $imagePath = (request('image')->store('storage', 'public'));

                Tweet::create([
                    'user_id' => auth()->id(),
                    'body' => $attributes['body'],
                    'image' => $imagePath,
                ]);
            } else {
                Tweet::create([
                    'user_id' => auth()->id(),
                    'body' => $attributes['body'],
                    
                    
                ]);
            }

        

  

        return redirect()->route('home');
    }

    public function edit(Tweet $tweet)
    {

        return view('tweets.edit', compact('tweet'));
    }

    public function update(Tweet $tweet)
    {
       $attributes = request()->validate([
            'body' => ['string', 'max:255', ],

        ]);

        $tweet->update($attributes);

        return redirect()->route('home', $tweet->id);
    }

   
    public function destroy($id)
    {
        $tweet = Tweet::find($id);
        $tweet->delete();

        return redirect()->route('home');
    }

}

