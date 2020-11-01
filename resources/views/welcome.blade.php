<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Bootstrap core CSS -->
        
        <!-- Custom fonts for this template -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

        <!-- Styles -->
        <style>
/*!
 * Start Bootstrap - Coming Soon v5.0.8 (https://startbootstrap.com/themes/coming-soon)
 * Copyright 2013-2020 Start Bootstrap
 * Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-coming-soon/blob/master/LICENSE)
 */
/*!
 * Start Bootstrap - Coming Soon v5.0.8 (https://startbootstrap.com/themes/coming-soon)
 * Copyright 2013-2020 Start Bootstrap
 * Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-coming-soon/blob/master/LICENSE)
 */

html {
  height: 100%;
}

body {
  height: 100%;
  min-height: 35rem;
  position: relative;
  font-family: 'Source Sans Pro';
  font-weight: 300;
}

h1,
h2,
h3,
h4,
h5,
h6 {
  font-family: 'Merriweather';
  font-weight: 700;
}

video {
  position: fixed;
  top: 50%;
  left: 50%;
  min-width: 100%;
  min-height: 100%;
  width: auto;
  height: auto;
  transform: translateX(-50%) translateY(-50%);
  z-index: 0;
}

@media (pointer: coarse) and (hover: none) {
  body {
    background: url("img/bg-mobile-fallback.jpg") #002E66 no-repeat center center scroll;
    background-size: cover;
  }
  body video {
    display: none;
  }
}

.overlay {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  background-color: #cd9557;
  opacity: 0.7;
  z-index: 1;
}

.masthead {
  position: relative;
  overflow: hidden;
  padding-bottom: 3rem;
  z-index: 2;
}

.masthead .masthead-bg {
  position: absolute;
  top: 0;
  bottom: 0;
  right: 0;
  left: 0;
  width: 100%;
  min-height: 35rem;
  height: 100%;
  background-color: rgba(0, 46, 102, 0.8);
  transform: skewY(4deg);
  transform-origin: bottom right;
}

.masthead .masthead-content h1 {
  font-size: 2.5rem;
}

.masthead .masthead-content p {
  font-size: 1.2rem;
}

.masthead .masthead-content p strong {
  font-weight: 700;
}

.masthead .masthead-content .input-group-newsletter input {
  height: auto;
  font-size: 1rem;
  padding: 1rem;
}

.masthead .masthead-content .input-group-newsletter button {
  font-size: 0.8rem;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 1px;
  padding: 1rem;
}

@media (min-width: 768px) {
  .masthead {
    height: 100%;
    min-height: 0;
    width: 40.5rem;
    padding-bottom: 0;
  }
  .masthead .masthead-bg {
    min-height: 0;
    transform: skewX(-8deg);
    transform-origin: top right;
  }
  .masthead .masthead-content {
    padding-left: 3rem;
    padding-right: 10rem;
  }
  .masthead .masthead-content h1 {
    font-size: 3.5rem;
  }
  .masthead .masthead-content p {
    font-size: 1.3rem;
  }
}

.social-icons {
  position: absolute;
  margin-bottom: 2rem;
  width: 100%;
  z-index: 2;
}

.social-icons ul {
  margin-top: 2rem;
  width: 100%;
  text-align: center;
}

.social-icons ul > li {
  margin-left: 1rem;
  margin-right: 1rem;
  display: inline-block;
}

.social-icons ul > li > a {
  display: block;
  color: white;
  background-color: rgba(0, 46, 102, 0.8);
  border-radius: 100%;
  font-size: 2rem;
  line-height: 4rem;
  height: 4rem;
  width: 4rem;
}

@media (min-width: 768px) {
  .social-icons {
    margin: 0;
    position: absolute;
    right: 2.5rem;
    bottom: 2rem;
    width: auto;
  }
  .social-icons ul {
    margin-top: 0;
    width: auto;
  }
  .social-icons ul > li {
    display: block;
    margin-left: 0;
    margin-right: 0;
    margin-bottom: 2rem;
  }
  .social-icons ul > li:last-child {
    margin-bottom: 0;
  }
  .social-icons ul > li > a {
    transition: all 0.2s ease-in-out;
    font-size: 2rem;
    line-height: 4rem;
    height: 4rem;
    width: 4rem;
  }
  .social-icons ul > li > a:hover {
    background-color: #002E66;
  }
}

.btn-secondary {
  background-color: #cd9557;
  border-color: #cd9557;
}

.btn-secondary:active, .btn-secondary:focus, .btn-secondary:hover {
  background-color: #ba7c37 !important;
  border-color: #ba7c37 !important;
}

.input {
  font-weight: 300 !important;
}


       </style>
    </head>
    <body>

  <div class="overlay"></div>
  <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
    <source src="./mp4/bg.mp4" type="video/mp4">
  </video>

  <div class="masthead">
    <div class="masthead-bg"></div>
    <div class="container h-100">
      <div class="row h-100">
        <div class="col-12 my-auto">
          <div class="masthead-content text-white py-5 py-md-0">
            <h1 class="mb-3">Coming Soon!</h1>
            <p class="mb-5">We're working hard to finish the development of this site. Our target launch date is
              <strong>January 2019</strong>! Sign up for updates using the form below!</p>
            <div class="input-group input-group-newsletter">
              <form action="/email" method="get" class="form">
              <input name="email" type="email" class="form-control" placeholder="Enter email..." aria-label="Enter email..." aria-describedby="basic-addon">
              <div class="input-group-append">
                <button class="btn btn-secondary" type="submit" id="submit-button">Notify Me!</button>
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="social-icons">
    <ul class="list-unstyled text-center mb-0">
      <li class="list-unstyled-item">
        <a href="#">
          <i class="fab fa-twitter"></i>
        </a>
      </li>
      <li class="list-unstyled-item">
        <a href="#">
          <i class="fab fa-facebook-f"></i>
        </a>
      </li>
      <li class="list-unstyled-item">
        <a href="#">
          <i class="fab fa-instagram"></i>
        </a>
      </li>
    </ul>
  </div>

  <!-- Bootstrap core JavaScript -->
  
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
 
  <!-- Custom scripts for this template -->
  <script src="js/coming-soon.min.js"></script>

</body>
</html>
