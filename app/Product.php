<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ProductController
 *
 * @author  The scaffold-interface created at 2016-09-08 07:06:51pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Product extends Model
{

    protected $table = 'products';

    protected $hidden = ['category_id'];

	public function category()
	{
		return $this->belongsTo('App\Category','category_id');
	}


}
