<?php

namespace App\Http\Controllers;

use App\Principal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade as PDF;

class PrincipalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $principals = DB::table('principals')->paginate(10); 
        return view('principals.index', compact('principals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('principals.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Principal::create($request->all());
        return redirect()->route('principals.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Principal  $principal
     * @return \Illuminate\Http\Response
     */
    public function show(Principal $principal)
    {
        return view('principals.show', compact('principal'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Principal  $principal
     * @return \Illuminate\Http\Response
     */
    public function edit(Principal $principal)
    {
        return view('principals.edit', compact('principal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Principal  $principal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Principal $principal)
    {
        $request->validate(
            [
                'numeroC' => '',
                'nombre' => '',
                'apeP' => '',
                'apeM' => '',
                'cal1' => '',
                'cal2' => '',
                'cal3' => '',
                'cal4' => '',
                'cal5' => '',
                'U1' => '',
                'U2' => '',
                'U3' => '',
                'U4' => '',
                'U5' => '',
                'calF' => ''
            ]
            );
            $principal->update($request->all());

            return redirect()->route('principals.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Principal  $principal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Principal $principal)
    {
        $principal->delete();
        return redirect()->route('principals.index');
    }

    public function exportToPDF(){
        $principals = Principal::get();
        $pdf =PDF::loadView('principals.exportToPDF', compact('principals'));
        return $pdf->download('Seguimiento.pdf');
    }
}
