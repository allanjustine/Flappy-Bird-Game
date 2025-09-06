<?php

namespace App\Http\Controllers;

use App\Models\ChaseMeScoreboard;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ChaseMeScoreboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $chaseMeScoreboard = ChaseMeScoreboard::query()
            ->orderBy('score', 'desc')
            ->get();

        return response()->json([
            'message'           => 'Scoreboard Fetched Successfully',
            'data'              => $chaseMeScoreboard
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
        ChaseMeScoreboard::query()
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
    public function show(ChaseMeScoreboard $chaseMeScoreboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ChaseMeScoreboard $chaseMeScoreboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ChaseMeScoreboard $chaseMeScoreboard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ChaseMeScoreboard $chaseMeScoreboard)
    {
        //
    }
}
