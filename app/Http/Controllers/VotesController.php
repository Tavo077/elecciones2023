<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VotesController extends Controller
{
    public function index()
    {
        return view('voto.index');
    }
}
