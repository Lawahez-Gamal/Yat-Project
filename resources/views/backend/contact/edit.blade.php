@extends ("front.layout.master")

@section("content")
<div class="row">
              <div class="col-md-6 col-sm-12 offset-3 text-center">
                  <h1 class="text-uppercase font-weight-bolder my-title">Recipies</h1>
                  <p class="font-weight-bold">Tomato is a delisious restaurant website template</p>
              </div>
          </div>
        </div>
    </header>
<section class="container my-5">

<form method="post" action="{{route('meals.update',$menu->id)}}" enctype="multipart/form-data">
@csrf @method("put")
  <div class="form-group">
    <label for="exampleInputEmail1">Meal name</label>
    <input type="text" name="name" class="form-control"  placeholder="Enter meal name" value="{{$menu->name}}">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Description</label>
    <input type="text" name="description" class="form-control"  placeholder="Enter description" value="{{$menu->description}}">

  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Update image</label>
    <input type="file" name="img" class="form-control"  value="{{$menu->image}}">
  </div>

  <button type="submit" class="btn btn-primary">Add</button>
</form>
</section>
@endsection