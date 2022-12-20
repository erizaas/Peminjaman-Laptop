<?php

namespace App\Http\Controllers;

use App\Models\PeminjamanLaptop;
use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class PeminjamanLaptopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('data');
    }

    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function data()
    {
        $peminjamanlepi = PeminjamanLaptop::all();

        return view('data', compact('peminjamanlepi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedata = $request->validate([
            'name' => 'required|min:3',
            'purpose' => 'required',
            'ket' => 'required',
            'nis' => 'required',
            'date' => 'required',
            'teacher_name' => 'required|min:3'
            

        ]);
        PeminjamanLaptop::create([
            'name' => $request->name,
            'purpose' => $request->purpose,
            'ket' => $request->ket,
            'nis' => $request->nis,
            'rayon' => $request->rayon,
            'date' => $request->date,
            'teacher_name' => $request->teacher_name,
            
        ]);
        //kalau berhasil tambah ke db, bakal diarahin ke halaman dashboard dengan menampilkan pemberitahuan

        Alert::success('Success', 'Berhasil tambah !');
        return redirect('/data')->with('addData', 'Berhasil menambahkan Data!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PeminjamanLaptop  $peminjamanlepi
     * @return \Illuminate\Http\Response
     */
    public function show(PeminjamanLaptop $peminjamanlepi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PeminjamanLaptop  $peminjamanlepi
     * @return \Illuminate\Http\Response
     */
    public function kembali($id)
    {
        PeminjamanLaptop::where('id', '=', $id)->update([
        'return_date' => now(),
       ]);
       Alert::success('Success','Laptop telah dikembalikan !');
       return back();    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PeminjamanLaptop  $peminjamanlepi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PeminjamanLaptop $peminjamanlepi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PeminjamanLaptop  $peminjamanlepi
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        PeminjamanLaptop::where('id', '=', $id)->delete([
            'id' => now(),
           ]);
        Alert::info('Info','Data berhasil dihapus !');
       return back();
    }
}
