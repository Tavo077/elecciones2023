<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Candidate;
use App\Models\Party;
use App\Models\Vote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VotesController extends Controller
{
    public function index()
    {
        $candidatos = Candidate::all();
        $parties = Party::all();
        $voto = Vote::where('user_id', Auth::user()->id)->first();
        $candidato = Candidate::where('id', $voto->candidates_id ?? 0)
            ->first();

        return view('voto.index', compact('candidatos', 'parties', 'voto', 'candidato'));
    }

    public function store(Request $request)
    {
        $voto = Vote::create($request->all());

        return redirect()->route('voto.index')->with('info', 'Voto realizado ');
    }
}
