<?php

namespace App\Http\Controllers;

use App\Models\Dream;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DreamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dream.index', [
            'dreams' => Dream::where('user_id', Auth::id())->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dream.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Dream::create([
            'user_id' => Auth::id(),
            'title' => $request['title'],
            'description' => $request['description'],
            'rating' => $request['rating'],
            'lucidity' => $request['lucidity'],
        ]);
        return redirect(route('dreams.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return view('dream.show', ['dream' => Dream::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dream $dream)
    {
        return view('dream.edit', ['dream' => $dream]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dream $dream)
    {
        $dream->fill($request->all());
        $dream->save();
        return redirect(route('dreams.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dream $dream)
    {
        $dream->delete();
        return redirect(route('dreams.index'));
    }
}