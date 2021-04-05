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

<section class="container my-5">

<form method="post" action="{{route('contacts.store')}}" enctype="multipart/form-data">
@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Full name</label>
    <input type="text" name="name" class="form-control"  placeholder="Enter Full name">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">email</label>
    <input type="email" name="email" class="form-control"  placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">subject</label>
    <input type="text" name="subject" class="form-control"  placeholder="Enter subject">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">message</label>
    <input type="text" name="message" class="form-control"  placeholder="Enter message">
  </div>

  <button type="submit" class="btn btn-primary">Add </button>
</form>
</div>
@endsection