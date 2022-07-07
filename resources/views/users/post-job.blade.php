<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">    
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <meta name="author" content="Jobboard">

  <title>Đăng tin tuyển dụng</title>    

  <!-- Favicon -->
  <link rel="shortcut icon" href="user_assets/img/favicon.png">
  <base href="{{asset('')}}"/>
  <meta name="csrf-token" content="{{ csrf_token() }}" />
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
  <!-- Editor -->
  <link rel="stylesheet" href="user_assets/extras/froala_editor.min.css" type="text/css"> 
  <!-- Slicknav js -->
  <link rel="stylesheet" href="user_assets/css/slicknav.css" type="text/css">
  <!-- Main Styles -->
  <link rel="stylesheet" href="user_assets/css/main.css" type="text/css">
  <!-- Responsive CSS Styles -->
  <link rel="stylesheet" href="user_assets/css/responsive.css" type="text/css">

  <!-- Color CSS Styles  -->
  <link rel="stylesheet" type="text/css" href="user_assets/css/colors/red.css" media="screen" />
  <link href="user_assets/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link href="user_assets/css/jobpost.css" rel="stylesheet" id="bootstrap-css">
</head>
<body>  

  <!-- Page Header Start -->
  <div class="page-header" style="background: url(user_assets/img/banner1.jpg);">
    <div class="container">
      <div class="row">         
        <div class="col-md-12">
          <div class="breadcrumb-wrapper">
            <h2 class="product-title">Đăng tin tuyển dụng</h2>
            <ol class="breadcrumb"  >
              <li><a href="{{ route('home') }}"><i class="ti-home"></i> Trang chủ</a></li>
              <li class="current">Đăng tin tuyển dụng</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Page Header End -->    



  <div class="container">
    <div class="row">
      <div class="col col-md-2"></div>
      <div class="col col-md-8">
        <div class="alert alert-success " id="alert_success" role="alert">
          Đăng bài thành công 
        </div>
        <div class="alert alert-danger " id="alert_danger" role="alert">
         Thông tin tuyển dụng không hợp lệ. Hãy kiểm tra lại
        </div>
        <form>
          <div class="form-group required col-xs-12">
            <label for="exampleInputEmail1" class='control-label'>Tiêu đề</label>
            <input type="text" class="form-control" id="title" name="title" required="true">
            <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
          </div>
          <div class="form-group required col-xs-12 col-md-6">
            <label for="exampleInputPassword1" class='control-label'>Ngành nghề</label>
            <select class="form-control" id="category_id" required>
             @foreach ($listCategory as $c)
             <option value="{{ $c->id }}">{{ $c->name }}</option>
             @endforeach
           </select>
         </div>
         <div class="form-group required col-xs-12 col-md-6">
          <label for="exampleInputPassword1" class='control-label'>Địa điểm</label>
          <select class="form-control" id="address_id" required>
           @foreach ($listAddress as $a)
           <option value="{{ $a->id }}">{{ $a->name }}</option>
           @endforeach
         </select>
       </div>
       <div class="form-group required col-xs-12 col-sm-6">
        <label for="exampleInputPassword1" class='control-label'>Số lượng</label>
        <input type="number" class="form-control" id="quantity" name= "quantity" min=0 required>
      </div>
      <div class="form-group required col-xs-12 col-sm-6">
        <label for="exampleInputPassword1" class='control-label'>Lương</label>
        <input type="number" class="form-control" id="salary" name="salary" min=0 required>
      </div>
      <div class="form-group required col-xs-12 col-sm-4">
        <label for="exampleInputPassword1" class='control-label'>Giới tính</label>
        <select class="form-control" id="gender" name="gender"required>
          <option value="0">Không yêu cầu</option>
          <option value="1">Nam</option>
          <option value="2">Nữ</option>

        </select>
      </div>
      <div class="form-group required col-xs-12 col-sm-4">
        <label for="exampleInputPassword1" class='control-label'>Tuổi</label>
        <input type="number" class="form-control" id="age" name="age" min=18 required>
      </div>
      <div class="form-group required col-xs-12 col-sm-4">
        <label for="exampleInputPassword1" class='control-label'>Hạn đăng kí</label>
        <input type="date" class="form-control" id="date" name="date" required>
      </div>

      <div class="form-group required col-xs-12 col-md-4">
        <label for="exampleInputPassword1" class='control-label'>Chức vụ</label>
        <input type="text" class="form-control" id="position" name="position" required>
      </div>
      <div class="form-group required col-xs-12 col-md-4">
        <label for="exampleInputPassword1" class='control-label'>Kinh nghiệm</label>
        <input type="text" class="form-control" id="experience" name="experience" required>
      </div>

      <div class="form-group required col-xs-12 col-md-4">
        <label for="exampleInputPassword1" class='control-label'>Bằng cấp</label>
        <input type="text" class="form-control" id="education" name="education" required>
      </div>

      <div class="form-group required col-xs-12">
        <label for="exampleTextarea" class='control-label'>Mô tả chung</label>
        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
      </div>
      <div class="form-group required col-xs-12">
        <label for="exampleTextarea" class='control-label'>Mô tả chi tiết</label>
        <textarea class="form-control" id="detail" name="detail" rows="3" required></textarea>
      </div>
      <div class="form-group required col-xs-12">
        <label for="exampleTextarea" class='control-label'>Quyền lợi</label>
        <textarea class="form-control" id="benefit" name="benefit" rows="3" required></textarea>
      </div>
      <div class="form-group required col-xs-12">
        <label for="exampleTextarea" class='control-label'>Yêu cầu khác</label>
        <textarea class="form-control" id="other_requirement" name="other_requirement" rows="3" required></textarea>
      </div>
      <div class="col-xs-12 margin-bottom50-top30" >
       <button type="reset" class="btn btn-danger">Làm mới</button>
       <button type="button" class="btn btn-success" id="button_add_job">Đăng tin</button>
     </div>

   </form>
 </div>
 <div class="col col-md-2"></div>

