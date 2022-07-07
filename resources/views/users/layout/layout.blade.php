<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <meta name="author" content="Jobboard">

  <title>Tìm kiếm việc làm</title>
  <base href="{{asset('')}}"/>
  <!-- Favicon -->
  <link rel="shortcut icon" href="user_assets/img/favicon.png">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="user_assets/css/bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="user_assets/css/jasny-bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="user_assets/css/bootstrap-select.min.css" type="text/css">
  <!-- Material CSS -->
  <link rel="stylesheet" href="user_assets/css/material-kit.css" type="text/css">
  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="user_assets/fonts/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="user_assets/fonts/themify-icons.css">

  <!-- Animate CSS -->
  <link rel="stylesheet" href="user_assets/extras/animate.css" type="text/css">
  <!-- Owl Carousel -->
  <link rel="stylesheet" href="user_assets/extras/owl.carousel.css" type="text/css">
  <link rel="stylesheet" href="user_assets/extras/owl.theme.css" type="text/css">
  <!-- Rev Slider CSS -->
  <link rel="stylesheet" href="user_assets/extras/settings.css" type="text/css">
  <!-- Slicknav js -->
  <link rel="stylesheet" href="user_assets/css/slicknav.css" type="text/css">
  <!-- Main Styles -->
  <link rel="stylesheet" href="user_assets/css/main.css" type="text/css">
  <!-- Responsive CSS Styles -->
  <link rel="stylesheet" href="user_assets/css/responsive.css" type="text/css">

  <!-- Color CSS Styles  -->
  <link rel="stylesheet" type="text/css" href="user_assets/css/colors/red.css" media="screen" />

  <!-- CSS file -->
  <link rel="stylesheet" href="user_assets/css/easy-autocomplete.min.css"> 

  <!-- Additional CSS Themes file - not required-->
  <link rel="stylesheet" href="user_assets/css/easy-autocomplete.themes.min.css"> 

  <link rel="stylesheet" href="user_assets/css/job-detail.css">
  
  <meta name="csrf-token" content="{{ csrf_token() }}" />


</head>
<body>
  
  @include('users.layout.header')
  @yield('content')
  @include('users.layout.footer')

  <script type="text/javascript" src="user_assets/js/jquery-min.js"></script>
  <script type="text/javascript" src="user_assets/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="user_assets/js/material.min.js"></script>
  <script type="text/javascript" src="user_assets/js/material-kit.js"></script>
  <script type="text/javascript" src="user_assets/js/jquery.parallax.js"></script>
  <script type="text/javascript" src="user_assets/js/owl.carousel.min.js"></script>
  <script type="text/javascript" src="user_assets/js/jquery.slicknav.js"></script>
  <script type="text/javascript" src="user_assets/js/main.js"></script>
  <script type="text/javascript" src="user_assets/js/jquery.counterup.min.js"></script>
  <script type="text/javascript" src="user_assets/js/waypoints.min.js"></script>
  <script type="text/javascript" src="user_assets/js/jasny-bootstrap.min.js"></script>
  <script type="text/javascript" src="user_assets/js/bootstrap-select.min.js"></script>
  <script type="text/javascript" src="user_assets/js/contact-form-script.js"></script>
  <script type="text/javascript" src="user_assets/js/form-validator.min.js"></script>
</body>