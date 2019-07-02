@extends('main.layouts.app')

@section('content')

<div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Slider Images</strong>
                            <a href="{{ url('headerimages/create') }}" style="float: right;">
                                + Add Image
                            </a>
                        </div>
                        <div class="card-body">
                          <table class="table table-bordered table-striped ">
                              <thead>
                              <tr>
                                  <th>Head text</th>
                                  <th>Small text</th>
                                  <th>Slider Image</th>
                                  <th>Active</th>
                                  <th>Edit</th>
                                  @if(Auth::check() && Auth::user()->role == "admin")
                                  <th>Delete</th>
                                  @endif
                              </tr>
                              </thead>
                              <tbody>
                              @foreach($headerImage as $key => $headimg)
                                  <tr>

                                      <td>{{ $headimg->head_text }}</td>
                                      <td>{{ $headimg->small_text}}</td>
                                      <td>
                                        <img src="{{ url("storage/headerImages/" . $headimg->header_img) }}" alt="" class="img-responsive" style="width: 75px;">
                                      </td>
                                      <td>{{$headimg->active}}</td>
                                      <td>
                                          <a href="{{ url("headerimages/$headimg->id_slider/edit") }}">Edit</a>
                                      </td>
                                      @if(Auth::check() && Auth::user()->role == "admin")
                                      <td>
                                          <form action="{{ url("headerimages/$headimg->id_slider") }}" method="POST">
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
