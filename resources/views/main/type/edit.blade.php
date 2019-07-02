@extends('main.layouts.app')
<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
<script type="text/javascript">
  tinymce.init({
    selector: 'textarea',
    plugins: 'link',
    menubar: false
  });
</script>
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
              <strong>Update</strong> Product
            </div>
            <div class="card-body card-block">
              <form class="form-horizontal" action="{{ url("type/$types->id_type") }}"
                    method="POST" enctype="multipart/form-data">
                  {{ csrf_field() }}
                  {{method_field('PUT')}}
                  <div class="form-group">
                      <label class="form-control-label" for="prependedInput">Name</label>
                      <div class="controls">
                          <input class="form-control" size="16" type="text" name="type_name" value="{{$types->type_name}}">
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="form-control-label" for="prependedInput">Category</label>
                      <select name="id_category">
                        <option value="" selected disabled>Please choose a category</option>
                        @foreach(\App\Category::all() as $category)
                        <option value="{{ $category->id_category }}"@if($category->id_category==$types->id_category) selected @endif>{{ $category->cat_name }}</option>
                        @endforeach
                      </select>
                  </div>
                  {{$types->image_name}}
                  <div class="form-group">
                      <label class="form-control-label" for="prependedInput">Image</label>
                      <div class="controls">
                          <input class="form-control" size="16" type="file" name="image_name">
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="form-control-label" for="prependedInput">Text</label>
                      <div class="controls">
                          <textarea class="form-control" size="16" type="text" name="type_text" value="">{{$types->type_text}}</textarea>
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="form-control-label" for="prependedInput">More Text</label>
                      <div class="controls">
                          <textarea class="form-control" size="16" type="text" name="type_text2" value="">{{$types->type_text2}}</textarea>
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="form-control-label" for="prependedInput">Active</label>

                        <input type="checkbox" name="active" value="1"@if($types->active==1) checked @else 0 @endif>

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
