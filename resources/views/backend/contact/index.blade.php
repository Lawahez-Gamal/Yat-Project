@extends ("front.layout.master")

@section("content")

{{--if user logged in means @auth--}}
@auth 
 welcome {{ Auth::user()->name }}

 {{-- This is comment
 app.blade line 54
 This brings the record from user if i need email {{ Auth::user()->name }}
 if i need id:
    {{ Auth::user()->email }}
    --}}

@endauth

{{--if user NOT logged in means @auth--}}

@guest
  welcome geust
@endguest

<div class="row">
              <div class="col-md-6 col-sm-12 offset-3 text-center">
                  <h1 class="text-uppercase font-weight-bolder my-title">Recipies</h1>
                  <p class="font-weight-bold">Tomato is a delisious restaurant website template</p>
              </div>
          </div>
        </div>
    </header>
<section class="container mt-5">

<a class="btn btn-primary" href="{{route('menus.create')}}" >Add menu</a>
<table class="table">
<tr>
<th>id</th>
<th>name</th>
<th>description</th>
<th>img</th>
<th></th>
</tr>

@foreach($menus as $menu)

<tr>
    <td> {{$menu->id}} </td>
    <td> {{$menu->name}}</td>
    <td>{{$menu->description}}</td>
    <td>{{$menu->image}}</td>
    <td><a href="{{route('menus.show',$menu->id)}}">show</a>
    <a href="{{route('menus.edit',$menu->id)}}" class="btn btn-primary">edit</a>
   <form action="{{route('menus.destroy',$menu->id)}}" method="post" style="display:inline">
      @csrf @method("delete")
    <input type="submit" class="btn btn-danger" value="Delete">
    </form>
    </td>
</tr>
@endforeach

</table>


{{--<a class="btn btn-primary" href="{{route('meals.create')}}" >Add meal</a>

<div class="row">
      
       @foreach($menus as $menu)
       <div class="col-md-6 col-sm-12">
       
        <h2 class="text-uppercase text-nowrap font-weight-bold">{{$menu->name}}</h2>
        <span class="fa fa-star"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <p >{{$menu->description}}</p>

        <a href="{{route('meals.show',$menu->id)}}">view details</a>

        <a href="{{route('meals.edit',$menu->id)}}" class="btn btn-primary">edit</a>

      <form action="{{route('meals.destroy',$menu->id)}}" method="post" style="display:inline">

      @csrf @method("delete")

      <input type="submit" class="btn btn-danger" value="Delete">
      </form>
        <!-- <button class="text-uppercase border border-none p-3 mb-5 text-white my-btn"></button> -->
        </div>
@endforeach


</div>--}}
</section>

@endsection