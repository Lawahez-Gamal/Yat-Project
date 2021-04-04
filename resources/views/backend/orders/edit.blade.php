@extends ("front.layout.master")

@section("content")
<div class="row">
              <div class="col-md-6 col-sm-12 offset-3 text-center">
                  <h1 class="text-uppercase font-weight-bolder my-title">Reservations</h1>
                  <p class="font-weight-bold">Tomato is a delisious restaurant website template</p>
              </div>
          </div>
        </div>
    </header>
<section class="container my-5">

<form method="post" action="{{route('orders.update',$order->id)}}" enctype="multipart/form-data">
@csrf @method("put")
  <div class="form-group">
    <label for="exampleInputEmail1">order time</label>
    <input type="text" name="time" class="form-control"  value="{{$order->time}}">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Status</label>
    <input type="text" name="status" class="form-control" value="{{$order->status}}">

  </div>

  <button type="submit" class="btn btn-primary">Add</button>
</form>
</section>
@endsection