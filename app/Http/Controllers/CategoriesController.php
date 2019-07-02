<?php

namespace App\Http\Controllers;
use App\Category;
use Illuminate\Http\Request;
use App\Traits\FileUploadTrait;
use Image;

class CategoriesController extends Controller
{
  use FileUploadTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index(Request $request)
     {
         $categories = Category::all();

         return view('main.category.index', compact('categories'));
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('main.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Category $category)
    {
      $this->validate($request, array(
        "image"=>'required|image|dimensions:min_width=800,min_height=600'



      ));
        if ($request->hasfile('image')) {
          $himg_name= $this->uploadCategoryImg($request->image);

          $image_resize = Image::make($request->image);
          $image_resize->crop(800,600,150,80);
          $image_resize->save('storage/categories/'. $himg_name);
        }

        $category = Category::create(
          array_merge(
            $request->except('image','active', '_token'),
          ["image"=>$himg_name ?? null,
        "active"=>$request->active ?? false]
          )
        );

        return redirect('/category');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $category = Category::where('id_category', $id)->first();
        return view('main.category.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categories = Category::where('id_category', $id)->delete();

        return redirect()->back();
    }
}
