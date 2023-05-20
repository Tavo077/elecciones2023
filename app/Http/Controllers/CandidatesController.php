<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\CandidatesRequest;
use App\Models\Candidate;
use App\Models\Party;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        $partidos = Party::pluck('nombre_partido', 'id');
        return view('admin.candidatos.create', compact('partidos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CandidatesRequest $request)
    {

        $candidato = Candidate::create($request->all());

        if ($request->file('file')) {
            $url = Storage::put('candidato', $request->file('file'));
            $candidato->image()->create([
                'url' => $url
            ]);
        }

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
        $partidos = Party::pluck('nombre_partido', 'id');
        return view('admin.candidatos.edit', compact('candidato', 'partidos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CandidatesRequest $request, Candidate $candidato)
    {
        $candidato->update($request->all());

        if ($request->file('file')) {
            $url = Storage::put('candidatos', $request->file('file'));

            if ($candidato->image) {
                Storage::delete($candidato->image->url);

                $candidato->image->update([
                    'url' => $url
                ]);
            } else {
                $candidato->image()->create([
                    'url' => $url
                ]);
            }
        }

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
