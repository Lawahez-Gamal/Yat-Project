@extends ("front.layout.master")

@section("content")

@auth 
 welcome {{ Auth::user()->name }}

@endauth

@guest
  welcome geust
@endguest

<div class="row">
              <div class="col-md-6 col-sm-12 offset-3 text-center">
                  <p class="font-weight-bold">Tomato is a delisious restaurant website template</p>
              </div>
          </div>
        </div>
    </header>
<section class="container mt-5">

<a class="btn btn-primary" href="{{route('customers.create')}}" >Add customer</a>
<table class="table">
<tr>
<th>id</th>
<th>name</th>
<th>email</th>
<th>number</th>
<th>address</th>
</tr>

@foreach($customers as $customer)

<tr>
    <td> {{$customer->id}} </td>
    <td> {{$customer->name}}</td>
    <td>{{$customer->email}}</td>
    <td>{{$customer->number}}</td>
    <td>{{$customer->address}}</td>
    <td><a href="{{route('customers.show',$customer->id)}}">show</a>
    <a href="{{route('customers.edit',$customer->id)}}" class="btn btn-primary">edit</a>
   <form action="{{route('customers.destroy',$customer->id)}}" method="post" style="display:inline">
      @csrf @method("delete")
    <input type="submit" class="btn btn-danger" value="Delete">
    </form>
    </td>
</tr>
@endforeach

</table>


{{--<a class="btn btn-primary" href="{{route('customers.create')}}" >Add customer</a>

<div class="row">
      
       @foreach($customers as $customer)
       <div class="col-md-6 col-sm-12">
       
        <h2 class="text-uppercase text-nowrap font-weight-bold">
        Name : {{$customer->name}}</h2>
       
        <p > Phone number :{{$customer->number}}</p>

        <p >Email : {{$customer->email}}</p>

        <p >Address : {{$customer->address}}</p>

        <a href="{{route('customers.edit',$customer->id)}}" class="btn btn-primary">edit</a>

      <form action="{{route('customers.destroy',$customer->id)}}" method="post" style="display:inline">

      @csrf @method("delete")

      <input type="submit" class="btn btn-danger" value="Delete">
      </form>
        
        </div>
@endforeach


</div>--}}
</section>

@endsection