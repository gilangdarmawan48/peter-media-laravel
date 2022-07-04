<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Peternakan Unggas | @yield('title')</title>
  <script src="https://kit.fontawesome.com/685f75047e.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="{{ asset('assets_utama/css/style.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  @stack('css')
</head>
<body>
  <div class="header">
    <img src="{{ asset('assets_utama/img/19362.jpg') }}" alt="">
  </div>
  
  @yield('navbar')
  <div class="navbar">
    <a href="index.html">Home</a>
    <a href="profile.html">Profile</a>
    <a href="watch-list.html">Watch List</a>
    <a href="kalkulator.html">Kalkulator</a>
    <a href="modul4/index.html">Form</a>
    <div class="dropdown">
      <button class="dropbtn">Kategori
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="#">Ayam Petelur</a>
        <a href="#">Ayam broiler</a>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="leftcolumn">

        @yield('content_left')

      
    </div>
    <div class="rightcolumn">

        @yield('content_right')

    </div>
  </div>

  @yield('footer')
  <div class="footer">
    <div class="footer-icon">
      <a href="https://www.facebook.com/gilang.aja4"><i class="fa-brands fa-instagram-square"></i></a>
      <a href="https://www.instagram.com/gilangdarmawan_/"><i class="fa-brands fa-facebook-square"></i></a>
      <a href="https://wa.me/6287861876077"><i class="fa-brands fa-whatsapp-square"></i></a>
    </div>
  </div>
</body>
</html>