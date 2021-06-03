<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ArticleModel;
use App\CategoryModel;

class NewsController extends Controller
{
	public function getArticle()
	{
		$getArticle = ArticleModel::with('category', 'user')->inRandomOrder()->paginate(5);

		return $getArticle;
	}

	public function getlatest()
	{
		$getlatest = ArticleModel::with('category', 'user')->latest()->paginate(4);

		return $getlatest;
	}

	public function getCategory()
	{
		$getCategory = CategoryModel::all();

		return $getCategory;
	}

    public function index(){
		$getlatest = $this->getlatest();
		$getArticle = $this->getArticle();
		$getCategory = $this->getCategory();

    	return view('news', [
			'pageName' => 'News',
			'getlatest' => $getlatest,
			'getArticle' => $getArticle,
			'getCategory' => $getCategory
        ]);
	}

	public function show($slug)
	{
		$getArticle = ArticleModel::where('slug', $slug)->get();
		$getlatest = $this->getlatest();
		$getCategory = $this->getCategory();

		return view('single-news', ['getArticle' => $getArticle,
									'getlatest' => $getlatest,
									'getCategory' => $getCategory
									]);
	}

}
