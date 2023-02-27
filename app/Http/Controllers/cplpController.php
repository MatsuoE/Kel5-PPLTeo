<?php

namespace App\Http\Controllers;

use App\Models\cplp;
use Illuminate\Http\Request;

class cplpController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cplp = cplp::get();
        return view('cplp', [
            'cplp' => $cplp
        ]);
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
        $request->validate([
            'kode' => 'required',
            'deskripsi' => 'required'
        ]);

        cplp::create($request->all());
        return redirect()->route('cplp.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(cplp $cplp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(cplp $cplp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, cplp $cplp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(cplp $cplp)
    {
        $cplp->delete();
        return redirect()->route('cplp.index');
    }
}
