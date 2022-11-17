<?php

namespace App\Http\Controllers;

use App\Models\Participants;
use Illuminate\Http\Request;

class ParticipantController extends Controller
{
    public function index()
    {
        $participants = Participants::with('game')->get();
        return view('lottery.participant',compact('participants'));
    }
}
