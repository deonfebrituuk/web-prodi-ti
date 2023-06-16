<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Session;
use Hash;
class LoginController extends Controller
{
    //
    public function index(){

        return view('admin.login', [
            'page-title' => 'Login Page'
        ]);
    }
    public function post(){

        return view('admin.login', [
            'page-title' => 'Login Page'
        ]);
    }
    public function postLogin(Request $request){
        // dd($request);
        $request->validate([
            'name' => 'required',
            'password' => 'required',
            // 'tipe' => 'required'
        ]);
        
       
        $credentials = $request->only('name', 'password');
        
        if(Auth::attempt($credentials)){
            // dd($credentials);
            return redirect()->route('dashboard.index')->withSuccess('Signed In');
        }


        // if($request->tipe == 'pelaksana'){
        //     $credentials = $request->only('email', 'password');
        //     // dd($credentials);
        //     $checkData = DB::table('pelaksanas')
        //                 ->where('email', $credentials['email'])
        //                 ->where('password', $credentials['password'])
        //                 ->first('email');
        //     if(!empty($checkData)){
        //         $saveSession = session([
        //                             'emailPlt' => $checkData->email,
        //                         ]);
        //         // dd(session('emailPlt'));
        //         return redirect('/riwayat_laporan_pelaksana')->withSuccess('Signed In');
        //     }
        //     // dd($checkData);
        // }
        
        return redirect('page-login')->withErrors('Login details are not valid');

    }

    public function logout()
    {
        Auth::logout();
 
        request()->session()->invalidate();
 
        request()->session()->regenerateToken();
 
        return redirect('/');
    }

     
}