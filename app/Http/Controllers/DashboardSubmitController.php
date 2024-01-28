<?php

namespace App\Http\Controllers;

use App\Models\Submit;
use Illuminate\Http\Request;
use Carbon\Carbon;

class DashboardSubmitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $index = Submit::all();
        return view('dashboard.submit.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.submit.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data yang diterima dari form
        $validatedData = $request->validate([
            'judul' => 'required|max:255',
            // 'tglsubmit' => 'required|max:255',
            'function' => 'required|max:255',
            'vcpu' => 'required|max:255',
            'ram' => 'required|max:255',
            'disk' => 'required|max:255',
            'targetonboarding' => 'required|max:255',
            'keterangan' => 'required|max:255',
            'notadinas' => 'required|mimes:xlsx,xls|max:2048', // Menambahkan validasi untuk tipe file dan ukuran
            'bisnisreview' => 'required|mimes:xlsx,xls|max:2048', // Menambahkan validasi untuk tipe file dan ukuran
            'dataresource' => 'required|mimes:xlsx,xls|max:2048', // Menambahkan validasi untuk tipe file dan ukuran
        ]);

        // Buat ID tracking berdasarkan tanggal dan waktu saat ini
        $idtracking = 'TSEL' . Carbon::now()->format('dmHi');

        // Simpan file notadinas dengan nama asli
        $pathNotadinas = $idtracking."-".$request->file('notadinas')->getClientOriginalName();
        $request->file('notadinas')->storeAs('public/excelnotadinas', $pathNotadinas);

        // Simpan file bisnisreview dengan nama asli
        $pathBisnisreview = $idtracking."-".$request->file('bisnisreview')->getClientOriginalName();
        $request->file('bisnisreview')->storeAs('public/excelbisnisreview', $pathBisnisreview);

        // Simpan file dataresource dengan nama asli
        $pathDataresource = $idtracking."-".$request->file('dataresource')->getClientOriginalName();
        $request->file('dataresource')->storeAs('public/dataresource', $pathDataresource);

        // Simpan data ke database
        $tracking = new Submit();
        $tracking->idtracking = $idtracking;
        $tracking->judul = $validatedData['judul'];
        $tracking->tglsubmit = Carbon::now()->format('d/m/y');
        $tracking->function = $validatedData['function'];
        $tracking->vcpu = $validatedData['vcpu'];
        $tracking->ram = $validatedData['ram'];
        $tracking->disk = $validatedData['disk'];
        $tracking->targetonboarding = $validatedData['targetonboarding'];
        $tracking->status = "proses";
        $tracking->keterangan = $validatedData['keterangan'];
        // Simpan nama file ke dalam kolom-kolom yang sesuai di database
        $tracking->notadinas = 'storage/excelnotadinas/'.$pathNotadinas;
        $tracking->bisnisreview = 'storage/excelbisnisreview/'.$pathBisnisreview;
        $tracking->dataresource = 'storage/dataresource/'.$pathDataresource;
        $tracking->save();
        
        return redirect('/dashboard/tracking');
        // Redirect atau kirim pesan sukses, dll.
    }

    /**
     * Display the specified resource.
     */
    public function show(Submit $submit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Submit $submit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Submit $submit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Submit $submit)
    {
        //
    }
}
