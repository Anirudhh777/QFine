@extends('app')
@section('content')

<div class="banner">
  <div class="owl-carousel">
    <div class="holder">
     <img src="{{ asset('assets/images/image1-min.jpg') }}">
     <a href="">DISCOVER</a>
   </div>
   <div class="holder">
     <img src="{{ asset('assets/images/image3-min.jpg') }}">
     <a href="">DISCOVER</a>
   </div>
 </div>
 <div class="products text-center container">
  <div class="row">
    <div class="col-md-6">
      <div class="rings">
       <h1>RINGS</h1>
     </div>
   </div>
   <div class="col-md-6">
    <div class="bracelet">
      <h1>BRACELETS</h1>
    </div>
  </div>
  <div class="col-md-6">
    <div class="earings">
     <h1>EARINGS</h1>
   </div>
 </div>
 <div class="col-md-6">
  <div class="necklaces">
   <h1>NECKLACES</h1>
 </div>
</div>
</div>

</div>
<div class="deals">
  <div class="container text-center">
    <h1>DEAL OF THE WEEK</h1>
    <div class="row">
      <div class="col-md-4 flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front">
            <img src="{{ asset('assets/images/IMG_0034-min.jpg') }}">
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
      <img src="{{ asset('assets/images/IMG_0134-min.jpg') }}">
    </div>
    <div class="col-md-4">
      <img src="{{ asset('assets/images/IMG_0237-min.jpg') }}">
    </div>
  </div>
</div>    
</div>
<div class="trial text-center">
  <div class="container">
    <div class="trial-right">
      <h1>Not Sure Of Stepping Out?</h1>
    <p>Book a free try at home appointment today</p>
    <a href="">SCHEDULE TRIAL</a>
    </div>
    
  </div>
</div>
<!-- <div class="gifts">
  <div class="container text-center">
    <h1>GIFTING OPTIONS</h1>
  </div>
  <div class="row">
    <div class="col-md-4 flip-card">
      <div class="flip-card-inner">
        <div class="flip-card-front">
          <img src="{{ asset('assets/images/IMG_0034-min.jpg') }}">
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
    <img src="{{ asset('assets/images/IMG_0134-min.jpg') }}">
  </div>
  <div class="col-md-4">
    <img src="{{ asset('assets/images/IMG_0237-min.jpg') }}">
  </div>
</div>
</div> -->
</div>


@endsection