<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Water;
use App\Models\Yacht;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class HanldeLangController extends Controller
{
    public function handle()
    {
        App::setlocale('ar');
        $vikings = Yacht::all();
        $event = Event::all();
        $water = Water::all();
        return view('home', compact('vikings', 'event', 'water'));
    }
}
