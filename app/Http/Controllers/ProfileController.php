<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class ProfileController extends Controller
{
    /**
     * Show the form for editing the profile.
     */
    public function edit()
    {
        return view('profile.edit', [
            'user' => Auth::user(),
        ]);
    }

    /**
     * Update the profile information.
     */
    public function update(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,'.Auth::id()],
            'password' => ['nullable', 'string', 'min:8', 'confirmed'],
        ]);

        $user = Auth::user();
        $user->name = $request->name;
        $user->email = $request->email;

        if ($request->password) {
            $user->password = Hash::make($request->password);
        }

        $user->save();  // Pastikan ini diidentifikasi dengan benar sebagai metode yang valid

        return redirect()->route('profile.edit')->with('status', 'Profile updated successfully.');
    }
}
