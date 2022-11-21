<?php

namespace App\Http\Controllers;

use App\Http\Requests\GamesStoreRequest;
use App\Models\Category;
use App\Models\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GamesController extends Controller
{
    public function index()
    {
        $games = Game::all();
        return view('lottery.game',compact('games'));
    }

    public function store(GamesStoreRequest $request)
    {
        DB::table('games')
            ->where('active', '=', 'yes')
            ->update(array('active' =>'no'));
        Game::create([
            'team1' => $request->team1,
            'team2' => $request->team2,
        ]);
        return redirect()->back()->with('success','Successfully Create Game!');
    }

    public function destroy($id)
    {
        $category = Game::findOrFail($id);
        $category->delete();
        return redirect()->back()->with('success','Game Successfully Delete!');
    }

    public function active($id)
    {
        $game = Game::findOrFail($id);
        if ($game){
            DB::table('games')
                ->where('active', '=', 'yes')
                ->update(array('active' =>'no'));
            $game->active = 'yes';
            $game->save();
            return redirect()->back()->with('success','Game Successfully Active!');
        }
    }

    public function result(Request $request)
    {
        echo "ok!";
//        $game = Game::findOrFail($id);
//        if ($game){
//            $game->team1
//        }else{
//            return back();
//        }
//        dd($game);
    }
}
