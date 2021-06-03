<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Auth;

class AuthController extends Controller
{

    public function index()
    {
        return view('auth/login');
    }

    public function postLogin(Request $request)
    {
        if(auth()->attempt(array('username' => $request->input('username'), 'password' => $request->input('password'), 'role' => 1))){
            $dtUser = auth()->user();
            $request->session()->put('id_pengguna',$dtUser->id_user);
            $request->session()->put('username',$dtUser->username);
            $request->session()->put('nama_pengguna',$dtUser->nama_user);
            $request->session()->put('userlevel','A');
            return redirect('/admin/articles');
        } else {
            return redirect()->route('admin')->with('error','Username Dan Password yang anda masukkan salah');
        }
    }

    public function logout(){
        Session::flush();
        return redirect('admin')->with('msg','Berhasil Logout');
    }


}
