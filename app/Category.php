<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class CategoryController
 *
 * @author  The scaffold-interface created at 2016-09-08 07:03:25pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Category extends Model
{


    protected $table = 'categories';

    public function products()
    {
        return $this->hasMany('App\Product');
    }

}
