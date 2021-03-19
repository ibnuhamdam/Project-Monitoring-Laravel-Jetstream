<?php

namespace App\Http\Controllers;

use App\Models\PaketPekerjaan;
use Illuminate\Http\Request;

class PaketPekerjaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pakets = PaketPekerjaan::all();

        return view('paket.index', [
            'pakets' => $pakets
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('paket.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $paket = new PaketPekerjaan();
        $paket->bidang = $request->bidang;
        $paket->namaPaket = $request->namaPaket;
        $paket->tahunPaket = $request->tahunPaket;
        $paket->namaKonsultan = $request->namaKonsultan;
        $paket->paparan = $request->paparan;
        $paket->save();

        return redirect()->route('paket.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PaketPekerjaan  $paketPekerjaan
     * @return \Illuminate\Http\Response
     */
    public function show(PaketPekerjaan $paketPekerjaan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PaketPekerjaan  $paketPekerjaan
     * @return \Illuminate\Http\Response
     */
    public function edit(PaketPekerjaan $paketPekerjaan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PaketPekerjaan  $paketPekerjaan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PaketPekerjaan $paketPekerjaan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PaketPekerjaan  $paketPekerjaan
     * @return \Illuminate\Http\Response
     */
    public function destroy(PaketPekerjaan $paketPekerjaan)
    {
        //
    }
}
