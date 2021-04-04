<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project items</title>

    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">

    <script src="{{asset('https://use.fontawesome.com/73b73e5cb9.js')}}"></script>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <script src="{{asset('./css/js/js.js')}}"></script>

    <script src="{{asset('js/app.js')}}"></script>

    <link rel="stylesheet" href="{{asset('css/style.css')}}">

</head>
<body>

  <div class="container-fluid">

    <header>
        <div class="container-fluid main-header">
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
            <img src="{{asset('images/fork.png')}}" class="ml-5" alt="logo-img" height="50px">
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
                    <a class="dropdown-item" href="menu.html">menu</a>
    
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    RESERVATION
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{route('orders.index')}}">RESERVATION</a>
    
                  </div>
                </li>

                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    RECIPE
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="">RECIPE</a>
    
                  </div>
                </li>
    
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    PAGES
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  
                <a class="dropdown-item" href="{{route('meals.index')}}">Meals</a>
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
                  <a class="nav-link" href="{{route('contacts.index')}}">CONTACT</a>
                </li>
                
              </ul>
              @auth 
                <a class="nav-link"> welcome {{ Auth::user()->name }}</a>
                @endauth

                  @guest
                  <a class="nav-link"> welcome geust</a>
                @endguest
            </div>
          </nav>

     
    {{-- Content here--}}

     @yield("content")

     <section class="container">
      <h2 class="text-uppercase mt-5  font-weight-bolder">featured reciepe</h2>

      <div class="row mt-3">

        <div class="col-md-3 col-sm-12">
          <div class="card border border-0">
            <img src="{{asset('images/recipe1.jpg')}}" class="card-img-top my-img" alt="recipe-image">
            <div class="mt-3">
              <h6 class="card-title text-uppercase">food name</h6>
              <span class="fa fa-star"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
            </div>
          </div>
        </div>

        <div class="col-md-3 col-sm-12">
          <div class="card border border-0">
            <img src="{{asset('images/recipe2.jpg')}}" class="card-img-top my-img" alt="recipe-image">
            <div class="mt-3">
              <h6 class="card-title text-uppercase">food name</h6>
              <span class="fa fa-star"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
            </div>
          </div>
        </div>

        <div class="col-md-3 col-sm-12">
          <div class="card border border-0">
            <img src="{{asset('images/recipe3.jpg')}}" class="card-img-top my-img" alt="recipe-image">
            <div class="mt-3">
              <h6 class="card-title text-uppercase">food name</h6>
              <span class="fa fa-star"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
            </div>
          </div>
        </div>

        <div class="col-md-3 col-sm-12">
          <div class="card border border-0">
            <img src="{{asset('images/recipe4.jpg')}}" class="card-img-top my-img" alt="recipe-image">
            <div class="mt-3">
              <h6 class="card-title text-uppercase">food name</h6>
              <span class="fa fa-star"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
            </div>
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
                    <img src="{{asset('images/thumb8.png')}}" class="float-left mr-3 p-2"/>
                    <p class="font-weight-bold">Hand picked ingredients for our best customers</p>
                    <span class="font-weight-bold"> 29 May 2015</span>
                    </div>

                    <div class="mt-3">
                    <img src="{{asset('images/thumb9.png')}}" class="float-left mr-3 p-2"/>
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
</body>
</html>