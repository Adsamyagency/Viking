<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Water;
use App\Models\Yacht;


class dashboard extends Controller
{
    public function dashboard()
    {
        $yacht = Yacht::all();
        $event = Event::all();
        $water = Water::all();
        return view('dashboard', compact('yacht', 'event', 'water'));
    }
}
