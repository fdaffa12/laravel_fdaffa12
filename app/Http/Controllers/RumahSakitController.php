<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RumahSakit;
use Carbon\Carbon;

class RumahSakitController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rumahsakits = RumahSakit::latest()->get();

        return view('admin.rumahsakit.add', compact('rumahsakits'));
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
        $request->validate([
            'nama_rs' => 'required|unique:rumah_sakits,nama_rs',
            'alamat' => 'required|unique:rumah_sakits,alamat',
            'email' => 'required|unique:rumah_sakits,email',
            'tlp' => 'required|unique:rumah_sakits,tlp'
        ]);

        RumahSakit::insert([
            'nama_rs' => $request->nama_rs,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'tlp' => $request->tlp,
            'created_at' => Carbon::now()
        ]);

        return redirect()->back()->with('success', 'Rumah Sakit added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($rs_id)
    {
        $rumahsakit = RumahSakit::find($rs_id);
        return view('admin.rumahsakit.edit', compact('rumahsakit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $rs_id = $request->id;

        RumahSakit::find($rs_id)->update([
            'nama_rs' => $request->nama_rs,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'tlp' => $request->tlp,
            'created_at' => Carbon::now()
        ]);

        return redirect()->route('admin.rs')->with('RSupdate', 'Rumah Sakit updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($rs_id)
    {
        RumahSakit::find($rs_id)->delete();
        return redirect()->back()->with('delete', 'Rumah Sakit deleted');
    }
}