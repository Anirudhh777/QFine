@extends('app')
@section('content')

<div class="banner">
  <div class="owl-carousel">
    <div class="holder">
     <img src="{{ asset('assets/image1.jpg') }}">
     <a href="">DISCOVER</a>
   </div>
   <div class="holder">
     <img src="{{ asset('assets/image3.jpg') }}">
     <a href="">DISCOVER</a>
   </div>
 </div>
  <div class="products text-center">
    <div class="rings">
      <h1>RINGS</h1>
    </div>
    <div class="bracelet">
      <h1>BRACELETS</h1>
    </div>
    <div class="rings">
      <h1>EARINGS</h1>
    </div>
    <div class="bracelet">
      <h1>NECKLACES</h1>
    </div>
  </div>
  <div class="deals">
    <div class="container text-center">
      <h1>DEAL OF THE WEEK</h1>
      <div class="row">
        <div class="col-md-4 flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="{{ asset('assets/image3.jpg') }}">
            </div>
            <div class="flip-card-back">
              <h2>Product Name</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elit turpis, condimentum eget nunc at, faucibus accumsan libero.</p>
              <div class="flipcta">
                 <a href="">Explore</a>
              <a href="">Purchase</a>
              </div>
             
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <img src="{{ asset('assets/image2.jpg') }}">
        </div>
        <div class="col-md-4">
          <img src="{{ asset('assets/image1.jpg') }}">
        </div>
      </div>
    </div>    
  </div>
  <div class="trial text-center">
    <div class="container">
      <h1>House Trial</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elit turpis, condimentum eget nunc at, faucibus accumsan <br>libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elit turpis, condimentum eget nunc at, faucibus accumsan libero</p>
       <a href="">SCHEDULE</a>
    </div>
  </div>
  <div class="gifts">
    <div class="container text-center">
      <h1>GIFTS</h1>
    </div>
    <div class="row">
        <div class="col-md-4 flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="{{ asset('assets/image1.jpg') }}">
            </div>
            <div class="flip-card-back">
              <h2>Product Name</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elit turpis, condimentum eget nunc at, faucibus accumsan libero.</p>
              <div class="flipcta">
                 <a href="">Explore</a>
              <a href="">Purchase</a>
              </div>
             
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <img src="{{ asset('assets/image3.jpg') }}">
        </div>
        <div class="col-md-4">
          <img src="{{ asset('assets/image2.jpg') }}">
        </div>
      </div>
  </div>
</div>


@endsection