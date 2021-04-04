@extends ("front.layout.master")

@section("content")
<div class="row">
              <div class="col-md-6 col-sm-12 offset-3 text-center">
                  <h1 class="text-uppercase font-weight-bolder my-title">Recipie details</h1>
                  <p class="font-weight-bold">Tomato is a delisious restaurant website template</p>
              </div>
          </div>
        </div>
    </header>
<section class="container my-5">

<form method="post" action="{{route('reciepes.update',$menu->id)}}" enctype="multipart/form-data">
@csrf @method("put")
  <div class="form-group">
    <label for="exampleInputEmail1">reciepe name</label>
    <input type="text" name="name" class="form-control"  placeholder="Enter reciepe name" value="{{$menu->name}}">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">ingredient</label>
    <input type="text" name="ingredient" class="form-control"  placeholder="Enter ingredient" value="{{$menu->ingredient}}">

  </div>
  <div class="form-group">
  <label for="exampleInputPassword1">instructions</label>
    <input type="text" name="instructions" class="form-control"  placeholder="Enter instructions" value="{{$menu->instructions}}">
  </div>

  <button type="submit" class="btn btn-primary">Add</button>
</form>
</section>
@endsection