<!-- Header Section Start -->
<div class="header">
    @if (count($errors) > 0)
    @foreach($errors->all() as $error)
    <script>
        alert('{{$error}}');
    </script>
    @endforeach
    @endif

    @if (session('notification'))
    <script>
        alert('{{session('notification')}}');
    </script>
    @endif
    <!-- Start intro section -->
    <section id="intro" class="section-intro">
        <div class="logo-menu">
            <nav class="navbar navbar-default" role="navigation" data-spy="affix" data-offset-top="50">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand logo" href="{{ route('home') }}">
                            <img src="user_assets/img/logo.png" alt="">
                        </a>
                    </div>

                    <div class="collapse navbar-collapse" id="navbar">
                        <!-- Start Navigation List -->
                        <ul class="nav navbar-nav">
                            <li>
                                <a @if(isset($active_home)) class="active" @endif href="{{ route('home') }}">
                                    Trang chủ
                                    <i class="fa fa-angle"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('showJob') }}" @if(isset($active_job)) class="active" @endif>
                                    Công việc
                                    <i class="fa fa-angle"></i>
                                </a>
                                <ul class="rd-menu rd-navbar-megamenu" style="width: 900px; display: flex; flex-flow: row wrap;">
                                    @if(isset($listCategory))
                                    @foreach ($listCategory as $value)
                                    {{-- expr --}}
                                    <li class="rd-megamenu-item col-xs-3" style="margin-bottom: 10px">
                                        <h6 class="rd-megamenu-title"><a href="/category/{{$value->id}}">{{ $value->name }}</a></h6>
                                    </li>
                                    @endforeach
                                    @endif
                                </ul>
                            </li>
                            <!-- <li>
                            <a href="about.html">
                            About Us
                            <i class="fa fa-angle"></i>
                            </a>
                            </li>
                            <li>
                            <a href="contact.html">
                            Contact Us
                            <i class="fa fa-angle"></i>
                            </a>
                            </li> -->
                        </ul>



                        <ul class="nav navbar-nav navbar-right float-right">
                            @if(Auth::check())
                            @if(Auth::user()->role_id == 2)
                            <li class="left">
                                <a href="{{ route('form-post-job') }}">
                                    <i class="ti-pencil-alt"></i>Đăng tin
                                </a>
                            </li>
                            @endif
                            <li >
                                <a href="">
                                    {{Auth::user()->name}}<i class="fa fa-angle-down" ></i>
                                </a> 
                                <ul class="dropdown">
                                    <li>
                                        <a href="{{ route('reset-password') }}">
                                            Đổi mật khẩu
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('edit-info') }}">
                                            Đổi thông tin
                                        </a>
                                    </li>
                                    @if (Auth::user()->role_id == 2)

                                    <li>
                                        <a href="{{ route('my-recruit') }}">
                                            Bài đăng
                                        </a>
                                    </li>
                                    @endif
                                    @if(Auth::user()->role_id == 3)
                                    <li>
                                        <a href="{{ route('list-favorite') }}">
                                            Yêu thích
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('list-job-applied') }}">
                                            CV ứng tuyển
                                        </a>
                                    </li>
                                    @endif
                                    @if (Auth::user()->role_id == 1)
                                    <li>
                                        <a href="{{ route('admin.users') }}">
                                            Trang quản lí
                                        </a>
                                    </li>
                                    @endif
                                    <li>
                                        <a href="{{ route('logout') }} ">
                                            Đăng xuất
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            @else
                            <li class="right">
                                <a href="{{route('login')}}">
                                    <i class="ti-lock"></i>Đăng nhập</a>
                                </li>
                                <li class="right">
                                    <a href="{{route('showSignup')}}">
                                        <i class="ti-slice"></i>Đăng ký</a>
                                    </li>
                                    @endif
                                </ul>


                                @if(Auth::check())
                                @if(Auth::user()->role_id == 2)
                                <div class="dropdown noti">
                                    <button id="btn-noti" class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
                                        <i class="fa fa-bell-o" aria-hidden="true"></i>
                                        @if ($notifications->count() > 0)
                                        <span id="number-noti">{{ $notifications->count() }}</span>
                                        @endif
                                    </button>
                                    @if ($notifications->count() > 0)
                                    <ul class="dropdown-menu" style="width: 350px">
                                        @foreach ($notifications as $noti)
                                        <li>
                                            <a href="/user-apply/{{ $noti->data['job_id'] }}" class="text-white">
                                                {{ $noti->data['message'] }}
                                            </a>
                                        </li>
                                        @endforeach
                                    </ul>
                                    @endif
                                </div>
                                @endif
                                @endif


                            </div>
                        </div>
                    </nav>
                </div>
                <!-- Header Section End -->

                <div class="search-container">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h1>Tìm công việc phù hợp với bạn</h1>
                                <br>
                                @if(isset($job))
                                <h2>{{ $job->total() }} công việc đang chờ bạn</h2>
                                @else
                                <h2>Nhiều công việc đang chờ bạn!</h2>
                                @endif
                                <div class="content">
                                    <form method="get" action="{{ route('searchJob') }}">
                                        <div class="row mb-2">
                                            <div class="col-md-1 col-sm-1">

                                            </div>
                                            <div class="col-md-3 col-sm-3">
                                                <div class="form-group">
                                                    <input class="form-control" type="text" placeholder="Tên công ty" name="company" @if (isset($companySearch))
                                                    value="{{ $companySearch }}" 
                                                    @endif>
                                                    <i class="ti-briefcase"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3">
                                                <div class="form-group">
                                                    <i class="ti-list" name=""></i>
                                                    <select name="category" id="category" class="form-control">
                                                        <option value="">Chọn ngành nghề</option>
                                                        @foreach ($listCategory as $category)
                                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                        @endforeach
                                                    </select>

                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3">
                                                <div class="form-group">
                                                    <i class="ti-location-pin"></i>
                                                    <select name="address" id="address" class="form-control">
                                                        <option value="">Chọn địa điểm</option>
                                                        @foreach ($listAddress as $address)
                                                        {{-- expr --}}
                                                        <option value="{{ $address->id }}">{{ $address->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-1 col-sm-1">

                                            </div>
                                            <div class="col-md-2 col-sm-3">
                                                <button type="submit" class="btn btn-search-icon">
                                                    <i class="ti-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2 col-sm-2">

                                            </div>
                                            <div class="col-md-3 col-sm-3">
                                                <div class="form-group">
                                                    <i class="ti-list" name=""></i>
                                                    <select name="salary" id="salary" class="form-control">
                                                        <option value="">Chọn mức lương</option>
                                                        <option value="7 – 10 triệu">7 – 10 triệu</option>
                                                        <option value="10 – 15 triệu">10 – 15 triệu</option>
                                                        <option value="15 – 20 triệu">15 – 20 triệu</option>
                                                        <option value="> 20triệu">> 20triệu</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-1 col-sm-1">

                                            </div>
                                            <div class="col-md-3 col-sm-3">
                                                <div class="form-group">
                                                    <i class="ti-list" name=""></i>
                                                    <select name="experience" id="experience" class="form-control">
                                                        <option value="">Chọn kinh nghiệm</option>
                                                        <option value="Không yêu cầu kinh nghiệm">Không yêu cầu kinh nghiệm</option>
                                                        <option value="1 năm">1 năm</option>
                                                        <option value="2 năm">2 năm</option>
                                                        <option value="3 năm">3 năm</option>
                                                        <option value="4 năm">4 năm</option>
                                                        <option value="5 năm">5 năm</option>
                                                        <option value="> 5 năm">> 5 năm</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-2">

                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end intro section -->
        </div>
        <script type="text/javascript" src="user_assets/js/jquery-min.js"></script>
        <!-- JS file -->
        <script src="user_assets/js/jquery.easy-autocomplete.min.js"></script> 

        <script type="text/javascript" src="user_assets/js/ajax/search.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#btn-noti').click(function(event) {
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        'url': '/mark-as-read',
                        'type': 'post',
                        success:function(data){
                            $(`#number-noti`).remove();
                        },

                        error:function(data){
                        },
                    })
                });
            })
        </script>
