<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\CandidatesRequest;
use App\Models\Candidate;
use Illuminate\Http\Request;

class CandidatesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.candidatos.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.candidatos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CandidatesRequest $request)
    {
        $candidates = Candidate::create($request->all());

        return redirect()->route('candidatos.index')->with('info', 'El candidatos a sido registrado');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Candidate $candidato)
    {
        return view('admin.candidatos.edit', compact('candidato'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CandidatesRequest $request, Candidate $candidato)
    {
        $data = $request->all();

        $candidato->update($data);

        return redirect()->route('candidatos.index')->with('info', 'Se actualizo la información del candidato');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
