<div class="row">


<div class="col-md-6">
          <form action="{{url('contact')}}" method="post">
           {{csrf_field()}}
            <div class="form-group">
              <label for="fullname">Full Name</label>
              <input type="text" class="form-control" name="fullname" required>
            </div>
            <div class="form-group">
              <label for="name">Email</label>
              <input type="text" class="form-control" name="email" required>
            </div>
            <div class="form-group">
              <label for="name">Address</label>
              <input type="text" class="form-control" name="address" required>
            </div>

            <div class="form-group">
              <select name="category_id">
                <option value="" selected disabled>Please choose a category</option>
                @foreach(\App\Category::all() as $category)
                <option value="{{ $category->name }}">{{ $category->name }}</option>
                @endforeach
              </select>

              <select name="type_id">
                <option value="" selected disabled>Please choose a type</option>
                @foreach(\App\Type::all() as $type)
                <option value="{{ $type->name }}">{{ $type->name }}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="details">Details</label>
              <textarea name="details"  cols="30" rows="10" class="form-control" required></textarea>
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn btn-special" value="Send Message">
            </div>
          </form>
        </div>
        </div>
