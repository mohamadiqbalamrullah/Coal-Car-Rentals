<?php

namespace App\Http\Controllers;

use App\Models\Rental;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class RentalController extends Controller
{
    
    public function stakeholder($id)
    {
        // dd($id);
        $data = Rental::where('id', $id)->update(['status' => 1]);
        if($data){
            return redirect()->route('dashboard')->with('success','Perizinan Telah Disetujui');
        }
        return redirect()->route('dashboard')->with('error', 'Periksa Kembali Data Yang Dipilih!');
    }

    public function stakeholder_decline($id)
    {
        // dd($id);
        $data = Rental::where('id', $id)->update(['status' => -1]);
        if($data){
            return redirect()->route('dashboard')->with('success','Perizinan Berhasil Ditolak');
        }
        return redirect()->route('dashboard')->with('error', 'Periksa Kembali Data Yang Dipilih!');
    }

    public function engineer($id)
    {
        // dd($id);
        $data = Rental::where('id', $id)->update(['status' => 2, 'is_active' => 1]);
        if($data){
            return redirect()->route('dashboard')->with('success','Perizinan Telah Disetujui');
        }
        return redirect()->route('dashboard')->with('error', 'Periksa Kembali Data Yang Dipilih!');
    }

    public function engineer_decline($id)
    {
        // dd($id);
        $data = Rental::where('id', $id)->update(['status' => -2]);
        if($data){
            return redirect()->route('dashboard')->with('success','Kondisi Kendaraan Berhasil Diperbarui');
        }
        return redirect()->route('dashboard')->with('error', 'Periksa Kembali Data Yang Dipilih!');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        // dd($request->jenis_kendaraan);
        $data = $request->validate([
            'driver' => 'required|string',
            'nip' => 'required',
            'keperluan' => 'required|string',
            'jenis_kendaraan' => 'required|string',
            'identitas_kendaraan' =>'required',
            'penanggung_jawab' => 'required|string',
        ]);

        $success = Rental::create([
            'driver' => $data['driver'],
            'nip' => $data['nip'],
            'keperluan' => $data['keperluan'],
            'jenis_kendaraan' => $data['jenis_kendaraan'],
            'identitas_kendaraan' => $data['identitas_kendaraan'],
            'penanggung_jawab' => $data['penanggung_jawab'],
            'created_by' => Auth::user()->name,
            'status' => "0",
            'is_active' => 0,
        ]);

        if($success){
            return redirect()->route('dashboard')->with('success','Perizinan Telah Berhasil Diajukan');
        }
        return redirect()->route('dashboard')->with('error', 'Periksa Kembali Kelengkapan Anda!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rental  $rental
     * @return \Illuminate\Http\Response
     */
    public function show(Rental $rental, $id, Request $request)
    {
        $title = 'Detail Pengajuan Kendaraan';
        $data = $rental->where('id', $id)->first();
        return view('rental.detail', compact('title','data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rental  $rental
     * @return \Illuminate\Http\Response
     */
    public function edit(Rental $rental)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rental  $rental
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rental $rental)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rental  $rental
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rental $rental)
    {
        //
    }
}
