<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Klant;
use Illuminate\Http\Request;

class KlantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $klanten = Klant::all();
        return view('klanten.index', compact('klanten'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('klanten.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'naam' => 'required',
            'leeftijd' => 'required',
            'email' => 'required',
            'profilepic' => 'required',
        ]);

        Klant::create($request->all());
        return redirect()->route('klanten.index')->with('success', 'Klant is toegevoegd');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('klanten.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $klant = Klant::find($id);
        return view('klanten.edit', compact('klant'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'naam' => 'required',
            'leeftijd' => 'required',
            'email' => 'required',
            'profilepic' => 'required',
        ]);
        $klant = Klant::find($id);
        $klant->update($request->all());
        return redirect()->route('klanten.index')->with('success', 'Klant is aangepast');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $klant = Klant::find($id);
        $klant->delete();
        return redirect()->route('klanten.index')->with('success', 'Klant is verwijderd');
    }
}
