<?php

namespace App\Http\Controllers;

use App\Strategy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StrategyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$strategies = DB::table('strategies'); 
        $strategies = Strategy::all();
        return view('strategies.index', compact('strategies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('strategies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Strategy::create($request->all());
        return redirect()->route('strategies.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Strategy  $strategy
     * @return \Illuminate\Http\Response
     */
    public function show(Strategy $strategy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Strategy  $strategy
     * @return \Illuminate\Http\Response
     */
    public function edit(Strategy $strategy)
    {
        return view('strategies.edit', compact('strategy'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Strategy  $strategy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Strategy $strategy)
    {
        $request->validate(
            [
                'materia' => '',
                'estrategias' => ''
            ]
            );
            $strategy->update($request->all());

            return redirect()->route('strategies.index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Strategy  $strategy
     * @return \Illuminate\Http\Response
     */
    public function destroy(Strategy $strategy)
    {
        $strategy->delete();
        return redirect()->route('strategies.index');
    }
}
