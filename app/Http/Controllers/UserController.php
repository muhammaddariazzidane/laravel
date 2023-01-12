<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function update(Request $request, User $user)
    {
        $rules = [
            'name' => 'required|max:255',
            // 'image' => 'image|file|max:7024'
        ];
        $validated = $request->validate($rules);

        // if ($request->file('image')) {
        //     $validated['image'] = $request->file('image')->store('user-image');
        // }
        // User::updated($validated);
        User::updated($validated);
        User::where('id', $user->id)->update($validated);
        return redirect('/edit-profile');
    }
}
