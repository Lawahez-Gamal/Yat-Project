@extends ("front.layout.master")

@section("content")

<div class="row">
              <div class="col-md-6 col-sm-12 offset-3 text-center">
                  <h1 class="text-uppercase font-weight-bolder my-title">Recipie details</h1>
                  <p class="font-weight-bold">Tomato is a delisious restaurant website template</p>
              </div>
          </div>
        </div>
    </header>>

<section class="container mt-5">
<div class="row">
      
       <div class="col-md-6 col-sm-12">
      
        <h2 class="text-uppercase text-nowrap font-weight-bold">
        Name : {{$reciepe->name}}</h2>
      
        <p >ingredient : {{$reciepe->ingredient}}</p>

        <p >instructions : {{$reciepe->instructions}}</p>
        
         <a href="{{route('reciepes.edit',$reciepe->id)}}" class="btn btn-primary" style="display:inline">edit</a>
        <form action="{{route('reciepes.destroy',$reciepe->id)}}" method="post" style="float:right">
            @csrf @method("delete")
            <input type="submit" class="btn btn-danger" value="Delete">
        </form>
        </div>
      
        
      
</div>
</section>



     
     
   
    

    {{--<a href="{{route('reciepes.show',$reciepe->id)}}" >Show Details</a>--}}






@endsection