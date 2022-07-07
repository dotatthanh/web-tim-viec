<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">    
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <meta name="author" content="Jobboard">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <title>Tìm kiếm việc làm</title>    
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

  <link rel="stylesheet" type="text/css" href="user_assets/css/reset-password.css" media="screen" />


</head>

<body>  

  <!-- Page Header Start -->
  <div class="page-header" style="background: url(user_assets/img/banner1.jpg);">
    <div class="container">
      <div class="row">         
        <div class="col-md-12">
          <div class="breadcrumb-wrapper">
            <h2 class="product-title">Đổi mật khẩu</h2>
            <ol class="breadcrumb">
              <li><a href="{{ route('home') }}"><i class="ti-home"></i> Trang chủ</a></li>
              <li class="current">Đổi mật khẩu</li>
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
        <div class="col-sm-6 col-xs-12 col-sm-offset-3">
          <div class="form cms-e-section">
            <!--thông báo-->
            <div class="alert alert-success " id="alert_success" role="alert">
              Đổi mật khẩu thành công <a href="{{ route('home') }}" class="alert-link">Về lại trang chủ</a>. 
            </div>
            <div class="alert alert-danger " id="alert_danger" role="alert">
              Đổi mật khẩu thất bại. <span id="error"></span>. 
            </div>
            <form id="frmEmployerLogin" name="frmEmployerLogin">
              <input type="hidden" name="employer_login" value="1" />
              <div class="form-group">
                <label class="control-label" for="email">
                  <span class="wc-editable" data-pk="front_label_email" data-type="text">Mật khẩu hiện tại</span>:</label>
                  <input type="password" name="cu_password" id="cu_password" class="form-control required" 
                  />
                  <div class="help-block with-errors">
                    <ul class="list-unstyled"></ul>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label" for="password">
                    <span class="wc-editable" data-pk="front_label_password" data-type="text">Mật khẩu mới</span>: </label>
                    <input type="password" name="n_password" id="n_password" autocomplete="current-password" class="form-control required" data-msg-required="Password is required."
                    />
                    <div class="help-block with-errors">
                      <ul class="list-unstyled"></ul>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label" for="password">
                      <span class="wc-editable" data-pk="front_label_password" data-type="text">Xác nhận lại mật khẩu</span>: </label>
                      <input type="password" name="c_password" id="c_password" autocomplete="current-password" class="form-control required" 
                      />
                      <div class="help-block with-errors">
                        <ul class="list-unstyled"></ul>
                      </div>
                    </div>

                    <div class="form-actions">
                      <button name="Submit" type="button" class="btn btn-success" id="submit">Đổi mật khẩu</button>
                    </div>
                  </form>
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
      <script type="text/javascript" src="user_assets/js/ajax/reset-password.js"></script>

    </script>
  </body>
  </html>