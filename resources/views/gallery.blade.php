@extends('master')

@section('content')
    <div class="container mt-3">
      <p class="h2 text-white text-center">Our Photo Gallery</p><hr style=" border: 2px solid white;">
      <div class="row mt-1" style="--bs-gutter-x: .2rem !important;">
          <div class="col-4">
              <a href="img/1.jpg" target="_blank"><img src="img/1.jpg" class="img-fluid img-thumbnail rounded float-start" alt="..."></a>
          </div>
          <div class="col-4">
            <a href="img/2.jpg" target="_blank"><img src="img/2.jpg" class="img-fluid img-thumbnail rounded float-start" alt="..."></a>
          </div>
          <div class="col-4">
            <a href="img/3.jpg" target="_blank"><img src="img/3.jpg" class="img-fluid img-thumbnail rounded float-start" alt="..."></a>
        </div>
      </div>
      <div class="row mt-1" style="--bs-gutter-x: .2rem !important;">
        <div class="col-4">
            <a href="img/4.jpg" target="_blank"><img src="img/4.jpg" class="img-fluid img-thumbnail rounded float-start" alt="..."></a>
        </div>
        <div class="col-4">
          <a href="img/5.jpg" target="_blank"><img src="img/5.jpg" class="img-fluid img-thumbnail rounded float-start" alt="..."></a>
        </div>
        <div class="col-4">
          <a href="img/9.jpg" target="_blank"><img src="img/9.jpg" class="img-fluid img-thumbnail rounded float-start" alt="..."></a>
      </div>
    </div>
    <div class="row mt-1" style="--bs-gutter-x: .2rem !important;">
      <div class="col-4">
          <a href="img/10.jpg" target="_blank"><img src="img/10.jpg" class="img-fluid img-thumbnail rounded float-start" alt="..."></a>
      </div>
      <div class="col-4">
        <a href="img/11.jpg" target="_blank"><img src="img/11.jpg" class="img-fluid img-thumbnail rounded float-start" alt="..."></a>
      </div>
      <div class="col-4">
        <a href="img/16.jpg" target="_blank"><img src="img/16.jpg" class="img-fluid img-thumbnail rounded float-start" alt="..."></a>
    </div>
    </div>
    </div>
@endsection

