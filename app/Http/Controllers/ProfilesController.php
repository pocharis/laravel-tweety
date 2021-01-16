<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;


class ProfilesController extends Controller
{
    public function show(User $user)
    {
        return view('profiles.show', compact('user'));
    }

    public function edit(User $user)
    {
        // if($user != auth()->user())
        // {
        //     abort(404);
        // }
        $this->authorize('edit', $user);
        
        return view('profiles.edit', compact('user'));
    }

    public function update(User $user)
    {
        // dd(request('avatar'));

        $attributes =  request()->validate([
           'username' => [
                'string',
                'required',
                'max:255',
                'alpha_dash',
                Rule::unique('users')->ignore($user)
                
            ],

            'avatar' => ['file'],

            'name' => [
                'string',
                'required',
                'max:255'
            ],
            'email' => [
                'string',
                'required',
                'max:255',
                'email',
                Rule::unique('users')->ignore($user)
            ],
            'password' => [
                'string',
                'required',
                'min:8',
                'max:255',
                'confirmed',
            ]

        ]);

        $attributes['password'] = Hash::make(request()->input('password'));
        
        if(request('avatar'))
        {
            $attributes['avatar'] = request('avatar')->store('avatars');
        }

        $user->update($attributes);

        return redirect($user->path());
    }
}
