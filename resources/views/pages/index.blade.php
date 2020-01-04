@extends('layouts.app')

@section('content')
      <div class="container">
        <div class="jumbotron" style="height: 300px;">
          <h1>Bootstrap Tutorial</h1>      
          <p>Bootstrap is the most popular HTML, CSS, and JS framework for developing responsive, mobile-first projects on the web.</p>
          <button class="btn btn-info text-white">LogIn</button>
          <button class="btn btn-info text-white">Register</button>
        </div>     
      </div>
    <br>
    <div class="container">
        <div class="card-deck">
            <div class="card">
              <img class="card-img-top" src="{{asset('img/school1.png')}}" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
            <div class="card">
              <img class="card-img-top" src="{{asset('img/school1.png')}}" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
            <div class="card">
              <img class="card-img-top" src="{{asset('img/school1.png')}}" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
          </div>
    </div>
    <br>

    <div class="container">
      <div class="card" style="border-radius: 0px; border: none;">
        <div class="row">
          <div class="col-sm-6">
            <div class="card" style="border: none;">
              <div class="card-body">
                <h5 class="card-title">Contact Us</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                <form action="" method="post">
                  <div class="form-group">
                    <label for="name"><i class="fa fa-user"></i>&nbsp;Name</label>
                    <input type="text" class="form-control">
                  </div>

                  <div class="form-group">
                    <label for="emailphone"><i class="fa fa-phone-square"></i> &nbsp;Email or Phone No</label>
                    <input type="text" class="form-control">
                  </div>

                  <div class="form-group">
                    <label for="message"><i class="fa fa-envelope-o"></i>&nbsp;Message</label>
                    <textarea name="message" id="message" class="form-control" cols="30" rows="5"></textarea>
                  </div>

                  <button type="submit" class="btn btn-info text-white btn-sm">Send</button>

                </form>






              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="card" style="border: none;">
              <div class="card-body">
                <h5 class="card-title">About Us</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.
                  With supporting text below as a natural lead-in to additional content.
                  With supporting text below as a natural lead-in to additional content.
                  With supporting text below as a natural lead-in to additional content.
                  With supporting text below as a natural lead-in to additional content.
                  With supporting text below as a natural lead-in to additional content.
                  With supporting text below as a natural lead-in to additional content.
                  With supporting text below as a natural lead-in to additional content.
                  With supporting text below as a natural lead-in to additional content.
                  With supporting text below as a natural lead-in to additional content.
                  With supporting text below as a natural lead-in to additional content.
                  With supporting text below as a natural lead-in to additional content.
                </p>
                <a href="#" class="btn btn-info text-white btn-sm">Go somewhere</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    

    
@endsection
