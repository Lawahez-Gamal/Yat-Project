@extends ("front.layout.master")

@section("content")

<div class="row">
              <div class="col-md-6 col-sm-12 offset-3 text-center">
                  <h1 class="text-uppercase font-weight-bolder my-title">Reservaions</h1>
                  <p class="font-weight-bold">Tomato is a delisious restaurant website template</p>
              </div>
          </div>
        </div>
    </header>

<section class="container mt-5">
      <div class="row">
      @foreach($orders as $order)
        <div class="col-md-9">
         
           
              <label>Order time : {{$order->time}}</label>

              <div><a href="{{route('orders.show',$order->id)}}" class="btn btn-warning btn-lg py-2 my-3">Details</a></div>
             @endforeach
        
        </div>
</div>
</section>

    <div class="container row py-3">
        <div class="col-md-12 text-center mt-2">
          <a href="{{route('orders.create')}}" class="btn btn-warning btn-lg py-2 my-3">Make reservations</a>

          
        </div>
      </div>



@endsection
