<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project items</title>

    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">

    <script src="https://use.fontawesome.com/73b73e5cb9.js"></script>
    
    <script
    src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
    crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    
    <script src="js/script.js"></script>

    <link rel="stylesheet" href="css/style.css">

</head>
<body>

  <div class="container-fluid">

  <header>
    <div class="container-fluid main-header">
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <img src="images/fork.png" class="ml-5" alt="logo-img" height="50px">
        <a class="navbar-brand mr-5" href="#">TOMATO</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mx-5">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="home.html" id="navbarDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                HOME
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="home.html">home</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                MENU
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="menu.html">Menu</a>

              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                RESERVATION
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="RESERVATION.html">RESERVATION</a>

              </div>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                RECIPE
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="items.html">RECIPE</a>

              </div>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                PAGES
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="home.html">pages</a>

              </div>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                PLOG
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="home.html">PLOG</a>

              </div>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                SHOP
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="home.html">SHOP</a>

              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">CONTACT</a>
            </li>

          </ul>
         
        </div>
      </nav>

      <div class="row">
        <div class="col-md-6 col-sm-12 offset-3 text-center">
          <h1 class="text-uppercase font-weight-bolder"> MENU</h1>
          
        </div>
      </div>
   
</header>
    



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

    <footer class="container-fluid">
      <div class="row m-3 p-5">
          <div class="col">
              <h3>ABOUT US</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut voluptas vero corporis praesentium maiores odio consequatur repudiandae, cupiditate ad, quo qui odit laboriosam ducimus reiciendis totam assumenda similique suscipit. Molestias.</p>
              <h6>Read more <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                </svg></h6>
          </div>

          <div class="col">
              <h3>RECENT POST</h3>
                  <div>
                  <img src="images/thumb8.png" class="float-left mr-3 p-2"/>
                  <p class="font-weight-bold">Hand picked ingredients for our best customers</p>
                  <span class="font-weight-bold"> 29 May 2015</span>
                  </div>

                  <div class="mt-3">
                  <img src="images/thumb9.png" class="float-left mr-3 p-2"/>
                  <p class="font-weight-bold">Hand picked ingredients for our best customers</p>
                  <span class="font-weight-bold"> 29 May 2015</span>
              </div>
          </div>

          <div class="col">
              <h3>REACH US</h3>
              <div class="rounded social">
              <i class="fa fa-facebook-official" aria-hidden="true"></i>
              <i class="fa fa-twitter" aria-hidden="true"></i>
              <i class="fa fa-glide-g" aria-hidden="true"></i>
              <i class="fa fa-youtube" aria-hidden="true"></i>
              <i class="fa fa-vimeo" aria-hidden="true"></i>
              <i class="fa fa-pinterest-p" aria-hidden="true"></i>
              <i class="fa fa-linkedin" aria-hidden="true"></i>
            </div>

            <div class="con mt-3">
              <i class="fa fa-map-marker float-left" aria-hidden="true"></i>
              <p class="font-weight-bold">28 Seventh Avenue, Neew york, 10014</p>
            </div>
            <div class="con">
              <i class="fa fa-phone float-left" aria-hidden="true"></i>
              <p class="font-weight-bold">Phone: (415) 124-5678</p>
            </div>
            <div class="con">
              <i class="fa fa-envelope-o float-left" aria-hidden="true"></i>
              <p class="font-weight-bold">support@restaurant.com</p>
            </div>
            
          </div>
      </div>
  
  </footer>
</div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script> 
</body>
</html>
