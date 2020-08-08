<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ProfilesController extends Controller
{
    public function show(User $user)
    {
        return view('profiles.show', [
            'user' => $user,
            'tweets' => $user->tweets()->paginate(20),
        ]);
    }

    public function edit(User $user)
    {

        $this->authorize('edit', $user);

        return view('profiles.edit', compact('user'));
    }

    public function update(User $user)
    {
//        dd(request('avatar'));

        $attributes = request()->validate(
            [
                'username' => ['string', 'required', 'max:255', Rule::unique('users')->ignore($user), 'alpha_dash'],
                'avatar' => ['file'],
                'name' => ['string', 'required', 'max:255'],
                'email' => ['string', 'required', 'email', 'max:255', Rule::unique('users')->ignore($user)],
                'password' => ['string', 'min:8', 'max:255', 'confirmed']
            ]
        );


        if(request('avatar')){
            $attributes['avatar'] = request('avatar')->store('avatars');
        }


        $user->update($attributes);

        return redirect($user->path());
    }

}
