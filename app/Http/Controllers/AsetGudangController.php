<?php

namespace App\Http\Controllers;

use App\Models\AsetGudang;
use Illuminate\Http\Request;

use function Laravel\Prompts\search;

class AsetGudangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->query('search');

        $asets = AsetGudang::query()
            ->when($search, function ($query, $search) {
                return $query->where('nama_barang', 'like', "%{$search}%")
                    ->orWhere('kode_serial', 'like', "%{$search}%");
            })
            ->latest() // Mengurutkan dari yang terbaru
            ->get(); // Jika menggunakan pagination, ganti dengan ->paginate(10);

        return view('pages.gudang.index', compact('asets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.gudang.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // 1. Validasi Input Form
        // Ini penting untuk memastikan data yang masuk sesuai aturan dan aman
        $validated = $request->validate([
            'nama_barang' => 'required|string|max:150',
            'kode_serial' => 'required|string|max:50|unique:aset_gudang,kode_serial',
            'kondisi'     => 'required|in:bagus,bekas', // Harus sesuai dengan isi enum di migrasi Anda
            'jumlah_stok' => 'required|integer|min:0',
        ], [
            'kode_serial.unique' => 'Kode serial ini sudah terdaftar di gudang! Gunakan kode lain.'
        ]);

        // 2. Simpan Data ke Database
        // Menggunakan Mass Assignment Eloquent yang memanfaatkan protected $fillable di Model
        AsetGudang::create([
            'nama_barang' => $validated['nama_barang'],
            'kode_serial' => $validated['kode_serial'],
            'kondisi'     => $validated['kondisi'],
            'jumlah_stok' => $validated['jumlah_stok'],
            'waktu_masuk' => now(), // Otomatis mencatat waktu saat aset ini didaftarkan
        ]);

        // 3. Alihkan Halaman (Redirect) dengan Flash Session Success
        return redirect()
            ->route('pages.gudang.index')
            ->with('success', 'Aset baru berhasil disimpan ke gudang!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
