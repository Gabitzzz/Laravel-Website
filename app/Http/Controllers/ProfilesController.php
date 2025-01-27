<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Validation\Rule;

class ProfilesController extends Controller
{
    public function show(User $user)
    {
        return view('profiles.show', [
            'user' => $user,
            'tweets' => $user
                        ->tweets()
                        ->withLikes()
                        ->paginate(10),
        ]);
    }

    public function edit(User $user)
    {
        $this->authorize('edit', $user);

        return view('profiles.edit', compact('user'));
    }

    public function update(User $user)
    {
       $attributes = request()->validate([
            'username' => ['string', 'required', 'max:255', 'alpha_dash', Rule::unique('users')->ignore($user),] ,
            'name' => ['string', 'required', 'max:255'],
            'description' => ['string', 'nullable', 'max:255', Rule::notIn('users'), ],
            'avatar' => ['file'],
            'cover' => ['file'],
            'email' => ['string', 'required', 'email', 'max:255', Rule::unique('users')->ignore($user),],
            'password' => ['string', 'required', 'min:8', 'max:255', 'confirmed']
        ]);

        if(request('avatar')){
            $attributes['avatar'] = request('avatar')->store('avatars');
        }

          if(request('cover')){
            $attributes['cover'] = request('cover')->store('covers');
          }

        $user->update($attributes);

        return redirect($user->path());
    }

    public function search(Request $request)
    {
        $search = $request->input('search');

        // Search in the title and body columns from the posts table
        $users = User::query()
            ->where('username', 'LIKE', "%{$search}%")
            ->get();
    
        // Return the search view with the resluts compacted
        return view('components.search', compact('users'));
    }
}
