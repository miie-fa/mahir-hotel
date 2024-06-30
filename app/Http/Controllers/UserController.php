<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('user.index', compact('users'));
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        dd($request->all());
        $request->validate([
            'name' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'address' => 'required',
            'telephone' => 'required',
            'email' => 'required|email|unique:users,email',
        ]);

        $imagePath = $request->file('photo')->store('images', 'public');

        User::create([
            'name' => $request->name,
            'photo' => $imagePath,
            'address' => $request->address,
            'telephone' => $request->telephone,
            'email' => $request->email,
        ]);

        return redirect()->route('user.index')->with('success', 'User created successfully.');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('user.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'address' => 'required',
            'telephone' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
        ]);

        $user = User::findOrFail($id);

        if ($request->hasFile('photo')) {
            Storage::disk('public')->delete($user->photo);
            $imagePath = $request->file('photo')->store('images', 'public');
        } else {
            $imagePath = $user->photo;
        }

        $user->update([
            'name' => $request->name,
            'photo' => $imagePath,
            'address' => $request->address,
            'telephone' => $request->telephone,
            'email' => $request->email,
        ]);

        return redirect()->route('user.index')->with('success', 'User updated successfully.');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        Storage::disk('public')->delete($user->photo);
        $user->delete();

        return redirect()->route('user.index')->with('success', 'User deleted successfully.');
        return view('user.dashboard'); // Mengembalikan view dashboard user

    }
}
