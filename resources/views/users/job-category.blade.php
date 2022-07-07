@extends('users.layout.layout')
@section('content')
<!-- Find Job Section Start -->


<section class="find-job section">
	<div class="container">
		<h2 class="section-title">{{ $category->name }}</h2>
		@foreach ($jobs as $value)
		<div class="row">
			<div class="col-md-12">
				<div class="job-list">
					<div class="thumb">
						<a href="job-details.html">
							<img src="{{ $value->company->logo }}" alt="" class="image-100-100">
						</a>
					</div>
					<div class="job-list-content">
						<h4>
							<a href="job-detail/{{ $value->job_detail_id }}">{{ $value->title }}</a>
						</h4>
						<p>{{ $value->description }}
						</p>
						<div class="job-tag">
							<div class="pull-left">
								<div class="meta-tag">
									<span>
										<a href="{{ $value->company->link }}" target="_blank">
											<i class="ti-briefcase"></i>{{ $value->company->name }}</a>
										</span>
										<span>
											<i class="ti-location-pin"></i>{{ $value->address->name }}</span>
											<span>
												<i class="ti-user"></i>{{ $value->user->name }}</span>
											</div>
										</div>
										<div class="pull-right">
											<div class="icon" id="{{ $value->id }}" 
												@if (Auth::check())
												@foreach (Auth::user()->jobFavorite as $favorite)
												@if ($favorite->id == $value->id)
												style="background-color:red;color:white" 
												@endif
												@endforeach
												@endif
												>
												<i class="ti-heart"></i>
											</div>
											<a href="job-detail/{{ $value->id }}" class="btn btn-common btn-rm">Xem chi tiết</a>
										</div>
									</div>
								</div>
							</div>

							@endforeach



							<div class="col-md-12">
								<div class="showing pull-left">
									<a href="#">Hiện thị
										<span>{{ $jobs->firstItem() }} - {{   $jobs->lastItem() }}</span> trong tổng số {{ $jobs->total() }} tin</a>
									</div>
									<div class="pagination pull-right">
										{!! $jobs->links() !!}
									</div>
								</div>
							</div>
						</div>
					</section>
					<!-- Find Job Section End -->
					<script type="text/javascript" src="user_assets/js/jquery-min.js"></script>
					<script>
						$(document).ready(function() {
							$('.icon').click(function(event) {
								/* Act on the event */
								$.ajaxSetup({
									headers: {
										'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
									}
								});
								$.ajax({
									'url': '/favorite',
									'type': 'post',
									'data': {'idJob': $(this).attr('id')},
									success:function(data){
										if(data.error==true){
											window.location="/login";
										}
										else{
											if(data.message == true){
												$('#'+data.idJob).css({'background-color':'red','color':'white'});
											}
											else{
												$('#'+data.idJob).css({'background-color':'#f1f1f1','color':'#FF4F57'});
											}
										}
									}
								})
							});  
						});
					</script>
					@endsection
