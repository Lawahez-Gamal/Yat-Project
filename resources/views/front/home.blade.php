
@extends ("front.layout.master")

@section("content")
<div class="row">
    <div class="col-md-6 col-sm-12 offset-3 text-center">
      <h1 class="text-uppercase font-weight-bolder">Home</h1>
      
    </div>
  </div>
  </header>
  <section class="restaurant container pt-3 ">


    <h1 class="text-center my-1 font-weight-bold pt-5 pt-2">the Restautrant</h1>
    <p class="text-center py-3">alittle about us anf a breif history of how we start</p>
    <div class="row">
      <div class="col-md-5">
        <img src="{{asset('./images/meal3.jpg')}}" class="w-45">
        <img src="{{asset('./images/meal2.jpg')}}" class="w-45">
        <img src="{{asset('./images/meal6.jpg')}}" class="w-99 mt-1">


      </div>

      <div class="col-md-7 p-3 pl-5">

        Lorem Ipsum is simply dummy text of
        the printing and typesetting industry.
        Lorem Ipsum has been the industry's standard
        dummy text ever since the 1500s, when an<br> unknown
        printer took a galley of type and scrambled it to make
        a type specimen book. It has survived not only five centuries,
        but also the leap into electronic typesetting, remaining essentially
        unchanged.<br>
        It was popularised in the 1960s with the release of Letraset sheets
        containing Lorem Ipsum passages, and more recently with desktop
        publishing software
        like Aldus PageMaker including versions of Lorem Ipsum<br>

        It was popularised in the 1960s with the release of Letraset sheets
        containing Lorem Ipsum passages, and more recently with desktop
        publishing software
        like Aldus PageMaker including versions of Lorem Ipsum


      </div>
    </div>

  </section>


  <section class="slide pb-5 pt-1" id="theSlid">
    <div class="container  pt-4">

      <h1 class="text-center font-weight-bold pt-5">Today special </h1>
      <p class="text-center py-2 mb-2">alittle about us anf a breif history of how we start</p>



      <!-- carsoul -->

      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row">

              <div class="col-md-6">
                <img class="d-block w-100" src="{{asset('./images/bg2.png')}}" alt="First slide">
              </div>
              <div class="col-md-6">
                <p>
                  when an unknown printer took a galley of type and
                  scrambled it to make a type specimen book. It has survived not only five
                  centuries, but also the leap into electronic typesetting, remaining essentially
                  unchanged. It was popularised in the 1960s with the release of Letraset sheets
                  containing Lorem Ipsum passages, and more recently with desktop
                  Lorem Ipsum has been the industry's standard dummy
                  text ever since the 1500s, when an unknown printer took a galley of type and
                  scrambled it to make a type specimen book. It has survived not only five
                  centuries, but also the leap into electronic typesetting, remaining essentially
                  unchanged. It was popularised in the 1960s with the release of Letraset sheets
                  containing Lorem Ipsum passages, and more recently with desktop
                  publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                <button class="btn "> order Now</button>
                <button class="btn ">add to cart</button>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">

              <div class="col-md-6">
                <img class="d-block w-100" src="{{asset('./images/bg2.png')}}" alt="First slide">
              </div>
              <div class="col-md-6">
                <p>
                  but also the leap into electronic typesetting, remaining essentially
                  unchanged. It was popularised in the 1960s with the release of Letraset sheets
                  containing Lorem Ipsum passages, and more recently with desktop
                  Lorem Ipsum has been the industry's standard dummy
                  text ever since the 1500s, when an unknown printer took a galley of type and
                  scrambled it to make a type specimen book. It has survived not only five
                  centuries, but also the leap into electronic typesetting, remaining essentially
                  unchanged. It was popularised in the 1960s with the release of Letraset sheets
                  containing Lorem Ipsum passages, and more recently with desktop
                  publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                <button class="btn "> order Now</button>
                <button class="btn ">add to cart</button>

              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">

              <div class="col-md-6">
                <img class="d-block w-100" src="{{asset('./images/bg2.png')}}" alt="First slide">
              </div>
              <div class="col-md-6">
                <p>
                  Lorem Ipsum is simply dummy text of the printing and
                  typesetting industry. Lorem Ipsum has been the industry's standard dummy
                  text ever since the 1500s, when an unknown printer took a galley of type and
                  scrambled it to make a type specimen book. It has survived not only five
                  centuries, but also the leap into electronic typesetting, remaining essentially
                  unchanged. It was popularised in the 1960s with the release of Letraset sheets
                  containing Lorem Ipsum passages, and more recently with desktop
                  Lorem Ipsum has been the industry's standard dummy
                  text ever since the 1500s, when an unknown printer took a galley of type and
                  scrambled it to make a type specimen book. It has survived not only five
                  centuries, but also the leap into electronic typesetting, remaining essentially
                  unchanged. It was popularised in the 1960s with the release of Letraset sheets
                  containing Lorem Ipsum passages, and more recently with desktop
                  publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                <button class="btn "> order Now</button>
                <button class="btn ">add to cart</button>

              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>



    </div>



  </section>

  <section class="reservations pt-0">
    <h1 class="text-center"> RESERVATIONS</h1>
    <P class="text-center my-3 mb-5">A book table online. leads wiil reach on your mail</P>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="form-group row">
            <div class="col-10">
              <label>Pick Time</label>
              <input class="form-control" type="datetime-local" value="2011-08-19T13:45:00"
                id="example-datetime-local-input">
            </div>
          </div>
        </div>



        <div class="col-md-4">
          <div class="form-group row">
            <div class="col-10">
              <label>Pick Time</label>
              <input class="form-control" type="text" placeholder="Full Name">
            </div>
          </div>
        </div>



        <div class="col-md-4">
          <div class="form-group row">
            <div class="col-10">
              <label>Pick Time</label>
              <input class="form-control" type="datetime-local" id="example-datetime-local-input">
            </div>
          </div>
        </div>


      </div>


      <div class="row">
        <div class="col-md-4">
          <div class="form-group row">
            <div class="col-10">
              <label>Pick Time</label>
              <input class="form-control" type="datetime-local" value="2011-08-19T13:45:00"
                id="example-datetime-local-input">
            </div>
          </div>
        </div>



        <div class="col-md-4">
          <div class="form-group row">
            <div class="col-10">
              <label>Pick Time</label>
              <input class="form-control" type="text" placeholder="Full Name">
            </div>
          </div>
        </div>



        <div class="col-md-4">
          <div class="form-group row">
            <div class="col-10">
              <label>Pick Time</label>
              <input class="form-control" type="datetime-local" id="example-datetime-local-input">
            </div>
          </div>
        </div>


      </div>


      <div class="row py-3">
        <div class="col-md-12 text-center mt-2">
          <button class="btn btn-warning btn-lg py-2 myt-3">Make reservations</button>
        </div>

        <div class="col-md-12 text-center mt-2">
          <p>You can make reservaton call +223432423423</p>
        </div>
      </div>
    </div>

  </section>

  <section class="features">

    <div class="container">
      <h1 class="text-center py-3 font-weight-bold text-light py-3 my-3 pt-5 py-5">our feature</h1>
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <img class="card-img-top" src="{{asset('./images/meal5.jpg')}}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">serving with love</h5>
              <p class="card-text"> It was popularised in the 1960s with the release of Letraset sheets
                containing Lorem Ipsum passages, It was popularised in the 1960s with the release of Letraset sheets
                containing Lorem Ipsum passages, and more recently with desktop
                publishing software and more recently with desktop
                publishing software</p>
            </div>
          </div>
        </div>


        <div class="col-md-4">
          <div class="card">
            <img class="card-img-top" src="{{asset('./images/meal5.jpg')}}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">serving with love</h5>
              <p class="card-text"> It was popularised in the 1960s with the release of Letraset sheets
                containing Lorem Ipsum passages, It was popularised in the 1960s with the release of Letraset sheets
                containing Lorem Ipsum passages, and more recently with desktop
                publishing software and more recently with desktop
                publishing software</p>
            </div>
          </div>
        </div>


        <div class="col-md-4">
          <div class="card">
            <img class="card-img-top" src="{{asset('./images/meal6.jpg')}}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">serving with love</h5>
              <p class="card-text"> It was popularised in the 1960s with the release of Letraset sheets
                containing Lorem Ipsum passages, It was popularised in the 1960s with the release of Letraset sheets
                containing Lorem Ipsum passages, and more recently with desktop
                publishing software and more recently with desktop
                publishing software</p>
            </div>
          </div>
        </div>

      </div>
    </div>

  </section>


  <section class="menu pt-5">
      <h1 class="text-center">Our menu</h1>
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
              <div class="col-md-6">
                <span>English Asrition</span>
                ..............................................................................................
                <span>$14.95</span>
                <p>Hand picked ingredients for </p>
                <span>English Asrition</span>
                ..............................................................................................
                <span>$14.95</span>
                <p>Hand picked ingredients for </p>
                <span>English Asrition</span>
                ..............................................................................................
                <span>$14.95</span>
                <p>Hand picked ingredients for </p>
                <span>English Asrition</span>
                ..............................................................................................
                <span>$14.95</span>
                <p>Hand picked ingredients for </p>
                <span>English Asrition</span>
                ..............................................................................................
                <span>$14.95</span>
                <p>Hand picked ingredients for </p>
              </div>
              <div class="col-md-6">
                <span>English Asrition</span>
                ..............................................................................................
                <span>$14.95</span>
                <p>Hand picked ingredients for </p>
                <span>English Asrition</span>
                ..............................................................................................
                <span>$14.95</span>
                <p>Hand picked ingredients for </p>
                <span>English Asrition</span>
                ..............................................................................................
                <span>$14.95</span>
                <p>Hand picked ingredients for </p>
                <span>English Asrition</span>
                ..............................................................................................
                <span>$14.95</span>
                <p>Hand picked ingredients for </p>
                <span>English Asrition</span>
                ..............................................................................................
                <span>$14.95</span>
                <p>Hand picked ingredients for </p>
              </div>
            </div>



          </div>
          <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">...</div>
          <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
        </div>
      </div>
    </div>
  </section>

  @endsection