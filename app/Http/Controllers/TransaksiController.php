<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Transaksi;
use App\Models\Playstation;
use Illuminate\Http\Request;
use App\Http\Requests\StoreTransaksiRequest;
use App\Http\Requests\UpdateTransaksiRequest;
use Illuminate\Support\Facades\DB;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreTransaksiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaksi $transaksi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transaksi $transaksi){
        $user = User::all();
        $playstation = Playstation::all();
        $trans = Transaksi::Where('id',$transaksi->id)->first();
        return view('edit_transaksi',['user'=>$user,'playstation'=> $playstation,'transEdit' => $trans]);
    }
    public function update(Request $request, Transaksi $transaksi){
        $validateData=$request->validate([
            'pengguna_id'=>'required|integer',
            'playstation_id'=>'required|integer',
            'tanggal'=>'required|date|date_format:Y-m-d',
            'durasiBermain'=>'required|integer',
            'jumlahOrang'=>'required|integer'
        ]);
            $transaksi->update([
                'pengguna_id'=> $validateData['pengguna_id'],
                'playstation_id'=> $validateData['playstation_id'],
                'tanggal'=> $validateData['tanggal'],
                'durasiBermain'=> $validateData['durasiBermain'],
                'jumlahOrang'=> $validateData['jumlahOrang'],
            ]);

        return redirect()->route('');
    }

    public function read() {
        $data_transaksi = DB::table("transaksis")->get();
        return view('list_transaksi', compact('data_transaksi'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaksi $transaksi)
    {
        //
    }
}
