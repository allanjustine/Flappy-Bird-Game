<?php

namespace App\Http\Controllers;

use App\Models\SnakeScoreBoard;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SnakeScoreBoardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $snakeScoreBoard = SnakeScoreBoard::query()
            ->orderBy('score', 'desc')
            ->get();

        return response()->json([
            'message'           => 'Scoreboard Fetched Successfully',
            'data'              => $snakeScoreBoard
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
        SnakeScoreBoard::query()
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
    public function show(SnakeScoreBoard $snakeScoreBoard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SnakeScoreBoard $snakeScoreBoard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SnakeScoreBoard $snakeScoreBoard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SnakeScoreBoard $snakeScoreBoard)
    {
        //
    }
}
