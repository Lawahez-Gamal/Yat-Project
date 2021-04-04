@extends ("front.layout.master")

@section("content")

<div class="row">
              <div class="col-md-6 col-sm-12 offset-3 text-center">
                  
                  <p class="font-weight-bold">Tomato is a delisious restaurant website template</p>
              </div>
          </div>
        </div>
    </header>

<section class="container mt-5">

<div class="row">
          
 @foreach($customers as $customer)
       <div class="col-md-6 col-sm-12">
       <h2 class="text-uppercase text-nowrap font-weight-bold">
        Name : {{$customer->name}}</h2>
       
        <p > Phone number :{{$customer->number}}</p>

        <p >Email : {{$customer->email}}</p>

        <p >Address : {{$customer->address}}</p>

        <a href="{{route('customers.show',$customer->id)}}" class="btn text-uppercase border border-none p-3 mb-5 text-white my-btn">view details</a>
        </div>
@endforeach

</div>

</section>

@endsection