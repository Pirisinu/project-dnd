<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Race;
use Illuminate\Http\Request;

class RaceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $races = Race::orderBy('name')->get();
        return view('admin.races.index', compact('races'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Inserimento nuova razza";
        $method = "POST";
        $route = route('admin.races.store');
        $race = null;
        return view('admin.races.create-edit', compact("title", "method", "route", "race"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Race $race)
    {
        return view('admin.races.show',compact('race'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Race $race)
    {
        $title = "Modifica personaggio";
        $method = "PUT";
        $route = route('admin.races.update', $race);
        return view('admin.races.create-edit', compact("title", "method", "route", "race"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Race $race)
    {
        if (!$race) {
            return redirect()->route('admin.races.index')->with('error', 'Race not found.');
        }
        $race->delete();
        return redirect()->route('admin.races.index')->with('success', 'Race successfully deleted.');
    }
}
