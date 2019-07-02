<?php

namespace App\Http\Controllers;

use App\Images;
use Illuminate\Http\Request;
use Image;
use App\Traits\FileUploadTrait;
use App\Http\Controllers\Controller;
class ImageController extends Controller
{

  use FileUploadTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = Images::all();

        return view('main.images.index', compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('main.images.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Images $image)
    {
      $this->validate($request, array(
        "image_name"=>'required|image|dimensions:min_width=800,min_height=600'



      ));
        if ($request->hasfile('image_name')) {
          $himg_name= $this->uploadImages($request->image_name);

          $image_resize = Image::make($request->image_name);
          $image_resize->crop(800,600,150,80);
          $image_resize->save('storage/images_name/'. $himg_name);
        }

        $image = Images::create(
          array_merge(
            $request->except('image_name','active', '_token'),
          ["image_name"=>$himg_name ?? null,
        "active"=>$request->active ?? false]
          )
        );

          return redirect('images');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Images  $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Images  $image
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
          $image = Images::where('id_image', $id)->first();
        return view('main.images.edit', compact('image'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Images  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Images $image)
    {

      $this->validate($request, array(
        "image_name"=>'dimensions:min_width=800,min_height=600'



      ));
        if ($request->hasfile('image_name')) {
          $himg_name= $this->uploadImages($request->image_name);

          $image_resize = Image::make($request->image_name);
          $image_resize->crop(800,600,150,80);
          $image_resize->save('storage/images_name/'. $himg_name);
        }


        $image->update(
          array_merge(
            $request->except('image_name','active', '_token', '_method'),
          ["image_name"=>$himg_name ?? $image->image_name ?? null,
        "active"=>$request->active ?? false]
          )
        );

          return redirect('images/' .$image->id_image. '/edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Images  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Images $images, $id)
    {
        $images->where('id_image', $id)->delete();

        return redirect()->back();
    }
}
