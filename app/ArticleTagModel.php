<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleTagModel extends Model
{
    protected $table = 'article_tags';
	protected $primaryKey = 'id';
	public $timestamps = true;
    /*public $incrementing = false;*/

    protected $fillable = [
    	'id',
		'article_id',
		'tag_id'
	];
}
