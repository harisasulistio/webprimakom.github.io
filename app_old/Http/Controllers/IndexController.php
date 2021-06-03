<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class IndexController extends Controller
{

    public function index(){
    	return view('halaman_awal_edit', [
            'pageName' => 'Primakom',
        ]);
    }

    public function contactus(){
    	return view('contactus', [
            'pageName' => 'Contact Us',
        ]);
    }

    public function products_projects(){
    	return view('products_projects', [
            'pageName' => 'Contact Us',
        ]);
	}

	public function privacy_policy(){
		return view('privacy_policy', ['pageName' => 'Privacy Policy']);
	}
}
