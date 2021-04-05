@extends ("front.layout.master")

@section("content")

<div class="row">
              <div class="col-md-6 col-sm-12 offset-3 text-center">
                  <h1 class="text-uppercase font-weight-bolder my-title">Our Recipies</h1>
                  <p class="font-weight-bold">Tomato is a delisious restaurant website template</p>
              </div>
          </div>
        </div>
    </header>
    <div class="container mt-5 mb-5">
    <div class="row">
      <div class="col-md-4">
      <img src="{{asset('images/13.jpg')}}" class="h-100" >
    </div>
    
       <div class="col-md-7 ml-5 w-75">
       <h1 > </h1>
       <p class="text-align-justify">Lorem ipsum dolor sit, amet consectetur adipisicing elit, amet consectetur adipisicing elit.
          Reprehenderit distinctio Lorem ipsum dolor sit  adipisicing elit.adipisicing elit.
          Reprehenderit distinctio Lorem ipsum dolor sit  adipisicing elit.
        Lorem, ipsum dolor.</p>
  
      <div class="card w-75">
        <h4 style="margin-left: 30px;">INGREDIENTS</h4>
       <label class="container" style="margin-left: 30px;">
        <input type="checkbox" checked="checked">
        <span class="checkmark">
          1/2 cup chopped red onions
        </span>
      </label>
      
      <label class="container"style="margin-left: 30px;">
        <input type="checkbox" checked="checked">
        <span class="checkmark">
          2 ounce lemon drops chupas chups bear
        </span>
      </label>
      
      <label class="container" style="margin-left: 30px;">
        <input type="checkbox" checked="checked">
        <span class="checkmark">
          3 pound seams snaps powder gingerbread
        </span>
      </label>
      
      <label class="container" style="margin-left: 30px;">
        <input type="checkbox" checked="checked">
        <span class="checkmark">
          1/4 cup jujubes jelly chupa
        </span>
      </label>

      <label class="container" style="margin-left: 30px;">
        <input type="checkbox" checked="checked">
        <span class="checkmark">
          1/2 cup sour cream(optiona) 
        </span>
        
      </label>

      <label class="container" style="margin-left: 30px;">
        <input type="checkbox" checked="checked">
        <span class="checkmark">
        1 ounce suger plum pastry fruitcake
      </span>
      </label>

      <label class="container" style="margin-left: 30px;">
        <input type="checkbox" checked="checked">
        <span class="checkmark">
          1/4 cup jujubes jelly chupa
        </span></label>
        
    </div>
    </div>
    </div>
  <!-- </div> -->

<div class="row mt-5 mb-5">
  <!-- <div style="width: 650px; height: 600px; margin-left:  140px;"> -->
<div class="col-lg-6">
    <h2>DIRECTION</h2>

  <div class="row">

      <div class="col-lg-1">
       <span class="dot2">1</span>
      </div>
     <div class="col-lg-11">
    <p >Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim, corporis? Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa minima totam rem architecto velit mollitia voluptatum beatae veritatis deserunt hic magni fuga eos odit ducimus enim laudantium assumenda, est saepe.</p>
    </div>
  
    <div class="col-lg-1">
      <span class="dot2">2</span>
     </div>
    <div class="col-lg-11">
   <p >Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim, corporis? Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa minima totam rem architecto velit mollitia voluptatum beatae veritatis deserunt hic magni fuga eos odit ducimus enim laudantium assumenda, est saepe.</p>
   </div>

   <div class="col-lg-1">
    <span class="dot2">3</span>
   </div>
  <div class="col-lg-11">
 <p >Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim, corporis? Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa minima totam rem architecto velit mollitia voluptatum beatae veritatis deserunt hic magni fuga eos odit ducimus enim laudantium assumenda, est saepe.</p>
 </div>

 <div class="col-lg-1">
  <span class="dot2">4</span>
 </div>
<div class="col-lg-11">
<p >Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim, corporis? Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa minima totam rem architecto velit mollitia voluptatum beatae veritatis deserunt hic magni fuga eos odit ducimus enim laudantium assumenda, est saepe.</p>
</div>
  
  </div>
  </div>
 
    <div class="col-lg-6">
    <h3>DESCRIPTIONS</h3>
    <p>Lorem ipsum dolor,quidem odit nemo repellendus unde dolore aut numquam ipsum nihil laborum.
    Repellendus necessitatibus soluta dolore ipsam odit explicabo! Maiores voluptate id,
      molestias, quidem odit nemo repellendus unde dolore aut numquam ipsum nihil laborum.
         molestias, quidem odit nemo repellendus unde dolore aut numquam ipsum nihil laborum.
          ipsum dolor sit amet consectetur, adipisicing elit.Lorem ipsum dolor,adipisicing elit.
             Accusantium eligendi incidunt assumenda accusamus.</p>
        
    
      <p class="mt-5">Repellendus necessitatibus soluta dolore ipsam odit explicabo! Maiores voluptate id,
       molestias, quidem odit nemo repellendus unde dolore aut numquam ipsum nihil laborum.
      Lorem ipsum dolor, sit amet consectetur adipisicing elit.  </p>
    
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
        
        <h6>3.2 gr</h6>
        
        <h6>6.5 gr</h6>
        
        <h6>3.2 gr</h6>
        
        <h6>4.8 gr</h6>
        
        <h6>102 kcal</h6>
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

<hr class="mt-5"/>

<section class="container">
  <h2 class="text-uppercase mt-5  font-weight-bolder">featured reciepe</h2>

  <div class="row mt-3">
    
    <div class="col-md-3 col-sm-12">
      <div class="card border border-0">
        <img src="{{asset('images/14.jpg')}}" class="card-img-top my-img" alt="recipe-image">
        <div class="mt-3">
          <h6 class="card-title text-uppercase">food name</h6>
          
        </div>
      </div>
    </div>
  
    
    <div class="col-md-3 col-sm-12">
      <div class="card border border-0">
        <img src="{{asset('images/33.jpg')}}" class="card-img-top my-img" alt="recipe-image">
        <div class="mt-3">
          <h6 class="card-title text-uppercase">food name</h6>
          
        </div>
      </div>
    </div>
  
    <div class="col-md-3 col-sm-12">
      <div class="card border border-0">
        <img src="{{asset('images/14.jpg')}}" class="card-img-top my-img" alt="recipe-image">
        <div class="mt-3">
          <h6 class="card-title text-uppercase">food name</h6>
          
        </div>
      </div>
    </div>

    
    <div class="col-md-3 col-sm-12">
      <div class="card border border-0">
        <img src="{{asset('images/33.jpg')}}" class="card-img-top my-img" alt="recipe-image">
        <div class="mt-3">
          <h6 class="card-title text-uppercase">food name</h6>
          
        </div>
      </div>
    </div>
  </div>
  </div>
</div>
</section>
  
@endsection 