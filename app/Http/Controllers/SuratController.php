<?php

namespace App\Http\Controllers;

use App\Models\SuratObservasi;
use Illuminate\Http\Request;

class SuratController extends Controller
{
    public function index(){
        $surat = SuratObservasi::all();
        return view('admin.dashboard', compact(['surat']));
    }

    public function show(){
        $surat = SuratObservasi::all();
        return view('data', ['suratlist'=>$surat]);
    }

    public function edit($id){
        $surat = SuratObservasi::FindOrFail($id);
        return view('edit',['suratlist'=>$surat]);
    }

    public function update(Request $request, $id){
        $surat = SuratObservasi::FindOrFail($id);

        $surat->update($request->all());
        return redirect('/data');
    }

    public function store(Request $request){
        $surat = SuratObservasi::create($request->all());
        return redirect('/data');
    }

    public function destroy($id){
        $hapus = SuratObservasi::FindOrFail($id);
        $hapus->delete();
        return redirect('/data');
    }

}
