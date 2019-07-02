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
              <strong>Create</strong> Image
            </div>
            <div class="card-body card-block">
              <form class="form-horizontal" action="{{ url("images") }}"
                    method="POST" enctype="multipart/form-data">
                  {{ csrf_field() }}

                  <div class="form-group">
                      <label class="form-control-label" for="prependedInput">Image</label>
                      <div class="controls">
                          <input type="file" class="form-control" name="image_name">
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="form-control-label" for="prependedInput">Type</label>
                    <select name="id_type">
                      <option value="" selected disabled>Please choose a type</option>
                      @foreach(\App\Type::all() as $type)
                      <option value="{{ $type->id }}">{{ $type->name }}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                      <label class="form-control-label" for="prependedInput">Text</label>
                      <div class="controls">
                          <input type="text" class="form-control" name="image_text">
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="form-control-label" for="prependedInput">Active</label>

                      <input type="checkbox" name="active" value="1">


                  </div>
                  <div class="form-actions">
                      <button type="submit" class="btn btn-primary">Save</button>
                      <button type="reset" class="btn btn-danger">Cancel</button>
                  </div>
              </form>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
