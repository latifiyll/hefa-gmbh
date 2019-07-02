@extends('main.layouts.app')

@section('content')
<div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Images</strong>
                            <a href="{{ url('images/create') }}" style="float: right;">
                                + Add Image
                            </a>
                        </div>
                        <div class="card-body">
                          <table id="bootstrap-data-table" class="table table-striped table-bordered">
                              <thead>
                              <tr>
                                <th hidden></th>
                                  <th>Image</th>
                                  <th>Type</th>
                                  <th>Text</th>
                                  <th>Active</th>
                                  <th>Edit</th>
                                  @if(Auth::check() && Auth::user()->role == "admin")
                                  <th>Delete</th>
                                  @endif
                              </tr>
                              </thead>
                              <tbody>
                              @foreach($images as $key => $image)
                                  <tr>
                                      <td hidden></td>
                                      <td>
                                        <img src="{{ url("storage/images_name/" . $image->image_name) }}" alt="" class="img-responsive" style="width: 75px;">
                                      </td>
                                      <td>{{$image->type->name}}</td>
                                      <td>{{$image->image_text}}</td>
                                      <td>{{$image->active}}</td>
                                      <td> <a href="{{url("images/$image->id_image/edit")}}">Edit</a> </td>

                                      @if(Auth::check() && Auth::user()->role == "admin")
                                      <td>
                                          <form action="{{ url("images/$image->id") }}" method="POST">
                                              {{ csrf_field() }}
                                              {{ method_field('DELETE') }}
                                              <input type="submit" value="DELETE" class="btn btn-danger">
                                          </form>
                                      </td>
                                      @endif
                                  </tr>
                              @endforeach
                              </tbody>
                          </table>
                        </div>
                    </div>
                </div>


                </div>
            </div><!-- .animated -->
        </div>

@endsection
