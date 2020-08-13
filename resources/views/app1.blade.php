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
  <link href="https://fonts.googleapis.com/css2?family=Lato&family=Rowdies:wght@300;700&display=swap" rel="stylesheet">
  <link href="{{ asset('css/main.css') }}" rel="stylesheet">
  <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('js/main.js') }}"></script>

</head>
<body>
  <div class="topfix">
    <div class="header">
      <div class="container">
        <!-- <ul class="left">
          <li><a href=""><img src="{{ asset('assets/pin.png') }}"> </a></li>
          <li><a href=""><img src="{{ asset('assets/global.png') }}"></a></li>
          <li><a href=""><img src="{{ asset('assets/english.png') }}" class="lang"></a></li>
        </ul> -->
        <ul class="right">
           <li><a href=""><img src="{{ asset('assets/pin.png') }}"> </a></li>
          <li><a href=""><img src="{{ asset('assets/global.png') }}"></a></li>
          <li><a href=""><img src="{{ asset('assets/english.png') }}" class="lang"></a></li>
          <li><a href=""><img src="{{ asset('assets/search-magnifier.png') }}"> </a></li>
          <li><a href=""><img src="{{ asset('assets/shopping-basket.png') }}"></a></li>
          <li><a href=""><img src="{{ asset('assets/heart.png') }}"></a></li>
           <li><a href=""><img src="{{ asset('assets/user.png') }}"></a></li>
           </ul>
         </div>
       </div>
       <!-- <h1>QFine</h1> -->
       <div class="menu">
        <div class="container">
          <!-- <ul class="left">
            <li><a href="">RINGS </a></li>
            <li><a href="">EARINGS</a></li>
            <li><a href="">NECKLACE </a></li>
            <li><a href="">BRACELET</a></li>
          </ul> -->
          <ul class="right">
            <li><a href="">RINGS </a></li>
            <li><a href="">EARINGS</a></li>
            <li><a href="">NECKLACE </a></li>
            <li><a href="">BRACELET</a></li>
            <li><a href="">GIFTS </a></li>
            <!-- <li><a href="">DEMO </a></li>
            <li><a href="">ABOUT</a></li>
            <li><a href="">CONTACT</a></li> -->

          </ul>
        </div>
      </div>
      <div class="scroll-left">
        <p><span>Message 1</span> | <span>Message 2</span></p>
      </div>
    </div>
    <!-- < -->
    @yield('content')

  </body>
