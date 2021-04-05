@extends ("front.layout.master")

@section("content")

<div class="row">
              <div class="col-md-6 col-sm-12 offset-3 text-center">
                  <h1 class="text-uppercase font-weight-bolder my-title">Contacts</h1>
                  <p class="font-weight-bold">Tomato is a delisious restaurant website template</p>
              </div>
          </div>
        </div>
    </header>

<section class="container mt-5">
<div class="row">
      
       <div class="col-md-6 col-sm-12">
      
        <h2 class="text-uppercase text-nowrap font-weight-bold">
        {{$contact->full_name}}</h2>
        
        <p >{{$contact->message}}</p>

        <p >{{$contact->email}}</p>	
        		
        <p >{{$contact->subject}}</p>
        </div>
      
        
      
</div>
</section>



     
     
   
    

    {{--<a href="{{route('contacts.show',$contact->id)}}" >Show Details</a>--}}






@endsection