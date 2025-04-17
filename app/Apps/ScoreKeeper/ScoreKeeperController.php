<?php

namespace App\Apps\ScoreKeeper;

use App\Apps\AppContract;

class ScoreKeeperController extends AppContract
{
    public function descr(): string
    {
        return "This app tracks scores for a number of players. use it while playing with friends and family to keep track.";
    }

    public function route(): string
    {
        return route('score_keeper.index');
    }

    public function name(): string
    {
        return 'Score Keeper';
    }

    public function index()
    {
        return view('ScoreKeeper::index');
    }
}
