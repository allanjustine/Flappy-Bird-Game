<?php

namespace App\Http\Controllers;

use App\Models\ScoreBoard;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ScoreBoardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $scoreBoards = ScoreBoard::query()
            ->orderBy('score', 'desc')
            ->get();

        return response()->json([
            'message'           => 'Scoreboard Fetched Successfully',
            'data'              => $scoreBoards
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
        ScoreBoard::query()
            ->updateOrCreate([
                'player_name'       => Str::title($request->player_name),
                'department'        => Str::title($request->department),
                'branch'            => Str::title($request->branch),
                'position'          => Str::title($request->position),
            ], [
                'score'             => $request->score
            ]);

        return response()->json('Score Submitted Successfully', 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(ScoreBoard $scoreBoard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ScoreBoard $scoreBoard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ScoreBoard $scoreBoard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ScoreBoard $scoreBoard)
    {
        //
    }
}
