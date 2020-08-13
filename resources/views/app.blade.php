<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">


  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Q Fine</title>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet">
  <!-- <link href="https://fonts.googleapis.com/css2?family=Lato&family=Rowdies:wght@300;700&display=swap" rel="stylesheet"> -->
  <script src="https://use.fontawesome.com/79c46acb7c.js"></script>
 <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@500&family=Raleway:wght@400;700&display=swap" rel="stylesheet">
  <link href="{{ asset('css/main.css') }}" rel="stylesheet">
  <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('js/jquery-validation.min.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.0.0/crypto-js.min.js" integrity="sha512-nOQuvD9nKirvxDdvQ9OMqe2dgapbPB7vYAMrzJihw5m+aNcf0dX53m6YxM4LgA9u8e9eg9QX+/+mPu8kCNpV2A==" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.0.0/aes.min.js" integrity="sha512-eqbQu9UN8zs1GXYopZmnTFFtJxpZ03FHaBMoU3dwoKirgGRss9diYqVpecUgtqW2YRFkIVgkycGQV852cD46+w==" crossorigin="anonymous"></script>
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
              <li><a href="{{ url('/rings') }}">Rings</a></li>
              <li><a href="#">Earings</a></li>
              <li><a href="#">Necklace</a></li>
              <li><a href="#">Bracelet</a></li>
              <li><a href="#">Bridal</a></li>
              <li><a href="#">Baby</a></li>
              <li><a href="#">Collections</a></li>
            </ul>
          </div>
          <div class="dropdown">
            <button class="dropdown-toggle" type="button" data-toggle="dropdown">SERVICES
              <i class="fa fa-caret-down"></i></button>
              <ul class="dropdown-menu">
                <li><a href="#">HTML</a></li>
                <li><a href="#">CSS</a></li>
                <li><a href="#">JavaScript</a></li>
              </ul>
            </div>
            <div class="dropdown">
              <button class="dropdown-toggle" type="button" data-toggle="dropdown">TRENDING
                <i class="fa fa-caret-down"></i></button>
                <ul class="dropdown-menu">
                  <li><a href="#">HTML</a></li>
                  <li><a href="#">CSS</a></li>
                  <li><a href="#">JavaScript</a></li>
                </ul>
              </div>
              <div class="dropdown">
                <button class="dropdown-toggle" type="button" data-toggle="dropdown">GIFTING
                  <i class="fa fa-caret-down"></i></button>
                  <ul class="dropdown-menu">
                    <li><a href="#">HTML</a></li>
                    <li><a href="#">CSS</a></li>
                    <li><a href="#">JavaScript</a></li>
                  </ul>
                </div>
              </div>

         <!--  <ul class="right">
            <li class="dropdown"><a href="#" class="dropdown-toggle"  data-toggle="dropdown">SHOP <i class="fa fa-caret-down"></i></a></li>
            <li><a href="">SERVICES <i class="fa fa-caret-down"></i></a>
                <ul class="dropdown-menu">
                  <li><a href="#">HTML</a></li>
                  <li><a href="#">CSS</a></li>
                  <li><a href="#">JavaScript</a></li>
                </ul>
            </li>
            <li><a href="">TRENDING <i class="fa fa-caret-down"></i></a></li>
            <li><a href="">GIFTING <i class="fa fa-caret-down"></i></a></li>
            <li><a href="">GIFTS </a></li>
            <li><a href="">CUSTOMIZE </a></li>
            <li><a href="">DEMO</a></li>
            <li><a href="">CONTACT</a></li>

          </ul> -->
        </div>
      </div>
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
</body>
