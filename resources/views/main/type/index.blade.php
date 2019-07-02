@extends('main.layouts.app')

@section('content')


<div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Types</strong>
                            <a href="{{ url('type/create') }}" style="float: right;">
                                + Add Type
                            </a>
                        </div>
                        <div class="card-body">
                          <table id="bootstrap-data-table" class="table table-striped table-bordered table-condensed">
                              <thead>
                              <tr>
                                  <!-- <th>Image</th> -->
                                  <th hidden>ID</th>
                                  <th>Name</th>
                                  <th>Category</th>
                                  <th>Image</th>
                                  <th>Type Text</th>
                                  <th>More Text</th>
                                  <th>Clicks</th>
                                  <th>Active</th>
                                  <th>View</th>
                                  <th>Edit</th>
                                  <th>Delete</th>
                              </tr>
                              </thead>
                              <tbody>
                                  @foreach($types as $type)
                                      <tr>
                                        <td hidden></td>
                                          <td>{{ $type->type_name }}</td>
                                          <td>{{ $type->id_category }}</td>
                                          <td>
                                          <img src="{{url("storage/images_name/".$type->image_name)}}" alt=""> </td>
                                          <td>{{ substr($type->type_text,0,30) }}</td>
                                          <td>{{ substr($type->type_text2,0,30) }}</td>
                                          <td>{{ $type->clicks }}</td>
                                          <td>{{ $type->active }}</td>
                                          <td> <a href="{{url("type/$type->id_type")}}">View</a> </td>
                                          <td> <a href="{{url("type/$type->id_type/edit")}}">Edit</a> </td>

                                          <td>
                                              <form action="{{ url("type/$type->id_type") }}" method="POST">
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
