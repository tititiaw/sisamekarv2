<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Presensi;
use App\Models\Kelas;
use App\Models\Siswa;
class PresensiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    // Mendapatkan tanggal hari ini
    $today = now()->toDateString();

    // Menghitung presensi hari ini
    $totalHadir = Presensi::where('tanggal', $today)
                         ->where('status_kehadiran', 'Hadir')
                         ->count();

    $totalSakitIzin = Presensi::where('tanggal', $today)
                             ->whereIn('status_kehadiran', ['Sakit', 'Izin'])
                             ->count();

    $totalAlpa = Presensi::where('tanggal', $today)
                        ->where('status_kehadiran', 'Alpa')
                        ->count();

    // Mengambil data presensi untuk tabel
    $presensis = Presensi::with('kelas')
                        ->orderBy('tanggal', 'desc')
                        ->paginate(10);

    return view('presensi.index', compact(
        'presensis',
        'totalHadir',
        'totalSakitIzin',
        'totalAlpa'
    ));
}
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kelass = Kelas::all();
        return view('presensi.create',compact('kelass'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'nis' => 'required|string|max:20',
            'gender' => 'required|in:B,G',
            'kelas_id' => 'required|integer|exists:kelas,id',
            'tanggal' => 'required|date',
            'status_kehadiran' => 'required|in:Hadir,Sakit,Izin,Alpa',
        ]);

        $presensi = new Presensi();
        $presensi->name = $request->name;
        $presensi->nis = $request->nis;
        $presensi->gender = $request->gender;
        $presensi->kelas_id = $request->kelas_id;
        $presensi->tanggal = $request->tanggal;
        $presensi->status_kehadiran = $request->status_kehadiran;
        $presensi->save();

        return redirect()->route('presensi.index')
            ->with('success', 'Data presensi berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
     
    }

    public function edit(string $id)
{
    $presensi = Presensi::findOrFail($id);
    $kelass = Kelas::all();
    return view('presensi.edit', compact('presensi', 'kelass'));
}

public function update(Request $request, string $id)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'nis' => 'required|string|max:20',
        'gender' => 'required|in:B,G',
        'kelas_id' => 'required|integer|exists:kelas,id',
        'tanggal' => 'required|date',
        'status_kehadiran' => 'required|in:Hadir,Sakit,Izin,Alpa',
    ]);

    try {
        $presensi = Presensi::findOrFail($id);
        $presensi->update([
            'name' => $request->name,
            'nis' => $request->nis,
            'gender' => $request->gender,
            'kelas_id' => $request->kelas_id,
            'tanggal' => $request->tanggal,
            'status_kehadiran' => $request->status_kehadiran,
        ]);

        return redirect()->route('presensi.index')
            ->with('success', 'Data presensi berhasil diperbarui');
    } catch (\Exception $e) {
        return redirect()->back()
            ->with('error', 'Terjadi kesalahan saat memperbarui data')
            ->withInput();
    }
}

public function destroy(string $id)
{
    try {
        $presensi = Presensi::findOrFail($id);
        $presensi->delete();

        return redirect()->route('presensi.index')
            ->with('success', 'Data presensi berhasil dihapus');
    } catch (\Exception $e) {
        return redirect()->back()
            ->with('error', 'Terjadi kesalahan saat menghapus data');
    }
}
}



