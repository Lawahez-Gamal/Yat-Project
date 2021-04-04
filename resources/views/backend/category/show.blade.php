@extends ("front.layout.master")

@section("content")

<div class="row">
              <div class="col-md-6 col-sm-12 offset-3 text-center">
                  <h1 class="text-uppercase font-weight-bolder my-title">Recipies</h1>
                  <p class="font-weight-bold">Tomato is a delisious restaurant website template</p>
              </div>
          </div>
        </div>
    </header>

<section class="container mt-5">
<div class="row">
      
       <div class="col-md-6 col-sm-12">
       <img src="{{asset($menu->image)}}" class="float-left h-75 w-50 mx-5" alt="menu-0ne" name="img"/>
        <h2 class="text-uppercase text-nowrap font-weight-bold">
        {{$menu->name}}</h2>
        <span class="fa fa-star"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <p >{{$menu->description}}</p>

        
         <a href="{{route('meals.edit',$menu->id)}}" class="btn btn-primary" style="display:inline">edit</a>
        <form action="{{route('meals.destroy',$menu->id)}}" method="post" style="float:right">
            @csrf @method("delete")
            <input type="submit" class="btn btn-danger" value="Delete">
        </form>
        </div>
      
        
      
</div>
</section>



     
     
   
    

    {{--<a href="{{route('menus.show',$menu->id)}}" >Show Details</a>--}}






@endsection