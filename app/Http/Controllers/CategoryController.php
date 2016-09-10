<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use Amranidev\Ajaxis\Ajaxis;
use URL;
use Auth;

/**
 * Class CategoryController
 *
 * @author  The scaffold-interface created at 2016-09-08 07:03:25pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class CategoryController extends Controller
{

    public function __construct()
    {

        $this->middleware('role:admin');

    }


    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {

        $categories = Category::all();
        return view('category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {

        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required|unique:categories',
        ]);

        $category = new Category();

        $category->name = $request->name;

        $category->save();

        return redirect('category');
    }

    /**
     * Display the specified resource.
     *
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function show($id,Request $request)
    {
        if($request->ajax())
        {
            return URL::to('category/'.$id);
        }

        $category = Category::findOrfail($id);
        return view('category.show',compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        if($request->ajax())
        {
            return URL::to('category/'. $id . '/edit');
        }


        $category = Category::findOrfail($id);
        return view('category.edit',compact('category'  ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
        ]);

        $category = Category::findOrfail($id);

        $category->name = $request->name;

        $category->save();

        return redirect('category');
    }

    /**
     * Delete confirmation message by Ajaxis.
     *
     * @link      https://github.com/amranidev/ajaxis
     * @param    \Illuminate\Http\Request  $request
     * @return  String
     */
    public function DeleteMsg($id,Request $request)
    {
        $msg = Ajaxis::MtDeleting('Warning!!','Would you like to remove This?','/category/'. $id . '/delete/');

        if($request->ajax())
        {
            return $msg;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param    int $id
     * @return  \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     	$category = Category::findOrfail($id);
     	$category->delete();
        return URL::to('category');
    }
}
