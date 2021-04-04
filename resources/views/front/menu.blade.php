@extends ("front.layout.master")

@section("content")
    



<section class="menu pt-5">

  <div class="row container  m-auto">
    <div class="col-md-12">
      <ul class="nav nav-pills mb-3 m-auto  py-3 f-flex justify-content-center" id="pills-tab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
            aria-controls="pills-home" aria-selected="true">All</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
            aria-controls="pills-profile" aria-selected="false">STARTERS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab"
            aria-controls="pills-contact" aria-selected="false">BREAKFAST</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab"
            aria-controls="pills-contact" aria-selected="false">LUNCH</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab"
            aria-controls="pills-contact" aria-selected="false">DINNER</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab"
            aria-controls="pills-contact" aria-selected="false">DESSERTS</a>
        </li>

      </ul>
  <div class="tab-content" id="pills-tabContent">
    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

<div class="row  py-5">
  <div class="col-md-4">
    <div class="card">
      <img class="card-img-top" src="./images/meal5.jpg" alt="Card image cap">
      <div class="card-body">
        </div>
    </div>
  </div>
    <div class="col-md-4">
      <div class="card">
        <img class="card-img-top" src="./images/meal6.jpg" alt="Card image cap">
        <div class="card-body">
        </div>
      </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img class="card-img-top" src="./images/meal2.jpg" alt="Card image cap">
          <div class="card-body">
          </div>
        </div>
      </div>
</div>

<div class="row  pb-5 ">
  <div class="col-md-4">
    <div class="card">
      <img class="card-img-top" src="./images/meal4.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title text-center">serving with love</h5>
        <p class="card-text text-center" >                It was popularised in the 1960s with the release of Letraset sheets 
        containing Lorem Ipsum passages,                  It was popularised in the 1960s with the release of Letraset sheets 
        containing Lorem Ipsum passages, and more recently with desktop
         publishing software and more recently with desktop
         publishing software</p>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card">
      <img class="card-img-top" src="./images/meal2.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title text-center">serving with love</h5>
        <p class="card-text text-center" >                It was popularised in the 1960s with the release of Letraset sheets 
        containing Lorem Ipsum passages,                  It was popularised in the 1960s with the release of Letraset sheets 
        containing Lorem Ipsum passages, and more recently with desktop
         publishing software and more recently with desktop
         publishing software</p>
      </div>
    </div>
  </div>

  <div class="col-md-4">
    <div class="card">
      <img class="card-img-top" src="./images/meal3.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title text-center">serving with love</h5>
        <p class="card-text text-center" >                It was popularised in the 1960s with the release of Letraset sheets 
        containing Lorem Ipsum passages,                  It was popularised in the 1960s with the release of Letraset sheets 
        containing Lorem Ipsum passages, and more recently with desktop
         publishing software and more recently with desktop
         publishing software</p>
      </div>
    </div>
  </div>
      </div>
     
</div>


    </div>
    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">...</div>
    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
  </div>
     </div>
   </div>
  </section>

  <section class="container-fluid subscribe p-3">
    <div class="row">
      <div class="col-md-9">
        <span class="text-uppercase float-left mx-5">subscribe</span>

        <p class="my-3">Get updates about new dishes and upcoming events</p>
      </div>
      <div class="col-md-4 col-sm-6 offset-7">
        <form>
          <input type="text" class="p-2 w-75" placeholder="Your Email Address">
          <button class="p-2 m-3 border border-0 font-weight-bolder text-white my-btn">></button>
        </form>
      </div>
    </div>
  </section>

  @endsection