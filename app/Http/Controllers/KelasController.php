<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kelass = Kelas::all();
        return view('kelas.index', compact('kelass'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kelas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $kelas = new Kelas();
        $kelas->name =$request->name;
        $kelas->save();

        return redirect()->route('kelas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
     
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
           
        $kelas = Kelas::find($id);
        return view('kelas.edit', compact('kelas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $kelas =  Kelas::find($id);
        $kelas->name =$request->name;
        $kelas->save();

        return redirect()->route('kelas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kelas =  Kelas::find($id);
        $kelas->delete();

        return redirect()->route('kelas.index');
    }
}
