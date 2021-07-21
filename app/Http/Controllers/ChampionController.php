<?php

namespace App\Http\Controllers;

use App\Models\Champion;
use Illuminate\Http\Request;

class ChampionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $list = Champion::all();
        return view('list', [
            'list'=>$list
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(Request $request)
    {
        $champion = new Champion();
        $champion->fill($request->all());
        $champion->save();
        return redirect('/list');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Champion  $champion
     * @return \Illuminate\Http\Response
     */
    public function show(Champion $champion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     */
    public function edit($id)
    {
        $detail = Champion::find($id);
        return view('edit', [
            'edit'=>$detail
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     */
    public function update(Request $request, $id)
    {
        $detail = Champion::find($id);
        $detail->update($request->all());
        $detail->save();
        return redirect('/list');
    }

    /**
     * Remove the specified resource from storage.
     *
     */
    public function destroy($id)
    {
        $detail = Champion::find($id);
        $detail->delete();
        return redirect('/list');
    }
}
