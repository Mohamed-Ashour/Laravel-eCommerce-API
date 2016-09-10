<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\Http\Requests;

class ApiController extends Controller
{

    public function __construct()
    {

        $this->middleware('jwt.auth');

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listProducts()
    {
        return response()->json(
            Product::orderBy('created_at', 'desc')->get()
        );
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listCategories()
    {
        return response()->json(
            Category::orderBy('created_at', 'desc')->get()
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function listCategoryProducts($id)
    {
        if (Category::find($id)) {
            return response()->json(
                Category::find($id)->products()->get()
            );
        } else {
            return response()->json(
                ['error' => 'category not found']
            );
        }
    }

}
