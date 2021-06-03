<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model
{
    protected $table = 'categories';
	protected $primaryKey = 'id';
	public $timestamps = false;
    /*public $incrementing = false;*/

    protected $fillable = [
    	'id',
    	'category'
	];

	public function article() {
		return $this->hasMany('App\ArticleModel', 'category_id', 'id');
	}
}
