<?php

namespace App\Http\Controllers;

use App\Models\FormPemesan;
use Illuminate\Http\Request;

class FormPemesanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function proses_form_pemesanan(Request $request)
    {
        $validateData = $request->validate([
            'id' => 'required',
            'id_tiket' => 'required',
            'tanggal_pesan_tiket' => 'required',
            'jumlah_tiket' => 'required',
            'total_harga' => 'required',
            'cara_pembayaran' => 'required',
        ]);

        $save = FormPemesan::create($validateData);
        return redirect()->route('index')->with('sukses', 'Anda Berhasil Menambahkan Data');
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FormPemesan  $formPemesan
     * @return \Illuminate\Http\Response
     */
    public function show(FormPemesan $formPemesan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FormPemesan  $formPemesan
     * @return \Illuminate\Http\Response
     */
    public function edit(FormPemesan $formPemesan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FormPemesan  $formPemesan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FormPemesan $formPemesan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FormPemesan  $formPemesan
     * @return \Illuminate\Http\Response
     */
    public function destroy(FormPemesan $formPemesan)
    {
        //
    }
}
