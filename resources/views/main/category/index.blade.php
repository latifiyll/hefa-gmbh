@extends('main.layouts.app')

@section('content')

<div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Categories</strong>
                            <a href="{{ url('category/create') }}" style="float: right;">
                                + Add Category
                            </a>
                        </div>
                        <div class="card-body">
                          <table class="table table-bordered table-striped table-condensed">
                              <thead>
                              <tr>
                                  <!-- <th>Image</th> -->
                                  <th>Name</th>
                                  <th>Short Name</th>
                                  <th>Details</th>
                                  <th>View</th>
                                  <th>Delete</th>
                              </tr>
                              </thead>
                              <tbody>
                                  @foreach($categories as $category)
                                      <tr>
                                          <td>{{ $category->cat_name }}</td>
                                          <td>{{$category->short_name}}</td>
                                          <td>{{substr($category->details,0,30)}}</td>
                                          <td><a href="{{url("category/$category->id_category")}}">View</a> </td>
                                          <td>
                                              <form action="{{ url("category/$category->id_category") }}" method="POST">
                                                  {{ method_field("DELETE") }}
                                                  {{ csrf_field() }}
                                                  <input type="submit" value="DELETE" class="btn btn-danger">
                                              </form>
                                          </td>
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
