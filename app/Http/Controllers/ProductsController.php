<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function security()
	{
		return view('products.security_solution', [
			'pageName' => 'Product'
        ]);
	}

	public function it()
	{
		return view('products.it_infrastructure', [
			'pageName' => 'Product'
        ]);
	}

	public function village()
	{
		return view('products.smart_village', [
			'pageName' => 'Product'
        ]);
	}

	public function school()
	{
		return view('products.prima_school', [
			'pageName' => 'Product'
        ]);
	}

	public function meet()
	{
		return view('products.prima_meet', [
			'pageName' => 'Product'
        ]);
	}

	public function dev()
	{
		return view('products.prima_development', [
			'pageName' => 'Product'
        ]);
	}

	public function campus()
	{
		return view('products.smart_campus', [
			'pageName' => 'Product'
        ]);
	}
}
