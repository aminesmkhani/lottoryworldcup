<?php

namespace App\Http\Controllers;

use App\Models\Winner;
use Illuminate\Http\Request;

class WinnerController extends Controller
{
    public function index()
    {
        $winner = Winner::with('category')->get();
        dd($winner);
        return view('lottery.winner');
    }
}
