<?php

namespace App\Http\Controllers;

use App\Models\Jenis_laundry;
use Illuminate\Http\Request;

class JenisLaundryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jenislaundry = Jenis_laundry::all();
        return view('jenislaundry.index', compact('jenislaundry'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jenislaundry = Jenis_laundry::all();
        return view('jenislaundry.create', compact('jenislaundry'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'jenis_laundry' => 'required',

        ]);

        $jenislaundry = new Jenis_laundry;
//DB            CREATE
        $jenislaundry->jenis_laundry = $request->jenis_laundry;

        $jenislaundry->save();
        return redirect()->route('jenislaundry.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jenis_laundry  $jenis_laundry
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jenislaundry = Jenis_laundry::findOrFail($id);
        return view('jenislaundry.show', compact('jenislaundry'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jenis_laundry  $jenis_laundry
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jenislaundry = Jenis_laundry::findOrFail($id);
        return view('jenislaundry.edit', compact('jenislaundry'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jenis_laundry  $jenis_laundry
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'jenis_laundry' => 'required',

        ]);

        $jenislaundry = Jenis_laundry::findOrFail($id);
        $jenislaundry->jenis_laundry = $request->jenis_laundry;

        $jenislaundry->save();
        return redirect()->route('jenislaundry.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jenis_laundry  $jenis_laundry
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jenislaundry = Jenis_laundry::findOrFail($id);
        $jenislaundry->delete();
        return redirect()->route('jenislaundry.index');

    }
}
