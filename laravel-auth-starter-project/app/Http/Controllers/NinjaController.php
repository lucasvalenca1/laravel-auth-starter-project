<?php

namespace App\Http\Controllers;

use App\Models\Ninja;
use App\Models\Dojo;
use Illuminate\Http\Request;

class NinjaController extends Controller
{
    /**
     * Display a listing of ninjas.
     */
    public function index()
    {
        // Fetch ninjas with their associated dojo
        $ninjas = Ninja::with('dojo')->orderBy('created_at', 'desc')->paginate(10);

        return view('ninjas.index', ["ninjas" => $ninjas]);
    }

    /**
     * Display the specified ninja.
     */
    public function show(Ninja $ninja)
    {
        // Load the associated dojo for the ninja
        $ninja->load('dojo');

        return view('ninjas.show', ["ninja" => $ninja]);
    }

    /**
     * Show the form for creating a new ninja.
     */
    public function create()
    {
        // Fetch all dojos from the database
        $dojos = Dojo::all();

        return view('ninjas.create', ["dojos" => $dojos]);
    }

    /**
     * Store a newly created ninja in the database.
     */
    public function store(Request $request)
    {
        // Validate input fields
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'skill' => 'required|integer|min:0|max:100',
            'bio' => 'required|string|min:20|max:1000',
            'dojo_id' => 'required|exists:dojos,id', // Ensure dojo_id exists in dojos table
        ]);

        // Create a new ninja record
        Ninja::create($validated);

        return redirect()->route('ninjas.index')->with('success', 'Ninja Created!');
    }

    /**
     * Remove the specified ninja from the database.
     */
    public function destroy(Ninja $ninja)
    {
        // Delete the ninja record
        $ninja->delete();

        return redirect()->route('ninjas.index')->with('success', 'Ninja Deleted!');
    }
}
