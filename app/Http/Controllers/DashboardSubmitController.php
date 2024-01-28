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
   dd($request->all());
   $validatedData = $request->validate([
    'judul' => 'required|max:255',
    'tglsubmit' => 'required|max:255',
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

// Simpan file notadinas dengan nama asli
$pathNotadinas = $request->file('notadinas')->getClientOriginalName();
$request->file('notadinas')->storeAs('excelnotadinas', $pathNotadinas);

// Simpan file bisnisreview dengan nama asli
$pathBisnisreview = $request->file('bisnisreview')->getClientOriginalName();
$request->file('bisnisreview')->storeAs('excelbisnisreview', $pathBisnisreview);

// Simpan file dataresource dengan nama asli
$pathDataresource = $request->file('dataresource')->getClientOriginalName();
$request->file('dataresource')->storeAs('dataresource', $pathDataresource);

// Buat ID tracking berdasarkan tanggal dan waktu saat ini
$idtracking = 'TSEL' . Carbon::now()->format('dmHi');

// Simpan data ke database
$tracking = new Submit();
$tracking->tracking_id = $idtracking;
$tracking->judul_aplikasi = $validatedData['judul'];
$tracking->tgl_submit = $validatedData['tglsubmit'];
$tracking->function = $validatedData['function'];
$tracking->vcpu = $validatedData['vcpu'];
$tracking->ram = $validatedData['ram'];
$tracking->disk = $validatedData['disk'];
$tracking->target_onboarding = $validatedData['targetonboarding'];
$tracking->status = $validatedData['status'];
$tracking->keterangan = $validatedData['keterangan'];
// Simpan nama file ke dalam kolom-kolom yang sesuai di database
$tracking->nama_notadinas = $pathNotadinas;
$tracking->nama_bisnisreview = $pathBisnisreview;
$tracking->nama_dataresource = $pathDataresource;
$tracking->save();
{
    Submit::create($request->except(['_token','submit']));
    return redirect('/dashborad/tracking');
}
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
