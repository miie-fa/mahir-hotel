<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class RoomController extends Controller
{
    public function search(Request $request)
    {
        $query = Room::query();

        if ($request->has('room_type') && $request->room_type != 'Pilihan Kamar') {
            $query->where('room_type', $request->input('room_type'));
        }

        if ($request->has('sort_by')) {
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
}