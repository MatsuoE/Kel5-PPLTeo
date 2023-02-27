<?php

namespace App\Http\Controllers;

use App\Models\cplsn;
use App\Models\cplp;
use Illuminate\Http\Request;

class cplsnController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {   
        $cplp = cplp::get();
        $cplsn = cplsn::get();
        return view('cplsn', [
            'cplsn' => $cplsn,
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(cplsn $cplsn)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(cplsn $cplsn)
    {
        $cplp = cplp::get();
        return view('edit', [
            'cplsn' => $cplsn,
            'cplp' => $cplp
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, cplsn $cplsn)
    {
        // $data = $request->cplp;
        // $dataPisah = implode(',', $data);

        // $input['cplp'] = $dataPisah;
        // $cplsn->update($input);
        // return redirect()->route('cplsn.index');
        $id = $cplsn->id;
        $request = implode(', ' , $request->cplp);
        $data['cplp'] = $request;
        cplsn::where('id', $cplsn->id)->update($data);
        return redirect()->route('cplsn.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(cplsn $cplsn)
    {
        //
    }
}
