<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Gambar;
use Illuminate\Http\Request;
use File;

class MahasiswaController extends Controller
{
    private function validateForm($req){
        $req->validate([
            'nim'=> 'required',
            'nama'=> 'required',
            'status'=> 'required',
            'gambar' => 'required|mimes:jpeg,png,jpg,gif',
        ]);
    }
    private function findId($id){
        $find = Mahasiswa::find($id);   
        return $find;
    }

    public function index()
    {
        //
        return view('admin.mahasiswa.index', [
            'no' => 0,
            'data' => Mahasiswa::leftJoin('gambars', 'gambars.id', 'mahasiswas.idGambar')
                      ->where('gambars.tipe', 'mahasiswa')
                      ->select('mahasiswas.*', 'gambars.nama_file as gambar')
                      ->get(),
            'title' => 'Data Mahasiswa',
            'page' => 'Tabel'
        ]);
    }

    
    public function create()
    {
        //
        return view('admin.mahasiswa.create', [
            'title' => 'Tambah Data Mahasiswa',
            'page' => 'Form'
        ]);
    }

    
    public function store(Request $request)
    {
        //
        $this->validateForm($request);
        $input = $request->except(['_token']);
        // dd($input);
        if($request->hasfile('gambar')){
            $fileName = time().'_'.$request->gambar->getClientOriginalName();
            $request->gambar->move(public_path('gambar'), $fileName);
            $input['gambar'] = $fileName;

            $gambar = Gambar::create([
                'nama_file' => $input['gambar'],
                'tipe' => 'mahasiswa'
            ]);
        }


        $input['idGambar'] = $gambar->id;
        $mahasiswa = Mahasiswa::create($input);
        return redirect()->route('data-mahasiswa.index')->with('success','Data Mahasiswa telah tersimpan!!');
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
        return view('admin.mahasiswa.edit', [
            'data' => $this->findId($id),
            'title' => 'Tambah Data Mahasiswa',
            'page' => 'Form'
        ]);
    }

    public function update(Request $request, $id)
    {
        //
        $oldData = $this->findId($id);
        $input = $request->except(['_token', '_method']);
        if($request->gambar == null){
            // dd($request);
            $this->validate($request, [
                'nim'=> 'required',
                'nama'=> 'required',
                'status'=> 'required',
            ]);
            // dd($input);
            $updateData = Mahasiswa::where('id', $id)->update($input);
            return redirect()->route('data-mahasiswa.index')->with('success','Data Mahasiswa telah diperbaharui!!');

        }else{
            // dd($input);

            $this->validateForm($request);
            if(is_file($request->gambar)){
                $fileName = time().'_'.$request->gambar->getClientOriginalName();
                $request->gambar->move(public_path('gambar'), $fileName);
                $input['gambar'] = $fileName;

                 // dd($input);
                
                $gambar = Gambar::create([
                    'nama_file' => $input['gambar'],
                    'tipe' => 'dosen'
                ]);

                $input = Arr::except($input, ['gambar']);
                
                $input['idGambar'] = $gambar->id;

                // hapusgambar
                $getNamaGambar = Gambar::find($oldData->idGambar);
                File::delete(public_path('gambar/'.$getNamaGambar)->nama_file);
                
                $getNamaGambar->delete();

                $updateData = Mahasiswa::where('id', $id)->update($input);
                return redirect()->route('data-mahasiswa.index')->with('success','Data Mahasiswa telah diperbaharui!!');


            }
        }
    }

    
    public function destroy($id)
    {
        //
        $getIdGambar = Mahasiswa::find($id)->idGambar;
        $getNamaGambar = Gambar::find($getIdGambar)->nama_file;
        // dd($getNamaGambar);

        File::delete(public_path('gambar/'.$getNamaGambar));
        $data = $this->findId($id)->delete();
        return redirect()->route('data-mahasiswa.index')->with('deleted','Data Mahasiswa terhapus!!');
    }
}