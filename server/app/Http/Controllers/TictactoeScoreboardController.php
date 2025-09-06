<?php

namespace App\Http\Controllers;

use App\Models\TictactoeScoreboard;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TictactoeScoreboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tictactoeScoreboards = TictactoeScoreboard::query()
            ->orderBy('win', 'desc')
            ->get();

        return response()->json([
            'message'           => 'TictactoeScoreboard Fetched Successfully',
            'data'              => $tictactoeScoreboards
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
        TictactoeScoreboard::query()
            ->updateOrCreate([
                'player_name'       => Str::title($request->player_name),
                'difficulty'        => $request->difficulty,
            ], [
                'win'               => $request->win,
                'loss'              => $request->loss,
                'draw'              => $request->draw
            ]);

        return response()->json('Score Submitted Successfully', 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(TictactoeScoreboard $tictactoeScoTictactoeScoreboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TictactoeScoreboard $tictactoeScoTictactoeScoreboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TictactoeScoreboard $tictactoeScoTictactoeScoreboard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TictactoeScoreboard $tictactoeScoTictactoeScoreboard)
    {
        //
    }
}
