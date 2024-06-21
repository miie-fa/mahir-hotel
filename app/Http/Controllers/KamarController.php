<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KamarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kamars = Kamar::all();
        return view('kamar.index', compact('kamars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kamar.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'room_description' => 'required',
            'feutured_photo' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            'room_number' => 'required',
            'room_type' => 'required',
            'price_per_night' => 'required|numeric',
            'capacity' => 'required|integer',
        ]);

        $imagePath = $request->file('feutured_photo')->store('images', 'public');

        Kamar::create([
            'room_description' => $request->room_description,
            'feutured_photo' => $imagePath,
            'room_number' => $request->room_number,
            'room_type' => $request->room_type,
            'price_per_night' => $request->price_per_night,
            'capacity' => $request->capacity,
        ]);

        return redirect()->route('kamar.index')->with('success', 'Kamar created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kamar $kamar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $kamar = Kamar::findOrFail($id);
        return view('kamar.edit', compact('kamar'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'room_description' => 'required',
            'feutured_photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'room_number' => 'required',
            'room_type' => 'required',
            'price_per_night' => 'required|numeric',
            'capacity' => 'required|integer',
        ]);

        $kamar = Kamar::findOrFail($id);

        if ($request->hasFile('feutured_photo')) {
            Storage::disk('public')->delete($kamar->feutured_photo);
            $imagePath = $request->file('feutured_photo')->store('images', 'public');
        } else {
            $imagePath = $kamar->feutured_photo;
        }

        $kamar->update([
            'room_description' => $request->room_description,
            'feutured_photo' => $imagePath,
            'room_number' => $request->room_number,
            'room_type' => $request->room_type,
            'price_per_night' => $request->price_per_night,
            'capacity' => $request->capacity,
        ]);

        return redirect()->route('kamar.index')->with('success', 'Kamar updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $kamar = Kamar::findOrFail($id);
        Storage::disk('public')->delete($kamar->feutured_photo);
        $kamar->delete();

        return redirect()->route('kamar.index')->with('success', 'Kamar deleted successfully.');
    }
}
