@extends ("front.layout.master")

@section("content")

<div class="row">
              <div class="col-md-6 col-sm-12 offset-3 text-center">
                  
                  <p class="font-weight-bold">Tomato is a delisious restaurant website template</span>
              </div>
          </div>
        </div>
    </header>

<section class="container mt-5">
<div class="row">
      
       <div class="col-md-6 col-sm-12">
       
       <h2 class="text-uppercase text-nowrap font-weight-bold">
        Name : {{$customer->name}}</h2>
       
        <p > Phone number :{{$customer->number}}</p>

        <p >Email : {{$customer->email}}</p>

        <p >Address : {{$customer->address}}</p>
        
         <a href="{{route('customers.edit',$customer->id)}}" class="btn btn-primary" style="display:inline">edit</a>

        <form action="{{route('customers.destroy',$customer->id)}}" method="post" style="float:right">
            @csrf @method("delete")
            <input type="submit" class="btn btn-danger" value="Delete">
        </form>
        </div>
      
        
      
</div>
</section>



     
     
   
    

    {{--<a href="{{route('customers.show',$customer->id)}}" >Show Details</a>--}}






@endsection