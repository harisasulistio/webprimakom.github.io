<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{

    public function greeting(){
    	return view('about.greeting', [
            'pageName' => 'Greeting',
        ]);
    }

    public function profile(){
    	return view('about.profile', [
            'pageName' => 'Company Profile',
        ]);
    }

    public function clients_partners(){
    	return view('about.clients_partners', [
            'pageName' => 'Clients & Partners',
        ]);
    }

    public function lihat_team(Request $request){
        $idx = $request->input('id_team');
        if($idx==1){
            return view('about.product_team');
        }else if($idx==2){
            return view('about.project_team');
        }else if($idx==3){
            return view('about.product_dev_supports_team');
        }else if($idx==4){
            return view('about.supports_team');
        }
    }
}
