<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\ArticleModel;
use App\Models\Contact;

class IndexController extends Controller
{

    public function index()
    {
        $getArticle = ArticleModel::with('category', 'user')->latest()->paginate(9);
        return view('halaman_awal_edit', [
            'pageName' => 'Primakom',
            'getArticle' => $getArticle
        ]);
    }

    public function contactus()
    {
        $contacts = Contact::all();
        return view('contactus', compact('contacts'));
    }

    public function products_projects()
    {
        return view('products_projects', [
            'pageName' => 'Contact Us',
        ]);
    }

    public function privacy_policy()
    {
        return view('privacy_policy', ['pageName' => 'Privacy Policy']);
    }
}
