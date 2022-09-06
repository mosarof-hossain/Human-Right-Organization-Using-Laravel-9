@extends('master')

@section('content')
    <div class="container mt-4 ">
      <p class="h2 text-white text-center">Our Members</p><hr style=" border: 2px solid white;">
        <div class="row" >
          <div class="col-md-3 p-1">
            <div class="card  " style="background-color:white;" >
              <img class="card-img-top" src="img/Member/1.jpg" alt="Card image">
              <div class="card-body">
                <h4 class="card-title text-center" >Rayhan Ali</h4>
                <p class="card-text text-center" >President-OHP</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 p-1">
              <div class="card  " style="background-color:white;" >
                <img class="card-img-top " src="img/Member/2.jpg" alt="Card image">
                <div class="card-body">
                <h4 class="card-title text-center fs">Nasir Uddin</h4>
              <p class="card-text text-center" >Vice President-OHP</p>
            </div>
            </div>
          </div>
          <div class="col-md-3 p-1">
              <div class="card  " style="background-color:white;" >
                <img class="card-img-top" src="img/Member/4.jpg" alt="Card image">
                <div class="card-body">
                  <h4 class="card-title text-center">Md Abu Syed</h4>
              <p class="card-text text-center">General Secretary-OHP</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 p-1">
              <div class="card  " style="background-color:white;" >
                  <img class="card-img-top" src="img/Member/3.jpg" alt="Card image">
                    <div class="card-body">
                  <h4 class="card-title text-center" >RG Tasman</h4>
                <p class="card-text text-center" >Organizational Secretary-OHP</p>
                </div>
              </div>
          </div>
        </div>
        
    </div>
@endsection
