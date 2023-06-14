<?php

namespace App\Http\Controllers;

use App\Models\Yacht;
use Illuminate\Http\Request;

class YachtController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Yacht::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Yacht.en.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'yacht' => 'required',
            'feet' => 'required',
            'person' => 'required'
        ]);
        $yacht = Yacht::create([
            'yacht' => $request->yacht,
            'feet' => $request->feet,
            'person' => $request->person
        ]);
        $yacht->save();
        return redirect('/dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $yacht = Yacht::findOrFail($id);
        return view('Yacht.en.edit', compact('yacht'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'yacht' => 'required',
            'feet' => 'required',
            'person' => 'required'
        ]);
        $yacht = Yacht::findOrFail($id);
        $yacht->update([
            'yacht' => $request->yacht,
            'feet' => $request->feet,
            'person' => $request->person
        ]);
        $yacht->save();
        return redirect('/dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Yacht::destroy($id);
        return redirect('/dashboard');
    }
}
