<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Modul;

class ModulController extends Controller
{
    public function index(){
        $moduls = Modul::all();
        return view('modul.index', ['moduls' => $moduls]);
    }

    public function create(){
        return view('modul.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'isi' => 'required',
            'soal' => 'required'
        ]);

        $newModul = Modul::create($data);

        return redirect()->route('modul.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function show(Modul $modul) {
        return view('modul.show', ['modul' => $modul]);
    }
    public function edit(Modul $modul, Request $request) {
        return view('modul.edit', ['modul' => $modul]);
    }

    public function update(Modul $modul, Request $request){
        $data = $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'isi' => 'required',
            'soal' => 'required'
        ]);

        $modul->update($data);
        return redirect()->route('modul.show', ['modul'=>$modul])->with('success', 'Data berhasil diperbarui');
    }

    public function delete(Modul $modul){
        $modul->delete();
        return redirect()->route('modul.index')->with('success', 'Data berhasil dihapus');
    }
}
