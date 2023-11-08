<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{asset('index/img/boucherie.png')}}">

    <title>Togo Boucherie en-ligne</title>
    

    <!-- Bootstrap core CSS -->
    <link href="{{asset('sel/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('sel/css/album.css')}}" rel="stylesheet">
    <link href="{{asset('sel/css/tshirt.css')}}" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>

</head>
<body>
    @include('template.header')
 @yield('content')   
<footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div>
            <h4>Address</h4>
            <p>
              A108 Adam Street <br>
              New York, NY 535022 - US<br>
            </p>
          </div>
    
        </div>
    
        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4>Reservations</h4>
            <p>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>
        </div>
    
        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-clock icon"></i>
          <div>
            <h4>Opening Hours</h4>
            <p>
              <strong>Mon-Sat: 11AM</strong> - 23PM<br>
              Sunday: Closed
            </p>
          </div>
        </div>
    
        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Follow Us</h4>
          <div class="social-links d-flex">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
    
      </div>
    </div>
    
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Yummy</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
  
    </div>
    <style>
      .footer {
    font-size: 14px;
    background-color: #1f1f24;
    padding: 50px 0;
    color: rgba(255, 255, 255, 0.7);
  }
  
  .footer .icon {
    margin-right: 15px;
    font-size: 24px;
    line-height: 0;
  }
  
  .footer h4 {
    font-size: 16px;
    font-weight: bold;
    position: relative;
    padding-bottom: 5px;
    color: #fff;
  }
  
  .footer .footer-links {
    margin-bottom: 30px;
  }
  
  .footer .footer-links ul {
    list-style: none;
    padding: 0;
    margin: 0;
  }
  
  .footer .footer-links ul li {
    padding: 10px 0;
    display: flex;
    align-items: center;
  }
  
  .footer .footer-links ul li:first-child {
    padding-top: 0;
  }
  
  .footer .footer-links ul a {
    color: rgba(255, 255, 255, 0.6);
    transition: 0.3s;
    display: inline-block;
    line-height: 1;
  }
  
  .footer .footer-links ul a:hover {
    color: #fff;
  }
  
  .footer .social-links a {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    border: 1px solid rgba(255, 255, 255, 0.2);
    font-size: 16px;
    color: rgba(255, 255, 255, 0.7);
    margin-right: 10px;
    transition: 0.3s;
  }
  
  .footer .social-links a:hover {
    color: #fff;
    border-color: #fff;
  }
  
  .footer .copyright {
    text-align: center;
    padding-top: 30px;
    border-top: 1px solid rgba(255, 255, 255, 0.1);
  }
  
  .footer .credits {
    padding-top: 4px;
    text-align: center;
    font-size: 13px;
  }
  
  .footer .credits a {
    color: #fff;
  }
  /*--------------------------------------------------------------
  # slide
  --------------------------------------------------------------*/
  
    </style>
    
    </footer>
  
  <script src="{{asset('sel/js/bootstrap.bundle.min.js')}}" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  
      </body>
  </html>