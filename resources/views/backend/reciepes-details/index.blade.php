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
                  <h1 class="text-uppercase font-weight-bolder my-title">Recipie details</h1>
                  <p class="font-weight-bold">Tomato is a delisious restaurant website template</p>
              </div>
          </div>
        </div>
    </header>
<section class="container mt-5">

<a class="btn btn-primary" href="{{route('reciepes.create')}}" >Add reciepe</a>
<table class="table">
<tr>
<th>id</th>
<th>name</th>
<th>ingredient</th>
<th>instructions</th>
<th>menu_id</th>
</tr>

@foreach($reciepes as $reciepe)

<tr>
    <td> {{$reciepe->id}} </td>
    <td> {{$reciepe->name}}</td>
    <td>{{$reciepe->ingredient}}</td>
    <td>{{$reciepe->instructions}}</td>
    <td>{{$reciepe->menu_id}}</td>
    
    <td><a href="{{route('reciepes.show',$reciepe->id)}}">show</a>
    <a href="{{route('reciepes.edit',$reciepe->id)}}" class="btn btn-primary">edit</a>
   <form action="{{route('reciepes.destroy',$reciepe->id)}}" method="post" style="display:inline">
      @csrf @method("delete")
    <input type="submit" class="btn btn-danger" value="Delete">
    </form>
    </td>
</tr>
@endforeach

</table>


{{--<a class="btn btn-primary" href="{{route('meals.create')}}" >Add meal</a>

<div class="row">
      
       @foreach($reciepes as $reciepe)
       <div class="col-md-6 col-sm-12">
       
        <h2 class="text-uppercase text-nowrap font-weight-bold">{{$reciepe->name}}</h2>
        <span class="fa fa-star"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <p >{{$reciepe->description}}</p>

        <a href="{{route('meals.show',$reciepe->id)}}">view details</a>

        <a href="{{route('meals.edit',$reciepe->id)}}" class="btn btn-primary">edit</a>

      <form action="{{route('meals.destroy',$reciepe->id)}}" method="post" style="display:inline">

      @csrf @method("delete")

      <input type="submit" class="btn btn-danger" value="Delete">
      </form>
        <!-- <button class="text-uppercase border border-none p-3 mb-5 text-white my-btn"></button> -->
        </div>
@endforeach


</div>--}}
</section>

@endsection