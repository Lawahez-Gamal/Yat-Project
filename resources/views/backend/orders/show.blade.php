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

<section class="container mt-5">
<div class="row">
      
       <div class="col-md-6 col-sm-12">
       
        <P >{{$order->time}}</p>
        
        <p >{{$order->status}}</p>

        
         <a href="{{route('orders.edit',$order->id)}}" class="btn btn-primary" style="display:inline">edit</a>
        <form action="{{route('orders.destroy',$order->id)}}" method="post" style="float:right">
            @csrf @method("delete")
            <input type="submit" class="btn btn-danger" value="Delete">
        </form>
        </div>
      
        
      
</div>
</section>

@endsection