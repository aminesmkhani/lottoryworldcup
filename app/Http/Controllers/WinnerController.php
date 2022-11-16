<?php

namespace App\Http\Controllers;

use App\Models\Winner;
use Illuminate\Http\Request;

class WinnerController extends Controller
{
    public function index()
    {
        $winners = Winner::with('category','game')->get();
        return view('lottery.winner',compact('winners'));
    }
}
