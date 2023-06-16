<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    private function validateForm($req){
        $req->validate([
            'nama'=> 'required',
            'password'=> 'required',
            
        ]);
    }
    private function findId($id){
        $find = User::find($id);   
        return $find;
    }

    public function index()
    {
        //
        return view('admin.pengguna.index', [
            'no' => 0,
            'data' => User::all(),
            'title' => 'Data User',
            'page' => 'Tabel'
        ]);
    }

    
    public function create()
    {
        //
        return view('admin.pengguna.create', [
            'title' => 'Tambah Data User',
            'page' => 'Form'
        ]);
    }

    
    public function store(Request $request)
    {
        //
        $this->validateForm($request);
        $input = $request->except(['_token']);
        // dd($input);
        $input['password'] = bcrypt($input['password']);
        $pengguna = User::create($input);
        return redirect()->route('data-pengguna.index')->with('success','Data User telah tersimpan!!');
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
        return view('admin.pengguna.edit', [
            'data' => $this->findId($id),
            'title' => 'Tambah Data User',
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
            $updateData = User::where('id', $id)->update($input);
            return redirect()->route('data-pengguna.index')->with('success','Data User telah diperbaharui!!');

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

                $updateData = User::where('id', $id)->update($input);
                return redirect()->route('data-pengguna.index')->with('success','Data User telah diperbaharui!!');


            }
        }
    }

    
    public function destroy($id)
    {
        //
        $getIdGambar = User::find($id)->idGambar;
        $getNamaGambar = Gambar::find($getIdGambar)->nama_file;
        // dd($getNamaGambar);

        File::delete(public_path('gambar/'.$getNamaGambar));
        $data = $this->findId($id)->delete();
        return redirect()->route('data-pengguna.index')->with('deleted','Data User terhapus!!');
    }
}