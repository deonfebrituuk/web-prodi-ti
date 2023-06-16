<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;
use File;
use App\Models\Gambar;
use Illuminate\Support\Arr;

class DosenController extends Controller
{
    
    private function validateForm($req){
        $req->validate([
            'nidn'=> 'required',
            'nama'=> 'required',
            'ttl' => 'required',
            'jabatan' => 'required',
            'email' => 'required',
            'ig' => 'required',
            'fb' => 'required',
            'wa' => 'required',
            'gambar' => 'required|mimes:jpeg,png,jpg,gif',
        ]);
    }
    private function findId($id){
        $find = Dosen::find($id);   
        return $find;
    }

    public function index()
    {
        //
        return view('admin.dosen.index', [
            'no' => 0,
            'data' => Dosen::leftJoin('gambars', 'gambars.id', 'dosens.idGambar')
                      ->where('gambars.tipe', 'dosen')
                      ->select('dosens.*', 'gambars.nama_file as gambar')
                      ->get(),
            'title' => 'Data Dosen',
            'page' => 'Tabel'
        ]);
    }

    
    public function create()
    {
        //
        return view('admin.dosen.create', [
            'title' => 'Tambah Data Dosen',
            'page' => 'Form'
        ]);
    }

    
    public function store(Request $request)
    {
        //
        $this->validateForm($request);
        $input = $request->except(['_token']);
        $input['wa'] = trim($request->wa, '_');
        // dd($input);  
        if($request->hasfile('gambar')){
            $fileName = time().'_'.$request->gambar->getClientOriginalName();
            $request->gambar->move(public_path('gambar'), $fileName);
            $input['gambar'] = $fileName;

            $gambar = Gambar::create([
                'nama_file' => $input['gambar'],
                'tipe' => 'dosen'
            ]);
        }


        $input['idGambar'] = $gambar->id;
        $dosen = Dosen::create($input);
        return redirect()->route('data-dosen.index')->with('success','Data Dosen telah tersimpan!!');
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
        return view('admin.dosen.edit', [
            'data' => $this->findId($id),
            'title' => 'Tambah Data Dosen',
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
                'nidn'=> 'required',
                'nama'=> 'required',
                'ttl' => 'required',
                'jabatan' => 'required',
                'email' => 'required',
                'ig' => 'required',
                'fb' => 'required',
                'wa' => 'required',
            ]);
            // dd($input);
            $updateData = Dosen::where('id', $id)->update($input);
            return redirect()->route('data-dosen.index')->with('success','Data Dosen telah diperbaharui!!');

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
                // dd($getNamaGambar);
                File::delete(public_path('gambar/'.$getNamaGambar->nama_file));
                
                $getNamaGambar->delete();

                $updateData = Dosen::where('id', $id)->update($input);
                return redirect()->route('data-dosen.index')->with('success','Data Dosen telah diperbaharui!!');


            }
        }
    }

    
    public function destroy($id)
    {
        //
        $getIdGambar = Dosen::find($id)->idGambar;
        $getNamaGambar = Gambar::find($getIdGambar)->nama_file;
        // dd($getNamaGambar);

        File::delete(public_path('gambar/'.$getNamaGambar));
        $data = $this->findId($id)->delete();
        return redirect()->route('data-dosen.index')->with('deleted','Data Dosen terhapus!!');
    }
}