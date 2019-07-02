<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pagedetail;
use Image;
use App\Traits\FileUploadTrait;
use File;
use Session;
use App\Http\Controllers\Controller;
class PageController extends Controller
{
  use FileUploadTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      $posts= Post::all();
        return view('main.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('main.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Post $post)
    {
        $this->validate($request, array(
          "name"=>'required',
          "image"=>'required|image|dimensions:min_width=800,min_height=600',
          "category_id"=>'required',
          "type_id"=>'required',
          "description"=>'required'

        ));
          if ($request->hasfile('image')) {
            $img_name= $this->uploadImage($request->image);

            $image_resize = Image::make($request->image);
            $image_resize->crop(800,600,150,80);
            $image_resize->save('storage/images/'. $img_name);
          }

          $post = Post::create(
            array_merge(
              $request->except('image', '_token'),
              ["image"=>$img_name ?? null]
              )
            );

            return redirect('posts');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $post = Post::where('id', $id)->first();
      return view('main.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {

        return view('main.posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
      $this->validate($request, array(
        "name"=>'required',
        "image"=>'dimensions:min_width=800,min_height=600',
        "category_id"=>'required',
        "type_id"=>'required',
        "description"=>'required'

      ));

        if ($request->hasfile('image')) {
          $img_name= $this->uploadImage($request->image);

          $image_resize = Image::make($request->image);
          $image_resize->crop(800,600,150,80);
          $image_resize->save('storage/images/'. $img_name);
        }

        $post->update(
          array_merge(
            $request->except('image', '_token', '_method'),
            ["image"=>$img_name ?? $post->image ?? null]
            )
          );

          return redirect('posts/'.$post->id. '/edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::where('id', $id)->delete();

        return redirect('/posts');
    }
}
