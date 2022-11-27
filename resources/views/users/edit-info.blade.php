<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chỉnh sửa thông tin</title>
    <base href="{{asset('')}}">


    {{-- <link rel="icon" type="image/vnd.microsoft.icon" href="http://vevs.website/vgw09602_awsoo_com/app/web/upload/medium/favicon-346.ico">
    <link rel="stylesheet" href="http://vevs.website/vgw09602_awsoo_com/core/third-party/flexslider/2.7.0/flexslider.css">
    <link rel="stylesheet" href="http://vevs.website/vgw09602_awsoo_com/core/third-party/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://vevs.website/vgw09602_awsoo_com/templates/template_1/css/style.min.css">
    <link rel="stylesheet" href="http://vevs.website/vgw09602_awsoo_com/templates/template_1/css/themes/theme1.min.css"> --}}
    <link rel="stylesheet" href="user_assets/css/signup.css" type="text/css">

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
    <script src="user_assets/js/jquery-min.js"></script>
    <script src="user_assets/js/bootstrap.min.js"></script>
    <script src="user_assets/js/ajax/signup.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>
<body>
    <!-- Page Header Start -->
    <div class="page-header" style="background: url(user_assets/img/banner1.jpg);">
        <div class="container">
            <div class="row">         
                <div class="col-md-12">
                    <div class="breadcrumb-wrapper">
                        <h2 class="product-title">Chỉnh sửa thông tin</h2>
                        <ol class="breadcrumb">
                            <li><a href="{{ route('home') }}"><i class="ti-home"></i> Trang chủ</a></li>
                            <li class="current">Chỉnh sửa thông tin</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->   
    <div class="container margin-top-30">
        <div class="row">
            <div class="col-md-12">
                <!--thông báo-->
                <h1 class="entry-title text-center"><span>Chỉnh sửa thông tin</span> </h1>
                <hr>
                <form class="form-horizontal" name="signup" id="signup" >
                    <div class="form-group">
                        @if (Auth::user()->role_id == 3)
                        <label class="control-label col-md-3">
                            Trạng thái tìm việc
                            <span class="text-danger">*</span>
                        </label>
                        <div class="col-md-9">
                            <div class="d-flex" style="padding-top: 7px">
                                <label style="margin-right: 10px" class="cur-pointer">
                                    <input name="status" type="radio" value="1" @if (Auth::user()->status == 1) checked @endif>
                                    <span>Đã bật</span>
                                </label>
                                <label class="cur-pointer">
                                    <input name="status" type="radio" value="0" @if (Auth::user()->status == 0) checked @endif>
                                    <span>Đã tắt</span>
                                </label>
                            </div>    
                        </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">Loại tài khoản <span class="text-danger">*</span></label>
                        <div class="col-md-8 col-sm-9">
                            <div class="d-flex" style="padding-top: 7px">
                                <label style="margin-right: 10px" class="cur-pointer">
                                    <input class="role_type" name="role" type="radio" value="2" @if (Auth::user()->role_id == 2) checked @endif>
                                    <span>Nhà tuyển dụng </span>
                                </label>
                                <label class="cur-pointer">
                                    <input class="role_type" name="role" type="radio" value="3" @if (Auth::user()->role_id == 3) checked @endif>
                                    <span>Người tìm việc </span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">Họ và tên<span class="text-danger">*</span></label>
                        <div class="col-md-8 col-sm-9">
                            <input type="text" class="form-control" name="mem_name" id="mem_name" placeholder="Nhập họ tên của bạn" value="{{ Auth::user()->name }}" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">Email<span class="text-danger">*</span></label>
                        <div class="col-md-8 col-sm-9">
                            <input type="email" class="form-control" name="emailid" id="emailid" placeholder="Nhập địa chỉ email của bạn" value="{{ Auth::user()->email }}" required readonly>
                            <small style="float: left"> Địa chỉ email của bạn được sử dụng để đảm bảo tính bảo mật và khôi phục tài khoản của bạn. </small> 
                        </div>
                    </div>
                    <div id="profile">
                        <h3 class="mb-2 text-center">Thông tin hồ sơ</h3>
                        <div class="form-group">
                            <label class="control-label col-md-3">Ngành nghề<span class="text-danger">*</span></label>
                            <div class="col-md-8 col-sm-9">
                                <select name="category_id" class="form-control" id="">
                                    <option value="0">Chọn ngành nghề</option>
                                    @foreach ($listCategory as $category)
                                    <option value="{{ $category->id }}" 
                                        @if (isset(Auth::user()->profile))
                                        {{ Auth::user()->profile->category_id == $category->id ? 'selected' : '' }}
                                        @endif
                                        >{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3">Địa điểm<span class="text-danger">*</span></label>
                            <div class="col-md-8 col-sm-9">
                                <select name="address_id" class="form-control" id="">
                                    <option value="0">Chọn địa điểm</option>
                                    @foreach ($listAddress as $address)
                                    <option value="{{ $address->id }}" 
                                        @if (isset(Auth::user()->profile))
                                        {{ Auth::user()->profile->address_id == $address->id ? 'selected' : '' }}
                                        @endif
                                        >{{ $address->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3">Số năm kinh nghiệm làm việc<span class="text-danger">*</span></label>
                            <div class="col-md-8 col-sm-9">
                                <input type="text" class="form-control" name="experience" id="" placeholder="Số năm kinh nghiệm làm việc" 
                                @if (isset(Auth::user()->profile)) 
                                value="{{ Auth::user()->profile->experience }}" 
                                @endif 
                                required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3">Bằng cấp<span class="text-danger">*</span></label>
                            <div class="col-md-8 col-sm-9">
                                <input type="text" class="form-control" name="education" id="" placeholder="Bằng cấp" 
                                @if (isset(Auth::user()->profile))
                                value="{{ Auth::user()->profile->education }}"
                                @endif
                                required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3">Giới tính<span class="text-danger">*</span></label>
                            <div class="col-md-8 col-sm-9">
                                <input type="radio" name="sex" id="" value="Nam" required 
                                @if (isset(Auth::user()->profile))
                                {{ Auth::user()->profile->sex === "Nam" ? 'checked' : '' }}
                                @endif
                                > Nam
                                <input type="radio" name="sex" id="" value="Nữ" required 
                                @if (isset(Auth::user()->profile))
                                {{ Auth::user()->profile->sex === "Nữ" ? 'checked' : '' }}
                                @endif
                                > Nữ
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3">Tuổi<span class="text-danger">*</span></label>
                            <div class="col-md-8 col-sm-9">
                                <input type="text" class="form-control" name="age" id="" placeholder="Tuổi" 
                                @if (isset(Auth::user()->profile))
                                value="{{ Auth::user()->profile->age }}"
                                @endif
                                required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group" id="select_list_company" @if (Auth::user()->role_id == 2) style="display: block" @endif>
                        <label class="control-label col-md-3">Công ty<span class="text-danger">*</span></label>
                        <div class="col-md-6">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <select name="company_id" class="form-control" id="company_id" style="padding-left: 35px;">
                                <option value="0">------------------Công ty----------------</option>
                                @foreach ($listCompany as $c)
                                <option value="{{ $c->id }}" @if (Auth::user()->company_id == $c->id) selected @endif>{{ $c->name }}</option>
                                @endforeach
                            </select>
                        </div>  
                        <div class="col-md-1">
                            <button type="button" class="btn btn-primary margin-top-5" data-toggle="modal" href='#modal-id'>Thêm mới</button>
                        </div>
                    </div>
                <div class="form-group text-center">
                    <input name="Reset" type="reset" value="Làm mới" class="btn btn-danger margin-top-5" >
                    <input name="update" type="button" value="Cập nhật" class="btn btn-success margin-top-5" id="update" >
                </div>
                </form>
            </div>

            <div class="modal fade" id="modal-id">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h2 class="modal-title">Thêm mới công ty</h2>
                            <div class="alert alert-success " id="alert_success_company" role="alert" >
                                Đăng kí thành công. 
                            </div>
                            <div class="alert alert-danger " id="alert_danger_company" role="alert">
                                Đăng kí thất bại. <span id="error_company"></span>. 
                            </div>
                        </div>
                        <div class="modal-body">
                            <form action=""  role="form" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="">Tên công ty</label>
                                    <input type="text" class="form-control" id="nameCompany" placeholder="Nhập tên công ty" >

                                    <label for="">Link công ty</label>
                                    <input type="text" class="form-control" id="linkCompany" placeholder="Nhập link web công ty">

                                    <label for="">Logo</label>
                                    <input type="file" class="form-control" id="logoCompany" name="logo" ><br>

                                    <label for="">Địa chỉ</label>
                                    <select name="address" id="addressCompany" class="form-control" >
                                        <option value="">----------Chọn địa điểm---------</option>
                                        @foreach ($listAddress as $a)
                                        <option value="{{ $a->id }}">{{ $a->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                            <button type="button" class="btn btn-primary" id="signup_company">Lưu thông tin</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script type="text/javascript" src="user_assets/js/jquery-min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    $(document).ready(function() {
        // console.log($('input[name="role"]:checked').val());
        if ($('input[name="role"]:checked').val() == 2) {
            $('#select_list_company').show();
            $('#profile').hide();
        }
        else {
            $('#select_list_company').hide();
            $('#profile').show();
        }

        $('.role_type').click(function(){
            if ($(this).is(':checked')&& $(this).val() == 2){
                $('#select_list_company').show();
                $('#profile').hide();
            } else{
                $('#select_list_company').hide();
                $('#profile').show();
            }
        });

        $('#signup_company').click(function(event) {
            /* Act on the event */
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var formData = new FormData();
            formData.append("nameCompany",$("#nameCompany").val());
            formData.append("linkCompany",$("#linkCompany").val());
            formData.append("addressCompany",$("#addressCompany").val());
            formData.append("logoCompany",document.getElementById("logoCompany").files[0]);
            $.ajax({
                'url': '/signup-company',
                'type': 'post',
                'data': formData,
                processData : false,
                contentType : false,
                success:function(data){
                    if(data.error == true){
                        $('#alert_success_company').hide();
                        $('#alert_danger_company').show();
                        if(data.message.nameCompany != undefined){
                            $('#error_company').text(data.message.nameCompany[0]);
                        }
                        else if (data.message.linkCompany != undefined) {
                            $('#error_company').text(data.message.linkCompany[0]);
                        }
                        else if(data.message.logoCompany != undefined){
                            $('#error_company').text(data.message.logoCompany[0]);
                        }
                        else if (data.message.addressCompany != undefined) {
                            $('#error_company').text(data.message.addressCompany[0]);
                        }
                    }
                    else{
                        $('#alert_success_company').show();
                        $('#alert_danger_company').hide();
                        $("#list_company").append('<option value="'+data.company.id+'">'+data.company.name+'</option>');

                    }

                }
            })
        }); 

        $('#update').click(function(event) {
            /* Act on the event */
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                'url':'/update-info',
                'type':'PUT',
                'data':{
                    'role':$('[name="role"]:radio:checked').val(),
                    'status':$('[name="status"]:radio:checked').val(),
                    'fullName':$('#mem_name').val(),
                    'email':$('#emailid').val(),
                    'company_id':$('#company_id').val(),
                    // 'experience':$('#experience').val(),
                    // 'career':$('#career').val(),

                    'category_id':$('select[name="category_id"]').val(),
                    'address_id':$('select[name="address_id"]').val(),
                    'experience':$('input[name="experience"]').val(),
                    'education':$('input[name="education"]').val(),
                    'sex':$('input[name="sex"]:checked').val(),
                    'age':$('input[name="age"]').val(),
                },
                success:function(data){
                    if (data.error == true) {
                        var error;
                        if(data.message.fullName != undefined){
                            error = data.message.fullName[0];
                        }
                        if(data.message.category_id != undefined){
                          error = data.message.category_id[0];
                        }
                        if(data.message.address_id != undefined){
                          error = data.message.address_id[0];
                        }
                        if(data.message.experience != undefined){
                          error = data.message.experience[0];
                        }
                        if(data.message.education != undefined){
                          error = data.message.education[0];
                        }
                        if(data.message.age != undefined){
                          error = data.message.age[0];
                        }
                        else if (data.message.password != undefined) {
                            error = data.message.password[0];
                        }
                        else if (data.message.cpassword != undefined) {
                            error = data.message.cpassword[0];
                        }
                        else if (data.message.errorEmail != undefined) {
                            error = data.message.errorEmail[0];
                        }
                        else if(data.message.errorCompany != undefined){
                            error = data.message.errorCompany[0];
                        }

                        swal({
                            title: "Thông báo!",
                            text: "Chỉnh sửa thông tin thất bại. " + error,
                            icon: "error",
                            button: "Đóng",
                        });
                    } 
                    else {
                        swal({
                            title: "Thông báo!",
                            text: "Chỉnh sửa thông tin thành công.",
                            icon: "success",
                            button: "Xác nhận",
                        });
                    }
                }
            });
        }); 
    });
</script>
</body>
</html>