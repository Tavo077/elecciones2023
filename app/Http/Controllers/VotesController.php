<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Candidate;
use App\Models\Party;
use Illuminate\Http\Request;

class VotesController extends Controller
{
    public function index()
    {
        $candidatos = Candidate::all();
        $parties = Party::all();
        return view('voto.index', compact('candidatos', 'parties'));
    }
}
