@extends('main.layouts.app')

@section('content')
<div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Online Offers</strong>
                        </div>
                        <div class="card-body">
                          <table class="table table-bordered table-striped table-condensed">
                              <thead>
                              <tr>

                                  <th>Full Name</th>
                                  <th>Type</th>
                                  <th>Time</th>
                                  <th>View</th>
                                  @if(Auth::check() && Auth::user()->role == "admin")
                                  <th>Delete</th>
                                  @endif
                              </tr>
                              </thead>
                              <tbody>
                              @foreach($onlineoffers as $key => $onoffers)
                                  <tr>

                                      <td>{{ $onoffers->client_fullname }}</td>
                                      <td>{{ $onoffers->type->type_name}}</td>
                                      <td>{{ $onoffers->created_at->format('F d, Y | H:i') }}</td>
                                      <td>
                                          <a href="{{ url("onlineoffers/$onoffers->id_offer") }}">View</a>
                                      </td>
                                      @if(Auth::check() && Auth::user()->role == "admin")
                                      <td>
                                          <form action="{{ url("onlineoffers/$onoffers->id") }}" method="POST">
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
