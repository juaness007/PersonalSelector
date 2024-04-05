<?php

namespace App\Http\Controllers;

use App\Models\applications;
use App\Models\Vacancie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApplicationsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Vacancie $vacancie)
    {
        $candidate = Auth::user()->candidate;

        $newApplication = new applications();
        $newApplication->candidate_id = $candidate->id;
        $newApplication->vacant_id = $vacancie->id;

        $newApplication->save();

        return redirect()->route('user.index')->with('message', "La postulacion " . $vacancie->vacancie_code . ' fue terminada exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(applications $applications)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(applications $applications)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, applications $applications)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(applications $applications)
    {
        //
    }
}
