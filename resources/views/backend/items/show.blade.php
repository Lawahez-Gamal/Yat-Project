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
       
      <div class="card w-75">
        <h4 style="margin-left: 30px;">INGREDIENTS</h4>
       <label class="container" style="margin-left: 30px;">
        <input type="checkbox" checked="checked">
        <span class="checkmark">
        {{$reciepe->ingredient}}
        </span>
      </label>
      
        
    </div>
    </div>


<div class="row mt-5 mb-5">
 
<div class="col-lg-6">
    <h2>DIRECTION</h2>

  <div class="row">

      <div class="col-lg-1">
       <span class="dot2">1</span>
      </div>
     <div class="col-lg-11">
    <p >{{$reciepe->instructions}}</p>
    </div>
  
  
  </div>
  </div>
 
    <div class="col-lg-6">
    <h3>DESCRIPTIONS</h3>
    <p class="text-align-justify">{{$Mymeal->description}}</p>
    
    <h3>NUTRITION</h3>
    
    <div class="row" style="margin-left: 5px;">
      <div class="col-lg-4">
        <h5>Nutrient</h5>
        
        <h6>Protien</h6>
       
        <h6>Fat</h6>
        
        <h6>Carbohydrates</h6>
        
        <h6>Calories</h6>
        
        <h6>Cholesterol</h6>
      </div>
      <div class="col-lg-4">
        <h5>DV</h5>
        
        <h6>{{$reciepe->protien}} gr</h6>
        <h6>{{$reciepe->fat}} gr</h6>
        <h6>{{$reciepe->carbohydrates}} gr</h6>
        <h6>{{$reciepe->calory}} gr</h6>
        <h6>{{$reciepe->choleste}} kcal</h6>
      </div>

      <div class="col-lg-4">
        <h5>%DV</h5>
      
        <h6>5% <progress class="ml-2" id="bar" value="32" max="100"> </progress></h6>
       
        <h6>6%<progress class="ml-2" id="bar" value="50" max="100"> </progress></h6>
      
        <h6>9%<progress class="ml-2" id="bar" value="90" max="100"> </progress></h6>
    
        <h6>2%<progress class="ml-2" id="bar" value="20" max="100"> </progress></h6>
        
        <h6>8%<progress class="ml-2" id="bar" value="70" max="100"> </progress></h6>
      </div>
    </div>
  </div>
</div> 


</div>
</section>

@endsection