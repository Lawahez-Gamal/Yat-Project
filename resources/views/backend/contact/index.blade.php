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
                  <h1 class="text-uppercase font-weight-bolder my-title">Contacts</h1>
                  <p class="font-weight-bold">Tomato is a delisious restaurant website template</p>
              </div>
          </div>
        </div>
    </header>
<section class="container mt-5">

<a class="btn btn-primary" href="{{route('contacts.create')}}" >Add contact</a>
<table class="table">
<tr>
<th>id</th>
<th>name</th>
<th>description</th>
<th>img</th>
<th></th>
</tr>

@foreach($contacts as $contact)

<tr>
    <td> {{$contact->id}} </td>
    <td> {{$contact->name}}</td>
    <td>{{$contact->message}}</td>
    <td>{{$contact->subject}}</td>
    
    <td><a href="{{route('contacts.show',$contact->id)}}">show</a>
    <a href="{{route('contacts.edit',$contact->id)}}" class="btn btn-primary">edit</a>
   <form action="{{route('contacts.destroy',$contact->id)}}" method="post" style="display:inline">
      @csrf @method("delete")
    <input type="submit" class="btn btn-danger" value="Delete">
    </form>
    </td>
</tr>
@endforeach

</table>


{{--<a class="btn btn-primary" href="{{route('meals.create')}}" >Add meal</a>

<div class="row">
      
       @foreach($contacts as $contact)
       <div class="col-md-6 col-sm-12">
       
        <h2 class="text-uppercase text-nowrap font-weight-bold">{{$contact->name}}</h2>
        <span class="fa fa-star"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <p >{{$contact->description}}</p>

        <a href="{{route('meals.show',$contact->id)}}">view details</a>

        <a href="{{route('meals.edit',$contact->id)}}" class="btn btn-primary">edit</a>

      <form action="{{route('meals.destroy',$contact->id)}}" method="post" style="display:inline">

      @csrf @method("delete")

      <input type="submit" class="btn btn-danger" value="Delete">
      </form>
        <!-- <button class="text-uppercase border border-none p-3 mb-5 text-white my-btn"></button> -->
        </div>
@endforeach


</div>--}}
</section>

@endsection