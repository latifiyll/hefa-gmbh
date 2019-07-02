<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Type;
use App\Traits\FileUploadTrait;
use Image;
class TypesController extends Controller
{
  use FileUploadTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $types = Type::orderBy('id_type', 'ASC')->get();

        return view('main.type.index', compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('main.type.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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

        $types = Type::create(
          array_merge(
            $request->except('image_name','active', '_token'),
          ["image_name"=>$himg_name ?? null,
        "active"=>$request->active ?? false]
          )
        );

          return redirect('type');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $type = Type::where('id_type', $id)->first();

        return view('main.type.show', compact('type'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $types = Type::where('id_type', $id)->first();

        return view('main.type.edit', compact('types'));
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
      $this->validate($request, array(
        "image_name"=>'dimensions:min_width=800,min_height=600'



      ));
        if ($request->hasfile('image_name')) {
          $himg_name= $this->uploadImages($request->image_name);

          $image_resize = Image::make($request->image_name);
          $image_resize->crop(800,600,150,80);
          $image_resize->save('storage/images_name/'. $himg_name);
        }

        $types = Type::where('id_type', $id)->first();
        $types->update(
          array_merge(
            $request->except('image_name','active', '_token', '_method'),
          ["image_name"=>$himg_name ?? $types->image_name ?? null,
        "active"=>$request->active ?? false]
          )
        );

            return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $types = Type::where('id_type', $id)->delete();

        return redirect()->back();
    }
}
