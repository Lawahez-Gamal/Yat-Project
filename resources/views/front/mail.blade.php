@extends ("front.layout.master")

@section("content")

<div class="row">
              <div class="col-md-6 col-sm-12 offset-3 text-center">
                  <h1 class="text-uppercase font-weight-bolder my-title">Mails</h1>
                  
              </div>
          </div>
        </div>
    </header>

<section class="container mt-5">

<div class="row">
          
<table>
<tr>
<td>email</td>
@foreach($mail as $user)
</tr>
<tr>
<td>{{$user->email}}</td>
</tr>
@endforeach
</table>

</div>

</section>



@endsection