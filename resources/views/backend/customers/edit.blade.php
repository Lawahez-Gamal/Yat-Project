@extends ("front.layout.master")

@section("content")
<div class="row">
              <div class="col-md-6 col-sm-12 offset-3 text-center">
                  
                  <p class="font-weight-bold">Tomato is a delisious restaurant website template</p>
              </div>
          </div>
        </div>
    </header>
<section class="container my-5">

<form method="post" action="{{route('customers.update',$customer->id)}}" enctype="multipart/form-data">
@csrf @method("put")
  <div class="form-group">
    <label for="exampleInputEmail1">customer name</label>
    <input type="text" name="name" class="form-control"  placeholder="Enter customer name" value="{{$customer->name}}">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">address</label>
    <input type="text" name="address" class="form-control"  placeholder="Enter address" value="{{$customer->address}}">

  </div>
  <div class="form-group">
  <label for="exampleInputPassword1">phone</label>
    <input type="text" name="number" class="form-control"  placeholder="Enter phone" value="{{$customer->number}}">
  </div>

  <div class="form-group">
  <label for="exampleInputPassword1">email</label>
    <input type="text" name="email" class="form-control"  placeholder="Enter email" value="{{$customer->email}}">
  </div>

  <button type="submit" class="btn btn-primary">Add</button>
</form>
</section>
@endsection