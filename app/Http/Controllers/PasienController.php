<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pasien;
use App\RumahSakit;
use Carbon\Carbon;

class PasienController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $rumahsakits = RumahSakit::latest()->get();
        $pasiens = Pasien::latest()->get();

        return view('admin.pasien.index', compact('rumahsakits', 'pasiens'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_ps' => 'required|unique:pasiens,nama_ps',
            'alamat' => 'required|unique:pasiens,alamat',
            'tlp' => 'required|unique:pasiens,tlp'
        ], [
            'rumahsakit_id.required' => 'Select category name',
        ]);

        Pasien::insert([
            'nama_ps' => $request->nama_ps,
            'alamat' => $request->alamat,
            'tlp' => $request->tlp,
            'rumahsakit_id' => $request->rumahsakit_id,
            'created_at' => Carbon::now()
        ]);

        return redirect()->back()->with('success', 'Pasien added');
    }

    public function edit($pasien_id)
    {

        $pasien = Pasien::find($pasien_id);
        $rumahsakits = RumahSakit::latest()->get();
        return view('admin.pasien.edit', compact('pasien', 'rumahsakits'));
    }

    public function update(Request $request)
    {
        $pasien_id = $request->id;

        Pasien::find($pasien_id)->update([
            'nama_ps' => $request->nama_ps,
            'alamat' => $request->alamat,
            'tlp' => $request->tlp,
            'rumahsakit_id' => $request->rumahsakit_id,
            'created_at' => Carbon::now()
        ]);

        return redirect()->route('admin.pasien')->with('RSupdate', 'Rumah Sakit updated');
    }

    public function destroy($id)
    {

        $pasien = Pasien::find($id);
        $pasien->delete();
        return response()->json([
            'message' => 'Paseien deleted successfully!'
        ]);
    }
}