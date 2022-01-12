<?php

namespace App\Http\Controllers;

use App\Models\Reaction;
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
       $reaction->name = $request->get('name');
       $reaction->icon = $request->get('icon');
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

}
