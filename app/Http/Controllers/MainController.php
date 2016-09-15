<?php

namespace App\Http\Controllers;

use App\Models\Leaderboard;
use Illuminate\Http\Request;

use App\Http\Requests;

class MainController extends Controller
{

    public function index()
    {
        return view('main');
    }

    public function getTop($top) {
        $leaderboard = Leaderboard::orderBy('score','desc')->take($top)->get();
        return view('leaderboard', ['leaderboard' => $leaderboard]);
    }

    public function getAddScore()
    {
        return view('add_score');
    }

    public function postAddScore(Request $request)
    {
        $this->validate($request, [
            'username' => 'required',
            'score' => 'required|integer',
        ]);

        $user_exists = Leaderboard::where('username', $request->username)->first();

        if($user_exists)
            Leaderboard::find($user_exists->id)->update(['score' => $request->score >= $user_exists->score ? $request->score : $user_exists->score]);
        else
            Leaderboard::create($request->all());

        return redirect('/top/100');
    }

}
