<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use File;
use DB;
use Validator;

class HomeController extends Controller
{
    public function index()
    {
        $dataLogoJudul = DB::connection('mysql_pusbang_udara')->table('tr_lambang_logo')->where('soft_delete', 0)->first();

        return view('admin.logo_judul.index', compact('dataLogoJudul'));
    }

    public function editLogoJudul($idLogoJudul)
    {
        $dataEditLogoJudul = DB::connection('mysql_pusbang_udara')->table('tr_lambang_logo')->where('id_lambang', $idLogoJudul)->first();

        return view('admin.logo_judul.e_logo_judul', compact('dataEditLogoJudul'));
    }

    public function simpanEditLogoJudul(Request $request)
    {
        $validator = validator::make($request->all(), [
            "deskripsi" => "required",
            'file_logo' => 'image|mimes:png,PNG,jpg,JPG,jpeg,JPEG',
            'file_lambang' => 'image|mimes:png,PNG,jpg,JPG,jpeg,JPEG',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {
            $idLogoJudul = $request->input('id_lambang');
            $deskripsi  = $request->input('deskripsi');

            if($request->file('file_logo') != NULL) {
                $gambarLogo  = $request->file('file_logo');
                $imgLogoPath = public_path().'/logo';
                $imgLogoName = $idLogoJudul."-".date('Y-m-d_H:i:s').".png";
                $uploadLogo  = $gambarLogo->move($imgLogoPath, $imgLogoName);
                $data_update['file_logo'] = $imgLogoName;
            }

            if($request->file('file_lambang') != NULL) {
                $gambarLambang  = $request->file('file_lambang');
                $imgLambangPath = public_path().'/lambang';
                $imgLambangName = $idLogoJudul."-".date('Y-m-d_H:i:s').".png";
                $uploadLambang  = $gambarLambang->move($imgLambangPath, $imgLambangName);
                $data_update['file_lambang'] = $imgLambangName;
            }

            $data_update['deskripsi'] = $deskripsi;
            $data_update['tgl_update'] = date('Y-m-d H:i:s');
            $data_update['editor'] = Session::get('nama_pengguna');

            $editLogoJudul = DB::connection('mysql_pusbang_udara')->table('tr_lambang_logo')->where('id_lambang', $idLogoJudul)->update($data_update);

	    	return redirect()->route('home')->with('msg','Berhasil Edit Logo & Judul');
        }
    }
}