</div>
</div>   

<!-- Copyright Start  -->
<div id="copyright">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="site-info text-center">

        </div>   
      </div>
    </div>
  </div>
</div>
<!-- Copyright End -->

</footer>
<!-- Footer Section End -->  

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
<script type="text/javascript" src="user_assets/js/froala_editor.min.js"></script>
<script type="text/javascript" src="user_assets/js/fullscreen.min.js"></script>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>

<script>
  CKEDITOR.replace( 'detail' );
  CKEDITOR.replace( 'benefit' );
  CKEDITOR.replace( 'other_requirement' );
  $(document).ready(function() {

    $('#button_add_job').click(function(event) {
      /* Act on the event */

      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
      var formData = new FormData();
      formData.append("title",$("#title").val());
      formData.append("category_id",$("#category_id").val());
      formData.append("address_id",$("#address_id").val());
      formData.append("quantity",$("#quantity").val());
      formData.append("salary",$("#salary").val());
      formData.append("gender",$("#gender").val());
      formData.append("age",$("#age").val());
      formData.append("date",$("#date").val());
      formData.append("position",$("#position").val());
      formData.append("experience",$("#experience").val());
      formData.append("education",$("#education").val());
      formData.append("description",$("#description").val());
      formData.append("detail",CKEDITOR.instances['detail'].getData());
      formData.append("other_requirement",CKEDITOR.instances['other_requirement'].getData());
      formData.append("benefit",CKEDITOR.instances['benefit'].getData());
      $.ajax({
        'url': '/add-job',
        'type': 'post',
        'data': formData,
        processData : false,
        contentType : false,
        success:function(data){
          if(data.error == false){
            $('#alert_success').show();
            $('#alert_danger').hide();
          }
          else{
          }
        },

        error:function(data){
         $('#alert_danger').show();
         $('#alert_success').hide();
       },
     })
    });  
  })

</script>

</body>
</html>