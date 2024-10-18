<?php

namespace App\Http\Controllers;


use App\Models\Excursion;
use Illuminate\Http\Request;

class ExcursionController extends Controller
{
    // Display a listing of the resource
    public function index()
    {
        $excursions = Excursion::all();
        return view('excursions.viewExcursion', compact('excursions'));
    }
    public function index2()
    {
        $excursions = Excursion::all();
        return view('excursions.viewExcursionUser', compact('excursions'));
    }

    // Show the form for creating a new resource
    public function create()
    {
        return view('excursions.createExcursion');
    }

    // Store a newly created resource in storage
    public function store(Request $request)
    {
        $request->validate([
            'timestampe' => 'required|date',
            'type' => 'required|string',
            'nom' => 'required|string',
            'capacite' => 'required|integer',
            'prix' => 'required|numeric',
            'description' => 'required|string',

        ]);

        Excursion::create($request->all());
        return redirect()->route('excursions.index')->with('success', 'Excursion created successfully.');
    }

    // Display the specified resource
    public function show(Excursion $excursion)
    {
        return view('excursions.show', compact('excursion'));
    }

        // Show the form for editing the specified excursion
        public function edit(Excursion $excursion)
        {
            return view('excursions.editExcursion', compact('excursion'));
        }
    
        // Update the specified excursion in storage
        public function update(Request $request, Excursion $excursion)
        {
            $validatedData = $request->validate([
                'nom' => 'required|string|max:255',
                'type' => 'required|string|max:255',
                'capacite' => 'required|integer',
                'prix' => 'required|numeric',
                'description' => 'required|string',
                //'timestampe' => 'required|date',
            ]);
    
            $excursion->update($validatedData);
    
            return redirect('/excursions')->with('success', 'Excursion updated successfully.');
        }
    

    // Remove the specified resource from storage
    public function destroy(Excursion $excursion)
    {
        $excursion->delete();
        return redirect()->route('excursions.index')->with('success', 'Excursion deleted successfully.');
    }
}