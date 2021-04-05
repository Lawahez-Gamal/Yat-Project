

  @extends('front.layout.master')

@section("content")

<div class="row">
        <div class="col-md-6 col-sm-12 offset-3 text-center">
          <h1 class="text-center align-middle font-weight-bold pt-5 text-info  " >CONTACT US</h1>
  <p class="font-weight-bold">Tomato is a delicious restuaran website template</p>
          
        </div>
      </div>
    
  </header>

    <div class="container " style="margin-top:40px ;" >
      <div class="row ">
        <div class="col-md-5 py-3 offset-1    " >
          <div class=" m-auto ">
            <h5 class="font-weight-bold py-2"> ADDRESS</h5>
            <p class="font-weight-bold"><i class="fas fa-map-marker-alt" style="color:rgb(252, 193, 84) ;"></i>
              28 Seventh Avenue,New Yoork,10014<br>
              <i class="fas fa-phone-square-alt" style="color:rgb(252, 193, 84) ;"></i>
            Phone:(415) 124-5678<br>
            <i class="far fa-envelope"style="color:rgb(252, 193, 84) ;" ></i>
            support@restuarat.com</p>
              </div>
            <div class="pt-3" >
              <h5 class="font-weight-bold"> HOURS</h5>
            <p > am to1 11:00 pm on Weekdays<br>
            11:00 am to1 11:30 pm on Weekends</p></div>
            <div class="" style="font-size: 20px;">
               <h5 >FOLLOW US</h5>
                <i class="fab fa-facebook text-info"></i>
                <i class="fab fa-twitter text-danger"></i>
                <i class="fab fa-instagram text-secondary"></i>
                <i class="fas fa-envelope text-warning"></i>
            </div>
            </div>
        <div class="col-md-6 py-3">
          <div class="form-group ">
            <input class="form-control" type="text" name=" name" id="name" placeholder="Full Name" style="background-color: rgb(211, 216, 221);border: none;"><br></div>
          <div  class="form-group ">  <input class="form-control" type="email" name="company" placeholder="Email Address" style="background-color: rgb(211, 216, 221);border: none;" required><br></div>  
         <input class="form-control"  type="text" name="tel" placeholder="subject" style="background-color: rgb(211, 216, 221);height: 50px;border: none;" ><br>
         <textarea class="form-control"   name="tel" placeholder="Message" style="background-color: rgb(211, 216, 221);height: 150px;border: none;" ></textarea>
         <br>
       
      <input class="form-control py-2"  type="submit" value="SEND Message" style="background-color:rgb(252, 193, 84);border: none;" >
  </div>
</div>
</div>

  <iframe width="100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d348286.4989522256!2d-73.90366628180966!3d40.69723205830894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2455f3f1cab0d%3A0xa5a45198ea4d73d6!2zQmF5IFJpZGdlLCDYqNix2YjZg9mE2YrZhtiMINmG2YrZiNmK2YjYsdmD2Iwg2KfZhNmI2YTYp9mK2KfYqiDYp9mE2YXYqtit2K_YqQ!5e0!3m2!1sar!2seg!4v1613601848950!5m2!1sar!2seg" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

 
  @endsection
