<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">    
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <meta name="author" content="Jobboard">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <title>Đăng nhập</title>    
  <base href="{{asset('')}}">

  <!-- for login -->
  <link rel="icon" type="image/vnd.microsoft.icon" href="http://vevs.website/vgw09602_awsoo_com/app/web/upload/medium/favicon-346.ico">
  <link rel="stylesheet" href="http://vevs.website/vgw09602_awsoo_com/core/third-party/flexslider/2.7.0/flexslider.css">
  <link rel="stylesheet" href="http://vevs.website/vgw09602_awsoo_com/core/third-party/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="http://vevs.website/vgw09602_awsoo_com/templates/template_1/css/style.min.css">
  <link rel="stylesheet" href="http://vevs.website/vgw09602_awsoo_com/templates/template_1/css/themes/theme1.min.css">


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

</head>

<body>  

  <!-- Page Header Start -->
  <div class="page-header" style="background: url(user_assets/img/banner1.jpg);">
    <div class="container">
      <div class="row">         
        <div class="col-md-12">
          <div class="breadcrumb-wrapper">
            <h2 class="product-title">Đăng nhập</h2>
            <ol class="breadcrumb">
              <li><a href="{{ route('home') }}"><i class="ti-home"></i> Trang chủ</a></li>
              <li class="current">Đăng nhập</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Page Header End -->   

  <section class="section text-center" >
    <div class="container">
      <!-- login page here   -->
      <div class="row">
        <div class="col-sm-6 col-xs-12">
          <div class="form cms-e-section">
            @if(isset($error))
            <div class="alert alert-danger" role="alert">
              Đăng nhập thất bại. {{$error}}
            </div>
            @endif
            <div class="alert alert-success " id="alert-success" role="alert">
              Đăng kí thành công <a href="{{ route('login') }}" class="alert-link">Đăng nhập ngay</a>. 
            </div>
            <form id="frmEmployerLogin" name="frmEmployerLogin" method="post" action="{{route('auth')}}">
              @csrf
              <input type="hidden" name="employer_login" value="1" />
              <div class="form-group">
                <label class="control-label" for="email">
                  <span class="wc-editable" data-pk="front_label_email" data-type="text">Địa chỉ email</span>:</label>
                  <input type="email" name="email" id="email" class="form-control required email" maxlength="255" autocomplete="email" data-msg-required="Email is required."
                  data-msg-email="Email is invalid." />
                  <div class="help-block with-errors">
                    <ul class="list-unstyled"></ul>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label" for="password">
                    <span class="wc-editable" data-pk="front_label_password" data-type="text">Mật khẩu</span>: </label>
                    <input type="password" name="password" id="password" autocomplete="current-password" class="form-control required" data-msg-required="Password is required."
                    />
                    <div class="help-block with-errors">
                      <ul class="list-unstyled"></ul>
                    </div>
                  </div>

                  <div class="form-actions">
                    <button type="submit" class="btn btn-primary btn-lg">
                      <span class="wc-editable" data-pk="front_btn_login" data-type="action">Đăng nhập</span>
                    </button>

                    <a href="#modal_forgot_password" data-toggle="modal">
                      <span class="wc-editable" data-pk="front_link_forgot_password" data-type="text">Quên mật khẩu</span>
                    </a>
                  </div>
                </form>
              </div>
            </div>

            <div class="col-md-4 col-sm-6 col-md-offset-2 col-xs-12">

              <div class="box cms-e-section">
                <div class="box-title">
                  <span class="wc-editable" data-pk="front_dont_have_account" data-type="text">Bạn chưa có tài khoản?</span>
                </div>

                <a href="{{ route('showSignup') }}" class="btn btn-primary btn-lg">
                  <span class="wc-editable" data-pk="front_register" data-type="text">Đăng kí</span>
                </a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>  


    <!-- Go To Top Link -->
    <a href="#" class="back-to-top">
      <i class="ti-arrow-up"></i>
    </a>

    <div id="loading">
      <div id="loading-center">
        <div id="loading-center-absolute">
          <div class="object" id="object_one"></div>
          <div class="object" id="object_two"></div>
          <div class="object" id="object_three"></div>
          <div class="object" id="object_four"></div>
          <div class="object" id="object_five"></div>
          <div class="object" id="object_six"></div>
          <div class="object" id="object_seven"></div>
          <div class="object" id="object_eight"></div>
        </div>
      </div>
    </div>
    
    <div class="modal fade" id="modal_forgot_password">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

          </div>
          <div class="modal-body">
            <form action="">
              <div class="alert alert-danger" role="alert" id="alert-error" style="display: none">

              </div>
              <h3>Nhập email đã đăng kí: </h3>
              <input type="text" name="email_forgot" id="email_forgot"  class="form-control required" />
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="forgot-password">Lấy lại mật khẩu</button>
              </div>
            </form>
          </div>

        </div>
      </div>
    </div>
    <!-- Main JS  -->
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
    <script type="text/javascript" src="user_assets/js/form-validator.min.js"></script>
    <script type="text/javascript" src="user_assets/js/contact-form-script.js"></script>    
    <script type="text/javascript" src="user_assets/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="user_assets/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="user_assets/js/ajax/login.js"></script>
   
  </body>
  </html>