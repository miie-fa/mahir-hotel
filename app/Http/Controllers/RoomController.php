<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function search()
    {
        return view('rooms.search');
    }

    public function searchResults(Request $request)
    {
        $query = Room::query();

        if ($request->filled('check_in') && $request->filled('check_out')) {
            $query->whereDoesntHave('reservations', function($q) use ($request) {
                $q->where(function($query) use ($request) {
                    $query->whereBetween('check_in', [$request->check_in, $request->check_out])
                          ->orWhereBetween('check_out', [$request->check_in, $request->check_out])
                          ->orWhere(function($query) use ($request) {
                              $query->where('check_in', '<', $request->check_in)
                                    ->where('check_out', '>', $request->check_out);
                          });
                });
            });
        }

        if ($request->filled('type')) {
            $query->where('type', $request->type);
        }

        if ($request->filled('price_min')) {
            $query->where('price', '>=', $request->price_min);
        }

        if ($request->filled('price_max')) {
            $query->where('price', '<=', $request->price_max);
        }

        $rooms = $query->get();

        return view('rooms.results', compact('rooms'));
    }
}


