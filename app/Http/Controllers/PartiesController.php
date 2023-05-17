<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\PartiesRequest;
use App\Models\Party;
use Illuminate\Http\Request;

class PartiesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.partidos.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.partidos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PartiesRequest $request)
    {
        $candidates = Party::create($request->all());

        return redirect()->route('partidos.index')->with('info', 'El partido a sido registrado');
    }

    /**
     * Display the specified resource.
     */
    public function show(Party $partido)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Party $partido)
    {
        return view('admin.partidos.edit', compact('partido'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PartiesRequest $request, Party $partido)
    {
        $data = $request->all();

        $partido->update($data);

        return redirect()->route('partidos.index')->with('info', 'Se actualizo la información del partido');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
