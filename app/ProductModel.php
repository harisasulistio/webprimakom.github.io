<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    protected $table = 'articles';
	protected $primaryKey = 'id';
	public $timestamps = true;
    /*public $incrementing = false;*/

    protected $fillable = [
    	'id',
		'product',
		'details'
	];
}
