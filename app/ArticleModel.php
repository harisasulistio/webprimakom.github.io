<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleModel extends Model
{
    protected $table = 'articles';
	protected $primaryKey = 'id';
	public $timestamps = true;
    /*public $incrementing = false;*/

    protected $fillable = [
    	'id',
    	'category_id',
		'user_id',
		'title',
		'article',
		'slug',
		'featured_images',
	];

	public function category() {
		return $this->belongsTo('App\CategoryModel', 'category_id', 'id');
	}

	public function user() {
		return $this->belongsTo('App\User', 'user_id', 'id');
	}
}
