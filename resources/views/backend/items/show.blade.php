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
      
       <div class="col-md-4 col-sm-12">
       <img src="{{asset($Mymeal->image)}}" class="float-left h-75 w-75 mx-5" alt="Mymeal-0ne" name="img"/>
       </div>
       <div class="col-md-6 col-sm-12">
        <h2 class="text-uppercase text-nowrap font-weight-bold">
        {{$Mymeal->name}}</h2>
       
        <h3>Description :</h3>

        <div class="col-lg-6">
        <p >{{$Mymeal->description}}</p>
       </div>
        
        <h3>Ingredients : </h3>
        <div class="card w-75 ">
        <label class="container">
        <input type="checkbox" checked="checked">
        <span class="checkmark">
        {{$reciepe->ingredient}}
        </span>
        
      </label>
      </div>

      <div class="row mt-5 mb-5">

       <div class="col-lg-6">
        <h3 class="mt-5">DIRECTION : </h3>
        <div class="col-lg-1">
       <span class="dot2">1</span>
      </div>
      <div class="col-lg-11">
        {{$reciepe->instructions}}
      </div>
     </div>
<div class="col-lg-6">
    <div class="row mt-3">
      <div class="col-lg-6">
        <h3>Nutrion :</h3>
        
        <h6>Protien</h6>
       
        <h6>Fat</h6>
        
        <h6>Carbohydrates</h6>
        
        <h6>Calories</h6>
        
        <h6>Cholesterol</h6>
      </div>
       
      <div class="col-lg-4 mt-2">
        <h5>DV</h5>
        <h6>{{$reciepe->protien}} gr</h6>
        <h6>{{$reciepe->fat}} gr</h6>
        <h6>{{$reciepe->carbohydrates}} gr</h6>
        <h6>{{$reciepe->calory}} gr</h6>
        <h6>{{$reciepe->choleste}} kcal</h6>
        </div>
      </div>
    </div>  

</div>
</section>

@endsection