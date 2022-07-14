@extends('users.layout.layout')

@section('content')
    <!-- Find Job Section Start -->
    <section class="find-job section">
        <div class="container">
            <h2 class="section-title">Công việc mới nhất</h2>
            @foreach ($jobSummary as $value)
                @include('users.includes.job-item', ['value' => $value])
            @endforeach
        </div>
        @if (isset($jobSuggests) && count($jobSuggests) > 0)
            <div class="container">
                <h2 class="section-title">Công việc gợi ý dành cho bạn</h2>
                @foreach ($jobSuggests as $value)
                    @include('users.includes.job-item', ['value' => $value])
                @endforeach
            </div>
        @endif
    </section>
    <!-- Find Job Section End -->
    <!-- Testimonial Section Start -->
    <section id="testimonial" class="section">
        <div class="container">
            <div class="row">
                <div class="touch-slider" class="owl-carousel owl-theme">
                    <div class="item text-center">
                        <img class="img-member" src="user_assets/img/clients/viet_anh.jpg" alt="">
                        <div class="client-info">
                            <h2 class="client-name">Đào Đức Thiện <br>
                                <span>(Shadow Monarch)</span>
                            </h2>
                        </div>
                        <p>
                            <i class="fa fa-quote-left quote-left"></i> A have nice day!!!
                            <i class="fa fa-quote-right quote-right"></i>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


</section>
<!-- Testimonial Section End -->

<!-- Clients Section -->
<section class="clients section">
    <div class="container">
        <h2 class="section-title">
            Công ty liên kết
        </h2>
        <div class="row">
            <div id="clients-scroller">
                <a target="_blank" href="https://vingroup.net/" class="items">
                    <img src="user_assets/img/clients/img1.png" alt="">
                </a>
                <a target="_blank" href="https://fpt.com.vn/vi" class="items">
                    <img src="user_assets/img/clients/img2.png" alt="">
                </a>
                <a target="_blank" href="https://www.masangroup.com/vi" class="items">
                    <img src="user_assets/img/clients/img3.png" alt="">
                </a>
                <a target="_blank" href="https://www.samsung.com/vn/about-us/company-info/" class="items">
                    <img src="user_assets/img/clients/img4.png" alt="">
                </a>
                <a target="_blank" href="https://viettel.com.vn/vi/" class="items">
                    <img src="user_assets/img/clients/img5.png" alt="">
                </a>
                <a target="_blank" href="https://unikgroup.vn/" class="items">
                    <img src="user_assets/img/clients/img6.png" alt="">
                </a>
            </div>
        </div>
    </div>
</section>
<!-- Client Section End -->

<!-- Counter Section Start -->
<section id="counter">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-xs-12">
                <div class="counting">
                    <div class="icon">
                        <i class="ti-briefcase"></i>
                    </div>
                    <div class="desc">
                        <h2>Công việc</h2>
                        <h1 class="counter">{{ $cJob }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-xs-12">
                <div class="counting">
                    <div class="icon">
                        <i class="ti-user"></i>
                    </div>
                    <div class="desc">
                        <h2>Thành viên</h2>
                        <h1 class="counter" id="member">{{ $cmember }}</h1>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-xs-12">
                <div class="counting">
                    <div class="icon">
                        <i class="ti-heart"></i>
                    </div>
                    <div class="desc">
                        <h2>Công ty</h2>
                        <h1 class="counter">{{ $ccompany }}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Counter Section End -->
<script type="text/javascript" src="user_assets/js/jquery-min.js"></script>
<script>
    $(document).ready(function () {
        $('.icon').click(function (event) {
            /* Act on the event */
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                'url': '/favorite',
                'type': 'post',
                'data': {
                    'idJob': $(this).attr('id')
                },
                success: function (data) {
                    if (data.error == true) {
                        window.location = "/login";
                    } else {
                        if (data.message == true) {
                            $('#' + data.idJob).css({
                                'background-color': 'red',
                                'color': 'white'
                            });
                        } else {
                            $('#' + data.idJob).css({
                                'background-color': '#f1f1f1',
                                'color': '#FF4F57'
                            });
                        }
                    }
                }
            })
        });
    });

</script>
@endsection
