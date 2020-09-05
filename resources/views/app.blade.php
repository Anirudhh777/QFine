<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">


  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Q Fine</title>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/@popperjs/core@2"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.18/dist/css/bootstrap-select.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.18/dist/js/bootstrap-select.min.js"></script>
  <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet">
  <!-- <link href="https://fonts.googleapis.com/css2?family=Lato&family=Rowdies:wght@300;700&display=swap" rel="stylesheet"> -->
  <script src="https://use.fontawesome.com/79c46acb7c.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@500&family=Raleway:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,900&display=swap" rel="stylesheet">
  <link href="{{ asset('css/main.css') }}" rel="stylesheet">
  <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('js/jquery-validation.min.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.0.0/crypto-js.min.js" integrity="sha512-nOQuvD9nKirvxDdvQ9OMqe2dgapbPB7vYAMrzJihw5m+aNcf0dX53m6YxM4LgA9u8e9eg9QX+/+mPu8kCNpV2A==" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.0.0/aes.min.js" integrity="sha512-eqbQu9UN8zs1GXYopZmnTFFtJxpZ03FHaBMoU3dwoKirgGRss9diYqVpecUgtqW2YRFkIVgkycGQV852cD46+w==" crossorigin="anonymous"></script>
  <script src="{{ asset('js/jquery.jmap.min.js') }}"></script>
  <script src="{{ asset('js/main.js') }}"></script>
</head>
<body>
  <div class="topfix">
    <div class="scroll-left">
      <p><span>Message 1</span> | <span>Message 2</span></p>
    </div>
    <div class="header">
      <div class="container">
        <!-- <ul class="left">
          <li><a href=""><img src="{{ asset('assets/images/pin.png') }}"> </a></li>
          <li><a href=""><img src="{{ asset('assets/images/global.png') }}"></a></li>
          <li><a href=""><img src="{{ asset('assets/images/english.png') }}" class="lang"></a></li>
        </ul> -->
        <a href="{{ url('/') }}"><img src="{{ asset('assets/images/logo.png') }}" class="logo"></a>
        <ul class="right">
         <li class="ship"><a href="#"><img src="{{ asset('assets/images/flags/united-arab-emirates.svg') }}" class="countryflag"></a></li>
         <!-- <li><a href=""> کرنسی <img src="{{ asset('assets/images/global.png') }}"></a></li> -->
         <li><a href=""> | </a></li>
         <li class="language"><a href=""><span>زبان</span><!-- <img src="{{ asset('assets/images/english.png') }}" class="lang"> --></a></li>
         <li><a href=""> | </a></li>
         <li><a href=""><img src="{{ asset('assets/images/search1.png') }}"></a></li>
         <li><a href=""><img src="{{ asset('assets/images/basket1.png') }}"></a></li>
         <li><a href=""><img src="{{ asset('assets/images/heart1.png') }}"></a></li>
         <li><a href=""><img src="{{ asset('assets/images/user1.png') }}"></a></a></li>
       </ul>
     </div>
   </div>
   <!-- <h1>QFine</h1> -->
   <div class="menu">
    <div class="container">
      <div class="right">
        <div class="dropdown">
          <button class="dropdown-toggle" type="button" data-toggle="dropdown">SHOP
            <i class="fa fa-caret-down"></i></button>
            <ul class="dropdown-menu">
              <li class="menu-one"><a href="{{ url('/rings') }}">Rings</a></li>
              <li class="menu-one"><a href="#">Earings</a></li>
              <li class="menu-one"><a href="#">Necklace</a></li>
              <li class="menu-one"><a href="#">Bracelet</a></li>
              <li class="menu-one"><a href="#">Bridal</a></li>
              <li class="menu-one"><a href="#">Baby</a></li>
              <li class="menu-one"><a href="#">Others</a></li>

              <li class="dropdown-submenu">
                <a tabindex="-1" href="#" class="collsubmenu">Collections <i class="fa fa-caret-down"></i></a>
                <ul class="dropdown-menu">
                   <li><a href="#">Oblong</a></li>
                    <li><a href="#">Dew Droplet</a></li>
                     <li><a href="#">Princess</a></li>
                     <li><a href="#">Mooqueen</a></li>
                     <li><a href="#">Amore</a></li>
                     <li><a href="#">Ovalon</a></li>
                </ul>
              </li>
            </ul>
          </div>
          <div class="dropdown">
            <button class="dropdown-toggle" type="button" data-toggle="dropdown">SERVICES
              <i class="fa fa-caret-down"></i></button>
              <ul class="dropdown-menu">
                <li><a href="#">View at Home</a></li>
                <li><a href="#">Visit Store</a></li>
                <li><a href="#">Custom</a></li>
              </ul>
            </div>
            <div class="dropdown">
              <button class="dropdown-toggle" type="button">TRENDING</button>
                <!-- <ul class="dropdown-menu">
                  <li><a href="#">HTML</a></li>
                  <li><a href="#">CSS</a></li>
                  <li><a href="#">JavaScript</a></li>
                </ul> -->
              </div>
              <div class="dropdown">
                <button class="dropdown-toggle" type="button" data-toggle="dropdown">GIFTING
                  <i class="fa fa-caret-down"></i></button>
                  <ul class="dropdown-menu">
                    <li><a href="#">Upto 1000</a></li>
                    <li><a href="#">Upto 2000</a></li>
                    <li><a href="#">Upto 3000</a></li>
                  </ul>
                </div>
              </div>

        </div>
      </div>
    </div>
    <div class="stickycta">
       <a href="" class="wa"><img src="{{ asset('assets/images/whatsapp1.png') }}"></a>
      <a href="" class="chat"><img src="{{ asset('assets/images/instagram.png') }}"></a>
    </div>
    @yield('content')
    <div id="countryModal" class="modal fade modalstyle" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-body">
           <div class="modal-inner">
             <p class="countryreq">Please Select your country of shipping from the list below to proceed.</p>
             <form role="form" method="POST" action="/" id="countryselection">
              <div class="form-group">
               <!--  <label for="sel1">Select list:</label> -->
               <select class="form-control" id="countrylist1" name="countryname">
                <option value="disable" disabled="" selected="">-</option>
                <option value="india">India</option>
                <option value="united-arab-emirates">UAE</option>
                <option value="united-states-of-america">USA</option>
                <option value="united-kingdom">United Kingdom</option>
                <option value="qatar">Qatar</option>
                <option value="kuwait">Kuwait</option>
              </select>
            </div>
            <button type="submit" class="btn btn-default">Proceed</button>
          </form>
        </div>

      </div>
    </div>

  </div>
</div>
<div id="countryUpdateModal" class="modal fade modalstyle" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body">
       <button type="button" class="close" data-dismiss="modal">&times;</button>
       <div class="modal-inner">
         <p class="country">We Have Detected <span></span> as your country. You may update from the options below.</p>
         <form role="form" method="POST" action="/" id="countryupdate">
          <div class="form-group">
           <!--  <label for="sel1">Select list:</label> -->
           <select class="form-control" id="countrylist2" name="countryname">
            <option value="-" disabled="" selected="">-</option>
            <option value="india">India</option>
            <option value="united-arab-emirates">UAE</option>
            <option value="united-states-of-america">USA</option>
            <option value="united-kingdom">United Kingdom</option>
            <option value="qatar">Qatar</option>
            <option value="kuwait">Kuwait</option>
          </select>
        </div>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-default">Update</button>
      </form>
    </div>

  </div>
</div>

</div>
</div>
<div id="filtermodal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <form role="form" method="POST" action="{{ secure_url('/filter/rings') }}" class="formFilter" id="filter">
          <div class="slidecontainer">
            <label>Min Budget - <span id="demo"></span></label>
            <input type="range" min="1" max="100" value="50" class="slider" id="myRange">

          </div>
          <div class="slidecontainer maxprice">
            <label>Max Budget - <span id="demo1"></span></label>
            <input type="range" min="1" max="100" value="50" class="slider" id="myRange1">

          </div>
          <div class="maxprice">
           <input type="hidden" name="material_type" class="material_type">
           <select class="selectpicker form-control res-opts prop_type_opts" multiple title="Select Material">
             <option disabled="">Select Material</option>
            <option value="Gold">Gold</option>
            <option value="Silver">Silver</option>
            <option value="Platinum">Platinum</option>
          </select>
        </div>
        <div class="maxprice">
           <input type="hidden" name="color_filter" class="color_filter">
           <select class="selectpicker form-control res-opts prop_type_opts1" multiple title="Select Color">
             <option disabled="">Select Color</option>
            <option value="Rose">Rose</option>
            <option value="White">White</option>
            <option value="Yellow">Yellow</option>
          </select>
        </div>
        <div class="maxprice filterbtns">
           <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-default">Filter</button>
        </div>
      </form>
    </div>
  </div>

</div>
</div>
<div id="sortmodal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      <form role="form" method="POST" action="{{ secure_url('/sort/rings') }}" class="formFilter" id="sort">
          
          <div class="maxprice">
           <input type="hidden" name="sort_type" class="sort_type">
           <select class="selectpicker form-control" title="Sort By">
            <option value="Latest">Latest</option>
            <option value="highlow">Price: High To Low</option>
            <option value="lowhigh">Price: Low To High</option>
            <option value="Discounts">Discounts</option>
             <option value="Featured">Featured</option>
          </select>
        </div>
        <div class="maxprice filterbtns">
           <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-default">Sort</button>
        </div>
      </form>
      </div>
    </div>

  </div>
</div>
</body>
