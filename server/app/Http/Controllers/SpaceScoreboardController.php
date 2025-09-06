<?php

namespace App\Http\Controllers;

use App\Models\SpaceScoreboard;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SpaceScoreboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $spaceScoreBoard = SpaceScoreboard::query()
            ->orderBy('score', 'desc')
            ->get();

        return response()->json([
            'message'           => 'Scoreboard Fetched Successfully',
            'data'              => $spaceScoreBoard
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        SpaceScoreBoard::query()
            ->updateOrCreate([
                'player_name'       => Str::title($request->player_name),
            ], [
                'score'             => $request->score
            ]);

        return response()->json('Score Submitted Successfully', 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(SpaceScoreboard $spaceScoreboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SpaceScoreboard $spaceScoreboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SpaceScoreboard $spaceScoreboard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SpaceScoreboard $spaceScoreboard)
    {
        //
    }
}
