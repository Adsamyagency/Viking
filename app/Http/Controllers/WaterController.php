<?php

namespace App\Http\Controllers;

use App\Models\Water;
use Illuminate\Http\Request;

class WaterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Water::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('water.en.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',

        ]);
        $water = Water::create([
            'title' => $request->title,

        ]);
        $water->save();
        return redirect('/dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $water = Water::findOrFail($id);
        return view('water.en.edit', compact('water'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
        ]);
        $water = Water::findOrFail($id);
        $water->update([
            'title' => $request->water,

        ]);
        $water->save();
        return redirect('/dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Water::destroy($id);
        return redirect('/dashboard');
    }
}
