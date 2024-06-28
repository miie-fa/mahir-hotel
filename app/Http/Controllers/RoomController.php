<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class RoomController extends Controller
{
    const SORT_OPTIONS = [
        'highest_price' => 'price_desc',
        'lowest_price' => 'price_asc',
        'popularity' => 'popularity_desc'
    ];

    public function search(Request $request)
    {
        $validated = $request->validate([
            'room_type' => 'nullable|string',
            'sort_by' => 'nullable|in:highest_price,lowest_price,popularity',
        ]);

        $query = Room::query();

        if ($request->filled('room_type') && $request->room_type != 'Pilihan Kamar') {
            $query->where('room_type', $request->input('room_type'));
        }

        if ($request->filled('sort_by')) {
            switch ($request->input('sort_by')) {
                case 'highest_price':
                    $query->orderBy('price', 'desc');
                    break;
                case 'lowest_price':
                    $query->orderBy('price', 'asc');
                    break;
                case 'popularity':
                    $query->orderBy('popularity', 'desc');
                    break;
            }
        }

        $rooms = $query->get();

        return view('rooms.index', compact('rooms'));
    }

    public function show($id)
    {
        $room = Room::findOrFail($id);
        return view('rooms.detail', compact('room'));
    }
}
