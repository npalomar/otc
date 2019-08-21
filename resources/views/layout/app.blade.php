<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
<<<<<<< HEAD
    <title>OTC About</title>
    <link rel="stylesheet" href="/css/app.css">


  </head>

  <body>
    @yield('content')
  </body>

=======
    <title>Olya's Travel Connection</title>
    <link rel="stylesheet" href="/css/app.css"/>
  </head>
  <body>
    @section('header_pic')
    <div class="header_pic">
      @include('include.navbar')
      <!------>
        <img src="/image/img/queenstown.jpg" width="100%" height= "525px" alt="" id="hdr_img">
        <h1 id="hm_img"> EXPLORE OCEANIA<h1>
    </div>
    <div id="availability">
          <h2 id="notes"> "It doesn't matter where we go what matters is who are we travelling with" </h2>
          <!--<img src="/image/q6.png" width="100%" height= "50px" alt="" id="hdr_msg">-->
    </div>
      <!------>
  @yield('content')

  <footer>
     <div class="star-img">
          <img src="/image/five-star.jpg" style="width:31%; height:40px;" alt="" >
     </div>

     <div class="row" style="margin:0; padding:0;">
          <div class="col-lg-3"></div>
          <div class="col-lg-5" id="prgh1">
              <p>Welcome to a place where nature and luxury are one and the same. Where award winning dining and service beyond measure live in the heart of the Canadian Rockies. This is Cathedral Mountain Lodge. More than a getaway, this is home away from home in Canada’s greatest outdoors, bringing log cabin living and luxury service together to create trul
               y one-of-a-kind experiences beyond expectation.</p>
          </div>
     </div>


    <div class="container1">
          <div class="footer">
              <div class="footer-overlay"></div>
          </div>
          <div class="footer-menu">
              <ul>
                <li><a class="nav-link" href="/contact">CONTACT</a></li>
                <li><a class="nav-link" href="/aboutus">ABOUT</a></li>
                <li><a class="nav-link" href="#">FAQ</a></li>
                <li><a class="nav-link" href="#">PRIVACY POLICY</a></li>
              </ul>
          </div>
          <div class="footer-logo"><img src="image/logo.png" alt="" style="width:200px; height:100px;"></div>
          <div class="footer-address col-md-4">Olya's Travel Connection Tuam St. Philiphstown, Christchurch City, New Zealand</div>
          <div class="footer-contact col-md-6">Phone(022)626-4318 info@olyatravelcon.com</div>
          <div class="footer-follow">Follow us on Social Media</div>
          <div class="s-m">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-youtube"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
          </div>
          <div class="copyright">&copy; 2019 OLYA'S Travel Connection. Desing by DCN Company. All Rights Reserved.</div>
      </div>
    </footer>
  </body>
>>>>>>> 717d9acf45f92b4a16c0010a6bd6346225324add
</html>
