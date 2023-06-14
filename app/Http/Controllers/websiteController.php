<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Water;
use App\Models\Yacht;
use Illuminate\Http\Request;

class websiteController extends Controller
{
    public function website()
    {
        $vikings = Yacht::all();
        $event = Event::all();
        $water = Water::all();
        return view('home', compact('vikings', 'event', 'water'));
    }
}
