@extends('main.layouts.app')

@section('content')
@if(Auth::check()&& Auth::user()->role=="admin" || Auth::check()&& Auth::user()->role=="manager")

<div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Staff</strong>
                            <a href="{{ url('staff/create') }}" style="float: right;">
                                + Add Member
                            </a>
                        </div>
                        <div class="card-body">
                          <table class="table table-bordered table-striped table-condensed">
                              <thead>
                                  <th>Name</th>
                                  <th>E-mail</th>
                                  <th>Address</th>
                                  <th>City</th>
                                  <th>Postal Code</th>
                                  <th>Country</th>
                                  <th>Phone</th>
                                  @if(Auth::check()&& Auth::user()->role=="admin")
                                  <th>Role</th>
                                  <th>Edit</th>
                                  <th>Delete</th>
                                  @endif
                              </tr>
                              </thead>
                              <tbody>
                              @foreach($staff as $key => $staf)
                                  <tr>

                                      <td>{{ $staf->name }}</td>
                                      <td>{{ $staf->email}}</td>
                                      <td>{{ $staf->address}}</td>

                                      <td>{{ $staf->city }}</td>
                                      <td>{{$staf->p_code}}</td>
                                      <td>{{ $staf->country }}</td>
                                      <td>{{ $staf->phone }}</td>
                                      @if(Auth::check()&& Auth::user()->role=="admin")
                                      <td>{{ $staf->role }}</td>

                                      <td>
                                          <a href="{{ url("staff/$staf->id/edit") }}">Edit</a>
                                      </td>
                                      @endif
                                      @if(Auth::check()&& Auth::user()->role=="admin")
                                      <td>
                                          <form action="{{ url("staff/$staf->id") }}" method="POST">
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

    @else
    <h1>Sorry you're not Authorized for this page</h1>
    @endif
@endsection
