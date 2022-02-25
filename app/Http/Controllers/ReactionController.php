<?php

namespace App\Http\Controllers;

use App\Models\Reaction;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ReactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return string
     */
    public function index()
    {
        $reactions = Reaction::query()->get();
        return $reactions->toJson();
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    public function store(Request $request): string
    {
       $reaction = new Reaction();
       $reaction->fill($request->all());
       $reaction->save();
       return $reaction->toJson();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reaction  $reaction
     * @return string
     */
    public function show(Reaction $reaction): string
    {
        $reaction = Reaction::where('id', $reaction->id)->first();
        return $reaction->toJson();
    }

    /**
     * Destroys the specified resource.
     *
     * @param Reaction $reaction
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Reaction $reaction): JsonResponse
    {
        $reaction->delete();
        return response()->json('ok');
    }
}
