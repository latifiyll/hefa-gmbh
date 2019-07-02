<?php

namespace App\Http\Controllers;

use App\SliderImage;
use Image;
use Illuminate\Http\Request;
use App\Traits\FileUploadTrait;
class HeaderImageController extends Controller
{
  use FileUploadTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $headerImage= SliderImage::all();

      return view('main.headerimage.index', compact('headerImage'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('main.headerimage.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, SliderImage $headimg)
    {
      $this->validate($request, array(
        "head_text"=>'required',
        "small_text"=>'required',
        "header_img"=>'required|image|dimensions:min_width=1100,min_height=300'



      ));
        if ($request->hasfile('header_img')) {
          $himg_name= $this->uploadHeaderImage($request->header_img);

          $image_resize = Image::make($request->header_img);
          $image_resize->crop(800,600,150,80);
          $image_resize->save('storage/headerImages/'. $himg_name);
        }

        $headimg = SliderImage::create(
          array_merge(
            $request->except('header_img','active', '_token'),
            ["header_img"=>$himg_name ?? null,
          "active"=>$request->active ?? false]
            )
          );

          return redirect('headerimages');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SliderImage  $headerImage
     * @return \Illuminate\Http\Response
     */
    public function show(SliderImage $headerImage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SliderImage  $headerImage
     * @return \Illuminate\Http\Response
     */
    public function edit(SliderImage $headimg,$id)
    {
        $headimg= SliderImage::where('id_slider', $id)->first();
        return view('main.headerimage.edit', compact('headimg'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SliderImage  $headerImage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

      $this->validate($request, array(
        "head_text"=>'required',
        "small_text"=>'required',
        "header_img"=>'dimensions:min_width=800,min_height=600'



      ));
        if ($request->hasfile('header_img')) {
          $himg_name= $this->uploadHeaderImage($request->header_img);

          $image_resize = Image::make($request->header_img);
          $image_resize->crop(800,600,150,80);
          $image_resize->save('storage/headerImages/'. $himg_name);
        }
        $headimg = SliderImage::where('id_slider', $id)->first();
        $headimg->update(
          array_merge(
            $request->except('header_img','active', '_token', '_method'),
            ["header_img"=>$himg_name ?? $headimg->header_img ?? null,
          "active"=>$request->active ?? false ]
            )
          );

          return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SliderImage  $headerImage
     * @return \Illuminate\Http\Response
     */
    public function destroy(SliderImage $headerImage, $id)
    {
        $headerImage->where('id_slider', $id)->delete();

        return redirect()->back();
    }
}
