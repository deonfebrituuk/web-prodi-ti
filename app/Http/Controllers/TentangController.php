<?php

namespace App\Http\Controllers;

use App\Models\Gambar;
use App\Models\Tentang;
use Illuminate\Http\Request;
use File;
use Illuminate\Support\Arr;
class TentangController extends Controller
{
    
    
    private function validateForm($req){
        $req->validate([
            'deskripsi'=> 'required',
        ]);
    }
    private function findId($id){
        $find = Tentang::find($id);   
        return $find;
    }

    public function index()
    {
        //
        return view('admin.tentang.index', [
            'no' => 0,
            'data' => Tentang::all(),
            'title' => 'Data Tentang',
            'page' => 'Tabel'
        ]);
    }

    
    public function create()
    {
        //
        return view('admin.tentang.create', [
            'title' => 'Tambah Data Tentang',
            'page' => 'Form'
        ]);
    }

    
    public function store(Request $request)
    {
        //
        $this->validateForm($request);
        $input = $request->except(['_token']);
        // dd($input);  
        
        $tentang = Tentang::create($input);
        return redirect()->route('data-tentang.index')->with('success','Data Tentang telah tersimpan!!');
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
        return view('admin.tentang.edit', [
            'data' => $this->findId($id),
            'title' => 'Tambah Data Tentang',
            'page' => 'Form'
        ]);
    }

    public function update(Request $request, $id)
    {
        $oldData = $this->findId($id);
        $this->validateForm($request);
        $input = $request->except(['_token', '_method']);
       
        
        $updateData = $oldData->update($input);
        return redirect()->route('data-tentang.index')->with('success','Data Tentang telah diperbaharui!!');


    }
    

    
    public function destroy($id)
    {
        
        $data = $this->findId($id)->delete();
        return redirect()->route('data-tentang.index')->with('deleted','Data Tentang terhapus!!');
    }
}