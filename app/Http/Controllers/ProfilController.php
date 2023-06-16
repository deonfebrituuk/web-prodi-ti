<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use Illuminate\Http\Request;
use App\Models\Gambar;
use File;
use Illuminate\Support\Arr;

class ProfilController extends Controller
{
    
    private function validateForm($req){
        $req->validate([
            'visi'=> 'required',
            'misi'=> 'required',
            'ig'=> 'required',
            'fb'=> 'required',
            'linkedin'=> 'required',
            // 'gambar' => 'required|mimes:jpeg,png,jpg,gif',
        ]);
    }
    private function findId($id){
        $find = Profil::find($id);   
        return $find;
    }

    public function index()
    {
        //
        return view('admin.profil.index', [
            'no' => 0,
            'data' => Profil::leftJoin('gambars', 'gambars.id', 'profils.idGambar')
                      ->where('gambars.tipe', 'logo')
                      ->select('profils.*', 'gambars.nama_file as gambar')
                      ->get(),
            'title' => 'Data Profil',
            'page' => 'Tabel'
        ]);
    }

    
    public function create()
    {
        //
        return view('admin.profil.create', [
            'title' => 'Tambah Data Profil',
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

            
        }
        $gambar = Gambar::create([
                'nama_file' => $input['gambar'],
                'tipe' => 'logo'
            ]);


        $input['idGambar'] = $gambar->id;
        $profil = Profil::create($input);
        return redirect()->route('data-profil.index')->with('success','Data Profil telah tersimpan!!');
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
        return view('admin.profil.edit', [
            'data' => $this->findId($id),
            'title' => 'Tambah Data Profil',
            'page' => 'Form'
        ]);
    }

    public function update(Request $request, $id)
    {
        $oldData = $this->findId($id);
        // $this->validateForm($request);
        $input = $request->except(['_token', '_method']);
        // $updateData = Profil::where('id', $id)->update($input);
        // return redirect()->route('data-profil.index')->with('success','Data Profil telah diperbaharui!!');
        
        
        if($request->gambar == null){
            // dd($request);
            $this->validate($request, [
                'visi'=> 'required',
                'misi'=> 'required',
                'ig'=> 'required',
                'fb'=> 'required',
                'linkedin'=> 'required',
            ]);
            // dd($input);
            $updateData = Profil::where('id', $id)->update($input);
            return redirect()->route('data-profil.index')->with('success','Data Profil telah diperbaharui!!');

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
                    'tipe' => 'logo'
                ]);

                $input = Arr::except($input, ['gambar']);
                
                $input['idGambar'] = $gambar->id;
                // hapusgambar
                $getNamaGambar = Gambar::find($oldData->idGambar);
                // dd($getNamaGambar);
                File::delete(public_path('gambar/'.$getNamaGambar->nama_file));
                
                $getNamaGambar->delete();

                $updateData = Profil::where('id', $id)->update($input);
                return redirect()->route('data-profil.index')->with('success','Data Profil telah diperbaharui!!');


            }
        }
    }

    
    public function destroy($id)
    {
        //
        // $getIdGambar = Profil::find($id)->idGambar;
        // $getNamaGambar = Gambar::find($getIdGambar)->nama_file;
        // dd($getNamaGambar);

        // File::delete(public_path('gambar/'.$getNamaGambar));
        $data = $this->findId($id)->delete();
        return redirect()->route('data-profil.index')->with('deleted','Data Profil terhapus!!');
    }
}