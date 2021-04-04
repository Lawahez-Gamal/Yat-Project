@extends ("front.layout.master")

@section("content")
<div class="row">
              <div class="col-md-6 col-sm-12 offset-3 text-center">
                  <h1 class="text-uppercase font-weight-bolder my-title">Menus</h1>
                  <p class="font-weight-bold">Tomato is a delisious restaurant website template</p>
              </div>
          </div>
        </div>
    </header>

<section class="container my-5">

<form method="post" action="{{route('categories.store')}}" enctype="multipart/form-data">
@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">categories name</label>
    <input type="text" name="name" class="form-control"  placeholder="Enter categories name">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Description</label>
    <input type="text" name="description" class="form-control"  placeholder="Enter description">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Add image</label>
    <input type="file" name="img" class="form-control">
  </div>

  <button type="submit" class="btn btn-primary">Add </button>
</form>
</div>
@endsection