@extends('main.layouts.app')

@section('content')
<div class="content mt-3">
      <div class="animated fadeIn">
              <div class="row">
      @foreach ($errors->all() as $error)
    <div class="alert alert-danger">{{ $error }}</div>
        @endforeach
        <div class="col-lg-10">
          <div class="card">
            <div class="card-header">
              <strong>Update</strong> Member
            </div>
            <div class="card-body card-block">
              <form method="POST" action="{{ url("staff/$staf->id") }}" aria-label="{{ __('Register') }}">
                  @csrf
                  {{method_field('PUT')}}

                  <div class="form-group row">
                      <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                      <div class="col-md-6">
                          <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $staf->name }}" required autofocus>

                          @if ($errors->has('name'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('name') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                      <div class="col-md-6">
                          <input id="address" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ $staf->address }}" required autofocus>

                          @if ($errors->has('address'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('address') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>


                  <div class="form-group row">
                      <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                      <div class="col-md-6">
                          <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $staf->email }}" required>

                          @if ($errors->has('email'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('email') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>

                      <div class="col-md-6">
                          <input id="city" type="text" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" value="{{ $staf->city }}" required autofocus>

                          @if ($errors->has('city'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('city') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="p_code" class="col-md-4 col-form-label text-md-right">{{ __('Postal Code') }}</label>

                      <div class="col-md-6">
                          <input id="p_code" type="text" class="form-control{{ $errors->has('p_code') ? ' is-invalid' : '' }}" name="p_code" value="{{ $staf->p_code }}" required autofocus>

                          @if ($errors->has('p_code'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('p_code') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="country" class="col-md-4 col-form-label text-md-right">{{ __('Country') }}</label>

                      <div class="col-md-6">
                          <input id="country" type="text" class="form-control{{ $errors->has('country') ? ' is-invalid' : '' }}" name="country" value="{{ $staf->country }}" required autofocus>

                          @if ($errors->has('country'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('country') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>

                      <div class="col-md-6">
                          <input id="phone" type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ $staf->phone }}" required autofocus>

                          @if ($errors->has('phone'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('phone') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="role" class="col-md-4 col-form-label text-md-right">{{ __('Role') }}</label>

                      <div class="col-md-6">
                  <div class="form-control{{ $errors->has('role') ? ' is-invalid' : '' }}" >


                    <input type="radio" name="role" value="1"@if($staf->role=="admin") checked @endif >admin</input>
                    <input type="radio" name="role" value="2"@if($staf->role=="manager") checked @endif>manager</input>
                    <input type="radio" name="role" value="3"@if($staf->role=="controller") checked @endif>controller</input>

                  </div>
                  @if ($errors->has('role'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('role') }}</strong>
                      </span>
                  @endif
                </div>
              </div>


                  <div class="form-group row mb-0">
                      <div class="col-md-6 offset-md-4">
                          <button type="submit" class="btn btn-primary">
                              {{ __('Update') }}
                          </button>
                      </div>
                  </div>
              </form>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
