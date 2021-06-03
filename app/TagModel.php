<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TagModel extends Model
{
    protected $table = 'tags';
	protected $primaryKey = 'id';
	public $timestamps = true;
    /*public $incrementing = false;*/

    protected $fillable = [
		'id',
		'tag'
	];
}
