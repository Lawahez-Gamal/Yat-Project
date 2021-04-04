@extends ("front.layout.master")

@section("content")

@auth 
 welcome {{ Auth::user()->time }}

@endauth

@guest
  welcome geust
@endguest

<div class="row">
              <div class="col-md-6 col-sm-12 offset-3 text-center">
                  <h1 class="text-uppercase font-weight-bolder my-title">Reservations</h1>
                  <p class="font-weight-bold">Tomato is a delisious restaurant website template</p>
              </div>
          </div>
        </div>
    </header>
<section class="container mt-5">

<a class="btn btn-primary" href="{{route('orders.create')}}" >Add order</a>
<table class="table">
<tr>
<th>id</th>
<th>time</th>
<th>status</th>
</tr>

@foreach($orders as $order)

<tr>
    <td> {{$order->id}} </td>
    <td> {{$order->time}}</td>
    <td>{{$order->status}}</td>
 
    <td><a href="{{route('orders.show',$order->id)}}">show</a>
    <a href="{{route('orders.edit',$order->id)}}" class="btn btn-primary">edit</a>
   <form action="{{route('orders.destroy',$order->id)}}" method="post" style="display:inline">
      @csrf @method("delete")
    <input type="submit" class="btn btn-danger" value="Delete">
    </form>
    </td>
</tr>
@endforeach

</table>


{{--<a class="btn btn-primary" href="{{route('meals.create')}}" >Add meal</a>

<div class="row">
      
       @foreach($orders as $order)
       <div class="col-md-6 col-sm-12">
       
        <h2 class="text-uppercase text-nowrap font-weight-bold">{{$order->time}}</h2>
        <span class="fa fa-star"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <p >{{$order->status}}</p>

        <a href="{{route('meals.show',$order->id)}}">view details</a>

        <a href="{{route('meals.edit',$order->id)}}" class="btn btn-primary">edit</a>

      <form action="{{route('meals.destroy',$order->id)}}" method="post" style="display:inline">

      @csrf @method("delete")

      <input type="submit" class="btn btn-danger" value="Delete">
      </form>
        <!-- <button class="text-uppercase border border-none p-3 mb-5 text-white my-btn"></button> -->
        </div>
@endforeach


</div>--}}
</section>

@endsection