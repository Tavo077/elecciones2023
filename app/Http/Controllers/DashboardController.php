<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\Party;
use App\Models\User;
use App\Models\Vote;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $count_candidatos = Candidate::count();
        $candidates = Candidate::all();
        $voteCounts = [];

        foreach ($candidates as $candidate) {
            $voteCounts[$candidate->id] = Vote::where('candidates_id', $candidate->id)->count();
        }

        $usuarios = User::count();
        $votos_realizados = Vote::count();

        $faltantes = $usuarios - $votos_realizados;




        return view('dashboard', compact('count_candidatos', 'candidates', 'voteCounts', 'faltantes', 'usuarios', 'votos_realizados'));
    }
}
