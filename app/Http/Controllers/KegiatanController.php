<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use App\Models\Gambar;
use Illuminate\Http\Request;
use File;
use Illuminate\Support\Arr;

class KegiatanController extends Controller
{
    
    private function validateForm($req){
        $req->validate([
            'judul'=> 'required',
            'deskripsi'=> 'required',
            'gambar' => 'required|mimes:jpeg,png,jpg,gif',
        ]);
    }
    private function findId($id){
        $find = Kegiatan::find($id);   
        return $find;
    }

    public function index()
    {
        //
        return view('admin.kegiatan.index', [
            'no' => 0,
            'data' => Kegiatan::leftJoin('gambars', 'gambars.id', 'kegiatans.idGambar')
                      ->where('gambars.tipe', 'kegiatan')
                      ->select('kegiatans.*', 'gambars.nama_file as gambar')
                      ->get(),
            'title' => 'Data Kegiatan',
            'page' => 'Tabel'
        ]);
    }

    
    public function create()
    {
        //
        return view('admin.kegiatan.create', [
            'title' => 'Tambah Data Kegiatan',
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
                'tipe' => 'kegiatan'
            ]);
        }


        $input['idGambar'] = $gambar->id;
        $kegiatan = Kegiatan::create($input);
        return redirect()->route('data-kegiatan.index')->with('success','Data Kegiatan telah tersimpan!!');
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
        return view('admin.kegiatan.edit', [
            'data' => $this->findId($id),
            'title' => 'Tambah Data Kegiatan',
            'page' => 'Form'
        ]);
    }

    public function update(Request $request, $id)
    {
        $oldData = $this->findId($id);
        $input = $request->except(['_token', '_method']);
        if($request->gambar == null){
            // dd($request);
            $this->validate($request, [
                'judul'=> 'required',
                'deskripsi'=> 'required',
            ]);
            // dd($input);
            $updateData = Kegiatan::where('id', $id)->update($input);
            return redirect()->route('data-kegiatan.index')->with('success','Data Kegiatan telah diperbaharui!!');

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
                    'tipe' => 'kegiatan'
                ]);

                $input = Arr::except($input, ['gambar']);
                
                $input['idGambar'] = $gambar->id;
                // hapusgambar
                $getNamaGambar = Gambar::find($oldData->idGambar);
                // dd($getNamaGambar);
                File::delete(public_path('gambar/'.$getNamaGambar->nama_file));
                
                $getNamaGambar->delete();

                $updateData = Kegiatan::where('id', $id)->update($input);
                return redirect()->route('data-kegiatan.index')->with('success','Data Kegiatan telah diperbaharui!!');


            }
        }
    }

    
    public function destroy($id)
    {
        //
        $getIdGambar = Kegiatan::find($id)->idGambar;
        $getNamaGambar = Gambar::find($getIdGambar)->nama_file;
        // dd($getNamaGambar);

        File::delete(public_path('gambar/'.$getNamaGambar));
        $data = $this->findId($id)->delete();
        return redirect()->route('data-kegiatan.index')->with('deleted','Data Kegiatan terhapus!!');
    }
}