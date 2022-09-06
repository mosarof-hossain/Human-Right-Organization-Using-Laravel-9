@extends('master')

@section('content')
    <!--Carousel start-->
    <div class="container">
        <div id="carouselExampleDark" class="carousel carousel-primary slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="10000">
                <img src="img/13.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <h1 class="h1 fw-bold">Organization Of Human Pacifist-OHP</h1>
                    <a href="https://tinyurl.com/4nufh5sp" target="_blank" class="btn btn-rounded btn-danger btns">JOIN MEMBER</a>
                    <a href="#" class="btn btn-outline-success text-white">LEARN MORE</a>
                </div>
              </div>
              <div class="carousel-item" data-bs-interval="2000">
                <img src="img/14.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                  <h1 class="h1 fw-bold">Organization Of Human Pacifist-OHP</h1>
                  <a href="https://tinyurl.com/4nufh5sp" target="_blank" class="btn btn-rounded btn-danger btns">JOIN MEMBER</a>
                  <a href="#" class="btn btn-outline-success text-white ">LEARN MORE</a>
              </div>
              </div>
              <div class="carousel-item">
                <img src="img/15.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                  <h1 class="h1 fw-bold">Organization Of Human Pacifist-OHP</h1>
                  <a href="https://tinyurl.com/4nufh5sp" target="_blank" class="btn btn-rounded btn-danger btns fw-bold">JOIN MEMBER</a>
                  <a href="#" class="btn btn-outline-success text-white fw-bold">LEARN MORE</a>
              </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
              <span class="carousel-control-prev-icon " aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next " type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div> 
        </div>     
        <!--Carousel end-->
    
        <!--card start-->
        <div class="container mt-4 ">
          <p class="h2 text-white text-center">Our ongoing programs</p><hr style=" border: 2px solid white;">
      <div class="row" >
          <div class="col-md-4 p-1">
              <div class="card  " style="background-color:white;" >
                  <img class="card-img-top" src="img/8.jpg" alt="Card image">
                  <div class="card-body">
                    <h4 class="card-title">সহীহ ফ্রি কুরআন শিক্ষা</h4>
                    <p class="card-text">Some example text.</p>
                    <a href="#" class="btn btn-danger">See Details</a>
                  </div>
                </div>
          </div>
          <div class="col-md-4  p-1">
              <div class="card  style="background-color: white;">
                  <img class="card-img-top " src="img/7.jpg" alt="Card image">
                  <div class="card-body">
                    <h4 class="card-title">রামাজান খাদ্য বিতরণ</h4>
                    <p class="card-text">Some example text.</p>
                    <a href="#" class="btn btn-danger">See Details</a>
                  </div>
                </div>
          </div>
          <div class="col-md-4 p-1">
              <div class="card " style="background-color:white;">
                  <img class="card-img-top" src="img/12.jpg" alt="Card image">
                  <div class="card-body">
                    <h4 class="card-title">গরীব ও অসহায়দের সহযোগিতা</h4>
                    <p class="card-text">Some example text.</p>
                    <a href="#" class="btn btn-danger">See Details</a>
                  </div>
                </div>
          </div>
              </div>
              </div>
        <!--Card end-->
              
        <!--OOP end-->
         <!--Map start-->
         <div class="container mt-3">
          <div class="row">
             <p class="h2 text-white"><i class="fa-solid fa-location-dot p-2"></i>OHP Location</p><hr style=" border: 2px solid white;">
             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d231626.9836496748!2d89.32043590736295!3d24.892127019465267!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fdaa0552cbb113%3A0x8d5988f2e8345d71!2sGabtali%20Upazila!5e0!3m2!1sen!2sbd!4v1647626568769!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>>
          </div>
      </div>
      <!--Map end-->
@endsection