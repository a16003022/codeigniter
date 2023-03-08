<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com -->
  <!--Comentario de prueba-->
  <title>Bootstrap Theme Company Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>


  body {
    font: 400 15px Lato, sans-serif;
    line-height: 1.8;
    color: #818181;
    
  }
  h2 {
    font-size: 24px;
    text-transform: uppercase;
    color: #303030;
    font-weight: 600;
    margin-bottom: 30px;
  }
  h4 {
    font-size: 19px;
    line-height: 1.375em;
    color: #303030;
    font-weight: 400;
    margin-bottom: 30px;
  }  
  .jumbotron {
    background-color: #0E6655;
    color: #fff;
    padding: 10vh 25px;
    font-family: Montserrat, sans-serif;
  }
  .center {
  position: absolute;
  left: 0;
  right: 0;
  margin: auto;  
  }

  .fondo{
    height: 50%;
    width: 50%;
  }
  
  .btn-jumbotron{
    background-color: #40B5AD !important;
    border-color: #40B5AD;
  }
  .container-fluid {
    
  }
  .bg-grey {
    background-color: #f6f6f6;
  }
  .logo-small {
    color: #40B5AD;
    font-size: 50px;
  }
  .logo-nav {
    color: #40B5AD;
    font-size: 20px;
  }
  .mapouter{
    position:relative;
    text-align:right;
  }
  .gmap_canvas {overflow:hidden;} 
  .social-buttons{
    padding: 10px;
    cursor: pointer;
    height: 60px;
  }
  #terminos{
    z-index: 50;
    cursor: pointer;
    font-size: 18px;
  }
  #about img{
    height: 50vh;
    object-fit: cover;
    object-position: center;
  }

  .nosotros{
    margin-top:5%;
    margin-left:5%;
  }

  .imgdiv{
  
  }

  .nosotros_img{
    height: 10vh;
    /* margin-left:10vh; */
  }

  #productos{
    margin-top: 10vh;
  }

  .video_header {
  position: relative;
  background-color: black;
  height: 75vh;
  min-height: 25rem;
  width: 100%;
  overflow: hidden;
}

.video_header video {
  position: absolute;
  top: 50%;
  left: 50%;
  min-width: 100%;
  min-height: 100%;
  width: auto;
  height: auto;
  z-index: 0;
  -ms-transform: translateX(-50%) translateY(-50%);
  -moz-transform: translateX(-50%) translateY(-50%);
  -webkit-transform: translateX(-50%) translateY(-50%);
  transform: translateX(-50%) translateY(-50%);
}

.video_header .container {
  position: relative;
  z-index: 2;
}

.video_header .overlay {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  background-color: black;
  opacity: 0.5;
  z-index: 1;
}

.btn-contact{
  text-decoration:none;
  color: white;
}

.btn-contact:visited{
  text-decoration:none;
  color: white;
}

.btnbuscar{
  text-align: left !important;
}
  @media screen and (max-width: 767px) {
  #about{
    /* max-height: 100vh;
    margin-bottom: -100vh; */
    z-index: 2;
    color:white;
    /* background-color: rgba(0, 0, 0, 0.5); */
    }
  }

  @media screen and (max-width: 992px) {
    .nosotros_img{
    display:none;
  }
  .nosotros{
    margin-left:0%;
  }

  }

  .logo {
    color: #0000;
    font-size: 150px;
  }
  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
  }
  .thumbnail img {
    width: 100%;
    height: 100%;
    margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
    background-image: none;
    color: #0E6655;
  }
  .carousel-indicators li {
    border-color: #0E6655;
  }
  .carousel-indicators li.active {
    background-color: #0E6655;
  }

  .cnt-txt{
    margin-top: 10vh;
  }

  #promos{
    margin-top: 10vh;
  }

  .promos_titulo{
    margin-top: 5vh;
  }

  .item h4 {
    font-size: 19px;
    line-height: 1.375em;
    font-weight: 400;
    font-style: italic;
    margin: 70px 0;
  }
  .item span {
    font-style: normal;
  }
  .panel {
    border: 1px solid #0E6655; 
    border-radius:0 !important;
    transition: box-shadow 0.5s;
  }
  .panel:hover {
    box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
    border: 1px solid #0E6655;
    background-color: #fff !important;
    color: #0E6655;
  }
  .panel-heading {
    color: #fff !important;
    background-color: #0E6655 !important;
    padding: 25px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
  }
  .panel-footer {
    background-color: white !important;
  }
  .panel-footer h3 {
    font-size: 32px;
  }
  .panel-footer h4 {
    color: #aaa;
    font-size: 14px;
  }
  .panel-footer .btn {
    margin: 15px 0;
    background-color: #0E6655;
    color: #fff;
  }
  .navbar {
    margin-bottom: 0;
    background-color: #ffff;
    /* z-index: 9999; */
    border: 0;
    font-size: 12px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    border-radius: 0;
    font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
    color: #000 !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
    color: #40B5AD !important;
    background-color: #E5E8E8 !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
    color: #fff !important;
  }
  footer .glyphicon {
    font-size: 20px;
    margin-bottom: 20px;
    color: #f4511e;
  }
  .slideanim {visibility:hidden;}
  .slide {
    animation-name: slide;
    -webkit-animation-name: slide;
    animation-duration: 1s;
    -webkit-animation-duration: 1s;
    visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  /* @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
      width: 100%;
      margin-bottom: 35px;
    }
  } */
  @media screen and (max-width: 480px) {
    .logo {
      font-size: 150px;
    }

    .video_header {
      height: 50vh;
  
    }
  }
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
