<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{
    Profil,
    Tentang,
    Dosen,
    Mahasiswa,
    Kegiatan
};

class LandingPageController extends Controller
{
    //
    public function home(){

        
        // dd(Dosen::paginate(3));

        return view('landingPage.home',[
            'tentang' => Tentang::first(),
            'profil' => Profil::first(),
            'dosen' =>  Dosen::leftJoin('gambars', 'gambars.id', 'dosens.idGambar')
                      ->where('gambars.tipe', 'dosen')
                      ->select('dosens.*', 'gambars.nama_file as gambar')
                      ->paginate(3)
        ]);
    }
    public function profil(){
        return view('landingPage.profil', [
            'tentang' => Tentang::first(),
            'profil' => Profil::first(),
        ]);
    }
    public function mahasiswa(){
        return view('landingPage.mahasiswa', [
            'mahasiswa' => Mahasiswa::leftJoin('gambars', 'gambars.id', 'mahasiswas.idGambar')
                      ->where('gambars.tipe', 'mahasiswa')
                      ->select('mahasiswas.*', 'gambars.nama_file as gambar')
                      ->get(),
            'profil' => Profil::first(),
            
            
        ]);
    }
    public function dosen(){
        return view('landingPage.dosen', [
            'dosen' => Dosen::leftJoin('gambars', 'gambars.id', 'dosens.idGambar')
                      ->where('gambars.tipe', 'dosen')
                      ->select('dosens.*', 'gambars.nama_file as gambar')
                      ->get(),
            'profil' => Profil::first(),
            
            
        ]);
    }
    public function kegiatan(){
        return view('landingPage.kegiatan.index', [
            'kegiatan' => Kegiatan::leftJoin('gambars', 'gambars.id', 'kegiatans.idGambar')
                      ->where('gambars.tipe', 'kegiatan')
                      ->select('kegiatans.*', 'gambars.nama_file as gambar')
                      ->get(),
            'profil' => Profil::first(),
            
            
        ]);
    }
    public function detail_kegiatan($id){

        return view('landingPage.kegiatan.detail', [
            'kegiatan' => Kegiatan::leftJoin('gambars', 'gambars.id', 'kegiatans.idGambar')
                    //   ->where('kegiatans.id', $id)
                      ->where('gambars.tipe', 'kegiatan')
                      ->select('kegiatans.*', 'gambars.nama_file as gambar')
                      ->find($id),
            'profil' => Profil::first(),
            
            
        ]);
    }
}