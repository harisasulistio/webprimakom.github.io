<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Validator;

use App\ArticleModel;
use App\CategoryModel;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$getArticle = ArticleModel::latest()->paginate(15);
        return view('admin.article', [
			'pageName' => 'Primakom',
			'getArticle' => $getArticle
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.article_add', [
            'pageName' => 'Primakom',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = validator::make($request->all(), [
            'title' => "required",
            'featured' => 'image|mimes:png,PNG,jpg,JPG,jpeg,JPEG',
		]);
		if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {
			$namepic = '';
			$filepic = $request->file('featured');
			$namepic = $filepic->getClientOriginalName();
			$movepic = $filepic->move(storage_path('app/public/featured_images'), $namepic);

			CategoryModel::firstOrCreate(['category' => $request['category']]);
			$getIdCat = CategoryModel::where('category', $request['category'])->get();

			$submitArticle = new ArticleModel;
			$submitArticle -> create([
				'user_id' => '924e5109-b8df-45a7-be78-c5d592030ff8',
				'category_id' => $getIdCat[0]->id,
				'title' => $request['title'],
				'article' => $request['article'],
				'slug' => Str::slug($request['title']),
				'featured_images' => $namepic
			]);
		}
		return redirect('/admin/articles');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus = ArticleModel::where('id', $id)->delete();
		return redirect()->back();
    }
}
